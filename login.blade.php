<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Simple Wear</title>
   <style>
        /* login.css */
/* Base Styles */
/* ===== Navigation Bar ===== */
header {
    background-color: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 15px 20px;
    position: sticky;
    top: 0;
    z-index: 100;
    display: flex;
    align-items: center;
}

/* Site Title/Logo */
.header-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #333;
    text-decoration: none;
    margin-right: 30px; /* Space between logo and nav */
}

/* Main Navigation Links */
.nav-links {
    display: flex;
    gap: 20px;
    list-style: none;
    margin: 0;
    padding: 0;
}

.nav-links li {
    position: relative;
}

.nav-links a {
    color: #333;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    padding: 5px 0;
    transition: color 0.3s ease;
    display: block;
}

.nav-links a:hover {
    color: #ff6b6b;
}

/* Active Link Indicator */
.nav-links a.active::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: #ff6b6b;
}

/* Icons (Cart, etc.) */
.header-icons {
    margin-left: auto; /* Pushes icons to far right */
    display: flex;
    gap: 15px;
}

.nav-icon {
    width: 22px;
    height: 22px;
    transition: transform 0.3s ease;
}

.nav-icon:hover {
    transform: scale(1.1);
}

/* ===== Responsive Design ===== */
@media (max-width: 768px) {
    header {
        flex-direction: column;
        align-items: flex-start;
        padding: 15px;
    }

    .header-title {
        margin-bottom: 10px;
    }

    .nav-links {
        flex-wrap: wrap;
        gap: 15px 20px; /* Row and column gap */
    }

    .header-icons {
        position: absolute;
        top: 15px;
        right: 15px;
    }
}

@media (max-width: 480px) {
    .nav-links {
        gap: 12px;
    }
    
    .nav-links a {
        font-size: 0.9rem;
    }
}
.login-main {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 70vh;
    padding: 20px;
}

.login-container, .otp-container {
    max-width: 400px;
    width: 100%;
    padding: 30px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.login-header h1 {
    color: #333;
    font-size: 1.8rem;
    margin-bottom: 8px;
    text-align: center;
}

.login-header p {
    color: #666;
    text-align: center;
}

/* Form Styles */
.login-form, .otp-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
    margin-top: 25px;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.form-group label {
    font-weight: 600;
    color: #333;
    font-size: 0.9rem;
}

.form-group input {
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1rem;
}

.form-group input:focus {
    outline: none;
    border-color: #6e8efb;
}

/* OTP Specific */
.otp-hint {
    font-size: 0.8rem;
    color: #666;
    margin-top: 5px;
}

/* Buttons */
.login-btn {
    background: #333;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 4px;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s;
    font-size: 1rem;
    width: 100%;
}

.login-btn:hover {
    background: #ff6b6b;
}

/* Links */
.register-link, .otp-resend a {
    color: #ff6b6b;
    font-weight: 600;
    text-decoration: none;
}

.register-link:hover, .otp-resend a:hover {
    text-decoration: underline;
}

/* Error Messages */
#error-message, #otp-error-message {
    color: #dc3545;
    text-align: center;
    margin: 15px 0;
    padding: 10px;
    background: #ffeeee;
    border-radius: 4px;
    display: none;
}
   </style>
