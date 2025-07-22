<?php
$host = 'localhost';   
$user = 'root';           
$password = '';           
$dbname = 'shop';         

// Create a new MySQLi connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
$session_id = session_id();

// Handle cart actions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'add_to_cart') {
        $product_id = $_POST['product_id'];
        $quantity = (int)$_POST['quantity'];

        // Check stock availability
        $stmt = $conn->prepare("SELECT quantity_stock FROM products WHERE id = ?");
        $stmt->bind_param('i', $product_id);
        $stmt->execute();
        $stmt->bind_result($stock);
        $stmt->fetch();
        $stmt->close();

        if ($stock >= $quantity) {
            $stmt = $conn->prepare("SELECT * FROM cart WHERE session_id = ? AND product_id = ?");
            $stmt->bind_param('si', $session_id, $product_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $cart_item = $result->fetch_assoc();
                $new_quantity = $cart_item['quantity'] + $quantity;
                if ($stock >= $new_quantity) {
                    $stmt = $conn->prepare("UPDATE cart SET quantity = ? WHERE id = ?");
                    $stmt->bind_param('ii', $new_quantity, $cart_item['id']);
                }
            } else {
                $stmt = $conn->prepare("INSERT INTO cart (product_id, quantity, session_id) VALUES (?, ?, ?)");
                $stmt->bind_param('iis', $product_id, $quantity, $session_id);
            }
            $stmt->execute();
            $stmt->close();
        } else {
            echo "<script>alert('Not enough stock available!');</script>";
        }
    } elseif ($_POST['action'] === 'update_cart') {
        $cart_id = $_POST['cart_id'];
        $quantity = (int)$_POST['quantity'];

        // Check stock availability
        $stmt = $conn->prepare("SELECT p.quantity_stock FROM cart c JOIN products p ON c.product_id = p.id WHERE c.id = ?");
        $stmt->bind_param('i', $cart_id);
        $stmt->execute();
        $stmt->bind_result($stock);
        $stmt->fetch();
        $stmt->close();

        if ($stock >= $quantity) {
            $stmt = $conn->prepare("UPDATE cart SET quantity = ? WHERE id = ?");
            $stmt->bind_param('ii', $quantity, $cart_id);
            $stmt->execute();
            $stmt->close();
        } else {
            echo "<script>alert('Not enough stock to update the cart!');</script>";
        }
    } elseif ($_POST['action'] === 'remove_from_cart') {
        $cart_id = $_POST['cart_id'];
        $stmt = $conn->prepare("DELETE FROM cart WHERE id = ?");
        $stmt->bind_param('i', $cart_id);
        $stmt->execute();
        $stmt->close();
    }
}

// Fetch products
$result = $conn->query("SELECT * FROM products");
$products = $result->fetch_all(MYSQLI_ASSOC);

// Fetch cart items
$stmt = $conn->prepare("SELECT c.id as cart_id, p.id, p.name, p.price, p.image, c.quantity FROM cart c JOIN products p ON c.product_id = p.id WHERE c.session_id = ?");
$stmt->bind_param('s', $session_id);
$stmt->execute();
$cart_items = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$stmt->close();

$final_total_price = 0;
foreach ($cart_items as $item) {
    $final_total_price += $item['price'] * $item['quantity'];
}

