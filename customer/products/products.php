<?php

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
            <div class="filter1 filter">
                <h4><span class="material-symbols-outlined">
                        expand_more
                    </span>Category</h4>
                <?php foreach ($categories as $category): ?>
                    <a href="#" class="category-filter"
                        data-category="<?= $category['categoryID'] ?>"><?= $category['categoryName'] ?></a>
                <?php endforeach; ?>
            </div>
            <!--  <div class="filter2 filter">
                <h4><span class="material-symbols-outlined">
                        expand_more
                    </span>Brand</h4>
                <a href="#">hehe </a>
                <a href="#">hehe </a>
                <a href="#">hehe </a>
                <a href="#">hehe </a>
                <a href="#">hehe </a>
            </div> -->
            <div class="price_range">
                <h4><span class="material-symbols-outlined">
                        expand_more
                    </span>Price Range</h4>
                <div class="custom-wrapper">
                    <div class="price-input-container">
                        <div class="price-input">
                            <div class="price-field">
                                <span>From</span>
                                <input type="number" id="minPrice" class="min-input" value="0">
                            </div>
                            <div class="price-field">
                                <span>To</span>
                                <input type="number" id="maxPrice" class="max-input" value="10000">
                            </div>
                        </div>
                        <div class="slider-container">
                            <div class="price-slider">
                            </div>
                        </div>
                    </div>

                    <!-- Slider -->
                    <div class="range-input">
                        <input type="range" id="minRange" class="min-range" min="0" max="10000" value="0" step="1">
                        <input type="range" id="maxRange" class="max-range" min="0" max="10000" value="10000" step="1">
                    </div>
                </div>
            </div>

        </div>
        <div class="products_bottom_right">
            <div class="sorting">
                <h5>Sorted By</h5>
                <div class="dropdown">
                    <button class="dropbtn">select<span class="material-symbols-outlined">
                            expand_more
                        </span>
                    </button>

                    <div class="dropdown-content">
                        <a href="#" class="sort-by" data-sort="az">A to Z</a>
                        <a href="#" class="sort-by" data-sort="za">Z to A</a>
                        <a href="#" class="sort-by" data-sort="lh">Price Low to High</a>
                        <a href="#" class="sort-by" data-sort="hl">Price High to Low</a>
                    </div>
                </div>
            </div>

            <div class="product_cards" id="productCards">
                <?php
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
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        // Event listener for category filter links
        $('.category-filter').click(function (e) {
            e.preventDefault(); // Prevent default link behavior
            var categoryID = $(this).data('category');

            // AJAX request to fetch products based on category
            $.ajax({
                url: 'filter_products_category.php',
                type: 'GET',
                data: { categoryID: categoryID },
                success: function (response) {
                    // Update product list with fetched products
                    $('#productCards').html(response);
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });

    $(document).ready(function () {
        // Event listener for price range input changes
        $('#minPrice, #maxPrice, #minRange, #maxRange').change(function () {
            var minPrice = $('#minPrice').val();
            var maxPrice = $('#maxPrice').val();

            // AJAX request to fetch products based on price range
            $.ajax({
                url: 'fetch_products.php',
                type: 'GET',
                data: { minPrice: minPrice, maxPrice: maxPrice },
                success: function (response) {
                    // Update product list with fetched products
                    $('#productCards').html(response);
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });


    $(document).ready(function () {
        // Event listener for sorting options
        $('.sort-by').click(function (e) {
            e.preventDefault(); // Prevent default link behavior
            var sortType = $(this).data('sort');

            // AJAX request to fetch products based on sorting type
            $.ajax({
                url: 'sort_products.php',
                type: 'GET',
                data: { sortType: sortType },
                success: function (response) {
                    // Update product list with fetched products
                    $('#productCards').html(response);
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    })



</script>


<?php require_once ("../navigation/footer.php"); ?>