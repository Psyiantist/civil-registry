<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="/storage/assets/favicon.ico">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
	<title> Contact Us Page - Residence View </title>
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<style>
    .contact-page {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: poppins;
    }

    .contact-page nav{
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
      font-family: poppins;
    }

    .contact-page .image-container img {
      width: 50px;
      height: 45px;
      margin-top: 5px;
      margin-left: 20px;
      position: relative;
      border-radius: 50%;
    }

    .contact-page .logo-name {
      font-size: 15px;
      margin-left: 30px;
      white-space: nowrap;
      font-family: "Poppins", sans-serif;
    }

    .contact-page .logo-name a {
      margin-left: -16px;
      font-family: "Poppins", sans-serif;
    }

    .contact-page nav button {
      display: none;
    }

    .contact-page nav .menu {
      width: 100%;            
      margin-top: -5px;
      margin-left: 20px;
      text-align: center;     
      justify-content: center; 
      align-items: center;    
    }

    .contact-page nav .menu ul li {
      padding: -5px;
      font-size: 17px;
      list-style: none;
      font-weight: bold;
      margin-right: 30px; 
      display: inline-block;
      position: relative;
      font-family: "Poppins", sans-serif;
    }

    .contact-page nav .menu ul:nth-child(2) li {
      top: -8px;
      left: 10px;
      color: #757575;
      position: relative;
    }

    .contact-page nav .menu ul li a{
      color: black;
      text-decoration: none;
    }

    .contact-page nav .menu .active,
    .contact-page .a:hover {
     color: #426DDC;
     font-size: 20px;
    }

    .contact-page nav .menu ul li a:hover {
      color: #426DDC;
      transition: 0.3s ease; 
    }

    .contact-page nav form {
      left: 25%;
      top: 65px;
      width: 60%;
      position: relative;
    }

    .contact-page nav form input {
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

    .contact-page nav form input::placeholder {
      font-size: 16px;
      font-family: "Poppins", sans-serif;
    }

    .contact-page .dropdown_menuuu {
      display: none;
      position: absolute;
      left: -55%;
      top: 100%;
      min-height: 90px;
      background-color: white;
      z-index: 1000;
      min-width: 130px;
    }

    .contact-page .menu ul li:hover .dropdown_menuuu,
    .contact-page .dropdown_menuuu:hover {
       display: block;
       border-radius: 5px;
       font-size: 18px;
    }

    .contact-page .dropdown_menuuu ul {
       list-style: none;
       padding: 0;
       margin-top: 15px;
       margin-left: 25px; 
       margin-bottom: 9px;
    }

    .contact-page .dropdown_menuuu ul li {
       width: 130px;
       padding: 7px;
       white-space: nowrap;
    }

    .contact-page #accountDropdown {
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

    .contact-page #accountDropdown.show {
      display: block;
    }

    .contact-page #accountDropdown a {
      display: block;
      padding: 10px 16px;
      color: #333;
      text-align: center;
      text-decoration: none;
      font-size: 14px;
      font-family: "Poppins", sans-serif;
    }

    .contact-page #accountDropdown a:hover {
    color: #426DDC;
    transition: 0.3s ease; 
    }

    .contact-page nav .search-container {
      position: relative;
      margin-left: auto;
      margin-right: 20px;
      display: flex;
      align-items: center;
    }

    .contact-page nav .search-container input[type="text"] {
      padding: 8px 35px 8px 15px;
      border-radius: 20px;
      border: 1px solid #ccc;
      font-family: "Poppins", sans-serif;
      font-size: 14px;
      outline: none;
      transition: all 0.3s ease;
      width: 180px;
    }

    .contact-page nav .search-container input[type="text"]:focus {
      border-color: #426DDC;
      box-shadow: 0 0 5px rgba(66, 109, 220, 0.5);
    }

    .contact-page nav .search-container .fa-search,  button.search-button {
      position: absolute;
      border: none;
      background: none;
      right: 12px;
      color: rgb(0, 0, 0);
      font-size: 16px;
      pointer-events: auto;
    }

    .contact-page nav .search-container .fa-search:hover {
      color: #426DDC;
      transition: 0.3s ease; 
    }

    .contact-page nav .user-icon {
      font-size: 28px;
      color: #333;
      margin-right: 23px;
      cursor: pointer;
      transition: color 0.3s ease;
    }

    .contact-page nav .user-icon:hover {
      color: #426DDC;
    }

    .contact-page .contact-section {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      padding: 80px 10%;
      align-items: start;
      background-color: #d8e4f0;
      min-height: calc(100vh - 65px);
    }

    .contact-page .contact-text {
      max-width: 500px;
    }

    .contact-page .contact-text h1 {
      font-size: clamp(24px, 4vw, 30px);
      color: #2c3e50;
      margin-bottom: 20px;
      text-align: center;
    }

    .contact-page .contact-text p {
      font-size: clamp(14px, 2vw, 16px);
      color: #555;
      line-height: 1.6;
      margin-bottom: 20px;
    }

    .contact-page .contact-form {
      background: #fff;
      padding: clamp(20px, 4vw, 40px);
      border-radius: 16px;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
      width: 100%;
    }

    .contact-page .contact-form h2 {
      margin-bottom: 20px;
      font-size: clamp(20px, 3vw, 24px);
      color: #2c3e50;
      text-align: center;
    }

    .contact-page .contact-form input,
    .contact-page .contact-form textarea {
      width: 100%;
      padding: 12px 16px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: clamp(13px, 1.8vw, 14px);
      font-family: "Poppins", sans-serif;
      transition: border-color 0.3s;
    }

    .contact-page .contact-form input:focus,
    .contact-page .contact-form textarea:focus {
      border-color: #426DDC;
      outline: none;
    }

    .contact-page .contact-form button {
      padding: 12px 24px;
      background: #426DDC;
      color: #fff;
      font-size: clamp(14px, 2vw, 16px);
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s, transform 0.2s;
      width: 100%;
      max-width: 200px;
    }

    .contact-page .contact-form button:hover {
      background: #274aa6;
      transform: scale(1.02);
    }

    .contact-page .contact-info-box {
      margin-top: 30px;
      padding: clamp(15px, 3vw, 20px);
      border-radius: 12px;
      background-color: #f9f9ff;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .contact-page .contact-info-box:hover {
      transform: translateY(-5px) scale(1.02);
      box-shadow: 0 12px 25px rgba(66, 109, 220, 0.25);
    }

    .contact-page .contact-info-box h3 {
      margin-bottom: 12px;
      font-size: clamp(18px, 2.5vw, 20px);
      font-weight: bold;
      color: #2c3e50;
    }

    .contact-page .contact-info-box p {
      font-size: clamp(13px, 1.8vw, 14px);
      color: #333;
      margin-bottom: 8px;
    }

    .contact-page .office-hours-note {
      margin-top: 20px;
      padding: clamp(10px, 2vw, 15px);
      background-color: #f8f9fa;
      border-radius: 8px;
      text-align: center;
      color: #666;
      font-size: clamp(12px, 1.6vw, 14px);
      border-left: 4px solid #426DDC;
    }

    .contact-page footer {
      background: #fff;
      padding: 20px 0 5px;
      width: 100%;
    }

    .contact-page .container {
      margin: 0 auto;
      padding: 0 20px;
      max-width: 1140px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 20px;
    }

    .contact-page .footer-content {
      flex: 1;
      min-width: 250px;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .contact-page .map-container {
      width: 100%;
      height: 200px;
      margin: 10px 0;
    }

    .contact-page footer iframe {
      width: 100%;
      height: 100%;
      border: 0;
    }

    .contact-page .social-icons {
      display: flex;
      justify-content: center;
      gap: 15px;
      padding: 0;
      list-style: none;
    }

    .contact-page .social-icons li {
      display: inline-block;
    }

    .contact-page .social-icons i {
      color: rgb(3, 3, 3);
      font-size: 25px;
      transition: color 0.3s ease;
    }

    .contact-page .social-icons i:hover {
      color: #3247df;
    }

    .contact-page .bottom-bar {
      background: #3247df;
      text-align: center;
      padding: 8px 0;
      margin-top: 20px;
    }

    .contact-page .bottom-bar p {
      color: #f7f7f7;
      margin: 0;
      font-size: 14px;
      padding: 8px;
    }

    @media (max-width: 900px) {
      .contact-page .contact-section {
        grid-template-columns: 1fr;
        padding: 40px 20px;
        gap: 30px;
      }

      .contact-page .contact-text {
        max-width: 100%;
        text-align: center;
      }

      .contact-page .contact-form {
        max-width: 600px;
        margin: 0 auto;
      }
    }

    @media (max-width: 480px) {
      .contact-page .contact-section {
        padding: 20px 15px;
      }

      .contact-page .contact-form {
        padding: 20px;
      }

      .contact-page .contact-info-box {
        padding: 15px;
      }

      .contact-page .contact-form button {
        width: 100%;
      }
    }

    @media (max-width: 768px) {
      .contact-page .container {
        flex-direction: column;
        align-items: center;
      }

      .contact-page .footer-content {
        width: 100%;
        margin: 10px 0;
      }

      .contact-page .map-container {
        height: 150px;
      }
    }

  </style>
</head>

<body class="contact-page">
  @include('layouts.residence-navbar')

  <section class="contact-section">
        <div class="contact-text">
          <h1><center> We'd love to hear from you! </center> </h1>
          <p>If you have any questions or feedback, feel free to contact us using the form. We're here to help you!</p>
          <div class="contact-info-box">
            <h3> <i class="fas fa-thumbtack" aria-hidden="true"></i> Contact Information</h3>
            <p><strong>Address:</strong> {{ $contact->address ?? '2/F Left Wing Executive Building City Government Complex, Maysilo Circle, Plainview, Mandaluyong City' }}</p>
            <p><strong>Phone:</strong> {{ $contact->phone ?? '8533-28-21' }}</p>
            <p><strong>Email:</strong> {{ $contact->email ?? 'city.registrar@mandaluyong.gov.ph' }}</p>
            <p><strong>Office Hours:</strong> {{ $contact->office_hours ?? 'Monday to Friday: 8:00 AM - 5:00 PM' }}</p>
          </div>
          
        </div>
    
        <form class="contact-form" method="POST" action="{{ route('contact.sendFeedback') }}">
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
            <h2> <center> Send us a message: </center> </h2>
            <input type="text" name="name" placeholder="Your Name" required />
            <input type="email" name="email" placeholder="Your Email" required />
            <textarea name="message" rows="5" placeholder="Your Message" required> </textarea>
            <center> <button type="submit"> Submit </button> </center>
            <div class="office-hours-note" style="margin-top: 20px; padding: 15px; background-color: #f8f9fa; border-radius: 8px; text-align: center; color: #666; font-size: 14px; border-left: 4px solid #426DDC;">
                <i class="fas fa-clock" style="color: #426DDC; margin-right: 5px;"></i>
                Note: Admin will only respond to messages during office hours: Monday to Friday, 8:00 AM–5:00 PM. Thank you!
            </div>
        </form>
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

</body>
</html>
