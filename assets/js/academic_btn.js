const tabs = document.querySelectorAll(".tab");
const cards = document.querySelectorAll(".acad-card");

tabs.forEach((tab) => {
  tab.addEventListener("click", (e) => {
    e.preventDefault();

    tabs.forEach((t) => t.classList.remove("active"));
    tab.classList.add("active");

    const target = tab.classList[1];
    cards.forEach((card) => (card.style.display = "none"));

    if (target === "courses") {
      document.querySelector(".Courses").style.display = "block";
    } else if (target === "subjects") {
      document.querySelector(".Subjects").style.display = "block";
    } else if (target === "schedule") {
      document.querySelector(".Schedule").style.display = "block";
    }
  });
});
