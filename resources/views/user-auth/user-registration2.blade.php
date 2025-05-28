<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="/storage/assets/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Step 2</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: poppins;
            margin: 0;
            padding: 0;
        }

        .image-container img {
            width: 60px;
            height: 55px;
            margin-top: 23px;
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
            position: absolute;
            background-attachment: fixed;
            //pointer-events: none;
        }

        section::before {
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

        .form {
            background: white;
            padding: 40px;
            border-radius: 10px;
            max-width: 560px;
            margin: 80px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            animation: popUp 0.7s ease-out;
            min-height: fit-content;
        }

        @keyframes popUp {
            0% {
                transform: scale(0.8);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        h2 {
            text-align: center;
            font-size: 20px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: normal;
            width: 480px;
            font-size: 15px;
            color: #434343;
        }

        input {
            width: 480px;
            padding: 10px;
            margin-top: 5px;
            border: none;
            border-bottom: 1.5px solid black;
            outline: none;
        }

        input[type="file"] {
            width: 480px;
            padding: 7px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: white;
            font-family: poppins;
            font-size: 15px;
            appearance: none;
        }

        select {
            width: 480px;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        select:focus {
            border: 1px solid #8d8d8d;
            outline: none;
        }

        #uploadedImage {
            max-width: 100%;
            max-height: 300px;
            margin-top: 10px;
            display: none;
            border: 1px solid #ccc;
            padding: 5px;
            object-fit: contain;
        }

        .note {
            margin-top: 10px;
            font-size: 0.9em;
            color: #555;
            background: #f1f1f1;
            padding: 10px;
            border-radius: 5px;
        }

        .error {
            color: rgb(108, 13, 13);
            display: none;
            margin-top: 5px;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background-color: #426DDC;
            border: none;
            color: white;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            font-family: poppins;
        }

        button:hover {
            background-color: #344CB7;
        }

        .close-btn {
            text-align: right;
            margin-left: 470px;
            margin-top: -20px;
            position: absolute;
        }

        .close-btn a {
            font-size: 30px;
            text-decoration: none;
            color: black;
        }

        .error-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #6e6e6e;
            color: white;
            padding: 20px;
            border-radius: 5px;
            font-size: 16px;
        }

        .error-popup button {
            margin-top: 20px;
            padding: 10px;
            background-color: rgb(205, 47, 47);
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .error-popup button:hover {
            background-color: #7f3030;
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

        .select-error {
            border: 1px solid #dc3545 !important;
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

        .file-error {
            border: 1px solid #dc3545 !important;
        }
    </style>
</head>
<body>
    @include('layouts.public-navbar')

    <section>
        <div class="form">
            <div class="close-btn">
                <a href="{{ route('home') }}">&times;</a>
            </div>

            <h2>IDENTITY VERIFICATION</h2>

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

            <form method="POST" action="{{ route('register.step2') }}" enctype="multipart/form-data">
                @csrf
                <label for="idType">Select ID Type:</label>
                <select id="idType" name="id_type" required class="{{ $errors->has('id_type') ? 'select-error' : '' }}">
                    <option value="">-- Select ID --</option>
                    <option value="SSS ID" {{ old('id_type') == 'sss' ? 'selected' : '' }}>SSS ID</option>
                    <option value="Passport ID" {{ old('id_type') == 'passport' ? 'selected' : '' }}>Passport</option>
                    <option value="National ID" {{ old('id_type') == 'national' ? 'selected' : '' }}>National ID</option>
                    <option value="Driver's License" {{ old('id_type') == 'driver' ? 'selected' : '' }}>Driver's License</option>
                    <option value="PhilHealth ID" {{ old('id_type') == 'philhealth' ? 'selected' : '' }}>PhilHealth ID</option>
                </select>
                @error('id_type')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                <label for="uploadID">Upload ID Image:</label>
                <input type="file" id="uploadID" name="id_image" accept="image/*" required class="{{ $errors->has('id_image') ? 'file-error' : '' }}">
                <img id="uploadedImage" />
                @error('id_image')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                <label for="yearsResidency">Years of Residency:</label>
                <input type="number" id="yearsResidency" name="years_residency" min="0" required value="{{ old('years_residency') }}" class="{{ $errors->has('years_residency') ? 'input-error' : '' }}">
                @error('years_residency')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                <label for="currentAddress">Current Address:</label>
                <input type="text" id="currentAddress" name="current_address" required value="{{ old('current_address') }}" class="{{ $errors->has('current_address') ? 'input-error' : '' }}">
                @error('current_address')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                <label for="permanentAddress">Permanent Address:</label>
                <input type="text" id="permanentAddress" name="permanent_address" required value="{{ old('permanent_address') }}" class="{{ $errors->has('permanent_address') ? 'input-error' : '' }}">
                @error('permanent_address')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="date_of_birth" required value="{{ old('date_of_birth') }}" class="{{ $errors->has('date_of_birth') ? 'input-error' : '' }}">
                @error('date_of_birth')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                <div class="note" id="takeNote">Take Note: Please select your ID type.</div>

                <button type="submit">Register</button>
            </form>
        </div>
    </section>

    <script>
        const idTypeSelect = document.getElementById("idType");
        const takeNote = document.getElementById("takeNote");
        const uploadInput = document.getElementById("uploadID");
        const uploadedImage = document.getElementById("uploadedImage");

        idTypeSelect.addEventListener("change", () => {
            const notes = {
                sss: "Ensure the SSS ID is clear and not expired.",
                passport: "Use a scanned copy of the passport's ID page.",
                national: "National ID must show the front side clearly.",
                driver: "Upload the front of your driver's license.",
                philhealth: "Upload the side showing your name and photo."
            };

            takeNote.textContent = `Take Note: ${notes[idTypeSelect.value] || "Please select your ID type."}`;
        });

        uploadInput.addEventListener("change", () => {
            const file = uploadInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    uploadedImage.src = e.target.result;
                    uploadedImage.style.display = "block";
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>
