<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../assets/css/global.css" rel="stylesheet">
    <link href="../../assets/css/sidebar.css" rel="stylesheet">
    <link href="../../assets/css/navbar.css" rel="stylesheet">
    <link href="../../assets/css/footer.css" rel="stylesheet">
    <link href="../../assets/css/enrollment.css" rel="stylesheet">
</head>

<body>
    <!-- Sidebar -->
    <?php include('../../includes/sidebar.php') ?>
        <!-- NavBar -->
        
        <section class="main-content">
        <?php include('../../includes/navbar.php') ?>

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

            <!-- Status Card -->
            <div class="row g-2 mb-1 p-3">
                <!-- Total -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card stat-card border-0 shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <p class="text-muted mb-1 small">Total Enrollments</p>
                                <h3 class="fw-bold mb-0" id="totalEnrollments">0</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Active -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card stat-card border-0 shadow-sm ">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <p class="text-muted mb-1 small">Active Enrollments</p>
                                <h3 class="fw-bold text-success mb-0" id="activeEnrollments">0</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Completed -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card stat-card border-0 shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <p class="text-muted mb-1 small">Completed</p>
                                <h3 class="fw-bold text-primary mb-0" id="completedEnrollments">0</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card stat-card border-0 shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <p class="text-muted mb-1 small">Pending</p>
                                <h3 class="fw-bold text-warning mb-0" id="pendingEnrollments">0</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

                <!-- Table Enrollment -->
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
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>