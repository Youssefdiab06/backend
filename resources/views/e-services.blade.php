﻿<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>E-Services</title>

    <style>
        :root {
            --bg-main: #f5f8fa;
            --card-bg: #ffffff;
            --text-dark: #0d1b2a;
            --accent: #007bff;
            --radius: 14px;
        }

        body {
            margin: 0;
            font-family: "Poppins", Arial, sans-serif;
            background: var(--bg-main);
            color: var(--text-dark);
        }

        /* HEADER */
        header {
            width: 100%;
            background: #fff;
            padding: 15px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        header .logo {
            width: 120px;
        }

        header nav ul {
            list-style: none; /* removes blue dots */
            display: flex;
            gap: 25px;
            margin: 0;
            padding: 0;
        }

        header nav ul li a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 600;
            font-size: 16px;
            transition: 0.2s;
        }

        header nav ul li a:hover {
            color: var(--accent);
        }

        /* PAGE CONTENT */
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        h1 {
            text-align: center;
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 40px;
            color: var(--accent);
        }

        .card {
            background: var(--card-bg);
            border-radius: var(--radius);
            padding: 40px;
            text-align: center;
            box-shadow: 0 6px 12px blue;
            max-width: 700px;
            width: 70%;
            margin: 30px auto;
        }

        .card img.logo {
            width: 150px;
            height: auto;
            margin-bottom: 20px;
            border-radius: 12px;
        }

        .store-buttons {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 20px;
        }

        .btn-store {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: var(--accent);
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            padding: 12px 14px;
            border-radius: var(--radius);
            transition: 0.2s;
        }

        .btn-store:hover {
            background: #0056b3;
            transform: scale(1.03);
        }

        .btn-store img {
            width: 22px;
            height: 22px;
        }

        /* FOOTER */
        footer {
            margin-top: 60px;
            background: #fff;
            padding: 25px 20px;
            text-align: center;
            color: var(--text-dark);
            font-weight: 500;
            box-shadow: 0 -2px 8px rgba(0,0,0,0.1);
        }

        @media (max-width: 480px) {
            h1 { font-size: 24px; }
            header nav ul { gap: 12px; }
            .card img.logo { width: 120px; }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header>
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">

        <nav>
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/services">E-Services</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>


    <!-- PAGE CONTENT -->
    <div class="container">
        <h1>E-Services</h1>

        <div class="card">
            <img class="logo" src="{{ asset('images/download (1).jpg') }}" alt="Sehhati App">

            <div class="store-buttons">
                <a href="#" class="btn-store">
                    <img src="{{ asset('images/apple-logo.png') }}" alt="App Store">
                    <span>Download on App Store</span>
                </a>

                <a href="#" class="btn-store">
                    <img src="{{ asset('images/download(1).jpg') }}">
                    <span>Get it on Play Store</span>
                </a>
            </div>
        </div>
    </div>


    <!-- FOOTER -->
    <footer>
        © 2025 Your Clinic – All Rights Reserved
    </footer>


    <script>
        document.querySelectorAll('.btn-store').forEach(btn => {
            btn.addEventListener('click', e => {
                e.preventDefault();
                alert('Redirecting to the store...');
            });
        });
    </script>

</body>
</html>