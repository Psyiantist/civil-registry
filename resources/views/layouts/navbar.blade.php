<nav>
    <div class="image-container">
        <img src="{{ asset('storage/assets/civil_registry_logo.png') }}"> 
    </div>

    <div class="logo-name">
        <p> Mandaluyong City <br> Civil Registry</p> 
    </div>

    <div class="menu">
        <ul>
            <li> <a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}"> Home </a> </li>
            <li> <a class="{{ request()->is('faqs') ? 'active' : '' }}" href="{{ route('faqs') }}"> FAQs </a> </li>
            <li> <a class="{{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}"> About Us </a> </li>
            <li> <a class="{{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}"> Contact Us </a> </li>
        </ul>
    </div>

    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search">
        <i class="fa fa-search" onclick="performSearch()"> </i>
    </div>

    <i class="fas fa-user-circle user-icon" onclick="toggleDropdown()"></i>
</div>

<button class="menu-toggle"> </button>
</nav>

<style>
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

    nav .search-container .fa-search {
        position: absolute;
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