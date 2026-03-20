import { card_grade_status } from "./data/card_grade.js";

const status_card_grade = document.querySelector(".status_grade");

card_grade_status.forEach((item) => {
  const cardStatus = document.createElement("div");

  cardStatus.classList.add("col-12", "col-sm-6", "col-lg-3");
  cardStatus.innerHTML = `
            <div class="card stat-card border-0 shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <p class="text-muted mb-1 small">${item.label}</p>
                                <h3 class="fw-bold text-${item.color} mb-0" id="${item.id}">${item.value}</h3>
                            </div>
                        </div>
            </div>
    `;
    status_card_grade.appendChild(cardStatus);
});
