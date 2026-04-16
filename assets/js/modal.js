
const addModalStudent  = document.querySelector(".addModalStudent");
const closeModal  = document.querySelector('.modal-close');
const displayModal = document.getElementById('addStudentModal');

addModalStudent.addEventListener('click', () => {
    displayModal.classList.add("active"); 
});

closeModal.addEventListener('click', (e) => {
        displayModal.classList.remove("active");
        setTimeout(() => {
        location.reload();
    }, 300);
});
// window.location.reload();


