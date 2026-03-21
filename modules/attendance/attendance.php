<?php
$tab = $_GET['tab'] ?? 'student_attendance';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../assets/css/global.css" rel="stylesheet">
    <link href="../../assets/css/sidebar.css" rel="stylesheet">
    <link href="../../assets/css/navbar.css" rel="stylesheet">
    <link href="../../assets/css/footer.css" rel="stylesheet">
</head>

<body>
    <!-- Sidebar -->
    <?php include('../../includes/sidebar.php') ?>
    <section class="main-content">
        <!-- NavBar -->
        <?php include('../../includes/navbar.php') ?>
        <!--Header-->
        <div class="employee-header d-flex flex-row justify-content-between m-3 p-3">
            <div class="employee-title">
                <h4>Attendance Management</h4>
                <p>Manage student attendance records</p>
            </div>
            <div class="attendance-action d-flex align-items-center">
                <button class="btn btn-light mx-1 px-4 py-2"><i class="bi bi-calendar2"></i>Select Date</button>
                <button class="btn btn-light mx-1 px-4 py-2"><i class="bi bi-download me-2"></i>Export</button>
                <button class="btn btn-blue mx-1 px-4 py-2"><i class="bi bi-plus me-2 fs-5"></i>Record Attendance</button>
            </div>
        </div>
        <div class="attendance-action d-flex align-items-center m-3 p-3 gap-2">

            <a href="?tab=student_attendance"
                class="btn <?= ($tab == 'student_attendance') ? 'btn-primary' : 'btn-light' ?>">
                Student Attendance
            </a>

            <a href="?tab=employee_attendance"
                class="btn <?= ($tab == 'employee_attendance') ? 'btn-primary' : 'btn-light' ?>">
                Employee Attendance
            </a>

        </div>

        <div class="row g-2 mb-1 p-3 status_grade">
                <!-- Status cards will be here -->

            </div>

        <div class="academic-content">
            <?php
            switch ($tab) {
                case 'employee_attendance':
                    include 'employee_attendance.php';
                    break;
                case 'student_attendance':
                default:
                    include 'student_attendance.php';
                    break;
            }
            ?>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script  type="module" src="../../assets/js/status_Card_grade.js"></script>
</body>

</html>