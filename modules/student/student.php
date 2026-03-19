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
</head>

<body>

    <!-- Sidebar -->
    <?php include('../../includes/sidebar.php'); ?>

    <!-- Main Content -->
    <section class="main-content">
        <?php include('../../includes/navbar.php'); ?>


        <nav class="navbar bg<nav class=" navbar bg-body-tertiary">

            <div class="container-fluid ">
                <div class="d-flex align-items-center flex-column">
                    <div class="head1 p-1">
                        <h2>EricsonAcademy</h2>
                    </div>

                    <div class="head2">
                        <p>Management Student Records and information</p>
                    </div>
                </div>
                <!-- Filter Export Add Student -->
                <div class="d-flex justify-content-between">
                    <div class="p-2 flex-fill">
                        <i class="bi bi-funnel"></i>
                    </div>
                    <div class="p-2 flex-fill">
                        <i class="bi bi-funnel"></i>
                    </div>
                    <div class="p-2 flex-fill">
                        <i class="bi bi-funnel"></i>
                    </div>
                </div>

            </div>


    </section>

    <!-- Bootstrap JS  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="../../assets/js/footer_year.js"></script>
</body>

</html>