<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../assets/css/global.css" rel="stylesheet">
    <link href="../../assets/css/sidebar.css" rel="stylesheet">
    <link href="../../assets/css/navbar.css" rel="stylesheet">
    <link href="../../assets/css/footer.css" rel="stylesheet">
    <link href="../../assets/css/payroll.css" rel="stylesheet">
</head>

<body>

    <div class="d-flex main_Content_page">
        <?php include('../../includes/sidebar.php'); ?>


        <div class="container-fluid px-3 px-md-4 main-content w-100" id="mainContent">
            <!-- Navbar -->
            <?php include('../../includes/navbar.php'); ?>
            <div class="payroll-header d-flex flex-row justify-content-between mx-3 my-2 p-3">
                <div class="payroll-title">
                    <h4>Payroll Management</h4>
                    <p>Manage employee's payroll and compensation</p>
                </div>
                <div class="payroll-action d-flex align-items-center">
                    <a class="btn btn-light mx-1 px-4 py-2"><i class="bi bi-download me-2"></i>Export Payslips</a>
                    <button class="btn btn-blue mx-1 px-4 py-2"><i class="bi bi-plus me-2 fs-5"></i>Generate Payroll</button>
                </div>
            </div>

            <!--For the cards-->
            <div class="row g-2 mb-2 px-3 payrollCards container">

            </div>

            <div class="d-flex flex-column align-content-center shadow-sm p-3 rounded mx-3 payroll-container">
                <div class="mx-3">
                    <div class="pt-2">
                        <h5>Payroll Records</h5>
                    </div>
                    <div class="search-container">
                        <i class="bi bi-search"></i>
                        <input type="search" name="search" id="payroll-search" class="form-control py-2" placeholder="Search payroll by employee name or ID...">
                    </div>
                    <!--Placeholder for table-->
                    <table class="payroll-table container my-3 px-3">
                        <thead>
                            <tr class="header-row">
                                <th>Employee ID</th>
                                <th>Employee Name</th>
                                <th>Position</th>
                                <th>Department</th>
                                <th>Period</th>
                                <th>Basic Salary</th>
                                <th>Allowances</th>
                                <th>Deduction</th>
                                <th>Net Salary</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="table-container">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= $baseURL ?>/assets/js/sidebarbtn.js"></script>
    <script type="module" src="../../assets/js/payroll_table.js"></script>
    <script type="module" src="../../assets/js/payroll_card_data.js"></script>
</body>

</html>