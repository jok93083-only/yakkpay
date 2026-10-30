<?php

session_start();
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$email = strtolower(trim($_POST['email'] ?? ''));

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['flash'] = "Please enter a valid email address.";
} else {

    $stmt = $conn->prepare(
        "SELECT id FROM users WHERE email = :email"
    );

    $stmt->execute([':email' => $email]);

    $_SESSION['flash'] =
        "If this email is registered, password reset instructions can be sent.";
}

header("Location: index.php");
exit;

?>