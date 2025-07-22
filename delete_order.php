<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $sql = "DELETE FROM orders WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        echo "Order deleted successfully.";
    } else {
        echo "Error deleting order: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
