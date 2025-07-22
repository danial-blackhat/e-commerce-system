<?php
session_start();
$host = 'localhost';
$db = 'shop';
$user = 'root'; 
$pass = '';     

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Fetch user
        $stmt = $pdo->prepare("SELECT * FROM admin_login WHERE username = :username");
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        // Compare plain-text passwords
        if ($admin && $password === $admin['password']) {
            $_SESSION['admin'] = $admin['username'];
            header('Location: admin_products.php');
            exit;
        } else {
            echo "Invalid username or password";
        }
    }
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
