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
    <link href="../../assets/css/feestructures.css" rel="stylesheet">
</head>
<body>
    <!-- Sidebar -->
    <?php include('../../includes/sidebar.php') ?>
    <section class="main-content d-flex flex-column">       
        <!-- NavBar -->
        <?php include('../../includes/navbar.php')?>
        <!--Header-->
        <div class="fee-header d-flex flex-row justify-content-between mx-3 my-2 p-3">
            <div class="fee-title">
                <h4>Accounting & Finance</h4>
                <p>Manage payments and financial transactions</p>
            </div>
            <div class="fee-action d-flex align-items-center">
                <a class="btn btn-light mx-1 px-4 py-2"><i class="bi bi-download me-2"></i>Export</a>
                <button class="btn btn-blue mx-1 px-4 py-2"><i class="bi bi-plus me-2 fs-5"></i>Record Payment</button>
            </div>
        </div>

        <!--For the cards-->
        <div class="row g-2 mb-2 px-3 paymentCards container"><!--Not the real cards for the page-->
            
        </div>

        <!--Main Content-->
        <div class="d-flex flex-column align-content-center shadow-sm p-3 rounded mx-3 fee-container">
            <div class="mx-3">
                <div class="pt-2">
                    <h5>Fee Structures</h5>
                </div>
                <div class="search-container">               
                    <i class="bi bi-search"></i>
                    <input type="search" name="search" id="fee-search" class="form-control py-2" placeholder="Search by program, semester...">
                </div>
                <!--Placeholder for table-->
                <table class="payment-table container my-3 px-3">
                    <thead>
                        <tr class="header-row">
                            <th>Program</th>
                            <th>Year Level</th>
                            <th>Semester</th>
                            <th>School Year</th>
                            <th>Tuition/Unit</th>
                            <th>Misc. Fees</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="table-container">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script type="module" src="../../assets/js/fee_structures_table.js"></script>
    <script type="module" src="../../assets/js/payment_card_data.js"></script>
</body>
</html>