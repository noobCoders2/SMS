import { payments } from "./data/payment_data.js";

const paymentTable = document.querySelector("tbody");

function getPaymentData(data){
    paymentTable.innerHTML = "";
    data.forEach(payment => {
        const paidStatus = payment.status === "Paid"? "bg-success" : "bg-secondary";
        paymentTable.innerHTML += `
            <tr>
                <td class="body-row">${payment.ornumber}</td>
                <td class="body-row">${payment.studentname}</td>
                <td class="body-row">${payment.date}</td>
                <td class="body-row">${payment.amount}</td>
                <td class="body-row">${payment.type}</td>
                <td class="body-row">${payment.method}</td>
                <td class="body-row">${payment.semester}</td>
                <td class="body-row">${payment.schoolyear}</td>
                <td class="body-row"><span class="paidStatusText ${paidStatus}">${payment.status}</span></td>
                <td class="body-row">${payment.receivedby}</td>
            </tr>
        `;
    });
}
getPaymentData(payments);