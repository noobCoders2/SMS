<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./assets/css/global.css" rel="stylesheet">
    <link href="./assets/css/sidebar.css" rel="stylesheet">
    <link href="./assets/css/navbar.css" rel="stylesheet">
    <link href="./assets/css/footer.css" rel="stylesheet">
</head>

<body>
    <!-- Sidebar -->
    <?php include('./includes/sidebar.php'); ?>

    <!-- Main Content -->
     <div id="content" class="flex-grow-1">
    <button id="sidebarToggle" class="btn btn-primary mb-3">Toggle Sidebar</button>
    <h2>Main Content Area</h2>
    <p>
      This is the main content section. Resize the browser window to see the responsive behavior.
    </p>
    <p>
      The sidebar can be toggled using the button above. On smaller screens, it slides in and out.
    </p>
  </div>
</div>

    <section class="main-content">
        <h1>Hello World</h1>
        <h2>Student Management System</h2>
        <h3>Hello Po</h3>
        <p>Welcome to the admin dashboard.</p>


        <!-- foooter -->
        <?php include('./includes/footer.php'); ?>
    </section>

    <!-- Bootstrap JS  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="./assets/js/footer_year.js"></script>

</html>