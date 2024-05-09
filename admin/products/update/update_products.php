<?php
require_once "../../../database/connect.php";
$productID = $_GET['ID'];
$sql = "SELECT * FROM products WHERE productID = $productID";
$stmt = $pdo->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);


foreach ($products as $product) {
    $name = $product['Product_Name'];
    $brand = $product['Product_Brand'];
    $categoryID = $product['categoryID'];

    $sql = "SELECT * FROM category WHERE categoryID = $categoryID";
    $stmt = $pdo->query($sql);
    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $category = $categories[0]['categoryName'];

    $price = $product['Product_Price'];
    $stock = $product['Product_Stock'];
    $description = $product['Product_description'];
    $img1 = $product["product_img1"];
    $img2 = $product["product_img2"];
    $img3 = $product["product_img3"];
    $img4 = $product["product_img4"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add New Furniture Product</title>
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
            margin-top: 4%;
            margin-left: 20%;
        }

        .form-container {
            max-width: 700px;
            margin-top: 3%;
            margin-left: 20%;
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

        .form-group label {
            font-size: 1.1rem;
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
            margin-top: 3%;
            margin-left: 800px;
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
        require_once "../../dashboard/nav.php";
        ?>
        <div class="create-product-container">
            <h2>Add New Furniture Product</h2>
            <form action="update_form_action.php" method="post" enctype="multipart/form-data">
                <div class="form-container">
                    <div class="left-column">
                        <div class="form-group">
                            <label for="image1" class="upload-container">Upload Product Photo:</label>
                            <input type="file" id="image1" name="image1" value="<?= $img1 ?>" accept="image/*" required />
                        </div>
                        <div class="form-group">
                            <label for="image2" class="upload-container">Upload Product Photo:</label>
                            <input type="file" id="image2" name="image2" value="<?= $img2 ?>" accept="image/*" required />
                        </div>
                        <div class="form-group">
                            <label for="image3" class="upload-container">Upload Product Photo:</label>
                            <input type="file" id="image3" name="image3" value="<?= $img3 ?>" accept="image/*" required />
                        </div>
                        <div class="form-group">
                            <label for="image4" class="upload-container">Upload Product Photo:</label>
                            <input type="file" id="image4" name="image4" value="<?= $img4 ?>" accept="image/*" required />
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="form-group">
                            <label for="productID">Product ID:</label>
                            <input type="text" id="productID" name="productID" value="<?= $productID ?>" readonly="readonly" required />
                        </div>
                        <div class="form-group">
                            <label for="productName">Product Name:</label>
                            <input type="text" id="productName" name="name" value="<?= $name ?>" required />
                        </div>
                        <div class="form-group">
                            <label for="productBrand">Product Brand:</label>
                            <input type="text" id="productBrand" name="brand" value="<?= $brand ?>" required />
                        </div>
                        <div class="form-group">
                            <label for="category">Category:</label>
                            <select name="category">

                                <?php
                                // SQL query to fetch all categories
                                $sql = "SELECT * FROM category";
                                $stmt = $pdo->query($sql);
                                $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                foreach ($categories as $category) {
                                    $selected = ($category['categoryID'] == $categoryID) ? "selected" : "";
                                    echo "<option {$selected} value='{$category['categoryID']}'>{$category['categoryName']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="number" id="price" name="price" value="<?= $price ?>" min="0" step="0.01" required />
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock:</label>
                            <input type="number" id="stock" name="stock" value="<?= $stock ?>" min="0" required />
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea id="description" name="description" value="<?= $description ?>" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit" />
                </div>
            </form>
        </div>

    </div>

    <script>
        const imageInput1 = document.getElementById("image1");
        const imageInput2 = document.getElementById("image2");
        const imageInput3 = document.getElementById("image3");
        const imageInput4 = document.getElementById("image4");
        const photoPreview1 = document.createElement("div");
        photoPreview1.classList.add("photo-preview1");
        const photoPreview3 = document.createElement("div");
        photoPreview3.classList.add("photo-preview3");
        const photoPreview2 = document.createElement("div");
        photoPreview2.classList.add("photo-preview2");
        const photoPreview4 = document.createElement("div");
        photoPreview4.classList.add("photo-preview4");
        const leftColumn = document.querySelector(".left-column");
        leftColumn.appendChild(photoPreview1);
        leftColumn.appendChild(photoPreview2);
        leftColumn.appendChild(photoPreview3);
        leftColumn.appendChild(photoPreview4);

        imageInput1.addEventListener("change", function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function() {
                    const imgElement = document.createElement("img");
                    imgElement.src = reader.result;
                    photoPreview1.innerHTML = "";
                    photoPreview1.appendChild(imgElement);
                };
                reader.readAsDataURL(file);
            } else {
                photoPreview1.innerHTML = "";
            }
        });

        imageInput2.addEventListener("change", function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function() {
                    const imgElement = document.createElement("img");
                    imgElement.src = reader.result;
                    photoPreview2.innerHTML = "";
                    photoPreview2.appendChild(imgElement);
                };
                reader.readAsDataURL(file);
            } else {
                photoPreview2.innerHTML = "";
            }
        });
        imageInput3.addEventListener("change", function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function() {
                    const imgElement = document.createElement("img");
                    imgElement.src = reader.result;
                    photoPreview3.innerHTML = "";
                    photoPreview3.appendChild(imgElement);
                };
                reader.readAsDataURL(file);
            } else {
                photoPreview3.innerHTML = "";
            }
        });
        imageInput4.addEventListener("change", function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function() {
                    const imgElement = document.createElement("img");
                    imgElement.src = reader.result;
                    photoPreview4.innerHTML = "";
                    photoPreview4.appendChild(imgElement);
                };
                reader.readAsDataURL(file);
            } else {
                photoPreview4.innerHTML = "";
            }
        });

        document.addEventListener("DOMContentLoaded", () => {
            const inputBox = documment.querySelector("img")
        })
    </script>
</body>

</html>