<?php
require_once "../../database/connect.php";

$sql = "SELECT * FROM orders";
$stmt = $pdo->query($sql);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        /*-----------order history user profile--------------------*/
        .main-profile-content {
            padding-top: 50px;
        }

        .main-profile-content .order-history-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: var(--box-shadow);
            max-width: 800px;
            margin: 0 auto;
            height: fit-content;
        }

        .main-profile-content .order-history-card h1 {
            margin-bottom: 3%;
        }

        .main-profile-content .order-history-card table {
            width: 100%;
            border-collapse: collapse;
        }

        .main-profile-content .order-history-card th,
        .order-history-card td {
            padding: 10px;
            text-align: center;
        }

        .main-profile-content .order-history-card th {
            background-color: white;
        }

        .order-info {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid black;
        }

        .links {
            margin-left: 34%;
            margin-bottom: 2%;
        }

        .links a {
            color: black;
            text-decoration: none;
            padding-right: 30px;
        }

        .links .active {
            font-size: 1.2rem;
            font-weight: 600;
            text-decoration: underline;
        }

        .links a:hover {
            font-size: 1.2rem;
            font-weight: 600;
            text-decoration: underline;
            transition: 0.2s ease-in-out;
        }

        .total {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .total h2 {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <!-- Main content area -->
    <?php
    $page = "orders";
    require_once "../dashboard/nav.php";
    ?>
    <div class="main-profile-content">
        <div class="order-history-card">
            <div class="order-info">
                <h2>Order ID : 1111 </h2>
                <span>Order Date : 8/8/8</span>
                <span>Status : Pending </span>
            </div>
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Items</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="" alt="stand" /></td>
                        <td>chair</td>
                        <td>3</td>
                        <td>$250.00</td>
                    </tr>
                    <tr>
                        <td><img src="" alt="chair" /></td>
                        <td>bed</td>
                        <td>1</td>
                        <td>$150.00</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            <div class="total">
                <p>Payment Method: </p>
                <h2>Total Price : $ 10000.00</h2>
            </div>
        </div>
    </div>
</body>

</html>