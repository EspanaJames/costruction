<?php
session_start();
require_once __DIR__ . '/src/api/connector.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $pdo = DBConnector::getConnection();
    $stmt = $pdo->prepare('SELECT * FROM admin WHERE userName = ? AND password = ?');
    $stmt->execute([$username, $password]);
    $user = $stmt->fetch();

    if ($user) {
        $_SESSION['admin_id'] = $user['id'];
        $_SESSION['admin_user'] = $user['userName'];
        $_SESSION['logged_in'] = true;
        header('Location: /src/pages/dashboard.php');
        exit;
    } else {
        echo '<script>alert("Invalid username or password"); window.location.href = "/index.html";</script>';
        exit;
    }
} else {
    echo '<script>alert("Invalid request"); window.location.href = "/index.html";</script>';
    exit;
}
?>
