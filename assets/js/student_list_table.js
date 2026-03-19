import { studentList } from "./data/student_list.js";

const tableBody = document.querySelector("tbody");

function renderTable(data) {
    tableBody.innerHTML = "";

    data.forEach(student => {
        const statusClass = student.status === "Active" ? "bg-success" : "bg-secondary";

        tableBody.innerHTML += `
            <tr>
                <td>${student.id}</td>
                <td>${student.last_name}</td>
                <td>${student.first_name}</td>
                <td>${student.program}</td>
                <td>${student.year}</td>
                <td><span class="badge ${statusClass}">${student.status}</span></td>
                <td class="text-center">
                    <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                </td>
            </tr>
        `;
    });
}

// Initial load
renderTable(studentList);