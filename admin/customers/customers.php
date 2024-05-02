<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Customers Table</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    .customer-main-container {
      display: grid;
      width: 96%;
      height: 100vh;
      margin: 0 auto;
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
    $page = "customers";
    require_once "../dashboard/nav.php";
    ?>
    <div class="customer-container">
      <table>
        <thead>
          <tr>
            <th>Customer Photo</th>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Address</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <img src="https://via.placeholder.com/50" alt="Customer Photo" class="customer-photo" />
            </td>
            <td>123456</td>
            <td>John Doe</td>
            <td>123-456-7890</td>
            <td>johndoe@example.com</td>
            <td>123 Main St, City, Country</td>
            <td><span class="material-symbols-outlined"> edit_note </span></td>
          </tr>
          <tr>
            <td>
              <img src="https://via.placeholder.com/50" alt="Customer Photo" class="customer-photo" />
            </td>
            <td>654321</td>
            <td>Jane Smith</td>
            <td>987-654-3210</td>
            <td>janesmith@example.com</td>
            <td>456 Elm St, Town, Country</td>
            <td><span class="material-symbols-outlined"> edit_note </span>
            <td>
          </tr>
          <!-- Add more rows for additional customers -->
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>