const addModalStudent  = document.querySelector(".addModalStudent");
const displayModal = document.getElementById('addStudentModal');
const closeModalButtons = document.querySelectorAll('.modal-close');

if (addModalStudent && displayModal) {
    addModalStudent.addEventListener('click', (e) => {
        e.preventDefault();
        displayModal.classList.add("active");
    });
}

closeModalButtons.forEach(button => {
    button.addEventListener('click', (e) => {
        const overlay = e.target.closest('.modal-overlay');
        if (overlay) {
            overlay.classList.remove('active');
            if (overlay.id === 'addStudentModal') {
                setTimeout(() => {
                    location.reload();
                }, 300);
            }
        }
    });
});


