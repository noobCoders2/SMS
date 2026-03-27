<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../assets/css/global.css" rel="stylesheet">
    <link href="../../assets/css/sidebar.css" rel="stylesheet">
    <link href="../../assets/css/navbar.css" rel="stylesheet">
    <link href="../../assets/css/footer.css" rel="stylesheet">
    <link href="../../assets/css/employee.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex main_Content_page">
        <?php include('../../includes/sidebar.php'); ?>


        <div class="container-fluid px-3 px-md-4 main-content w-100" id="mainContent">
            <!-- Navbar -->
            <?php include('../../includes/navbar.php'); ?>
            <div class="employee-header d-flex flex-row justify-content-between m-3 p-3">
                <div class="employee-title">
                    <h4>Employee Management</h4>
                    <p>Managed employee records and information</p>
                </div>
                <div class="employee-action d-flex align-items-center">
                    <button class="btn btn-light mx-1 px-4 py-2"><i class="bi bi-funnel me-2"></i>Filter</button>
                    <button class="btn btn-light mx-1 px-4 py-2"><i class="bi bi-download me-2"></i>Export</button>
                    <button class="btn btn-blue mx-1 px-4 py-2"><i class="bi bi-plus me-2 fs-5"></i>Add Employee</button>
                </div>
            </div>
            <div class="shadow-sm p-3 rounded m-3 employee-container">
                <div class="mx-3">
                    <div class="search-container">
                        <i class="bi bi-search "></i>
                        <input type="search" name="search" id="employee-search" class="form-control py-2" placeholder="Search employees by name, ID, or Department">
                    </div>

                    <!--Placeholder for table-->
                    <table class="employee-table container my-3 px-3">
                        <thead>
                            <tr class="header-row">
                                <th>Employee ID</th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Position</th>
                                <th>Department</th>
                                <th>Status</th>
                                <th>Salary</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="table-container">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="module" src="../../assets/js/getTableData.js"></script>
    <script src="<?= $baseURL ?>/assets/js/sidebarbtn.js"></script>
</body>

</html>