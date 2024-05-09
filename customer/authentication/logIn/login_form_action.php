<?php
require_once "../../../database/connect.php";
session_start();


$email = $_POST["email"];
$password = $_POST["password"];
$stmt = $pdo->prepare("SELECT * FROM customer WHERE Customer_Email = :email");
$stmt->execute(['email' => $email]);
$email = $stmt->fetch(PDO::FETCH_ASSOC);
$pw = $email['Customer_Password'];
empty($_SESSION['customer-user']) ?
    $_SESSION['customer-user'] = [] :
    $_SESSION['customer-user'][$name] = ["pw" => $pw];

if ($email && $password == $pw) {
    header("Location: ../../landing/landing.php");
    exit();
} else {
    echo '<script>
    alert("Invalid admin name or password.");
    window.location.href = "log_in.php"
    </script>';
}
