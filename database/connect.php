<?php
require_once "database.php";
$host = "localhost";
$dbname = "mysql";
$user = "root";
$password = "";
$mydb = "86_database";

$con = new Database($host, $dbname, $user, $password);
$pdo = $con->getConnection();

if ($pdo) {
    $connect_sql = "CREATE DATABASE IF NOT EXISTS $mydb";
    $pdo->exec($connect_sql);
    $pdo->exec("USE $mydb");
} else {
    echo "Connection Fail";
}
