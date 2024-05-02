<?php
require_once "../../database/connect.php";

$sql = "SELECT * FROM product";
$stmt = $pdo->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products Table</title>
    <style>
        body {
            background-color: #f4f4f4;
        }

        .product-main-container {
            display: grid;
            width: 96%;
            height: 100vh;
            margin: 0 auto;
            gap: 1.8rem;
            grid-template-columns: 14rem auto;
        }

        .product-container {
            max-width: 950px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .top {
            display: flex;
            justify-content: space-between;
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
    <div class="product-main-container">
        <?php
        $page = "products";
        require_once "../dashboard/nav.php";
        ?>
        <div class="product-container">
            <div class="top">
                <h2>Products</h2>
                <button>Create New Product</button>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Photo</th>
                        <th>Product Name</th>
                        <th>Brand</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($products as $product) {
                    ?>

                        <tr>
                            <th><?= $product['PID'] ?></th>
                            <td>
                                <img sr$product_itemc="https://via.placeholder.com/50" alt="Customer Photo" class="customer-photo" />
                            </td>

                            <td><?= $product['Product_Name'] ?></td>
                            <td><?= $product['Product_Brand'] ?></td>
                            <td><?= $product['Product_Category'] ?></td>
                            <td><?= $product['Product_Price'] ?></td>
                            <td><?= $product['Product_Stock'] ?></td>
                            <td><span class="material-symbols-outlined">
                                    edit_note
                                </span></td>
                        </tr>
                    <?php } ?>
                    <tr>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>