<?php
session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'shop';

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$session_id = session_id();

// Calculate total price from cart
$stmt = $conn->prepare("SELECT products.price, cart.quantity FROM cart INNER JOIN products ON cart.product_id = products.id WHERE cart.session_id = ?");
$stmt->bind_param('s', $session_id);
$stmt->execute();
$result = $stmt->get_result();

$total_price = 0;
while ($row = $result->fetch_assoc()) {
    $total_price += $row['price'] * $row['quantity'];
}
$stmt->close();
$conn->close();

// Example FPX Payment Form (replace with your actual FPX details)
$merchantId = 'YOUR_MERCHANT_ID';
$orderId = uniqid('ORDER_');
$amount = '100.00'; // Example amount
$returnUrl = 'http://localhost/bhbk7/fpx_return.php';
// Generate checksum/signature if required by FPX

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FPX Payment</title>
    <link rel="stylesheet" href="payment_fpx.css">
</head>
<body>
    <div class="fpx-container">
        <img src="assets/img/fpx.jpg" alt="fpx-logo" class="fpx-logo">

        <h2>Proceed to FPX Payment</h2> 
        <p>You will be redirected to the FPX platform to complete your payment.</p>
        <p><strong>Amount to Pay:</strong> RM<?= number_format($total_price, 2) ?></p>
        <!-- Only show a single Confirm button for online payment -->
        <form action="http://buy.stripe.com/test_7sYfZh45Vduxapw5f4b7y00">
            <input type="hidden" name="amount" value="<?= number_format($total_price, 2, '.', '') ?>">
            <button type="submit" class="confirm-btn">Confirm</button>
        </form>
        
        <a href="checkout.php" class="back-link">&larr; Back to Checkout</a>
    </div>
</body>
</html>