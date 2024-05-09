<?php
require_once("connect.php");

$create_customers = "CREATE TABLE IF NOT EXISTS customers(
    customerID INT PRIMARY KEY AUTO_INCREMENT,
    Customer_Name VARCHAR (100) NOT NULL,
    Customer_Age INT,
    Customer_Gender VARCHAR (10),
    Customer_Phone VARCHAR (25)
);";

$create_products =  "CREATE TABLE IF NOT EXISTS products(
    productID INT PRIMARY KEY AUTO_INCREMENT,
    Product_Name VARCHAR (200) NOT NULL,
    Product_Brand VARCHAR (100),
    Product_Category VARCHAR (100),
    Product_Price FLOAT,
    Product_Stock INT
);";

$sample_product1 = "INSERT INTO products VALUES 
(
    0, 'Iron', 'KIRA', 'Home Appliances',50000.00,100
)";

$sample_product2 = "INSERT INTO products VALUES 
(
    0, 'Chair', 'SweetyHome', 'Home Appliances',50000.00,20
)";
try {
    $pdo->exec($create_customers);
    $pdo->exec($create_products);
    $pdo->exec($sample_product1);
    $pdo->exec($sample_product2);
    echo "tables created";
} catch (PDOException $error) {
    echo $error->getMessage();
}
$pdo->exec($create_customers);
