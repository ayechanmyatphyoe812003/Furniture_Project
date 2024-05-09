<?php
require_once "../../../database/connect.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $ID = $_POST['productID'];
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



    if ($img1 !== "" && $img2 !== "" && $img3 !== "" && $img4 !== "") {
        $productFolder = "../../../images/{$name}{$brand}/";
        if (!file_exists($productFolder)) {
            mkdir($productFolder, 0777, true);
        }

        // Move each uploaded image to the product folder
        move_uploaded_file($_FILES["image1"]["tmp_name"], $productFolder . $img1);
        move_uploaded_file($_FILES["image2"]["tmp_name"], $productFolder . $img2);
        move_uploaded_file($_FILES["image3"]["tmp_name"], $productFolder . $img3);
        move_uploaded_file($_FILES["image4"]["tmp_name"], $productFolder . $img4);
    }



    if ($name == "") {
    } else {
        $sql = "UPDATE products
SET Product_Name= '$name',Product_Brand = '$brand', categoryID = $category, Product_description = '$description',  Product_Price = '$price', Product_Stock = '$stock', product_img1 = '$img1', product_img2 = '$img2', product_img3 = '$img3', product_img4 = '$img4'
WHERE productID = '$ID';";
        try {
            $statement = $pdo->prepare($sql);
            $statement->execute();
            echo "<script>alert('Product Updated Successfully');</script>";
            echo "<script>window.location='../products.php'</script>";
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }
}
