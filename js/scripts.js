//FOR MODALS
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

// THEME / PICO CSS THEME
document.addEventListener("DOMContentLoaded", () => {
    const burgerMenu = document.getElementById("burger-menu");
    const navLinks = document.querySelector("nav ul");
    const themeToggle = document.querySelector(".theme-toggle");
    const themeIcon = document.getElementById("theme-icon");
    const menuIcon = document.getElementById("menu-icon");

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

    // SET THEME SYSTEM PREFERENCE
    setThemeBasedOnSystemPreference();

    // CHANGE THEME
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
        const currentTheme =
            document.documentElement.getAttribute("data-theme");
        const newTheme = currentTheme === "light" ? "dark" : "light";
        document.documentElement.setAttribute("data-theme", newTheme);
        themeIcon.classList.toggle("fa-moon");
        themeIcon.classList.toggle("fa-sun");
    });
});

//VIEW TRANSITION API
document.addEventListener("DOMContentLoaded", () => {
    const navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach((link) => {
        link.addEventListener("click", (event) => {
            event.preventDefault();
            const targetId = link.getAttribute("href").substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                document.startViewTransition(() => {
                    document.querySelectorAll("section").forEach((section) => {
                        section.classList.add("hidden");
                    });
                    targetElement.classList.remove("hidden");
                    window.scrollTo({
                        top: targetElement.offsetTop,
                        behavior: "smooth",
                    });
                });
            }
        });
    });
});

//TRANSITIONS
document.addEventListener("DOMContentLoaded", () => {
    const articles = document.querySelectorAll(".custom-article");

    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                    entry.target.classList.remove("hidden");
                    observer.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.2,
        }
    );

    articles.forEach((article) => {
        observer.observe(article);
    });
});

//OWL CAROUSEL
$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,
        autoplay: true,
        fluidSpeed: true,
        animateOut: "fadeOut",
        autoplayHoverPause: true,
        margin: 100,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        },
    });
});

// SCROLLING SMOOTHNESS
const navLinks = document.querySelectorAll("nav a");

navLinks.forEach((link) => {
    link.addEventListener("click", (event) => {
        event.preventDefault();
        const targetId = link.getAttribute("href").substring(1);
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            smoothScrollTo(targetElement.offsetTop, 1600); // Adjust duration (in ms) as needed
        }
    });
});

function smoothScrollTo(targetPosition, duration) {
    const startPosition = window.pageYOffset;
    const distance = targetPosition - startPosition;
    let startTime = null;

    function animation(currentTime) {
        if (startTime === null) startTime = currentTime;
        const timeElapsed = currentTime - startTime;
        const run = ease(timeElapsed, startPosition, distance, duration);
        window.scrollTo(0, run);
        if (timeElapsed < duration) requestAnimationFrame(animation);
    }

    function ease(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return (c / 2) * t * t + b;
        t--;
        return (-c / 2) * (t * (t - 2) - 1) + b;
    }

    requestAnimationFrame(animation);
}

//TYPED.JS
