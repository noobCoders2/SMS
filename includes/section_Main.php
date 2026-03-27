<div class="d-flex main_Content_page">

    <?php include('./includes/sidebar.php'); ?>

    <section class="main-content w-100" id="mainContent">

        <?php include('./includes/navbar.php'); ?>

        <div class="container-fluid px-3 px-md-4">

            <?php
            $currentPage = basename($_SERVER['PHP_SELF']);
            $baseURL = '/' . explode('/', $_SERVER['REQUEST_URI'])[1] . '/';

            if ($currentPage == 'index.php') {
                include('./includes/dashboard.php');
            } elseif ($currentPage == 'accounting.php') {
                include('./includes/accounting.php');
            } elseif ($currentPage == 'attendance.php') {
                include('./includes/attendance.php');
            } elseif ($currentPage == 'employee.php') {
                include('./includes/employee.php');
            } else {
                echo "<h4>Page not found</h4>";
            }
            ?>

        </div>

    </section>
</div>