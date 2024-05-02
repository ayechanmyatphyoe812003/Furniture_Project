<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DashBoard</title>

  <!--linking with icons-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
  <!--linking with css-->
  <link rel="stylesheet" href="../style.css" />

</head>

<body>
  <div class="container">
    <?php
    $page = "dashboard";
    require_once "nav.php";
    ?>
    <main>
      <h1>Dashboard</h1>
      <div class="date">
        <input type="date" />
      </div>
      <div class="insights">
        <div class="sales">
          <span class="material-symbols-outlined"> Analytics </span>
          <div class="middle">
            <div class="left">
              <h3>Total Sales</h3>
              <h1>$25,024</h1>
            </div>

            <div class="progress">
              <svg>
                <circle cx="38" cy="38" r="36"></circle>
              </svg>
              <div class="number">
                <p>81%</p>
              </div>
            </div>

            <small class="text-muted"> Last 24 Hours</small>
          </div>
        </div>
        <!------END OF SALES-->

        <div class="expenses">
          <span class="material-symbols-outlined"> bar_chart </span>
          <div class="middle">
            <div class="left">
              <h3>Total Sales</h3>
              <h1>$25,024</h1>
            </div>

            <div class="progress">
              <svg>
                <circle cx="38" cy="38" r="36"></circle>
              </svg>
              <div class="number">
                <p>81%</p>
              </div>
            </div>

            <small class="text-muted"> Last 24 Hours</small>
          </div>
        </div>
        <!------END OF EXPENSES-->

        <div class="income">
          <span class="material-symbols-outlined"> stacked_line_chart </span>
          <div class="middle">
            <div class="left">
              <h3>Total Sales</h3>
              <h1>$25,024</h1>
            </div>

            <div class="progress">
              <svg>
                <circle cx="38" cy="38" r="36"></circle>
              </svg>
              <div class="number">
                <p>81%</p>
              </div>
            </div>

            <small class="text-muted"> Last 24 Hours</small>
          </div>
        </div>
        <!------END OF INCOME-->
      </div>
      <!------END OF INSGHTS-->
      <div class="recent-orders">
        <h2>Recent Orders</h2>
        <table>
          <thead>
            <tr>
              <th>Product Name</th>
              <th>Product Number</th>
              <th>Payment</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Chair</td>
              <td>00001</td>
              <td>Kpay</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>
            <tr>
              <td>Chair</td>
              <td>00001</td>
              <td>Kpay</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>
            <tr>
              <td>Chair</td>
              <td>00001</td>
              <td>Kpay</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>
            <tr>
              <td>Chair</td>
              <td>00001</td>
              <td>Kpay</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>
            <tr>
              <td>Chair</td>
              <td>00001</td>
              <td>Kpay</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>
            <tr>
              <td>Chair</td>
              <td>00001</td>
              <td>Kpay</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>
          </tbody>
        </table>
        <a href="#"> Show All</a>
      </div>
    </main>
  </div>
</body>

</html>