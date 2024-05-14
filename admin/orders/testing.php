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
        .customer-main-container {
            display: grid;
            width: 96%;
            height: 100vh;
            gap: 1.8rem;
            grid-template-columns: 14rem auto;
        }

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

        table td img {
            width: 70px;
        }
    </style>
</head>

<body>

    <div class="customer-main-container">
        <!-- Main content area -->
        <?php
        $page = "orders";
        require_once "../dashboard/nav.php";
        ?>
        <div class="main-profile-content">

            <?php foreach ($orders as $order) : ?>
                <div class="order-history-card">
                    <div class="order-info">
                        <h2>Order ID: <?php echo $order['orderID']; ?></h2>
                        <span>Order Date: <?php echo $order['order_date']; ?></span>
                        <span>Status: <?php echo $order['status']; ?></span>
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
                            <?php
                            // Fetch order items for the current order
                            $orderItemsQuery =
                                "SELECT oi.*, p.product_Name as productName, p.product_brand as brand, p.product_img1 as imagePath
              FROM orderitem AS oi
              JOIN orders AS o ON o.orderID = oi.orderID
              JOIN products AS p ON oi.productID = p.productID
              WHERE oi.orderID = :orderID";
                            $orderItemsStmt = $pdo->prepare($orderItemsQuery);
                            $orderItemsStmt->execute(['orderID' => $order['orderID']]);
                            $orderItems = $orderItemsStmt->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($orderItems as $item) : ?>
                                <tr>
                                    <td><img src="<?= "../../images/" . $item['productName'] . $item['brand'] . "/" . $item['imagePath'] ?>" /></td>
                                    <td><?php echo $item['productName']; ?></td>
                                    <td><?php echo $item['quantity']; ?></td>
                                    <td>$<?php echo number_format($item['unitPrice'], 2); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <div class="total">
                        <p>Payment Method: <?php echo $order['payment']; ?></p>
                        <h2>Total Price: $<?php echo number_format($order['total_amount'], 2); ?></h2>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</body>

</html>