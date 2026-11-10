// js/main.js

document.addEventListener("DOMContentLoaded", () => {

    // Elements that fade in as they scroll into view
    const targets = document.querySelectorAll(
        ".highlight-card, .group-photo, .team-card, .project-card, .team-contact-item, .contact-card"
    );

    // Older browsers / no support: just show everything
    if (!("IntersectionObserver" in window)) {
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) {
                return;
            }

            const el = entry.target;
            el.classList.add("is-visible");
            observer.unobserve(el);

            // After the fade-in, hand control back to the element's own
            // hover styles so cards still lift when you point at them.
            setTimeout(() => {
                el.classList.remove("reveal", "is-visible");
            }, 900);
        });
    }, { threshold: 0.15 });

    targets.forEach((el, index) => {
        el.classList.add("reveal");
        // small stagger so cards in a row appear one after another
        el.style.transitionDelay = ((index % 4) * 80) + "ms";
        observer.observe(el);
    });
});
