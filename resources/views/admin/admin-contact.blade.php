<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Contact Us - Admin View</title>
    <link rel="icon" type="image/x-icon" href="/storage/assets/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    
    <!-- External JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

        /* Contact Section */
        .contact-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            padding: 80px 10%;
            background-color: #d8e4f0;
            flex-grow: 1;
            align-items: stretch;
            min-height: 600px;
        }

        .contact-text {
            max-width: 500px;
            display: flex;
            flex-direction: column;
        }

        .contact-text h1 {
            font-size: 30px;
            color: #2c3e50;
            margin-bottom: 20px;
            text-align: center;
        }

        .contact-text p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .contact-info-box {
            background-color: #f9f9ff;
            border-radius: 12px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 20px;
        }

        .contact-info-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(66, 109, 220, 0.25);
        }

        .contact-info-box h3 {
            margin-bottom: 20px;
            font-size: 20px;
            color: #2c3e50;
        }

        .contact-form {
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .contact-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #2c3e50;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group:last-child {
            margin-bottom: 0;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #2c3e50;
        }

        .form-group input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.3s;
            margin-bottom: 10px;
        }

        .form-group input:focus {
            border-color: #426DDC;
            outline: none;
        }

        .form-group button {
            padding: 12px 24px;
            background: #426DDC;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            width: 100%;
        }

        .form-group button:hover {
            background: #274aa6;
            transform: scale(1.02);
        }

        /* Make the right column (feedback) fill the height */
        .contact-section > .contact-form {
            display: flex;
            flex-direction: column;
            height: 100%;
            min-height: 400px;
        }

        .contact-section > .contact-form h2 {
            flex-shrink: 0;
        }

        .feedback-scroll-container {
            flex: 1 1 auto;
            max-height: unset;
            min-height: 0;
            overflow-y: auto;
            padding-right: 15px;
            margin-top: 15px;
        }

        .feedback-scroll-container::-webkit-scrollbar {
            width: 6px;
        }

        .feedback-scroll-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }

        .feedback-scroll-container::-webkit-scrollbar-thumb {
            background: #426DDC;
            border-radius: 4px;
        }

        .feedback-scroll-container::-webkit-scrollbar-thumb:hover {
            background: #274aa6;
        }

        .feedback-item {
            margin-bottom: 15px;
            padding: 12px;
            background: #f9f9ff;
            border-radius: 8px;
            transition: transform 0.2s ease;
        }

        .feedback-item:hover {
            transform: translateY(-2px);
        }

        .feedback-header {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 8px;
        }

        .feedback-icon {
            font-size: 24px;
            color: #426DDC;
        }

        .feedback-name {
            font-weight: bold;
            color: #2c3e50;
            font-size: 14px;
        }

        .feedback-email {
            color: #888;
            font-size: 13px;
            margin-left: 8px;
        }

        .feedback-message {
            background: #e6f0fa;
            color: #222;
            border-radius: 8px;
            padding: 10px 15px;
            font-size: 14px;
            font-style: italic;
            line-height: 1.4;
        }

        /* Footer Styles */
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

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                gap: 20px;
            }

            .footer-content {
                text-align: center;
            }

            .social-icons {
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav>
        <div class="image-container">
            <img src="{{ asset('storage/assets/civil_registry_logo.png') }}"> </div>

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

                <li> <a href="{{ route('admin.faqs') }}"> FAQs </a> </li>
                <li> <a href="{{ route('admin.about') }}"> About Us </a> </li>
                <li> <a href="{{ route('admin.contact') }}" class="active"> Contact Us </a> </li>
            </ul>
        </div>

        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Search">
            <i class="fa fa-search" onclick="performSearch()"> </i>
        </div>

        <img src="{{ asset('storage/assets/city_of_mandaluyong_logo.png') }}" alt="City of Mandaluyong Logo" class="user-icon" onclick="toggleDropdown()" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; object-position: center; border: 2px solid #426DDC; margin-right: 23px;">
        <div id="accountDropdown">
            <div style="padding: 16px 0 8px 0; text-align: center;">
                <div style="font-size: 40px; color: #e0e0e0; margin-bottom: 4px;">
                <img src="{{ asset('storage/assets/city_of_mandaluyong_logo.png') }}" alt="City of Mandaluyong Logo" class="user-icon" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; object-position: center; border: 2px solid #426DDC; margin-left:60px;">
                </div>
                <div style="font-weight: bold; font-size: 18px;">Admin</div>
                <div style="font-size: 14px; color: #757575; word-break: break-all;">city.registrar@<br>mandaluyong.gov.ph</div>
            </div>
            <a href="{{ route('admin.logout') }}" id="logoutLink">Logout</a>
        </div>

        <button class="menu-toggle"> </button>
    </nav>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="contact-text">
            <h1>We'd love to hear from you!</h1>
            <p>If you have any questions or feedback, feel free to contact us using the form. We're here to help you!</p>
            
            <div class="contact-info-box">
                <h3><i class="fas fa-thumbtack"></i> Contact Information</h3>
                
                <form class="contact-form" method="POST" action="{{ route('contact.update') }}">
                    @csrf
                    <input type="hidden" name="field" value="address">
                    <div class="form-group">
                        <label for="address"><strong>Address:</strong></label>
                        <input type="text" id="address" name="address" value="{{ $contact->address ?? '2/F Left Wing Executive Building City Government Complex, Maysilo Circle, Plainview, Mandaluyong City' }}" required>
                        <button type="submit">Save</button>
                    </div>
                </form>

                <form class="contact-form" method="POST" action="{{ route('contact.update') }}">
                    @csrf
                    <input type="hidden" name="field" value="phone">
                    <div class="form-group">
                        <label for="phone"><strong>Phone:</strong></label>
                        <input type="text" id="phone" name="phone" value="{{ $contact->phone ?? 8533-28-21 }}" required>
                        <button type="submit">Save</button>
                    </div>
                </form>

                <form class="contact-form" method="POST" action="{{ route('contact.update') }}">
                    @csrf
                    <input type="hidden" name="field" value="email">
                    <div class="form-group">
                        <label for="email"><strong>Email:</strong></label>
                        <input type="email" id="email" name="email" value="{{ $contact->email ?? 'city.registrar@mandaluyong.gov.ph' }}" required>
                        <button type="submit">Save</button>
                    </div>
                </form>

                <form class="contact-form" method="POST" action="{{ route('contact.update') }}">
                    @csrf
                    <input type="hidden" name="field" value="office_hours">
                    <div class="form-group">
                        <label for="office_hours"><strong>Office Hours:</strong></label>
                        <input type="text" id="office_hours" name="office_hours" value="{{ $contact->office_hours ?? 'Monday to Friday: 8:00 AM - 5:00 PM' }}" required>
                        <button type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="contact-form">
            <h2>User Feedback</h2>
            <div class="feedback-scroll-container">
                @forelse($feedbacks as $feedback)
                    <div class="feedback-item">
                        <div class="feedback-header">
                            <i class="fas fa-user-circle feedback-icon"></i>
                            <span class="feedback-name">{{ $feedback->name }}</span>
                            <span class="feedback-email">{{ $feedback->email }}</span>
                            <form method="POST" action="{{ route('admin.contact.feedback.delete', $feedback->id) }}" style="display:inline; margin-left:8px;" onsubmit="return confirm('Are you sure you want to delete this feedback?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background: none; border: none; cursor: pointer; color: #f87171; font-size: 18px; margin-left: 4px;" title="Delete Feedback">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                        <div class="feedback-message">"{{ $feedback->feedback }}"</div>
                    </div>
                @empty
                    <div style="text-align:center; color:#888; font-size:16px; margin-top:20px;">
                        No feedbacks yet.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Footer -->
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
