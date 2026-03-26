<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./assets/css/global.css" rel="stylesheet">
    <link href="./assets/css/sidebar.css" rel="stylesheet">
    <link href="./assets/css/navbar.css" rel="stylesheet">
    <link href="./assets/css/footer.css" rel="stylesheet">
    <link href="./assets/css/dashboard.css" rel="stylesheet">
</head>

<body>
    <!-- Sidebar -->
    <?php include('./includes/sidebar.php'); ?>

    <!-- Main Content -->
    <section class="main-content">
        <!-- Navbar -->
        <?php include('./includes/navbar.php'); ?>


        <div class="container-fluid px-3 px-md-4">
            <div class="employee-header d-flex flex-row justify-content-between p-3">
                <div class="employee-title">
                    <h4>Dashboard Management</h4>
                    <p>Welcome back, Super!</p>
                </div>
            </div>
            <div class="row mb-4" id="summaryContainer">
                <!-- <div class="col-md-3">
                    <div class="summary-card rounded">
                        <h3>1,250</h3>
                        <p>Total Students<br><small class="text-success">↑ 8.2% from last month</small></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="summary-card">
                        <h3>85</h3>
                        <p>Total Employees<br><small class="text-success">↑ 3.1% from last month</small></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="summary-card">
                        <h3>₱15.8M</h3>
                        <p>Total Revenue<br><small class="text-success">↑ 12.5% from last month</small></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="summary-card">
                        <h3>92.5%</h3>
                        <p>Attendance Rate<br><small class="text-danger">↓ 2.3% from last month</small></p>
                    </div>
                </div> -->
            </div>
            <div class="row g-4 mb-4 mt-2 " id="chartsContainer">
                <div class="col-12 col-md-10 col-lg-6 col-xl-6">
                    <div class="chart-wrapper">
                        <h5 class="mb-3 fw-semibold text-muted px-3 py-2 rounded">
                            <i class="bi bi-calendar-check me-2 text-primary"></i>
                            Monthly Enrollment Trends
                        </h5>
                        <div class="chart-container">
                            <canvas id="enrollmentChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-10 col-lg-6 col-xl-6">
                    <div class="chart-wrapper h-100">
                        <h5 class="mb-3 fw-semibold text-muted px-3 py-2 rounded">
                            <i class="bi bi-currency-dollar me-2 text-success"></i>
                            Revenue Overview
                        </h5>
                        <div class="chart-container">
                            <canvas id="revenueChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-10 col-lg-6 col-xl-6">
                    <div class="chart-wrapper h-100">
                        <h5 class="mb-3 fw-semibold text-muted px-3 py-2 rounded">
                            <i class="bi bi-people-fill me-2 text-info"></i>
                            Student Distribution by Program
                        </h5>
                        <div class="chart-container">
                            <canvas id="programChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-10 col-lg-6 col-xl-6">
                    <div class="chart-wrapper h-100">
                        <h5 class="mb-3 fw-semibold text-muted px-3 py-2 rounded">
                            <i class="bi bi-people-fill me-2 text-warning"></i>
                            Monthly Attendance Rate
                        </h5>
                        <div class="chart-container">
                            <canvas id="attendanceChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- Bootstrap JS  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="./assets/js/footer_year.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Test Js Graph And Chart -->
    <script type="module" src="./assets/js/dashboard_chart.js"></script>

</body>

</html>