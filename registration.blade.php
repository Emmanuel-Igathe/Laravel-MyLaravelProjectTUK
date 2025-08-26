<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Simple Wear</title>
    <style>
/* Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    background-color: silver;
    background-image: url(https://media.gettyimages.com/id/73156806/photo/t-shirts-with-various-country-names-displayed-in-store.jpg?s=612x612&w=gi&k=20&c=-PdMSG-KHZb4r3GR7TbDI67m_8OyJLL218i7qGJ_x3M=);
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
}

.registration-container {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
    padding: 30px;
}

.registration-header {
    text-align: center;
    margin-bottom: 30px;
    display: flex;
    align-items: center;
}

.registration-header h1 {
    color: #333;
    font-size: 28px;
    margin-bottom: 8px;
}

.registration-header p {
    color: #666;
    font-size: 14px;
}

/*Navigation Styles*/
.nav-links {
    display: flex;
    gap: 25px;
    list-style: none;
    float: left;
    margin-right: auto;/*Pushes everything else to the right*/
}

.nav-links a {
    text-decoration: none;
    color:#333;
    font-weight: 600;
    padding: 5px 0;
    position: relative;
    transition: color 0.3s;
}

.nav-links a:hover {
    color:#ff6b6b;
}

/*Active link Indicator*/
.nav-links a.active {
    color: #ff6b6b;
    border-bottom: 2px solid #ff6b6b;
}

.nav-icon {
    width: 20px;
    height: 20px;
    vertical-align: middle;
}

.registration-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.form-group label {
    font-weight: 600;
    color: #333;
    font-size: 14px;
}

.form-group input {
    padding: 12px 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    transition: border-color 0.3s;
}

.form-group input:focus {
    outline: none;
    border-color: #6e8efb;
}

.password-requirements {
    margin-top: 8px;
    background-color: #f8f9fa;
    padding: 10px;
    border-radius: 5px;
    font-size: 13px;
}

.password-requirements p {
    margin-bottom: 5px;
    color: #555;
}

.password-requirements ul {
    list-style-type: none;
    color: #888;
}

.password-requirements li {
    margin-bottom: 3px;
    position: relative;
    padding-left: 20px;
}

.password-requirements li:before {
    content: "•";
    position: absolute;
    left: 0;
}

.password-requirements li.valid {
    color: #28a745;
}

.register-btn {
    background-color: #333;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 5px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s;
    margin-top: 10px;
}

.register-btn:hover {
    background-color: #ff6b6b;
}

.login-link {
    text-align: center;
    margin-top: 15px;
    font-size: 14px;
    color: #666;
}

.login-link a {
    color: #6e8efb;
    text-decoration: none;
    font-weight: 600;
}

.login-link a:hover {
    text-decoration: underline;
}

.validation-message {
    font-size: 12px;
    margin-top: 5px;
    min-height: 18px;
}

/* Responsive Design */
@media (max-width: 480px) {
    .registration-container {
        padding: 20px;
    }
    
    .registration-header h1 {
        font-size: 24px;
    }
}

    </style>
</head>
<body>
    <header>
        <h1>SIMPLE WEAR DESIGNERS</h1>
        <nav>
            <ul class="nav-links">
                <li><a class="nav-links" href="{{ url('home') }}">HOME</a></li>
                <li><a class="nav-links" href="{{ url('about') }}">ABOUT US</a></li>
                <li><a class="nav-links" href="{{ url('registration') }}">REGISTER</a></li>
                <li><a href="{{ url('cart') }}"><i class="fas fa-shopping-cart"></i></a></li>
            </ul>
        </nav>
    </header>
    <div class="registration-container">
        <div class="registration-header">
            <h1>Create Your Account</h1>
            <p>Join Simple Wear for exclusive offers</p>
        </div>

        <form  id="registrationForm" class="registration-form" action="connect.php" method="post">
            <div class="form-group">
                <label for="firstName">First Name*</label>
                <input type="text" id="firstName" name="firstName" required>
            </div>

            <div class="form-group">
                <label for="lastName">Last Name*</label>
                <input type="text" id="lastName" name="lastName" required>
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth*</label>
                <input type="date" id="dob" name="dob" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address*</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="address">Physical Address*</label>
                <input type="text" id="address" name="address" required>
            </div>

            <div class="form-group">
                <label for="city">City*</label>
                <input type="text" id="city" name="city" required>
            </div>

            <div class="form-group">
                <label for="password">Password*</label>
                <input type="password" id="password" name="password" required>
                <div class="password-requirements">
                    <p>Password must contain:</p>
                    <ul>
                        <li id="length">At least 8 characters</li>
                        <li id="capital">One capital letter</li>
                        <li id="number">One number</li>
                        <li id="special">One special character (*/?!.)</li>
                    </ul>
                </div>
            </div>

            <div class="form-group">
                <label for="confirmPassword">Confirm Password*</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
                <p id="passwordMatch" class="validation-message"></p>
            </div>

            <button type="submit" class="register-btn">Register</button>

            <div class="login-link">
                <p>Already have an account? <a href="{{ url('login') }}">Log in</a></p>
            </div>
        </form>
    </div>
    <script>
    document.getElementById('password').addEventListener('input', function() {
    const password = this.value;
    const lengthValid = password.length >= 8;
    const capitalValid = /[A-Z]/.test(password);
    const numberValid = /[0-9]/.test(password);
    const specialValid = /[*\/?!.]/.test(password);

    // Update validation indicators
    document.getElementById('length').style.color = lengthValid ? 'green' : 'red';
    document.getElementById('capital').style.color = capitalValid ? 'green' : 'red';
    document.getElementById('number').style.color = numberValid ? 'green' : 'red';
    document.getElementById('special').style.color = specialValid ? 'green' : 'red';
});

document.getElementById('confirmPassword').addEventListener('input', function() {
    const password = document.getElementById('password').value;
    const confirmPassword = this.value;
    const matchMessage = document.getElementById('passwordMatch');
    
    if (password === confirmPassword) {
        matchMessage.textContent = 'Passwords match!';
        matchMessage.style.color = 'green';
    } else {
        matchMessage.textContent = 'Passwords do not match';
        matchMessage.style.color = 'red';
    }
});

document.getElementById('registrationForm').addEventListener('submit', function(e) {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    
    // Check all password requirements
    const isValid = password.length >= 8 && 
                   /[A-Z]/.test(password) && 
                   /[0-9]/.test(password) && 
                   /[*\/?!.]/.test(password) && 
                   password === confirmPassword;
    
    if (!isValid) {
        e.preventDefault();
        alert('Please ensure your password meets all requirements and matches the confirmation');
    }
});
</script>
</body>
</html>


