const toggleBtn = document.querySelector('.sidebar');
const mainContent = document.querySelector('#mainContent');
function toggleSidebar() {
    toggleBtn.classList.toggle('collapsed');
    mainContent.classList.toggle('expanded');
console.log(mainContent);
console.log(toggleBtn);
}
