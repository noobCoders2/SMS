let selectedDeleteEmployeeId = null;

/**
 * Open/Close modal utilities
 */
function openModal(modal) {
    if (modal) {
        modal.classList.add('active');
    }
}

function closeModal(modal) {
    if (modal) {
        modal.classList.remove('active');
    }
}

/**
 * Extract employee data from element attributes
 */
function getEmployeeDataFromElement(element) {
    return {
        id: element.dataset.id || '',
        lastName: element.dataset.lastName || '',
        firstName: element.dataset.firstName || '',
        position: element.dataset.position || '',
        status: element.dataset.status || ''
    };
}

/**
 * Set data in view employee modal
 */
function setViewEmployeeData(employee) {
    document.getElementById('view_employee_id').textContent = employee.id;
    document.getElementById('view_last_name').textContent = employee.lastName;
    document.getElementById('view_first_name').textContent = employee.firstName;
    document.getElementById('view_position').textContent = employee.position;
    document.getElementById('view_status').textContent = employee.status;
}

/**
 * Edit employee modal
 */
function setEditEmployeeData(employee) {
    document.getElementById('edit_employee_id').value = employee.id;
    document.getElementById('edit_last_name').value = employee.lastName;
    document.getElementById('edit_first_name').value = employee.firstName;
    document.getElementById('edit_position').value = employee.position;
    document.getElementById('edit_status').value = employee.status;
}

/**
 * Initialize all employee modals
 */
export function initEmployeeModals() {
    const viewEmployeeModal = document.getElementById('viewEmployeeModal');
    const editEmployeeModal = document.getElementById('editEmployeeModal');
    const deleteConfirmModal = document.getElementById('deleteConfirmModal');
    const confirmDeleteButton = document.getElementById('confirmDeleteButton');
    const cancelDeleteButton = document.getElementById('cancelDeleteButton');

    // View employee modal
    const viewButtons = document.querySelectorAll('.viewEmployee');
    viewButtons.forEach(button => {
        button.addEventListener('click', () => {
            const employee = getEmployeeDataFromElement(button);
            setViewEmployeeData(employee);
            openModal(viewEmployeeModal);
        });
    });

    // Edit employee modal
    const editButtons = document.querySelectorAll('.editEmployee');
    editButtons.forEach(button => {
        button.addEventListener('click', () => {
            const employee = getEmployeeDataFromElement(button);
            setEditEmployeeData(employee);
            openModal(editEmployeeModal);
        });
    });

    // Delete employee modal
    const deleteButtons = document.querySelectorAll('.deleteEmployee');
    deleteButtons.forEach(button => {
        button.addEventListener('click', () => {
            selectedDeleteEmployeeId = button.dataset.id;
            openModal(deleteConfirmModal);
        });
    });

    if (confirmDeleteButton) {
        confirmDeleteButton.addEventListener('click', () => {
            if (selectedDeleteEmployeeId) {
                window.location.href = `?delete=${encodeURIComponent(selectedDeleteEmployeeId)}`;
            }
        });
    }

    if (cancelDeleteButton) {
        cancelDeleteButton.addEventListener('click', () => {
            closeModal(deleteConfirmModal);
            selectedDeleteEmployeeId = null;
        });
    }

    // Close modal buttons
    const closeButtons = document.querySelectorAll('.modal-close');
    closeButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modal = button.closest('.modal-overlay');
            if (modal) {
                closeModal(modal);
                if (modal.id === 'editEmployeeModal') {
                    // Reset form when closing
                    const editForm = document.getElementById('editEmployeeForm');
                    if (editForm) editForm.reset();
                }
            }
        });
    });

    // Close modals when clicking outside content
    document.querySelectorAll('.modal-overlay').forEach(modal => {
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeModal(modal);
            }
        });
    });
}

/**
 * Open add employee modal
 */
window.openEmployeeModal = function() {
    const addEmployeeModal = document.getElementById('addEmployeeModal');
    if (addEmployeeModal) {
        addEmployeeModal.classList.add('active');
        // Reset form
        const form = document.getElementById('employeeForm');
        if (form) form.reset();
    }
};

/**
 * Close add employee modal
 */
export function closeAddEmployeeModal() {
    const addEmployeeModal = document.getElementById('addEmployeeModal');
    if (addEmployeeModal) {
        addEmployeeModal.classList.remove('active');
    }
}
