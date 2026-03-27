<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$baseURL = '/' . explode('/', $_SERVER['REQUEST_URI'])[1] . '/';
$tab = $_GET['tab'] ?? '';
$isAcademic = ($currentPage == 'academic.php');
$isAccounting = ($currentPage == 'accounting.php')
?>
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
    <div class="d-flex main_Content_page">
        <div class="sidebar">
    <!-- Header of Sidebar -->
    <header class="logo-details d-flex align-items-center">
        <div class="logo-container">
            <img src="/StudentManagementSystem/assets/images/ericson.jpg" alt="ericson" class="img-icon">
        </div>
        <div class="text header-text">
            <span class="name">Ericson Academy</span>
            <div class="header-text">
                <span class="name2">Management System</span>
            </div>
        </div>

        <i class="bi bi-chevron-right toggle-btn" onclick="toggleSidebar()"></i>
    </header>

    <ul class="nav-links container-fluid">
        <li class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">
            <a href="<?= ($currentPage == 'index.php') ? '#' : $baseURL . '/index.php' ?>">
                <i class="bi bi-columns"></i>
                <span class="link-name">Dashboard</span>
            </a>
        </li>
        <li class="<?= ($currentPage == 'student.php') ? 'active' : '' ?>">
            <a href="<?= ($currentPage == 'student.php') ? '#' : $baseURL . '/modules/student/student.php' ?>">
                <i class="bi bi-people"></i>
                <span class="link-name">Student Management</span>
            </a>
        </li>
        <li class="<?= ($currentPage == 'employee.php') ? 'active' : '' ?>">
            <a href="<?= ($currentPage == 'employee.php') ? '#' : $baseURL . '/modules/employee/employee.php' ?>">
                <i class="bi bi-person-fill-gear"></i>
                <span class="link-name">Employee Management</span>
            </a>
        </li>
        <li class="academic-button <?= ($currentPage == 'academic.php') ? 'active' : '' ?>">
            <input type="checkbox" id="academic-clicked">
            <label for="academic-clicked" class="academic-link">
                <i class="bi bi-book"></i>
                <span class="link-name">Academic Management</span>
                <i class="bi bi-chevron-down dropdown-icon ms-3"></i>
            </label>
            <ul class="dropdown-academic <?= $isAcademic ? "show" : '' ?>">
                <li class="academic-button <?= ($tab == 'courses.php') ? 'active' : '' ?>">
                    <a href="<?= ($currentPage == 'courses.php') ? '#' : $baseURL . '/modules/academic/academic.php?tab=courses' ?>">
                        <i class="bi bi-journal-bookmark"></i>
                        <span class="ms-2">Courses</span>
                    </a>
                </li>
                <li class="academic-button <?= ($tab == 'subjects.php') ? 'active' : '' ?>">
                    <a href="<?= ($currentPage == 'subjects.php') ? '#' : $baseURL . '/modules/academic/academic.php?tab=subjects' ?>">
                        <i class="bi bi-book"></i>
                        <span class="ms-2">Subjects</span>
                    </a>
                </li>
                <li class="academic-button <?= ($tab == 'schedules.php') ? 'active' : '' ?>">
                    <a href="<?= ($currentPage == 'schedules.php') ? '#' : $baseURL . '/modules/academic/academic.php?tab=schedules' ?>">
                        <i class="bi bi-calendar"></i>
                        <span class="ms-2">Schedules</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="<?= ($currentPage == 'enrollment.php') ? 'active' : '' ?>">
            <a href="<?= ($currentPage == 'enrollment.php') ? '#' : $baseURL . '/modules/Enrollment/enrollment.php' ?>">
                <i class="bi bi-person-plus"></i>
                <span class="link-name">Enrollment</span>
            </a>
        </li>
        <li class="<?= ($currentPage == 'grade.php') ? 'active' : '' ?>">
            <a href="<?= ($currentPage == 'grade.php') ? '#' : $baseURL . '/modules/grade_management/grade.php' ?>">
                <i class="bi bi-file-earmark-text"></i>
                <span class="link-name">Grade Management</span>
            </a>
        </li>
        <li class="<?= ($currentPage == 'attendance.php') ? 'active' : '' ?>">
            <a href="<?= ($currentPage == 'attendance.php') ? '#' : $baseURL . '/modules/attendance/attendance.php' ?>">
                <i class="bi bi-person-check"></i>
                <span class="link-name">Attendance</span>
            </a>
        </li>
        <li class="accounting-button <?= ($currentPage == 'accounting.php') ? 'active' : '' ?>">
            <input type="checkbox" id="accounting-clicked">
            <label for="accounting-clicked" class="accounting-link">
                <i class="bi bi-currency-dollar"></i>
                <span>Accounting Management</span>
                <i class="bi bi-chevron-down dropdown-icon ms-3"></i>
            </label>
            <ul class="dropdown-accounting <?= $isAccounting ? "show" : '' ?>">
                <li>
                    <a href="<?= ($currentPage == 'accounting.php') ? '#' : $baseURL . '/modules/accounting/accounting.php' ?>">
                        <i class="bi bi-currency-dollar"></i>
                        <span class="ms-2">Payment</span>
                    </a>
                </li>
                <li>
                    <a href="<?= ($currentPage == 'fee_structure.php') ? '#' : $baseURL . '/modules/accounting/fee_structure.php' ?>">
                        <i class="bi bi-list-nested"></i>
                        <span class="ms-2">Fee Structure</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="<?= ($currentPage == 'payroll.php') ? 'active' : '' ?>">
            <a href="<?= ($currentPage == 'payroll.php') ? '#' : $baseURL . '/modules/payroll/payroll.php' ?>">
                <i class="bi bi-wallet"></i>
                <span>Payroll</span>
            </a>
        </li>
        <li class="<?= ($currentPage == 'report.php') ? 'active' : '' ?>">
            <a href="<?= ($currentPage == 'report.php') ? '#' : $baseURL . '/modules/reports/reports.php' ?>">
                <i class="bi bi-file-earmark-text"></i>
                <span>Reports</span>
            </a>
        </li>
        <li class="<?= ($currentPage == 'settings.php') ? 'active' : '' ?>">
            <a href="<?= ($currentPage == 'settings.php') ? '#' : $baseURL . '/modules/settings/settings.php' ?>">
                <i class="bi bi-gear"></i>
                <span>System Settings</span>
            </a>
        </li>
    </ul>
    <!-- Sidebar Footer -->
    <div class="sidebar-footer">
        <?php include __DIR__ . '/footer.php' ?>
    </div>
</div>


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
    <script src="<?= $baseURL ?>/assets/js/sidebarbtn.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Test Js Graph And Chart -->
    <script type="module" src="./assets/js/dashboard_chart.js"></script>


</body>

</html>
