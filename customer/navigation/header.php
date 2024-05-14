<?php
session_start();
$totalCart = 0;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $productId => $product) {
        $totalCart += $product['qty'];
    }
}


?>

<head>
    <link rel="stylesheet" href="/Furniture_Project/customer/style/main.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= isset($style) ? $style : "" ?>">
    <title><?= $title ?></title>
</head>

<body>
    <!-- Navigation bar -->
    <div class="navbar">
        <div class="navbar-left">
            <!-- Home button -->
            <a href="/Furniture_Project/customer/landing/landing.php">Home</a>
            <!-- Collection dropdown -->
            <div class="dropdown">
                <div class="collection">Collection<span class="material-symbols-outlined">
                        expand_more</div>
                <div class="dropdown-content">
                    <a href="../products/products.php">All Products</a>
                    <a href="../products/products.php?category=sofa+set">Sofa Sets</a>
                    <a href="../products/products.php?category=bed+frame">Bed Frames</a>
                    <a href="../products/products.php?category=mattress">Mattresses</a>
                    <a href="../products/products.php?category=rugs">Rugs</a>
                </div>
            </div>

        </div>
        <!-- Hamburger -->
        <span class="hamburger-icon material-symbols-outlined">
            menu
        </span>
        <!-- Logo -->
        <a href="/Furniture_Project/customer/landing/landing.php" class="logo">
            <h1>NO</h1>
            <h1 class="footer-logo">VA.</h1>
        </a>

        <!-- Right side of the navigation bar -->
        <div class="navbar-right">
            <!-- Search bar -->
            <form class="search-bar" method="GET" action="/Furniture_Project/customer/products/products.php">
                <span class="material-symbols-outlined">
                    search
                </span>

                <input type="text" name="query" placeholder="Search... ">
            </form>
            <a href="/Furniture_Project/customer/shoppingpages/shoppingCart.php" class="cart-icon">
                <span class="material-symbols-outlined">
                    shopping_cart
                </span>
                <!-- Cart item counter -->
                <span class="cart-counter"><?= $totalCart ?></span>
            </a>
            <!-- Profile icon -->
            <div class="dropdown">
                <a href="/Furniture_Project/customer/user/user.php" class="collection"><span
                        class="material-symbols-outlined">
                        person</a>
            </div>
        </div>

        <div class="nav-menu">
            <span class="close-icon material-symbols-outlined">
                close
            </span>

            <form class="search-bar" method="GET" action="/Furniture_Project/customer/products/products.php">
                <span class="material-symbols-outlined">
                    search
                </span>

                <input type="text" name="query" placeholder="Search... ">
            </form>
            <a href="#">Home</a>
            <span>Collection</span>
            <div class="collect">
                <a href="../products/products.php">All Products</a>
                <a href="../products/products.php?category=sofa+set">Sofa Sets</a>
                <a href="../products/products.php?category=bedframes">Bed Frames</a>
                <a href="../products/products.php?category=mattress">Mattresses</a>
                <a href="../products/products.php?category=rugs">Rugs</a>
            </div>
            <a href="/Furniture_Project/customer/authentication/login/log_in.php">Log In</a>
            <a href="/Furniture_Project/customer/authentication/signUp/sign_up.php">Sign Up</a>
            <a href="/Furniture_Project/customer/user/user.php">My Profile</a>

        </div>
    </div>

</body>