<?php
require('partials/head.php');
require('partials/sidebar.php');
require('partials/top_nav.php');
?>

<div class="content">
    <!-- HEADER -->
    <div class="header">
        <div>
            <h1>Employee Management</h1>
            <p>Manage employee records and information</p>
        </div>

        <div class="actions">
            <button class="btn filterBtn">
                <i class="ph ph-funnel"></i> Filter
            </button>
            <button class="btn exportBtn">
                <i class="ph ph-download-simple"></i> Export
            </button>
            <button class="btn primary" onclick="openEmployeeModal()">
                <i class="ph ph-plus"></i> Add Employee
            </button>
        </div>
    </div>

    <div class="stats">
        <div class="card stat-card stat-total">
            <div class="card-title">
                <i class="ph ph-users stat-icon"></i>
                <span>Total Employees</span>
            </div>
            <h2><?= htmlspecialchars($total_employees) ?></h2>
        </div>
        <div class="card stat-card stat-active">
            <div class="card-title">
                <i class="ph ph-check-circle stat-icon"></i>
                <span>Active Employees</span>
            </div>
            <h2><?= htmlspecialchars($total_active) ?></h2>
        </div>
        <div class="card stat-card stat-inactive">
            <div class="card-title">
                <i class="ph ph-x-circle stat-icon"></i>
                <span>Inactive Employees</span>
            </div>
            <h2><?= htmlspecialchars($total_inactive) ?></h2>
        </div>
        <div class="card stat-card stat-professors">
            <div class="card-title">
                <i class="ph ph-graduation-cap stat-icon"></i>
                <span>Professors</span>
            </div>
            <h2><?= htmlspecialchars($total_professors) ?></h2>
        </div>
    </div>

    <!-- SUCCESS MESSAGE -->
    <?php if(!empty($success_Msg)): ?>
        <div class="alert alert-success">
            <?php echo htmlspecialchars($success_Msg); ?>
        </div>
    <?php endif; ?>

    <!-- ====================================Filter Modal  ====================================-->
    <div class="modal-overlay" id="filterModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Filter Employees</h2>
                <button class="modal-close"><i class="ph ph-x"></i></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Position</label>
                    <select id="filterPosition">
                        <option value="">All Positions</option>
                        <option>Professor</option>
                        <option>Instructor</option>
                        <option>Administrator</option>
                        <option>Support Staff</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Employment Status</label>
                    <select id="filterStatus">
                        <option value="">All Statuses</option>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
                <div style="display: flex; justify-content: space-between; margin-top: 20px;">
                    <button class="btn" type="button" id="clearFilters">Clear Filters</button>
                    <div>
                        <button class="btn" type="button" id="cancelFilter">Cancel</button>
                        <button class="btn primary" type="button" id="applyFilter">Apply Filter</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Employee Modal -->
    <div class="modal-overlay <?php echo (!empty($error_Msg)) ? 'active' : ''; ?>" id="addEmployeeModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Add New Employee</h2>
                <button class="modal-close"><i class="ph ph-x"></i></button>
            </div>
            <div class="modal-body">
                <?php if (!empty($error_Msg)): ?>
                    <p style="color: red; background-color: #ffebee; padding: 10px; border-radius: 4px;"><?= htmlspecialchars($error_Msg) ?></p>
                <?php endif; ?>
                <form method="POST" id="employeeForm">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" placeholder="Last Name" name="last_name" required>
                        <span class="error-message" id="last_name_error"></span>
                    </div>
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name" name="first_name" required>
                        <span class="error-message" id="first_name_error"></span>
                    </div>
                    <div class="form-group">
                        <label>Position</label>
                        <select name="position" required>
                            <option value="">Select Position</option>
                            <option>Professor</option>
                            <option>Instructor</option>
                            <option>Administrator</option>
                            <option>Support Staff</option>
                        </select>
                        <span class="error-message" id="position_error"></span>
                    </div>
                    <div class="form-group">
                        <label>Employment Status</label>
                        <select name="status" required>
                            <option value="">Select Status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                        <span class="error-message" id="status_error"></span>
                    </div>
                    <div style="margin-top: 20px;">
                        <button type="submit" name="save_employee" class="btn primary" style="width: 100%;">Save Employee Record</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- CARD -->
    <div class="card table-card">

        <!-- SEARCH -->
        <div class="table-header">
            <i class="ph ph-magnifying-glass search-icon-table"></i>
            <input
                class="search"
                type="text"
                placeholder="Search employees by name, ID, or position...">
        </div>

        <!-- TABLE -->
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Position</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if($list_employees): ?>
                        <?php foreach ($list_employees as $employee): ?>
                            <tr>
                                <td><?= htmlspecialchars($employee['employee_id']) ?></td>
                                <td><?= htmlspecialchars($employee['last_name']) ?></td>
                                <td><?= htmlspecialchars($employee['first_name']) ?></td>
                                <td><?= htmlspecialchars($employee['position']) ?></td>
                                <td><span class="status"> <?= htmlspecialchars($employee['status']) ?></span></td>
                                <td class="actions-cell">
                                    <i class="ph ph-eye action-icon viewEmployee" role="button"
                                        data-id="<?= htmlspecialchars($employee['employee_id'], ENT_QUOTES) ?>"
                                        data-last-name="<?= htmlspecialchars($employee['last_name'], ENT_QUOTES) ?>"
                                        data-first-name="<?= htmlspecialchars($employee['first_name'], ENT_QUOTES) ?>"
                                        data-position="<?= htmlspecialchars($employee['position'], ENT_QUOTES) ?>"
                                        data-status="<?= htmlspecialchars($employee['status'], ENT_QUOTES) ?>"
                                        title="View Employee"></i>
                                    <i class="ph ph-pencil-simple action-icon editEmployee" role="button"
                                        data-id="<?= htmlspecialchars($employee['employee_id'], ENT_QUOTES) ?>"
                                        data-last-name="<?= htmlspecialchars($employee['last_name'], ENT_QUOTES) ?>"
                                        data-first-name="<?= htmlspecialchars($employee['first_name'], ENT_QUOTES) ?>"
                                        data-position="<?= htmlspecialchars($employee['position'], ENT_QUOTES) ?>"
                                        data-status="<?= htmlspecialchars($employee['status'], ENT_QUOTES) ?>"
                                        title="Edit Employee"></i>
                                    <i class="ph ph-trash action-icon deleteEmployee" role="button"
                                        data-id="<?= htmlspecialchars($employee['employee_id'], ENT_QUOTES) ?>"
                                        title="Delete Employee"></i>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="text-center">No employees found</td>
                        </tr>
                    <?php endif; ?>

                </tbody>
            </table>
        </div>

    </div>
