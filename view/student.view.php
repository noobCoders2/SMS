<?php
require('partials/head.php');
require('partials/sidebar.php');
require('partials/top_nav.php');
?>

<div class="content">
    <!-- HEADER -->
    <div class="header">
        <div>
            <h1>Student Management</h1>
            <p>Manage student records and information</p>
        </div>

        <div class="actions">
            <button class="btn filterBtn">
                <i class="ph ph-funnel"></i> Filter
            </button>
            <button class="btn exportBtn">
                <i class="ph ph-download-simple"></i> Export
            </button>
            <button class="btn primary addModalStudent">
                <i class="ph ph-plus"></i> Add Student
            </button>
        </div>
    </div>

    <div class="stats">
        <div class="card stat-card stat-total">
            <div class="card-title">
                <i class="ph ph-users stat-icon"></i>
                <span>Total Students</span>
            </div>
            <h2><?= htmlspecialchars($total_students) ?></h2>
        </div>
        <div class="card stat-card stat-enrolled">
            <div class="card-title">
                <i class="ph ph-book-open stat-icon"></i>
                <span>Enrolled Students</span>
            </div>
            <h2><?= htmlspecialchars($total_enrolled) ?></h2>
        </div>
        <div class="card stat-card stat-bscs">
            <div class="card-title">
                <i class="ph ph-code-bold stat-icon"></i>
                <span>BS Computer Science</span>
            </div>
            <h2><?= htmlspecialchars($total_bscs) ?></h2>
        </div>
        <div class="card stat-card stat-bit">
            <div class="card-title">
                <i class="ph ph-laptop stat-icon"></i>
                <span>BS Information Technology</span>
            </div>
            <h2><?= htmlspecialchars($total_bit) ?></h2>
        </div>
    </div>

    <!-- ====================================Filter Modal  ====================================-->
    <div class="modal-overlay" id="filterModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Filter Students</h2>
                <button class="modal-close"><i class="ph ph-x"></i></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Program / Course</label>
                    <select id="filterProgram">
                        <option value="">All Programs</option>
                        <option>BS Computer Science</option>
                        <option>BS Information Technology</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Enrollment Status</label>
                    <select id="filterStatus">
                        <option value="">All Statuses</option>
                        <option value="Enrolled">Enrolled</option>
                        <option value="Not Enrolled">Not Enrolled</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Year Level</label>
                    <select id="filterYear">
                        <option value="">All Years</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
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

    <!-- Modal Structure -->
    <div class="modal-overlay <?php echo (!empty($error_Msg)) ? 'active' : ''; ?>" id="addStudentModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Add New Student</h2>
                <button class="modal-close"><i class="ph ph-x"></i></button>
            </div>
            <div class="modal-body">
                <?php if (!empty($error_Msg)): ?>
                    <p style="color: red; background-color: #ffebee; padding: 10px; border-radius: 4px;"><?= htmlspecialchars($error_Msg) ?></p>
                <?php endif; ?>
                <form method="POST" id="studentForm">
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
                        <label>Program / Course</label>
                        <select name="program" required>
                            <option value="">Select Program</option>
                            <option>BS Computer Science</option>
                            <option>BS Information Technology</option>
                        </select>
                        <span class="error-message" id="program_error"></span>
                    </div>
                    <div class="form-group">
                        <label>Year Level</label>
                        <input type="number" value="1" max="10" min="1" name="year" required>
                        <span class="error-message" id="year_error"></span>
                    </div>
                    <div class="form-group">
                        <label>Enrollment Status</label>
                        <select name="status" required>
                            <option value="">Select Status</option>
                            <option value="Enrolled">Enrolled</option>
                            <option value="Not Enrolled">Not Enrolled</option>
                        </select>
                        <span class="error-message" id="status_error"></span>
                    </div>
                    <div style="margin-top: 20px;">
                        <button type="submit" name="save_student" class="btn primary" style="width: 100%;">Save Student Record</button>
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
                class="searchStudent search"
                type="text"
                placeholder="Search students by name, ID, or program...">
        </div>

        <!-- TABLE -->
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Program</th>
                        <th>Year level</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($list_students as $list_student): ?>
                        <tr>
                            <td><?= htmlspecialchars($list_student['student_id']) ?></td>
                            <td><?= htmlspecialchars($list_student['last_name']) ?></td>
                            <td><?= htmlspecialchars($list_student['first_name']) ?></td>
                            <td><?= htmlspecialchars($list_student['program']) ?></td>
                            <td><?= htmlspecialchars($list_student['year']) ?></td>
                            <td><span class="status"> <?= htmlspecialchars($list_student['status']) ?></span></td>
                            <td class="actions-cell">
                                <i class="ph ph-eye action-icon viewStudent" role="button"
                                    data-id="<?= htmlspecialchars($list_student['student_id'], ENT_QUOTES) ?>"
                                    data-last-name="<?= htmlspecialchars($list_student['last_name'], ENT_QUOTES) ?>"
                                    data-first-name="<?= htmlspecialchars($list_student['first_name'], ENT_QUOTES) ?>"
                                    data-program="<?= htmlspecialchars($list_student['program'], ENT_QUOTES) ?>"
                                    data-year="<?= htmlspecialchars($list_student['year'], ENT_QUOTES) ?>"
                                    data-status="<?= htmlspecialchars($list_student['status'], ENT_QUOTES) ?>"
                                    title="View Student"></i>
                                <i class="ph ph-pencil-simple action-icon editStudent" role="button"
                                    data-id="<?= htmlspecialchars($list_student['student_id'], ENT_QUOTES) ?>"
                                    data-last-name="<?= htmlspecialchars($list_student['last_name'], ENT_QUOTES) ?>"
                                    data-first-name="<?= htmlspecialchars($list_student['first_name'], ENT_QUOTES) ?>"
                                    data-program="<?= htmlspecialchars($list_student['program'], ENT_QUOTES) ?>"
                                    data-year="<?= htmlspecialchars($list_student['year'], ENT_QUOTES) ?>"
                                    data-status="<?= htmlspecialchars($list_student['status'], ENT_QUOTES) ?>"
                                    title="Edit Student"></i>
                                <i class="ph ph-trash action-icon deleteStudent" role="button"
                                    data-id="<?= htmlspecialchars($list_student['student_id'], ENT_QUOTES) ?>"
                                    title="Delete Student"></i>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>

    </div>
