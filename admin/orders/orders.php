<?php
require_once "../../database/connect.php";

$sql = "SELECT * FROM orders";
$stmt = $pdo->query($sql);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Customers Table</title>
    <style>
        body {
            background-color: #f4f4f4;
        }

        .customer-main-container {
            display: grid;
            width: 96%;
            height: 100vh;
            gap: 1.8rem;
            grid-template-columns: 14rem auto;
        }

        .customer-container {
            max-width: 950px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border-bottom: 1px solid #e0e0e0;
            padding: 10px;
        }

        th {
            background-color: #f1f1f1;
        }

        .customer-photo {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        .action-btn {
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .action-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="customer-main-container">
        <?php
        $page = "orders";
        require_once "../dashboard/nav.php";
        ?>
        <div class="customer-container">
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer ID</th>


                        <th>Order Date</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th>Action</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($orders as $order) {


                    ?>

                        <tr>
                            <th><?= $order['order_id'] ?></th>


                            <td><?= $order['customer_id'] ?></td>
                            <td><?= $order['order_date'] ?></td>
                            <td><?= $order['total_amount'] ?></td>
                            <td><?= $order['payment_id'] ?></td>
                            <td><?= $order['status'] ?></td>

                            <td>
                                <a href="update/update_orders.php?ID=<?php echo $order['OID'] ?>
                            ">


                                    <span class="material-symbols-outlined" id="updateButton">

                                        edit_notes
                                    </span> </a>
                            </td>
                        </tr>
                    <?php } ?>

                    <!-- Add more rows for additional customers -->
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>