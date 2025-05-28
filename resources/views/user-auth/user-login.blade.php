<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/x-icon" href="/storage/assets/favicon.ico">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
  <title> Home Page - Residence View Login </title>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <style type="text/css">
    /* Reset styles only for login page content */
    html, body {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      overflow-x: hidden;
    }
    
    .login-content * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Main content styles */
    .login-content {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      background: linear-gradient(rgba(90, 110, 130, 0.3), rgba(90, 110, 130, 0.3)),url('{{ asset('storage/assets/appointment_bg.jpg') }}') center 40% fixed;
      background-size: cover;
      background-repeat: no-repeat;
      padding: 50px 0 0 0;
      overflow-y: auto;
      overflow-x: hidden;
    }

    .login-content .details {
      width: 100%;
      max-width: 1100px;
      margin: 0 auto;
      position: relative;
      text-align: center;
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
      margin: 40px auto 0 auto;
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

    .login-content .form input[type="email"],
    .login-content .form input[type="password"],
    .login-content .form input[type="text"] {
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
    }

    .login-content .forgot a {
      color: #426DDC;
      text-decoration: none;
      font-size: 14px;
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

    .login-content .alert-danger {
      color: #dc3545;
      background-color: #f8d7da;
      border-color: #f5c6cb;
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
    }

    .login-content .input-group input[type="password"] {
      width: 100%;
      padding-right: 40px;
    }

    .login-content .input-group .eye-icon {
      position: absolute;
      right: 10px;
      top: 40%;
      transform: translateY(-50%);
      font-size: 20px;
      color: #426DDC;
      cursor: pointer;
      z-index: 2;
      opacity: 0.8;
      transition: color 0.2s;
    }

    .login-content .input-group .eye-icon:hover {
      opacity: 1;
      color: #344CB7;
    }

    .login-content .error-message {
      color: #dc3545;
      font-size: 12px;
      margin-top: 5px;
      font-family: "Poppins", sans-serif;
      display: block;
      padding-left: 5px;
    }

    .login-content .input-error {
      border-bottom: 2px solid #dc3545 !important;
    }

    /* Mobile Responsive Styles */
    @media screen and (max-width: 768px) {
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
      .login-content .details h5 {
        font-size: 36px;
        letter-spacing: 8px;
        padding: 0 15px;
        margin: 0;
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
      }

      .login-content .form h2 {
        font-size: 24px;
        margin-bottom: 15px;
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
        <a href="#learn-more" class="learn-button">Learn more</a>
      </div>
    </div>
    <div id="loginContainer" class="form">
      <h2>LOGIN</h2>
      @if(session('error'))
          <div style="font-family: 'Poppins', sans-serif;" class="alert-danger">
              {{ session('error') }}
          </div>
      @endif
      @if(session('success'))
          <div style="font-family: 'Poppins', sans-serif;" class="alert-success">
              {{ session('success') }}
          </div>
      @endif
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="email" id="email" name="email" placeholder="Email Address" value="{{ old('email') }}" class="{{ $errors->has('email') ? 'input-error' : '' }}" required>
        @error('email')
            <span class="error-message">{{ $message }}</span>
        @enderror
        <div class="input-group">
          <input type="password" id="password" name="password" placeholder="Password" class="{{ $errors->has('password') ? 'input-error' : '' }}" required>
          <i class="fa fa-eye-slash eye-icon" id="eye-icon" onclick="togglePasswordVisibility('password')"></i>
        </div>
        @error('password')
            <span class="error-message">{{ $message }}</span>
        @enderror
        <div class="row-remember-forgot">
          <div class="remember-forgot">
            <input type="checkbox" id="remember" name="remember" value="1" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember">Remember me</label>
          </div>
          <div class="forgot">
            <a href="#" onclick="showForgotPassword()">Forgot Password?</a>
          </div>
        </div>
        <button type="submit" class="btnn">SIGN IN</button>
        <p class="link">Don't have an account yet?
          <a href="{{ route('register') }}">Register here</a>
        </p>
      </form>
    </div>
    <div id="forgotPasswordContainer" class="form" style="display: none;">
      <h3 style="text-align:center; font-size: 22px; font-weight: bold; margin-bottom: 8px; margin-top: 0; font-family: Poppins">Forgot Password</h3>
      <p class="link" style="margin-bottom: 18px; font-size: 16px;">Please enter your email address to reset your password:</p>
      <form method="POST" action="{{ route('forget.password') }}">
        @csrf
        <input type="email" id="forgot-email" name="email" placeholder="Email Address" required>
        <button class="btnn" type="submit">SUBMIT</button>
      </form>
      <p class="link" style="margin-top: 18px;">Remembered your password?
        <a href="#" onclick="hideForgotPassword()">Back to Login</a>
      </p>
    </div>
  </div>

<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script>
function performSearch() {
    const input = document.getElementById("searchInput").value.trim().toLowerCase();

    if (input === "") {
        alert("Please enter a search term.");
    } else {
        if (input === "home page" || input === "homepage" || input === "home") {
            window.location.href = "{{ route('home') }}";
        } else if (input === "faqs" || input === "facts" || input === "help") {
            window.location.href = "{{ route('faqs') }}";
        } else if (input === "about" || input === "about civil") {
            window.location.href = "{{ route('about') }}";
        } else if (input === "contact" || input === "number" || input === "email") {
            window.location.href = "{{ route('contact') }}";
        } else {
          alert("No results found.");
          inputField.value = "";
        }
    }
}

document.getElementById("searchInput").addEventListener("keypress", function(e) {
    if (e.key === "Enter") {
        performSearch();
    }
});

const menuToggle = document.querySelector('.menu-toggle');
const menu = document.querySelector('.menu');

if (menuToggle && menu) {
    menuToggle.addEventListener('click', () => {
        menu.classList.toggle('active');
        menuToggle.classList.toggle('active');
    });
}

window.toggleDropdown = function () {
    const dropdown = document.getElementById("accountDropdown");
    alert("Please login or register your account first.");
    if (dropdown) dropdown.classList.toggle("show");
};

window.togglePasswordVisibility = function (inputName) {
    const passwordField = document.querySelector(`input[name="${inputName}"]`);
    const eyeIcon = document.getElementById('eye-icon');

    if (passwordField && eyeIcon) {
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            eyeIcon.classList.add('fa-eye');
            eyeIcon.classList.remove('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            eyeIcon.classList.add('fa-eye-slash');
            eyeIcon.classList.remove('fa-eye');
        }
    }
};

function showForgotPassword() {
    document.getElementById('loginContainer').style.display = 'none';
    document.getElementById('forgotPasswordContainer').style.display = 'block';
}

function hideForgotPassword() {
    document.getElementById('forgotPasswordContainer').style.display = 'none';
    document.getElementById('loginContainer').style.display = 'block';
}

// Handle remember me functionality
const rememberMeCheckbox = document.getElementById("remember");
if (rememberMeCheckbox) {
    rememberMeCheckbox.addEventListener("change", () => {
        if (rememberMeCheckbox.checked) {
            localStorage.setItem("rememberMe", "true");
        } else {
            localStorage.setItem("rememberMe", "false");
        }
    });
}
</script>

</body>
</html>
