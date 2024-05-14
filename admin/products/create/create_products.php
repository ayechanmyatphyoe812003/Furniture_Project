<?php
require_once "../../../database/connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create Product</title>
  <link rel="stylesheet" href="../../style.css">
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

    .left-column {
      display: grid;
      grid-template-columns: 1fr;
      grid-auto-rows: auto;
    }

    .form-group:nth-child(1) {
      grid-row: 2;
    }

    .form-group:nth-child(2) {
      grid-row: 4;
    }

    .form-group:nth-child(3) {
      grid-row: 6;
    }

    .form-group:nth-child(4) {
      grid-row: 8;
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
      margin-bottom: 20px;
    }

    .form-group textarea {
      height: 890px;
      width: 93%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
      resize: none;
      /* Allow vertical resizing */
    }

    .form-group input[type="file"] {
      display: none;
    }

    .upload-container {
      display: inline-block;
      background-color: lightgray;
      color: black;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    .upload-container:hover {
      background-color: black;
      color: white;
    }

    .photo-preview1,
    .photo-preview2,
    .photo-preview3,
    .photo-preview4 {
      height: 306px;
      border: 1px dotted black;
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
    $page = "products";
    require_once "../../dashboard/nav.php";
    ?>
    <div class="create-product-container">
      <h2>Add New Furniture Product</h2>
      <form action="form_action.php" method="post" enctype="multipart/form-data">
        <div class="form-container">
          <div class="left-column">
            <div class="form-group">
              <label for="image1" class="upload-container">Upload Product Photo:</label>
              <input type="file" id="image1" name="image1" accept="image/*" required />
            </div>
            <div class="form-group">
              <label for="image2" class="upload-container">Upload Product Photo:</label>
              <input type="file" id="image2" name="image2" accept="image/*" required />
            </div>
            <div class="form-group">
              <label for="image3" class="upload-container">Upload Product Photo:</label>
              <input type="file" id="image3" name="image3" accept="image/*" required />
            </div>
            <div class="form-group">
              <label for="image4" class="upload-container">Upload Product Photo:</label>
              <input type="file" id="image4" name="image4" accept="image/*" required />
            </div>
          </div>
          <div class="right-column">
            <div class="form-group">
              <label for="productName">Product Name:</label>
              <input type="text" id="productName" name="name" required />
            </div>
            <div class="form-group">
              <label for="productBrand">Product Brand:</label>
              <input type="text" id="productBrand" name="brand" required />
            </div>
            <div class="form-group">
              <label for="category">Category:</label>

              <select name="category">
                <option value="">Select Category</option>
                <?php
                // SQL query to fetch all categories
                $sql = "SELECT * FROM category";
                $stmt = $pdo->query($sql);
                $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($categories as $category) {
                  echo "<option value='{$category['categoryID']}'>{$category['categoryName']}</option>";
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="price">Price:</label>
              <input type="number" id="price" name="price" min="0" step="0.01" required />
            </div>
            <div class="form-group">
              <label for="stock">Stock:</label>
              <input type="number" id="stock" name="stock" min="0" required />
            </div>
            <div class="form-group">
              <label for="description">Description:</label>
              <textarea id="description" name="description" required></textarea>
            </div>

          </div>
        </div>
        <div class="form-group">
          <input type="submit" value="Submit" />
        </div>
      </form>
    </div>

  </div>

  <script src="../script.js"></script>
</body>

</html>