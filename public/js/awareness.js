// Get all modals
const modals = document.querySelectorAll(".modal");

// Get all close buttons
const closeButtons = document.querySelectorAll(".close");

// Open modal with dynamic AI suggestion
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = "flex";
    modal.classList.add("show");

    // Dynamic content per card
    switch (modalId) {
        case "nutritionModal":
            setContent("nutritionText", "AI suggests healthy meal plans based on your age, health, and personal preferences.",
                "nutritionLink", "https://en.wikipedia.org/wiki/Nutrition");
            break;
        case "exerciseModal":
            setContent("exerciseText", "AI recommends customized exercise routines tailored to your fitness level and goals.",
                "exerciseLink", "https://en.wikipedia.org/wiki/Physical_exercise");
            break;
        case "mentalModal":
            setContent("mentalText", "AI provides tips for stress management and mental well-being using personalized routines.",
                "mentalLink", "https://en.wikipedia.org/wiki/Mental_health");
            break;
        case "hygieneModal":
            setContent("hygieneText", "AI reminds you of daily hygiene practices, including handwashing and sanitization.",
                "hygieneLink", "https://en.wikipedia.org/wiki/Hygiene");
            break;
        case "sleepModal":
            setContent("sleepText", "AI suggests optimal sleep schedules based on your lifestyle, age, and sleep patterns.",
                "sleepLink", "https://en.wikipedia.org/wiki/Sleep");
            break;
    }
}

// Helper to set text and link
function setContent(textId, text, linkId, url) {
    const textEl = document.getElementById(textId);
    const linkEl = document.getElementById(linkId);
    textEl.innerText = text;
    linkEl.href = url;
    linkEl.innerText = "Learn More";
    linkEl.style.display = "inline-block";
}

// Close modal when clicking close button
closeButtons.forEach(btn => {
    btn.addEventListener("click", () => {
        const modal = btn.closest(".modal");
        modal.style.display = "none";
        modal.classList.remove("show");
    });
});

// Close modal when clicking outside modal-content
window.addEventListener("click", (event) => {
    modals.forEach(modal => {
        if (event.target === modal) {
            modal.style.display = "none";
            modal.classList.remove("show");
        }
    });
});