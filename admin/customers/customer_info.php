<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Customer Profile</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Barlow:wght@200&family=Quicksand:wght@300..700&display=swap");

    body {
      font-family: "Quicksand", sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
    }

    .customer-info-container {
      max-width: 600px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      background-color: #f9f9f9;
    }

    input[type="text"]:disabled {
      background-color: #ffffff;
    }

    .photo {
      text-align: center;
      margin-bottom: 20px;
    }

    .photo img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      border: 5px solid #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .delete-btn {
      background-color: #ff4d4d;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      margin-left: 410px;
      margin-top: 20px;
    }

    .delete-btn:hover {
      background-color: #e60000;
    }
  </style>
</head>

<body>
  <div class="customer-info-main-container">
    <?php
    $page = "customers";
    require_once "../dashboard/nav.php";
    ?>
    <div class="customer-info-container">
      <h1>Customer Profile</h1>
      <form>
        <div class="photo">
          <img src="../images/Profile1.jpg" alt="Customer Photo" />
        </div>
        <label for="customer_id">Customer ID</label>
        <input type="text" id="customer_id" value="123456" disabled />
        <label for="customer_name">Customer Name</label>
        <input type="text" id="customer_name" value="Aye Chan" disabled />
        <label for="phone_number">Phone Number</label>
        <input type="text" id="phone_number" value="123-456-7890" disabled />
        <label for="email">Email</label>
        <input type="text" id="email" value="ayechan@example.com" disabled />
        <label for="address">Address</label>
        <input type="text" id="address" value="123 Main St, City, UK" disabled />
      </form>
      <button class="delete-btn">Delete</button>
    </div>

  </div>
</body>

</html>