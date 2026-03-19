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


        <div class="container-fluid mb-3">

            <!-- Title + Actions -->
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">

                <!-- Left: Title -->
                <div>
                    <h4 class="mb-0 fw-bold">Student Management</h4>
                    <small class="text-muted">Manage student records and information</small>
                </div>

                <!-- Right: Actions -->
                <div class="d-flex align-items-center gap-2">

                    <!-- Search -->


                    <!-- Filter -->
                    <button class="btn btn-light">
                        <i class="bi bi-funnel"></i>
                        filter
                    </button>

                    <!-- Export -->
                    <button class="btn btn-success">
                        <i class="bi bi-file-earmark-excel"></i>
                        Export
                    </button>

                    <!-- Add -->
                    <button class="btn btn-primary">
                        <i class="bi bi-person-plus"></i> Add
                    </button>

                </div>
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