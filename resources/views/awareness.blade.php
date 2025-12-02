<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Awareness</title>
    <link rel="stylesheet" href="{{asset('css/awareness.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        /* ================= HEADER ================= */

        header {
            background-color: #e3f2fd;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #90caf9;
            font-family: "Poppins", sans-serif;
        }

        .logo h1 {
            color: #0077b6;
            margin: 0;
            font-size: 24px;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 25px;
        }

        .nav-links li a {
            text-decoration: none;
            color: #0077b6;
            font-weight: 600;
            font-size: 16px;
        }

        .auth-buttons {
            display: flex;
            gap: 15px;
        }

        .auth-buttons a {
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: 600;
            font-size: 15px;
        }

        .login-btn {
            color: #0077b6;
        }

        .signup-btn {
            background-color: #0077b6;
            color: white;
        }

        /* ================= FOOTER ================= */

        footer {
            background: linear-gradient(to right, #f9fbfd, #eef6fb);
            color: #333;
            padding: 60px 20px 20px;
            font-family: "Poppins", sans-serif;
            border-top: 3px solid #cce0f5;
            margin-top: 60px;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        footer h3, footer h4 {
            font-weight: bold;
            color: #00509e;
            margin-bottom: 15px;
        }

        .footer-about p {
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links ul li {
            margin-bottom: 10px;
        }

        .footer-links ul li a {
            color: #0066cc;
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s;
        }

        .footer-links ul li a:hover {
            color: #0099ff;
            padding-left: 5px;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 30px;
            padding: 20px 0;
            font-size: 0.95rem;
            font-weight: 800;
            background-color: cornflowerblue;
            color: white;
            text-shadow: 0 1px 2px rgba(0,0,0,0.2);
        }
    </style>
</head>

<body>

    <!-- ================= HEADER ================= -->
    <header>
        <div class="logo">
            <h1>MedicaCenter</h1>
        </div>

        <nav>
            <ul class="nav-links">
                <li><a href="{{ url('/index') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/awareness') }}">Awareness</a></li>
                <li><a href="{{ url('/services') }}">Services</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </nav>

        <div class="auth-buttons">
            <a href="/login" class="login-btn">Login</a>
            <a href="/register" class="signup-btn">Sign Up</a>
        </div>
    </header>

    <!-- ================= MAIN CONTENT ================= -->

    <div class="container">
        <h1>Health Awareness</h1>
        <div class="grid">

            <div class="card" onclick="openModal('nutritionModal')">
                <i class="fa-solid fa-apple-whole fa-3x"></i>
                <h2>Nutrition</h2>
                <p>Healthy eating habits for stronger immunity.</p>
            </div>

            <div class="card" onclick="openModal('exerciseModal')">
                <i class="fa-solid fa-dumbbell fa-3x"></i>
                <h2>Exercise</h2>
                <p>Stay active for a healthy body and mind.</p>
            </div>

            <div class="card" onclick="openModal('mentalModal')">
                <i class="fa-solid fa-brain fa-3x"></i>
                <h2>Mental Health</h2>
                <p>Maintain your mental well-being daily.</p>
            </div>

            <div class="card" onclick="openModal('hygieneModal')">
                <i class="fa-solid fa-hand-holding-medical fa-3x"></i>
                <h2>Hygiene</h2>
                <p>Practice good hygiene for safety.</p>
            </div>

            <div class="card" onclick="openModal('sleepModal')">
                <i class="fa-solid fa-bed fa-3x"></i>
                <h2>Sleep</h2>
                <p>Get quality sleep to recharge your body.</p>
            </div>

        </div>
    </div>

    <!-- ================= MODALS ================= -->

    <!-- Nutrition -->
    <div id="nutritionModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Nutrition</h2>
            <i class="fa-solid fa-apple-whole topic-icon"></i>
            <p id="nutritionText"></p>
            <a id="nutritionLink" href="#" target="_blank" style="display:none;">Learn More</a>
        </div>
    </div>

    <!-- Exercise -->
    <div id="exerciseModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Exercise</h2>
            <i class="fa-solid fa-dumbbell topic-icon"></i>
            <p id="exerciseText"></p>
            <a id="exerciseLink" href="#" target="_blank" style="display:none;">Learn More</a>
        </div>
    </div>

    <!-- Mental -->
    <div id="mentalModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Mental Health</h2>
            <i class="fa-solid fa-brain topic-icon"></i>
            <p id="mentalText"></p>
            <a id="mentalLink" href="#" target="_blank" style="display:none;">Learn More</a>
        </div>
    </div>

    <!-- Hygiene -->
    <div id="hygieneModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Hygiene</h2>
            <i class="fa-solid fa-hand-holding-medical topic-icon"></i>
            <p id="hygieneText"></p>
            <a id="hygieneLink" href="#" target="_blank" style="display:none;">Learn More</a>
        </div>
    </div>

    <!-- Sleep -->
    <div id="sleepModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Sleep</h2>
            <i class="fa-solid fa-bed topic-icon"></i>
            <p id="sleepText"></p>
            <a id="sleepLink" href="#" target="_blank" style="display:none;">Learn More</a>
        </div>
    </div>


    <!-- ================= FOOTER ================= -->

    <footer>
        <div class="container footer-container">

            <div class="footer-about">
                <h3>MedicaCenter</h3>
                <p>Your trusted healthcare partner, providing modern medical services with care and excellence.</p>
            </div>

            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="{{ url('/index') }}">Home</a></li>
                    <li><a href="{{ url('/services') }}">Services</a></li>
                    <li><a href="{{ url('/appointments') }}">Appointments</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>

        </div>

        <div class="footer-bottom">
            © 2025 MedicaCenter — All Rights Reserved.
        </div>
    </footer>

    <script src="{{ asset('js/script1.js') }}"></script>
</body>
</html>