</div>

<div class="modal-overlay" id="viewStudentModal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>View Student</h2>
            <button class="modal-close"><i class="ph ph-x"></i></button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label>Student ID</label>
                <p id="view_student_id"></p>
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
                <label>Program / Course</label>
                <p id="view_program"></p>
            </div>
            <div class="form-group">
                <label>Year Level</label>
                <p id="view_year"></p>
            </div>
            <div class="form-group">
                <label>Status</label>
                <p id="view_status"></p>
            </div>
        </div>
    </div>
</div>

<div class="modal-overlay" id="editStudentModal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Edit Student</h2>
            <button class="modal-close"><i class="ph ph-x"></i></button>
        </div>
        <div class="modal-body">
            <?php if (!empty($edit_error_Msg)): ?>
                <p style="color: red; background-color: #ffebee; padding: 10px; border-radius: 4px;"><?= htmlspecialchars($edit_error_Msg) ?></p>
            <?php endif; ?>
            <form method="POST" id="editStudentForm">
                <input type="hidden" name="student_id" id="edit_student_id">
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
                    <label>Program / Course</label>
                    <select name="program" id="edit_program" required>
                        <option value="">Select Program</option>
                        <option>BS Computer Science</option>
                        <option>BS Information Technology</option>
                    </select>
                    <span class="error-message" id="edit_program_error"></span>
                </div>
                <div class="form-group">
                    <label>Year Level</label>
                    <input type="number" value="1" max="10" min="1" name="year" id="edit_year" required>
                    <span class="error-message" id="edit_year_error"></span>
                </div>
                <div class="form-group">
                    <label>Enrollment Status</label>
                    <select name="status" id="edit_status" required>
                        <option value="">Select Status</option>
                        <option value="Enrolled">Enrolled</option>
                        <option value="Not Enrolled">Not Enrolled</option>
                    </select>
                    <span class="error-message" id="edit_status_error"></span>
                </div>
                <div style="margin-top: 20px;">
                    <button type="submit" name="update_student" class="btn primary" style="width: 100%;">Update Student Record</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal-overlay" id="deleteConfirmModal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Confirm Delete</h2>
            <button class="modal-close"><i class="ph ph-x"></i></button>
        </div>
        <div class="modal-body">
            <p>Are you sure you want to delete this student record? This action cannot be undone.</p>
            <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 20px;">
                <button class="btn" type="button" id="cancelDeleteButton">Cancel</button>
                <button class="btn primary" type="button" id="confirmDeleteButton">Delete</button>
            </div>
        </div>
    </div>
</div>

<div class="modal-overlay" id="successModal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Success</h2>
            <button class="modal-close"><i class="ph ph-x"></i></button>
        </div>
        <div class="modal-body">
            <p id="successMessage"></p>
            <div style="display: flex; justify-content: flex-end; margin-top: 20px;">
                <button class="btn primary" type="button" id="closeSuccessModal">OK</button>
            </div>
        </div>
    </div>
</div>

<input type="hidden" id="successMsgData" value="<?php echo htmlspecialchars($success_Msg); ?>">



</div>


<?php require('partials/footer.php') ?>