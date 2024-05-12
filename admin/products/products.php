<?php
require_once "../../database/connect.php";

$sql = "SELECT * FROM products";
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
            text-align: center;
        }

        th,
        td {
            border-bottom: 1px solid #e0e0e0;
            padding: 10px;

        }

        td {
            font-size: 0.9rem;
            font-weight: 450;
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

        #updateButton:hover {
            color: gray;
        }

        .createProductButton {
            width: 130px;
            background-color: white;
            border: 1px solid black;
            font-size: 0.9rem;
            padding: 5px;
            border-radius: 3px;
            text-align: center;
            font-weight: 450;
        }

        .createProductButton:hover {
            background-color: black;
            color: white;
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
    <div class="product-main-container">
        <?php
        $page = "products";
        require_once "../dashboard/nav.php";
        ?>
        <div class="product-container">
            <div class="top">
                <h2>Products</h2>
                <a href="create/create_products.php" class="createProductButton">Create New Product</a>
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
                        $image = "../../images/" . $product['Product_Name'] . $product['Product_Brand'] . "/" . $product['product_img1'];
                        $sql = "SELECT * FROM category WHERE categoryID={$product['categoryID']}";
                        $stmt = $pdo->query($sql);
                        $category = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        ?>

                        <tr>
                            <th><?= $product['productID'] ?></th>
                            <td>
                                <img src="<?= $image ?>" alt="Product Photo" class="customer-photo" />
                            </td>

                            <td><?= $product['Product_Name'] ?></td>
                            <td><?= $product['Product_Brand'] ?></td>
                            <td><?= $category[0]['categoryName'] ?></td>
                            <td><?= $product['Product_Price'] ?></td>
                            <td><?= $product['Product_Stock'] ?></td>
                            <td>
                                <a href="update/update_products.php?ID=<?php echo $product['productID'] ?>">
                                    <span class=" material-symbols-outlined" id="updateButton">
                                        edit_note
                                    </span> </a>
                                <a href="delete_form.php?ID=<?php echo $product['productID'] ?>" class="delete"><span
                                        class="material-symbols-outlined">
                                        delete
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