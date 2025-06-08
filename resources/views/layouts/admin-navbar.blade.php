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
            height: 65px;
            z-index: 1000;
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
            font-weight: bold;
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
            transition: all 0.3s ease;
        }

        .menu ul li a[href="#"] {
            cursor: pointer;
        }

        .menu ul li a[href="#"]:hover {
            color: #426DDC;
        }

        .dropdown_menuuu.show {
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
            transition: all 0.3s ease;
            margin: 0;
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
            transition: color 0.3s ease;
        }

        .dropdown_menuuu ul li a:hover {
            color: #426DDC;
        }

        #accountDropdown {
            display: none;
            position: absolute;
            background-color: #fff;
            border-radius: 8px;
            right: 20px;
            top: 65px;
            min-width: 200px;
            z-index: 9999;
            padding: 0;
            font-weight: 500;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: 1px solid #e5e7eb;
            transform-origin: top right;
            transition: all 0.2s ease-in-out;
        }

        #accountDropdown.show {
            display: block;
            animation: dropdownFade 0.2s ease-in-out;
        }

        @keyframes dropdownFade {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #accountDropdown .profile-header {
            padding: 16px;
            border-bottom: 1px solid #e5e7eb;
            text-align: center;
        }

        #accountDropdown .profile-image {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            object-position: center;
            border: 2px solid #426DDC;
            margin: 0 auto 8px;
        }

        #accountDropdown .profile-name {
            font-size: 16px;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 4px;
        }

        #accountDropdown .profile-email {
            font-size: 13px;
            color: #6b7280;
            word-break: break-all;
        }

        #accountDropdown a {
            display: block;
            padding: 12px 16px;
            color: #4b5563;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.2s ease;
        }

        #accountDropdown a:hover {
            background-color: #f3f4f6;
            color: #426DDC;
        }

        #accountDropdown a.logout-link {
            color: #ef4444;
            border-top: 1px solid #e5e7eb;
        }

        #accountDropdown a.logout-link:hover {
            background-color: #fee2e2;
            color: #dc2626;
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

        .user-icon {
            font-size: 28px;
            color: #333;
            margin-right: 23px;
            cursor: pointer;
            transition: color 0.3s ease;
            position: relative;
        }

        .user-icon:hover {
            color: #426DDC;
        }

        /* Mobile Responsive Styles */
        @media screen and (max-width: 1000px) {
            nav {
                padding: 0 15px;
            }

            nav button {
                display: block;
                width: 30px;
                height: 25px;
                position: absolute;
                right: 20px;
                top: 20px;
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
                left: 0;
                right: 0;
                transition: 0.5s;
                overflow: hidden;
            }

            nav .menu ul {
                padding: 0;
                margin: 0;
                list-style: none;
                width: 100%;
            }

            nav .menu.expand-mobile {
                height: 700px;
                width: 100%;
            }

            nav .menu ul li {
                width: 100%;
                display: block;
                font-size: 1rem;
                text-align: left;
                padding: 10px 15px;
                box-sizing: border-box;
                margin-right: 0;
            }

            .dropdown_menuuu {
                position: static;
                width: 100%;
                min-width: 100%;
                margin-left: 0;
                box-shadow: none;
                border-top: 1px solid #eee;
                display: none;
                padding: 0;
            }

            .menu.expand-mobile .dropdown_menuuu {
                display: block;
            }

            .dropdown_menuuu ul {
                margin-left: 0;
                width: 100%;
            }

            .dropdown_menuuu ul li {
                width: 100%;
                padding: 10px 15px;
                margin: 0;
                border-left: 3px solid transparent;
            }

            .dropdown_menuuu ul li:hover {
                border-left: 3px solid #426DDC;
                background-color: #f5f5f5;
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
                position: absolute;
                right: 20px;
                top: 20px;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                font-size: 24px;
                color: #333;
            }

            nav .menu-toggle:hover {
                color: #426DDC;
            }

            .form {
                display: none;
            }

            nav .menu ul li.mobile-only {
                display: block !important;
                width: 100%;
                text-align: left;
                padding: 10px 15px;
                border-top: 1px solid #eee;
            }

            nav .menu ul li.mobile-only a {
                color: #333;
                text-decoration: none;
                font-size: 16px;
                display: block;
                width: 100%;
            }

            nav .menu ul li.mobile-only a:hover {
                color: #426DDC;
            }

            nav .menu ul li.mobile-only a.logout-link {
                color: #ef4444;
            }

            nav .menu ul li.mobile-only a.logout-link:hover {
                color: #dc2626;
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="image-container">
            <a href="{{ route('admin.homepage') }}">
                <img src="{{ asset('storage/assets/civil_registry_logo.png') }}">
            </a>
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
                <li class="mobile-only" style="display: none;">
                    <a href="{{ route('admin.logout') }}" class="logout-link">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
        <div class="nav-right">
            <img src="{{ asset('storage/assets/city_of_mandaluyong_logo.png') }}" 
                 alt="City of Mandaluyong Logo" 
                 class="user-icon" 
                 id="profileIcon"
                 style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; object-position: center; border: 2px solid #426DDC;">
            
            <div id="accountDropdown">
                <div class="profile-header">
                    <img src="{{ asset('storage/assets/city_of_mandaluyong_logo.png') }}" 
                         alt="Profile" 
                         class="profile-image">
                    <div class="profile-name">
                        @if(Auth::guard('employee')->user()->username === 'admin1' || Auth::guard('employee')->user()->username === 'Admin1')
                            Admin
                        @else
                            {{ Auth::guard('employee')->user()->first_name }} {{ Auth::guard('employee')->user()->last_name }}
                        @endif
                    </div>
                    <div class="profile-email">city.registrar@<br>mandaluyong.gov.ph</div>
                </div>
                <a href="{{ route('admin.logout') }}" class="logout-link">
                    <i class="fas fa-sign-out-alt mr-2"></i>
                    Logout
                </a>
            </div>
        </div>

        <button class="menu-toggle"></button>
    </nav>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            try {
                // Profile dropdown functionality
                const profileIcon = document.getElementById('profileIcon');
                const dropdown = document.getElementById('accountDropdown');

                if (profileIcon && dropdown) {
                    profileIcon.addEventListener('click', function(e) {
                        e.stopPropagation();
                        dropdown.classList.toggle('show');
                    });

                    document.addEventListener('click', function(e) {
                        if (!profileIcon.contains(e.target) && !dropdown.contains(e.target)) {
                            dropdown.classList.remove('show');
                        }
                    });

                    document.addEventListener('keydown', function(e) {
                        if (e.key === 'Escape') {
                            dropdown.classList.remove('show');
                        }
                    });

                    dropdown.addEventListener('click', function(e) {
                        e.stopPropagation();
                    });
                }

                // Services dropdown functionality
                const servicesLink = document.querySelector('.menu ul li a[href="#"]');
                const servicesDropdown = document.querySelector('.dropdown_menuuu');
                
                console.log('servicesLink:', servicesLink);
                console.log('servicesDropdown:', servicesDropdown);
                
                if (servicesLink && servicesDropdown) {
                    // Handle click on services link
                    servicesLink.addEventListener('click', function(e) {
                        e.preventDefault();
                        servicesDropdown.classList.toggle('show');
                    });

                    // Close dropdown when clicking outside
                    document.addEventListener('click', function(e) {
                        if (!servicesLink.contains(e.target) && !servicesDropdown.contains(e.target)) {
                            servicesDropdown.classList.remove('show');
                        }
                    });

                    // Handle mobile menu
                    const menuToggle = document.querySelector('.menu-toggle');
                    const menu = document.querySelector('.menu');
                    
                    if (menuToggle && menu) {
                        menuToggle.addEventListener('click', function() {
                            menu.classList.toggle('expand-mobile');
                            menuToggle.classList.toggle('expand-icon');
                            
                            // Show/hide mobile-only menu items
                            const mobileItems = document.querySelectorAll('.mobile-only');
                            mobileItems.forEach(item => {
                                item.style.display = menu.classList.contains('expand-mobile') ? 'block' : 'none';
                            });
                            
                            // Reset dropdown state when mobile menu is closed
                            if (!menu.classList.contains('expand-mobile')) {
                                servicesDropdown.classList.remove('show');
                            }
                        });
                    }
                }
            } catch (e) {
                console.error(e);
            }
        });
    </script>
</body>
</html> 