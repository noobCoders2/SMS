import { programs } from "./data/program_fee_structures.js";

const feeTable = document.querySelector("tbody");

function getFeeData(data){
    feeTable.innerHTML = "";
    data.forEach(program => {
        feeTable.innerHTML += `
            <tr>
                <td class="body-row">${program.name}</td>
                <td class="body-row">${program.yearLevel}</td>
                <td class="body-row">${program.semester}</td>
                <td class="body-row">${program.schoolYear}</td>
                <td class="body-row">${program.tuitionunit}</td>
                <td class="body-row">${program.miscFees}</td>
                <td class="body-row">
                    <div class="action-button d-flex">
                        <button><i class="btn bi bi-pencil-square"></i></button>
                        <button><i class="btn bi bi-trash"></i></button>
                    </div>
                </td>
            </tr>
        `;
    });
}
getFeeData(programs);