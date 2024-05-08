<?php
require_once "../../../database/connect.php";

$sql = "SELECT * FROM orders WHERE order_id = $ID";
$stmt = $pdo->query($sql);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);


foreach ($orders as $order) {
    # code...

    $customerID = $order['customer_id'];
    $orderDate = $order['order_date'];
    $totalAmount = $order['total_amount'];
    $paymentID = $order['payment_id'];
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

        .create-product-container h2 {
            margin-left: 20%;
        }

        .form-container {
            max-width: 700px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .left-column,
        .right-column {
            width: calc(50% - 20px);
            margin-right: 20px;
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

        .form-group textarea {
            width: 93%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            resize: vertical;
            /* Allow vertical resizing */
        }

        .form-group input[type="date"] {
            width: calc(100% - 22px);
            /* Adjust width for date input */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group input[type="file"] {
            display: none;
            /* Hide the file input */
        }

        .upload-container {
            display: inline-block;
            background-color: #cddfff;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .upload-container:hover {
            background-color: #22489e;
            color: white;
        }

        .photo-preview {
            width: 100%;
            margin-top: 10px;
        }

        .photo-preview img {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-group input[type="submit"] {
            margin-left: 880px;
            background-color: #cddfff;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-group input[type="submit"]:hover {
            background-color: #22489e;
            color: white;
        }
    </style>
</head>

<body>
    <div class="create-product-main-container">
        <?php
        $page = "products";
        require_once "../dashboard/nav.php";
        ?>
        <div class="create-product-container">
            <h2>Update Order</h2>
            <form action="update_form_action.php" method="post" enctype="multipart/form-data">
                <div class="form-container">
                    <div class="left-column">
                        <div class="form-group">
                            <label for="orderID"> Order ID:</label>
                            <input type="text" id="orderID" name="orderID" value="<?= $ID ?>" required
                                readonly="readonly" />
                        </div>
                        <div class="form-group">
                            <label for="customerID"> Customer ID:</label>
                            <input type="text" id="customerID" name="customerID" value="<?= $customerID ?>" required
                                readonly="readonly" />
                        </div>
                        <div class="form-group">
                            <label for="orderDate">Date:</label>
                            <input type="text" id="orderDate" name="orderDate" value="<?= $orderDate ?>" required
                                readonly="readonly" />
                        </div>
                        <div class="form-group">
                            <label for="totalAmount">total:</label>
                            <input type="number" id="totalAmount" name="totalAmount" value="<?= $totalAmount ?>"
                                required readonly="readonly" />
                        </div>
                        <div class="form-group">
                            <label for="paymentID">Payment ID:</label>
                            <input type="text" id="paymentID" name="paymentID" value="<?= $paymentID ?>"
                                readonly="readonly" required />
                        </div>
                        <div class="form-group">
                            <label for="orderStatus">status:</label>
                            <select id="orderStatus" name="orderStatus" value="<?= $orderStatus ?>" required>
                                <option value="pending">Pending</option>
                                <option value="completed">Completed</option>
                                <option value="cancelled">Cancelled</option>

                            </select>
                        </div>
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