<?php
require_once "../../../database/connect.php";
$orderID = $_GET['ID'];
$sql = "SELECT * FROM orders WHERE orderID = $orderID";
$stmt = $pdo->query($sql);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);



foreach ($orders as $order) {

    $customerID = $order['customerID'];
    $orderDate = $order['order_date'];
    $totalAmount = $order['total_amount'];
    $paymentID = $order['paymentID'];
    $orderStatus = $order['status'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update order</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Barlow:wght@200&family=Quicksand:wght@300..700&display=swap");

        body {
            font-family: "Quicksand", sans-serif;
            background-color: #f2f2f2;
        }

        .create-product-main-container {
            display: flex;
        }

        .create-product-container {
            display: flex;
            flex-direction: column;
            max-width: 600px;
        }

        .create-product-container h2 {
            margin-left: 25%;
        }

        .form-container {
            width: 600px;
            margin: 30px 150px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group select,
        .form-group textarea {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group input[type="submit"] {
            margin-left: 650px;
            background-color: lightgray;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-group input[type="submit"]:hover {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <div class="create-product-main-container">
        <?php
        $page = "orders";
        require_once "../../dashboard/nav.php";
        ?>
        <div class="create-product-container">
            <h2>Update Order</h2>
            <form action="update_form_actions.php" method="post" enctype="multipart/form-data">
                <div class="form-container">
                    <div class="form-group">
                        <label for="orderID"> Order ID:</label>
                        <input type="text" id="orderID" name="orderID" value="<?= $orderID ?>" required readonly="readonly" />
                    </div>
                    <div class="form-group">
                        <label for="customerID"> Customer ID:</label>
                        <input type="text" id="customerID" name="customerID" value="<?= $customerID ?>" required readonly="readonly" />
                    </div>
                    <div class="form-group">
                        <label for="orderDate">Order Date:</label>
                        <input type="text" id="orderDate" name="orderDate" value="<?= $orderDate ?>" required readonly="readonly" />
                    </div>
                    <div class="form-group">
                        <label for="totalAmount">Total:</label>
                        <input type="number" id="totalAmount" name="totalAmount" value="<?= $totalAmount ?>" required readonly="readonly" />
                    </div>
                    <div class="form-group">
                        <label for="paymentID">Payment Method:</label>
                        <input type="text" id="paymentID" name="paymentID" value="<?= $paymentID ?>" readonly="readonly" required />
                    </div>
                    <div class="form-group">
                        <label for="orderStatus">Status:</label>
                        <select id="orderStatus" name="orderStatus" value="<?= $orderStatus ?>" required>
                            <option value="pending">Pending</option>
                            <option value="delivering">Delivering</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit" />
                </div>
            </form>
        </div>
    </div>


</body>

</html>