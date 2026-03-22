import {employeeAttendance} from "./data/employee_attendance.js";

const tableData = document.getElementById("table-container");

function getTableData(data) {
  tableData.innerHTML = "";

  data.forEach((employee) => {
    const getStatus =
      employee.status === "Active" ? "bg-success" : "bg-secondary";

    tableData.innerHTML += `
            <td>${employee.name}</td>
            <td>${employee.date}</td>
            <td>${employee.time_in}</td>
            <td>${employee.time_out}</td>
            <td><span class="status-text ${getStatus}">${employee.status}</span></td>
            <td>${employee.remarks}</td>
            <td class="text-center">
                    <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
            </td>
        `;
  });
}
getTableData(employeeAttendance);