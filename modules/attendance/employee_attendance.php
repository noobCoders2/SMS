<!--Course Content-->
<div class="p-2 rounded m-3 attendance-container">
    <div class="mx-3 p-2 ">
        <div class="search-container">
            <i class="bi bi-search"></i>
            <input type="text" class="form-control" placeholder="Search employees...">
        </div>

        <!--Placeholder for table-->
        <table class="employee_table_attendance container my-3 px-3">
            <thead>
                <tr class="header-row">
                    <th>Name</th>
                    <th>Date</th>
                    <th>Time In</th>
                    <th>Time Out</th>
                    <th>Status</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody id="table-container">

            </tbody>
        </table>
    </div>
</div>
<script type="module" src="../../assets/js/employeeAttendance.js"></script>