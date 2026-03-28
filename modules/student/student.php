
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/StudentManagementSystem/config.php'; ?>
        <?php
        $baseURL = BASE_URL;
        $title = "Student Management";
        $link_css = $baseURL . "/assets/css/navbar_student.css";?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/StudentManagementSystem/includes/head.php'); ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/StudentManagementSystem/includes/sidebar.php');?>


        <div class="container-fluid px-3 px-md-4 main-content w-100" id="mainContent">
            <!-- Navbar -->
            <?php include('../../includes/navbar.php'); ?>

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

            <div class="p-2 rounded m-3 student-container">
                <div class="mx-3 p-2 ">
                    <div class="search-container">
                        <i class="bi bi-search"></i>
                        <input type="text" class="form-control" placeholder="Search students...">
                    </div>

                    <!--Placeholder for table-->
                    <table class="student_table container my-3 px-3">
                        <thead>
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
    </div>



    <!-- Bootstrap JS  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="../../assets/js/footer_year.js"></script>
    <script src="<?= $baseURL ?>/assets/js/sidebarbtn.js"></script>
    <script type="module" src="../../assets/js/student_list_table.js"></script>
</body>

</html>