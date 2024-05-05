<?php
require_once "../../../database/connect.php";

$sql = "SELECT * FROM customer WHERE CID = $ID";
$stmt = $pdo->query($sql);
$customers = $stmt->fetchAll(PDO::FETCH_ASSOC);


foreach ($customers as $customer) {
    # code...

    $name = $customer['customer_Name'];
    $email = $customer['customer_Email'];
    $phone = $customer['customer_Phone'];
    $address = $customer['customer_Address'];
    $password = $customer['Product_Password'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Customer</title>
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
            <h2>Update Customer</h2>
            <form action="update_form_action.php" method="post" enctype="multipart/form-data">
                <div class="form-container">
                    <div class="left-column">
                        <div class="form-group">
                            <label for="customerID"> Customer ID:</label>
                            <input type="text" id="customerID" name="customerID" value="<?= $ID ?>" required
                                readonly="readonly" />
                        </div>
                        <div class="form-group">
                            <label for="customerName"> Name:</label>
                            <input type="text" id="customerName" name="name" value="<?= $name ?>" required
                                readonly="readonly" />
                        </div>
                        <div class="form-group">
                            <label for="customerEmail">Email:</label>
                            <input type="text" id="customerEmail" name="email" value="<?= $email ?>" required
                                readonly="readonly" />
                        </div>
                        <div class="form-group">
                            <label for="customerPhone">Phone:</label>
                            <input type="number" id="customerPhone" name="phone" value="<?= $phone ?>" required
                                readonly="readonly" />
                        </div>
                        <div class="form-group">
                            <label for="customerAddress">Address:</label>
                            <input type="text" id="address" name="address" value="<?= $address ?>" readonly="readonly"
                                required />
                        </div>
                        <div class="form-group">
                            <label for="stock">Password:</label>
                            <input type="text" id="password" name="password" value="<?= $password ?>" required />
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