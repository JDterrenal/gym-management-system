<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="./assets/style.css">
        
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">

        <!-- DATATABLE -->
        <link href="./assets/datatable/datatables.min.css" rel="stylesheet">
        <script src="./assets/datatable/datatables.min.js"></script>

        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

        <title>TRIPLE J FITNESS CENTER | Dashboard</title>
    </head>

    <body> 
    <div class="grid-container">

      <!-- Sidebar -->
      <?php include 'extension/sidebar.php'; ?>
      <!-- End Sidebar -->

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <h2>DASHBOARD</h2>
        </div>

        <div class="main-cards">
          <div class="card">
            <div class="card-inner">
              <h3 style="font-size: 1.4rem; color: #2962ff; font-weight: 700;">ALL MEMBERS </h3>
              <span style="font-size: 1.4rem; color: #2962ff; font-weight: 500;">249</span>
            </div>
            <div class="card-icons">
              <span style="font-size: 2.5rem; color: #2962ff; " class="material-icons-outlined">groups</span>
            </div>
          </div>

          <div class="card">
            <div class="card-inner">
              <h3 style="font-size: 1.4rem; color: #ff6d00; font-weight: 700;">DAILY LOGIN</h3>
              <span style="font-size: 1.4rem; color: #ff6d00; font-weight: 500;">25</span>
            </div>
            <span style="font-size: 2.5rem; color: #ff6d00;" class="material-icons-outlined">how_to_reg</span>
          </div>

          <div class="card">
            <div class="card-inner">
              <h3 style="font-size: 1.4rem; color: #2e7d32; font-weight: 700;">ACTIVE</h3>
              <span style="font-size: 1.4rem; color: #2e7d32; font-weight: 500;">1500</span>
            </div>
            <span style="font-size: 2.5rem; color: #2e7d32;" class="material-icons-outlined">sports_gymnastics</span>
          </div>
          <div class="card">
                <div class="card-inner">
                  <h3 style="font-size: 1.4rem; color: #d50000; font-weight: 700;">INACTIVE</h3>
                  <span style="font-size: 1.4rem; color: #d50000; font-weight: 500;">56</span>
                </div>
                <span style="font-size: 2.5rem; color: #d50000;" class="material-icons-outlined">hotel</span>
            </div>
        </div>

        <!-- MONTHLY INCOME CHART -->
        <div class="charts">
          <div class="charts-card">
            <h2 class="chart-title">Monthly Income</h2>
            <div id="area-chart"></div>
          </div>
        </div>

        <!-- MEMBERSHIP & PAID/UNPAID CHART -->
        <div class="charts">
          <div class="charts-card">
            <h2 class="chart-title">Membership Type</h2>
            <div id="bar-chart"></div>
          </div>
        </div>

        <div class="charts">
          <div class="charts-card">
            <h2 class="chart-title">Payment Status</h2>
            <div id="area-chart"></div>
          </div>
        </div>
      </main>
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="./assets/script.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.bundle.js"></script>
    </body>
</html>