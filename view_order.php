<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Orders Page</title>
    <link rel="stylesheet" href="view_order.css"> <!-- Link to the external CSS file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    
    <div class="container">
        <div class="header">
            <a href="admin_products.php">
                <button class="back-btn">Back to Manage Products</button>
            </a>
            <input type="text" id="searchBar" class="search-bar" placeholder="Search by customer name">
        </div>
        <h1>Orders Management</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Delivery Method</th>
                    <th>Address</th>
                    <th>Products</th>
                    <th>Total Price</th>
                    <th>Purchase Date</th>
                    <th>Receipt</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="orderTableBody">
                <?php
                // Modify the SQL query to order by creation date in descending order
                $sql = "SELECT * FROM orders ORDER BY created_at DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $orders = [];
                    while ($row = $result->fetch_assoc()) {
                        $orders[$row['name']][] = $row;
                    }

                    foreach ($orders as $name => $orderGroup) {
                        $firstOrder = $orderGroup[0];
                        $totalPrice = array_sum(array_column($orderGroup, 'total_price'));
                        $selectedHold = ($firstOrder['status'] == 'On Hold') ? 'selected' : '';
                        $selectedSettled = ($firstOrder['status'] == 'Payment Settled') ? 'selected' : '';

                        echo "<tr data-id='{$firstOrder['id']}'>";
                        echo "<td>{$firstOrder['name']}</td>";
                        echo "<td>{$firstOrder['phone']}</td>";
                        echo "<td>{$firstOrder['delivery_method']}</td>";
                        echo "<td>{$firstOrder['address']}</td>";
                        echo "<td>";
                        echo "<table>";
                        foreach ($orderGroup as $order) {
                            echo "<tr>";
                            echo "<td>{$order['product_name']} (x{$order['quantity']})</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "</td>";
                        echo "<td>RM " . number_format($totalPrice, 2) . "</td>";
                        echo "<td>{$firstOrder['created_at']}</td>"; // Display the purchase date
                        echo "<td><button class='view-receipt-btn' data-receipt='{$firstOrder['receipt']}'>View</button></td>";
                        echo "<td>
                                <form method='POST' action='update_order_status.php'>
                                    <select name='action' class='action-select'>
                                        <option value='hold' $selectedHold>Hold</option>
                                        <option value='settle_payment' $selectedSettled>Settle Payment</option>
                                    </select>
                                    <input type='hidden' name='id' value='{$firstOrder['id']}'>
                                    <button type='submit' class='submit-btn'>Submit</button>
                                </form>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='9'>No orders found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Modal for displaying receipt -->
    <div id="receiptModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Customer Receipt</h2>
            <div id="receiptContent"></div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(".view-receipt-btn").click(function() {
                var receiptData = $(this).data('receipt'); // Get the receipt data (URL or text)

                // Check if receipt data is a URL (indicating an image or PDF)
                if (receiptData.endsWith('.jpg') || receiptData.endsWith('.png') || receiptData.endsWith('.jpeg') || receiptData.endsWith('.gif')) {
                    // It's an image, display it in the modal
                    $("#receiptContent").html('<img src="' + receiptData + '" alt="Receipt" style="width: 100%; height: auto;">');
                } else if (receiptData.endsWith('.pdf')) {
                    // It's a PDF, display it in the modal
                    $("#receiptContent").html('<embed src="' + receiptData + '" width="100%" height="500px" type="application/pdf">');
                } else {
                    // Otherwise, treat it as text (e.g., plain text receipt)
                    $("#receiptContent").text(receiptData); // Display the receipt data as text
                }

                // Show modal
                $("#receiptModal").show();
            });

            $(".close").click(function() {
                $("#receiptModal").hide(); // Hide modal
            });

            $(window).click(function(event) {
                if (event.target == document.getElementById('receiptModal')) {
                    $("#receiptModal").hide(); // Hide modal when clicking outside
                }
            });

            // Search functionality
            $("#searchBar").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#orderTableBody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

</body>
</html>