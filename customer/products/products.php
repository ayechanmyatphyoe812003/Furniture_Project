<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Terms & Conditions</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="products.css" />
</head>

<body>
    <?php
    require_once "../navigation/header.php";
    ?>
    <div class="products_container">
        <div class="products_head">
            <h2>Products</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam, assumenda, eaque laudantium provident magni animi eum recusandae, est iusto quaerat dignissimos. A</p>
            <img src="img/sofa_main.png" alt="sofa">
        </div>

        <div class="products_bottom">
            <div class="products_bottom_left">
                <h3>Filterd By</h3>
                <div class="filter1 filter">
                    <h4><span class="material-symbols-outlined">
                            expand_more
                        </span>Category</h4>
                    <a href="#">hehe </a>
                    <a href="#">hehe</a>
                    <a href="#">hehe</a>
                    <a href="#">hehe </a>
                    <a href="#">hehe </a>
                </div>
                <div class="filter2 filter">
                    <h4><span class="material-symbols-outlined">
                            expand_more
                        </span>Brand</h4>
                    <a href="#">hehe </a>
                    <a href="#">hehe </a>
                    <a href="#">hehe </a>
                    <a href="#">hehe </a>
                    <a href="#">hehe </a>
                </div>
                <div class="price_range">
                    <h4><span class="material-symbols-outlined">
                            expand_more
                        </span>Price Range</h4>
                    <div class="custom-wrapper">
                        <div class="price-input-container">
                            <div class="price-input">
                                <div class="price-field">
                                    <span>From</span>
                                    <input type="number" class="min-input" value="2500">
                                </div>
                                <div class="price-field">
                                    <span>To</span>
                                    <input type="number" class="max-input" value="8500">
                                </div>
                            </div>
                            <div class="slider-container">
                                <div class="price-slider">
                                </div>
                            </div>
                        </div>

                        <!-- Slider -->
                        <div class="range-input">
                            <input type="range" class="min-range" min="0" max="10000" value="2500" step="1">
                            <input type="range" class="max-range" min="0" max="10000" value="8500" step="1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="products_bottom_right">
                <div class="sorting">
                    <h5>Sorted By</h5>
                    <div class="dropdown">
                        <button class="dropbtn">none</button>
                        <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>
                </div>

                <div class="product_cards">
                    <?php foreach (range(1, 8) as $i) : ?>
                        <div class="card">
                            <div class="product_brand">
                                <h3>IKEA</h3>
                                <p>product category</p>
                            </div>
                            <div class="card_image">
                                <img src="img/sofa1.png" alt="sofa1">
                            </div>
                            <div class="product_info">
                                <p>name</p>
                                <h3>$0000.00</h3>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>