import { payrollstatus } from "./data/payroll_data_card.js";

const cardContainer = document.querySelector(".payrollCards");

payrollstatus.forEach((payrollcard) => {
    const createCards = document.createElement("div");
    createCards.classList.add("col-12", "col-sm-3", "col-lg-3");
    createCards.innerHTML = `
        <div class="card shadow-sm">
            <div class="m-1">
                <p class="small text-muted">${payrollcard.label}</p>
                <h4 class="text-${payrollcard.color}">${payrollcard.amount}</h4>
            </div>
        </div>
    `;
    cardContainer.appendChild(createCards);
});