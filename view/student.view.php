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
            <button class="btn">
                <i class="ph ph-funnel"></i> Filter
            </button>
            <button class="btn">
                <i class="ph ph-download-simple"></i> Export
            </button>
            <button class="btn primary addModalStudent">
                <i class="ph ph-plus"></i> Add Student
            </button>
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
                <form method="POST">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" placeholder="Last Name" name="last_name">
                    </div>
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name" name="first_name">
                    </div>
                    <div class="form-group">
                        <label>Program / Course</label>
                        <select name="program">
                            <option>BS Computer Science</option>
                            <option>BS Information Technology</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Year Level</label>
                        <input type="number" value="1" max="10" min="1" name="year">
                    </div>
                    <div class="form-group">
                        <label>Enrollment Status</label>
                        <select name="status">
                            <option value="Enrolled">Enrolled</option>
                            <option value="Not Enrolled">Not Enrolled</option>
                        </select>
                    </div>
                    <div style="margin-top: 20px;">
                        <button type="submit" name="save_student" class="btn primary" style="width: 100%;">Save Student Record</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php if (!empty($success_Msg)): ?>
        <div class="success" style="color: green; background-color: #e8f5e9; padding: 10px; border-radius: 4px; margin-bottom: 20px; display: block; transition: opacity 0.5s ease;
">
            <?= htmlspecialchars($success_Msg) ?>
        </div>
    <?php endif; ?>

    <!-- CARD -->
    <div class="card">

        <!-- SEARCH -->
        <div class="table-header">
            <i class="ph ph-magnifying-glass search-icon-table"></i>
            <input
                class="search"
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
                                <i class="ph ph-eye action-icon view"></i>
                                <i class="ph ph-pencil-simple action-icon edit"></i>
                                <i class="ph ph-trash action-icon delete"></i>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>

    </div>

</div>


<?php require('partials/footer.php') ?>