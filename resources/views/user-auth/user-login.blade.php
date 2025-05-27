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

    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    nav{
      top: 0;
      width: 100%;
      height: 65px;
      z-index: 9999;
      display: flex;
      position: sticky;
      align-items: center;
      justify-content: space-between;
      background-color: white;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
      padding: 0 20px;
    }

    .nav-left {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .image-container img {
      width: 50px;
      height: 45px;
      margin-top: 5px;
      position: relative;
      border-radius: 50%;
    }

    .logo-name {
      font-size: 15px;
      margin-left: 15px;
      white-space: nowrap;
      font-family: "Poppins", sans-serif;
    }

    .logo-name a {
      margin-left: -16px;
      font-family: "Poppins", sans-serif;
    }

    nav .menu {
      display: flex;
      align-items: center;
    }

    nav .menu ul {
      display: flex;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    nav .menu ul li {
      padding: 0;
      font-size: 17px;
      font-weight: bold;
      margin-right: 30px;
      position: relative;
      font-family: "Poppins", sans-serif;
    }

    nav .menu ul li a {
      color: black;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    nav .menu ul li a:hover,
    nav .menu .active {
      color: #426DDC;
    }

    .search-container {
      position: relative;
      display: flex;
      align-items: center;
      margin-right: 20px;
    }

    .search-container input[type="text"] {
      padding: 8px 35px 8px 15px;
      border-radius: 20px;
      border: 1px solid #ccc;
      font-family: "Poppins", sans-serif;
      font-size: 14px;
      outline: none;
      transition: all 0.3s ease;
      width: 180px;
    }

    .search-container input[type="text"]:focus {
      border-color: #426DDC;
      box-shadow: 0 0 5px rgba(66, 109, 220, 0.5);
    }

    .search-container .fa-search {
      position: absolute;
      right: 12px;
      color: gray;
      font-size: 16px;
      cursor: pointer;
    }

    .search-container .fa-search:hover {
      color: #426DDC;
    }

    .user-icon {
      font-size: 28px;
      color: #333;
      cursor: pointer;
      transition: color 0.3s ease;
    }

    .user-icon:hover {
      color: #426DDC;
    }

    .menu-toggle {
      display: none;
      background: none;
      border: none;
      cursor: pointer;
      padding: 5px;
    }

    .menu-toggle span {
      display: block;
      width: 25px;
      height: 3px;
      background-color: #333;
      margin: 5px 0;
      transition: all 0.3s ease;
    }

    /* Main content below the NAV BAR */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      overflow-y: auto;
      overflow-x: hidden;
      width: 100%;
      max-width: 100vw;
      align-items: center;
    }

    section {
      width: 100%;
      max-width: 100vw;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      background: linear-gradient(rgba(90, 110, 130, 0.3), rgba(90, 110, 130, 0.3)),url('{{ asset('storage/assets/appointment_bg.jpg') }}') center 40% fixed;
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
      padding: 50px 0 0 0;
      box-sizing: border-box;
      position: relative;
      overflow-y: auto;
      overflow-x: hidden;
    }

    .details {
      width: 100%;
      max-width: 1100px;
      margin: 0 auto;
      position: relative;
      text-align: center;
    }

    .details h5 {
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

    .details h4 {
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

    .details p {
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

    .details .learn-button {
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

    .details .learn-button:hover {
      background: #EAEAEA;
      color: #426DDC;
      box-shadow: 0 4px 16px rgba(66, 109, 220, 0.15);
      text-decoration: none;
    }

    .form {
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

    .form h2 {
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

    .form input[type="email"],
    .form input[type="password"],
    .form input[type="text"] {
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

    .form .btnn {
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

    .form .btnn:hover {
      background: #344CB7;
    }

    .form .link {
      color: black;
      font-weight: bold;
      font-size: 12px;
      padding-top: 10px;
      text-align: center;
      margin-top: 15px;
      font-family: "Poppins", sans-serif;
    }

    .form .link a {
      color: #426DDC;
      text-decoration: none;
      margin-left: 5px;
    }

    .form .link a:hover {
      text-decoration: underline;
      color: #344CB7;
    }

    .row-remember-forgot {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 10px 0;
    }

    .remember-forgot {
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .remember-forgot input[type="checkbox"] {
      margin: 0;
    }

    .remember-forgot label {
      font-size: 14px;
      color: #666;
    }

    .forgot a {
      color: #426DDC;
      text-decoration: none;
      font-size: 14px;
    }

    .forgot a:hover {
      text-decoration: underline;
      color: #344CB7;
    }

    /* Mobile Responsive Styles */
    @media screen and (max-width: 768px) {
      nav {
        padding: 0 15px;
      }

      nav .menu {
        position: fixed;
        top: 65px;
        left: -100%;
        width: 100%;
        height: calc(100vh - 65px);
        background: white;
        flex-direction: column;
        transition: 0.3s ease;
        padding: 20px;
      }

      nav .menu.active {
        left: 0;
      }

      nav .menu ul {
        flex-direction: column;
        width: 100%;
      }

      nav .menu ul li {
        width: 100%;
        margin: 10px 0;
        text-align: center;
      }

      .search-container {
        display: none;
      }

      .user-icon {
        display: none;
      }

      .logo-name {
        font-size: 13px;
        margin-left: 10px;
      }

      .image-container img {
        width: 40px;
        height: 35px;
      }

      .menu-toggle {
        display: block;
      }

      .details h5 {
        font-size: 50px;
        letter-spacing: 10px;
        margin: 0;
        padding: 0 10px;
        white-space: normal;
        word-wrap: break-word;
      }

      .details h4 {
        font-size: 30px;
        letter-spacing: 2px;
        margin: 10px 0;
        padding: 0 10px;
        white-space: normal;
        word-wrap: break-word;
      }

      .details p {
        font-size: 16px;
        padding: 10px 20px;
        margin: 10px auto;
        max-width: 90%;
        width: auto;
        white-space: normal;
        word-wrap: break-word;
      }

      .form {
        width: 90%;
        padding: 25px 20px;
        margin: 20px auto;
      }

      .form h2 {
        font-size: 28px;
        margin-bottom: 20px;
      }
    }

    @media screen and (max-width: 480px) {
      nav {
        padding: 0 10px;
      }

      .logo-name {
        font-size: 12px;
      }

      .image-container img {
        width: 35px;
        height: 30px;
      }

      .details h5 {
        font-size: 36px;
        letter-spacing: 8px;
        padding: 0 15px;
        margin: 0;
      }

      .details h4 {
        font-size: 24px;
        letter-spacing: 1px;
        padding: 0 15px;
        margin: 10px 0;
      }

      .details p {
        font-size: 14px;
        padding: 8px 15px;
        margin: 8px auto;
        width: 90%;
        max-width: 400px;
      }

      .learn-button {
        padding: 8px 20px;
        font-size: 16px;
      }

      .form {
        width: 95%;
        padding: 20px 15px;
      }

      .form h2 {
        font-size: 24px;
        margin-bottom: 15px;
      }
    }

    input.error {
      border: 2px solid red;
    }

    .alert-success {
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

    .alert-danger {
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

    .input-group {
      position: relative;
      width: 100%;
      display: flex;
      align-items: center;
    }

    .input-group input[type="password"] {
      width: 100%;
      padding-right: 40px;
    }

    .input-group .eye-icon {
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

    .input-group .eye-icon:hover {
      opacity: 1;
      color: #344CB7;
    }

    .error-message {
      color: #dc3545;
      font-size: 12px;
      margin-top: 5px;
      font-family: "Poppins", sans-serif;
      display: block;
      padding-left: 5px;
    }

    .input-error {
      border-bottom: 2px solid #dc3545 !important;
    }

  </style>
</head>

<body>
  <nav>
    <div class="nav-left">
      <div class="image-container">
        <img src="{{ asset('storage/assets/civil_registry_logo.png') }}" alt="Logo">
      </div>
      <div class="logo-name">
        <b>Mandaluyong City<br/><a>Civil Registry</a></b>
      </div>
    </div>

    <div class="menu">
      <ul>
        <li><a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
        <li><a class="{{ request()->is('faqs') ? 'active' : '' }}" href="{{ route('faqs') }}">FAQs</a></li>
        <li><a class="{{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a></li>
        <li><a class="{{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a></li>
      </ul>
    </div>

    <div class="search-container">
      <input type="text" id="searchInput" placeholder="Search">
      <i class="fa fa-search" onclick="performSearch()"></i>
    </div>

    <i class="fas fa-user-circle user-icon" onclick="toggleDropdown()"></i>

    <button class="menu-toggle">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </nav>

  <section>
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
  </section>

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
