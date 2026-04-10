<?php
        require('partials/head.php');
        require('partials/sidebar.php');
        require('partials/top_nav.php');
       ?>

        
        <div class="content">

        <!-- Header -->
        <div class="header">
            <div>
            <h1>Enrollment Management</h1>
            <p>Manage student enrollments and approvals</p>
            </div>
            <button class="btn primary">
                    <i class="ph ph-plus"></i> Add employee
            </button>
        </div>

        <!-- Stats -->
        <div class="stats">
            <div class="card">
            <p>Total Enrollments</p>
            <h2>2</h2>
            </div>

            <div class="card">
            <p>Pending</p>
            <h2 class="yellow">1</h2>
            </div>

            <div class="card">
            <p>Approved</p>
            <h2 class="green">1</h2>
            </div>

            <div class="card">
            <p>Enrolled</p>
            <h2 class="blue">0</h2>
            </div>
        </div>

        <!-- Table Section -->
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

            <table>
            <thead>
                <tr>
                <th>Student</th>
                <th>Program</th>
                <th>Year</th>
                <th>Semester</th>
                <th>Units</th>
                <th>Status</th>
                <th>Date</th>
                <th></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                <td>Jose Dela Cruz</td>
                <td>BS Computer Science</td>
                <td>2</td>
                <td>1st</td>
                <td>6</td>
                <td><span class="status">Approved</span></td>
                <td>2024-08-15</td>
                <td class="actions-cell"><i class="ph ph-eye action-icon view"></i></td>
                </tr>

                <tr>
                <td>Maria Garcia</td>
                <td>BS Information Tech</td>
                <td>1</td>
                <td>1st</td>
                <td>3</td>
                <td><span class="status">Pending</span></td>
                <td>2024-08-16</td>
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

      <?php require('partials/footer.php') ?>
