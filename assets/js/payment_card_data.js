import { paymentstatus } from "./data/payment_data_card.js";

const cardContainer = document.querySelector(".paymentCards");

paymentstatus.forEach((paymentcard) => {
    const createCards = document.createElement("div");
    createCards.classList.add("col-12", "col-sm-3", "col-lg-3");
    createCards.innerHTML = `
        <div class="card shadow-sm">
            <div class="m-1">
                <p class="small text-muted">${paymentcard.label}</p>
                <h4 class="text-${paymentcard.color}">${paymentcard.amount}</h4>
            </div>
        </div>
    `;
    cardContainer.appendChild(createCards);
});