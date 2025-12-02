<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - MedicaCare</title>

    <link rel="stylesheet" href="{{ asset('css/stylehome.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* ========== HEADER STYLE (Same as other pages) ========== */
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

        nav .nav-links {
            list-style: none;
            display: flex;
            gap: 25px;
        }

        nav .nav-links li a {
            text-decoration: none;
            color: #0077b6;
            font-weight: 600;
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
        }

        .login-btn {
            color: #0077b6;
        }

        .signup-btn {
            background-color: #0077b6;
            color: white;
        }
    </style>
</head>

<body>

    @if(session('success'))
        <div style="background: #d4edda; color: #155724; padding: 15px; 
                    border-radius: 5px; width: 80%; margin: 20px auto; 
                    text-align: center; font-weight: bold;">
            {{ session('success') }}
        </div>
    @endif

    <!-- ========== HEADER ADDED HERE ========== -->
    <header>
        <div class="logo">
            <h1>MedicaCare</h1>
        </div>

        <nav>
            <ul class="nav-links">
                <li><a href="{{ url('/index') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/awareness') }}">Awareness</a></li>
                <li><a href="{{ url('/services') }}">Services</a></li>
                <li><a href="{{ url('/contactz') }}">Contact</a></li>
            </ul>
        </nav>

        <div class="auth-buttons">
            <a href="/login" class="login-btn">Login</a>
            <a href="/register" class="signup-btn">Sign Up</a>
        </div>
    </header>


    <!-- Contact Hero Section -->
    <section class="contact-hero" data-aos="fade-up">
        <div class="overlay">
            <h2>We’re excited to hear from you!</h2>

            <form class="contact-form" action="{{ route('contact.store') }}" method="POST" data-aos="fade-up" data-aos-delay="200">
                @csrf

                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="text" name="subject" placeholder="Subject (optional)">
                <textarea name="message" placeholder="Your Message" required></textarea>

                <button type="submit">Send Message</button>

                @if(session('success'))
                    <p style="color: green; margin-top: 10px;">{{ session('success') }}</p>
                @endif
            </form>
        </div>
    </section>


    <!-- FOOTER (No changes made) -->
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

    <!-- AOS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
            once: true
        });
    </script>

    <script src="{{ asset('js/homepagescript.js') }}"></script>

</body>
</html>