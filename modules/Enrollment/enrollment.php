<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/StudentManagementSystem/config.php'; ?>
<?php
$baseURL = BASE_URL;
$title = "Enrollment Management";
$link_css = $baseURL . "/assets/css/enrollment.css";
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/StudentManagementSystem/includes/head.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/StudentManagementSystem/includes/sidebar.php'); ?>



<div class="container-fluid px-3 px-md-4 main-content w-100" id="mainContent">
    <!-- Navbar -->
    <?php include('../../includes/navbar.php'); ?>

    <!--Header-->
    <div class="employee-header d-flex flex-row justify-content-between m-3 p-3">
        <div class="employee-title">
            <h4>Enrollment Management</h4>
            <p>Managed student enrollment records and information</p>
        </div>
        <div class="employee-action d-flex align-items-center">
            <button class="btn btn-blue mx-1 px-4 py-2 btn-primary"><i class="bi bi-plus me-2 fs-5"></i>New Enrollment</button>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card shadow-sm border-1">
            <div class="card-body">
                <div class="search-container">
                    <i class="bi bi-search"></i>
                    <input type="text" class="form-control" placeholder="Search Enrollments...">
                </div>

                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Student Name</th>
                            <th>Program</th>
                            <th>Year Level</th>
                            <th>Semester</th>
                            <th>School Year</th>
                            <th>Total Units</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script type="module" src="../../assets/js/status_Card_grade.js"></script>
<script src="<?= $baseURL ?>/assets/js/sidebarbtn.js"></script>
</body>

</html>