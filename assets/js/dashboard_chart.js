import { summaryCards } from "./data/dashboard_data.js"; 
import { toggleSidebar } from "./sidebarbtn.js";

const mainContent = document.querySelector('.main-content');

function toggleSidebar(){
  mainContent.classList.toggle("expandend");
}


// Summary Cards
const summaryContainer = document.getElementById("summaryContainer");

function createSummaryCards(cards) {
    summaryContainer.innerHTML = "";

    cards.forEach((card) => {
        const colDiv = document.createElement("div");
        colDiv.className = "col-6 col-md-3 mb-3 mb-md-0";

        colDiv.innerHTML = `
        <div class="summary-card rounded">
            
            <p>${card.title}<br>
                <h3>${card.value}</h3>
                <small class="${card.trendColor}">${card.trend}</small>
            </p>
        </div>
        `;

        summaryContainer.appendChild(colDiv);
    });
}
document.addEventListener("DOMContentLoaded", () => {
    createSummaryCards(summaryCards);
});

// Enrollment Bar Chart
new Chart(document.getElementById("enrollmentChart"), {
  type: "bar",
  data: {
    labels: ["Aug", "Sep", "Oct", "Nov", "Dec", "Jan", "Feb"],
    datasets: [
      {
        label: "Enrollment",
        data: [300, 280, 200, 180, 150, 170, 170],
        backgroundColor: "#0d6efd",
      },
    ],
  },
});

// Revenue Line Chart
new Chart(document.getElementById("revenueChart"), {
  type: "line",
  data: {
    labels: ["Aug", "Sep", "Oct", "Nov", "Dec", "Jan", "Feb"],
    datasets: [
      {
        label: "Revenue (₱M)",
        data: [3.2, 2.8, 2.5, 2.7, 2.9, 3.1, 3.6],
        borderColor: "#198754",
        fill: false,
        tension: 0.3,
      },
    ],
  },
});

// Program Distribution Pie Chart
new Chart(document.getElementById("programChart"), {
  type: "pie",
  data: {
    labels: [
      "Computer Science",
      "IT",
      "Business Admin",
      "Engineering",
      "Accountancy",
    ],
    datasets: [
      {
        data: [26, 22, 20, 18, 15],
        backgroundColor: [
          "#0d6efd",
          "#198754",
          "#ffc107",
          "#dc3545",
          "#6f42c1",
        ],
      },
    ],
  },
});

// Attendance Line Chart
new Chart(document.getElementById("attendanceChart"), {
  type: "line",
  data: {
    labels: ["Aug", "Sep", "Oct", "Nov", "Dec", "Jan", "Feb"],
    datasets: [
      {
        label: "Attendance Rate (%)",
        data: [95, 93, 90, 88, 92, 94, 92.5],
        borderColor: "#fd7e14",
        fill: false,
        tension: 0.3,
      },
    ],
  },
});

function makeChartsResponsive() {
  const ctxs = [
    "enrollmentChart",
    "revenueChart",
    "programChart",
    "attendanceChart",
  ];
  ctxs.forEach((chartId) => {
    const canvas = document.getElementById(chartId);
    if (canvas && canvas.chart) {
      canvas.chart.resize();
    }
  });
}
window.addEventListener("resize", makeChartsResponsive);
window.addEventListener("load", makeChartsResponsive);


