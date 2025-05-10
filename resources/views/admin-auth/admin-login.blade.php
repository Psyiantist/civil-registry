<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="/storage/assets/favicon.ico">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
  <title> Home Page - Admin View Login </title>
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
      align-items: center;
      height: 100%; 
      margin: 0; 
      padding: 0; 
      overflow-x: hidden; 
      overflow-y: hidden;
    }

    section {
      width: 100vw;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(rgba(90, 110, 130, 0.3), rgba(90, 110, 130, 0.3)),url('{{ asset('storage/assets/appointment_bg.jpg') }}') center 40% fixed;
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      position: relative;
    }

    .details {
      margin-top: -150px;
      position: fixed;
    }

    h5 {
      color: white;
      font-size: 65px;
      margin-top: 100px;
      margin-bottom: -60px;
      margin-right: 410px;
      font-weight: bolder;
      letter-spacing: 20px;
      text-shadow: 
               1px 1px 0px white,   
              -1px -1px 0px white, 
               1px -1px 0px white, 
              -1px 1px 0px white,
               0 0 50px black;      
      font-family: "Poppins", sans-serif;
    }

    h4 {
      color: white;
      font-size: 35px;
      margin-top: 40px;
      margin-right: 410px;
      font-weight: bolder;
      letter-spacing: 5px;
      text-shadow: 
               1px 1px 0px white,   
              -1px -1px 0px white, 
               1px -1px 0px white, 
              -1px 1px 0px white,
               0 0 30px black;      
      font-family: "Poppins", sans-serif;
    }

    h4 i {
      color: white;
      text-shadow: none;
    }

    .details p {
      color: black;
      margin-top: 10px;
      font-size: 14px;
      font-weight: bold;
      margin-left: 40px;
      border-radius: 10px;
      width: 450px;
      text-align: center;
      background-color: #f9f5ed;
      font-family: "Poppins", sans-serif;
    }

    .learn-button {
      left: 20%;
      top: 20px;
      border: none;
      bottom: -30px; 
      color: black;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
      padding: 7px 20px;
      border-radius: 5px;
      position: relative;  
      text-decoration: none;
      background-color: #f9f5ed;
      transform: translateX(-50%); 
      font-family: "Poppins", sans-serif;
      transition: background-color 0.3s ease;
    }
        
    .learn-button:hover {
      color: #426DDC;
      transition: 0.3s ease; 
      background-color: #EAEAEA;
    }

    .content span{
      color: #ff7200;
      font-size: 65px
    }

    .form{
      top: 220px;
      left: 700px;
      width: 350px;
      min-height: 350px;
      padding: 25px;
      margin-top: -5px;
      margin-left: 25px;
      position: fixed;
      border-radius: 10px;
      background-color: white;
      transform: translate(0%,-5%);                                                
    }      

    .form h2{
      width: 200px;
      height: 40px;
      font-family: sans-serif;
      text-align: center;
      color: black;
      font-size: 30px;
      margin-left: 50px;
      border-radius: 10px;
      margin-top: 20px;
      padding: 7px;
      font-family: "Poppins", sans-serif;                  
    }   
    
    .form h3 {
      width: 220px;
      height: 40px;
      font-family: sans-serif;
      text-align: center;
      color: black;
      font-size: 24px;
      margin-left: 45px;
      border-radius: 10px;
      margin-top: -25px;
      padding: 7px;
      font-family: "Poppins", sans-serif;  
    }

    .form input{
      width: 300px;
      height: 35px;
      background: transparent;
      border-bottom: 2px solid black;
      border-top: none;
      border-right: none;
      border-left: none;
      font-size: 13px;
      letter-spacing: 1px;
      margin-top: 20px;
      margin-right: 20px;
      font-family: "Poppins", sans-serif;
    }

    .form input:focus{
      outline: none;
    }

    #eye-icon {
      width: 15px;
      height: 15px;
      position: absolute;
      margin-left: 280px;
      margin-top: -25px;
    }
    
    #eye-icon-new, #eye-icon-confirm {
      cursor: pointer;
      z-index: 1000;
      width: 15px;
      height: 15px;
      position: absolute;
      margin-left: 280px;
      margin-top: -25px;
    }


     
    .remember-forgot {
      font-family: "Poppins", sans-serif;
      margin-top: -10px;
      display: flex;
    }

    .remember-forgot input {
      width: 15px;
      height: 15px;
      margin-right: 10px;
      background-color: #818181;
    }

    .remember-forgot label {
      font-size: 12px;
      margin-left: 20px;
      font-weight: normal;
      font-style: italic;
      margin-top: 19px;
      position: absolute;
      color: rgb(145, 145, 145);
    }

    .remember-forgot {
      font-family: "Poppins", sans-serif;
      margin-top: -10px;
      display: flex;
    }

    .forgot a {
      display: flex;
      color: #426DDC;
      font-size: 12px;
      margin-top: -15px;
      font-weight: bold;
      margin-left: 190px;
      text-decoration: none;
      font-family: "Poppins", sans-serif;
    }

    .forgot a:hover {
      text-decoration: underline;
      color: #344CB7;

    }

    .btnn {
      width: 305px;
      height: 35px;
      background: #426DDC;
      border: none;
      margin-top: 30px;
      margin-left: -3px;
      font-size: 20px;
      border-radius: 10px;
      font-weight: bold;
      cursor: pointer;
      color: black;
      transition: 0.4s ease;
      font-family: "Poppins", sans-serif;
    }

    .btnn:hover {
      background-color: #344CB7;
    }

    .btnn a {
      text-decoration: none;
      color: white;
      font-weight: bold;
    }

    .form .link{
      color: black;
      font-size: 12px;
      padding-top: 10px;
      text-align: center;
      margin-top: 5px;
      margin-left: -5px;
      font-weight: bold;
      font-family: "Poppins", sans-serif;
    }

    .form .link a{
      color: #426DDC;
      text-decoration: none;
      margin-left: 5px;
      margin-bottom: 10px;
    }

    .form .link a:hover {
      text-decoration: underline;
      color: #344CB7;
    }


    /* Zoom-in screen orientation layout */
    @media(max-width: 1000px) {

    html, body {
     align-items: center;
     overflow-x: hidden;
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

  <section style="display: flex; justify-content: center; align-items: center; height: 100vh; position: relative;">
    <div style="display: flex; flex-direction: row; align-items: center; gap: 16px;">
      <div class="details" style="position: relative; margin-top: 0;">
        <div>
          <h5><center>SCHEDULE</center></h5>
          <h4>AN APPOINTMENT NOW! <i class="fa fa-calendar-week" aria-hidden="true"></i></h4>
          <p><i>"Convenience you can count on, appointments you can trust."</i></p>
          <a href="#learn-more" class="learn-button">Learn more</a>
        </div>
      </div>
      <div id="loginContainer" class="form" style="position: relative; margin-left: 0; margin-top: 0; left: 0; top: 0; transform: none;">
        <h2> LOGIN </h2> 
        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('admin.login') }}" method="POST" id="loginForm">
          @csrf

          <input type="text" name="username" placeholder="Username" required>
          <input type="password" name="password" placeholder="Password" required>
          <img src="{{ asset('storage/assets/icons8-blind-30.jpg') }}" id="eye-icon" onclick="togglePasswordVisibility('password')">
          <div class="remember-forgot">
            <input type="checkbox" id="remember-me">
            <label for="remember-me"> Remember me </label>
          </div>
          <div class="forgot">
            <a href="#" onclick="showForgotPassword()" style="margin-top: 10px; margin-left: 0; display: block;"> Forgot Password? </a>
          </div>
          @if($errors->has('username'))
            <div style="color: red; text-align: center; margin-top: 10px;">
              {{ $errors->first('username') }}
            </div>
          @endif
          @if($errors->has('password'))
            <div style="color: red; text-align: center; margin-top: 10px;">
              {{ $errors->first('password') }}
            </div>
          @endif
          <button type="submit" class="btnn">SIGN IN</button>
        </form>
      </div>
      <div id="forgotPasswordContainer" class="form" style="display: none; position: relative; margin-left: 0; margin-top: 0; left: 0; top: 0; transform: none;">
        <form id="forgotPasswordForm" action="{{ route('admin.password.update') }}" method="POST">
          @csrf
          @if($errors->has('username'))
            <div style="color: red;">{{ $errors->first('username') }}</div>
          @endif
          <p class="link" style="margin: 0 0 20px 0; text-align: center;">Please enter your username and new password:</p>
          <input type="text" id="userName" name="username" placeholder="Username" required>
          <input type="password" id="newPassword" name="password" placeholder="Enter New Password" required>
          <img src="{{ asset('storage/assets/icons8-blind-30.jpg') }}" id="eye-icon-confirm" onclick="togglePasswordVisibility('password')">
          <button class="btnn" type="submit" style="margin-top: 25px;">SUBMIT</button>
          @if(session('status'))
            <div style="color: green; text-align: center; margin-top: 10px;">{{ session('status') }}</div>
          @endif
          @if($errors->has('username'))
            <div style="color: red; text-align: center; margin-top: 10px;">
              {{ $errors->first('username') }}
            </div>
          @endif
          @if($errors->has('password'))
            <div style="color: red; text-align: center; margin-top: 10px;">
              {{ $errors->first('password') }}
            </div>
          @endif
          <p class="link" style="margin-top: 20px; text-align: center;">Remembered your password?
            <a href="#" onclick="hideForgotPassword()">Back to Login</a>
          </p>
        </form>
      </div>
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
            window.location.href = "{{ route('admin.homepage') }}";
        } else if (input === "faqs" || input === "facts" || input === "help") {
            window.location.href = "{{ route('admin.faqs') }}";
        } else if (input === "about" || input === "about civil") {
            window.location.href = "{{ route('admin.about') }}";
        } else if (input === "contact" || input === "number" || input === "email") {
            window.location.href = "{{ route('admin.contact') }}";
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

    window.togglePasswordVisibility = function (inputName = "password") {
    const passwordField = document.querySelector(`input[name="${inputName}"]`);
    let eyeIconId = "eye-icon"; 

    if (inputName === "newPassword") {
        eyeIconId = "eye-icon-new";
    } else if (inputName === "confirmPassword") {
        eyeIconId = "eye-icon-confirm";
    }

    const eyeIcon = document.getElementById(eyeIconId);

    if (passwordField && eyeIcon) {
        if (passwordField.type === "password") {
            passwordField.type = "text";
            eyeIcon.src = '{{ asset('storage/assets/icons8-eye-24.jpg') }}'; 
        } else {
            passwordField.type = "password";
            eyeIcon.src = '{{ asset('storage/assets/icons8-blind-30.jpg') }}'; 
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
</script>

</body>
</html>