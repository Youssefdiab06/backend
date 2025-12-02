// Chart.js config
const ctx = document.getElementById("appointmentsChart");
if (ctx) {
    new Chart(ctx, {
        type: "line",
        data: {
            labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
            datasets: [{
                label: "Appointments",
                data: [12, 19, 14, 17, 22, 9, 13],
                borderColor: "#0d47a1",
                backgroundColor: "rgba(13,71,161,0.2)",
                tension: 0.4,
                fill: true,
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: true } }
        }
    });
}