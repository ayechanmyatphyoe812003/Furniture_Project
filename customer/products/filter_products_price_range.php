<?php
require_once "../../database/connect.php";

if (isset($_GET['minPrice'], $_GET['maxPrice'])) {
    $minPrice = $_GET['minPrice'];
    $maxPrice = $_GET['maxPrice'];
    $sql = "SELECT * FROM products WHERE Product_Price BETWEEN :minPrice AND :maxPrice";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['minPrice' => $minPrice, 'maxPrice' => $maxPrice]);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($products as $product) {
        $category_id = $product['categoryID'];
        $sql2 = "SELECT * FROM category WHERE categoryID = $category_id";
        $stmt2 = $pdo->query($sql2);
        $categories = $stmt2->fetchAll(PDO::FETCH_ASSOC);
        $categoryName = $categories[0]['categoryName'];
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
    echo "Price range not provided";
}
?>