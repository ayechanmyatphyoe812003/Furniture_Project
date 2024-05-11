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
  <!-- Include Charts.js library -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
  <div class="container">
    <?php
    $page = "dashboard";
    require_once "nav.php";
    ?>

    <div>
      <h1>Sales Charts Dashboard</h1>
      <!-- HTML canvas element for chart -->
      <canvas id="salesChart" width="800" height="400"></canvas>

      <script>
        // Sample sales data
        const salesData = {
          labels: ['January', 'February', 'March', 'April', 'May', 'June'],
          datasets: [{
            label: 'Sales',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            data: [1000, 1500, 1200, 1800, 2000, 1700]
          }]
        };

        // Chart configuration
        const chartConfig = {
          type: 'line',
          data: salesData,
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: true
                }
              }]
            }
          }
        };

        // Initialize Chart.js instance
        const ctx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(ctx, chartConfig);
      </script>
    </div>
  </div>
</body>

</html>