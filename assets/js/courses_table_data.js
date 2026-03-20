import { courses } from "./data/course_list.js";

const tableData = document.querySelector("tbody");

function getTableData(data){

    tableData.innerHTML = "";

    data.forEach(course => {

        tableData.innerHTML += `
            <td class="body-row">${course.coursecode}</td>
            <td class="body-row">${course.coursename}</td>
            <td class="body-row">${course.department}</td>
            <td class="body-row">${course.totalunits}</td>
            <td class="body-row">${course.years}</td>
            <td class="body-row">
                <div class="action-button d-flex">
                    <button><i class="btn bi bi-eye"></i></button>
                    <button><i class="btn bi bi-pencil-square"></i></button>
                </div>
            </td>
        `;
    });
}
getTableData(courses);