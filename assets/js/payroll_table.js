import { payrolls } from "./data/payroll_data.js";

const payrollTable = document.querySelector("tbody");

function getPayrollData(data){
    payrollTable.innerHTML = "";
    data.forEach(payroll => {
        const paidStatus = payroll.status === "Paid"? "bg-success" : "bg-secondary";
        payrollTable.innerHTML += `
            <tr>
                <td class="body-row">${payroll.employeeID}</td>
                <td class="body-row">${payroll.employeeName}</td>
                <td class="body-row">${payroll.position}</td>
                <td class="body-row">${payroll.department}</td>
                <td class="body-row">${payroll.period}</td>
                <td class="body-row">₱${payroll.basicSalary}</td>
                <td class="body-row">₱${payroll.allowances}</td>
                <td class="body-row">₱${payroll.deductions}</td>
                <td class="body-row">₱${payroll.netSalary}</td>
                <td class="body-row"><span class="paidStatusText ${paidStatus}">${payroll.status}</span></td>
                <td class="body-row">
                    <div class="action-button d-flex">
                        <button><i class="btn bi bi-eye"></i></button>
                    </div>
                </td>
            </tr>
        `;
    });
}
getPayrollData(payrolls);