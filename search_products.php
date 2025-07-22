<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'shop';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $stmt = $conn->prepare("SELECT name FROM products WHERE name LIKE ?");
    $search_term = "%" . $query . "%";
    $stmt->bind_param('s', $search_term);
    $stmt->execute();
    $result = $stmt->get_result();
    $products = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($products);
}
?>