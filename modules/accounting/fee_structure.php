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

    <div class="d-flex main_Content_page">
        <?php include('../../includes/sidebar.php'); ?>


        <div class="container-fluid px-3 px-md-4 main-content w-100" id="mainContent">
            <!-- Navbar -->
            <?php include('../../includes/navbar.php'); ?>

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
            <div class="row g-3 align-items-stretch container mb-3">
                <!-- for the table -->
                <div class="col-12 ">
                    <div class="shadow-sm p-3 rounded fee-container h-100">

                        <h5 class="mb-3">Fee Structures</h5>
                        <div class="search-container mb-3">
                            <i class="bi bi-search"></i>
                            <input type="search" id="fee-search" class="form-control" placeholder="Search by program, semester...">
                        </div>
                        <div>
                            <table class="container mb-0">
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
                                <tbody id="table-container"></tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="programContainer shadow-sm p-3 rounded " id="programContainer"></div>
                </div>

                <div class="col-6">
                    <div class="programContainer shadow-sm p-3 rounded " id="program2Container"></div>
                </div>

            </div>
        </div>
    </div>

    <script type="module" src="../../assets/js/fee_structures_table.js"></script>
    <script type="module" src="../../assets/js/payment_card_data.js"></script>
    <script type="module" src="../../assets/js/misc_info.js"></script>
    <script src="<?= $baseURL ?>/assets/js/sidebarbtn.js"></script>
</body>

</html>