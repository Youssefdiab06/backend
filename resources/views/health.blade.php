﻿
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Health Tips</title>
    <link rel="stylesheet" href="{{ asset('css/style22.css') }}" />
    <script  src="{{ asset('js/health.js') }}"></script>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Medica Care</h2>
        <a href="/index">🏠 Home</a>
        <a href="/services">🛠 Services</a>
        <a href="/awareness">💡 Awareness</a>
        <a href="/health" class="active">⚕ Health Tips</a>
        <a href="/policies">📑 Policies</a>
        <a href="/user">👥 User Management</a>
    </div>

    <!-- Main -->
    <div class="main">
        <h1>Health Tips</h1>
        <div class="table-container">
            <ul id="tipsList">
                <li>💧 Drink at least 2 liters of water daily.</li>
                <li>🏃 Exercise for 30 minutes every day.</li>
                <li>🥗 Eat balanced meals with vegetables and proteins.</li>
            </ul>
            <button onclick="addTip()">➕ Add Tip</button>
        </div>
    </div>
</body>
</html>