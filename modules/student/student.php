<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../assets/css/global.css" rel="stylesheet">
    <link href="../../assets/css/sidebar.css" rel="stylesheet">
    <link href="../../assets/css/navbar.css" rel="stylesheet">
    <link href="../../assets/css/footer.css" rel="stylesheet">
    <link href="../../assets/css/navbar_student.css" rel="stylesheet">
</head>

<body>

    <!-- Sidebar -->
    <?php include('../../includes/sidebar.php'); ?>

    <!-- Main Content -->
    <section class="main-content">
        <?php include('../../includes/navbar.php'); ?>

        <!-- Header Student Management -->
        <div class="student-header d-flex flex-row justify-content-between m-3 p-3">
            <div class="student-title">
                <h4>Student Management</h4>
                <p>Managed student records and information</p>
            </div>
            <div class="student-action d-flex align-items-center">
                <!-- Filter -->
                <button class="btn btn-light mx-1 px-4 py-2"><i class="bi bi-funnel me-2"></i>Filter</button>
                <!-- Export -->
                <button class="btn btn-light mx-1 px-4 py-2"><i class="bi bi-download me-2"></i>Export</button>
                <!-- Add Student -->
                <button class="btn mx-1 px-4 py-2 btn-primary"><i class="bi bi-plus me-2 fs-5"></i>Add Student</button>
            </div>
        </div>

        <!-- Table Student Management -->
        <div class="container-fluid">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="search-container">
                        <i class="bi bi-search"></i>
                        <input type="text" class="form-control" placeholder="Search students...">
                    </div>

                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Student ID</th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Program</th>
                                <th>Year</th>
                                <th>Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="../../assets/js/footer_year.js"></script>
    <script type="module" src="../../assets/js/student_list_table.js"></script>
</body>

</html>