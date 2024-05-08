<?php
require_once "../../../database/connect.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $ID = $_POST['customerID'];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $password = $_POST["password"];


    if ($name == "") {
    } else {
        $sql = "UPDATE customer
        SET Customer_Name = '$name', Customer_Phone = '$phone', Customer_Address = '$address', Customer_Password = '$password'
        WHERE CID = '$ID';
        ";
        try {
            $statement = $pdo->prepare($sql);
            $statement->execute();
            echo "<script>alert('Customer Updated Successfully');</script>";
            echo "<script>window.location='../customers.php'</script>";
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }
}


