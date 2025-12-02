<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>About - Health Clusters</title>

    <!-- Import Inter font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-dark: #f9f9ff;
            --card-bg: #ffffff;
            --black: #000;
            --gray: #555;
            --accent: #007bff;
            --radius: 14px;
        }

        body {
            margin: 0;
            font-family: "Inter", sans-serif;
            background: var(--bg-dark);
            color: var(--black);
        }

        /* HEADER */
        .header {
            background-color: #ffffff;
            padding: 20px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90%;
            margin: auto;
        }

        /* Logo */
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo span {
            font-size: 24px;
            font-weight: 700;
            color: #0077b6;
        }

        /* NAV */
        nav {
            display: flex;
            align-items: center;
        }

        .nav-links {
            list-style: none;
            display: flex;       /* <<< Makes links horizontal */
            gap: 20px;           /* Space between links */
            margin: 0;
            padding: 0;
        }

        .nav-links li a {
            text-decoration: none;
            color: #0077b6;
            font-weight: 600;
            font-size: 16px;
            transition: 0.2s;
        }

        .nav-links li a:hover {
            color: var(--accent);
        }

        /* PAGE CONTENT */
        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        h1 {
            font-size: 28px;
            text-align: center;
            margin-bottom: 30px;
            color: var(--accent);
            font-weight: 700;
        }

        .card {
            background: var(--card-bg);
            border-radius: var(--radius);
            padding: 30px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        }

        .lead {
            color: var(--gray);
            font-size: 17px;
            line-height: 1.6;
            margin-bottom: 24px;
            text-align: justify;
        }

        ul {
            padding: 0;
            margin-bottom: 20px;
        }

        li {
            list-style: none;
            padding-left: 20px;
            position: relative;
            margin-bottom: 10px;
            font-weight: 500;
        }

        li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: var(--accent);
            font-weight: bold;
        }

        .actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn {
            background: var(--accent);
            color: white;
            border: none;
            padding: 12px 18px;
            border-radius: var(--radius);
            cursor: pointer;
            transition: 0.2s;
            font-weight: 600;
            letter-spacing: 0.3px;
        }

        .btn:hover {
            transform: scale(1.05);
        }

        .photo {
            text-align: center;
            margin-top: 30px;
        }

        .photo img {
            width: 100%;
            max-width: 500px;
            border-radius: var(--radius);
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <svg width="50" height="50" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                    <path d="M32 4 L12 16 V36 C12 50 32 60 32 60 C32 60 52 50 52 36 V16 Z" fill="#00b4d8" />
                    <path d="M32 20 v16 M24 28 h16" stroke="#ffffff" stroke-width="4" stroke-linecap="round" />
                </svg>
                <span>MedicaCenter</span>
            </div>

            <nav>
                <ul class="nav-links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/admin') }}">Admin</a></li>
                    <li><a href="{{ url('/awareness') }}">Awareness</a></li>
                    <li><a href="{{ url('/contactz') }}">Contactz</a></li>
                    <li><a href="{{ url('/e-services') }}">E-Services</a></li>
                    <li><a href="{{ url('/healthcare') }}">Healthcare</a></li>
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/services') }}">Services</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- PAGE CONTENT -->
    <div class="container">
        <h1>About Health Clusters</h1>

        <div class="card">
            <p class="lead">
                Within 20 health clusters, collaborative efforts are made to provide optimal healthcare.
                A health cluster is a corporatized integrated ecosystem that encompasses all healthcare
                facilities within a designated catchment area. The clusters are responsible for health
                and wellness of their populations, including prevention and awareness.
            </p>

            <ul>
                <li>Primary Care Centers</li>
                <li>Hospitals</li>
                <li>Medical Cities & Specialized Hospitals</li>
            </ul>

            <div class="actions">
                <button class="btn">Read more about the clusters ↓</button>
                <button class="btn">Browse the clusters →</button>
            </div>

            <div class="photo">
                <img src="{{ asset('images/about-clusters.jpg') }}" alt="Health clusters group photo">
            </div>
        </div>
    </div>

</body>
</html>