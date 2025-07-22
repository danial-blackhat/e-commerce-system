<?php
// Include database connection
include 'db.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $orderId = intval($_POST['id']);
    $status = $_POST['action'] === 'settle_payment' ? 'Payment Settled' : 'On Hold';

    // Update query
    $sql = "UPDATE orders SET status='$status' WHERE id=$orderId";

    if ($conn->query($sql) === TRUE) {
        // Success message with a "Back" button
        echo "
        <html>
        <head>
            <title>Update Successful</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f4;
                    text-align: center;
                    padding-top: 100px;
                }
                .message-box {
                    background-color: #fff;
                    padding: 20px;
                    border-radius: 8px;
                    box-shadow: 0 2px 8px rgba(0,0,0,0.2);
                    display: inline-block;
                }
                .success {
                    color: green;
                    font-size: 20px;
                    margin-bottom: 20px;
                }
                .back-btn {
                    background-color: #007bff;
                    color: white;
                    padding: 10px 20px;
                    text-decoration: none;
                    border-radius: 5px;
                    font-weight: bold;
                }
                .back-btn:hover {
                    background-color: #0056b3;
                }
            </style>
        </head>
        <body>
            <div class='message-box'>
                <p class='success'>Order status updated successfully</p>
                <a href='view_order.php' class='back-btn'>Back to Order Management</a>
            </div>
        </body>
        </html>";
    } else {
        echo "<script>
                alert('Failed to update order status.');
                window.location.href = 'admin_orders.php';
              </script>";
    }
}
?>