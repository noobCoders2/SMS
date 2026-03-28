// const toggleBtn = document.querySelector('.sidebar');
// const mainContent = document.querySelector('#mainContent');
// function toggleSidebar() {
//     toggleBtn.classList.toggle('collapsed');
//     mainContent.classList.toggle('expanded');
// console.log(mainContent);
// console.log(toggleBtn);
// }

const toggleDropdown = (dropdown, menu, isOpen) => {
  dropdown.classList.toggle("open", isOpen);
  menu.style.height = isOpen ? `${menu.scrollHeight}px` : 0;
};

const closeAllDropdowns = () => {
  document
    .querySelectorAll(".dropdown-container.open")
    .forEach((openDropdown) => {
      toggleDropdown(
        openDropdown,
        openDropdown.querySelector(".custom-dropdown-menu"),
        false
      );
    });
};


document
  .querySelectorAll(".custom-dropdown-toggle")
  .forEach((dropdownToggle) => {
    dropdownToggle.addEventListener("click", (e) => {
      e.preventDefault();

      const dropdown = dropdownToggle.closest(".dropdown-container");
      const menu = dropdown.querySelector(".custom-dropdown-menu");
      const isOpen = dropdown.classList.contains("open");

      closeAllDropdowns(); 
      toggleDropdown(dropdown, menu, !isOpen); 
    });
  });


document
  .querySelectorAll(".sidebar-toggler, .sidebar-menu-button")
  .forEach((button) => {
    button.addEventListener("click", () => {
      closeAllDropdowns();
      document.querySelector(".sidebar").classList.toggle("collapsed");
      document.querySelector('#mainContent').classList.toggle("expanded");
    });
  });