</head>
<body>
    <header>
        <nav>
            <ul class="nav-links">
                 <li><a class="nav-links" href="{{ url('home') }}">HOME</a></li>
                <li><a class="nav-links" href="{{ url('about') }}">ABOUT</a></li>
                <li><a class="nav-links" href="{{ url('men') }}">MEN</a></li>
                <li><a class="nav-links" href="{{ url('women') }}">WOMEN</a></li>
            </ul>
        </nav>
        <div class="header-icons">
            <a href="{{ url('cart') }}"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYDlmGP8qRC2WJ29Fo4r9-iC3uqxDMznboywvaXvsOLO3MU1UV-wsz_N1eu-oG7m9nOKQ&usqp=CAU" alt="Cart" class="nav-icon"></a>
        </div>
    </header>

    <main class="login-main">
        <div class="login-container" id="loginFormContainer">
            <div class="login-header">
                <h1>Welcome Back</h1>
                <p>Sign in to your account</p>
                <div id="error-message"></div>
            </div>
            
            <form class="login-form" id="loginForm">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <button type="submit" class="login-btn">Continue</button>
            </form>
            
            <div class="register-prompt">
             <a href="{{ route('registration') }}" class="register-link">Register here</a>
            </div>
        </div>

        <!-- OTP Verification (hidden by default) -->
        <div class="otp-container" id="otpContainer" style="display:none;">
            <div class="login-header">
                <h1>Verify Your Identity</h1>
                <p>We've sent a 6-digit code to your email</p>
                <div id="otp-error-message"></div>
            </div>
            
            <form class="otp-form" id="otpForm">
                <div class="form-group">
                    <label for="otp">Enter OTP Code</label>
                    <input type="text" id="otp" name="otp" maxlength="6" required>
                    <p class="otp-hint">(3 letters + 3 numbers in CAPS)</p>
                </div>
                
                <button type="submit" class="login-btn">Verify & Login</button>
            </form>
            
            <div class="otp-resend">
                <p>Didn't receive code? <a href="#" id="resendOtp">Resend OTP</a></p>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    // DOM Elements
    const loginForm = document.getElementById('loginForm');
    const otpForm = document.getElementById('otpForm');
    const loginContainer = document.getElementById('loginFormContainer');
    const otpContainer = document.getElementById('otpContainer');
    const errorMessage = document.getElementById('error-message');
    const otpErrorMessage = document.getElementById('otp-error-message');
    const resendOtpLink = document.getElementById('resendOtp');
    
    // Simulated user database
    const registeredUsers = JSON.parse(localStorage.getItem('registeredUsers')) || [];
    let generatedOtp = '';
    let userEmail = '';

    // Generate OTP (3 letters + 3 numbers in CAPS)
    function generateOTP() {
        const letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        const numbers = '0123456789';
        let otp = '';
        
        // Add 3 random letters
        for (let i = 0; i < 3; i++) {
            otp += letters.charAt(Math.floor(Math.random() * letters.length));
        }
        
        // Add 3 random numbers
        for (let i = 0; i < 3; i++) {
            otp += numbers.charAt(Math.floor(Math.random() * numbers.length));
        }
        
        // Shuffle the characters
        return otp.split('').sort(() => 0.5 - Math.random()).join('');
    }

    // Login Form Submission
    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value.trim();
        userEmail = email;
        
        // Check if user exists (in a real app, this would be a server call)
        const userExists = registeredUsers.some(user => user.email === email);
        
        if (userExists) {
            // Generate and "send" OTP (in production, send via email/SMS)
            generatedOtp = generateOTP();
            console.log(`OTP for ${email}: ${generatedOtp}`); // For testing
            
            // Show OTP form
            loginContainer.style.display = 'none';
            otpContainer.style.display = 'block';
            errorMessage.style.display = 'none';
        } else {
            // User not registered
            errorMessage.textContent = 'Account not found. Please register first.';
            errorMessage.style.display = 'block';
            setTimeout(() => {
                window.location.href = 'registration.php';
            }, 2000);
        }
    });

    // OTP Form Submission
    otpForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const enteredOtp = document.getElementById('otp').value.trim();
        
        if (enteredOtp === generatedOtp) {
            // Successful login
            otpErrorMessage.style.display = 'none';
            alert(`Welcome back! You're now logged in as ${userEmail}`);
            window.location.href = 'home.php';
        } else {
            // Invalid OTP
            otpErrorMessage.textContent = 'Invalid OTP code. Please try again.';
            otpErrorMessage.style.display = 'block';
        }
    });

    // Resend OTP
    resendOtpLink.addEventListener('click', function(e) {
        e.preventDefault();
        generatedOtp = generateOTP();
        console.log(`New OTP for ${userEmail}: ${generatedOtp}`); // For testing
        otpErrorMessage.textContent = 'New OTP sent successfully!';
        otpErrorMessage.style.color = '#28a745';
        otpErrorMessage.style.backgroundColor = '#e8f5e9';
        otpErrorMessage.style.display = 'block';
        
        setTimeout(() => {
            otpErrorMessage.style.display = 'none';
        }, 3000);
    });
});
    </script>
</body>
</html>