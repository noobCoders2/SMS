import { schedules } from "./data/schedule_list.js";

const tableData = document.querySelector("tbody");

function getTableData(data){

    tableData.innerHTML = "";

    data.forEach(schedule => {

        tableData.innerHTML += `
            <td class="body-row">${schedule.subject}</td>
            <td class="body-row">${schedule.section}</td>
            <td class="body-row">${schedule.instructor}</td>
            <td class="body-row">${schedule.room}</td>
            <td class="body-row">${schedule.days}</td>
            <td class="body-row">${schedule.time}</td>
            <td class="body-row">
                <div class="action-button d-flex">
                    <button><i class="btn bi bi-eye"></i></button>
                    <button><i class="btn bi bi-pencil-square"></i></button>
                </div>
            </td>
        `;
    });
}
getTableData(schedules);