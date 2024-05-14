<?php

function exec_sql_all($sql, $params = [])
{
    global $pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$title = "Products";
$style = "products.css";
$script = "script.js";

require_once "../../database/connect.php";

$sql = "SELECT * FROM products";
$stmt = $pdo->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql2 = "SELECT * FROM category";
$stmt2 = $pdo->query($sql2);
$categories = $stmt2->fetchAll(PDO::FETCH_ASSOC);

$sql2 = "SELECT Product_Brand as name FROM products GROUP BY Product_Brand";
$stmt2 = $pdo->query($sql2);
$brands = $stmt2->fetchAll(PDO::FETCH_ASSOC);

$filter = [
    "category" => !empty($_GET["category"]) ? $_GET["category"] : null,
    "brand" => !empty($_GET["brand"]) ? $_GET["brand"] : null,
    "min" => !empty($_GET["min"]) ? $_GET["min"] : 0,
    "max" => !empty($_GET["max"]) ? $_GET["max"] : 10000
];

$sort = !empty($_GET["sort"]) ? $_GET["sort"] : "az";

$query = isset($_GET["query"]) ? $_GET["query"] : "";

// build query starts
$sql = "SELECT p.productID, p.Product_Name, Product_Brand, Product_Price, product_img1, categoryName
          FROM products AS p
          JOIN category AS c ON p.categoryID=c.categoryID";

foreach ($filter as $i) {
    if (!empty($i)) {
        $sql .= " WHERE ";
        break;
    }
}

$condition_arr = [];

if (!empty($filter["category"])) {
    $condition_arr[] = sprintf("c.categoryName IN ('%s')", $filter["category"]);
}

if (!empty($filter["brand"])) {
    $condition_arr[] = sprintf("Product_Brand IN ('%s')", $filter["brand"]);
}

if (!empty($filter["min"])) {
    $condition_arr[] = sprintf("Product_Price >= %s", $filter["min"]);
}

if (!empty($filter["max"])) {
    $condition_arr[] = sprintf("Product_Price <= %s", $filter["max"]);
}

$sql .= implode(" AND ", $condition_arr);

$sort_to_sql_map = [
    "az" => "p.Product_Name ASC",
    "za" => "p.Product_Name DESC",
    "lh" => "Product_Price ASC",
    "hl" => "Product_Price DESC"
];

$sql .= sprintf(" ORDER BY %s", $sort_to_sql_map[$sort]);

// build query ends

if (empty($query)) {
    $products = exec_sql_all($sql);
} else {
    $products = exec_sql_all(
        "SELECT productID, Product_Name, category.categoryName, Product_Brand, Product_Price, product_img1
       FROM products
       JOIN category ON category.categoryID=products.categoryID
       WHERE Product_Name LIKE '%$query%'"
    );
}
?>

<?php
require_once "../navigation/header.php";
?>
<div class="products_container">
    <div class="products_head">
        <h2><span>|</span>Products</h2>
        <p>Discover quality craftsmanship, timeless designs, and endless possibilities for transforming your space into
            a haven of beauty and functionality. </p>
        <div class="photo-container">
            <img src="img/img (1).jpg" alt="image1">
            <img src="img/img (2).jpg" alt="image1">
            <img src="img/img (4).jpg" alt="image1">
            <img src="img/img (3).jpg" alt="image1">
        </div>

    </div>
    <div class="products_bottom">
        <div class="products_bottom_left">
            <h3>Filterd By</h3>
            <?php require_once("./filter.php"); ?>
        </div>
        <div class="products_bottom_right">
            <?php require_once("./sort.php"); ?>
            <div class="product_cards" id="productCards">
                <?php foreach ($products as $product) : ?>
                    <a href="./productDetail.php?id=<?= $product['productID'] ?>" class="card" ?>
                        <div class="product_brand">
                            <h3><?= $product['Product_Brand'] ?></h3>
                            <p><?= $product["categoryName"] ?></p>
                        </div>
                        <div class="card_image">
                            <img src="<?= "../../images/" . $product['Product_Name'] . $product['Product_Brand'] . "/" . $product['product_img1'] ?>" alt="sofa1">
                        </div>
                        <div class="product_info">
                            <p class="name"><?= $product['Product_Name'] ?></p>
                            <h3 class="price">$<?= $product['Product_Price'] ?></h3>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php require_once("../navigation/footer.php"); ?>