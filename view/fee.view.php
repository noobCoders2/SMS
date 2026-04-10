<?php
        require('partials/head.php');
        require('partials/sidebar.php');
        require('partials/top_nav.php');
       ?>

        
        <div class="content">

        <!-- Header -->
        <div class="header">
            <div>
            <h1>Fee Structure Management</h1>
            <p>Configure and manage tuition and fees</p>
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
            <p>Total Programs</p>
            <h2>90</h2>
            </div>

            <div class="card">
            <p>Avg/Tuition/Unit</p>
            <h2 style="color: rgb(0, 17, 255);">₱825</h2>
            </div>

            <div class="card">
            <p>Avg Misc Fees</p>
            <h2 style="color: green;">₱3,250</h2>
            </div>

            <div class="card">
            <p>Active SY</p>
            <h2 style="color: red; font-weight: bold;">2024-2025</h2>
            </div>
        </div>

        <!-- Table Section -->
        <div class="card">
            <h3 style="margin-bottom: 10px; margin-top: 10px; font-weight: 500;">Fee Structure</h3>
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
                <th>Program</th>
                <th>Year Level</th>
                <th>Semester</th>
                <th>School Year</th>
                <th>Tution Unit</th>
                <th>Misc.Fees</th>
                <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                <td>Bachelor of Science in Computer Science</td>
                <td>1st Year</td>
                <td>1st Semester</td>
                <td>2024-2025</td>
                <td>₱850</td>
                <td>₱3,500</td>
                <td class="actions-cell">
                    <i class="ph ph-pencil-simple action-icon edit"></i>
                    <i class="ph ph-trash action-icon delete"></i>
                </td>
                </tr>

                <tr>
                <td>Bachelor of Science in Computer Science</td>
                <td>1st Year</td>
                <td>1st Semester</td>
                <td>2024-2025</td>
                <td>₱850</td>
                <td>₱3,500</td>
                <td class="actions-cell">
                    <i class="ph ph-pencil-simple action-icon edit"></i>
                    <i class="ph ph-trash action-icon delete"></i>
                </td>
                </tr>

                <tr>
                <td>Bachelor of Science in Computer Science</td>
                <td>1st Year</td>
                <td>1st Semester</td>
                <td>2024-2025</td>
                <td>₱850</td>
                <td>₱3,500</td>
                <td class="actions-cell">
                    <i class="ph ph-pencil-simple action-icon edit"></i>
                    <i class="ph ph-trash action-icon delete"></i>
                </td>
                </tr>

                <tr>
                <td>Bachelor of Science in Computer Science</td>
                <td>1st Year</td>
                <td>1st Semester</td>
                <td>2024-2025</td>
                <td>₱850</td>
                <td>₱3,500</td>
                <td class="actions-cell">
                    <i class="ph ph-pencil-simple action-icon edit"></i>
                    <i class="ph ph-trash action-icon delete"></i>
                </td>
                </tr>
            </tbody>
            </table>

        </div>
        <div class="fee-grid">
            <div class="fee-card">

        <div class="fee-header">
            <div>
            <h3>Bachelor of Science in Computer Science</h3>
            <p>Year 1 • 1st Semester (2024–2025)</p>
            </div>
            <button class="edit-btn">
            <i class="ph ph-pencil-simple"></i>
            </button>
        </div>

        <div class="fee-row highlight">
            <span>Tuition per Unit</span>
            <strong>₱850</strong>
        </div>

        <div class="divider"></div>

        <div class="fee-section">
            <p class="section-title">Miscellaneous Fees</p>

            <div class="fee-row">
            <span>Library Fee</span>
            <span>₱500</span>
            </div>

            <div class="fee-row">
            <span>Laboratory Fee</span>
            <span>₱2,500</span>
            </div>

            <div class="fee-row">
            <span>ID Fee</span>
            <span>₱200</span>
            </div>

            <div class="fee-row">
            <span>Registration Fee</span>
            <span>₱300</span>
            </div>
        </div>

        <div class="divider"></div>

        <div class="fee-row total">
            <span>Total Miscellaneous</span>
            <strong>₱3,500</strong>
        </div>

        </div>

        <div class="fee-card">

        <div class="fee-header">
            <div>
            <h3>Bachelor of Science in Computer Science</h3>
            <p>Year 1 • 1st Semester (2024–2025)</p>
            </div>
            <button class="edit-btn">
            <i class="ph ph-pencil-simple"></i>
            </button>
        </div>

        <div class="fee-row highlight">
            <span>Tuition per Unit</span>
            <strong>₱850</strong>
        </div>

        <div class="divider"></div>

        <div class="fee-section">
            <p class="section-title">Miscellaneous Fees</p>

            <div class="fee-row">
            <span>Library Fee</span>
            <span>₱500</span>
            </div>

            <div class="fee-row">
            <span>Laboratory Fee</span>
            <span>₱2,500</span>
            </div>

            <div class="fee-row">
            <span>ID Fee</span>
            <span>₱200</span>
            </div>

            <div class="fee-row">
            <span>Registration Fee</span>
            <span>₱300</span>
            </div>
        </div>

        <div class="divider"></div>

        <div class="fee-row total">
            <span>Total Miscellaneous</span>
            <strong>₱3,500</strong>
        </div>

        </div>
        </div>
        
        </div>

      <?php require('partials/footer.php') ?>
