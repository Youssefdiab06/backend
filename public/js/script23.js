// JavaScript source code
// Simple animation for policies page
document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll(".table-container h3");
    sections.forEach((sec, i) => {
        sec.style.opacity = 0;
        setTimeout(() => {
            sec.style.transition = "opacity 0.8s ease";
            sec.style.opacity = 1;
        }, i * 400);
    });
});
