<?php
require_once "../../database/connect.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name = $_POST["name"];
    $brand = $_POST["brand"];
    $category = $_POST["category"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];

    $img = isset($_FILES["image"]["name"]) ? $_FILES["image"]["name"] : "";
    $imgPath = "../../images/";
    $targetPath = $imgPath . $img;
    $currentPath = $_FILES["image"]["tmp_name"];

    if ($img !== "") {
        move_uploaded_file($currentPath, $targetPath);
    }

    if ($name == "") {
    } else {
        $sql = "INSERT INTO products VALUES (0,'$name','$brand', '$category', '$price', '$stock','$img')";
        try {
            $statement = $pdo->prepare($sql);
            $statement->execute();
            echo "<script>alert('Product Created Successfully');</script>";
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }
}
