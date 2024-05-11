<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav_bar</title>
    <!--linking with icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <!--linking with css-->
    <link rel="stylesheet" href="/furniture_project/admin/style.css" />
</head>
</head>

<body>
    <aside>
        <div class="top">
            <h2>NOVA </span></h2>
        </div>
        <div class="close" id="close-btn">
            <span class="material-symbols-outlined"> close </span>
        </div>

        <!--side bar-->
        <div class="sidebar">
            <div class="link-container">
                <a href="/Furniture_Project/admin/dashboard/index.php" class="<?= $page == "dashboard" ? "active" : "" ?>">
                    <span class=" material-symbols-outlined"> grid_view </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="/Furniture_Project/admin/customers/customers.php" class="<?= $page == "customers" ? "active" : "" ?>">
                    <span class=" material-symbols-outlined"> groups </span>
                    <h3>Customers</h3>
                </a>
                <a href="/Furniture_Project/admin/orders/orders.php" class="<?= $page == "orders" ? "active" : "" ?>">
                    <span class="material-symbols-outlined"> receipt_long </span>
                    <h3>Orders</h3>
                </a>
                <a href="/Furniture_Project/admin/products/products.php" class="<?= $page == "products" ? "active" : "" ?>">
                    <span class="material-symbols-outlined"> shoppingmode </span>
                    <h3>Products</h3>
                </a>
            </div>
            <a href="/Furniture_Project/admin/LogIn/login.php">
                <span class="material-symbols-outlined">
                    logout
                </span>
                <h3>Log Out</h3>
            </a>
        </div>
    </aside>
    <!--------------- END OF SIDE BAR---------------->
</body>

</html>