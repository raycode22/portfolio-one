// FOR MODALS
document.addEventListener("DOMContentLoaded", () => {
    const dialog = document.getElementById("preview");
    const closeDialogButton = document.getElementById("closeDialog");
    const cards = document.querySelectorAll(".preview");

    cards.forEach((card) => {
        card.onclick = function () {
            dialog.showModal();
        };
    });

    closeDialogButton.onclick = function () {
        dialog.close();
    };

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

    setThemeBasedOnSystemPreference();

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

// TRANSITIONS
document.addEventListener("DOMContentLoaded", () => {
    const articles = document.querySelectorAll(".custom-article");
    const sections = document.querySelectorAll(".sec-divider");
    const texts = document.querySelectorAll("h1, p");
    
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

    sections.forEach((section) => {
        observer.observe(section);
    });

    texts.forEach((text) => {
        text.classList.add("fade-in-up");
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
            targetElement.scrollIntoView({ behavior: "smooth" });
        }
    });
});

// RANDOM WORDS ANIMATION
const wordContainer = document.getElementById("word-container");
const color = document.getElementById("color");
const opacity = document.getElementById("opacity");

const words = [
    "Minimalism",
    "Typography",
    "Color Theory",
    "Visual Hierarchy",
    "White Space",
    "Grid Systems",
    "Balance",
    "Contrast",
    "Harmony",
    "Proportion",
    "Scale",
    "Symmetry",
    "Asymmetry",
    "Alignment",
    "Repetition",
    "Rhythm",
    "Emphasis",
    "Movement",
    "Pattern",
    "Texture",
];

function getRandomPosition() {
    const x = Math.random() * window.innerWidth;
    const y = Math.random() * window.innerHeight;
    return { x, y };
}

function createWord() {
    const word = document.createElement("div");
    word.className = "word";
    word.textContent = words[Math.floor(Math.random() * words.length)];
    const position = getRandomPosition();
    word.style.left = `${position.x}px`;
    word.style.top = `${position.y}px`;
    word.style.color = color.value;
    word.style.opacity = opacity.value;
    wordContainer.appendChild(word);

    setTimeout(() => {
        word.remove();
    }, 10200);
}

setInterval(createWord, 800);

color.addEventListener("input", () => {
    document.querySelectorAll(".word").forEach((word) => {
        word.style.color = color.value;
    });
});

opacity.addEventListener("input", () => {
    document.querySelectorAll(".word").forEach((word) => {
        word.style.opacity = opacity.value;
    });
});

// TYPEWRITER EFFECT
var typedRest = new Typed(".hero-work", {
    strings: [
        "Hello! I'm,<br> <span class='highlight'>Ray Enriquez</span><br>I'm a<span class='highlight2'> Freelancer</span>",
        "Hello! I'm,<br> <span class='highlight'>Ray Enriquez</span><br>I'm a<span class='highlight2'> Designer</span>",
    ],
    startDelay: 500,
    typeSpeed: 75,
    backDelay: 5000,
    backSpeed: 100,
    smartBackspace: true,
    showCursor: true,
    cursorChar: "|",
    loop: true,
});

//NAVIGATION HIGHLIGHT
document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll("section, #hero"); // Include hero section
    const navLinks = document.querySelectorAll("nav ul li a");

    // Add 'active' class to Home link initially
    const homeLink = document.querySelector('a[href="#hero"]');
    homeLink.classList.add('active');

    const sectionObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === `#${id}`) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        },
        { threshold: 0.5 }
    );

    sections.forEach(section => sectionObserver.observe(section));

    // Click handler with smooth scroll
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');
            const target = document.querySelector(href);
            
            if (target) {
                e.preventDefault();
                // Remove all active classes
                navLinks.forEach(l => l.classList.remove('active'));
                // Add active to clicked link
                link.classList.add('active');
                
                // Smooth scroll
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

                // Update URL hash
                history.pushState(null, null, href);
            }
        });
    });

    // Handle initial hash in URL
    if (window.location.hash) {
        const initialLink = document.querySelector(`a[href="${window.location.hash}"]`);
        if (initialLink) {
            navLinks.forEach(l => l.classList.remove('active'));
            initialLink.classList.add('active');
        }
    }
});