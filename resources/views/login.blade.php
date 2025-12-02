<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        /* HEADER STYLES (same as your other page) */
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
            z-index: 1000;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
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
            font-size: 18px;
            color: #333;
            font-weight: 500;
        }

        nav ul li a:hover {
            color: #0077B6;
        }

        /* FOOTER (same as the other page) */
        .footer {
            background: #0a2e4d;
            color: white;
            padding: 40px 20px;
            margin-top: 70px;
        }
        .footer-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            max-width: 1200px;
            margin: auto;
        }
        .footer h3, .footer h4 {
            margin-bottom: 15px;
        }
        .footer ul {
            list-style: none;
            padding: 0;
        }
        .footer ul li {
            margin-bottom: 8px;
        }
        .footer ul li a {
            color: #ddd;
            text-decoration: none;
        }
        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #ffffff33;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <!-- ================= HEADER ================= -->
    <header>
        <div class="logo">MedicaCare</div>

        <nav>
            <ul>
                <li><a href="/indexz">Home</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/appointments">Appointments</a></li>
                <li><a href="/contactz">Contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- ============================================ -->


    <!-- ================= LOGIN CARD ================= -->
    <div class="login-container">
        <div class="login-card">
            <h2>Login</h2>

            <form method="POST" action="{{ route('login.submit') }}">
                @csrf

                <!-- Email -->
                <div class="input-group">
                    <i class="fa-solid fa-envelope"></i>
                    <input 
                        type="email" 
                        name="email" 
                        placeholder="Email" 
                        required 
                        autofocus
                        value="{{ old('email') }}">
                </div>

                <!-- Password -->
                <div class="input-group">
                    <i class="fa-solid fa-lock"></i>
                    <input 
                        type="password" 
                        name="password" 
                        placeholder="Password" 
                        required>
                </div>

                <!-- Role -->
                <div class="input-group">
                    <i class="fa-solid fa-user"></i>
                    <select name="role" required id="roleSelect">
                        <option value="" disabled selected>Select Role</option>
                        <option value="patient">Patient</option>
                        <option value="doctor">Doctor</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <!-- Hospital ID if Doctor -->
                <div class="input-group" id="hospitalGroup" style="display:none;">
                    <i class="fa-solid fa-hospital"></i>
                    <input type="text" name="hospital_id" placeholder="Hospital ID">
                </div>

                <button type="submit" class="login-btn">Login</button>

                @if ($errors->any())
                    <div style="color: red; margin-top: 10px;">
                        {{ $errors->first() }}
                    </div>
                @endif
            </form>
        </div>
    </div>

    <script>
        const roleSelect = document.getElementById('roleSelect');
        const hospitalGroup = document.getElementById('hospitalGroup');

        roleSelect.addEventListener('change', () => {
            hospitalGroup.style.display = roleSelect.value === 'doctor' ? 'flex' : 'none';
        });
    </script>


    <!-- ================= FOOTER ================= -->
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
    <!-- ============================================ -->

</body>
</html>