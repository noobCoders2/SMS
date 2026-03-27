
<!--Course Content-->
<div class="rounded m-3">
    <div class="d-flex justify-content-end">
        <button class="btn btn-blue mx-1 px-4 py-2"><i class="bi bi-plus me-2 fs-5"></i>Add Course</button>
    </div>
    <div class="shadow-sm mt-2 p-4 academic-container">
        <div class="input-group pt-3 search-container1">               
            <i class="bi bi-search"></i>
            <input type="search" name="search" id="course-search" class="form-control py-2" placeholder="Search courses...">
        </div>

        <!--Placeholder for table-->
        <table class="academic-table container my-3 px-3">
            <thead>
                <tr class="header-row">
                    <th>Course Code</th>
                    <th>Course Name</th>
                    <th>Department</th>
                    <th>Total Units</th>
                    <th>Years</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="course-container">
                
            </tbody>
        </table>
    </div>
</div>
<script type="module" src="../../assets/js/courses_table_data.js"></script>