</div>

<!-- View Employee Modal -->
<div class="modal-overlay" id="viewEmployeeModal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>View Employee</h2>
            <button class="modal-close"><i class="ph ph-x"></i></button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label>Employee ID</label>
                <p id="view_employee_id"></p>
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <p id="view_last_name"></p>
            </div>
            <div class="form-group">
                <label>First Name</label>
                <p id="view_first_name"></p>
            </div>
            <div class="form-group">
                <label>Position</label>
                <p id="view_position"></p>
            </div>
            <div class="form-group">
                <label>Status</label>
                <p id="view_status"></p>
            </div>
        </div>
    </div>
</div>

<!-- Edit Employee Modal -->
<div class="modal-overlay" id="editEmployeeModal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Edit Employee</h2>
            <button class="modal-close"><i class="ph ph-x"></i></button>
        </div>
        <div class="modal-body">
            <?php if (!empty($edit_error_Msg)): ?>
                <p style="color: red; background-color: #ffebee; padding: 10px; border-radius: 4px;"><?= htmlspecialchars($edit_error_Msg) ?></p>
            <?php endif; ?>
            <form method="POST" id="editEmployeeForm">
                <input type="hidden" name="employee_id" id="edit_employee_id">
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" placeholder="Last Name" name="last_name" id="edit_last_name" required>
                    <span class="error-message" id="edit_last_name_error"></span>
                </div>
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" placeholder="First Name" name="first_name" id="edit_first_name" required>
                    <span class="error-message" id="edit_first_name_error"></span>
                </div>
                <div class="form-group">
                    <label>Position</label>
                    <select name="position" id="edit_position" required>
                        <option value="">Select Position</option>
                        <option>Professor</option>
                        <option>Instructor</option>
                        <option>Administrator</option>
                        <option>Support Staff</option>
                    </select>
                    <span class="error-message" id="edit_position_error"></span>
                </div>
                <div class="form-group">
                    <label>Employment Status</label>
                    <select name="status" id="edit_status" required>
                        <option value="">Select Status</option>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                    <span class="error-message" id="edit_status_error"></span>
                </div>
                <div style="margin-top: 20px;">
                    <button type="submit" name="update_employee" class="btn primary" style="width: 100%;">Update Employee Record</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal-overlay" id="deleteConfirmModal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Delete Confirmation</h2>
            <button class="modal-close"><i class="ph ph-x"></i></button>
        </div>
        <div class="modal-body">
            <p>Are you sure you want to delete this employee record? This action cannot be undone.</p>
            <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 20px;">
                <button class="btn" type="button" id="cancelDeleteButton">Cancel</button>
                <button class="btn btn-danger" type="button" id="confirmDeleteButton" style="background-color: #d32f2f; color: white;">Delete</button>
            </div>
        </div>
    </div>
</div>

<?php require('partials/footer.php') ?>

<script type="module" src="<?php echo '/StudentManagementSystem/assets/js/employee/mainEmployee.js'; ?>"></script>
