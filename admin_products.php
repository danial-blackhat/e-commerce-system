<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: admin_login_form.php');
    exit;
}

// Database connection
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'shop';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $description = isset($_POST['description']) ? $_POST['description'] : null;
    $price = isset($_POST['price']) ? $_POST['price'] : null;

    if (isset($_POST['action'])) {
        if ($_POST['action'] === 'add' && $name && $description && $price) {
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $imageName = basename($_FILES['image']['name']);
                $imagePath = 'images/' . $imageName;
                move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);

                $stmt = $conn->prepare("INSERT INTO products (name, description, price, image) VALUES (?, ?, ?, ?)");
                if ($stmt === false) {
                    die('Prepare failed: ' . htmlspecialchars($conn->error));
                }
                $stmt->bind_param('ssds', $name, $description, $price, $imagePath);
                $stmt->execute();
                $stmt->close();
            }
        } elseif ($_POST['action'] === 'update') {
            $id = $_POST['id'];
            $imagePath = $_POST['existing_image'];

            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $imageName = basename($_FILES['image']['name']);
                $imagePath = 'images/' . $imageName;
                move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
            }

            $stmt = $conn->prepare("UPDATE products SET name = ?, description = ?, price = ?, image = ? WHERE id = ?");
            if ($stmt === false) {
                die('Prepare failed: ' . htmlspecialchars($conn->error));
            }
            $stmt->bind_param('ssdsi', $name, $description, $price, $imagePath, $id);
            $stmt->execute();
            $stmt->close();

            // Clear the form after update
            header("Location: {$_SERVER['PHP_SELF']}");
            exit;
        } elseif ($_POST['action'] === 'delete') {
            $id = $_POST['id'];

            $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
            if ($stmt === false) {
                die('Prepare failed: ' . htmlspecialchars($conn->error));
            }
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $stmt->close();
        } elseif ($_POST['action'] === 'update_quantity') {
            $id = $_POST['id'];
            $quantity_stock = $_POST['quantity_stock'];

            $stmt = $conn->prepare("UPDATE products SET quantity_stock = ? WHERE id = ?");
            if ($stmt === false) {
                die('Prepare failed: ' . htmlspecialchars($conn->error));
            }
            $stmt->bind_param('ii', $quantity_stock, $id);
            $stmt->execute();
            $stmt->close();
        }
    }
}

// Search functionality
$search_query = '';
if (isset($_GET['search'])) {
    $search_query = $_GET['search'];
}

$sql = "SELECT * FROM products WHERE name LIKE ?";
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die('Prepare failed: ' . htmlspecialchars($conn->error));
}
$search_term = "%" . $search_query . "%";
$stmt->bind_param('s', $search_term);
$stmt->execute();
$result = $stmt->get_result();
$products = $result->fetch_all(MYSQLI_ASSOC);

// Show product data for editing
$product_to_edit = null;
if (isset($_GET['edit_id'])) {
    $product_id = $_GET['edit_id'];
    $stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($conn->error));
    }
    $stmt->bind_param('i', $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $product_to_edit = $result->fetch_assoc();
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="adminproducts.css"> <!-- Link to the external CSS file -->
    </style>
    <script>
        function confirmDelete(event) {
            if (!confirm("Are you sure you want to delete this product?")) {
                event.preventDefault();
            }
        }

        function autocomplete(input, suggestions) {
            let currentFocus;
            input.addEventListener("input", function() {
                const val = this.value;
                closeAllLists();
                if (!val) return false;
                currentFocus = -1;
                const suggestionBox = document.createElement("div");
                suggestionBox.setAttribute("class", "autocomplete-suggestions");
                this.parentNode.appendChild(suggestionBox);
                fetch(`search_products.php?query=${val}`)
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(item => {
                            const suggestionItem = document.createElement("div");
                            suggestionItem.setAttribute("class", "autocomplete-suggestion");
                            suggestionItem.innerHTML = item.name;
                            suggestionItem.addEventListener("click", function() {
                                input.value = this.innerHTML;
                                closeAllLists();
                            });
                            suggestionBox.appendChild(suggestionItem);
                        });
                    });
            });

            input.addEventListener("keydown", function(e) {
                let suggestionBox = document.querySelector(".autocomplete-suggestions");
                if (suggestionBox) suggestionBox = suggestionBox.getElementsByTagName("div");
                if (e.keyCode == 40) {
                    currentFocus++;
                    addActive(suggestionBox);
                } else if (e.keyCode == 38) {
                    currentFocus--;
                    addActive(suggestionBox);
                } else if (e.keyCode == 13) {
                    e.preventDefault();
                    if (currentFocus > -1) {
                        if (suggestionBox) suggestionBox[currentFocus].click();
                    }
                }
            });

            function addActive(suggestionBox) {
                if (!suggestionBox) return false;
                removeActive(suggestionBox);
                if (currentFocus >= suggestionBox.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = suggestionBox.length - 1;
                suggestionBox[currentFocus].classList.add("autocomplete-active");
            }

            function removeActive(suggestionBox) {
                for (let i = 0; i < suggestionBox.length; i++) {
                    suggestionBox[i].classList.remove("autocomplete-active");
                }
            }

            function closeAllLists(elmnt) {
                const suggestionBoxes = document.getElementsByClassName("autocomplete-suggestions");
                for (let i = 0; i < suggestionBoxes.length; i++) {
                    if (elmnt != suggestionBoxes[i] && elmnt != input) {
                        suggestionBoxes[i].parentNode.removeChild(suggestionBoxes[i]);
                    }
                }
            }

            document.addEventListener("click", function(e) {
                closeAllLists(e.target);
            });
        }

        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.querySelector("input[name='search']");
            autocomplete(searchInput);
        });
    </script>
