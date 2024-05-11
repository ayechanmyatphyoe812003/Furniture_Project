<?php
require_once "../../database/connect.php";

$name = "Admin2";
$password = "22222";

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO admin (adminName, adminPassword) VALUES (:name, :password)";
try {
    $statement = $pdo->prepare($sql);
    $statement->execute([
        ':name' => $name,
        ':password' => $hashedPassword
    ]);
    echo "Admin inserted successfully.";
} catch (PDOException $error) {
    echo "Error: " . $error->getMessage();
}
