<html lang="en">
    <head>
    <link rel="icon" type="image/x-icon" href="/storage/assets/favicon.ico">
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Appointment Page - Residence View </title>
    
    <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>
    
    <style>
        body {
            font-family: 'Poppins';
        }
        .selected-date, .selected-time {
            background-color: #426DDC;
            color: white;
        }

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
      margin-left: 40px;
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
      margin-left: 20px;
      text-align: center;     
      justify-content: center; 
      align-items: center;    
    }

    nav .menu ul li {
      padding: -5px;
      font-size: 17px;
      list-style: none;
      font-weight: bold;
      margin-right: 30px; 
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
     margin-left: -5px;
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

    .dropdown_menuuu {
      display: none;
      position: absolute;
      left: -55%;
      top: 100%;
      min-height: 90px;
      background-color: white;
      z-index: 1000;
      min-width: 130px;
    }

    .menu ul li:hover .dropdown_menuuu,
    .dropdown_menuuu:hover {
       display: block;
       border-radius: 5px;
       font-size: 18px;
    }

    .dropdown_menuuu ul {
       list-style: none;
       padding: 0;
       margin-top: 15px;
       margin-left: 25px; 
       margin-bottom: 9px;
    }

    .dropdown_menuuu ul li {
       width: 130px;
       padding: 7px;
       white-space: nowrap;
    }

    #accountDropdown {
      display: none; 
      position: absolute;
      background-color: #fff;
      border-radius: 6px;
      right: 10px;
      top: 55px;
      min-width: 160px;
      z-index: 1000;
      padding: 8px 0;
      font-weight: bold;
    }

    #accountDropdown.show {
      display: block;
    }

    #accountDropdown a {
      display: block;
      padding: 10px 16px;
      color: #333;
      text-align: center;
      text-decoration: none;
      font-size: 14px;
      font-family: "Poppins", sans-serif;
    }

    #accountDropdown a:hover {
    color: #426DDC;
    transition: 0.3s ease; 
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

    html, body {
      overflow-x: hidden;
      height: 100%;
      margin: 0;
      padding: 0;
      background: linear-gradient(rgba(90, 110, 130, 0.3), rgba(90, 110, 130, 0.3)),
      url('storage/assets/appointment_bg.jpg') no-repeat center center fixed;;
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-position: center center;
      }

    section {
      background: transparent;
      min-height: 100vh;
      padding: 2rem;
      position: relative;
      z-index: 1;
      }

        /* Zoom-in screen orientation layout */
    @media(max-width: 1000px) {
      html, body {
       height: 100%;
       margin: 0;
       padding: 0;
       background: linear-gradient(rgba(90, 110, 130, 0.3), rgba(90, 110, 130, 0.3)),
              url('storage/assets/appointment_bg.jpg') no-repeat center center fixed;
       background-size: cover;
       background-attachment: fixed;
       background-repeat: no-repeat;
       background-position: center center;
       }

      section {
       background: transparent;
       min-height: 100vh;
       padding: 2rem;
       position: relative;
       z-index: 1;
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
  }

    footer {
      background: #fff;
      padding-top: 20px;
      padding-bottom: 5px;
    }

    .container {
      margin-left: 20px;
      margin-right: 20px;
      height: 110px;
      width: 1140px;
      display: flex;
      justify-content: space-between;
    }

    .footer-content {
      margin-left: 20px;
      margin-right: 20px;
      width: 33.3%;
      display: flex;
      flex-direction: column;
      justify-content: flex-start; 
      margin: 0 10px;
    }

    footer iframe {
      margin-left: 20px;
      width: 100%;
      height: 100%;
      border: 0;
      margin: 0;
    }

    .map-container {
      flex-grow: 1; 
      height: 100%; 
    }

    h3 {
      margin-left: 20px;
      margin-right: 20px;
      font-weight: 100;
      font-size: 16px;
      margin-bottom: 5px;
      text-align: center;
      color: #3247df;
    }

    .footer-content p {
      width: 190px;
      margin-left: 15px;
      padding: 2px;
    }

    .social-icons {
      text-align: center;
      padding: 0;
    }

    .social-icons li {
      display: inline-block;
      text-align: center;
      padding: 5px;
    }

    .social-icons i {
      color: rgb(3, 3, 3);
      font-size: 25px;
    }

    a {
      color: #333;
      text-decoration: none;
    }

    a:hover {
      color: #3247df;
    }

    .social-icons i:hover {
      color: #3247df;
    }

    .bottom-bar {
      background: #3247df;
      text-align: center;
      padding: 0px 0;
      margin-top: 50px;
    }

    .bottom-bar p {
      color: #f7f7f7;
      margin: 0;
      font-size: 16px;
      padding: 8px;
    }


    </style>
    </head>

    <body>
        <nav>
            <div class="image-container">
                <img src="storage/assets/civil_registry_logo.png"> </div>
    
            <div class="logo-name">
                <b> Civil Registry <br/> <a> Mandaluyong City </a> </b> </div>
    
            <div class="menu">
                <ul>
                    <li> <a href="{{ route('residence-homepage') }}"> Home </a> </li>
    
            <li> <a class="active" href="#"> Services <i class="fas fa-caret-down"> </i> </a> 
    
            <div class="dropdown_menuuu">
              <ul>
            <li> <a class="active" href="{{ route('residence-appointment') }}"> Appointment </a> </li>
            <li> <a href="{{ route('residence-requirements') }}"> Requirements </a> </li>
               </ul>
            </div>
            </li>
    
                    <li> <a href="{{ route('residence-faqs') }}"> FAQs </a> </li>
                    <li> <a href="{{ route('residence-about-us') }}"> About Us </a> </li>
                    <li> <a href="{{ route('residence-contact-us') }}"> Contact Us </a> </li>
                </ul>
        </div>
    
  <div class="search-container">
  <input type="text" id="searchInput" placeholder="Search">
  <i class="fa fa-search" onclick="performSearch()"> </i>
  </div>
        
      @php
        $user = Auth::user();
        $profileImage = $user->profile_image
          ? asset('storage/profiles/' . $user->profile_image)
          : asset('storage/profiles/default-profile.jpg');
      @endphp
      <img src="{{ $profileImage }}" alt="Profile Picture" class="user-icon" onclick="toggleDropdown()" style="width: 40px; height: 40px; border-radius: 50%; cursor: pointer; object-fit: cover; object-position: center; border: 2px solid #426DDC; aspect-ratio: 1/1; margin-right: 23px;">
    <div id="accountDropdown" class="absolute hidden">
        <a href="{{ route('residence.profile') }}"> Profile </a>
        <a href="{{ route('logout') }}" id="logoutLink"> Logout </a> </div>
      
        <button class="menu-toggle"> </button>
      </nav>

  
        <section class="flex items-center justify-center min-h-screen pt-10">
            <div class="details">
        <div class="bg-white bg-opacity-100 p-8 rounded-lg shadow-lg w-full max-w-3xl mt-12 mb-4">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6"> BOOK AN APPOINTMENT </h2>
        <form action="{{ route('residence.appointment.store') }}" method="POST" id="appointmentForm">
            @csrf
            @if(session('success'))
                <div class="alert alert-success" style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 8px; margin-bottom: 20px; text-align: center;">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger" style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 8px; margin-bottom: 20px; text-align: center;">
                    {{ session('error') }}
                </div>
            @endif
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
            <div>
            <label class="block text-gray-600 mb-2"> Select appointment type </label>
            <select name="appointment_type" class="w-full border rounded py-2 px-3 text-gray-600" required>
                <option value="">Select appointment type</option>
                <option value="Releasing of document"> Releasing of document </option>
                <option value="Document Correction"> Document Correction </option>
                <option value="Document Consultation"> Document Consultation </option>
                <option value="Legitimation"> Legitimation </option>
                <option value="Late Registration of Document"> Late Registration of Document </option>
                <option value="Requirement Submission"> Requirement Submission </option>
            </select>
            </div>
            <div>
            <label class="block text-gray-600 mb-2"> Choose document type </label>
            <select name="document_type" class="w-full border rounded py-2 px-3 text-gray-600" required>
                <option value="">Select document type</option>
                @foreach($requirements as $requirement)
                    <option value="{{ $requirement->title }}">{{ $requirement->title }}</option>
                @endforeach
            </select>
            </div>
            </div>

            <div class="mb-6">
            <label class="block text-gray-600 mb-2"> Select preferred date and time </label>
            <div class="flex items-center justify-between mb-4">
            <button type="button" class="text-gray-600" onclick="prevMonth()">
             <i class="fas fa-chevron-left"></i>
            </button>
            <span class="text-gray-600" id="currentMonth"> January 2025 </span>
            <button type="button" class="text-gray-600" onclick="nextMonth()">
             <i class="fas fa-chevron-right"></i>
            </button>
            </div>

            <div class="grid grid-cols-7 gap-2 text-center text-gray-600" id="calendarDays">
            <!-- Calendar days will be generated-->
            </div>
            <input type="hidden" name="appointment_date" id="selectedDate">
            </div>

        <div class="grid grid-cols-2 gap-4 mb-6">
        <div>
        <h3 class="text-center text-gray-600 mb-2"> Morning </h3>
        <div class="grid grid-cols-2 gap-2">
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="07:00"> 7:00 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="07:30"> 7:30 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="08:00"> 8:00 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="08:30"> 8:30 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="09:00"> 9:00 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="09:30"> 9:30 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="10:00"> 10:00 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="10:30"> 10:30 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="11:00"> 11:00 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="11:30"> 11:30 </button>
        </div>
        </div>
           
        <div>
        <h3 class="text-center text-gray-600 mb-2"> Afternoon </h3>
        <div class="grid grid-cols-2 gap-2">
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="13:00"> 1:00 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="13:30"> 1:30 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="14:00"> 2:00 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="14:30"> 2:30 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="15:00"> 3:00 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="15:30"> 3:30 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="16:00"> 4:00 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="16:30"> 4:30 </button>
        </div>
        </div>
        </div>
        <input type="hidden" name="appointment_time" id="selectedTime">

        <div class="text-center">
            <button type="submit" id="confirmBtn" class="bg-gray-500 hover:bg-blue-500 text-white py-2 px-6 rounded">
                CONFIRM
            </button>
         </div>
        </form>

    <div id="confirmationModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-md w-full">
      <h2 class="text-xl font-bold mb-4 text-center text-green-700">Appointment Confirmed!</h2>
      <p class="text-gray-700 text-center mb-6">
        📌 Your appointment is subject to approval. Wait for the confirmation email before attending your appointment.<br><br>
        Thank you!
      </p>
      <div class="flex justify-center">
        <button onclick="closeModal('confirmationModal')" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded">
          OK
        </button>
      </div>
    </div>
    </div>

  
    <div id="cancellationModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-md w-full">
      <h2 class="text-xl font-bold mb-4 text-center text-red-700">Appointment Cancelled!</h2>
      <p class="text-gray-700 text-center mb-6">
        Your appointment has been cancelled. If this was a mistake, please try again.<br><br>
        Thank you!
      </p>
      <div class="flex justify-center">
        <button onclick="closeModal('cancellationModal')" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded">
          OK
        </button>
      </div>
    </div>
    </div>
      
     </div>
    </div>
   </div>
</div>
</section>

<footer>
    <div class="container">
        <div class="footer-content">
            <h3>Contact Us</h3>
            <p><a href="mailto:city.registrar@mandaluyong.gov.ph">Email: city.registrar@mandaluyong.gov.ph</a></p>
            <p>Phone: 8533-28-21</p>
            <p>Address: <a href="https://maps.app.goo.gl/BqivjAUx2r4DJitu5" target="_blank">Maysilo, Mandaluyong</a></p>
        </div>
        <div class="footer-content">
            <h3>Our Location</h3>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.374156967718!2d121.0337266!3d14.5777433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c84b4d7d8847%3A0x3cc947be6455c07a!2sMandaluyong%20City%20Hall!5e0!3m2!1sen!2sph!4v1745828287728!5m2!1sen!2sph" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="footer-content">
            <h3>Follow Us</h3>
            <ul class="social-icons">
                <li><a href="https://www.facebook.com/p/Mandaluyong-City-Civil-Registry-100064760288454/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="mailto:city.registrar@mandaluyong.gov.ph"><i class="fas fa-envelope"></i></a></li>
                <li><a href="https://mandaluyong.gov.ph/government/departments/city-civil-registry-department/"><i class="fas fa-paperclip"></i></a></li>
                <li><a href="https://x.com/MandaluyongPIO"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="bottom-bar">
        <p>&copy; 2025 Civil Registry Department. All Rights Reserved.</p>
    </div>
</footer>



  <script>
    function toggleDropdown() {
    const dropdown = document.getElementById("accountDropdown");
    dropdown.classList.toggle("show");
}

window.addEventListener("click", function(event) {
    const userIcon = document.querySelector(".user-icon");
    const dropdown = document.getElementById("accountDropdown");

    if (!userIcon.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.classList.remove("show");
    }
});

const button = document.querySelector('.menu-toggle');
const menu = document.querySelector('.menu');
if (button && menu) {
    button.onclick = () => {
        menu.classList.toggle('expand-mobile');
        button.classList.toggle('expand-icon');
    };
}

    const months = [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];
        let currentDate = new Date();
        let currentMonthIndex = currentDate.getMonth();
        let currentYear = currentDate.getFullYear();

        function generateCalendar() {
            const calendarDays = document.getElementById('calendarDays');
            calendarDays.innerHTML = '';

            const firstDay = new Date(currentYear, currentMonthIndex, 1).getDay();
            const daysInMonth = new Date(currentYear, currentMonthIndex + 1, 0).getDate();
            const today = new Date();
            today.setHours(0, 0, 0, 0);

            for (let i = 0; i < firstDay; i++) {
                const emptyCell = document.createElement('div');
                emptyCell.classList.add('text-gray-400');
                calendarDays.appendChild(emptyCell);
            }

            for (let day = 1; day <= daysInMonth; day++) {
                const dayCell = document.createElement('div');
                const currentDate = new Date(currentYear, currentMonthIndex, day);
                currentDate.setHours(0, 0, 0, 0);

                dayCell.classList.add('cursor-pointer');
                dayCell.textContent = day;

                if (currentDate <= today) {
                    dayCell.classList.add('text-gray-400', 'cursor-not-allowed');
                    dayCell.style.pointerEvents = 'none';
                } else {
                    dayCell.onclick = function() {
                        selectDate(dayCell);
                    };
                }

                calendarDays.appendChild(dayCell);
            }

            document.getElementById('currentMonth').textContent = `${months[currentMonthIndex]} ${currentYear}`;
        }

        function prevMonth() {
            if (currentMonthIndex > 0) {
                currentMonthIndex--;
            } else {
                currentMonthIndex = 11;
                currentYear--;
            }
            generateCalendar();
        }

        function nextMonth() {
            if (currentMonthIndex < 11) {
                currentMonthIndex++;
            } else {
                currentMonthIndex = 0;
                currentYear++;
            }
            generateCalendar();
        }

        function selectDate(element) {
            document.querySelectorAll('.grid-cols-7 div').forEach(function (date) {
                date.classList.remove('selected-date');
            });
            element.classList.add('selected-date');
            
            // Set the selected date in the hidden input
            const selectedDate = new Date(currentYear, currentMonthIndex, element.textContent);
            document.getElementById('selectedDate').value = selectedDate.toISOString().split('T')[0];
        }

        function selectTime(element) {
            document.querySelectorAll('.grid-cols-2 button').forEach(function (time) {
                time.classList.remove('selected-time');
            });
            element.classList.add('selected-time');
            
            // Set the selected time in the hidden input
            document.getElementById('selectedTime').value = element.dataset.time;
        }

        document.addEventListener('DOMContentLoaded', function() {
            generateCalendar();

            // Add form submission handler
            document.getElementById('appointmentForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                const selectedDate = document.getElementById('selectedDate').value;
                const selectedTime = document.getElementById('selectedTime').value;
                const appointmentType = document.querySelector('select[name="appointment_type"]').value;
                const documentType = document.querySelector('select[name="document_type"]').value;

                if (!selectedDate || !selectedTime || !appointmentType || !documentType) {
                    alert('Please fill in all required fields');
                    return;
                }

                const formData = new FormData(this);
                
                fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        showConfirmationModal(selectedDate, selectedTime);
                        this.reset();
                        generateCalendar(); // Refresh calendar after successful submission
                    } else {
                        showCancellationModal();
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showCancellationModal();
                });
            });
        });

        function performSearch() {
            const input = document.getElementById("searchInput").value.trim().toLowerCase();

            if (input === "") {
        alert("Please enter a search term.");
    } else {
        if (input === "home page" || input === "homepage" || input === "home") {
            window.location.href = "{{ route('residence-homepage') }}";
        } else if (input === "faqs" || input === "facts" || input === "help") {
            window.location.href = "{{ route('residence-faqs') }}";
        } else if (input === "about" || input === "about civil") {
            window.location.href = "{{ route('residence-about-us') }}";
        } else if (input === "appointment" || input === "appointments" || input === "schedule" || input === "schedules") {
            window.location.href = "{{ route('residence-appointment') }}";
        } else if (input === "reqs" || input === "requirements" || input === "requirement") {
            window.location.href = "{{ route('residence-requirements') }}";
        } else if (input === "contact" || input === "number" || input === "email") {
            window.location.href = "{{ route('residence-contact-us') }}";
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

        // confirm
        function showConfirmationModal(date, time) {
            const confirmationModal = document.getElementById("confirmationModal");
            const confirmationMessage = document.querySelector("#confirmationModal p");
            confirmationMessage.innerHTML = `Your appointment is subject to approval. Wait for the confirmation email before attending your appointment.<br><br>
                📅 Date: ${date}<br>
                ⏰ Time: ${time}<br><br>
                Thank you!`;

            confirmationModal.classList.remove("hidden");
        }

        // cancel
        function showCancellationModal() {
            const cancellationModal = document.getElementById("cancellationModal");
            const cancellationMessage = document.querySelector("#cancellationModal p");
            cancellationMessage.innerHTML = `There was an error processing your appointment request.<br><br>
                Please try again or contact our support team for assistance.<br><br>
                Thank you for your understanding.`;

            cancellationModal.classList.remove("hidden");
        }

        // Close 
        function closeModal(modalId) {
            document.getElementById(modalId).classList.add("hidden");
        }

  </script>

 </body>
</html>
