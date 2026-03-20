import { gradeList } from "./data/grades_data.js";

const tableData = document.getElementById("status_grade");

function getTableData(data){
    tableData.innerHTML = "";
    data.forEach((grade) => {
        tableData.innerHTML += `
            <tr>
                <td>${grade.student_name}</td>
                <td>${grade.subject_code}</td>
                <td>${grade.subject_name}</td>
                <td>${grade.semester}</td>
                <td>${grade.school_year}</td>
                <td>${grade.prelim}</td>
                <td>${grade.midterm}</td>
                <td>${grade.final}</td>
                <td>${grade.overall}</td>
                <td>${grade.remarks}</td>
                <td><span class="status-text bg-${grade.status === "Approved" ? "warning" : grade.status === "Submitted" ? "primary" : "success"}">${grade.status}</span></td>
                <td> <button class="btn btn-sm btn-primary">Edit</button> </td>
            </tr>
        `;
    });
}

getTableData(gradeList);