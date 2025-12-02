// homepagescript.js
document.addEventListener("DOMContentLoaded", () => {

    // ===== Read More / Read Less for Latest News =====
    const readMoreBtns = document.querySelectorAll(".read-more");

    readMoreBtns.forEach(btn => {
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            const card = btn.closest(".news-card");
            const p = card.querySelector("p");

            if (btn.textContent === "Read More") {
                p.style.height = "auto";
                btn.textContent = "Read Less";
                alert("You expanded the news!");
            } else {
                p.style.height = "60px"; // adjust height as needed
                btn.textContent = "Read More";
                alert("You collapsed the news!");
            }
        });
    });


    // ===== Get in Touch Modal =====
    const contactBtn = document.querySelector(".btn");
    const modal = document.getElementById("contact-modal");
    const closeModal = modal?.querySelector(".close");

    if (contactBtn && modal && closeModal) {
        contactBtn.addEventListener("click", (e) => {
            e.preventDefault();
            modal.style.display = "block";
            alert("Contact form opened!");
        });

        closeModal.addEventListener("click", () => {
            modal.style.display = "none";
            alert("Contact form closed!");
        });

        window.addEventListener("click", (e) => {
            if (e.target === modal) {
                modal.style.display = "none";
                alert("Contact form closed!");
            }
        });
    }
    // jv contact page code 

    document.addEventListener("DOMContentLoaded", () => {
        const contactForm = document.querySelector(".contact-form");

        contactForm.addEventListener("submit", (e) => {
            e.preventDefault(); // Prevent actual form submission
            const name = contactForm.querySelector('input[type="text"]').value;
            const email = contactForm.querySelector('input[type="email"]').value;
            const message = contactForm.querySelector('textarea').value;

            if (name && email && message) {
                alert(Thank you, ${ name }! Your message has been sent.);
                contactForm.reset(); // Clear the form
            } else {
                alert("Please fill in all fields.");
            }
        });
    });



});
