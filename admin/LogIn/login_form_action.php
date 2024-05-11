<?php
require_once "../../database/connect.php";
session_start();


$name = $_POST["admin_name"];
$password = $_POST["password"];

$stmt = $pdo->prepare("SELECT * FROM admin WHERE adminName = :admin_name");
$stmt->execute(['admin_name' => $name]);
$admin = $stmt->fetch(PDO::FETCH_ASSOC);
$pw = $admin['adminPassword'];
empty($_SESSION['admin-user']) ?
    $_SESSION['admin-user'] = [] :
    $_SESSION['admin-user'][$name] = ["pw" => $pw];

if ($admin && password_verify($password, $pw)) {
    header("Location: ../dashboard/index.php");
    exit();
} else {
    echo '<script>
    alert("Invalid admin name or password.");
    window.location.href = "login.php"
    </script>';
}
