/**
 * Initialize filter modal and button
 */
export function initFilterEmployee() {
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
 * Apply filters to employee table
 */
function applyFilters() {
    const positionFilter = document.getElementById('filterPosition').value;
    const statusFilter = document.getElementById('filterStatus').value;

    const rows = document.querySelectorAll('tbody tr');

    rows.forEach(row => {
        const cells = row.querySelectorAll('td');
        if (cells.length < 5) return;

        const position = cells[3].textContent.trim();
        const status = cells[4].textContent.trim();

        let show = true;

        if (positionFilter && position !== positionFilter) {
            show = false;
        }
        if (statusFilter && status !== statusFilter) {
            show = false;
        }

        row.style.display = show ? '' : 'none';
    });
}

/**
 * Clear all filters
 */
function clearFilters() {
    document.getElementById('filterPosition').value = '';
    document.getElementById('filterStatus').value = '';

    const rows = document.querySelectorAll('tbody tr');
    rows.forEach(row => {
        row.style.display = '';
    });
}
