<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>About Us - Admin View</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('storage/assets/civil_registry_logo.png') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
  <style>
    /* Reset and Base Styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      font-family: 'Poppins';
      background-color: #d8e4f0;
    }

    /* Navigation Styles */
    nav {
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

    nav .menu ul li a {
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

    .dropdown_menuuu {
      display: none;
      position: absolute;
      left: 0;
      top: 100%;
      min-height: 90px;
      background-color: white;
      z-index: 1000;
      min-width: 200px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      padding: 10px 0;
    }

    .menu ul li:hover .dropdown_menuuu {
      display: block;
    }

    .dropdown_menuuu ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .dropdown_menuuu ul li {
      width: 100%;
      padding: 8px 20px;
      white-space: nowrap;
      transition: background-color 0.3s ease;
    }

    .dropdown_menuuu ul li:hover {
      background-color: #f5f5f5;
    }

    .dropdown_menuuu ul li a {
      color: #333;
      text-decoration: none;
      font-size: 15px;
      display: block;
      width: 100%;
    }

    .dropdown_menuuu ul li a:hover {
      color: #426DDC;
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

    nav .search-container .fa-search, button.search-button {
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

    @media (max-width: 1000px) {
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

      .logo-name a {
      margin-left: -16px;
      font-family: "Poppins", sans-serif;
      padding-left: 30px;
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
        margin: 0;
      }

      .dropdown_menuuu ul li {
        width: 100%;
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

    @media (max-width: 768px) {
      nav {
        height: auto;
        padding: 10px 0;
      }

      .image-container img {
        width: 40px;
        height: 35px;
        margin-left: 10px;
      }

      .logo-name {
        font-size: 13px;
        margin-left: 15px;
      }

      .search-container {
        margin: 10px auto;
        width: 90%;
      }

      .search-container input[type="text"] {
        width: 100%;
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
      padding: 40px 100px;
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
      padding-top: 25px;
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

    /* Header Section Responsive Styles */
    @media (max-width: 1200px) {
        .header-content {
            padding: 40px 50px;
        }

        .header-text h1 {
            font-size: 40px;
        }

        .header-text p {
            font-size: 18px;
        }
    }

    @media (max-width: 992px) {
        .header-content {
            flex-direction: column;
            text-align: center;
            padding: 30px 20px;
        }

        .header-text {
            align-items: center;
            margin-bottom: 30px;
        }

        .header-text h1 {
            font-size: 36px;
        }

        .header-image-right img {
            width: 100%;
            max-width: 500px;
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
            width: 100%;
        }

        .services {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .header-text h1 {
            font-size: 32px;
        }

        .header-text p {
            font-size: 16px;
        }

        .container {
            padding: 0 15px;
            margin-top: 60px;
        }

        .about-section {
            margin-top: 20px;
            gap: 20px;
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

    @media (max-width: 480px) {
        .header-text h1 {
            font-size: 28px;
        }

        .header-text p {
            font-size: 14px;
        }

        .header-content {
            padding: 20px 15px;
        }

        .container {
            margin-top: 40px;
        }

        .about-section .text h2 {
            font-size: 24px;
        }

        .about-section .text p {
            font-size: 14px;
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

    /* Department Head Section Responsive Styles */
    @media (max-width: 768px) {
        section[style*="background: #dbe8f4"] {
            padding: 24px 15px;
        }

        section[style*="background: #dbe8f4"] h2 {
            font-size: 1.5rem;
        }

        section[style*="background: #dbe8f4"] div[style*="width: 220px"] {
            width: 180px;
            height: 180px;
        }

        section[style*="background: #dbe8f4"] div[style*="font-size: 1.3rem"] {
            font-size: 1.1rem;
        }

        section[style*="background: #dbe8f4"] div[style*="font-size: 1.05rem"] {
            font-size: 0.9rem;
        }
    }

    @media (max-width: 480px) {
        section[style*="background: #dbe8f4"] {
            padding: 20px 10px;
        }

        section[style*="background: #dbe8f4"] h2 {
            font-size: 1.3rem;
        }

        section[style*="background: #dbe8f4"] div[style*="width: 220px"] {
            width: 150px;
            height: 150px;
        }
    }

    /* Footer Responsive Styles */
    @media (max-width: 768px) {
        footer {
            padding: 15px;
            font-size: 14px;
        }
    }

    @media (max-width: 480px) {
        footer {
            padding: 10px;
            font-size: 12px;
        }
    }

    /* Animation for Header Content */
    .header-content {
        animation: fadeInUp 1s ease forwards;
        opacity: 0;
    }

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

    /* Smooth Transitions */
    .about-section .image img,
    .service-item,
    .header-image-right img {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .about-section .image img:hover,
    .service-item:hover,
    .header-image-right img:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body>
  @include('layouts.admin-navbar')

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

  @include('layouts.footer')

  <script>
    function toggleDropdown() {
      const dropdown = document.getElementById("accountDropdown");
      dropdown.classList.toggle("show");
    }

    function toggleMenu() {
      const menu = document.querySelector('.menu');
      const button = document.querySelector('.menu-toggle');
      menu.classList.toggle('expand-mobile');
      button.classList.toggle('expand-icon');
    }

    window.addEventListener("click", function(event) {
      const userIcon = document.querySelector(".user-icon");
      const dropdown = document.getElementById("accountDropdown");

      if (!userIcon.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.classList.remove("show");
      }
    });

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
      }
    }

    document.getElementById("searchInput").addEventListener("keypress", function(e) {
      if (e.key === "Enter") {
        performSearch();
      }
    });
  </script>
</body>
</html>