// Deduct stock after purchase
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'checkout') {
    foreach ($cart_items as $item) {
        $stmt = $conn->prepare("UPDATE products SET quantity_stock = quantity_stock - ? WHERE id = ?");
        $stmt->bind_param('ii', $item['quantity'], $item['id']);
        $stmt->execute();
        $stmt->close();
    }

    // Collect item details for review
    $item_details = [];
    foreach ($cart_items as $item) {
        $item_details[] = [
            'name' => $item['name'],
            'price' => $item['price'],
            'quantity' => $item['quantity'],
            'subtotal' => $item['price'] * $item['quantity']
        ];
    }

    // Encode item details to JSON for use in JavaScript
    $item_details_json = json_encode($item_details);
    echo "<script>
        const itemDetails = $item_details_json;
        // Redirect to review page or handle review details
        window.location.href='checkout.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="assets/img/bhbk_logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="itemlisting.css"> <!-- Link to the external CSS file -->
</head>
<body>
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="index.php" class="logo d-flex align-items-center">
            <h1 class="sitename">BHBK</h1><span>COMPUTER</span>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="index.php">Halaman Utama</a></li>
                <li><a href="about.php">Tentang Kami</a></li>
                <li><a href="services.php">Perkhidmatan</a></li>
                <li><a href="contact.php">Hubungi Kami</a></li>
                <li><a href="item_listing.php" class="active">Item</a></li>
                <li><button class="cart" onclick="toggleCart()">My Cart</button></li>
                <a href="admin_login_form.php">
                    <i class="fa fa-user-shield" aria-hidden="true"></i> Admin
                </a>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>

<main class="main">
    <!-- BACKGROUND ITEM -->
    <div class="page-title dark-background" style="background-image: url(assets/img/bg_item.jpg);">
        <div class="container position-relative">
            <h1 class="sitename">Item</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.php">Halaman Utama</a></li>
                    <li class="current">Item</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container">
        <h1>Our Products</h1>
        <div class="products">
            <?php foreach ($products as $product): ?>
                <div class="product">
                    <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                    <h3><?= htmlspecialchars($product['name']) ?></h3>
                    <p>Price: RM<?= htmlspecialchars($product['price']) ?></p>
                    <p>Description: <?= htmlspecialchars($product['description']) ?></p> <!-- Display the description -->
                    <p>Stock: <?= htmlspecialchars($product['quantity_stock']) ?></p>
                    <form method="POST">
                        <input type="hidden" name="action" value="add_to_cart">
                        <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                        <input type="number" name="quantity" value="1" min="1" max="<?= $product['quantity_stock'] ?>">
                        <button type="submit">Add to Cart</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Cart Modal -->
    <div class="cart-modal" id="cart-modal">
        <div class="cart-content">
            <button class="close-cart" onclick="toggleCart()">Close</button>
            <h2>Your Cart</h2>
            <?php if (count($cart_items) > 0): ?>
                <?php foreach ($cart_items as $item): ?>
                    <div class="cart-item">
                        <span><?= htmlspecialchars($item['name']) ?></span>
                        <span>Price: RM<?= $item['price'] ?></span>
                        <span>Quantity: <?= $item['quantity'] ?></span>
                        <form method="POST">
                            <input type="hidden" name="action" value="remove_from_cart">
                            <input type="hidden" name="cart_id" value="<?= $item['cart_id'] ?>">
                            <button type="submit">Remove</button>
                        </form>
                    </div>
                <?php endforeach; ?>
                <p>Total Price: RM<?= number_format($final_total_price, 2) ?></p>
                <form method="POST">
                    <input type="hidden" name="action" value="checkout">
                    <button type="submit" class="checkout">Checkout</button>
                </form>
            <?php else: ?>
                <p>Your cart is empty.</p>
            <?php endif; ?>
        </div>
    </div>
</main>

<footer id="footer" class="footer dark-background">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span class="sitename">BHBK Komputer</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>NO 1,TINGKAT BAWAH PERSIARAN POKOK SENA,</p>
                    <p> PUSAT PERNIAGAAN POKOK SENA,13220,</p>
                    <p>KEPALA BATAS(S.P.U),PULAU PINANG</p>
                    <p class="mt-3"><strong>Phone:</strong> <span>010-4454658/04-5732998</span></p>
                    <p><strong>Email:</strong> <span>bhbk_enterprise@yahoo.com</span></p>
                </div>
                <div class="social-links d-flex mt-4">
                    <a href="https://www.facebook.com/bhbkcomputer/"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/bhbkcomputer_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="bi bi-instagram"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <ul>
                    <li><a href="index.php">Halaman Utama</a></li>
                    <li><a href="about.php">Tentang Kami</a></li>
                    <li><a href="services.php">Perkhidmatan</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">BHBK COMPUTER</strong> <span>All Rights Reserved</span></p><br>
        <ul>
    </div>
</footer>

<script>
    function toggleCart() {
        const cartModal = document.getElementById('cart-modal');
        cartModal.classList.toggle('active');
    }
</script>

<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>