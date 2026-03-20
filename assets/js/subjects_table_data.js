import { subjects } from "./data/subject_list.js";

const tableData = document.querySelector("tbody");

function getTableData(data){

    tableData.innerHTML = "";

    data.forEach(subject => {

        tableData.innerHTML += `
            <td class="body-row">${subject.subjectcode}</td>
            <td class="body-row">${subject.subjectname}</td>
            <td class="body-row">${subject.units}</td>
            <td class="body-row">${subject.prerequisites}</td>
            <td class="body-row">
                <div class="action-button d-flex">
                    <button><i class="btn bi bi-eye"></i></button>
                    <button><i class="btn bi bi-pencil-square"></i></button>
                </div>
            </td>
        `;
    });
}
getTableData(subjects);