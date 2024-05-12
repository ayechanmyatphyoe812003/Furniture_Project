<?php
require_once "../../database/connect.php";

// Get the sort type from the AJAX request
$sortType = $_GET['sortType'];

// SQL query to fetch products based on the sort type
switch ($sortType) {
    case 'az':
        $sql = "SELECT * FROM products ORDER BY Product_Name ASC";
        break;
    case 'za':
        $sql = "SELECT * FROM products ORDER BY Product_Name DESC";
        break;
    case 'lh':
        $sql = "SELECT * FROM products ORDER BY Product_Price ASC";
        break;
    case 'hl':
        $sql = "SELECT * FROM products ORDER BY Product_Price DESC";
        break;
    default:
        $sql = "SELECT * FROM products";
        break;
}

$stmt = $pdo->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Output the sorted products
foreach ($products as $product) {
    $image = "../../images/" . $product['Product_Name'] . $product['Product_Brand'] . "/" . $product['product_img1'];
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
<?php } ?>