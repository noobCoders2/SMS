<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../assets/css/global.css" rel="stylesheet">
    <link href="../../assets/css/sidebar.css" rel="stylesheet">
    <link href="../../assets/css/navbar.css" rel="stylesheet">
    <link href="../../assets/css/footer.css" rel="stylesheet">
    <link href="../../assets/css/reports.css" rel="stylesheet">
</head>

<body>
    <!-- Sidebar -->
    <?php include('../../includes/sidebar.php') ?>

    <section class="main-content d-flex flex-column">
        <!-- NavBar -->
        <?php include('../../includes/navbar.php') ?>

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
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="../../assets/js/reports.js"></script>
</body>

</html>