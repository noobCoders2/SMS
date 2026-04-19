export function initSearch() {
    const searchEmployee = document.querySelector('.search');
    if (searchEmployee) {
        searchEmployee.addEventListener('input', filterEmployeeRows);
        searchEmployee.addEventListener('keyup', function(event) {
            if (event.key === 'Enter') {
                filterEmployeeRows();
            }
        });
    }

    function filterEmployeeRows() {
        const searchTerm = searchEmployee.value.toLowerCase();
        const rows = document.querySelectorAll('tbody tr');

        rows.forEach(row => {
            const cells = row.querySelectorAll('td');
            let match = false;

            cells.forEach(cell => {
                if (cell.textContent.toLowerCase().includes(searchTerm)) {
                    match = true;
                }
            });

            row.style.display = match ? '' : 'none';
        });
    }
}
