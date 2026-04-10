<?php
        require('partials/head.php');
        require('partials/sidebar.php');
        require('partials/top_nav.php');
       ?>

        
        <div class="content">

        <!-- Header -->
        <div class="header">
            <div>
            <h1>Payroll Management</h1>
            <p>Manage employee payroll and compensation</p>
            </div>

            <div class="actions">
                <button class="btn">
                    <i class="ph ph-download-simple"></i> Export Payslips
                </button>
                <button class="btn primary">
                        <i class="ph ph-plus"></i> Generate Payroll
                </button>
            </div>
            
        </div>

        <!-- Stats -->
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

        <!-- Table Section -->
        <div class="card">
            <h3 style="margin-bottom: 10px; margin-top: 10px; font-weight: 500;">Payroll Records</h3>
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
                <th>Employee ID</th>
                <th>Employee Name</th>
                <th>Position</th>
                <th>Department</th>
                <th>Period</th>
                <th>Basic Salary</th>
                <th>Allowance</th>
                <th>Deductions</th>
                <th>Net Salary</th>
                <th>Status</th>
                <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                <td>EMP-001</td>
                <td>Juan Daw</td>
                <td>Professor</td>
                <td>Computer Science</td>
                <td>January 2024</td>
                <td>₱45,000</td>
                <td>₱5,000</td>
                <td>₱8,500</td>
                <td>₱41,500</td>
                <td><span class="status">Paid</span></td>
                <td class="actions-cell"><i class="ph ph-eye action-icon view"></i></td>
                </tr>

                <tr>
                <td>EMP-002</td>
                <td>Testing Human</td>
                <td>Professor</td>
                <td>Computer Science</td>
                <td>January 2024</td>
                <td>₱45,000</td>
                <td>₱5,000</td>
                <td>₱8,500</td>
                <td>₱41,500</td>
                <td><span class="status">Paid</span></td>
                <td class="actions-cell"><i class="ph ph-eye action-icon view"></i></td>
                </tr>

                <tr>
                <td>EMP-001</td>
                <td>Juan Daw</td>
                <td>Professor</td>
                <td>Computer Science</td>
                <td>January 2024</td>
                <td>₱45,000</td>
                <td>₱5,000</td>
                <td>₱8,500</td>
                <td>₱41,500</td>
                <td><span class="status">Paid</span></td>
                <td class="actions-cell"><i class="ph ph-eye action-icon view"></i></td>
                </tr>

                <tr>
                <td>EMP-001</td>
                <td>Juan Daw</td>
                <td>Professor</td>
                <td>Computer Science</td>
                <td>January 2024</td>
                <td>₱45,000</td>
                <td>₱5,000</td>
                <td>₱8,500</td>
                <td>₱41,500</td>
                <td><span class="status">Paid</span></td>
                <td class="actions-cell"><i class="ph ph-eye action-icon view"></i></td>
                </tr>
            </tbody>
            </table>

        </div>
        </div>

      <?php require('partials/footer.php') ?>
