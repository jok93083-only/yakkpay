<?php

session_start();
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$email = strtolower(trim($_POST['email'] ?? ''));
$password = $_POST['password'] ?? '';

$stmt = $conn->prepare(
    "SELECT id, full_name, password_hash
     FROM users WHERE email = :email"
);

$stmt->execute([':email' => $email]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password_hash'])) {

    session_regenerate_id(true);

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['full_name'];

    $_SESSION['flash'] =
        "Login successful! Welcome " . $user['full_name'];

} else {

    $_SESSION['flash'] = "Invalid email or password!";

}

header("Location: dashboard.php");
exit;

?>