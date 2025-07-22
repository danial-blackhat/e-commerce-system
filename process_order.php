<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'shop';

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
$session_id = session_id();

$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$delivery_method = $_POST['delivery_method'] ?? '';
$address = $_POST['address'] ?? '';
$total_price = $_POST['total_price'] ?? '';
$payment_method = $_POST['payment_method'] ?? '';
$bank = $_POST['bank'] ?? '';

// Handle file upload for QR payment
$receipt_path = '';
if ($payment_method === 'qr' && isset($_FILES['receipt']) && $_FILES['receipt']['error'] === UPLOAD_ERR_OK) {
    $target_dir = "uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $file_name = uniqid() . "_" . basename($_FILES["receipt"]["name"]);
    $target_file = $target_dir . $file_name;
    if (move_uploaded_file($_FILES["receipt"]["tmp_name"], $target_file)) {
        $receipt_path = $target_file;
    }
}

// Fetch cart items
$stmt = $conn->prepare("SELECT product_id, quantity FROM cart WHERE session_id = ?");
$stmt->bind_param('s', $session_id);
$stmt->execute();
$cart_items = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$stmt->close();

// Insert order (removed transaction_ref)
$stmt = $conn->prepare("INSERT INTO orders (session_id, name, phone, delivery_method, address, total_price, payment_method, bank, receipt_path, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
$stmt->bind_param(
    'sssssssss',
    $session_id,
    $name,
    $phone,
    $delivery_method,
    $address,
    $total_price,
    $payment_method,
    $bank,
    $receipt_path
);
$stmt->execute();
$order_id = $stmt->insert_id;
$stmt->close();

// Insert order items
foreach ($cart_items as $item) {
    $stmt = $conn->prepare("INSERT INTO order_items (order_id, product_id, quantity) VALUES (?, ?, ?)");
    $stmt->bind_param('iii', $order_id, $item['product_id'], $item['quantity']);
    $stmt->execute();
    $stmt->close();
}

// Clear cart
$stmt = $conn->prepare("DELETE FROM cart WHERE session_id = ?");
$stmt->bind_param('s', $session_id);
$stmt->execute();
$stmt->close();

$conn->close();

echo "Order placed successfully!";