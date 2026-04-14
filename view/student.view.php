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
    <div class="modal-overlay" id="addStudentModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Add New Student</h2>
                <button class="modal-close"><i class="ph ph-x"></i></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <label>Program / Course</label>
                        <select>
                            <option>BS Computer Science</option>
                            <option>BS Information Technology</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Year Level</label>
                        <input type="number" value="1" max="10" min="1">
                    </div>
                    <div style="margin-top: 20px;">
                        <button type="button" class="btn primary" style="width: 100%;">Save Student Record</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
                        <th>Year</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>2024-00001</td>
                        <td>Dela Cruz</td>
                        <td>Jose</td>
                        <td>Bachelor of Science in Computer Science</td>
                        <td>2</td>
                        <td><span class="status">Enrolled</span></td>
                        <td class="actions-cell">
                            <i class="ph ph-eye action-icon view"></i>
                            <i class="ph ph-pencil-simple action-icon edit"></i>
                            <i class="ph ph-trash action-icon delete"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>2024-00002</td>
                        <td>Garcia</td>
                        <td>Maria</td>
                        <td>Bachelor of Science in Information Technology</td>
                        <td>1</td>
                        <td><span class="status">Enrolled</span></td>
                        <td class="actions-cell">
                            <i class="ph ph-eye action-icon view"></i>
                            <i class="ph ph-pencil-simple action-icon edit"></i>
                            <i class="ph ph-trash action-icon delete"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>2023-00045</td>
                        <td>Santos</td>
                        <td>Juan</td>
                        <td>Bachelor of Science in Business Administration</td>
                        <td>3</td>
                        <td><span class="status">Enrolled</span></td>
                        <td class="actions-cell">
                            <i class="ph ph-eye action-icon view"></i>
                            <i class="ph ph-pencil-simple action-icon edit"></i>
                            <i class="ph ph-trash action-icon delete"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>2022-00123</td>
                        <td>Reyes</td>
                        <td>Anna</td>
                        <td>Bachelor of Science in Accountancy</td>
                        <td>4</td>
                        <td><span class="status">Enrolled</span></td>
                        <td class="actions-cell">
                            <i class="ph ph-eye action-icon view"></i>
                            <i class="ph ph-pencil-simple action-icon edit"></i>
                            <i class="ph ph-trash action-icon delete"></i>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

</div>


<?php require('partials/footer.php') ?>