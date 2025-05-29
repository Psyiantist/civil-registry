<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Registration</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/assets/civil_registry_logo.png') }}">
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
            border-radius: 0;
            font-size: 15px;
            letter-spacing: 1px;
            margin-bottom: 25px;
            font-family: "Poppins", sans-serif;
            padding-left: 0;
            color: #222;
        }

        .form select {
            color: #666;
            border-radius: 0;
        }

        .form select option {
            background-color: white;
            color: #333;
        }

        .input-group {
            position: relative;
            width: 100%;
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            height: 38px;
        }

        .input-group input[type="password"] {
            width: 100%;
            padding-right: 35px;
            height: 38px;
            background: transparent;
            border-bottom: 2px solid #222;
            border-top: none;
            border-right: none;
            border-left: none;
            border-radius: 0;
            font-size: 15px;
            letter-spacing: 1px;
            font-family: "Poppins", sans-serif;
            padding-left: 0;
            color: #222;
            line-height: 38px;
            margin-bottom: 0;
        }

        .eye-icon {
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
            margin-top: -20px;
            margin-bottom: 5px;
            display: block;
            padding-left: 5px;
        }

        .input-error {
            border-bottom: 2px solid #dc3545 !important;
        }

        @media screen and (max-width: 768px) {
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

        .card-form {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(66, 109, 220, 0.13), 0 1.5px 6px rgba(0,0,0,0.07);
            padding: 40px 36px 36px 36px;
            margin-top: 30px;
            margin-bottom: 40px;
            max-width: 500px;
            width: 100%;
            transition: box-shadow 0.3s;
        }
        .card-form:hover {
            box-shadow: 0 12px 40px rgba(66, 109, 220, 0.18), 0 2px 8px rgba(0,0,0,0.10);
        }
        .modern-input {
            border-radius: 0;
            border: none;
            border-bottom: 2px solid #222;
            padding: 0;
            font-size: 15px;
            margin-bottom: 18px;
            background: transparent;
            transition: border-color 0.2s;
        }
        .modern-input:focus {
            border-color: #426DDC;
            outline: none;
        }
        .modern-btn {
            background: linear-gradient(90deg, #426DDC 60%, #344CB7 100%);
            font-size: 20px;
            border-radius: 8px;
            padding: 12px 0;
            margin-top: 30px;
            font-weight: 600;
            letter-spacing: 1px;
            box-shadow: 0 2px 8px rgba(66, 109, 220, 0.08);
        }
        .modern-btn:hover {
            background: linear-gradient(90deg, #344CB7 60%, #426DDC 100%);
        }
        .file-group {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 18px;
        }
        .file-label {
            font-size: 15px;
            color: #344CB7;
            margin-bottom: 6px;
            font-weight: 500;
        }
        .file-input {
            background: #f9fafe;
            border: none;
            padding: 8px 0;
        }
        .preview-container {
            margin-top: 10px;
            width: 100%;
            display: flex;
            justify-content: flex-start;
        }
        .id-card-preview {
            max-width: 180px;
            max-height: 120px;
            border-radius: 8px;
            border: 1.5px solid #d1d5db;
            box-shadow: 0 2px 8px rgba(66, 109, 220, 0.08);
        }
        @media (max-width: 600px) {
            .card-form {
                padding: 18px 8px 18px 8px;
                max-width: 98vw;
            }
            .modern-input {
                font-size: 15px;
                padding: 10px 8px;
            }
            .modern-btn {
                font-size: 17px;
                padding: 10px 0;
            }
            .id-card-preview {
                max-width: 120px;
                max-height: 80px;
            }
        }
        .name-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 25px;
        }

        @media screen and (max-width: 768px) {
            .name-row {
                grid-template-columns: 1fr;
                gap: 0;
            }
        }

        .input-group[style*="flex-direction: column"] {
            margin-bottom: 25px;
            height: auto;
        }

        .input-group[style*="flex-direction: column"] label {
            margin-bottom: 8px;
        }
    </style>
</head>
<body>
    @include('layouts.public-navbar')

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

        <div class="form card-form">
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

            <form method="POST" action="{{ route('admin.register') }}" enctype="multipart/form-data" id="adminRegisterForm">
                @csrf
                <div class="name-row">
                    <input type="text" name="first_name" placeholder="First Name" required value="{{ old('first_name') }}" class="modern-input {{ $errors->has('first_name') ? 'input-error' : '' }}">
                    @error('first_name')
                        <span class="error-message">{{ $message }}</span>
                    @enderror

                    <input type="text" name="last_name" placeholder="Last Name" required value="{{ old('last_name') }}" class="modern-input {{ $errors->has('last_name') ? 'input-error' : '' }}">
                    @error('last_name')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <input type="email" name="email" placeholder="Email Address" required value="{{ old('email') }}" class="modern-input {{ $errors->has('email') ? 'input-error' : '' }}">
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required class="modern-input {{ $errors->has('password') ? 'input-error' : '' }}">
                    <i class="fa fa-eye-slash eye-icon" onclick="togglePasswordVisibility('password')"></i>
                </div>
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                <div class="input-group">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required class="modern-input {{ $errors->has('password_confirmation') ? 'input-error' : '' }}">
                    <i class="fa fa-eye-slash eye-icon" onclick="togglePasswordVisibility('password_confirmation')"></i>
                </div>
                @error('password_confirmation')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                <div class="input-group" style="display: flex; flex-direction: column; align-items: flex-start;">
                    <label for="birthday" style="font-size: 14px; color: #666; margin-bottom: 5px;">Birthday</label>
                    <input type="date" id="birthday" name="birthday" required value="{{ old('birthday') }}" class="modern-input {{ $errors->has('birthday') ? 'input-error' : '' }}" style="width: 100%;">
                </div>
                @error('birthday')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                <input type="text" name="address" placeholder="Address" required value="{{ old('address') }}" class="modern-input {{ $errors->has('address') ? 'input-error' : '' }}">
                @error('address')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                <div class="input-group file-group">
                    <label for="id_card_image" class="file-label">Upload ID Card Image</label>
                    <input type="file" id="id_card_image" name="id_card_image" accept="image/*" required class="modern-input file-input {{ $errors->has('id_card_image') ? 'input-error' : '' }}">
                </div>
                @error('id_card_image')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                <button type="submit" class="btnn modern-btn">REGISTER</button>

                <div class="checkbox-group" style="margin-top: 15px; display: flex; align-items: center; justify-content: center; gap: 8px;">
                    <input type="checkbox" id="updates" name="updates" required class="modern-checkbox" style="width: 14px; height: 14px; margin: 0;">
                    <label for="updates" style="color: #666; font-size: 13px; margin: 0;">I would like to receive updates and notifications via email.</label>
                </div>

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
    </script>
</body>
</html> 