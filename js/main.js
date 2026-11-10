// js/main.js

document.addEventListener("DOMContentLoaded", () => {
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.transform = "translateY(0)";
            }
        });
    });

    const hiddenElements = document.querySelectorAll('.project-card, .hero-content');
    
    hiddenElements.forEach((el) => {
        el.style.opacity = 0;
        el.style.transition = "opacity 0.8s ease, transform 0.8s ease";
        el.style.transform = "translateY(30px)";
        observer.observe(el);
    });

    console.log("Portfolio JS loaded successfully!");
});