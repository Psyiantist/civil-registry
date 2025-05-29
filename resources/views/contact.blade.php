<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/x-icon" href="{{ asset('storage/assets/civil_registry_logo.png') }}">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
	<title> Contact Us Page </title>
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<style type="text/css">
    .contact-page {
      font-family: 'Poppins';
      margin: 0;
      padding: 0;
      box-sizing: border-box;
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


    .contact-page .contact-section {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      padding: 80px 10%;
      align-items: center;
      background-color: #d8e4f0;
    }

    .contact-page .contact-text {
      max-width: 500px;
    }

    .contact-page .contact-text h1 {
      font-size: 30px;
      color: #2c3e50;
      margin-bottom: 20px;
    }

    .contact-page .contact-text p {
      font-size: 16px;
      color: #555;
      line-height: 1.6;
    }

    .contact-page .contact-form {
      background: #fff;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
    }

    .contact-page .contact-form h2 {
      margin-bottom: 20px;
      font-size: 24px;
      color: #2c3e50;
    }

    .contact-page .contact-form input,
    .contact-page .contact-form textarea {
      width: 100%;
      padding: 12px 16px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
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
      font-size: 16px;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-family: "Poppins", sans-serif;
      transition: background 0.3s, transform 0.2s;
    }

    .contact-page .contact-form button:hover {
      background: #274aa6;
      transform: scale(1.02);
    }

    .contact-page .contact-info-box {
      margin-top: 30px;
      padding: 20px;
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
      font-weight: bold;
      font-size: 20px;
      color: #2c3e50;
    }

    .contact-page .contact-info-box p {
      font-size: 14px;
      color: #333;
      margin-bottom: 8px;
    }

    @media(max-width: 1000px) {
      .contact-page .contact-section {
        display: grid;
        gap: 40px;
        padding: 80px 10%;
        align-items: center;
        background-color: #d8e4f0;
      }
    }

    .contact-page footer {
      background: #fff;
      padding-top: 20px;
    }

    .contact-page .container {
      margin-left: 20px;
      margin-right: 20px;
      height: 110px;
      width: 1140px;
      display: flex;
      justify-content: space-between;
    }

    .contact-page .footer-content {
      margin-left: 20px;
      margin-right: 20px;
      width: 33.3%;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      margin: 0 10px;
    }

    .contact-page footer iframe {
      margin-left: 20px;
      width: 100%;
      height: 100%;
      border: 0;
      margin: 0;
    }

    .contact-page .map-container {
      flex-grow: 1;
      height: 100%;
    }

    .contact-page h3 {
      margin-left: 20px;
      margin-right: 20px;
      font-weight: 100;
      font-size: 16px;
      margin-bottom: 5px;
      text-align: center;
      color: #3247df;
    }

    .contact-page .footer-content p {
      width: 190px;
      margin-left: 5px;
      padding: 2px;
    }

    .contact-page .social-icons {
      text-align: center;
      padding: 0;
    }

    .contact-page .social-icons li {
      display: inline-block;
      text-align: center;
      padding: 5px;
    }

    .contact-page .social-icons i {
      color: rgb(3, 3, 3);
      font-size: 25px;
    }

    .contact-page a {
      color: #333;
      text-decoration: none;
    }

    .contact-page a:hover {
      color: #3247df;
    }

    .contact-page .social-icons i:hover {
      color: #3247df;
    }

    .contact-page .bottom-bar {
      background: #3247df;
      text-align: center;
      padding: 0px 0;
      margin-top: 50px;
    }

    .contact-page .bottom-bar p {
      color: #f7f7f7;
      margin: 0;
      font-size: 16px;
      padding: 8px;
    }

    @media (max-width: 900px) {
      .contact-page .contact-section {
        grid-template-columns: 1fr;
        padding: 40px 20px;
      }

      .contact-page .container {
        display: block;
        height: 400px;
      }
    }
  </style>
</head>

<body class="contact-page">
	@include('layouts.public-navbar')

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

        <form class="contact-form" method="POST" action="{{ route('contact.send') }}" id="contactForm">
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
            <textarea rows="5" name="message" placeholder="Your Message" required></textarea>
            <center> <button type="submit"> Submit </button> </center>
        </form>
      </section>

      @include('layouts.footer')

<script type="text/javascript">
    // Remove the form submission handler
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
        alert("Please login or register your acount first.");
             dropdown.classList.toggle("show");
        }

</script>

</body>
</html>
