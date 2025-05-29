<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/assets/civil_registry_logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Step 1</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow-x: hidden;
        }

        /* Reset styles only for registration content */
        .registration-content * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Main content styles */
        .registration-content {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .registration-content::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('{{ asset("storage/assets/appointment_bg.jpg") }}') no-repeat center center fixed;
            background-size: cover;
            filter: blur(20px);
            z-index: -1;
        }

        .registration-content .form {
            width: 460px;
            max-width: 90%;
            height: auto;
            min-height: 550px;
            padding: 25px;
            position: relative;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 4px 24px rgba(0,0,0,0.13);
            z-index: 999;
            animation: popUp 0.5s ease-out forwards;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .registration-content .form form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .registration-content .close-btn {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 26px;
            color: #333;
            cursor: pointer;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .registration-content .close-btn a {
            font-size: 30px;
            text-decoration: none;
            color: black;
        }

        .registration-content .close-btn:hover {
            color: rgb(187, 3, 3);
        }

        @keyframes popUp {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .registration-content .form input {
            width: 100%;
            max-width: 360px;
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
            padding-left: 0;
            padding-right: 30px;
        }

        .registration-content .password-container {
            position: relative;
            width: 100%;
            max-width: 360px;
            margin-top: 15px;
        }

        .registration-content #eye-icon,
        .registration-content #eye-icon-confirm {
            width: 20px;
            height: 20px;
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            opacity: 0.7;
            transition: opacity 0.3s ease;
        }

        .registration-content #eye-icon:hover,
        .registration-content #eye-icon-confirm:hover {
            opacity: 1;
        }

        .registration-content .form input:focus {
            outline: none;
        }

        .registration-content .form h2 {
            width: 100%;
            font-family: "Poppins", sans-serif;
            text-align: center;
            color: rgb(0, 0, 0);
            font-size: 20px;
            border-radius: 10px;
            padding: 7px;
            margin-bottom: 20px;
            margin-top: 10px;
        }

        .registration-content .form .btnn {
            width: 100%;
            max-width: 360px;
            height: 35px;
            background: #426DDC;
            border: none;
            margin-top: 20px;
            font-size: 15px;
            border-radius: 5px;
            cursor: pointer;
            color: rgb(255, 255, 255);
            transition: 0.4s ease;
            font-family: "Poppins", sans-serif;
        }

        .registration-content .form .btnn:hover {
            background-color: #344CB7;
        }

        .registration-content .form .link {
            width: 100%;
            max-width: 360px;
            color: black;
            font-size: 12px;
            text-align: center;
            margin-top: 10px;
            font-family: "Poppins", sans-serif;
        }

        .registration-content .form .link a {
            color: #426DDC;
            text-decoration: none;
        }

        .registration-content .form .link a:hover {
            color: #426DDC;
            text-decoration: underline;
            text-underline-offset: 4px;
            text-decoration-thickness: 1px;
        }

        .registration-content .name-row {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            width: 100%;
            max-width: 360px;
        }

        .registration-content .name-row input {
            flex: 1;
            min-width: 150px;
        }

        .registration-content .notification-checkbox {
            width: 100%;
            max-width: 360px;
            font-family: "Poppins", sans-serif;
            margin-top: 20px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .registration-content .notification-checkbox input {
            width: 15px;
            height: 15px;
            margin: 0;
        }

        .registration-content .notification-checkbox label {
            font-size: 11px;
            color: rgb(145, 145, 145);
            font-weight: normal;
            font-style: italic;
        }

        .registration-content .error-message {
            color: #dc3545;
            font-size: 12px;
            margin-top: 5px;
            font-family: "Poppins", sans-serif;
            display: block;
            padding-left: 5px;
        }

        .registration-content .input-error {
            border-bottom: 2px solid #dc3545 !important;
        }

        .registration-content .alert {
            width: 100%;
            max-width: 360px;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            font-family: "Poppins", sans-serif;
        }

        .registration-content .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        .registration-content .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        /* Mobile Responsive Styles */
        @media screen and (max-width: 768px) {
            .registration-content .form {
                width: 90%;
                padding: 20px;
            }

            .registration-content .form h2 {
                font-size: 18px;
            }

            .registration-content .name-row {
                flex-direction: column;
                gap: 0;
            }

            .registration-content .name-row input {
                width: 100%;
            }
        }

        @media screen and (max-width: 480px) {
            .registration-content .form {
                width: 95%;
                padding: 15px;
            }

            .registration-content .form h2 {
                font-size: 16px;
            }

            .registration-content .form input {
                font-size: 12px;
            }

            .registration-content .notification-checkbox label {
                font-size: 10px;
            }
        }
    </style>
</head>
<body>
    @include('layouts.public-navbar')

    <div class="registration-content">
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

                <div class="password-container">
                    <input type="password" name="password" placeholder="Password" required class="{{ $errors->has('password') ? 'input-error' : '' }}">
                    <img src="{{ asset('storage/assets/icons8-blind-30.jpg') }}" id="eye-icon" onclick="togglePasswordVisibility('password')">
                </div>
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                <div class="password-container">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required class="{{ $errors->has('password_confirmation') ? 'input-error' : '' }}">
                    <img src="{{ asset('storage/assets/icons8-blind-30.jpg') }}" id="eye-icon-confirm" onclick="togglePasswordVisibility('password_confirmation')">
                </div>
                @error('password_confirmation')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                <button class="btnn" type="submit">Proceed</button>

                <div class="notification-checkbox">
                    <input type="checkbox" id="receive-notifications" name="receive_notifications" value=1 required {{ old('receive_notifications') ? 'checked' : '' }}>
                    <label for="receive-notifications">I would like to receive updates and notifications.</label>
                    @error('receive_notifications')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <p class="link">Already have an account?
                    <a href="{{ route('login') }}">Login here</a>
                </p>
            </form>
        </div>
    </div>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script>
        function togglePasswordVisibility(inputName) {
            var passwordField = document.querySelector(`input[name="${inputName}"]`);
            var eyeIcon = inputName === 'password' ? document.getElementById('eye-icon') : document.getElementById('eye-icon-confirm');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.src = "{{ asset('storage/assets/icons8-eye-24.jpg') }}";
            } else {
                passwordField.type = 'password';
                eyeIcon.src = "{{ asset('storage/assets/icons8-blind-30.jpg') }}";
            }
        }
    </script>
</body>
</html>
