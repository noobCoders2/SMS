const toggleBtn = document.querySelector('.sidebar');
const mainContent = document.querySelector('.main-content');

function toggleSidebar() {
    toggleBtn.classList.toggle('collapsed');
    mainContent.classList.toggle('expanded');
}
