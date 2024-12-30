document.addEventListener("DOMContentLoaded", (event) => {
  // Get the dialog
  const dialog = document.getElementById("preview");

  // Get the close button inside the dialog
  const closeDialogButton = document.getElementById("closeDialog");

  // Get all elements with class "cards"
  const cards = document.querySelectorAll(".preview");

  // When the user clicks on a card, open the dialog
  cards.forEach((card) => {
    card.onclick = function () {
      dialog.showModal();
    };
  });

  // When the user clicks on the close button, close the dialog
  closeDialogButton.onclick = function () {
    dialog.close();
  };

  // When the user clicks outside the dialog, close it
  dialog.addEventListener("click", (event) => {
    if (event.target === dialog) {
      dialog.close();
    }
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const burgerMenu = document.getElementById("burger-menu");
  const navLinks = document.getElementById("nav-links");
  const themeToggle = document.getElementById("theme-toggle");
  const themeIcon = document.getElementById("theme-icon");
  const menuIcon = document.getElementById("menu-icon");

  // Function to set the theme based on the system preference
  const setThemeBasedOnSystemPreference = () => {
    const prefersDarkScheme = window.matchMedia(
      "(prefers-color-scheme: dark)"
    ).matches;
    const currentTheme = prefersDarkScheme ? "dark" : "light";
    document.documentElement.setAttribute("data-theme", currentTheme);
    if (currentTheme === "dark") {
      themeIcon.classList.remove("fa-moon");
      themeIcon.classList.add("fa-sun");
    } else {
      themeIcon.classList.remove("fa-sun");
      themeIcon.classList.add("fa-moon");
    }
  };

  // Set the initial theme based on the system preference
  setThemeBasedOnSystemPreference();

  // Listen for changes in the system theme preference
  window
    .matchMedia("(prefers-color-scheme: dark)")
    .addEventListener("change", setThemeBasedOnSystemPreference);

  burgerMenu.addEventListener("click", () => {
    navLinks.classList.toggle("show");
    if (navLinks.classList.contains("show")) {
      menuIcon.classList.remove("fa-bars");
      menuIcon.classList.add("fa-xmark");
    } else {
      menuIcon.classList.remove("fa-xmark");
      menuIcon.classList.add("fa-bars");
    }
  });

  themeToggle.addEventListener("click", () => {
    const currentTheme = document.documentElement.getAttribute("data-theme");
    const newTheme = currentTheme === "light" ? "dark" : "light";
    document.documentElement.setAttribute("data-theme", newTheme);
    themeIcon.classList.toggle("fa-moon");
    themeIcon.classList.toggle("fa-sun");
  });
});
