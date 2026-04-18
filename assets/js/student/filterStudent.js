/**
 * Initialize filter modal and button
 */
export function initFilterStudent() {
    const filterBtn = document.querySelector('.filterBtn');
    const filterModal = document.getElementById('filterModal');
    const applyFilterButton = document.getElementById('applyFilter');
    const cancelFilterButton = document.getElementById('cancelFilter');
    const clearFiltersButton = document.getElementById('clearFilters');

    if (filterBtn) {
        filterBtn.addEventListener('click', () => {
            if (filterModal) {
                filterModal.classList.add('active');
            }
        });
    }

    if (applyFilterButton) {
        applyFilterButton.addEventListener('click', () => {
            applyFilters();
            if (filterModal) {
                filterModal.classList.remove('active');
            }
        });
    }

    if (cancelFilterButton) {
        cancelFilterButton.addEventListener('click', () => {
            if (filterModal) {
                filterModal.classList.remove('active');
            }
        });
    }

    if (clearFiltersButton) {
        clearFiltersButton.addEventListener('click', () => {
            clearFilters();
        });
    }
}

/**
 * Apply filters to student table
 */
function applyFilters() {
    const programFilter = document.getElementById('filterProgram').value;
    const statusFilter = document.getElementById('filterStatus').value;
    const yearFilter = document.getElementById('filterYear').value;

    const rows = document.querySelectorAll('tbody tr');

    rows.forEach(row => {
        const cells = row.querySelectorAll('td');
        if (cells.length < 6) return;

        const program = cells[3].textContent.trim();
        const year = cells[4].textContent.trim();
        const status = cells[5].textContent.trim();

        let show = true;

        if (programFilter && program !== programFilter) {
            show = false;
        }
        if (statusFilter && status !== statusFilter) {
            show = false;
        }
        if (yearFilter && year !== yearFilter) {
            show = false;
        }

        row.style.display = show ? '' : 'none';
    });
}

/**
 * Clear all filters
 */
function clearFilters() {
    document.getElementById('filterProgram').value = '';
    document.getElementById('filterStatus').value = '';
    document.getElementById('filterYear').value = '';

    const rows = document.querySelectorAll('tbody tr');
    rows.forEach(row => {
        row.style.display = '';
    });
}
