<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../assets/css/global.css" rel="stylesheet">
    <link href="../../assets/css/sidebar.css" rel="stylesheet">
    <link href="../../assets/css/navbar.css" rel="stylesheet">
    <link href="../../assets/css/footer.css" rel="stylesheet">
    <link href="../../assets/css/grade.css" rel="stylesheet">
</head>

<body>

    <div class="d-flex main_Content_page">
        <?php include('../../includes/sidebar.php'); ?>


        <div class="container-fluid px-3 px-md-4 main-content w-100" id="mainContent">
            <!-- Navbar -->
            <?php include('../../includes/navbar.php'); ?>

            
            <div class="grade-header d-flex flex-row justify-content-between m-3 p-3">
                <div class="grade-title">
                    <h4>Grade Management</h4>
                    <p>Managed student grade records and information</p>
                </div>
                <div class="grade-action d-flex align-items-center">
                    <button class="btn btn-blue mx-1 px-4 py-2"><i class="bi bi-plus me-2 fs-5"></i>Input Grade</button>
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
                                    <th>Subject Code</th>
                                    <th>Subject Name</th>
                                    <th>Semester</th>
                                    <th>School Year</th>
                                    <th>Prelim</th>
                                    <th>Midterm</th>
                                    <th>Final</th>
                                    <th>Overall</th>
                                    <th>Remarks</th>
                                    <th>Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>

                            <tbody id="status_grade">

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="../../assets/js/grade_table.js"></script>
    <script src="<?= $baseURL ?>/assets/js/sidebarbtn.js"></script>
</body>

</html>