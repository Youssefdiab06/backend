﻿
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/stylehome.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</head>
<body>


    <header>
        <div class="logo">


            <svg width="50" height="50" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                <!-- Shield Shape -->
                <path d="M32 4 L12 16 V36 C12 50 32 60 32 60 C32 60 52 50 52 36 V16 Z" fill="#00b4d8" />
                <!-- Medical Cross -->
                <path d="M32 20 v16 M24 28 h16" stroke="#ffffff" stroke-width="4" stroke-linecap="round" />
            </svg>
            <span>MedicaCenter</span>

        </div>

        <!-- Navigation -->
        <nav>
           <ul class="nav-links">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="{{ url('/about') }}">About</a></li>
  <li><a href="{{ url('/admin') }}">Admin</a></li>
  <li><a href="{{ url('/awareness') }}">Awareness</a></li>
  <li><a href="{{ url('/contactz') }}">Contactz</a></li>
  <li><a href="{{ url('/e-services') }}">E-Services</a></li>

  <li><a href="{{ url('/healthcare') }}">Healthcare</a></li>
 
  <li><a href="{{ url('/services') }}">services</a></li>
   <li><a href="{{ url('/login') }}">Login</a></li>
  <li><a href="{{ url('/register') }}">register</a></li>
</ul>
</ul>
        </nav>
    </header>


    <!-- Social Icons -->
    <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
    </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h2 class="hero-title">Welcome to MedicaCenter</h2>
            <p>Your health is our priority.</p>
            <a href="{{ url('/contactz') }}" class="btn" data-aos="zoom-in" data-aos-delay="500">Get in Touch</a>


        </div>
        <div class="waves"></div>
    </section>
    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="services-cards" data-aos="fade-up" data-aos-delay="100">

                <div class="card">
                    <i class="fas fa-stethoscope"></i>
                    <h3>General Checkup</h3>
                    <p>Comprehensive health checkups to ensure your wellbeing.</p>
                </div>

                <div class="card" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-tooth"></i>
                    <h3>Dental Care</h3>
                    <p>Advanced dental treatments with expert doctors.</p>
                </div>

                <div class="card" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-heartbeat"></i>
                    <h3>Cardiology</h3>
                    <p>Specialized care for heart and cardiovascular diseases.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="mission-vision">
        <div class="container">
            <!-- Mission Box -->
            <div class="box mission-box" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="100">
                <i class="fas fa-bullseye"></i>
                <h3>Our Mission</h3>
                <p>Provide compassionate and high-quality healthcare services for all patients.</p>
            </div>

            <!-- Vision Box -->
            <div class="box vision-box" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                <i class="fas fa-eye"></i>
                <h3>Our Vision</h3>
                <p>Be the leading healthcare center known for excellence, innovation, and patient care.</p>
            </div>
        </div>
    </section>

    <section class="our-journey">
        <div class="container">
            <h2>Our Journey</h2>
            <div class="timeline">
                <!-- Step 1 -->
                <div class="timeline-step" data-aos="fade-up">
                    <div class="step-icon">🏥</div>
                    <div class="step-content">
                        <h3>Founded</h3>
                        <p>Medica Center was founded with a mission to provide top-quality healthcare services.</p>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="timeline-step" data-aos="fade-up" data-aos-delay="150">
                    <div class="step-icon">🩺</div>
                    <div class="step-content">
                        <h3>Expansion</h3>
                        <p>Expanded our services to include specialized medical departments and advanced technology.</p>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="timeline-step" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-icon">⭐</div>
                    <div class="step-content">
                        <h3>Recognition</h3>
                        <p>Received awards and recognition for excellence in patient care and innovation.</p>
                    </div>
                </div>
                <!-- Step 4 -->
                <div class="timeline-step" data-aos="fade-up" data-aos-delay="450">
                    <div class="step-icon">🌟</div>
                    <div class="step-content">
                        <h3>Future Goals</h3>
                        <p>Continuously improving and innovating to become the leading healthcare center in the region.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- latest news-->

    <section class="latest-news">
        <div class="container">
            <h2>MedicaCare Latest News</h2>
            <div class="news-grid">
                <!-- News Card 1 -->
                <div class="news-card" data-aos="fade-up">
                    <img src="{{ asset('images/medicaleq.jpg') }}" alt="News 1">
                    <h3>New Medical Equipment Arrived</h3>
                    <p>We have introduced state-of-the-art equipment to provide better healthcare services.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>

                <!-- News Card 2 -->
                <div class="news-card" data-aos="fade-up" data-aos-delay="150">
                    <img src="{{ asset('images/campaware.jpg') }}" alt="News 2">
                    <h3>Health Awareness Campaign</h3>
                    <p>Our team conducted a health awareness campaign in local communities.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>

                <!-- News Card 3 -->
                <div class="news-card" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('images/doctorsss.jpg') }}" alt="News 3">
                    <h3>New Specialist Doctors Joined</h3>
                    <p>We welcomed top specialist doctors to enhance patient care and treatment quality.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>
        </div>
        <div style="text-align:center;">
            <a href="doctordashboard.html" class="btn-dashboard">Go To Doctor Dashboard</a>
        </div>

    </section>



    <section class="health-ticker-section">
        <div class="container">
            <h2 class="ticker-title">Health Tips</h2>
            <div class="health-ticker">
                <div class="ticker-wrapper">
                    <p>Drink water daily &nbsp;&nbsp; | &nbsp;&nbsp; Get your annual check-up &nbsp;&nbsp; | &nbsp;&nbsp; Wash your hands regularly &nbsp;&nbsp; | &nbsp;&nbsp; Stay active daily</p>

                </div>
            </div>
        </div>
    </section>





    <!-- Footer Section -->
    <footer>
        <div class="container footer-container">

            <!-- About -->
            <div class="footer-about">
                <h3>MedicaCenter</h3>
                <p>Your trusted healthcare partner, providing modern medical services with care and excellence.</p>
            </div>

            <!-- Quick Links -->
            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="{{ url('/index') }}">Home</a></li>
                    <li><a href="{{ url(path: '/services') }}">Services</a></li>
                    <li><a href="{{ url('/appointments') }}">Appointments</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="footer-contact">
                <h4>Contact Us</h4>
                <p><i class="fas fa-map-marker-alt"></i> Beirut, Lebanon</p>
                <p><i class="fas fa-phone"></i> +961 70 123 456</p>
                <p><i class="fas fa-envelope"></i> info@medicacenter.com</p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

        </div>

        <!-- Bottom -->
        <div class="footer-bottom">
            <p>© 2025 MedicaCenter. All Rights Reserved.</p>
        </div>
    </footer>
    <script>
AOS.init({
          duration: 1200,
          once: true
        });</script>
    <script src="{{ asset('js/home.js') }}"></script>



</body>
</html>