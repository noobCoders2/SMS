<?php
$tab = $_GET['tab'] ?? 'courses';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../assets/css/global.css" rel="stylesheet">
    <link href="../../assets/css/sidebar.css" rel="stylesheet">
    <link href="../../assets/css/navbar.css" rel="stylesheet">
    <link href="../../assets/css/footer.css" rel="stylesheet">
    <link href="../../assets/css/academic.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex main_Content_page">
        <?php include('../../includes/sidebar.php'); ?>


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