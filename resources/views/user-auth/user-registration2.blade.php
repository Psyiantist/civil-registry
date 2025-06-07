<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/assets/civil_registry_logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Step 2</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
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
            background: white;
            padding: 40px;
            border-radius: 10px;
            width: 100%;
            max-width: 560px;
            margin: 20px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.13);
            animation: popUp 0.7s ease-out;
            position: relative;
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

        .registration-content h2 {
            text-align: center;
            font-size: 20px;
            font-family: "Poppins", sans-serif;
            margin-bottom: 20px;
        }

        .registration-content label {
            display: block;
            margin-top: 15px;
            font-weight: normal;
            width: 100%;
            font-size: 15px;
            color: #434343;
            font-family: "Poppins", sans-serif;
        }

        .registration-content input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: none;
            border-bottom: 1.5px solid black;
            outline: none;
            font-family: "Poppins", sans-serif;
        }

        .registration-content input[type="file"] {
            width: 100%;
            padding: 7px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: white;
            font-family: "Poppins", sans-serif;
            font-size: 15px;
            appearance: none;
        }

        .registration-content select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-family: "Poppins", sans-serif;
        }

        .registration-content select:focus {
            border: 1px solid #8d8d8d;
            outline: none;
        }

        .registration-content #uploadedImage {
            max-width: 100%;
            max-height: 300px;
            margin-top: 10px;
            display: none;
            border: 1px solid #ccc;
            padding: 5px;
            object-fit: contain;
        }

        .registration-content .note {
            margin-top: 10px;
            font-size: 0.9em;
            color: #555;
            background: #f1f1f1;
            padding: 10px;
            border-radius: 5px;
            font-family: "Poppins", sans-serif;
        }

        .registration-content button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background-color: #426DDC;
            border: none;
            color: white;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            font-family: "Poppins", sans-serif;
            transition: background-color 0.3s ease;
        }

        .registration-content button:hover {
            background-color: #344CB7;
        }

        .registration-content .close-btn {
            position: absolute;
            top: 10px;
            right: 20px;
        }

        .registration-content .close-btn a {
            font-size: 30px;
            text-decoration: none;
            color: black;
            transition: color 0.3s ease;
        }

        .registration-content .close-btn a:hover {
            color: rgb(187, 3, 3);
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

        .registration-content .select-error {
            border: 1px solid #dc3545 !important;
        }

        .registration-content .alert {
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

        .registration-content .file-error {
            border: 1px solid #dc3545 !important;
        }

        /* Mobile Responsive Styles */
        @media screen and (max-width: 768px) {
            .registration-content .form {
                padding: 30px 20px;
                margin: 15px;
            }

            .registration-content h2 {
                font-size: 18px;
            }

            .registration-content label {
                font-size: 14px;
            }

            .registration-content input,
            .registration-content select {
                font-size: 14px;
            }
        }

        @media screen and (max-width: 480px) {
            .registration-content .form {
                padding: 20px 15px;
                margin: 10px;
            }

            .registration-content h2 {
                font-size: 16px;
            }

            .registration-content label {
                font-size: 13px;
            }

            .registration-content input,
            .registration-content select {
                font-size: 13px;
                padding: 8px;
            }

            .registration-content .note {
                font-size: 0.8em;
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    @include('layouts.public-navbar')

    <div class="registration-content">
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

                <label for="uploadID">Upload Government Issued ID:</label>
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
    </div>

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

        // Add date of birth validation
        document.getElementById('dob').addEventListener('change', function(e) {
            const dob = new Date(this.value);
            const today = new Date();
            const age = today.getFullYear() - dob.getFullYear();
            const monthDiff = today.getMonth() - dob.getMonth();
            
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dob.getDate())) {
                age--;
            }

            if (age < 18) {
                Swal.fire({
                    icon: 'error',
                    title: 'Age Restriction',
                    text: 'You must be at least 18 years old to register.',
                    confirmButtonColor: '#426DDC'
                });
                this.value = '';
            }
        });
    </script>
</body>
</html>
