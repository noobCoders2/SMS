<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$baseURL = '/' . explode('/', $_SERVER['REQUEST_URI'])[1] . '/';
?>

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
    </header>

    <ul class="nav-links container-fluid">
        <li class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">
            <a href="<?= ($currentPage == 'index.php') ? '#' : $baseURL. '/index.php' ?>">
                <i class="bi bi-columns"></i>
                <span class="link-name">Dashboard</span>
            </a>
        </li>
        <li class="<?= ($currentPage == 'student.php') ? 'active' : '' ?>">
            <a href="<?= ($currentPage == 'student.php') ? '#' : $baseURL. '/modules/student/student.php' ?>">
                <i class="bi bi-people"></i>
                <span class="link-name">Student Management</span>
            </a>
        </li>
        <li class="<?= ($currentPage == 'employee.php') ? 'active' : '' ?>">
            <a href="<?= ($currentPage == 'employee.php') ? '#' : $baseURL. '/modules/employee/employee.php' ?>">
                <i class="bi bi-person-fill-gear"></i>
                <span class="link-name">Employee Management</span>
            </a>
        </li>
        <li class="academic-button">
            <input type="checkbox" id="academic-clicked">
            <label for="academic-clicked" class="academic-link">
                <i class="bi bi-book"></i>
                <span class="link-name">Academic Management</span>
                <i class="bi bi-chevron-down dropdown-icon ms-3"></i>
            </label>
            <ul class="dropdown-academic">
                <li><a href="#">Courses</a></li>
                <li><a href="#">Subjects</a></li>
                <li><a href="#">Class Schedule</a></li>
            </ul>
        </li>
        <li class="<?= ($currentPage == 'enrollment.php') ? 'active' : '' ?>">
            <a href="<?= ($currentPage == 'enrollment.php') ? '#' : $baseURL. '/modules/Enrollment/enrollment.php' ?>">
                <i class="bi bi-person-plus"></i>
                <span class="link-name">Enrollment</span>
            </a>
        </li>
        <li>
            <a href="">
                <i class="bi bi-file-earmark-text"></i>
                <span>Grade Management</span>
            </a>
        </li>
        <li>
            <a href="">
                <i class="bi bi-person-check"></i>
                <span>Attendance</span>
            </a>
        </li>
        <li class="accounting-button">
            <input type="checkbox" id="accounting-clicked">
            <label for="accounting-clicked" class="accounting-link">
                <i class="bi bi-currency-dollar"></i>
                <span>Accounting Management</span>
                <i class="bi bi-chevron-down dropdown-icon ms-3"></i>
            </label>
            <ul class="dropdown-accounting">
                <li><a href="#">Payment</a></li>
                <li><a href="#">Fee Structure</a></li>
            </ul>
        </li>
        <li>
            <a href="">
                <i class="bi bi-wallet"></i>
                <span>Payroll</span>
            </a>
        </li>
        <li>
            <a href="">
                <i class="bi bi-file-earmark-text"></i>
                <span>Reports</span>
            </a>
        </li>
        <li>
            <a href="">
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