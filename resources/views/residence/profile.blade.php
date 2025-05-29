<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/x-icon" href="{{ asset('storage/assets/civil_registry_logo.png') }}">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile - Residence View</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

  <style>


    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fc;
      color: var(--text-color);
      line-height: 1.6;
    }



    section {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      z-index: -1;
    }

    section::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('{{ asset('storage/assets/appointment_bg.jpg') }}') no-repeat center center fixed;
      background-size: cover;
      filter: blur(20px);
      opacity: 0.7;
    }

    .profile-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 40px 20px;
      gap: 40px;
    }

    .profile-container {
      background: rgba(255, 255, 255, 0.95);
      padding: 40px;
      border-radius: var(--border-radius);
      box-shadow: var(--box-shadow);
      width: 100%;
      max-width: 800px;
      backdrop-filter: blur(10px);
      transition: var(--transition);
    }

    .profile-container:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .profile-header {
      display: flex;
      gap: 32px;
      margin-bottom: 32px;
      padding-bottom: 24px;
      border-bottom: 2px solid rgba(0, 0, 0, 0.1);
      align-items: center;
      justify-content: flex-start;
    }

    .profile-pic, .profile-pic-edit {
      width: 110px;
      height: 110px;
      border-radius: 50%;
      overflow: hidden;
      border: 4px solid var(--primary-color);
      box-shadow: 0 4px 15px rgba(78, 115, 223, 0.15);
      display: flex;
      align-items: center;
      justify-content: center;
      background: #e3e6f0;
      margin: 0 auto;
      transition: var(--transition);
    }

    .profile-pic img, .profile-pic-edit img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 50%;
      display: block;
    }

    .profile-info {
      flex-grow: 1;
      margin-top: 0;
      padding: 0;
      background: none;
    }

    .profile-edit-section {
      padding-top: 20px;
      max-width: 400px;
      margin: 0 auto;
    }

    .profile-edit-section h3 {
      color: var(--primary-color);
      margin-bottom: 20px;
      font-size: 1.5rem;
      text-align: center;
    }

    .profile-info p {
      margin: 10px 0;
      padding: 8px 0;
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .profile-info p:last-child {
      border-bottom: none;
    }

    .profile-info strong {
      color: var(--primary-color);
      margin-right: 10px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    form label {
      font-weight: 600;
      color: var(--text-color);
      margin-bottom: 5px;
    }

    form input {
      padding: 12px 15px;
      border: 2px solid #e3e6f0;
      border-radius: var(--border-radius);
      font-family: 'Poppins', sans-serif;
      transition: var(--transition);
    }

    form input:focus {
      border-color: var(--primary-color);
      outline: none;
      box-shadow: 0 0 0 3px rgba(78, 115, 223, 0.1);
    }

    form input.valid {
      border-color: #28a745;
      background-color: #eafaf1;
    }

    form input.invalid {
      border-color: var(--danger-color);
      background-color: #fdecea;
    }

    .remove-btn {
      background: #dc3545;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      margin: 10px auto;
      display: block;
      width: 100%;
      max-width: 200px;
      box-shadow: 0 2px 8px rgba(220, 53, 69, 0.2);
    }

    .remove-btn:hover {
      background: #c82333;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(220, 53, 69, 0.3);
    }

    form button[type="submit"] {
      background: #4e73df;
      color: white;
      padding: 14px;
      border: none;
      border-radius: 8px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      margin-top: 20px;
      width: 100%;
      box-shadow: 0 2px 8px rgba(78, 115, 223, 0.2);
    }

    form button[type="submit"]:hover {
      background: #2e59d9;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(78, 115, 223, 0.3);
    }

    .link {
      color: var(--primary-color);
      text-decoration: none;
      font-weight: 600;
      transition: var(--transition);
      display: inline-block;
      margin-top: 15px;
    }

    .link:hover {
      color: var(--primary-dark);
      transform: translateX(5px);
    }

    .error-message {
      color: var(--danger-color);
      font-size: 12px;
      margin-top: 5px;
      display: block;
    }

    .alert {
      position: fixed;
      top: 20px;
      right: 20px;
      padding: 15px 25px;
      border-radius: 8px;
      color: white;
      font-weight: 500;
      z-index: 9999;
      animation: slideIn 0.3s ease-out;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .alert-success {
      background: #28a745;
      border-left: 4px solid #1e7e34;
    }

    .alert-danger {
      background: #dc3545;
      border-left: 4px solid #bd2130;
    }

    .alert i {
      font-size: 1.2rem;
    }

    @keyframes slideIn {
      from {
        transform: translateX(100%);
        opacity: 0;
      }
      to {
        transform: translateX(0);
        opacity: 1;
      }
    }

    @keyframes slideOut {
      from {
        transform: translateX(0);
        opacity: 1;
      }
      to {
        transform: translateX(100%);
        opacity: 0;
      }
    }

    @media (max-width: 768px) {
      .profile-header {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 20px;
      }
      .profile-container {
        padding: 16px;
      }
      .profile-edit-section {
        padding-top: 16px;
      }
    }
  </style>
</head>

<body>
  @include('layouts.residence-navbar')


  <section></section>

  <div class="profile-wrapper">
    <div class="profile-container">
      <div class="profile-header">
        <div class="profile-pic" id="displayPic">
          @php
            $profileImage = $user->profile_image
              ? asset('storage/profiles/' . $user->profile_image)
              : asset('storage/profiles/default-profile.jpg');
          @endphp
          <img src="{{ $profileImage }}" alt="Profile Picture">
        </div>
        <div class="profile-info">
          <p><strong>Name:</strong> {{ $fullName }}</p>
          <p><strong>Email:</strong> <span style="display:inline-block; max-width:100%; word-break:break-word;">{{ $user->email }}</span></p>
          <p><strong>Phone:</strong> {{ $user->phone ?? 'N/A' }}</p>
          <p><strong>Address:</strong> {{ $user->current_address ?? 'N/A' }}</p>
        </div>
      </div>

      <div class="profile-edit-section">
        <h3>Edit Profile</h3>
        <div class="profile-pic-edit" id="editPic" onclick="triggerFileInput()">
          <img src="{{ $profileImage }}" alt="Profile Picture">
        </div>
      
        <form action="{{ route('residence.profile.remove-image') }}" method="POST">
          @csrf
          <button class="remove-btn" type="submit">Remove Image</button>
        </form>

        <form id="editForm" action="{{ route('residence.profile.update') }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <label for="name">Name:</label>
          <input type="text" id="name" name="name" value="{{ old('name', $fullName) }}" placeholder="Enter name">
          @error('name')
            <span class="error-message">{{ $message }}</span>
          @enderror

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" placeholder="Enter email">
          @error('email')
            <span class="error-message">{{ $message }}</span>
          @enderror

          <label for="phone">Phone:</label>
          <input type="tel" id="phone" name="phone" value="{{ old('phone', $user->phone) }}" placeholder="Enter phone number (Philippines)">
          @error('phone')
            <span class="error-message">{{ $message }}</span>
          @enderror

          <label for="address">Address:</label>
          <input type="text" id="address" name="current_address" value="{{ old('address', $user->current_address) }}" placeholder="Enter address">
          @error('address')
            <span class="error-message">{{ $message }}</span>
          @enderror

          <input type="file" id="fileInput" name="profile_image" accept="image/*" style="display:none">

          <button type="submit">Save Changes</button>

          <center><a class="link" href="{{ route('residence-homepage') }}">Back to Home Page</a></center>
        </form>
      </div>
    </div>
  </div>

  @if(session('success'))
    <div class="alert alert-success">
      <i class="fas fa-check-circle"></i>
      {{ session('success') }}
    </div>
  @endif

  @if(session('error'))
    <div class="alert alert-danger">
      <i class="fas fa-exclamation-circle"></i>
      {{ session('error') }}
    </div>
  @endif

  <script>
    // Auto-dismiss alerts after 5 seconds
    document.addEventListener('DOMContentLoaded', function() {
      const alerts = document.querySelectorAll('.alert');
      alerts.forEach(alert => {
        setTimeout(() => {
          alert.style.animation = 'slideOut 0.3s ease-out forwards';
          setTimeout(() => {
            alert.remove();
          }, 300);
        }, 5000);
      });
    });

    function triggerFileInput() {
      document.getElementById('fileInput').click();
    }

    document.getElementById('fileInput').addEventListener('change', function(e) {
      const file = e.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          document.getElementById('editPic').innerHTML = `<img src="${e.target.result}" alt="Profile Picture" style="width:100%; height:100%; border-radius:50%;">`;
        };
        reader.readAsDataURL(file);
      }
    });
  </script>
</body>
</html>
