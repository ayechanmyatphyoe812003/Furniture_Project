<?php
require_once "../../../database/connect.php";
session_start();


$email = $_POST["email"];
$password = $_POST["password"];
$stmt = $pdo->prepare("SELECT * FROM customer WHERE Customer_Email = :email");
$stmt->execute(['email' => $email]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

$pw = $user['Customer_Password'];
empty($_SESSION['customer-user']) ?
    $_SESSION['customer-user'] = [] :
    $_SESSION['customer-user'][$name] = ["pw" => $pw];

if ($user && password_verify($password, $user['Customer_Password'])) {
    // Store user ID in session
    $_SESSION['user_id'] = $user['customerID'];
    header("Location: ../../user/user.php");
    exit();
} else {
    echo '<script>
    alert("Invalid name or password.");
    window.location.href = "log_in.php"
    </script>';
}
