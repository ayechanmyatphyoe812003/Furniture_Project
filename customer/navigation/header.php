<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

    <link rel="stylesheet" href="../style/main.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= isset($style) ? $style : "" ?>">
    <title><?= $title ?></title>
</head>

<body>
    <!-- Navigation bar -->
    <div class="navbar">
        <div class="navbar-left">
            <!-- Home button -->
            <a href="landing_page.html">Home</a>
            <!-- Collection dropdown -->
            <div class="dropdown">
                <a href="#" class="collection">Collection<span class="material-symbols-outlined">
                        expand_more</a>
                <div class="dropdown-content">
                    <a href="#">Sofas & Sectionals</a>
                    <a href="#">Bed Frames</a>
                    <a href="#">Mattresses</a>
                    <a href="#">Rugs & Carpets</a>
                </div>
            </div>

        </div>
        <!-- Hamburger -->
        <span class="hamburger-icon material-symbols-outlined">
            menu
        </span>
        <!-- Logo -->
        <a href="#" class="logo">NOVA.</a>

        <!-- Right side of the navigation bar -->
        <div class="navbar-right">
            <!-- Search bar -->
            <div class="search-bar">
                <span class="material-symbols-outlined">
                    search
                </span>
                <input type="text" placeholder="Search... ">
            </div>
            <!-- Shopping cart icon -->
            <a href="#"><span class="material-symbols-outlined">
                    shopping_cart
                </span></a>
            <!-- Profile icon -->
            <a href="#" class="profile-icon"><span class="material-symbols-outlined">
                    person
                </span></a>
        </div>

        <div class="nav-menu">
            <span class="close-icon material-symbols-outlined">
                close
            </span>
            <div class="search-bar">

                <span class="material-symbols-outlined">
                    search
                </span>

                <input type="text" placeholder="Search... ">
            </div>
            <a href="#">Home</a>
            <span>Collection</span>
            <a href="#">Sofas & Sectionals</a>
            <a href="#">Bed Frames</a>
            <a href="#">Mattresses</a>
            <a href="#">Rugs & Carpets</a>
            <a href="#">Log In</a>
            <a href="#">Sign Up</a>

        </div>
    </div>