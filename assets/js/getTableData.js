import { employee } from "./data/employee_list.js";

const tableData = document.querySelector("tbody");

function getTableData(data){

    tableData.innerHTML = "";

    data.forEach(employees => {

        const getStatus = employees.status === "Active" ? "bg-success" : "bg-secondary";

        tableData.innerHTML += `
            <td>${employees.id}</td>
            <td>${employees.lastname}</td>
            <td>${employees.firstname}</td>
            <td>${employees.position}</td>
            <td>${employees.department}</td>
            <td><span class="status-text ${getStatus}">${employees.status}</span></td>
            <td>₱${employees.salary}</td>
            <td>
                <div class="action-button d-flex">
                    <button><i class="btn bi bi-eye"></i></button>
                    <button><i class="btn bi bi-pencil-square"></i></button>
                    <button><i class="btn bi bi-trash"></i></button>
                </div>
            </td>
        `;
    });
}
getTableData(employee);