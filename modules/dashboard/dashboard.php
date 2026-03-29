
<?php
$baseURL = BASE_URL;
$tab = $_GET['tab'] ?? '';
$link_css = $baseURL . "/assets/css/dashboard.css";
$title = "Dashboard";
?>
        <!-- Main Content -->
        <div class="container-fluid px-3 px-md-4 main-content w-100" id="mainContent">
            <!-- Navbar -->
            <?php include('./includes/navbar.php'); ?>
            <div class="employee-header d-flex flex-row justify-content-between p-3">
                <div class="employee-title">
                    <h4>Dashboard Management</h4>
                    <p>Welcome back, Super!</p>
                </div>
            </div>

            <div class="p-2 row mb-4" id="summaryContainer">
                <!-- Summary cards will be dynamically inserted here -->
            </div>

            <div class="p-2 row g-4 mb-4 mt-2 " id="chartsContainer">
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


    