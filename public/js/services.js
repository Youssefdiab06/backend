// --------------------
// Modal Functionality
// --------------------

// Get all modals
const modals = document.querySelectorAll(".modal");

// Get all close buttons
const closeButtons = document.querySelectorAll(".close");

// Function to open modal
function openModal(modalId) {
    const modal = document.getElementById(modalId);

    // Auto-load doctors for appointments modal
    if (modalId === "appointmentsModal") {
        loadDoctors();
    }

    modal.style.display = "flex";
    modal.classList.add("show");
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

// --------------------
// Prescriptions Logic
// --------------------

// Toggle the Add Prescription Form
function togglePrescriptionForm() {
    const form = document.getElementById("addPrescriptionForm");
    form.style.display = form.style.display === "block" ? "none" : "block";
}

// Add Prescription to Table
function addPrescription(event) {
    event.preventDefault();

    const patientName = document.getElementById("patientName").value;
    const medicine = document.getElementById("medicine").value;
    const dosage = document.getElementById("dosage").value;
    const date = document.getElementById("date").value;

    const table = document.getElementById("prescriptionsTable").getElementsByTagName("tbody")[0];
    const newRow = table.insertRow();

    newRow.innerHTML = `
        <td>${patientName}</td>
        <td>${medicine}</td>
        <td>${dosage}</td>
        <td>${date}</td>
    `;

    document.getElementById("addPrescriptionForm").reset();
    document.getElementById("addPrescriptionForm").style.display = "none";
}

// --------------------
// Appointment Form Logic
// --------------------

function loadDoctors() {
    fetch("/doctors")
        .then(res => res.json())
        .then(data => {
            const select = document.getElementById("doctor_id");
            select.innerHTML = `<option value="">-- Select Doctor --</option>`;

            data.forEach(doc => {
                select.innerHTML += `<option value="${doc.id}">${doc.name}</option>`;
            });
        });
}

document.getElementById("doctor_id").addEventListener("change", function() {
    const doctorId = this.value;
    const dateSelect = document.getElementById("schedule_date");
    const timeSelect = document.getElementById("schedule_id");

    timeSelect.innerHTML = `<option>-- Select Time --</option>`;
    timeSelect.disabled = true;

    if (!doctorId) return;

    fetch(`/doctor/${doctorId}/dates`)
        .then(res => res.json())
        .then(data => {
            dateSelect.disabled = false;
            dateSelect.innerHTML = `<option value="">-- Select Date --</option>`;

            data.forEach(item => {
                dateSelect.innerHTML += `<option value="${item}">${item}</option>`;
            });
        });
});

document.getElementById("schedule_date").addEventListener("change", function() {
    const doctorId = document.getElementById("doctor_id").value;
    const selectedDate = this.value;

    fetch(`/doctor/${doctorId}/dates/${selectedDate}/times`)
        .then(res => res.json())
        .then(data => {
            const timeSelect = document.getElementById("schedule_id");
            timeSelect.disabled = false;
            timeSelect.innerHTML= `<option value="">-- Select Time --</option>`;

            data.forEach(item => {
                timeSelect.innerHTML += `<option value="${item.id}">${item.start_time} - ${item.end_time}</option>`;
            });
        });
});

// Appointment form submission
document.getElementById("appointmentForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch("/appointments", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": document.querySelector("input[name=_token]").value
        },
        body: formData
    })
    .then(res => res.json())
    .then(response => {
        if (response.success) {
            const successMessage = document.getElementById("successMessage");
            successMessage.style.display = "block";

            setTimeout(() => {
                const modal = document.getElementById("appointmentsModal");
                modal.style.display = "none";
                modal.classList.remove("show");
                successMessage.style.display = "none";
                document.getElementById("appointmentForm").reset();
            }, 1500);
        }
    });
});