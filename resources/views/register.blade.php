<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <h2>Register</h2>

            <!-- Registration Form -->
            <form method="POST" action="{{ route('register.submit') }}">
                @csrf

                <!-- Name -->
                <div class="input-group">
                    <i class="fa-solid fa-user"></i>
                    <input 
                        type="text" 
                        name="name" 
                        placeholder="Full Name" 
                        value="{{ old('name') }}" 
                        required>
                </div>

                <!-- Email -->
                <div class="input-group">
                    <i class="fa-solid fa-envelope"></i>
                    <input 
                        type="email" 
                        name="email" 
                        placeholder="Email" 
                        value="{{ old('email') }}" 
                        required>
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

                <!-- Confirm Password -->
                <div class="input-group">
                    <i class="fa-solid fa-lock"></i>
                    <input 
                        type="password" 
                        name="password_confirmation" 
                        placeholder="Confirm Password" 
                        required>
                </div>

                <!-- Role -->
                <div class="input-group">
                    <i class="fa-solid fa-user-tag"></i>
                    <select name="role" id="roleSelect" required>
                        <option value="" disabled selected>Select Role</option>
                        <option value="patient">Patient</option>
                        <option value="doctor">Doctor</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <!-- Hospital ID (only for doctors) -->
                <div class="input-group" id="hospitalGroup" style="display:none;">
                    <i class="fa-solid fa-hospital"></i>
                    <input 
                        type="text" 
                        name="hospital_id" 
                        placeholder="Hospital ID (for doctors only)">
                </div>

                <!-- Submit -->
                <button type="submit" class="login-btn">Register</button>

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div style="color: red; margin-top: 10px;">
                        {{ $errors->first() }}
                    </div>
                @endif

                <!-- Success Message -->
                @if (session('status'))
                    <div style="color: green; margin-top: 10px;">
                        {{ session('status') }}
                    </div>
                @endif
            </form>

            <!-- Link to Login -->
            <p style="text-align:center; margin-top:15px;">
                Already have an account? 
                <a href="{{ route('login') }}" style="color:#007bff;">Login here</a>
            </p>
        </div>
    </div>

    <!-- Show hospital field only for doctors -->
    <script>
        const roleSelect = document.getElementById('roleSelect');
        const hospitalGroup = document.getElementById('hospitalGroup');

        roleSelect.addEventListener('change', () => {
            hospitalGroup.style.display = roleSelect.value === 'doctor' ? 'flex' : 'none';
        });
    </script>
</body>
</html>