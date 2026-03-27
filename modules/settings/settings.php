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
    <link href="../../assets/css/settings.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex main_Content_page">
        <?php include('../../includes/sidebar.php'); ?>


        <div class="container-fluid px-3 px-md-4 main-content w-100" id="mainContent">
            <!-- Navbar -->
            <?php include('../../includes/navbar.php'); ?>

            <div class="settings-header mx-3 my-2 p-3">
                <div class="settings-title">
                    <h4>System Settings</h4>
                    <p>Configure system settings and preferences</p>
                </div>
            </div>
            <div class="row container align-items-stretch content">
                <!--For General Settings-->
                <div class="col-12 col-lg-6 p-4">
                    <div class="card boxes">
                        <div class="general-header pb-2">
                            <i class="bi bi-gear bg-light py-1 text-primary fw-bold px-2 fs-5 rounded"></i>
                            <span class="fw-medium ms-2">General Settings</span>
                        </div>
                        <div>
                            <div>
                                <label for="school-name" class="form-label">School Name</label>
                                <input type="text" id="school-name" class="form-control">
                            </div>
                            <div>
                                <label for="school-year" class="form-label">School Year</label>
                                <input type="text" id="school-year" class="form-control">
                            </div>
                            <div>
                                <label for="current-sem" class="form-label">Current Semester</label>
                                <select class="form-select">
                                    <option value="1" selected>1st Semester</option>
                                    <option value="2">2nd Semester</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!--For User Management-->
                <div class="col-12 col-lg-6 p-4">
                    <div class="card boxes">
                        <div class="general-header pb-2">
                            <i class="bi bi-people bg-light py-1 text-primary fw-bold px-2 fs-5 rounded"></i>
                            <span class="fw-medium ms-2">User Management</span>
                        </div>
                        <div class="management-buttons">
                            <button class="btn btn-light my-2 w-100 p-2 ps-3">
                                <p class="m-0 p-0 fw-medium text-black">Manage User Accounts</p>
                                <p class="m-0 p-0">Create, edit, and manage user accounts</p>
                            </button>
                            <button class="btn btn-light my-2 w-100 p-2 ps-3">
                                <p class="m-0 p-0 fw-medium text-black">Role Permissions</p>
                                <p class="m-0 p-0">Configure Role-Based Access Control</p>
                            </button>
                            <button class="btn btn-light my-2 w-100 p-2 ps-3">
                                <p class="m-0 p-0 fw-medium text-black">Activity Logs</p>
                                <p class="m-0 p-0">View System activity and audit trails</p>
                            </button>
                        </div>
                    </div>
                </div>
                <!--For Database Backup-->
                <div class="col-12 col-lg-6 p-4">
                    <div class="card boxes">
                        <div class="general-header pb-2">
                            <i class="bi bi-database bg-light py-1 text-primary fw-bold px-2 fs-5 rounded"></i>
                            <span class="fw-medium ms-2">Database Backup</span>
                        </div>
                        <div class="management-buttons">
                            <button class="btn btn-light my-2 w-100 p-2 ps-3">
                                <p class="m-0 p-0 fw-medium text-black">Last Backup</p>
                                <p class="m-0 p-0">March 22, 2026 - 2:00 AM</p> <!--Placeholder only-->
                            </button>
                            <button class="btn btn-light my-2 w-100 p-2 ps-3">
                                <p class="m-0 p-0 fw-medium text-black">Create Backup now</p>
                                <p class="m-0 p-0 text-primary">Manually triger a database backup</p>
                            </button>
                            <button class="btn btn-light my-2 w-100 p-2 ps-3">
                                <p class="m-0 p-0 fw-medium text-black">Backup Schedule</p>
                                <p class="m-0 p-0">Configure automated backup schedule</p>
                            </button>
                        </div>
                    </div>
                </div>
                <!--For Security Settings-->
                <div class="col-12 col-lg-6 p-4">
                    <div class="card boxes">
                        <div class="general-header pb-2">
                            <i class="bi bi-shield bg-light py-1 text-primary fw-bold px-2 fs-5 rounded"></i>
                            <span class="fw-medium ms-2">Security Settings</span>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between align-items-center my-2">
                                <div>
                                    <p class="m-0 p-0 fw-medium text-black">Two-Factor Authentications</p>
                                    <p class="m-0 p-0">Enable 2FA for all users</p>
                                </div>
                                <div class="toggle-button me-3">
                                    <input type="checkbox" id="twofa-toggle">
                                    <span class="slider"></span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center my-2">
                                <div>
                                    <p class="m-0 p-0 fw-medium text-black">Session Timeout</p>
                                    <p class="m-0 p-0">Auto logout after inactivity</p>
                                </div>
                                <div class="me-3">
                                    <select class="form-select">
                                        <option value="1" selected>15 minutes</option>
                                        <option value="2">13 minutes</option>
                                        <option value="3">1 hour</option>
                                        <option value="4">2 hours</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--For Notification Settings-->
                <div class="col-12 col-lg-6 p-4">
                    <div class="card boxes">
                        <div class="general-header pb-2">
                            <i class="bi bi-bell bg-light py-1 text-primary fw-bold px-2 fs-5 rounded"></i>
                            <span class="fw-medium ms-2">Notification Settings</span>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between align-items-center my-2">
                                <div>
                                    <p class="m-0 p-0 fw-medium text-black">Email Notifications</p>
                                    <p class="m-0 p-0">Send email alerts</p>
                                </div>
                                <div class="toggle-button me-3">
                                    <input type="checkbox" id="twofa-toggle">
                                    <span class="slider"></span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center my-2">
                                <div>
                                    <p class="m-0 p-0 fw-medium text-black">SMS Notifications</p>
                                    <p class="m-0 p-0">Send SMS alerts</p>
                                </div>
                                <div class="toggle-button me-3">
                                    <input type="checkbox" id="twofa-toggle">
                                    <span class="slider"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--For System Information-->
                <div class="col-12 col-lg-6 p-4">
                    <div class="card boxes">
                        <div class="general-header pb-2">
                            <i class="bi bi-hdd-stack bg-light py-1 text-primary fw-bold px-2 fs-5 rounded"></i>
                            <span class="fw-medium ms-2">Database Backup</span>
                        </div>
                        <div class="mt-3">
                            <div class="d-flex justify-content-between system-containers">
                                <p>System Version</p>
                                <p class="fw-medium text-black">v1.0.0</p>
                            </div>
                            <div class="d-flex justify-content-between system-containers">
                                <p>Database Status</p>
                                <p class="fw-medium text-success">Connected</p>
                            </div>
                            <div class="d-flex justify-content-between system-containers">
                                <p>Server Uptime</p>
                                <p class="fw-medium text-black">15 days</p>
                            </div>
                            <div class="d-flex justify-content-between system-containers">
                                <p>Total Users</p>
                                <p class="fw-medium text-black">2</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= $baseURL ?>/assets/js/sidebarbtn.js"></script>
</body>

</html>