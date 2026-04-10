document.querySelectorAll(".menu ul li").forEach(item => {
  const submenu = item.querySelector(".sub-menu");
  const arrow = item.querySelector(".arrow");

  if (submenu) {
    item.addEventListener("click", function (e) {
      e.stopPropagation();

       const sidebar = document.querySelector(".sidebar");

    if (sidebar.classList.contains("active")) {
      sidebar.classList.remove("active");
    }

      // Close other submenus
      document.querySelectorAll(".menu ul li").forEach(li => {
        if (li !== item) {
          li.classList.remove("active");
          const sub = li.querySelector(".sub-menu");
          if (sub) sub.style.display = "none";
        }
      });

      // Toggle current
      item.classList.toggle("active");

      submenu.style.display =
        submenu.style.display === "block" ? "none" : "block";
    });
  }
});

document.querySelector(".menu-btn").addEventListener("click", function () {
  const sidebar = document.querySelector(".sidebar");

  sidebar.classList.toggle("active");

  if (sidebar.classList.contains("active")) {
    document.querySelectorAll(".menu ul li").forEach(item => {
      item.classList.remove("active");

      const submenu = item.querySelector(".sub-menu");
      if (submenu) {
        submenu.style.display = "none";
      }
    });
  }
});