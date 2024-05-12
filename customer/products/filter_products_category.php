<?php
require_once "../../database/connect.php";

if (isset($_GET['categoryID'])) {
    $categoryID = $_GET['categoryID'];
    $sql = "SELECT * FROM products WHERE categoryID = :categoryID";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['categoryID' => $categoryID]);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $sql2 = "SELECT * FROM category WHERE categoryID = $categoryID";
    $stmt2 = $pdo->query($sql2);
    $categories = $stmt2->fetchAll(PDO::FETCH_ASSOC);
    $categoryName = $categories[0]['categoryName'];
    foreach ($products as $product) {



        // Output product cards
        ?>
        <a href="./productDetail.php?id=<?= $product['productID'] ?>" class="card"
            data-category="<?= $product['categoryID'] ?>">
            <div class="product_brand">
                <h3><?= $product['Product_Brand'] ?></h3>
                <p><?= $categoryName ?></p>
            </div>
            <div class="card_image">
                <img src="<?= $image ?>" alt="sofa1">
            </div>
            <div class="product_info">
                <p class="name"><?= $product['Product_Name'] ?></p>
                <h3 class="price">$<?= $product['Product_Price'] ?></h3>
            </div>
        </a>
        <?php
    }
} else {
    echo "Category ID not provided";
}
?>