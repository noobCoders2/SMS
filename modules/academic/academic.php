
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/StudentManagementSystem/config.php'; ?>
<?php
$baseURL = BASE_URL;
$link_css = $baseURL . "/assets/css/academic.css"; 
$tab = $_GET['tab'] ?? 'courses';?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/StudentManagementSystem/includes/head.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/StudentManagementSystem/includes/sidebar.php'); ?>



<div class="container-fluid px-3 px-md-4 main-content w-100" id="mainContent">
    <!-- Navbar -->
    <?php include('../../includes/navbar.php'); ?>

    <div class="employee-header d-flex flex-column justify-content-between m-3 p-3">
        <div class="employee-title">
            <h4>Academic Management</h4>
            <p>Manage courses, subjects, and class schedules</p>
        </div>
        <div class="action-selection d-flex align-items-center">
            <a href="?tab=courses" class="btn btn-selection mx-1 px-4 py-2 <?= ($tab == 'courses') ? 'active-tab' : '' ?>">Courses</a>
            <a href="?tab=subjects" class="btn btn-selection mx-1 px-4 py-2 <?= ($tab == 'subjects') ? 'active-tab' : '' ?>">Subjects</a>
            <a href="?tab=schedules" class="btn btn-selection mx-1 px-4 py-2 <?= ($tab == 'schedules') ? 'active-tab' : '' ?>">Schedules</a>
        </div>
    </div>

    <div class="academic-content">
        <?php
        if ($tab == 'courses') {
            include 'courses.php';
        } elseif ($tab == 'subjects') {
            include 'subjects.php';
        } else {
            include 'schedules.php';
        }
        ?>
    </div>
</div>
</div>
<script src="<?= $baseURL ?>/assets/js/sidebarbtn.js"></script>
</body>

</html>