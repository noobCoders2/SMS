<!--Schedules Content-->
<div class="p-2 rounded m-3">
    <div class="d-flex justify-content-end">
        <button class="btn btn-blue mx-1 px-4 py-2"><i class="bi bi-plus me-2 fs-5"></i>Add Schedule</button>
    </div>
    <div class="mx-3 shadow-sm mt-2 p-4 academic-container">
        <div class="input-group pt-3 search-container1">               
            <i class="bi bi-search"></i>
            <input type="search" name="search" id="course-search" class="form-control py-2" placeholder="Search schedule...">
        </div>

        <!--Placeholder for table-->
        <table class="academic-table container my-3 px-3">
            <thead>
                <tr class="header-row">
                    <th>Subject</th>
                    <th>Section</th>
                    <th>Instructor</th>
                    <th>Room</th>
                    <th>Days</th>
                    <th>Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="course-container">
                
            </tbody>
        </table>
    </div>
</div>
<script type="module" src="../../assets/js/schedule_table_data.js"></script>