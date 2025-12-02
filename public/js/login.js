const loginForm = document.getElementById("loginForm");
const roleSelect = document.getElementById("role");
const hospitalGroup = document.getElementById("hospitalGroup");
const hospitalInput = document.getElementById("hospitalId");

const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");

const emailHint = document.getElementById("emailHint");
const passwordHint = document.getElementById("passwordHint");
const roleHint = document.getElementById("roleHint");
const hospitalHint = document.getElementById("hospitalHint");

// Show/hide Hospital ID field
roleSelect.addEventListener("change", () => {
    roleHint.innerText = "";
    if (roleSelect.value === "doctor") {
        hospitalGroup.style.display = "block";
        hospitalInput.required = true;
    } else {
        hospitalGroup.style.display = "none";
        hospitalInput.required = false;
        hospitalHint.innerText = "";
    }
});

// Email validation
emailInput.addEventListener("input", () => {
    const email = emailInput.value;
    if (!email.includes("@") || !email.includes(".")) {
        emailHint.innerText = "Please enter a valid email format.";
    } else {
        emailHint.innerText = "";
    }
});

// Password strength hint
passwordInput.addEventListener("input", () => {
    const pass = passwordInput.value;
    if (pass.length < 6) {
        passwordHint.innerText = "Password is too short (min 6 chars).";
    } else {
        passwordHint.innerText = "";
    }
});

// Form submission
loginForm.addEventListener("submit", (e) => {
    e.preventDefault();

    const email = emailInput.value;
    const password = passwordInput.value;
    const role = roleSelect.value;
    const hospitalId = hospitalInput.value;

    if (!role) {
        roleHint.innerText = "Please select a role!";
        return;
    }

    if (role === "doctor" && hospitalId.length < 3) {
        hospitalHint.innerText = "Please enter a valid Hospital ID.";
        return;
    }

    // AI-style feedback
    let message = Logging in as ${ role.toUpperCase()
} with email: ${ email };
if (role === "doctor") message += \nHospital ID: ${ hospitalId };

alert(message);

  // Placeholder for backend login
  // if (role === 'patient') window.location.href = 'patient_dashboard.html';
  // if (role === 'doctor') window.location.href = 'doctor_dashboard.html';
  // if (role === 'admin') window.location.href = 'admin_dashboard.html';
});
