<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/StudentManagementSystem/config.php'; ?>
<?php
$baseURL = BASE_URL;
$title = "Reports Management";
$link_css = $baseURL . "/assets/css/reports.css";
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/StudentManagementSystem/includes/head.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/StudentManagementSystem/includes/sidebar.php'); ?>


<div class="container-fluid px-3 px-md-4 main-content w-100" id="mainContent">
    <!-- Navbar -->
    <?php include('../../includes/navbar.php'); ?>

    <div class="payroll-header d-flex flex-row justify-content-between mx-3 my-2 p-3">
        <div class="payroll-title">
            <h4>Reports Management</h4>
            <p>Generate and export various reports</p>
        </div>

    </div>
    <div class="row g-4 px-3" id="reportsContainer">
        <!-- Reports will  inserted here -->
    </div>

    <div class="container-fluid px-3 mt-4">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h5 class="mb-3">
                    Custom Report Builder
                </h5>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">Report Type</label>
                        <select class="form-select" id="reportType">
                            <option value="">Select report</option>
                            <option value="students">Student Report</option>
                            <option value="attendance">Attendance Report</option>
                            <option value="grades">Grades Report</option>
                            <option value="finance">Finance Report</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Date Range</label>
                        <select class="form-select" id="dateRange">
                            <option value="today">Today</option>
                            <option value="week">This Week</option>
                            <option value="month">This Month</option>
                            <option value="year">This Year</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Format</label>
                        <select class="form-select" id="format">
                            <option value="pdf">PDF</option>
                            <option value="excel">Excel</option>
                            <option value="csv">CSV</option>
                        </select>
                    </div>
                </div>
                <div class="mt-4 text-end">
                    <button class="btn btn-primary px-4" id="generateReport">
                        <i class="bi bi-file-earmark-arrow-down me-2"></i>
                        Generate Report
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script type="module" src="../../assets/js/reports.js"></script>
<script src="<?= $baseURL ?>/assets/js/sidebarbtn.js"></script>
</body>

</html>