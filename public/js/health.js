// JavaScript source code
function addTip() {
    const tips = [
        "😴 Sleep 7–8 hours daily.",
        "🧘 Reduce stress with meditation.",
        "🚭 Avoid smoking and alcohol.",
        "🧴 Wash hands regularly."
    ];
    const list = document.getElementById("tipsList");
    const li = document.createElement("li");
    li.textContent = tips[Math.floor(Math.random() * tips.length)];
    list.appendChild(li);
}