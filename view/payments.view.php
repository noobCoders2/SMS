<?php
        require('partials/head.php');
        require('partials/sidebar.php');
        require('partials/top_nav.php');
?>

        
        <div class="content">

        <!-- Header -->
        <div class="header">
            <div>
            <h1>Accounting & Finance</h1>
            <p>Manage payments and financial transactions</p>
            </div>

            <div class="actions">
                <button class="btn">
                    <i class="ph ph-download-simple"></i> Export
                </button>
                <button class="btn primary">
                        <i class="ph ph-plus"></i> Record Payment
                </button>
            </div>
            
        </div>

        <!-- Stats -->
        <div class="stats">
            <div class="card">
            <p>Total Revenue</p>
            <h2>₱27,000</h2>
            </div>

            <div class="card">
            <p>Total Transactions</p>
            <h2 style="color: rgb(0, 17, 255);">19</h2>
            </div>

            <div class="card">
            <p>Paid</p>
            <h2 style="color: green;">1</h2>
            </div>

            <div class="card">
            <p>Pending /Partial</p>
            <h2 style="color: red;">4</h2>
            </div>
        </div>

        <!-- Table Section -->
        <div class="card">
            <h3 style="margin-bottom: 10px; margin-top: 10px; font-weight: 500;">Payroll Transactions</h3>
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
                <th>OR Number</th>
                <th>Student Name</th>
                <th>Date</th>
                <th>Amount</th>
                <th>Type</th>
                <th>Method</th>
                <th>Semester</th>
                <th>School Year</th>
                <th>Status</th>
                <th>Received By</th>
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
