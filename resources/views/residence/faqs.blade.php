<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="/storage/assets/favicon.ico">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
	<title> FAQs Page - Residence View </title>
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

    /* Mobile Navigation */
    @media(max-width: 1000px) {
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

      nav button:before,
      nav button:after {
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

      .dropdown_menuuu ul {
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
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
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

    /* Main content below the NAV BAR */
    html, body {
      height: 100%; 
      margin: 0; 
      padding: 0; 
      overflow-x: hidden; 
    }

    section {
      width: 100%;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
      background-color: #d8e4f0;
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
      padding: 20px;
      box-sizing: border-box;
      position: relative;
    }

    .hcwhy h3{
      color: #2c3e50;
      font-size: clamp(20px, 5vw, 30px);
      font-weight: bold;
      margin: 20px 0;
      text-align: center;
      font-family: "Poppins", sans-serif;
    }

    .search-section {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
    }

    .search-container2 {
      border: 2px solid #426DDC;
      display: flex;
      margin: 20px 0;
      align-items: center;
      width: 100%;
      max-width: 600px;
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
      font-size: clamp(14px, 2vw, 15px);
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

    .faq-container {
      margin: 20px 0;
      padding: 20px;
      width: 100%;
      max-width: 800px;
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      font-family: "Poppins", sans-serif;
    }

    .faq-title {
      text-align: center;
      font-size: clamp(20px, 4vw, 23px);
      color: #003366;
      margin: 10px 0 25px;
    }

    .faq-item {
      border-bottom: 1px solid #ddd;
      text-align: left;
      padding: 15px 0;
      display: flex;
      margin: 0 5px;
      flex-direction: column;
      width: calc(100% - 10px);
    }

    .faq-item:last-child {
      border-bottom: none;
    }

    .faq-question {
      display: flex;
      justify-content: space-between;
      align-items: center;
      cursor: pointer;
      font-size: clamp(15px, 2vw, 17px);
      font-weight: 600;
      color: #003366;
      padding: 0 5px;
      width: 100%;
      transition: 0.3s ease;
    }

    .faq-question:hover {
      color: #0055aa;
    }

    .faq-question i {
      margin-left: 10px;
      transition: transform 0.3s ease;
      flex-shrink: 0;
    }

    .faq-question.active i {
      transform: rotate(180deg);
    }

    .faq-answer {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease;
      font-size: clamp(13px, 1.8vw, 14px);
      font-weight: 400;
      color: #555;
      margin: 10px 15px 0;
      line-height: 1.6;
      padding: 0 5px;
    }

    .faq-answer.show {
      max-height: 500px;
    }

    /* Footer Responsive Styles */
    footer {
      background: #fff;
      padding: 20px 0 5px;
      width: 100%;
    }

    .container {
      margin: 0 auto;
      padding: 0 20px;
      max-width: 1140px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 20px;
    }

    .footer-content {
      flex: 1;
      min-width: 250px;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .map-container {
      width: 100%;
      height: 200px;
      margin: 10px 0;
    }

    footer iframe {
      width: 100%;
      height: 100%;
      border: 0;
    }

    .social-icons {
      display: flex;
      justify-content: center;
      gap: 15px;
      padding: 0;
      list-style: none;
    }

    .social-icons li {
      display: inline-block;
    }

    .social-icons i {
      color: rgb(3, 3, 3);
      font-size: 25px;
      transition: color 0.3s ease;
    }

    .social-icons i:hover {
      color: #3247df;
    }

    .bottom-bar {
      background: #3247df;
      text-align: center;
      padding: 8px 0;
      margin-top: 20px;
    }

    .bottom-bar p {
      color: #f7f7f7;
      margin: 0;
      font-size: 14px;
      padding: 8px;
    }

    /* Media Queries */
    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        align-items: center;
      }

      .footer-content {
        width: 100%;
        margin: 10px 0;
      }

      .map-container {
        height: 150px;
      }
    }

    @media (max-width: 480px) {
      section {
        padding: 10px;
      }

      .search-container2 {
        margin: 10px 0;
        height: auto;
        padding: 10px;
      }

      .faq-container {
        padding: 15px;
      }

      .faq-question {
        font-size: 15px;
      }

      .faq-answer {
        font-size: 13px;
        margin: 5px 10px 0;
      }
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


		<div class="menu">
			<ul>
        <li> <a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ route('residence-homepage') }}"> Home </a> </li>

        <li> <a href="#"> Services <i class="fas fa-caret-down"> </i> </a>

    <div class="dropdown_menuuu">
      <ul>
        <li> <a href="{{ route('residence-appointment') }}"> Appointment </a> </li>
        <li> <a href="{{ route('residence-requirements') }}"> Requirements </a> </li>
            </ul>
          </div>
          </li>

          <li> <a class="{{ request()->is('residence-faqs') ? 'active' : '' }}" href="{{ route('residence-faqs') }}"> FAQs </a> </li>
          <li> <a class="{{ request()->is('residence-about-us') ? 'active' : '' }}" href="{{ route('residence-about-us') }}"> About Us </a> </li>
          <li> <a class="{{ request()->is('residence-contact-us') ? 'active' : '' }}" href="{{ route('residence-contact-us') }}"> Contact Us </a> </li>
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
            
            <div id="faq-list">
                @foreach($faqs as $faq)
                <div class="faq-item">
                    <div class="faq-question">
                        {{ $faq->question }}
                        <i class="fa fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        {!! nl2br(e($faq->answer)) !!}
                    </div>
                </div>
                @endforeach
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

        const faqQuestions = document.querySelectorAll('.faq-question');

        faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
        const answer = question.nextElementSibling;
        const icon = question.querySelector('i');

        document.querySelectorAll('.faq-answer').forEach(ans => {
                if (ans !== answer) ans.classList.remove('show');
        });
        document.querySelectorAll('.faq-question i').forEach(ic => {
                if (ic !== icon) ic.classList.remove('active');
        });

            question.classList.toggle('active');
            answer.classList.toggle('show');
            icon?.classList.toggle('active');
        });
        });

</script>

</body>
</html>