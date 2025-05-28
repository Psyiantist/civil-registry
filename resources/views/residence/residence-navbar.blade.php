<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="/storage/assets/favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .content-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
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

        @media(max-width: 1000px) {
            nav button {
                display: block;
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
    </style>
</head>
<body>
    <div class="content-wrapper">
        <nav>
            <div class="image-container">
                <img src="/storage/assets/logo.png" alt="Logo">
            </div>
            <div class="logo-name">
                <a href="/residence/homepage">Civil Registry</a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="/residence/homepage" class="{{ request()->is('residence/homepage') ? 'active' : '' }}">Home</a></li>
                    <li><a href="/residence/about-us" class="{{ request()->is('residence/about-us') ? 'active' : '' }}">About</a></li>
                    <li><a href="/residence/contact-us" class="{{ request()->is('residence/contact-us') ? 'active' : '' }}">Contact</a></li>
                    <li><a href="/residence/faqs" class="{{ request()->is('residence/faqs') ? 'active' : '' }}">FAQs</a></li>
                    <li><a href="/residence/appointment" class="{{ request()->is('residence/appointment') ? 'active' : '' }}">Appointment</a></li>
                    <li><a href="/residence/requirements" class="{{ request()->is('residence/requirements') ? 'active' : '' }}">Requirements</a></li>
                </ul>
            </div>
            <div class="search-container">
                <input type="text" placeholder="Search...">
                <i class="fas fa-search"></i>
            </div>
            <div class="user-icon" onclick="toggleDropdown()">
                <i class="fas fa-user"></i>
            </div>
            <div id="accountDropdown">
                <a href="/residence/profile">Profile</a>
                <a href="/logout">Logout</a>
            </div>
        </nav>
        @yield('content')
    </div>
    @include('layouts.footer')
</body>
</html> 