</head>
<body>

<div class="header">
    <h2>Welcome, <?= htmlspecialchars($_SESSION['admin']); ?>!</h2>
    <div class="button-box">
        <a href="logout.php" class="btn btn-grey">Logout</a>
        <a href="view_order.php" class="btn btn-grey">View Orders</a>
    </div>
</div>

<div class="container">
    <h1 class="text-center">Manage Products</h1>

    <div class="search-box">
        <form method="GET">
            <input type="text" name="search" class="form-control" value="<?= htmlspecialchars($search_query) ?>" placeholder="Search products by name">
            <button type="submit" class="btn btn-primary mt-2">Search</button>
        </form>
    </div>

    <?php if ($search_query): ?>
        <!-- Show the "Back to Manage Products" button if search results are shown -->
        <div class="text-center">
            <a href="admin_products.php" class="btn btn-secondary mt-3">Back to Manage Products</a>
        </div>
    <?php endif; ?>

    <?php if ($product_to_edit): ?>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" value="<?= $product_to_edit['id'] ?>">
            <input type="hidden" name="existing_image" value="<?= $product_to_edit['image'] ?>">

            <div class="form-container">
                <div class="mb-3">
                    <label>Product Name</label>
                    <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($product_to_edit['name']) ?>" required>
                </div>
                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" required><?= htmlspecialchars($product_to_edit['description']) ?></textarea>
                </div>
                <div class="mb-3">
                    <label>Price</label>
                    <input type="number" step="0.01" name="price" class="form-control" value="<?= htmlspecialchars($product_to_edit['price']) ?>" required>
                </div>
                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                    <img src="<?= htmlspecialchars($product_to_edit['image']) ?>" alt="Product Image" width="100" />
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    <?php else: ?>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="add">

            <div class="form-container">
                <div class="mb-3">
                    <label>Product Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" required></textarea>
                </div>
                <div class="mb-3">
                    <label>Price</label>
                    <input type="number" step="0.01" name="price" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    <?php endif; ?>

    <table class="table table-bordered mt-4">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th>Actions</th>
            <th>Quantity</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= htmlspecialchars($product['id']) ?></td>
                <td><?= htmlspecialchars($product['name']) ?></td>
                <td><?= htmlspecialchars($product['description']) ?></td>
                <td><?= htmlspecialchars($product['price']) ?></td>
                <td><img src="<?= htmlspecialchars($product['image']) ?>" alt="Product Image"></td>
                <td>
                    <a href="?edit_id=<?= $product['id'] ?>" class="btn btn-success btn-sm btn-edit">Edit</a>
                    <form method="POST" style="display:inline-block;" onsubmit="confirmDelete(event)">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="id" value="<?= $product['id'] ?>">
                        <button type="submit" class="btn btn-danger btn-sm btn-delete">Delete</button>
                    </form>
                </td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="action" value="update_quantity">
                        <input type="hidden" name="id" value="<?= $product['id'] ?>">
                        <input type="number" name="quantity_stock" class="form-control" value="<?= htmlspecialchars($product['quantity_stock']) ?>" required>
                        <button type="submit" class="btn btn-primary btn-sm mt-2">Update Quantity</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>