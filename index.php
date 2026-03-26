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
    <div class="d-flex">
        <?php include('./includes/sidebar.php'); ?>

        <!-- Main Content -->
        <section class="main-content w-100" id="mainContent">
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
                    <!-- Summary cards will be dynamically inserted here -->
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
    </div>


    <!-- Bootstrap JS  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="./assets/js/footer_year.js"></script>
    <script src="./assets/js/sidebarbtn.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Test Js Graph And Chart -->
    <script type="module" src="./assets/js/dashboard_chart.js"></script>


</body>

</html>