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

        td {
            font-size: 0.9rem;
            font-weight: 450;
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

        .delete {
            text-decoration: none;
            background-color: white;
            border: none;
        }

        .delete:hover {
            color: red;
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
                        <th>Address</th>
                        <th>Order Date</th>
                        <th>Total Price</th>
                        <th>Payment Method</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($orders as $order) {
                    ?><tr>
                            <th><?= $order['orderID'] ?></th>
                            <td><?= $order['customerID'] ?></td>
                            <td><?= $order['Address'] ?></td>
                            <td><?= $order['order_date'] ?></td>
                            <td><?= $order['total_amount'] ?></td>
                            <td><?= $order['paymentID'] ?></td>
                            <td><?= $order['status'] ?></td>

                            <td>
                                <a href="update/update_order.php?ID=<?php echo $order['orderID'] ?>
                            "><span class="material-symbols-outlined" id="updateButton">edit_note
                                    </span> </a>
                                <a href="delete_form.php?ID=<?php echo $order['orderID'] ?>" class="delete"><span class="material-symbols-outlined"> delete
                                    </span></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>