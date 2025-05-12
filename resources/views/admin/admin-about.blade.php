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

    nav button {
      display: none;
    }

    nav .menu {
      width: 60%;
      margin-top: -5px;
      text-align: center;
      margin-left: 30px;
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

    nav .menu ul li a {
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

    #accountDropdown {
      display: none;
      position: absolute;
      background-color: #fff;
      border-radius: 6px;
      right: 10px;
      top: 60px;
      min-width: 160px;
      z-index: 1000;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    #accountDropdown.show {
      display: block;
    }

    #accountDropdown a {
      display: block;
      padding: 10px 16px;
      color: #333;
      text-decoration: none;
      font-size: 14px;
    }

    #accountDropdown a:hover {
      color: #426DDC;
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
        <li><a href="{{ route('admin.homepage') }}">Home</a></li>
        <li> <a href="#"> Services <i class="fas fa-caret-down"> </i> </a>

        <div class="dropdown_menuuu">
          <ul>
            <li> <a href="{{ route('admin.appointment') }}"> Appointment </a> </li>
            <li> <a href="{{ route('admin.requirements') }}"> Requirements </a> </li>
          </ul>
        </div>
        </li>
        <li><a href="{{ route('admin.faqs') }}">FAQs</a></li>
        <li><a class="active" href="{{ route('admin.about') }}">About Us</a></li>
        <li><a href="{{ route('admin.contact') }}">Contact Us</a></li>
      </ul>
    </div>

    <div class="search-container">
      <input type="text" placeholder="Search" />
      <i class="fa fa-search"></i>
    </div>

    <img src="{{ asset('storage/assets/city_of_mandaluyong_logo.png') }}" alt="City of Mandaluyong Logo" class="user-icon" onclick="toggleDropdown()" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; object-position: center; border: 2px solid #426DDC; margin-right: 23px;">
    <div id="accountDropdown">
      <div style="padding: 16px 0 8px 0; text-align: center;">
        <div style="font-size: 40px; color: #e0e0e0; margin-bottom: 4px;">
          <img src="{{ asset('storage/assets/city_of_mandaluyong_logo.png') }}" alt="City of Mandaluyong Logo" class="user-icon" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; object-position: center; border: 2px solid #426DDC; margin-left:15px;">
        </div>
        <div style="font-weight: bold; font-size: 18px;">Admin</div>
        <div style="font-size: 14px; color: #757575; word-break: break-all;">city.registrar@<br>mandaluyong.gov.ph</div>
      </div>
      <a href="{{ route('admin.logout') }}" id="logoutLink">Logout</a>
    </div>

    <button class="menu-toggle"> </button>
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
    function toggleDropdown() {
      document.getElementById("accountDropdown").classList.toggle("show");
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
