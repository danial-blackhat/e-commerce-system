<?php
require 'vendor/autoload.php';

// --------- // \Stripe\Stripe::setApiKey(  '); // Replace with your Stripe secret key //---------//

$session_id = $_GET['session_id'] ?? null;

if ($session_id) {
    $session = \Stripe\Checkout\Session::retrieve($session_id);
   
    $customer_email = $session->customer_details->email ?? 'Unknown';
} else {
    $customer_email = 'Unknown';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Payment Success</title>
</head>
<body>
    <h1>Payment Successful!</h1>
    <p>Thank you for your purchase.</p>
    <p>Your email: <?php echo htmlspecialchars($customer_email); ?></p>
</body>
</html>