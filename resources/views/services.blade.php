﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>

    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        /* HEADER STYLE */
        header {
            width: 100%;
            background: white;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 999;
        }
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 22px;
            font-weight: 600;
            color: #0077B6;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 25px;
            margin: 0;
            padding: 0;
        }
        nav ul li a {
            text-decoration: none;
            font-size: 17px;
            color: #333;
            font-weight: 500;
        }
        nav ul li a:hover {
            color: #0077B6;
        }

        /* FOOTER STYLE */
        .footer {
            background: #0a2e4d;
            color: white;
            padding: 40px 20px;
            margin-top: 60px;
        }
        .footer-container {
            max-width: 1200px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }
        .footer-about, .footer-links, .footer-contact, .footer-social {
            line-height: 1.6;
        }
        .footer h3, .footer h4 {
            margin-bottom: 12px;
        }
        .footer-links ul {
            list-style: none;
            padding: 0;
        }
        .footer-links ul li {
            margin-bottom: 8px;
        }
        .footer-links ul li a {
            color: #ddd;
            text-decoration: none;
        }
        .footer-bottom {
            text-align: center;
            border-top: 1px solid #ffffff33;
            margin-top: 25px;
            padding-top: 15px;
        }
    </style>
</head>

<body>

    <!-- =================== HEADER =================== -->
    <header>
        <div class="logo">
            <svg width="45" height="45" viewBox="0 0 64 64">
                <path d="M32 4 L12 16 V36 C12 50 32 60 32 60 C32 60 52 50 52 36 V16 Z" fill="#00b4d8"/>
                <path d="M32 20 v16 M24 28 h16" stroke="#ffffff" stroke-width="4" stroke-linecap="round"/>
            </svg>
            <span>MedicaCenter</span>
        </div>

        <nav>
            <ul class="nav-links">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/awareness') }}">Awareness</a></li>
                <li><a href="{{ url('/contactz') }}">Contact</a></li>
                <li><a href="{{ url('/e-services') }}">E-Services</a></li>
                <li><a href="{{ url('/healthcare') }}">Healthcare</a></li>
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/services') }}">Services</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            </ul>
        </nav>
    </header>
    <!-- ================================================= -->

    @if(session('success'))
        <div style="background:#d4edda; color:#155724; padding:15px; width:80%; margin:20px auto; border-radius:5px;">
            {{ session('success') }}
        </div>
    @endif

    <!-- =================== SERVICES CONTENT =================== -->
    <div class="container">
        <h1>Our Services</h1>

        <div class="grid">
            <div class="card" onclick="openModal('appointmentsModal')">
                <i class="fa-solid fa-calendar-check fa-3x"></i>
                <h2>Appointments</h2>
                <p>Book a doctor at your preferred time.</p>
            </div>

            <div class="card" onclick="openModal('vaccinationsModal')">
                <i class="fa-solid fa-syringe fa-3x"></i>
                <h2>Vaccinations</h2>
                <p>Stay updated with the latest vaccines.</p>
            </div>

            <div class="card" onclick="openModal('certificatesModal')">
                <i class="fa-solid fa-file-medical fa-3x"></i>
                <h2>Certificates</h2>
                <p>Request medical certificates securely.</p>
            </div>

            <div class="card" onclick="openModal('prescriptionsModal')">
                <i class="fa-solid fa-prescription-bottle-medical fa-3x"></i>
                <h2>Prescriptions</h2>
                <p>View and manage your prescriptions.</p>
            </div>

            <div class="card" onclick="openModal('reportsModal')">
                <i class="fa-solid fa-file-waveform fa-3x"></i>
                <h2>Reports</h2>
                <p>Access and download medical reports.</p>
            </div>
        </div>
    </div>

    <!-- ALL YOUR MODALS (unchanged) -->
    {!! view('components.modals_services') !!}

    <script src="{{ asset('js/services.js') }}" defer></script>

    <!-- =================== FOOTER =================== -->
    <footer class="footer">
        <div class="footer-container">

            <div class="footer-about">
                <h3>MedicaCare</h3>
                <p>Your health, our priority. We provide reliable care with a personal touch.</p>
            </div>

            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="/index">Home</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/appointments">Book Appointment</a></li>
                    <li><a href="/contactz">Contact</a></li>
                </ul>
            </div>

            <div class="footer-contact">
                <h4>Contact</h4>
                <p>📍 Beirut, Lebanon</p>
                <p>📞 +961 70 123 456</p>
                <p>✉ info@medicacenter.com</p>
            </div>

            <div class="footer-social">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 MedicaCare. All Rights Reserved.</p>
        </div>
    </footer>
    <!-- ================================================= -->

</body>
</html>