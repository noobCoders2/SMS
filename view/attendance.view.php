
       <?php
        require('partials/head.php');
        require('partials/sidebar.php');
        require('partials/top_nav.php');
       ?>

        <div class="content">
            <!-- HEADER -->
            <div class="attendance-header">

                <div class="header-left">
                    <h1>Attendance Management</h1>
                    <p>Track student and employee attendance</p>

                    <!-- TABS -->
                    <div class="nav-btn">   
                    <button class="student-btn">Student Attendance</button>
                    <button class="employee-btn">Employee Attendance</button>
                    </div>
                </div>

                 <div class="actions">
                    <button class="btn">
                        <i class="ph ph-calendar-check"></i> Select Date
                    </button>
                    <button class="btn">
                        <i class="ph ph-download-simple"></i> Export
                    </button>
                    <button class="btn-add-acad">
                        <i class="ph ph-plus"></i>
                        Record Attendance
                    </button>
                </div>
            </div>
            <!-- Stats in Attendance || CSS Global -->
              <div class="stats">
                  <div class="card">
                  <p>Total Payroll</p>
                  <h2>2</h2>
                  </div>

                  <div class="card">
                  <p>Total Records</p>
                  <h2 style="color: rgb(0, 17, 255);">19</h2>
                  </div>

                  <div class="card">
                  <p>Paid</p>
                  <h2 style="color: green;">1</h2>
                  </div>

                  <div class="card">
                  <p>Pending</p>
                  <h2 style="color: red;">4</h2>
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