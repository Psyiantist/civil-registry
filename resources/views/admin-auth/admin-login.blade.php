<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/x-icon" href="{{ asset('storage/assets/civil_registry_logo.png') }}">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
  <title> Home Page - Admin View Login </title>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
  <script>
    function togglePasswordVisibility(inputId) {
        const passwordField = document.getElementById(inputId);
        const eyeIcon = document.querySelector(`[onclick="togglePasswordVisibility('${inputId}')"]`);

        if (passwordField && eyeIcon) {
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            } else {
                passwordField.type = 'password';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            }
        }
    }

    function showForgotPassword() {
        const loginContainer = document.getElementById('loginContainer');
        const forgotContainer = document.getElementById('forgotPasswordContainer');
        
        if (loginContainer && forgotContainer) {
            loginContainer.style.display = 'none';
            forgotContainer.style.display = 'block';
            // Clear any existing error messages
            document.querySelectorAll('.error').forEach(el => el.classList.remove('error'));
        }
    }

    function hideForgotPassword() {
        const loginContainer = document.getElementById('loginContainer');
        const forgotContainer = document.getElementById('forgotPasswordContainer');
        
        if (loginContainer && forgotContainer) {
            forgotContainer.style.display = 'none';
            loginContainer.style.display = 'block';
            // Clear any existing error messages
            document.querySelectorAll('.error').forEach(el => el.classList.remove('error'));
        }
    }

    // Initialize functions when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        const usernameInput = document.querySelector('input[name="username"]');
        const passwordInput = document.querySelector('input[name="password"]');
        const rememberMeCheckbox = document.getElementById("remember-me");
        const loginButton = document.querySelector(".btnn");

        if (usernameInput && passwordInput && loginButton && rememberMeCheckbox) {
            if (localStorage.getItem("rememberMe") === "true") {
                usernameInput.value = localStorage.getItem("username") || "";
                passwordInput.value = localStorage.getItem("password") || "";
                rememberMeCheckbox.checked = true;
            }
        }

        // Login throttling
        const loginForm = document.getElementById('loginForm');
        if (loginForm && loginButton) {
            loginForm.addEventListener('submit', function(e) {
                const username = document.getElementById('username').value;
                const key = `admin_login_attempts_${username}`;
                const cooldownKey = `admin_login_cooldown_${username}`;
                
                // Check if in cooldown
                const cooldownEnd = sessionStorage.getItem(cooldownKey);
                if (cooldownEnd && Date.now() < parseInt(cooldownEnd)) {
                    e.preventDefault();
                    const secondsLeft = Math.ceil((parseInt(cooldownEnd) - Date.now()) / 1000);
                    alert(`Too many login attempts. Please try again in ${secondsLeft} seconds.`);
                    return;
                }

                // Get current attempts
                let attempts = parseInt(sessionStorage.getItem(key) || '0');
                
                if (attempts >= 3) {
                    e.preventDefault();
                    // Set cooldown for 15 seconds
                    const cooldownEndTime = Date.now() + (15 * 1000);
                    sessionStorage.setItem(cooldownKey, cooldownEndTime.toString());
                    sessionStorage.setItem(key, '0'); // Reset attempts
                    alert('Too many login attempts. Please try again in 15 seconds.');
                    return;
                }

                // Increment attempts
                sessionStorage.setItem(key, (attempts + 1).toString());
            });
        }
    });
     
    // Add password validation
    document.getElementById('forgotPasswordForm').addEventListener('submit', function(e) {
        const password = document.getElementById('newPassword').value;
        const confirmPassword = document.getElementById('password_confirmation').value;
        
        if (password.length < 8) {
            e.preventDefault();
            alert('Password must be at least 8 characters long.');
            return;
        }
        
        if (password !== confirmPassword) {
            e.preventDefault();
            alert('Password confirmation does not match.');
            return;
        }
    });
  </script>
  <style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      overflow-x: hidden;
    }

    /* Reset styles only for login page content */
    .login-content * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Main content styles */
    .login-content {
      position: relative;
      min-height: 100vh;
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      background: linear-gradient(rgba(90, 110, 130, 0.3), rgba(90, 110, 130, 0.3)),url('{{ asset('storage/assets/appointment_bg.jpg') }}') center 40% fixed;
      background-size: cover;
      background-repeat: no-repeat;
      padding: 20px;
      overflow-y: auto;
      overflow-x: hidden;
    }

    .login-content .details {
      width: 100%;
      max-width: 1100px;
      margin: 0 auto;
      position: relative;
      text-align: center;
      padding: 20px 0;
    }

    .login-content .details h5 {
      font-size: 65px;
      margin: 0 0 -20px -10px;
      font-weight: bolder;
      letter-spacing: 15px;
      color: white;
      text-shadow:
               1px 1px 0px white,
              -1px -1px 0px white,
               1px -1px 0px white,
              -1px 1px 0px white,
               0 0 50px black;
      font-family: "Poppins", sans-serif;
      padding-top: 50px;
    }

    .login-content .details h4 {
      font-size: 40px;
      margin: 0 0 10px 0;
      font-weight: bolder;
      letter-spacing: 4px;
      color: white;
      text-shadow:
               1px 1px 0px white,
              -1px -1px 0px white,
               1px -1px 0px white,
              -1px 1px 0px white,
               0 0 30px black;
      font-family: "Poppins", sans-serif;
    }

    .login-content .details p {
      font-size: 16px;
      font-style: italic;
      font-weight: bold;
      background: #f9f5ed;
      border-radius: 10px;
      padding: 8px 0;
      margin: 0 0 18px 0;
      color: black;
      width: 100%;
      text-align: center;
      font-family: "Poppins", sans-serif;
    }

    .login-content .details .learn-button {
      margin: 0 auto;
      display: inline-block;
      padding: 10px 28px;
      background: #FFFFFF;
      color: #000;
      font-size: 18px;
      font-weight: bold;
      border: none;
      border-radius: 10px;
      text-decoration: none;
      box-shadow: 0 2px 8px rgba(66, 109, 220, 0.07);
      font-family: "Poppins", sans-serif;
      transition: background 0.3s, color 0.3s, box-shadow 0.3s;
      cursor: pointer;
    }

    .login-content .details .learn-button:hover {
      background: #EAEAEA;
      color: #426DDC;
      box-shadow: 0 4px 16px rgba(66, 109, 220, 0.15);
      text-decoration: none;
    }

    .login-content .form {
      width: 400px;
      max-width: 90vw;
      margin: 20px auto;
      position: relative;
      border-radius: 18px;
      background-color: #fff;
      padding: 35px 32px 32px 32px;
      box-sizing: border-box;
      box-shadow: 0 4px 24px rgba(0,0,0,0.13);
      display: flex;
      flex-direction: column;
      align-items: stretch;
    }

    .login-content .form h2 {
      width: 100%;
      font-family: "Poppins", sans-serif;
      text-align: center;
      color: #111;
      font-size: 36px;
      font-weight: bold;
      border-radius: 10px;
      margin: 0 0 28px 0;
      padding: 7px 0;
      letter-spacing: 1px;
    }

    .login-content .form input[type="text"],
    .login-content .form input[type="password"],
    .login-content .form input[type="text"].password-field {
      width: 100%;
      height: 38px;
      background: transparent;
      border-bottom: 2px solid #222;
      border-top: none;
      border-right: none;
      border-left: none;
      font-size: 15px;
      letter-spacing: 1px;
      margin-bottom: 18px;
      font-family: "Poppins", sans-serif;
      padding-left: 0;
      color: #222;
    }

    .login-content .form .btnn {
      width: 100%;
      height: 45px;
      background: #426DDC;
      border: none;
      margin-top: 25px;
      font-size: 18px;
      border-radius: 5px;
      cursor: pointer;
      color: white;
      transition: 0.4s ease;
      font-weight: bold;
    }

    .login-content .form .btnn:hover {
      background: #344CB7;
    }

    .login-content .form .link {
      color: black;
      font-weight: bold;
      font-size: 12px;
      padding-top: 10px;
      text-align: center;
      margin-top: 15px;
      font-family: "Poppins", sans-serif;
    }

    .login-content .form .link a {
      color: #426DDC;
      text-decoration: none;
      margin-left: 5px;
    }

    .login-content .form .link a:hover {
      text-decoration: underline;
      color: #344CB7;
    }

    .login-content .row-remember-forgot {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 10px 0;
    }

    .login-content .remember-forgot {
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .login-content .remember-forgot input[type="checkbox"] {
      margin: 0;
    }

    .login-content .remember-forgot label {
      font-size: 14px;
      color: #666;
      font-family: "Poppins", sans-serif;
    }

    .login-content .forgot a {
      color: #426DDC;
      text-decoration: none;
      font-size: 14px;
      font-family: "Poppins", sans-serif;
    }

    .login-content .forgot a:hover {
      text-decoration: underline;
      color: #344CB7;
    }

    .login-content input.error {
      border: 2px solid red;
    }

    .login-content .alert-success {
      color: #155724;
      background-color: #d4edda;
      border-color: #c3e6cb;
      font-size: 16px !important;
      font-weight: bold;
      text-align: center;
      margin-top: 10px;
      margin-bottom: 10px;
      padding: 10px 15px;
      border-radius: 6px;
      box-shadow: none;
      width: 100%;
    }

    .login-content .alert-warning {
      color: #856404;
      background-color: #fff3cd;
      border-color: #ffeeba;
      font-size: 16px !important;
      font-weight: bold;
      text-align: center;
      margin-top: 10px;
      margin-bottom: 10px;
      padding: 10px 15px;
      border-radius: 6px;
      box-shadow: none;
      width: 100%;
    }

    .login-content .input-group {
      position: relative;
      width: 100%;
      display: flex;
      align-items: center;
      margin-bottom: 18px;
      height: 38px;
    }

    .login-content .input-group input[type="password"] {
      width: 100%;
      padding-right: 35px;
      height: 38px;
      background: transparent;
      border-bottom: 2px solid #222;
      border-top: none;
      border-right: none;
      border-left: none;
      font-size: 15px;
      letter-spacing: 1px;
      font-family: "Poppins", sans-serif;
      padding-left: 0;
      color: #222;
      line-height: 38px;
    }

    .login-content .input-group .eye-icon {
      position: absolute;
      right: 0;
      top: -10px;
      bottom: 0;
      font-size: 16px;
      color: #426DDC;
      cursor: pointer;
      z-index: 2;
      opacity: 0.8;
      transition: color 0.2s;
      padding: 0 5px;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 38px;
    }

    .login-content .input-group .eye-icon:hover {
      opacity: 1;
      color: #344CB7;
    }

    /* Mobile Responsive Styles */
    @media screen and (max-width: 768px) {
      .login-content {
        padding: 15px;
      }

      .login-content .details h5 {
        font-size: 50px;
        letter-spacing: 10px;
        margin: 0;
        padding: 0 10px;
        white-space: normal;
        word-wrap: break-word;
      }

      .login-content .details h4 {
        font-size: 30px;
        letter-spacing: 2px;
        margin: 10px 0;
        padding: 0 10px;
        white-space: normal;
        word-wrap: break-word;
      }

      .login-content .details p {
        font-size: 16px;
        padding: 10px 20px;
        margin: 10px auto;
        max-width: 90%;
        width: auto;
        white-space: normal;
        word-wrap: break-word;
      }

      .login-content .form {
        width: 90%;
        padding: 25px 20px;
        margin: 20px auto;
      }

      .login-content .form h2 {
        font-size: 28px;
        margin-bottom: 20px;
      }
    }

    @media screen and (max-width: 480px) {
      .login-content {
        padding: 0;
      }

      .login-content .details h5 {
        font-size: 36px;
        letter-spacing: 8px;
        padding: 0 15px;
        margin: 0;
        padding-top: 100px;
      }

      .login-content .details h4 {
        font-size: 24px;
        letter-spacing: 1px;
        padding: 0 15px;
        margin: 10px 0;
      }

      .login-content .details p {
        font-size: 14px;
        padding: 8px 15px;
        margin: 8px auto;
        width: 90%;
        max-width: 400px;
      }

      .login-content .learn-button {
        padding: 8px 20px;
        font-size: 16px;
      }

      .login-content .form {
        width: 95%;
        padding: 20px 15px;
        margin: 15px auto;
      }

      .login-content .form h2 {
        font-size: 24px;
        margin-bottom: 15px;
      }

      .login-content .form input[type="text"],
      .login-content .form input[type="password"],
      .login-content .form input[type="text"].password-field {
        font-size: 14px;
        height: 35px;
      }

      .login-content .form .btnn {
        height: 40px;
        font-size: 16px;
      }

      .login-content .form .link {
        font-size: 11px;
      }
    }
  </style>
</head>

<body>
  @include('layouts.public-navbar')

  <div class="login-content">
    <div class="details">
      <div>
        <h5>SCHEDULE</h5>
        <div style="display: flex; flex-direction: column; align-items: center;">
          <h4>AN APPOINTMENT NOW! <i class="fa fa-calendar-week" aria-hidden="true"></i></h4>
          <p>"Convenience you can count on, appointments you can trust."</p>
        </div>
        <a href="{{ route('about') }}" class="learn-button">Learn more</a>
      </div>
    </div>
    <div id="loginContainer" class="form">
      <h2> LOGIN </h2>
      @if(session('success'))
          <div style="font-family: 'Poppins', sans-serif;" class="alert-success">
              {{ session('success') }}
          </div>
      @endif
      @if(session('warning'))
          <div style="font-family: 'Poppins', sans-serif;" class="alert-warning">
              {{ session('warning') }}
          </div>
      @endif
      <form action="{{ route('admin.login') }}" method="POST" id="loginForm">
        @csrf
        <input type="text" id="username" name="username" placeholder="Email Address" required>
        <div class="input-group">
          <input type="password" name="password" id="password" placeholder="Password" required>
          <i class="fa fa-eye-slash eye-icon" id="eye-icon" onclick="togglePasswordVisibility('password')"></i>
        </div>
        <div class="row-remember-forgot">
          <div class="remember-forgot">
            <input type="checkbox" id="remember-me">
            <label for="remember-me"> Remember me </label>
          </div>
          <div class="forgot">
            <a href="#" onclick="showForgotPassword()">Forgot Password?</a>
          </div>
        </div>
        @if($errors->has('username'))
          <div style="font-family: 'Poppins', sans-serif; color: red; text-align: center; margin-top: 10px;">
            {{ $errors->first('username') }}
          </div>
        @endif
        @if($errors->has('password'))
          <div style="font-family: 'Poppins', sans-serif; color: red; text-align: center; margin-top: 10px;">
            {{ $errors->first('password') }}
          </div>
        @endif
        <button type="submit" class="btnn">SIGN IN</button>
        <p class="link">Don't have an account yet?
          <a href="{{ route('admin.register') }}">Register here</a>
        </p>
      </form>
    </div>
    <div id="forgotPasswordContainer" class="form" style="display: none;">
      <h3 style="text-align:center; font-size: 22px; font-weight: bold; margin-bottom: 8px; margin-top: 0; font-family: Poppins">Forgot Password</h3>
      <p class="link" style="margin-bottom: 18px; font-size: 16px;">Please enter your email address to reset your password:</p>
      <form id="forgotPasswordForm" action="{{ route('admin.forget.password') }}" method="POST">
        @csrf
        <input type="email" id="email" name="email" placeholder="Email Address" required value="{{ old('email') }}" 
               class="{{ $errors->has('email') ? 'error' : '' }}"
               style="width: 100%; height: 38px; background: transparent; border-bottom: 2px solid #222; border-top: none; border-right: none; border-left: none; font-size: 15px; letter-spacing: 1px; margin-bottom: 18px; font-family: 'Poppins', sans-serif; padding-left: 0; color: #222;">
        <button class="btnn" type="submit">SUBMIT</button>
        @if(session('success'))
          <div style="color: green; text-align: center; margin-top: 10px; font-family: 'Poppins', sans-serif; padding: 10px; background-color: #d4edda; border-radius: 5px;">
            {{ session('success') }}
          </div>
        @endif
        @if($errors->has('email'))
          <div style="color: red; text-align: center; margin-top: 10px; font-family: 'Poppins', sans-serif; padding: 10px; background-color: #f8d7da; border-radius: 5px;">
            {{ $errors->first('email') }}
          </div>
        @endif
      </form>
      <p class="link" style="margin-top: 18px;">Remembered your password?
        <a href="#" onclick="hideForgotPassword()">Back to Login</a>
      </p>
    </div>
  </div>

<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
