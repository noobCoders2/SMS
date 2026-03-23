import { miscforCS, miscforED } from "./data/program_fee_structures.js";

const miscContainer = document.getElementById("programContainer");
const misc2Container = document.getElementById("program2Container");

function getMiscData(data){
    miscContainer.innerHTML = "";
    data.forEach(miscs => {
        miscContainer.innerHTML += `
            <div class="d-flex justify-content-between">
                        <div>
                            <h6>Bachelor of Science in Computer Science</h6>
                            <p>${miscs.yearLevel} - ${miscs.semester} (${miscs.schoolYear})</p>
                        </div>
                        <i class="bi bi-pencil-square"></i>
            </div>

            <div class="d-flex justify-content-between">
                <p>Tuition Per Unit</p>
                <p class="fw-medium text-black">${miscs.miscFees}</p>
            </div>

            <div class="feesContainer">
                <p class="text-black fw-semi-bold my-1">Miscellaneous Fees:</p>
                <div class="ms-3">
                    <div class="d-flex justify-content-between">
                        <p class="my-0">Library Fee</p>
                        <p class="fw-medium text-black my-1">₱${miscs.libraryFee}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="my-0">Laboratory Fee</p>
                        <p class="fw-medium text-black my-1">₱${miscs.laboratoryFee}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="my-0">ID Fee</p>
                        <p class="fw-medium text-black my-1">₱${miscs.idFee}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="my-0">Registration Fee</p>
                        <p class="fw-medium text-black my-1">₱${miscs.registrationFee}</p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between my-1">
                <p class="text-black fw-semi-bold">Total Miscellaneous</p>
                <p class="fw-bold text-primary">₱${miscs.miscFees}</p>
            </div>
        `;
    });
}
function getAnotherData(data){
    misc2Container.innerHTML = "";
    data.forEach(miscs => {
        misc2Container.innerHTML += `
            <div class="d-flex justify-content-between">
                        <div>
                            <h6>Bachelor of Secondary Education</h6>
                            <p>${miscs.yearLevel} - ${miscs.semester} (${miscs.schoolYear})</p>
                        </div>
                        <i class="bi bi-pencil-square"></i>
            </div>
            <div class="d-flex justify-content-between">
                <p>Tuition Per Unit</p>
                <p class="fw-medium text-black">${miscs.miscFees}</p>
            </div>
            <div class="feesContainer">
                <p class="text-black fw-semi-bold my-1">Miscellaneous Fees:</p>
                <div class="ms-3">
                    <div class="d-flex justify-content-between">
                        <p class="my-0">Library Fee</p>
                        <p class="fw-medium text-black my-1">₱${miscs.libraryFee}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="my-0">Laboratory Fee</p>
                        <p class="fw-medium text-black my-1">₱${miscs.laboratoryFee}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="my-0">ID Fee</p>
                        <p class="fw-medium text-black my-1">₱${miscs.idFee}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="my-0">Registration Fee</p>
                        <p class="fw-medium text-black my-1">₱${miscs.registrationFee}</p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between my-1">
                <p class="text-black fw-semi-bold">Total Miscellaneous</p>
                <p class="fw-bold text-primary">₱${miscs.miscFees}</p>
            </div>
        `;
    });
}
getMiscData(miscforCS);
getAnotherData(miscforED);