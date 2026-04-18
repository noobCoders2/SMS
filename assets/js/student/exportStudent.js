// Export
export function initExport() {
  const exportBtn = document.querySelector(".exportBtn");
  if (exportBtn) {
    exportBtn.addEventListener("click", () => {
      exportToCSV();
    });
  }

  function exportToCSV() {
    const table = document.querySelector("table");
    if (!table) return;

    let csv = [];
    const headers = [];

    // Get headers
    const headerCells = table.querySelectorAll("thead th");
    headerCells.forEach((cell) => {
      // Skip the Actions column
      if (!cell.textContent.includes("Actions")) {
        headers.push(cell.textContent.trim());
      }
    });
    csv.push(headers.join(","));

    // Get visible rows data
    const rows = table.querySelectorAll("tbody tr");
    rows.forEach((row) => {
      if (row.style.display !== "none") {
        // Only export visible rows
        const rowData = [];
        const cells = row.querySelectorAll("td");

        cells.forEach((cell, index) => {
          // Skip the Actions column (last column)
          if (index < cells.length - 1) {
            let cellText = cell.textContent.trim();
            // remove some spaces and newlines
            cellText = cellText.replace(/\s+/g, " ");
            // if have comma, will skip to next line, so we need to wrap it in quotes and escape existing quotes
            if (cellText.includes(",")) {
              cellText = '"' + cellText.replace(/"/g, '""') + '"';
            }
            rowData.push(cellText);
          }
        });

        csv.push(rowData.join(","));
      }
    });

    // Create and download CSV file
    const csvContent = csv.join("\n");
    const blob = new Blob([csvContent], { type: "text/csv;charset=utf-8;" });
    const link = document.createElement("a");

    if (link.download !== undefined) {
      const url = URL.createObjectURL(blob);
      link.setAttribute("href", url);
      link.setAttribute("download", "students_export.csv");
      link.style.visibility = "hidden";
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
    }
  }
}
