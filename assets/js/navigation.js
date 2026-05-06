const menuToggleBtn = document.querySelector(".menu-toggle-btn");
const sidebar = document.querySelector(".sidebar");
const navList = document.querySelector(".nav-list");

if (menuToggleBtn && sidebar) {
  menuToggleBtn.addEventListener("click", () => {
    sidebar.classList.toggle("is-open");
    menuToggleBtn.textContent = sidebar.classList.contains("is-open")
      ? "Close"
      : "Menu";
  });

  document.addEventListener("click", (event) => {
    if (window.innerWidth <= 779) {
      const isClickInsideSidebar = sidebar.contains(event.target);
      const isMenuButton =
        event.target === menuToggleBtn || menuToggleBtn.contains(event.target);

      if (
        !isClickInsideSidebar &&
        !isMenuButton &&
        sidebar.classList.contains("is-open")
      ) {
        sidebar.classList.remove("is-open");
        menuToggleBtn.textContent = "Menu";
      }
    }
  });
}

if (navList) {
  navList.addEventListener("click", function (e) {
    if (e.target.classList.contains("nav-link")) {
      const href = e.target.getAttribute("href");
      
      // Close menu on mobile after click
      if (window.innerWidth <= 779 && sidebar) {
        sidebar.classList.remove("is-open");
        if (menuToggleBtn) menuToggleBtn.textContent = "Menu";
      }

      // Only smooth scroll if the href is an internal anchor
      if (href && href.startsWith("#")) {
        const targetElement = document.querySelector(href);
        if (targetElement) {
          e.preventDefault();
          targetElement.scrollIntoView({ behavior: "smooth" });
        }
      }
    }
  });
}
