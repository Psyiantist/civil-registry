<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Registration</title>
    <link rel="icon" type="image/x-icon" href="/storage/assets/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins';
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
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

        .form {
            width: 460px;
            max-width: 90vw;
            margin: 40px auto;
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

        .form input,
        .form select {
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

        .form select {
            color: #666;
        }

        .form select option {
            background-color: white;
            color: #333;
        }

        .input-group {
            position: relative;
            width: 100%;
        }

        .eye-icon {
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
        }

        .eye-icon:hover {
            opacity: 1;
            color: #344CB7;
        }

        .btnn {
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

        .btnn:hover {
            background: #344CB7;
        }

        .link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }

        .link a {
            color: #426DDC;
            text-decoration: none;
            margin-left: 5px;
        }

        .link a:hover {
            text-decoration: underline;
            color: #344CB7;
        }

        .alert {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-size: 14px;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .error-message {
            color: #dc3545;
            font-size: 12px;
            margin-top: -15px;
            margin-bottom: 15px;
            display: block;
        }

        .input-error {
            border-bottom: 2px solid #dc3545 !important;
        }

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

            .form {
                width: 95%;
                padding: 20px 15px;
            }

            .form h2 {
                font-size: 24px;
                margin-bottom: 15px;
            }
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
                <h5>ADMIN</h5>
                <div style="display: flex; flex-direction: column; align-items: center;">
                    <h4>REGISTRATION <i class="fa fa-user-plus" aria-hidden="true"></i></h4>
                    <p>"Join our team of administrators and help manage the Civil Registry system."</p>
                </div>
            </div>
        </div>

        <div class="form">
            <h2>ADMIN REGISTRATION</h2>

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.register') }}">
                @csrf
                <div class="name-row">
                    <input type="text" name="first_name" placeholder="First Name" required value="{{ old('first_name') }}" class="{{ $errors->has('first_name') ? 'input-error' : '' }}">
                    @error('first_name')
                        <span class="error-message">{{ $message }}</span>
                    @enderror

                    <input type="text" name="last_name" placeholder="Last Name" required value="{{ old('last_name') }}" class="{{ $errors->has('last_name') ? 'input-error' : '' }}">
                    @error('last_name')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <input type="email" name="email" placeholder="Email Address" required value="{{ old('email') }}" class="{{ $errors->has('email') ? 'input-error' : '' }}">
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required class="{{ $errors->has('password') ? 'input-error' : '' }}">
                    <i class="fa fa-eye-slash eye-icon" onclick="togglePasswordVisibility('password')"></i>
                </div>
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                <div class="input-group">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required class="{{ $errors->has('password_confirmation') ? 'input-error' : '' }}">
                    <i class="fa fa-eye-slash eye-icon" onclick="togglePasswordVisibility('password_confirmation')"></i>
                </div>
                @error('password_confirmation')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                <input type="date" name="birthday" placeholder="Birthday" required value="{{ old('birthday') }}" class="{{ $errors->has('birthday') ? 'input-error' : '' }}">
                @error('birthday')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                <input type="text" name="address" placeholder="Address" required value="{{ old('address') }}" class="{{ $errors->has('address') ? 'input-error' : '' }}">
                @error('address')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                <input type="text" name="employee_id" placeholder="Employee ID" required value="{{ old('employee_id') }}" class="{{ $errors->has('employee_id') ? 'input-error' : '' }}">
                @error('employee_id')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                <button type="submit" class="btnn">REGISTER</button>

                <p class="link">Already have an account?
                    <a href="{{ route('admin.login') }}">Login here</a>
                </p>
            </form>
        </div>
    </section>

    <script>
        function togglePasswordVisibility(inputName) {
            var passwordField = document.querySelector(`input[name="${inputName}"]`);
            var eyeIcon = passwordField.nextElementSibling;

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
    </script>
</body>
</html> 