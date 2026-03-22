import { reportsData } from "./data/reports_data.js";

const container = document.getElementById("reportsContainer");

function renderReports(data) {
  container.innerHTML = "";

  data.forEach((report) => {
    let itemsHTML = "";

    report.items.forEach((item) => {
      itemsHTML += `
                <div class="report-item d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">${item.name}</h6>
                        <small class="text-muted">${item.desc}</small>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-sm btn-outline-${report.color}">
                            <i class="bi bi-file-earmark-text-fill"></i>
                        </button>
                        <button class="btn btn-sm btn-${report.color}">
                            <i class="bi bi-download"></i>
                        </button>
                    </div>
                </div>
            `;
    });

    container.innerHTML += `
            <div class="col-12 col-md-6">
                <div class="card shadow-sm border-0 h-100 report-card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">
                            <i class="bi ${report.icon} me-2 text-${report.color}"></i>
                            ${report.title}
                        </h5>
                        ${itemsHTML}
                    </div>
                </div>
            </div>
        `;
  });
}

renderReports(reportsData);

console.log(reportsData);
alert("its working, test test test");
