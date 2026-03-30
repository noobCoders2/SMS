<?php

$currentPage = basename($_SERVER['PHP_SELF']);
$baseURL = '/' . explode('/', $_SERVER['REQUEST_URI'])[1] . '/';
$tab = $_GET['tab'] ?? '';
$isAcademic = ($currentPage == 'academic.php');
$isAccounting = ($currentPage == 'accounting.php');
?>
<aside class="sidebar">
    <!-- Sidebar Header -->
    <header class="sidebar-header">
        <div class="logo-container">
            <img src="/StudentManagementSystem/assets/images/ericson.jpg" alt="ericson" class="img-icon">
        </div>
        <div class="text header-text">
            <span class="name">Ericson Academy</span>
            <div class="header-text">
                <span class="name2">Management System</span>
            </div>
        </div>
        <button class="sidebar-toggler">
            <span class="material-symbols-rounded">chevron_left</span>
        </button>
    </header>

    <nav class="sidebar-nav">
        <!-- Primary Top Nav -->
        <ul class="nav-list primary-nav">
            <li class="nav-item">
                <a href="<?= ($currentPage == 'index.php') ? '#' : $baseURL . '/index.php' ?>" class="nav-link">
                    <i class="bi bi-columns"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
                <ul class="custom-dropdown-menu">
                    <li class="nav-item">
                        <a class="nav-link dropdown-title">Dashboard</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="<?= ($currentPage == 'student.php') ? '#' : $baseURL . '/modules/student/student.php' ?>" class="nav-link">
                    <i class="bi bi-people"></i>
                    <span class="nav-label">Student Management</span>
                </a>
                <ul class="custom-dropdown-menu">
                    <li class="nav-item">
                        <a class="nav-link dropdown-title">Student Management</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="<?= ($currentPage == 'employee.php') ? '#' : $baseURL . '/modules/employee/employee.php' ?>" class="nav-link">
                    <i class="bi bi-person-fill-gear"></i>
                    <span class="nav-label">Employee Management</span>
                </a>
                <ul class="custom-dropdown-menu">
                    <li class="nav-item">
                        <a class="nav-link dropdown-title">Employee Management</a>
                    </li>
                </ul>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown-container">
                <a href="#" class="nav-link custom-dropdown-toggle">
                    <i class="bi bi-book"></i>
                    <span class="nav-label">Academic Management</span>
                    <span class="dropdown-icon material-symbols-rounded">keyboard_arrow_down</span>
                </a>

                <!-- Dropdown Menu -->
                <ul class="custom-dropdown-menu">
                    <li class="nav-item">
                        <a class="nav-link dropdown-title">Academic Management</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $baseURL ?>/index.php?page=academic&tab=courses" class="nav-link dropdown-link"><i class="bi bi-journal-bookmark"></i>Courses</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $baseURL ?>/index.php?page=academic&tab=subjects" class="nav-link dropdown-link"><i class="bi bi-book"></i>Subjects</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $baseURL ?>/index.php?page=academic&tab=schedules" class="nav-link dropdown-link"><i class="bi bi-calendar"></i>Schedules</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="<?= ($currentPage == 'enrollment.php') ? '#' : $baseURL . '/modules/Enrollment/enrollment.php' ?>" class="nav-link">
                    <i class="bi bi-person-plus"></i>
                    <span class="nav-label">Enrollment</span>
                </a>
                <ul class="custom-dropdown-menu">
                    <li class="nav-item">
                        <a class="nav-link dropdown-title">Enrollment</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="<?= ($currentPage == 'grade.php') ? '#' : $baseURL . '/modules/grade_management/grade.php' ?>" class="nav-link">
                    <i class="bi bi-file-earmark-text"></i>
                    <span class="nav-label">Grade Management</span>
                </a>
                <ul class="custom-dropdown-menu">
                    <li class="nav-item">
                        <a class="nav-link dropdown-title">Grade Management</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="<?= ($currentPage == 'attendance.php') ? '#' : $baseURL . '/modules/attendance/attendance.php' ?>" class="nav-link">
                    <i class="bi bi-person-check"></i>
                    <span class="nav-label">Attendance</span>
                </a>
                <ul class="custom-dropdown-menu">
                    <li class="nav-item">
                        <a class="nav-link dropdown-title">Attendance</a>
                    </li>
                </ul>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown-container">
                <a href="#" class="nav-link custom-dropdown-toggle">
                    <i class="bi bi-currency-dollar"></i>
                    <span class="nav-label">Accounting Management</span>
                    <span class="dropdown-icon material-symbols-rounded">keyboard_arrow_down</span>
                </a>

                <!-- Dropdown Menu -->
                <ul class="custom-dropdown-menu">
                    <li class="nav-item">
                        <a class="nav-link dropdown-title">Accounting Management</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= ($currentPage == 'accounting.php') ? '#' : $baseURL . '/modules/accounting/accounting.php' ?>" class="nav-link dropdown-link"><i class="bi bi-currency-dollar"></i>Payment</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= ($currentPage == 'fee_structure.php') ? '#' : $baseURL . '/modules/accounting/fee_structure.php' ?>" class="nav-link dropdown-link"><i class="bi bi-list-nested"></i>Fee Structure</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="<?= ($currentPage == 'payroll.php') ? '#' : $baseURL . '/modules/payroll/payroll.php' ?>" class="nav-link">
                    <i class="bi bi-wallet"></i>
                    <span class="nav-label">Payroll</span>
                </a>
                <ul class="custom-dropdown-menu">
                    <li class="nav-item">
                        <a class="nav-link dropdown-title">Payroll</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="<?= ($currentPage == 'report.php') ? '#' : $baseURL . '/modules/reports/reports.php' ?>" class="nav-link">
                    <i class="bi bi-file-earmark-text"></i>
                    <span class="nav-label">Reports</span>
                </a>
                <ul class="custom-dropdown-menu">
                    <li class="nav-item">
                        <a class="nav-link dropdown-title">Reports</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="<?= ($currentPage == 'settings.php') ? '#' : $baseURL . '/modules/settings/settings.php' ?>" class="nav-link">
                    <span class="material-symbols-rounded">settings</span>
                    <span class="nav-label">System Settings</span>
                </a>
                <ul class="custom-dropdown-menu">
                    <li class="nav-item">
                        <a class="nav-link dropdown-title">System Settings</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>