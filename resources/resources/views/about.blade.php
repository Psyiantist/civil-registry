<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>About Us</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('storage/assets/civil_registry_logo.png') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: #f5f7fa;
    }

    nav {
      position: sticky;
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
      margin-left: 30px;
      text-align: center;
      justify-content: center;
      align-items: center;
    }

    nav .menu ul li {
      padding: -5px;
      font-size: 17px;
      list-style: none;
      font-weight: bold;
      margin-right: 50px;
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

    /* Mobile menu styles */
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

    .header-image {
      position: relative;
      width: 100%;
      height: 550px;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .header-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(to right, rgba(10, 89, 173, 0.9), rgba(10, 89, 173, 0.4));
      z-index: 0;
    }

    .header-content {
      display: flex;
      justify-content: space-between;
      height: 100%;
      width: 100%;
      position: relative;
      z-index: 1;
      padding: 40px;
      animation: fadeInUp 1s ease forwards;
      opacity: 0;
    }

    .header-text {
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      flex: 1;
    }

    .header-text h1 {
      font-size: 50px;
      margin-bottom: 20px;
      font-weight: 700;
    }

    .header-text p {
      font-size: 20px;
      line-height: 1.6;
      max-width: 600px;
    }

    @media screen and (max-width: 800px) {
      .header-content {
        flex-direction: column;
        padding: 20px;
      }

      .header-text {
        text-align: center;
        align-items: center;
        margin-bottom: 30px;
      }

      .header-text h1 {
        font-size: 36px;
        margin-bottom: 15px;
      }

      .header-text p {
        font-size: 16px;
        line-height: 1.5;
        max-width: 100%;
      }

      .header-image-right {
        width: 100%;
        justify-content: center;
      }

      .header-image-right img {
        width: 100%;
        max-width: 400px;
        height: auto;
      }

      .header-image {
        height: auto;
        min-height: 500px;
      }

      .about-section {
        flex-direction: column;
        gap: 30px;
      }

      .about-section.reverse {
        flex-direction: column;
      }

      .about-section .text,
      .about-section .image {
        min-width: 100%;
      }

      .services {
        grid-template-columns: 1fr;
      }

      .service-item {
        padding: 15px;
      }

      .service-item i {
        font-size: 24px;
      }
    }

    @media screen and (max-width: 480px) {
      .header-text h1 {
        font-size: 28px;
        margin-bottom: 12px;
      }

      .header-text p {
        font-size: 14px;
        line-height: 1.4;
      }

      .header-image {
        min-height: 400px;
      }

      .container {
        padding: 0 15px;
        margin-top: 40px;
      }

      .about-section {
        gap: 20px;
      }

      h2 {
        font-size: 24px;
      }

      .service-item {
        padding: 12px;
      }

      .service-item i {
        font-size: 20px;
      }

      .service-item span {
        font-size: 14px;
      }
    }

    .header-image-right {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: flex-end;
    }

    .header-image-right img {
      width: 90%;
      height: 90%;
      object-fit: cover;
      border-radius: 5px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    .header-image-right img::after {
      width: 90%;
      height: 90%;
      object-fit: cover;
     
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Animation */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .container {
      max-width: 1100px;
      margin: 40px auto;
      padding: 0 20px;
      margin-top: 80px;
    }

    .about-section {
      display: flex;
      margin-top: 30px;
      justify-content: space-between;
      flex-wrap: wrap;
      margin-bottom: 50px;
      gap: 40px;
    }

    .about-section.reverse {
      flex-direction: row-reverse;
    }

    .about-section .text,
    .about-section .image {
      flex: 1;
      min-width: 300px;
      height: 100%;
    }

    .about-section .image img {
      width: 100%;
      border-radius: 12px;
      height: auto;
    }

    h2 {
      color: #426DDC;
      margin-bottom: 15px;
    }

    .services {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .service-item {
      background: white;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      display: flex;
      align-items: center;
      gap: 15px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }

    .service-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    }

    .service-item i {
      font-size: 28px;
      color: #005baa;
    }

    footer {
      text-align: center;
      padding: 20px;
      background-color: #005baa;
      color: white;
      margin-top: 60px;
    }
  </style>
</head>
<body>

  <nav>
    <div class="image-container">
      <img src="{{ asset('storage/assets/civil_registry_logo.png') }}">
    </div>
    <div class="logo-name">
      <b>Civil Registry <br/> <a>Mandaluyong City</a></b>
    </div>
  
    <div class="menu">
      <ul>
        <li><a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
        <li><a class="{{ request()->is('faqs') ? 'active' : '' }}" href="{{ route('faqs') }}">FAQs</a></li>
        <li><a class="{{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a></li>
        <li><a class="{{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a></li>
      </ul>
    </div>
  
    <div class="search-container">
      <input type="text" id="searchInput" placeholder="Search">
      <i class="fa fa-search" onclick="performSearch()"></i>
    </div>
    
    <i class="fas fa-user-circle user-icon" onclick="toggleDropdown()"></i>
  </nav>
 
  <header class="header-image">
    <div class="header-overlay"></div>
    <div class="header-content animated">
      <div class="header-text">
        <h1>About Civil Registry</h1>
        <p>The Civil Registry Office of Mandaluyong City is responsible for the recording, maintenance, and issuance of vital documents such as birth certificates, marriage certificates, death certificates, and other civil registry records.</p>
      </div>
      <div class="header-image-right">
        <img src="{{ asset('storage/assets/blue_building.jpg') }}" alt="Banner" />
      </div>
    </div>
  </header>
  
  
  <div class="container">
    <section class="about-section">
      <div class="text">
        <h2>Our Mission</h2>
        <p>
          Our mission is to make civil registry services accessible, timely, and reliable for the people of Mandaluyong City. Whether you're registering a birth, marriage, or need a certified copy of a vital document, we're here to serve you. We are committed to providing a seamless online experience, ensuring your requests are handled with care, transparency, and professionalism. No matter where you are, we're just a click away to assist you with all your civil registry needs.
        </p>
      </div>
      <div class="image">
        <img src="{{ asset('storage/assets/mission.jpg') }}" alt="Mission Image" />
      </div>
    </section>

    <section class="about-section reverse">
      <div class="text">
        <h2>What We Do</h2>
        <p>
          We handle a wide range of civil registry services to ensure the residents of Mandaluyong City have access to vital records when they need them. Our services include processing registrations for births, marriages, and deaths, along with providing certified true copies of these records. We also assist with other essential civil registry functions such as corrections of clerical errors, late registrations, and the legitimation of children.


        </p>
      </div>
      <div class="image">
        <img src="{{ asset('storage/assets/what_we_do.jpg') }}" alt="What We Do Image" />
      </div>
    </section>

    <section style="background: #dbe8f4; border-radius: 12px; margin-bottom: 40px; padding: 32px 0 24px 0; box-shadow: 0 2px 8px rgba(66, 109, 220, 0.07);">
      <h2 style="text-align: center; color: #26324B; font-size: 2rem; font-weight: bold; margin-bottom: 18px;"><i class="fas fa-user"></i> Meet Our Department Head</h2>
      <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
        <div style="width: 220px; height: 220px; border-radius: 18px; overflow: hidden; border: 2px solid #e0e7ef; background: #fff; margin-bottom: 18px;">
          <img src="{{ asset('storage/assets/department_head.jpg') }}" alt="Department Head" style="width: 100%; height: 100%; object-fit: cover; object-position: top;" />
        </div>
        <hr style="width: 220px; margin: 0 0 12px 0; border: none; border-top: 1.5px solid #e0e7ef;">
        <div style="text-align: center;">
          <div style="font-size: 1.3rem; font-weight: bold; color: #26324B; margin-bottom: 4px;">Atty. Gabriel P. Corton</div>
          <div style="font-size: 1.05rem; font-style: italic; color: #26324B;">Mandaluyong City Civil Registry Department Head</div>
        </div>
      </div>
    </section>

    <section>
      <h2>Our Services</h2>
      <div class="services">
        <div class="service-item"><i class="fas fa-baby"></i> <span>Birth Registration and Certification</span></div>
        <div class="service-item"><i class="fas fa-ring"></i> <span>Marriage Registration and Certificate Issuance</span></div>
        <div class="service-item"><i class="fas fa-cross"></i> <span>Death Registration and Certification</span></div>
        <div class="service-item"><i class="fas fa-edit"></i> <span>Correction of Clerical Errors (RA 9048)</span></div>
        <div class="service-item"><i class="fas fa-clock"></i> <span>Late Registration of Civil Documents</span></div>
        <div class="service-item"><i class="fas fa-user-check"></i> <span>Legitimation and Acknowledgment of Paternity</span></div>
        <div class="service-item"><i class="fas fa-file-upload"></i> <span>Endorsement to PSA</span></div>
        <div class="service-item"><i class="fas fa-copy"></i> <span>Certified True Copies and Transcription Services</span></div>
      </div>
    </section>
  </div>

  <footer>
    &copy; 2025 Civil Registry Office - Mandaluyong City. All rights reserved.
  </footer>

  <script>
    function performSearch() {
        const routes = {
            home: "{{ route('home') }}",
            faqs: "{{ route('faqs') }}",
            about: "{{ route('about') }}",
            contact: "{{ route('contact') }}"
        };

        const input = document.getElementById("searchInput").value.trim().toLowerCase();

        if (input === "") {
            alert("Please enter a search term.");
        } else {
            if (["home page", "homepage", "home"].includes(input)) {
                window.location.href = routes.home;
            } else if (["faqs", "facts", "help", "faq", "question"].includes(input)) {
                window.location.href = routes.faqs;
            } else if (["about", "about civil"].includes(input)) {
                window.location.href = routes.about;
            } else if (["contact", "number", "email"].includes(input)) {
                window.location.href = routes.contact;
            } else {
                alert("No results found.");
                inputField.value = "";
            }
        }
    }

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
        alert("Please choose a user mode that best describes you.");
        dropdown.classList.toggle("show");
    }

    window.onclick = function(event) {
        if (!event.target.matches('.user-icon')) {
            const dropdown = document.getElementById("accountDropdown");
            if (dropdown.classList.contains('show')) {
                dropdown.classList.remove('show');
            }
        }
    };
  </script>
</body>
</html>