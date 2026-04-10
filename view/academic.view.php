
      <?php
        require('partials/head.php');
        require('partials/sidebar.php');
        require('partials/top_nav.php');
       ?>
        <div class="content">
            <!-- HEADER -->
            <div class="academic-header">

                <div class="header-left">
                    <h1>Academic Management</h1>
                    <p>Manage courses, subjects, and class schedules</p>

                    <!-- TABS -->
                    <div class="tabs">
                    <button class="tab active courses">Courses</button>
                    <button class="tab subjects">Subjects</button>
                    <button class="tab schedule">Schedules</button>
                    </div>
                </div>

            </div>
            <div class="header-right">
                    <button class="btn-add-acad">
                    <i class="ph ph-plus"></i>
                    Add Course
                    </button>
            </div>

            <!-- CARD -->
            <div class="card acad-card showCard Courses">

                <!-- SEARCH -->
                <div class="table-header">
                <i class="ph ph-magnifying-glass search-icon-table"></i>
                <input 
                    class="search" 
                    type="text" 
                    placeholder="Search students by name, ID, or program..."
                >
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
            <div class="card acad-card showCard Subjects">

                <!-- SEARCH -->
                <div class="table-header">
                <i class="ph ph-magnifying-glass search-icon-table"></i>
                <input 
                    class="search" 
                    type="text" 
                    placeholder="Search students by name, ID, or program..."
                >
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
            <div class="card acad-card showCard Schedule">

                <!-- SEARCH -->
                <div class="table-header">
                <i class="ph ph-magnifying-glass search-icon-table"></i>
                <input 
                    class="search" 
                    type="text" 
                    placeholder="Search students by name, ID, or program..."
                >
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