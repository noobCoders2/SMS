import { studentAttendance } from "./data/student_attendance.js";

const tableData = document.getElementById("table-container");

function getTableData(data) {
  tableData.innerHTML = "";

  data.forEach((student) => {
    const getStatus =
      student.status === "Active" ? "bg-success" : "bg-secondary";

    tableData.innerHTML += `
            <td>${student.name}</td>
            <td>${student.date}</td>
            <td>${student.time_in}</td>
            <td>${student.time_out}</td>
            <td><span class="status-text ${getStatus}">${student.status}</span></td>
            <td>${student.remarks}</td>
            <td class="text-center">
                    <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
            </td>
        `;
  });
}
getTableData(studentAttendance);
console.log(studentAttendance);
