<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/x-icon" href="{{ asset('storage/assets/civil_registry_logo.png') }}">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
	<title> FAQs Page - Admin View </title>
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<style type="text/css">

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
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    #accountDropdown.show {
      display: block;
    }

    #accountDropdown a {
      display: block;
      padding: 10px 16px;
      color: #333;
      text-align: left;
      text-decoration: none;
      font-size: 14px;
      font-family: "Poppins", sans-serif;
      transition: background-color 0.3s ease;
    }

    #accountDropdown a:hover {
      color: #426DDC;
      background-color: #f5f5f5;
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



    /* Main content below the NAV BAR */
    html, body {
      height: 100%; 
      margin: 0; 
      padding: 0; 
      overflow-x: hidden; 
    }

    section {
      width: 100vw;
      height: 110vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #d8e4f0;
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      position: relative;
    }

    .hcwhy h3{
      color: #2c3e50;
      font-size: 30px;
      font-weight: bold;
      margin-left: 50px;
      font-family: "Poppins", sans-serif;
    }

    .search-section {
      display: flex;
      justify-content: center;
    }

    .search-container2 {
      border: 2px solid #426DDC;
      display: flex;
      margin-top: 35px;
      align-items: center;
      width: 600px;
      height: 40px;
      padding: 15px;
      background: #f9f9f9;
      border-radius: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .search-container2:hover {
      box-shadow: 0 0 7px white;      
    }

    .search-container2 input {
      flex: 1;
      border: none;
      outline: none;
      font-size: 15px;
      padding: 10px;
      border-radius: 30px;
      background: transparent;
      font-family: "Poppins", sans-serif;
    }

    .search-container2 button {
      background: none;
      border: none;
      cursor: pointer;
      padding: 10px;
      font-size: 18px;
      color: #555;
      margin-right: 10px;
    }

    .search-container2 button:hover {
      color: #007bff;
    }

    @media (max-width: 600px) {
      .search-container2 {
                max-width: 90%;
      }
            .search-container2 input {
                font-size: 14px;
            }
      }


    .faq-container {
      margin-top: 55px;
      padding: 10px;
      width: 600px; 
      max-width: 80vw; 
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      font-family: "Poppins", sans-serif;
    }

   .faq-title {
      text-align: center;
      font-size: 23px;
      color: #003366;
      margin-top: 10px;
      margin-bottom: 25px;
    }

   .faq-item {
      border-bottom: 1px solid #ddd;
      text-align: left;
      padding: 15px 0;
      display: flex;
      margin-left: 5px;
      flex-direction: column;
      width: 100%;
    }

   .faq-item:last-child {
      border-bottom: none;
    }

   .faq-question {
      display: flex;
      justify-content: space-between;
      align-items: center;
      cursor: pointer;
      font-size: 17px;
      font-weight: 600;
      color: #003366;
      padding: 0 5px;
      width: calc(100% - 20px);
      transition: 0.3s ease;
    }

   .faq-question:hover {
      color: #0055aa;
    }

   .faq-question i {
      margin-left: auto;
      transition: transform 0.3s ease;
   }

   .faq-question.active i.fa-chevron-down {
      transform: rotate(180deg);
   }

   .faq-answer {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease-out;
      font-size: 14px;
      font-weight: 400;
      color: #555;
      margin-left: 15px;
      line-height: 1.6;
      margin-top: 10px;
      padding: 0 5px;
      opacity: 0;
      transition: max-height 0.3s ease-out, opacity 0.3s ease-out;
   }

   .faq-answer.show {
      max-height: 500px;
      opacity: 1;
      padding: 10px 5px;
   }

   .faq-actions {
      display: flex;
      align-items: center;
      gap: 15px;
    }

   .faq-actions i {
      cursor: pointer;
      font-size: 16px;
      color: #666;
      transition: color 0.3s ease;
    }

   .faq-actions i:hover {
      color: #426DDC;
    }

   .faq-actions i.fa-edit,
   .faq-actions i.fa-trash {
      transform: none !important;
   }



    /* Zoom-in screen orientation layout */
    @media(max-width: 1000px) {

    html, body {
     overflow-x: hidden;
     overflow-y: auto;
     width: 100%;
     max-width: 100%;
    }

    section {
      width: 100vw;
      height: 120vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #d8e4f0;
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      position: relative;
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

    [contenteditable="true"]:focus {
      border-radius: 10px;
      outline: 3px solid black;
      box-shadow: 0 0 20px white;
      cursor: text;
    }

    [contenteditable="true"]:hover {
     border-radius: 10px;
     cursor: text;
    }

    .editable-wrapper {
      display: flex;
      align-items: center;
      position: relative;
      justify-content: center;
      gap: 8px; 
    }

    .edit-icon {
      pointer-events: none; 
      user-select: none;
      font-size: 17px;
      color: black;
    }

    /* Modal Styles */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1000;
    }

    .modal-content {
      background: white;
      margin: 15% auto;
      padding: 20px;
      width: 50%;
      border-radius: 8px;
      position: relative;
    }

    .modal-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .modal-header h3 {
      margin: 0;
      color: #003366;
    }

    .close-modal {
      background: none;
      border: none;
      font-size: 24px;
      cursor: pointer;
      color: #666;
    }

    .modal-form input,
    .modal-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-family: 'Poppins', sans-serif;
    }

    .modal-form textarea {
      min-height: 100px;
      resize: vertical;
    }

    .modal-actions {
      text-align: right;
    }

    .modal-actions button {
      padding: 8px 16px;
      border-radius: 4px;
      cursor: pointer;
      font-family: 'Poppins', sans-serif;
    }

    .cancel-btn {
      background: #f8f9fa;
      border: 1px solid #ddd;
      margin-right: 10px;
    }

    .submit-btn {
      background: #426DDC;
      color: white;
      border: none;
    }
	</style>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
</head>

<body>
	<nav>
        <div class="image-container">
            <img src="{{ asset('build/assets/civil_registry_logo.png') }}"> </div>

        <div class="logo-name">
            <b> Civil Registry <br/> <a> Mandaluyong City </a> </b> </div>

		<div class="menu">
			<ul>
				<li> <a href="{{ route('admin.homepage') }}"> Home </a> </li>

        <li> <a href="#"> Services <i class="fas fa-caret-down"> </i> </a> 

        <div class="dropdown_menuuu">
          <ul>
        <li> <a href="{{ route('admin.appointment') }}"> Appointment </a> </li>
        <li> <a href="{{ route('admin.requirements') }}"> Requirements </a> </li>
           </ul>
        </div>
        </li>

				<li> <a class="active" href="{{ route('admin.faqs') }}"> FAQs </a> </li>
				<li> <a href="{{ route('admin.about') }}"> About Us </a> </li>
				<li> <a href="{{ route('admin.contact') }}"> Contact Us </a> </li>
			</ul>
    </div>

  <div class="search-container">
  <input type="text" id="searchInput" placeholder="Search">
  <i class="fa fa-search" onclick="performSearch()"> </i>
  </div>
	
  <i class="fas fa-user-circle user-icon" onclick="toggleDropdown()"></i>
  <div id="accountDropdown">
  <div style="padding: 16px 0 8px 0; text-align: center;">
    <div style="font-size: 40px; color: #e0e0e0; margin-bottom: 4px;">
      <i class="fas fa-user-circle"></i>
    </div>
    <div style="font-weight: bold; font-size: 18px;">Admin</div>
    <div style="font-size: 14px; color: #757575; word-break: break-all;">city.registrar@<br>mandaluyong.gov.ph</div>
  </div>
  <a href="#">Settings</a>
  <a href="{{ route('admin.logout') }}" id="logoutLink">Logout</a>
</div>
  
    <button class="menu-toggle"> </button>
  </nav>

   <center>
     <section class="search-section">
       <div class="hcwhy"> 
     <h3> How can we help you? </h3>
        <form class="search-container2">
            <input type="text" placeholder="Ask anything">
            <button type="submit">
                <i class="fa fa-search"> </i>
            </button>
        </form>

        <div class="faq-container">
            <h2 class="faq-title">Frequently Asked Questions</h2>
            
            <div class="faq-actions" style="margin-bottom: 20px; text-align: right;">
                <button onclick="document.getElementById('addFaqModal').style.display='block'" class="btn btn-primary" style="background: #426DDC; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer;">
                    <i class="fas fa-plus"></i> Add New FAQ
                </button>
            </div>

            <div id="faq-list">
                @foreach($faqs as $faq)
                <div class="faq-item" data-id="{{ $faq->id }}">
                    <div class="faq-question">
                        <span>{{ $faq->question }}</span>
                        <div class="faq-actions">
                            <i class="fas fa-edit" title="Edit" onclick="editFaq({{ $faq->id }})"></i>
                            <i class="fas fa-trash" title="Delete" onclick="deleteFaq({{ $faq->id }})"></i>
                            <i class="fa fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <span>{!! nl2br(e($faq->answer)) !!}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
  </section>
</center>
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


<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script type="text/javascript">
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
        } else if (input === "appointment" || input === "appointments" || input === "schedule" || input === "schedules") {
            window.location.href = "{{ route('admin.appointment') }}";
        } else if (input === "reqs" || input === "requirements" || input === "requirement") {
            window.location.href = "{{ route('admin.requirements') }}";
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
        button.onclick = () => {
            menu.classList.toggle('expand-mobile');
            button.classList.toggle('expand-icon');
        };
        }

        function toggleDropdown() {
        const dropdown = document.getElementById("accountDropdown");

             dropdown.classList.toggle("show");
        }

        function toggleAnswer(element) {
            const answer = element.nextElementSibling;
            answer.classList.toggle('show');
        }

        document.addEventListener('DOMContentLoaded', function() {
            const faqQuestions = document.querySelectorAll('.faq-question');
            
            faqQuestions.forEach(question => {
                question.addEventListener('click', function(e) {
                    if (e.target.closest('.fa-edit') || e.target.closest('.fa-trash')) {
                        return;
                    }
                    
                    // Toggle active class on the clicked question
                    question.classList.toggle('active');
                    
                    // Get the answer element
                    const answer = question.nextElementSibling;
                    const chevronIcon = question.querySelector('.fa-chevron-down');

                    // Close all other answers
                    faqQuestions.forEach(otherQuestion => {
                        if (otherQuestion !== question) {
                            otherQuestion.classList.remove('active');
                            otherQuestion.querySelector('.fa-chevron-down')?.classList.remove('active');
                            otherQuestion.nextElementSibling.classList.remove('show');
                        }
                    });

                    // Toggle the clicked answer
                    answer.classList.toggle('show');
                    chevronIcon?.classList.toggle('active');
                });
            });

            // Initialize Sortable for FAQ reordering
            new Sortable(document.getElementById('faq-list'), {
                animation: 150,
                onEnd: async function(evt) {
                    const items = Array.from(evt.to.children).map((item, index) => ({
                        id: item.dataset.id,
                        order: index
                    }));
                    
                    try {
                        const response = await fetch('{{ route("admin.faqs.reorder") }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            },
                            body: JSON.stringify({ faqs: items })
                        });
                        
                        if (!response.ok) {
                            throw new Error('Failed to reorder FAQs');
                        }
                    } catch (error) {
                        console.error('Error:', error);
                        alert('Failed to reorder FAQs');
                    }
                }
            });
        });

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('addFaqModal');
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        }

        // Function to edit FAQ
        function editFaq(id) {
            const faqItem = document.querySelector(`.faq-item[data-id="${id}"]`);
            const questionElement = faqItem.querySelector('.faq-question span');
            const answerElement = faqItem.querySelector('.faq-answer span');
            const editButton = faqItem.querySelector('.fa-edit');
            
            // Disable edit button
            editButton.style.pointerEvents = 'none';
            editButton.style.opacity = '0.5';
            
            questionElement.contentEditable = true;
            answerElement.contentEditable = true;
            
            questionElement.focus();
            
            // Add save button
            const saveButton = document.createElement('button');
            saveButton.textContent = 'Save';
            saveButton.style.marginLeft = '10px';
            saveButton.style.padding = '5px 10px';
            saveButton.style.backgroundColor = '#426DDC';
            saveButton.style.color = 'white';
            saveButton.style.border = 'none';
            saveButton.style.borderRadius = '4px';
            saveButton.style.cursor = 'pointer';
            
            const actionsDiv = faqItem.querySelector('.faq-actions');
            actionsDiv.appendChild(saveButton);
            
            saveButton.onclick = async () => {
                try {
                    const response = await fetch(`/admin/faqs/${id}`, {
                        method: 'PUT',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({
                            question: questionElement.textContent.trim(),
                            answer: answerElement.textContent.trim()
                        })
                    });
                    
                    if (!response.ok) {
                        throw new Error('Failed to update FAQ');
                    }
                    
                    // Show success message
                    const successMessage = document.createElement('div');
                    successMessage.style.position = 'fixed';
                    successMessage.style.top = '20px';
                    successMessage.style.right = '20px';
                    successMessage.style.padding = '10px 20px';
                    successMessage.style.backgroundColor = '#4CAF50';
                    successMessage.style.color = 'white';
                    successMessage.style.borderRadius = '4px';
                    successMessage.style.zIndex = '1000';
                    successMessage.textContent = 'FAQ updated successfully';
                    document.body.appendChild(successMessage);
                    
                    setTimeout(() => {
                        successMessage.remove();
                    }, 3000);

                    // Reset edit state
                    questionElement.contentEditable = false;
                    answerElement.contentEditable = false;
                    editButton.style.pointerEvents = 'auto';
                    editButton.style.opacity = '1';
                    saveButton.remove();
                } catch (error) {
                    console.error('Error:', error);
                    alert('Failed to update FAQ');
                }
            };
        }

        // Function to delete FAQ
        async function deleteFaq(id) {
            if (!confirm('Are you sure you want to delete this FAQ?')) {
                return;
            }
            
            try {
                const response = await fetch(`/admin/faqs/${id}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                });
                
                if (response.ok) {
                    const faqItem = document.querySelector(`.faq-item[data-id="${id}"]`);
                    faqItem.remove();
                    
                    // Show success message
                    const successMessage = document.createElement('div');
                    successMessage.style.position = 'fixed';
                    successMessage.style.top = '20px';
                    successMessage.style.right = '20px';
                    successMessage.style.padding = '10px 20px';
                    successMessage.style.backgroundColor = '#4CAF50';
                    successMessage.style.color = 'white';
                    successMessage.style.borderRadius = '4px';
                    successMessage.style.zIndex = '1000';
                    successMessage.textContent = 'FAQ deleted successfully';
                    document.body.appendChild(successMessage);
                    
                    setTimeout(() => {
                        successMessage.remove();
                    }, 3000);
                } else {
                    throw new Error('Failed to delete FAQ');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Failed to delete FAQ');
            }
        }
</script>

<div id="addFaqModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Add New FAQ</h3>
            <button class="close-modal" onclick="document.getElementById('addFaqModal').style.display='none'">&times;</button>
        </div>
        <form action="{{ route('admin.faqs.store') }}" method="POST" class="modal-form">
            @csrf
            <div>
                <label>Question:</label>
                <input type="text" name="question" required>
            </div>
            <div>
                <label>Answer:</label>
                <textarea name="answer" required></textarea>
            </div>
            <div class="modal-actions">
                <button type="button" class="cancel-btn" onclick="document.getElementById('addFaqModal').style.display='none'">Cancel</button>
                <button type="submit" class="submit-btn">Add FAQ</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>