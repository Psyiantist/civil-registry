<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('build/assets/civil_registry_logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Step 1</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            overflow: hidden;
            height: 100vh;
        }

        .image-container img {
            width: 60px;
            height: 55px;
            margin-top: 5px;
            margin-left: 45px;
            border-radius: 50%;
        }

        section {
            width: 100%;
            display: flex;
            height: 150vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            justify-content: space-around;
            position: relative;
        }

        section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('{{ asset("build/assets/appointment_bg.jpg") }}') no-repeat center center fixed;
            background-size: cover;
            filter: blur(20px);
            z-index: -1;
        }

        .form {
            top: 90px;
            left: 50%;
            width: 460px;
            height: 550px;
            padding: 25px;
            position: absolute;
            border-radius: 10px;
            background-color: white;
            transform: translateX(-50%);
            padding-right: 30px;
            box-shadow: black;
            z-index: 999;
            animation: popUp 0.5s ease-out forwards;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 26px;
            color: #333;
            cursor: pointer;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .close-btn a {
            font-size: 30px;
            text-decoration: none;
            color: black;
        }

        .close-btn:hover {
            color: rgb(187, 3, 3);
        }

        @keyframes popUp {
            from {
                opacity: 0;
                transform: scale(0.8) translateX(-50%);
            }
            to {
                opacity: 1;
                transform: scale(1) translateX(-50%);
            }
        }

        .form input {
            width: 360px;
            height: 35px;
            background: transparent;
            border-bottom: 1.5px solid black;
            border-top: none;
            border-right: none;
            border-left: none;
            font-size: 13px;
            letter-spacing: 1px;
            margin-top: 15px;
            font-family: "Poppins", sans-serif;
            align-items: center;
            margin-left: 25px;
        }

        #eye-icon {
            width: 15px;
            height: 15px;
            position: absolute;
            margin-left: -20px;
            margin-top: 25px;
        }

        #eye-icon-confirm {
            width: 15px;
            height: 15px;
            transform: translateY(-40%);
            margin-left: -25px;
            margin-bottom: -7px;
        }

        .form input:focus {
            outline: none;
        }

        .form h2 {
            width: 100%;
            font-family: sans-serif;
            text-align: center;
            color: rgb(0, 0, 0);
            font-size: 20px;
            border-radius: 10px;
            padding: 7px;
            font-family: "Poppins", sans-serif;
            margin-bottom: 20px;
            align-items: center;
            margin-top: 10px;
        }

        .form .btnn {
            width: 370px;
            height: 35px;
            background: #426DDC;
            border: none;
            margin-top: 20px;
            font-size: 15px;
            border-radius: 5px;
            cursor: pointer;
            color: rgb(255, 255, 255);
            transition: 0.4s ease;
            align-items: center;
            font-family: poppins;
            margin-left: 20px;
        }

        .form .btnn:hover {
            background-color: #344CB7;
        }

        .form .link {
            color: black;
            font-size: 12px;
            text-align: center;
            margin-top: 10px;
            font-family: "Poppins", sans-serif;
        }

        .form .link a {
            color: #426DDC;
            text-decoration: none;
        }

        .form .link a:hover {
            color: #426DDC;
            text-decoration: underline;
            text-underline-offset: 4px;
            text-decoration-thickness: 1px;
        }

        .liw {
            text-align: center;
            font-size: 12px;
            color: #75757586;
            margin-top: 10px;
            margin-top: 20px;
        }

        .icons a {
            text-decoration: none;
        }

        .icons ion-icon {
            color: #426DDC;
            font-size: 40px;
            padding-top: -5px;
            padding-left: 5px;
            margin-top: 7px;
        }

        .icons ion-icon:hover {
            color: black;
        }

        .form .name-row {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            width: 350px;
        }

        .form .name-row input {
            width: 320px;
        }

        .notification-checkbox {
            font-family: "Poppins", sans-serif;
            margin-top: -4px;
            cursor: pointer;
        }

        .notification-checkbox input {
            margin-right: 10px;
            width: 15px;
            height: 15px;
            background-color: #818181;
            border-radius: 5px;
            cursor: pointer;
        }

        .notification-checkbox label {
            font-size: 11px;
            color: rgb(145, 145, 145);
            font-weight: normal;
            font-style: italic;
            margin-top: 14px;
            position: absolute;
            margin-left: -3px;
        }

        .error {
            color: red;
            font-size: 12px;
            margin-top: 5px;
            display: block;
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
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .name-row .error-message {
            position: absolute;
            margin-top: 35px;
        }
    </style>
</head>
<body>
    <nav>
        <div class="image-container">
            <img src="{{ asset('build/assets/civil_registry_logo.png') }}">
        </div>
    </nav>

    <section>
        <div class="form">
            <h2>REGISTRATION</h2>
            <span class="close-btn">
                <a href="{{ route('home') }}">&times;</a>
            </span>

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

            <form method="POST" action="{{ route('register') }}">
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

                <input type="password" name="password" placeholder="Password" required class="{{ $errors->has('password') ? 'input-error' : '' }}">
                <img src="{{ asset('build/assets/icons8-blind-30.jpg') }}" id="eye-icon" onclick="togglePasswordVisibility('password')">
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                <input type="password" name="password_confirmation" placeholder="Confirm Password" required class="{{ $errors->has('password_confirmation') ? 'input-error' : '' }}">
                <img src="{{ asset('build/assets/icons8-blind-30.jpg') }}" id="eye-icon-confirm" onclick="togglePasswordVisibility('password_confirmation')">
                @error('password_confirmation')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                <button class="btnn" type="submit">Proceed</button>

                <div class="notification-checkbox">
                    <input type="checkbox" id="receive-notifications" name="receive_notifications" value=1 required {{ old('receive_notifications') ? 'checked' : '' }}>
                    <label for="receive-notifications">I would like to receive updates and notifications.</label>
                    @error('receive_notifications')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <p class="link">Already have an account?
                    <a href="{{ route('login') }}">Login here</a>
                </p>

                <p class="liw">━━━━━━━ or Register with ━━━━━━━</p>
                <div class="icons">
                    <center>
                        <a><ion-icon name="logo-facebook"></ion-icon></a>
                        <a><ion-icon name="logo-google"></ion-icon></a>
                    </center>
                </div>
            </form>
        </div>
    </section>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script>
        function togglePasswordVisibility(inputName) {
            var passwordField = document.querySelector(`input[name="${inputName}"]`);
            var eyeIcon = inputName === 'password' ? document.getElementById('eye-icon') : document.getElementById('eye-icon-confirm');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.src = "{{ asset('build/assets/icons8-eye-24.jpg') }}";
            } else {
                passwordField.type = 'password';
                eyeIcon.src = "{{ asset('build/assets/icons8-blind-30.jpg') }}";
            }
        }
    </script>
</body>
</html>
