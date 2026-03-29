<?php
$link_css = $baseURL . "/assets/css/academic.css";
$tab = $_GET['tab'] ?? 'courses'; ?>


<div class="container-fluid px-3 px-md-4 main-content w-100" id="mainContent">
    <!-- Navbar -->
    <?php include(ROOT_PATH . '/includes/navbar.php'); ?>

    <div class="employee-header d-flex flex-column justify-content-between m-3 p-3">
        <div class="employee-title">
            <h4>Academic Management</h4>
            <p>Manage courses, subjects, and class schedules</p>
        </div>
        <div class="action-selection d-flex align-items-center">
            <a href="<?= $baseURL ?>/index.php?page=academic&tab=courses" class="btn btn-selection mx-1 px-4 py-2 <?= ($tab == 'courses') ? 'active-tab' : '' ?>">Courses</a>
            <a href="<?= $baseURL ?>/index.php?page=academic&tab=subjects" class="btn btn-selection mx-1 px-4 py-2 <?= ($tab == 'subjects') ? 'active-tab' : '' ?>">Subjects</a>
            <a href="<?= $baseURL ?>/index.php?page=academic&tab=schedules" class="btn btn-selection mx-1 px-4 py-2 <?= ($tab == 'schedules') ? 'active-tab' : '' ?>">Schedules</a>
        </div>
    </div>

    <div class="academic-content">
        <?php

        switch ($tab) {
            case 'courses':
                include ROOT_PATH . '/modules/academic/courses.php';
                break;
            case 'subjects':
                include ROOT_PATH . '/modules/academic/subjects.php';
                break;
            case 'schedules':
                include ROOT_PATH . '/modules/academic/schedules.php';
                break;
            default:
                include ROOT_PATH . '/modules/academic/courses.php';
        }
        ?>
    </div>
</div>
</div>
<script src="<?= $baseURL ?>/assets/js/sidebarbtn.js"></script>
</body>

</html>