// Handle login
document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.getElementById("loginForm");
    if (loginForm) {
        loginForm.addEventListener("submit", function (e) {
            e.preventDefault();
            const studentId = document.getElementById("studentId").value;
            const password = document.getElementById("password").value;
            const error = document.getElementById("error");

            if (studentId && password === "1234") {
                localStorage.setItem("studentId", studentId);
                window.location.href = "transcript.html";
            } else {
                error.textContent = "Invalid ID or Password";
            }
        });
    }

    // Load student info
    if (document.getElementById("studentIdDisplay")) {
        const id = localStorage.getItem("studentId");
        document.getElementById("studentIdDisplay").textContent = id || "N/A";
    }




    let courses = [];

    function addCourse() {
        const name = document.getElementById("courseName").value.trim();
        const credits = parseInt(document.getElementById("courseCredits").value);
        const grade = parseFloat(document.getElementById("courseGrade").value);
        const semester = document.getElementById("courseSemester").value;

        if (!name || isNaN(credits) || isNaN(grade)) {
            alert("Please fill all fields correctly.");
            return;
        }

        // Save course
        courses.push({ name, credits, grade, semester });

        // Add row to correct table
        const tableBody = document.querySelector(#semester${ semester }Table tbody);
        const row = tableBody.insertRow();
        row.insertCell(0).innerText = name;
        row.insertCell(1).innerText = credits;
        row.insertCell(2).innerText = grade;

        // Clear inputs
        document.getElementById("courseName").value = "";
        document.getElementById("courseCredits").value = "";
        document.getElementById("courseGrade").value = "";
    }

    function calculateGPA() {
        let sem1Credits = 0, sem2Credits = 0;
        let sem1Weighted = 0, sem2Weighted = 0;

        courses.forEach(c => {
            if (c.semester === "1") {
                sem1Credits += c.credits;
                sem1Weighted += c.credits * c.grade;
            } else {
                sem2Credits += c.credits;
                sem2Weighted += c.credits * c.grade;
            }
        });

        // GPA per semester
        let sem1GPA = sem1Credits > 0 ? (sem1Weighted / sem1Credits).toFixed(2) : "N/A";
        let sem2GPA = sem2Credits > 0 ? (sem2Weighted / sem2Credits).toFixed(2) : "N/A";

        document.getElementById("sem1Credits").innerText = Total Credits: ${ sem1Credits } / 36;
        document.getElementById("sem2Credits").innerText = Total Credits: ${ sem2Credits } / 36;

        document.getElementById("sem1GPA").innerText = Semester 1 GPA: ${ sem1GPA } / 100;
        document.getElementById("sem2GPA").innerText = Semester 2 GPA: ${ sem2GPA } / 100;

        // Final GPA
        let totalCredits = sem1Credits + sem2Credits;
        let totalWeighted = sem1Weighted + sem2Weighted;
        let finalGPA = totalCredits > 0 ? (totalWeighted / totalCredits).toFixed(2) : "N/A";
        document.getElementById("finalGPA").innerText = "Final GPA: " + finalGPA + " / 100";

        // Warnings
        if (sem1Credits !== 36) {
            alert("? Semester 1 should have exactly 36 credits. Current: " + sem1Credits);
        }
        if (sem2Credits !== 36) {
            alert("? Semester 2 should have exactly 36 credits. Current: " + sem2Credits);
        }
    }
