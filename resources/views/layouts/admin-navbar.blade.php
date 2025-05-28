<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/assets/civil_registry_logo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style type="text/css">
        body {
            font-family: 'Poppins';
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

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
            transition: none;
        }

        .menu ul li:hover .dropdown_menuuu {
            display: block;
        }

        .dropdown_menuuu:hover {
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

        nav .search-container .fa-search,
        button.search-button {
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

        /* Mobile Responsive Styles */
        @media screen and (max-width: 1000px) {
            nav {
                padding: 0 15px;
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

            .form {
                display: none;
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="image-container">
            <img src="{{ asset('storage/assets/civil_registry_logo.png') }}">
        </div>

        <div class="logo-name">
            <p>Mandaluyong City<br>Civil Registry</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('admin.homepage') }}" class="{{ Request::is('admin/homepage') ? 'active' : '' }}">Home</a></li>
                <li>
                    <a href="#" class="{{ Request::is('admin/appointment*') || Request::is('admin/requirements*') ? 'active' : '' }}">Services <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown_menuuu">
                        <ul>
                            <li><a href="{{ route('admin.appointment') }}" class="{{ Request::is('admin/appointment*') ? 'active' : '' }}">Appointment</a></li>
                            <li><a href="{{ route('admin.requirements') }}" class="{{ Request::is('admin/requirements*') ? 'active' : '' }}">Requirements</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="{{ route('admin.faqs') }}" class="{{ Request::is('admin/faqs*') ? 'active' : '' }}">FAQs</a></li>
                <li><a href="{{ route('admin.about') }}" class="{{ Request::is('admin/about*') ? 'active' : '' }}">About Us</a></li>
                <li><a href="{{ route('admin.contact') }}" class="{{ Request::is('admin/contact*') ? 'active' : '' }}">Contact Us</a></li>
            </ul>
        </div>

        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Search">
            <i class="fa fa-search" onclick="performSearch()"></i>
        </div>

        <img src="{{ asset('storage/assets/city_of_mandaluyong_logo.png') }}" alt="City of Mandaluyong Logo" class="user-icon" onclick="toggleDropdown()" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; object-position: center; border: 2px solid #426DDC; margin-right: 23px;">
        <div id="accountDropdown">
            <div style="padding: 16px 0 8px 0; text-align: center;">
                <div style="font-size: 40px; color: #e0e0e0; margin-bottom: 4px;">
                    <img src="{{ asset('storage/assets/city_of_mandaluyong_logo.png') }}" alt="City of Mandaluyong Logo" class="user-icon" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; object-position: center; border: 2px solid #426DDC; margin-right: 10px; margin-left: 10px;">
                </div>
                <div style="font-weight: bold; font-size: 18px;">Admin</div>
                <div style="font-size: 14px; color: #757575; word-break: break-all;">city.registrar@<br>mandaluyong.gov.ph</div>
            </div>
            <a href="{{ route('admin.logout') }}" id="logoutLink">Logout</a>
        </div>

        <button class="menu-toggle"></button>
    </nav>

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
            }
        }

        document.getElementById("searchInput").addEventListener("keypress", function(e) {
            if (e.key === "Enter") {
                performSearch();
            }
        });

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
    </script>
</body>
</html> 