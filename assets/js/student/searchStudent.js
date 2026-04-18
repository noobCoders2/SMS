export function initSearch() {
const searchStudent = document.querySelector('.search');
if (searchStudent) {
    searchStudent.addEventListener('input', filterStudentRows);
    searchStudent.addEventListener('keyup', function(event) {
        if (event.key === 'Enter') {
            filterStudentRows();
        }
    });
}

function filterStudentRows() {
    const searchTerm = searchStudent.value.toLowerCase();
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
