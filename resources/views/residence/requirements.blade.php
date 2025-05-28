<html lang="en">
<head>
  <link rel="icon" type="image/x-icon" href="/storage/assets/favicon.ico">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title> Requirements Page - Residence View </title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />

  <style>
    body {
      font-family: 'Poppins';
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
        position: fixed;
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

        nav button{
        display: none;
        }

        nav .menu{
        width: 60%;
        margin-top: -5px;
        text-align: center;
        margin-left: 30px;
        }

        nav .menu ul li{
        padding: -5px;
        font-size: 17px;
        list-style: none;
        font-weight: bold;
        margin-right: 30px; 
        display: inline-block;
        position: relative;
        font-family: "Poppins", sans-serif;

        }

        nav .menu ul:nth-child(2) li{
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


        nav .menu ul li a:hover{
        color: #426DDC;
        transition: 0.3s ease; 
        }

        nav form{
        left: 25%;
        top: 65px;
        width: 60%;
        position: relative;
        }

        nav form input{
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
        width: 40px;
        height: 40px;
        border-radius: 50%;
        cursor: pointer;
        object-fit: cover;
        border: 2px solid #426DDC;
        transition: transform 0.2s ease;
        }

        nav .user-icon:hover {
        transform: scale(1.1);
        }

        #accountDropdown {
        position: absolute;
        top: 100%;
        right: 0;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        padding: 10px 0;
        min-width: 150px;
        z-index: 1000;
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

        html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.35)),
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

        /* Zoom-in screen orientation layout */
        @media(max-width: 1000px) {
        html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.35)),
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

        .dropdown_menuu ul {
        list-style: none;
        padding: 0;
        margin-left: 250px;
        }

        .dropdown_menuuu ul li {
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

    /* Responsive Styles for Requirements Page */
    @media (max-width: 1200px) {
        .container {
            width: 100%;
            padding: 0 20px;
        }

        .max-w-7xl {
            max-width: 90%;
            margin: 0 auto;
        }
    }

    @media (max-width: 992px) {
        .text-4xl {
            font-size: 2rem;
        }

        .grid-cols-2 {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .w-full.lg\:w-1/2 {
            width: 100%;
        }

        .flex-col.lg\:flex-row {
            flex-direction: column;
        }

        .gap-10 {
            gap: 2rem;
        }

        .p-8 {
            padding: 1.5rem;
        }
    }

    @media (max-width: 768px) {
        .text-4xl {
            font-size: 1.75rem;
        }

        .text-2xl {
            font-size: 1.5rem;
        }

        .px-8 {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .py-4 {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }

        .mb-10 {
            margin-bottom: 2rem;
        }

        .grid-cols-1.md\:grid-cols-2 {
            grid-template-columns: 1fr;
        }

        .h-32.w-32 {
            height: 6rem;
            width: 6rem;
        }

        .text-lg {
            font-size: 1rem;
        }

        .container {
            flex-direction: column;
            height: auto;
            padding: 20px;
        }

        .footer-content {
            width: 100%;
            margin: 10px 0;
            text-align: center;
            justify-content: center;
        }

        .map-container {
            height: 200px;
            margin: 10px 0;
        }

        .social-icons {
            justify-content: center;
            margin-top: 10px;
        }

        .social-icons li {
            margin: 0 10px;
        }
    }

    @media (max-width: 480px) {
        .text-4xl {
            font-size: 1.5rem;
        }

        .text-2xl {
            font-size: 1.25rem;
        }

        .px-8 {
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }

        .py-4 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .mb-10 {
            margin-bottom: 1.5rem;
        }

        .h-32.w-32 {
            height: 5rem;
            width: 5rem;
        }

        .text-lg {
            font-size: 0.875rem;
        }

        .p-6 {
            padding: 1rem;
        }

        .footer-content h3 {
            font-size: 14px;
        }

        .footer-content p {
            font-size: 12px;
        }

        .social-icons i {
            font-size: 20px;
        }

        .bottom-bar p {
            font-size: 12px;
        }
    }

    /* Smooth Transitions */
    .group,
    .bg-white,
    .transform {
        transition: all 0.3s ease;
    }

    /* Hover Effects */
    .group:hover {
        transform: translateY(-5px);
    }

    .group:hover img {
        transform: rotate(3deg);
    }

    /* Animation for Checklist Items */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    #checklist li {
        animation: fadeInUp 0.5s ease forwards;
    }

    /* Card Hover Effects */
    .group {
        position: relative;
        overflow: hidden;
    }

    .group::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, rgba(66, 109, 220, 0.1), transparent);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .group:hover::after {
        opacity: 1;
    }

    /* Checklist Item Styles */
    #checklist li {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        padding: 0.5rem;
        border-radius: 0.5rem;
        transition: all 0.3s ease;
    }

    #checklist li:hover {
        background-color: rgba(66, 109, 220, 0.05);
        transform: translateX(5px);
    }

    /* Additional Info Section */
    #additionalInfo {
        transition: all 0.3s ease;
    }

    #additionalInfo:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>
        <nav>
            <div class="image-container">
                <img src="{{ asset('storage/assets/civil_registry_logo.png') }}"> </div>
    
                <div class="logo-name">
             <p> Mandaluyong City <br> Civil Registry</p > 
            
            </div>
            </div>
    
            <div class="menu">
                <ul>
                    <li> <a href="{{ route('residence-homepage') }}"> Home </a> </li>
    
            <li> <a class="active" href="#"> Services <i class="fas fa-caret-down"> </i> </a> 
    
            <div class="dropdown_menuuu">
              <ul>
            <li> <a href="{{ route('residence-appointment') }}"> Appointment </a> </li>
            <li> <a class="active" href="{{ route('residence-requirements') }}"> Requirements </a> </li>
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
        <a href="{{ route('logout') }}" id="logoutLink"> Logout </a> 
      
        <button class="menu-toggle"> </button>
      </nav>

  <!--MAIN SECTION --> 
      <section class="pt-10">
        <div class="details">
          <div class="relative z-10 pt-12 px-8 pb-20 flex flex-col items-center text-white min-h-screen">
            <h1 class="text-4xl font-bold bg-white text-blue-800 py-4 px-8 rounded-lg mb-10 shadow-lg transform hover:scale-105 transition-transform duration-300">REQUIREMENTS</h1>
      
            <div class="flex flex-col lg:flex-row gap-10 items-start justify-center w-full max-w-7xl">
              
              <!-- Document Type Icons -->
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10 w-full lg:w-1/2">
                @foreach($requirements as $requirement)
                <div onclick="showChecklist('{{ $requirement->id }}')" 
                     class="group transition-all duration-300 transform hover:scale-105 hover:shadow-2xl hover:shadow-blue-400 p-6 bg-white rounded-xl flex flex-col items-center text-blue-500 cursor-pointer border-2 border-transparent hover:border-blue-400">
                  <div class="relative">
                    <img src="{{ asset('storage/assets/docreq.png') }}" 
                         class="h-32 w-32 mb-3 transform group-hover:rotate-3 transition-transform duration-300" 
                         alt="{{ $requirement->title }} Icon" />
                    <div class="absolute -top-2 -right-2 bg-blue-500 text-white rounded-full w-8 h-8 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                      <i class="fas fa-chevron-right"></i>
                    </div>
                  </div>
                  <span class="text-lg font-semibold group-hover:text-blue-600 transition-colors duration-300">{{ $requirement->title }}</span>
                </div>
                @endforeach
              </div>
      
              <!-- Requirements Checklist -->
              <div class="bg-white p-8 rounded-xl shadow-lg text-black w-full lg:w-1/2 transform transition-all duration-300 hover:shadow-xl">
                <div class="flex items-center justify-between mb-6">
                  <h2 class="text-2xl font-bold text-gray-800" id="checklistTitle">CHECKLIST OF REQUIREMENTS</h2>
                  <div class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">
                    <i class="fas fa-info-circle mr-2"></i>Click a document type to view requirements
                  </div>
                </div>
                <div class="bg-gray-50 rounded-lg p-6">
                  <ul id="checklist" class="space-y-3">
                    <!-- Checklist items will be populated here -->
                  </ul>
                </div>
                <div class="mt-6 p-4 bg-blue-50 rounded-lg hidden" id="additionalInfo">
                  <h3 class="text-lg font-semibold text-blue-800 mb-2">Important Notes:</h3>
                  <ul class="list-disc list-inside text-blue-700 space-y-2">
                    <li>All documents must be original or certified true copy</li>
                    <li>Bring valid government-issued ID</li>
                    <li>Processing time may vary depending on document type</li>
                  </ul>
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



    function performSearch() {
      const input = document.getElementById("searchInput").value.trim().toLowerCase();

      if (input === "") {
        alert("Please enter a search term.");
    } else {
        if (input === "home page" || input === "homepage" || input === "home") {
            window.location.href = "Home page - Residence View.html";
        } else if (input === "faqs" || input === "facts" || input === "help") {
            window.location.href = "FAQs Page - Residence View.html";
        } else if (input === "about" || input === "about civil") {
            window.location.href = "About Us Page - Residence View.html";
        } else if (input === "appointment" || input === "appointments" || input === "schedule" || input === "schedules") {
            window.location.href = "Appointment Page - Residence View.html";
        } else if (input === "reqs" || input === "requirements" || input === "requirement") {
            window.location.href = "Requirements Page - Residence View.html";
        } else if (input === "contact" || input === "number" || input === "email") {
            window.location.href = "Contact Us Page - Residence View.html";
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

    const checklistData = {
      @foreach($requirements as $requirement)
        '{{ $requirement->id }}': {!! json_encode(explode("\n", $requirement->description)) !!},
      @endforeach
    };

    function showChecklist(type) {
      const checklist = checklistData[type];
      const checklistEl = document.getElementById("checklist");
      const title = document.getElementById("checklistTitle");
      const additionalInfo = document.getElementById("additionalInfo");
      const requirement = @json($requirements).find(r => r.id == type);

      // Update title with animation
      title.style.opacity = "0";
      setTimeout(() => {
        title.textContent = `REQUIREMENTS FOR ${requirement.title.toUpperCase()}`;
        title.style.opacity = "1";
      }, 300);

      // Clear and populate checklist with animation
      checklistEl.innerHTML = "";
      checklist.forEach((item, index) => {
        if (item.trim()) {
          const li = document.createElement("li");
          li.className = "flex items-start space-x-3 transform transition-all duration-300 opacity-0";
          li.style.animationDelay = `${index * 100}ms`;
          
          const icon = document.createElement("i");
          icon.className = "fas fa-check-circle text-green-500 mt-1";
          
          const text = document.createElement("span");
          text.className = "text-gray-700";
          text.textContent = item.trim();
          
          li.appendChild(icon);
          li.appendChild(text);
          checklistEl.appendChild(li);
          
          // Trigger animation
          setTimeout(() => {
            li.style.opacity = "1";
            li.style.transform = "translateX(0)";
          }, 50);
        }
      });

      // Show additional info
      additionalInfo.classList.remove("hidden");
      additionalInfo.style.opacity = "0";
      setTimeout(() => {
        additionalInfo.style.opacity = "1";
      }, 500);

      // Smooth scroll to checklist
      title.scrollIntoView({ behavior: "smooth", block: "start" });
    }

    // Add hover effect to document type cards
    document.querySelectorAll('.grid > div').forEach(card => {
      card.addEventListener('mouseenter', function() {
        this.style.transform = 'scale(1.05)';
        this.style.boxShadow = '0 20px 25px -5px rgba(59, 130, 246, 0.3)';
      });
      
      card.addEventListener('mouseleave', function() {
        this.style.transform = 'scale(1)';
        this.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1)';
      });
    });
  </script>
</body>
</html>
