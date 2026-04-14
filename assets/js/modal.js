
const addModalStudent  = document.querySelector(".addModalStudent");
const closeModal  = document.querySelector('.modal-close');
const displayModal = document.getElementById('addStudentModal');

addModalStudent.addEventListener('click', () => {
    displayModal.classList.add("active"); 
});

closeModal.addEventListener('click', (e) => {
    e.preventDefault();
        displayModal.classList.remove("active");
});


