let selectedDeleteStudentId = null;

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
 * Extract student data from element attributes
 */
function getStudentDataFromElement(element) {
    return {
        id: element.dataset.id || '',
        lastName: element.dataset.lastName || '',
        firstName: element.dataset.firstName || '',
        program: element.dataset.program || '',
        year: element.dataset.year || '',
        status: element.dataset.status || ''
    };
}

/**
 * Set data in view student modal
 */
function setViewStudentData(student) {
    document.getElementById('view_student_id').textContent = student.id;
    document.getElementById('view_last_name').textContent = student.lastName;
    document.getElementById('view_first_name').textContent = student.firstName;
    document.getElementById('view_program').textContent = student.program;
    document.getElementById('view_year').textContent = student.year;
    document.getElementById('view_status').textContent = student.status;
}

/**
 * edit student modal
 */
function setEditStudentData(student) {
    document.getElementById('edit_student_id').value = student.id;
    document.getElementById('edit_last_name').value = student.lastName;
    document.getElementById('edit_first_name').value = student.firstName;
    document.getElementById('edit_program').value = student.program;
    document.getElementById('edit_year').value = student.year;
    document.getElementById('edit_status').value = student.status;
}

/**
 *all student modals
 */
export function initStudentModals() {
    const viewStudentModal = document.getElementById('viewStudentModal');
    const editStudentModal = document.getElementById('editStudentModal');
    const deleteConfirmModal = document.getElementById('deleteConfirmModal');
    const successModal = document.getElementById('successModal');
    const successMsgData = document.getElementById('successMsgData');
    const successMessage = document.getElementById('successMessage');
    const closeSuccessModal = document.getElementById('closeSuccessModal');
    const confirmDeleteButton = document.getElementById('confirmDeleteButton');
    const cancelDeleteButton = document.getElementById('cancelDeleteButton');

    // View student modal
    const viewButtons = document.querySelectorAll('.viewStudent');
    viewButtons.forEach(button => {
        button.addEventListener('click', () => {
            const student = getStudentDataFromElement(button);
            setViewStudentData(student);
            openModal(viewStudentModal);
        });
    });

    // Edit student modal
    const editButtons = document.querySelectorAll('.editStudent');
    editButtons.forEach(button => {
        button.addEventListener('click', () => {
            const student = getStudentDataFromElement(button);
            setEditStudentData(student);
            openModal(editStudentModal);
        });
    });

    // Delete student modal
    const deleteButtons = document.querySelectorAll('.deleteStudent');
    deleteButtons.forEach(button => {
        button.addEventListener('click', () => {
            selectedDeleteStudentId = button.dataset.id;
            openModal(deleteConfirmModal);
        });
    });

    if (confirmDeleteButton) {
        confirmDeleteButton.addEventListener('click', () => {
            if (selectedDeleteStudentId) {
                window.location.href = `/StudentManagementSystem/student?delete=${encodeURIComponent(selectedDeleteStudentId)}`;
            }
        });
    }

    if (cancelDeleteButton) {
        cancelDeleteButton.addEventListener('click', () => {
            closeModal(deleteConfirmModal);
            selectedDeleteStudentId = null;
        });
    }

    // Success modal
    if (successMsgData && successModal && successMessage) {
        const message = successMsgData.value.trim();
        if (message) {
            successMessage.textContent = message;
            openModal(successModal);
        }
    }

    if (closeSuccessModal) {
        closeSuccessModal.addEventListener('click', () => {
            closeModal(successModal);
        });
    }
}
