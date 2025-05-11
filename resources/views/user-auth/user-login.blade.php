
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
      justify-content: left;
      background-color: white;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
    }

    .image-container img {
      width: 50px;
      height: 45px;
      margin-top: 5px;
      margin-left: 20px;
      position: relative;
      border-radius: 50%;
    }

    .logo-name {
      font-size: 15px;
      margin-left: 30px;
      white-space: nowrap;
      font-family: "Poppins", sans-serif;
    }

    .logo-name a {
      margin-left: -16px;
      font-family: "Poppins", sans-serif;
    }

    nav button {
      display: none;
    }

    nav .menu {
      width: 100%;
      margin-top: -5px;
      margin-left: 30px;
      text-align: center;
      justify-content: center;
      align-items: center;
    }

    nav .menu ul li {
      padding: -5px;
      font-size: 17px;
      list-style: none;
      font-weight: bold;
      margin-right: 50px;
      display: inline-block;
      position: relative;
      font-family: "Poppins", sans-serif;

    }

    nav .menu ul:nth-child(2) li {
      top: -8px;
      left: 10px;
      color: #757575;
      position: relative;
    }


    nav .menu ul li a{
      color: black;
      text-decoration: none;
    }

    nav .menu .active,
    .a:hover {
     color: #426DDC;
     font-size: 20px;
    }


    nav .menu ul li a:hover {
      color: #426DDC;
      transition: 0.3s ease;
    }

    nav form {
      left: 25%;
      top: 65px;
      width: 60%;
      position: relative;
    }

    nav form input {
      top: -45px;
      width: 92%;
      border: none;
      color: black;
      outline: none;
      transition: 0.5s;
      padding: 10px 0px;
      position: relative;
      transform: scaleX(0);
      transform-origin: right;
      border-bottom: solid 2px;
      font-family: "Poppins", sans-serif;
    }

    nav form input::placeholder {
      font-size: 16px;
      font-family: "Poppins", sans-serif;
    }

    nav .search-container {
      position: relative;
      margin-left: auto;
      margin-right: 20px;
      display: flex;
      align-items: center;
    }

    nav .search-container input[type="text"] {
      padding: 8px 35px 8px 15px;
      border-radius: 20px;
      border: 1px solid #ccc;
      font-family: "Poppins", sans-serif;
      font-size: 14px;
      outline: none;
      transition: all 0.3s ease;
      width: 180px;
    }

    nav .search-container input[type="text"]:focus {
      border-color: #426DDC;
      box-shadow: 0 0 5px rgba(66, 109, 220, 0.5);
    }

    nav .search-container .fa-search,  button.search-button {
      position: absolute;
      border: none;
      background: none;
      right: 12px;
      color: gray;
      font-size: 16px;
      pointer-events: auto;
    }

    nav .search-container .fa-search:hover {
      color: #426DDC;
      transition: 0.3s ease;
    }

    nav .user-icon {
      font-size: 28px;
      color: #333;
      margin-right: 23px;
      cursor: pointer;
      transition: color 0.3s ease;
    }

    nav .user-icon:hover {
      color: #426DDC;
    }

    /* Main content below the NAV BAR */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      overflow-y: auto;
      align-items: center;
    }

    section {
      width: 100vw;
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
    }

    .details {
      width: 400px;
      max-width: 90vw;
      margin: 0 auto;
      position: relative;
      text-align: center;
    }

    .details h5 {
      font-size: 55px;
      margin: 0 0 -25px 0;
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
      padding-left: 20px;
    }

    .details h4 {
      font-size: 30px;
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
    .form label {
      font-family: "Poppins", sans-serif;
      font-size: 16px;
      color: #222;
      margin-bottom: 2px;
      margin-left: 2px;
      font-weight: 500;
      text-align: left;
      display: block;
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
    .form input[type="email"]:focus,
    .form input[type="password"]:focus,
    .form input[type="text"]:focus {
      outline: none;
      border-bottom: 2px solid #426DDC;
    }
    .input-group {
      position: relative;
      width: 100%;
      display: flex;
      align-items: center;
      margin-bottom: 18px;
    }
    .input-group input[type="password"],
    .input-group input[type="text"] {
      width: 100%;
      padding-right: 40px;
      margin-bottom: 0;
    }
    .input-group .eye-icon {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 20px;
      color: #426DDC;
      cursor: pointer;
      z-index: 2;
      opacity: 0.8;
      transition: color 0.2s;
      width: 28px;
      height: 28px;
      min-width: 28px;
      min-height: 28px;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      vertical-align: middle;
    }
    .input-group .eye-icon:hover {
      opacity: 1;
      color: #344CB7;
    }
    .form .row-remember-forgot {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 22px;
      margin-top: -8px;
    }
    .form .remember-forgot {
      display: flex;
      align-items: center;
      margin: 0;
    }
    .form .remember-forgot input[type="checkbox"] {
      width: 16px;
      height: 16px;
      margin-right: 7px;
      accent-color: #426DDC;
    }
    .form .remember-forgot label {
      font-size: 14px;
      color: #aaa;
      font-style: italic;
      font-weight: 400;
      margin: 0;
      position: static;
    }
    .form .forgot {
      margin: 0;
    }
    .form .forgot a {
      color: #426DDC;
      font-size: 15px;
      font-weight: 500;
      text-decoration: none;
      transition: color 0.2s;
      font-family: "Poppins", sans-serif;
    }
    .form .forgot a:hover {
      color: #344CB7;
      text-decoration: underline;
    }
    .form .btnn {
      width: 100%;
      height: 44px;
      background: #426DDC;
      border: none;
      margin: 0 0 18px 0;
      font-size: 22px;
      border-radius: 12px;
      cursor: pointer;
      color: #fff;
      font-weight: bold;
      font-family: "Poppins", sans-serif;
      letter-spacing: 1px;
      transition: background 0.3s;
      display: block;
    }
    .form .btnn:hover {
      background: #344CB7;
    }
    .form .link {
      color: #111;
      font-size: 15px;
      text-align: center;
      margin: 0 0 8px 0;
      font-family: "Poppins", sans-serif;
      font-weight: 500;
    }
    .form .link a {
      color: #426DDC;
      text-decoration: none;
      margin-left: 5px;
      font-weight: 600;
    }
    .form .link a:hover {
      text-decoration: underline;
      color: #344CB7;
    }
    .form .liw {
      margin: 10px 0 0 0;
      text-align: center;
      font-size: 15px;
      color: #111;
      font-weight: 500;
      font-family: "Poppins", sans-serif;
    }
    .form .divider {
      display: flex;
      align-items: center;
      margin: 10px 0 18px 0;
    }
    .form .divider span {
      flex: 1;
      height: 1px;
      background: #222;
      opacity: 0.5;
    }
    .form .divider p {
      margin: 0 10px;
      color: #222;
      font-size: 15px;
      font-family: "Poppins", sans-serif;
    }
    .icons {
      display: flex;
      justify-content: center;
      gap: 60px;
      margin-top: 10px;
    }
    .icons a {
      text-decoration: none;
    }
    .icons ion-icon {
      color: #426DDC;
      font-size: 48px;
      margin: 0;
      padding: 0;
      transition: color 0.2s;
    }
    .icons ion-icon:hover {
      color: #344CB7;
    }

    /* Zoom-in screen orientation layout */
    @media(max-width: 1000px) {

    html, body {
     align-items: center;
     overflow-y: hidden;
     width: 100%;
     max-width: 100%;
    }

    nav button {
      display: none;
      width: 30px;
      height: 25px;
      top: 20px;
      right: 20px;
      cursor: pointer;
      border: none;
      outline: none;
      background: #757575;
    }

    nav  button:before,
    nav  button:after {
      position: absolute;
      content: '';
      z-index: 0;
      background-color: white;
      width: 30px;
      height: 5px;
      top: 5px;
      left: 0;
      transition: 0.5s;
    }

    nav button:after {
      top: 15px;
    }

    nav button.expand-icon {
      background: transparent;
    }

    nav button.expand-icon:before,
    nav button.expand-icon:after {
      transform: rotate(45deg);
      background: #757575;
      top: 10px;
    }

    nav button.expand-icon:after {
      transform: rotate(-45deg);
    }

    nav .menu {
      position: absolute;
      margin: auto;
      width: 100%;
      height: 0;
      background: white;
      top: 60px;
      transition: 0.5s;
      overflow: hidden;
    }

    nav .menu ul {
      padding: 0;
      margin: 0;
      list-style: none;
    }

    nav .menu.expand-mobile {
      height: 700px;
    }

    nav .menu ul li {
      width: 100%;
      display: block;
      font-size: 1rem;
      text-align: left;
      padding: 10px 15px;
      box-sizing: border-box;
    }

    .dropdown_menu ul {
      list-style: none;
      padding: 0;
      margin-left: 250px;
    }

    .dropdown_menu ul li {
      width: 130px;
      padding: 5px;
      white-space: nowrap;
    }

    nav .menu ul:nth-child(2) li {
      top: 0;
      left: 0;
    }

    nav .nav-container {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      position: relative;
      padding: 0 20px;
      flex-direction: column;
    }

    nav .search-container {
      position: relative;
      margin: 0 auto;
      justify-content: center;
      width: 100%;
      max-width: 500px;
      padding: 10px 20px;
      display: flex;
      align-items: center;
      z-index: 10;
    }

    nav .search-container input[type="text"] {
      padding: 8px 35px 8px 15px;
      border-radius: 20px;
      border: 1px solid #ccc;
      font-family: "Poppins", sans-serif;
      font-size: 14px;
      outline: none;
      width: 100%;
      box-sizing: border-box;
      transition: all 0.3s ease;
    }

    nav .search-container input[type="text"]:focus {
      border-color: #426DDC;
      box-shadow: 0 0 5px rgba(66, 109, 220, 0.5);
    }

    nav .search-container .fa-search {
      position: absolute;
      right: 35px;
      top: 50%;
      transform: translateY(-50%);
      color: #888;
      border: none;
      font-size: 16px;
      pointer-events: auto;
    }

    ::placeholder {
      color: #888;
      font-size: 15px;
      margin-left: 30px;
      font-family: "Poppins", sans-serif;
    }

    nav .search-container i .fa-search:hover {
      color: #426DDC;
      transition: 0.3s ease;
    }

    .user-icon {
      display: none;
    }

    nav .menu-toggle {
      display: flex;
      top: auto;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      font-size: 24px;
      color: #333;
      position: relative;
      margin-left: 20px;
    }

    nav .menu-toggle:hover {
      color: #426DDC;
    }

    .form {
      display: none;
    }

    .details {
     display: none;
    }
    }
    input.error {
    border: 2px solid red;
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

    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
        font-family: "Poppins", sans-serif;
    }

    .alert-danger {
        color: #dc3545 !important;
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
      top: 50%;
      transform: translateY(-50%);
      font-size: 20px;
      color: #426DDC;
      cursor: pointer;
      z-index: 2;
      opacity: 0.8;
      transition: color 0.2s;
      width: 28px;
      height: 28px;
      min-width: 28px;
      min-height: 28px;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      vertical-align: middle;
    }
    .input-group .eye-icon:hover {
      opacity: 1;
      color: #344CB7;
    }

  </style>
</head>

<body>
  <nav>
        <div class="image-container">
            <img src="{{ asset('storage/assets/civil_registry_logo.png') }}"> </div>

        <div class="logo-name">
            <b> Civil Registry <br/> <a> Mandaluyong City </a> </b> </div>

    <div class="menu">
      <ul>
        <li> <a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}"> Home </a> </li>
        <li> <a class="{{ request()->is('faqs') ? 'active' : '' }}" href="{{ route('faqs') }}"> FAQs </a> </li>
        <li> <a class="{{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}"> About Us </a> </li>
        <li> <a class="{{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}"> Contact Us </a> </li>
      </ul>
    </div>

  <div class="search-container">
  <input type="text" id="searchInput" placeholder="Search">
  <i class="fa fa-search" onclick="performSearch()"> </i>
  </div>

<i class="fas fa-user-circle user-icon" onclick="toggleDropdown()"></i>
</div>

    <button class="menu-toggle"> </button>
  </nav>

  <section>
    <div class="details">
      <div>
        <h5><center>SCHEDULE</center></h5>
        <h4>AN APPOINTMENT NOW! <i class="fa fa-calendar-week" aria-hidden="true"></i></h4>
        <p><i>"Convenience you can count on, appointments you can trust."</i></p>
        <a href="#learn-more" class="learn-button">Learn more</a>
      </div>
    </div>
    <div id="loginContainer" class="form">
      <h2>LOGIN</h2>
      @if(session('error'))
          <div style="font-family: 'Poppins', sans-serif;" class="alert alert-danger">
              {{ session('error') }}
          </div>
      @endif
      @if(session('success'))
          <div style="font-family: 'Poppins', sans-serif;" class="alert alert-success">
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
            <label for="remember"> Remember me </label>
          </div>
          <div class="forgot">
            <a href="#" onclick="showForgotPassword()">Forgot Password?</a>
          </div>
        </div>
        <button type="submit" class="btnn">SIGN IN</button>
        <p class="link"> Don't have an account yet?
          <a href="{{ route('register') }}"> Register here</a>
        </p>
        <div class="divider"><span></span><p>or Log in with</p><span></span></div>
        <div class="icons">
          <a href="#"> <ion-icon name="logo-facebook"></ion-icon> </a>
          <a href="#"> <ion-icon name="logo-google"></ion-icon> </a>
        </div>
      </form>
    </div>
    <!-- FORGOT PASSWORD CONTAINER -->
    <div id="forgotPasswordContainer" class="form" style="display: none;">
      <h3 style="text-align:center; font-size: 22px; font-weight: bold; margin-bottom: 8px; margin-top: 0; font-family: Poppins;">Forgot Password</h3>
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
      }}
    document.getElementById("searchInput").addEventListener("keypress", function(e) {
        if (e.key === "Enter") {
        performSearch();
    }
    });

    const button = document.querySelector('.menu-toggle');
    const menu = document.querySelector('.menu');
    if (button && menu) {
        button.addEventListener("click", () => {
            menu.classList.toggle('expand-mobile');
            button.classList.toggle('expand-icon');
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

    function submitForgotPassword(event) {
        event.preventDefault();

        const newPassword = document.getElementById("newPassword");
        const confirmPassword = document.getElementById("confirmPassword");
        const forgotEmail = document.querySelector('input[name="forgot-email"]');
        const errorMessage = document.getElementById("error-message");

        newPassword.classList.remove("error");
        confirmPassword.classList.remove("error");
        forgotEmail.classList.remove("error");

        if (errorMessage) {
            errorMessage.remove();
        }

        if (!forgotEmail.value || !newPassword.value || !confirmPassword.value) {
            if (!forgotEmail.value) forgotEmail.classList.add("error");
            if (!newPassword.value) newPassword.classList.add("error");
            if (!confirmPassword.value) confirmPassword.classList.add("error");

            return false;
        }

        if (newPassword.value !== confirmPassword.value) {
            newPassword.classList.add("error");
            confirmPassword.classList.add("error");

            return false;
        }

        alert("Password successfully reset!");
        document.getElementById("forgotPasswordContainer").style.display = "none";
        document.getElementById("loginContainer").style.display = "block";
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
