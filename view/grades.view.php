<?php
        require('partials/head.php');
        require('partials/sidebar.php');
        require('partials/top_nav.php');
?>

        
<div class="content">

        <!-- Header -->
        <div class="header">
            <div>
            <h1>Grade Management</h1>
            <p>Input and manage student grades</p>
            </div>

            <div class="actions">
                
                <button class="btn primary">
                        <i class="ph ph-plus"></i> Input Grade
                </button>
            </div>
            
        </div>

        <!-- Stats -->
        <div class="stats">
            <div class="card">
            <p>Total Records</p>
            <h2>1,000</h2>
            </div>

            <div class="card">
            <p>Draft</p>
            <h2 style="color: rgb(0, 17, 255);">19</h2>
            </div>

            <div class="card">
            <p>Submitted</p>
            <h2 style="color: green;">1</h2>
            </div>

            <div class="card">
            <p>Approved</p>
            <h2 style="color: red;">4</h2>
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
                <th>Student Name</th>
                <th>Subject Code</th>
                <th>Subject Name</th>
                <th>Semester</th>
                <th>School Year</th>
                <th>Prelim</th>
                <th>Midterm</th>
                <th>Pre-final</th>
                <th>Final</th>
                <th>Overall</th>
                <th>Remarks</th>
                <th>Status</th>
                <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                <td>Juan Dela Cruz</td>
                <td>CS101</td>
                <td>Introduction to Programming</td>
                <td>1st Semester</td>
                <td>2023-2024</td>
                <td>88</td>
                <td>90</td>
                <td>93</td>
                <td>96</td>
                <td>98.9</td>
                <td><span class="status">Passed</span></td>
                <td><span class="status">Approved</span></td>
                <td class="actions-cell"><i class="ph ph-eye action-icon view"></i></td>
                </tr>

                <tr>
                <td>Juan Dela Cruz</td>
                <td>CS101</td>
                <td>Introduction to Programming</td>
                <td>1st Semester</td>
                <td>2023-2024</td>
                <td>88</td>
                <td>90</td>
                <td>93</td>
                <td>96</td>
                <td>98.9</td>
                <td><span class="status">Passed</span></td>
                <td><span class="status">Approved</span></td>
                <td class="actions-cell">
                    <i class="ph ph-eye action-icon view"></i>
                    <i class="ph ph-pencil-simple action-icon edit"></i>
                </td>
                </tr>
            </tbody>
            </table>

        </div>
</div>

<?php require('partials/footer.php') ?>