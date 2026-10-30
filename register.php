<?php

session_start();
require_once "config.php";

function redirectMessage($message) {
    $_SESSION['flash'] = $message;
    header("Location: index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = strtolower(trim($_POST['email'] ?? ''));
$password = $_POST['password'] ?? '';
$confirm = $_POST['confirm'] ?? '';

if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    redirectMessage("Please enter valid details.");
}

if (strlen($password) < 6) {
    redirectMessage("Password must be at least 6 characters.");
}

if ($password !== $confirm) {
    redirectMessage("Passwords do not match!");
}

$hash = password_hash($password, PASSWORD_DEFAULT);

try {

    $sql = "INSERT INTO users
            (full_name, email, password_hash)
            VALUES (:name, :email, :password)";

    $stmt = $conn->prepare($sql);

    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':password' => $hash
    ]);

    $_SESSION['flash'] = "Registration successful! Please login.";
    header("Location: index.php");
    exit;

} catch (PDOException $e) {

    if ($e->getCode() == 23000) {
        redirectMessage("Account already exists!");
    }

    error_log($e->getMessage());
    redirectMessage("Registration failed. Please try again.");

}
?>