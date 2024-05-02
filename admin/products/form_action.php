<?php
require_once "../../database/connect.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $name = $_POST["name"];
    $brand = $_POST["brand"];
    $category = $_POST["category"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];
    $description = $_POST["description"];
    $img1 = isset($_FILES["image1"]["name"]) ? $_FILES["image1"]["name"] : "";
    $img2 = isset($_FILES["image2"]["name"]) ? $_FILES["image2"]["name"] : "";
    $img3 = isset($_FILES["image3"]["name"]) ? $_FILES["image3"]["name"] : "";
    $img4 = isset($_FILES["image4"]["name"]) ? $_FILES["image4"]["name"] : "";


    $img1Path = "../../images/";
    $targetPath1 = $img1Path . $img1;
    $currentPath1 = $_FILES["image1"]["tmp_name"];

    $img2Path = "../../images/";
    $targetPath2 = $img2Path . $img2;
    $currentPath2 = $_FILES["image2"]["tmp_name"];

    $img3Path = "../../images/";
    $targetPath3 = $img3Path . $img3;
    $currentPath3 = $_FILES["image3"]["tmp_name"];

    $img4Path = "../../images/";
    $targetPath4 = $img4Path . $img4;
    $currentPath4 = $_FILES["image4"]["tmp_name"];


    if ($img1 !== "") {
        move_uploaded_file($currentPath1, $targetPath1);
        move_uploaded_file($currentPath2, $targetPath2);
        move_uploaded_file($currentPath3, $targetPath3);
        move_uploaded_file($currentPath4, $targetPath4);
    }

    if ($name == "") {
    } else {
        $sql = "INSERT INTO products VALUES ('$name','$brand','$description', '$category', '$price', '$stock','$img1','$img2','$img3','$img4')";
        try {
            $statement = $pdo->prepare($sql);
            $statement->execute();
            echo "<script>alert('Product Created Successfully');</script>";
            echo "<script>window.location='../products/products.php'</script>";
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }
}


