<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/x-icon" href="{{ asset('build/assets/civil_registry_logo.png') }}">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
	<title> Home Page - Admin View </title>
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<style type="text/css">

    body {
            font-family: 'Poppins';
        }
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    nav{
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

    nav form {
      left: 25%;
      top: 65px;
      width: 60%;
      position: relative;
    }

    nav form input {
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

    nav form input::placeholder {
      font-size: 16px;
      font-family: "Poppins", sans-serif;
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



    /* Main content below the NAV BAR */
		html, body {
      background-color: #d8e4f0;
      height: 100%; 
      margin: 0; 
      padding: 0; 
      overflow-x: hidden; 
    }

    section {
      width: 100vw;
      height: 90vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(rgba(90, 110, 130, 0.3), rgba(90, 110, 130, 0.3)),url('{{ asset('build/assets/appointment_bg.jpg') }}') center 40% fixed;
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      position: relative;
    }

    .details {
      margin-top: -130px;
    }

		h5 {
      color: white;
			font-size: 90px;
      margin-left: 5px;
			margin-top: 60px;
			font-weight: bolder;
      letter-spacing: 25px;
      text-shadow: 
               1px 1px 0px white,   
              -1px -1px 0px white, 
               1px -1px 0px white, 
              -1px 1px 0px white,
               0 0 50px black; 
			font-family: "Poppins", sans-serif;
    }

		h4 {
			color: white;
			font-size: 40px;
			margin-top: -25px;
      text-align: center;
			font-weight: bolder;
      text-shadow: 
               1px 1px 0px white,   
              -1px -1px 0px white, 
               1px -1px 0px white, 
              -1px 1px 0px white,
               0 0 50px black; 
      letter-spacing: 4px;
			font-family: "Poppins", sans-serif;
		}

    .details p {
      margin-top: 5px;
      color: black;
      font-size: 17px;
      font-weight: bold;
      margin-top: 10px;
      text-align: center;
      background-color: white;
      border-radius: 10px;
      font-family: "Poppins", sans-serif;
    }

    .learn-button {
      left: 230px;
      border: none;
      bottom: -40px; 
      color: black;
      cursor: pointer;
      font-size: 17px;
      font-weight: bold;
      padding: 10px 30px;
      border-radius: 10px;
      position: relative;  
      text-decoration: none;
      background-color: #f9f5ed;
      transform: translateX(-50%); 
      font-family: "Poppins", sans-serif;
      transition: background-color 0.3s ease;
    }
        
    .learn-button:hover {
      color: #426DDC;
      transition: 0.5s ease; 
      box-shadow: 0 0 7px white;
      background-color: #EAEAEA;
    }

    .announcement {
      background-color: #426DDC;
    }

    .announcement-section {
      max-width: 900px;
      margin: 30px auto;
      padding: 20px 30px;
      background-color: #ffffff;
      border-radius: 16px;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
      font-family: "Poppins", sans-serif;
      color: #333;
    }

    .announcement-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 2px solid #e0e0e0;
      padding-bottom: 10px;
      margin-bottom: 15px;
    }

    .announcement-header h2 {
      font-size: 24px;
      margin: 0;
    }

    #datetime {
      font-size: 15px;
      color: #666;
    }

    .announcement-body p {
      font-size: 16px;
      line-height: 1.6;
    }

    .slider-container {
      position: relative;
      width: 85%;                 
      max-width: 900px;            
      margin: 30px auto;
      overflow: hidden;
      border-radius: 16px;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
      background-color: white;
    }

    .slider {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .slide {
      min-width: 100%;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 32px 0 24px 0;
    }

    .slide img {
      width: 100%;
      max-width: 700px;
      height: auto;
      border-radius: 16px 16px 0 0;
      margin-bottom: 18px;
    }

    .announcement-text {
      width: 100%;
      max-width: 600px;
      margin: 0 auto;
      padding: 24px 32px;
      background: #fff;
      border-radius: 0 0 16px 16px;
      box-shadow: 0 2px 8px rgba(66, 109, 220, 0.07);
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .announcement-controls {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-bottom: 18px;
    }

    .file-input-row {
      display: flex;
      align-items: center;
      gap: 16px;
      margin-bottom: 0;
    }

    .custom-file-label {
      display: flex;
      align-items: center;
      background: #426DDC;
      color: white;
      padding: 8px 18px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 15px;
      position: relative;
      overflow: hidden;
    }

    .custom-file-label input[type="file"] {
      opacity: 0;
      position: absolute;
      left: 0; top: 0; width: 100%; height: 100%;
      cursor: pointer;
    }

    .file-name-display {
      color: #222;
      font-size: 15px;
    }

    .reset-button {
      margin-top: 18px;
      align-self: center;
      width: auto;
    }

    .editable-wrapper {
      display: flex;
      align-items: center;
      gap: 8px;
      justify-content: center;
      margin-bottom: 8px;
    }

    .announcement-text h2,
    .announcement-text p {
      text-align: center;
      width: 100%;
    }

    .prev, .next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      border: none;
      font-size: 26px;
      padding: 10px 16px;         
      border-radius: 10px;
      cursor: pointer;
      z-index: 10;
      transition: 0.3s ease;
    }

    .prev:hover, .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

    .prev {
      left: 15px;
      margin-top: -80px;
    }

     .next {
       right: 15px;
       margin-top: -80px;
    }

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



    /* Zoom-in screen orientation layout */
    @media(max-width: 1000px) {
    html, body {
     overflow-x: hidden;
     overflow-y: auto;
     width: 100%;
     max-width: 100%;
    }

    section {
      width: 100vw;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(rgba(90, 110, 130, 0.3), rgba(90, 110, 130, 0.3)),url('appointment_bg.jpg') center 40% fixed;
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      position: relative;
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

    nav  button:before,
    nav  button:after {
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

    .form {
      display: none;
    }
    }

    [contenteditable="true"]:focus {
      border-radius: 10px;
      outline: 3px solid black;
      box-shadow: 0 0 20px white;
      cursor: text;
    }

    [contenteditable="true"]:hover {
     outline: 3px solid white;
     box-shadow: 0 0 20px black;
     border-radius: 10px;
     cursor: text;
    }

    .editable-wrapper {
      display: flex;
      align-items: center;
      position: relative;
      justify-content: center;
      gap: 8px; 
    }

    .edit-icon {
      pointer-events: none; 
      user-select: none;
      font-size: 17px;
      color: black;
    }

    input[type="file"] {
      width: auto; 
      position: relative;
      z-index: 1;
      margin-left: 300px;
      color: transparent;
    }

    input[type="file"]::file-selector-button {
      background: #426DDC; 
      color: white;
      border: none;
      font-family: "Poppins", sans-serif;
      padding: 8px 16px;
      font-size: 15px;
      border-radius: 4px;
      cursor: pointer;
    }

    #fileNameDisplay {
      margin-top: -30px;
      margin-left: 430px;
    }

    input[type="file"]::file-selector-button {
      background: #426DDC; 
      color: white;
      border: none;
      font-family: "Poppins", sans-serif;
      padding: 8px 16px;
      font-size: 15px;
      border-radius: 4px;
      cursor: pointer;
    }

    .reset-button {
      background: #426DDC;
      margin-left: 325px;
      color: white;
      border: none;
      font-family: "Poppins", sans-serif;
      padding: 8px 16px;
      width: 220px;       margin-top: 10px;
      font-size: 15px;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    input[type="file"]::file-selector-button:hover, .reset-button:hover {
      background: #3452a8;
      transition: 0.5s ease-out;
    }

	</style>
</head>


<body>
	<nav>
        <div class="image-container">
            <img src="{{ asset('build/assets/civil_registry_logo.png') }}"> </div>

        <div class="logo-name">
            <b> Civil Registry <br/> <a> Mandaluyong City </a> </b> </div>

		<div class="menu">
			<ul>
				<li> <a class="active" href="{{ route('admin.homepage') }}"> Home </a> </li>

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
				<li> <a href="{{ route('admin.contact') }}"> Contact Us </a> </li>
			</ul>
    </div>

  <div class="search-container">
  <input type="text" id="searchInput" placeholder="Search">
  <i class="fa fa-search" onclick="performSearch()"> </i>
  </div>
	
  <i class="fas fa-user-circle user-icon" onclick="toggleDropdown()"></i>
  <div id="accountDropdown" class="absolute hidden">
    <a href="#"> Profile </a>
    <a href="#"> Settings </a>
    <a href="{{ route('admin.logout') }} " id="logoutLink"> Logout </a> </div>
  
    <button class="menu-toggle"> </button>
  </nav>

<section>
    <div class="details">
      <div>
      <h5> <center> SCHEDULE </h5> 
      <h4> AN APPOINTMENT NOW! <i class="fa fa-calendar-week" aria-hidden="true"> </i> </i> </h4>
      <p> <i> "Convenience you can count on, appointments you can trust." </i> </p>
      <a href="#learn-more" class="learn-button"> Learn more </a> </center>
    </div>
    </section>

<div class="announcement-section">
  <div class="announcement-header">
    <h2> <i class="fa fa-bullhorn" aria-hidden="true"></i> Announcement & News Update </h2>
    <p id="datetime"> </p>
  </div>

  <div class="announcement-body">
    <div class="editable-wrapper">
      <p contenteditable="true"> Welcome! Stay tuned for the latest updates from the <i>City Civil Registry Department. </i> </p>
      <i class="fa fa-edit edit-icon" aria-hidden="true" title="Edit"> </i>
    </div>
  </div>
</div>

<div class="slider-container">
  <div class="slider">
    @foreach($announcements as $announcement)
    <div class="slide">
      <img id="img{{ $announcement->id }}" src="{{ asset('storage/announcements/' . $announcement->image_path) }}"> <br>
      <div class="announcement-controls">
        <div class="file-input-row">
          <label class="custom-file-label">
            <input type="file" accept="image/*" onchange="uploadImage(this, 'img{{ $announcement->id }}', {{ $announcement->id }})">
            <span>Choose File</span>
          </label>
          <span id="fileNameDisplay{{ $announcement->id }}" class="file-name-display">No file chosen</span>
        </div>
        <button onclick="resetImage('img{{ $announcement->id }}', {{ $announcement->id }})" class="reset-button">Reset to Original Photo</button>
      </div>
      <div class="announcement-text">
        <div class="editable-wrapper">
          <h2> <center contenteditable="true" onblur="updateAnnouncement({{ $announcement->id }}, 'title', this.textContent)"> {{ $announcement->title }} </center> </h2>
          <i class="fa fa-edit edit-icon" aria-hidden="true" title="Edit"> </i>
        </div>
        <div class="editable-wrapper">
          <p contenteditable="true" onblur="updateAnnouncement({{ $announcement->id }}, 'content', this.textContent)"> {{ $announcement->content }} </p>
          <i class="fa fa-edit edit-icon" aria-hidden="true" title="Edit"> </i>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
  <button class="next" onclick="moveSlide(1)">&#10095;</button>
</div>

<!-- Add Announcement Button and Modal -->
<button id="addAnnouncementBtn" style="margin: 30px auto; display: block; background: #426DDC; color: white; font-size: 16px; padding: 10px 24px; border: none; border-radius: 8px; cursor: pointer;">Add Announcement</button>
<div id="addAnnouncementModal" style="display:none; position: fixed; z-index: 9999; left: 0; top: 0; width: 100vw; height: 100vh; background: rgba(0,0,0,0.4); justify-content: center; align-items: center;">
  <div style="background: white; padding: 32px 24px; border-radius: 12px; max-width: 400px; margin: 80px auto; position: relative;">
    <form action="{{ route('admin.announcements.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <h2 style="margin-bottom: 18px; color: #426DDC;">Add Announcement</h2>
      <label>Title:</label>
      <input type="text" name="title" required style="width: 100%; margin-bottom: 10px; padding: 7px; border-radius: 5px; border: 1px solid #ccc;">
      <label>Content:</label>
      <textarea name="content" required style="width: 100%; margin-bottom: 10px; padding: 7px; border-radius: 5px; border: 1px solid #ccc;"></textarea>
      <label>Image:</label>
      <div style="position: relative; margin-bottom: 18px;">
        <input type="file" id="customFileInput" name="image" accept="image/*" required style="opacity:0; position:absolute; left:0; top:0; width:100%; height:100%; cursor:pointer;">
        <label for="customFileInput" id="customFileLabel" style="display:inline-block; background:#426DDC; color:white; padding:8px 18px; border-radius:5px; cursor:pointer; font-size:15px;">Choose File</label>
        <span id="fileName" style="margin-left:10px; color:#333;">No file chosen</span>
      </div>
      <div style="display: flex; justify-content: flex-end; gap: 10px;">
        <button type="button" onclick="closeAddAnnouncementModal()" style="background: #ccc; color: #333; border: none; border-radius: 5px; padding: 7px 16px;">Cancel</button>
        <button type="submit" style="background: #426DDC; color: white; border: none; border-radius: 5px; padding: 7px 16px;">Add</button>
      </div>
    </form>
  </div>
</div>

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



<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script type="text/javascript">

let originalImageSrc = "{{ asset('build/assets/news_update_1.jpg') }}"; 
let originalFileName = "{{ asset('build/assets/news_update_1.jpg') }}"; 
let originalImageSrcSet = false; 

function uploadImage(input, imgId, announcementId) {
    const file = input.files[0];
    const imgElement = document.getElementById(imgId);
    const fileNameDisplay = document.getElementById("fileNameDisplay" + announcementId);

    if (!imgElement) {
        alert("Image element not found.");
        return;
    }

    if (!originalImageSrcSet) {
        originalImageSrc = imgElement.src;
        originalFileName = originalFileName; 
        originalImageSrcSet = true;
    }

    if (file) {
        const confirmChange = confirm("Are you sure you want to change the current picture?");
        if (!confirmChange) {
            alert("Image change canceled.");
            input.value = ""; 
            return;
        }

        const formData = new FormData();
        formData.append('image', file);
        formData.append('_token', document.querySelector('meta[name="csrf-token"]').content);

        fetch(`/admin/announcements/${announcementId}`, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                imgElement.src = URL.createObjectURL(file);
                alert("Image uploaded successfully!");
                fileNameDisplay.textContent = file.name; 
            } else {
                alert("Failed to upload image");
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert("An error occurred while uploading the image");
        });
    } else {
        alert("No file selected.");
    }
}

function resetImage(imgId, announcementId) {
    const imgElement = document.getElementById(imgId);
    const fileNameDisplay = document.getElementById("fileNameDisplay" + announcementId);
    const inputContainer = document.getElementById("fileInputContainer");

    if (imgElement && originalImageSrc) {
        imgElement.src = originalImageSrc;
        alert("Image reset to the original picture.");

        fileNameDisplay.textContent = "No file chosen";

        const newInput = document.createElement("input");
        newInput.type = "file";
        newInput.accept = "image/*";
        newInput.id = "imageInput";
        newInput.onchange = function () { uploadImage(this, imgId, announcementId); };

        const newLabel = document.createElement("label");
        newLabel.className = "custom-file";
        newLabel.appendChild(newInput);

        const span = document.createElement("span");
        span.textContent = "Choose File";
        newLabel.appendChild(span);

        inputContainer.innerHTML = "";
        inputContainer.appendChild(newLabel);
    } else {
        alert("No original image to reset.");
    }
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
    }}
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

const logoutLink = document.getElementById("logoutLink");

function updateDateTime() {
    const now = new Date();
    const formatted = now.toLocaleString('en-PH', {
        dateStyle: 'full',
        timeStyle: 'short',
        hour12: true
    });
    document.getElementById('datetime').textContent = formatted;
}

window.onload = function () {
    updateDateTime();
    setInterval(updateDateTime, 1000);
};

let currentSlide = 0;

function moveSlide(step) {
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    currentSlide = (currentSlide + step + totalSlides) % totalSlides;

    const slider = document.querySelector('.slider');
    slider.style.transform = `translateX(-${currentSlide * 100}%)`;
}

function updateAnnouncement(id, field, value) {
    fetch(`/admin/announcements/${id}`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({
            [field]: value
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Announcement updated successfully');
        } else {
            alert('Failed to update announcement');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while updating the announcement');
    });
}

document.getElementById('addAnnouncementBtn').onclick = function() {
  document.getElementById('addAnnouncementModal').style.display = 'flex';
};

function closeAddAnnouncementModal() {
  document.getElementById('addAnnouncementModal').style.display = 'none';
}

// Close modal when clicking outside the form
window.onclick = function(event) {
  var modal = document.getElementById('addAnnouncementModal');
  if (event.target === modal) {
    modal.style.display = 'none';
  }
};

document.getElementById('customFileInput').addEventListener('change', function(e) {
  const fileName = e.target.files[0] ? e.target.files[0].name : 'No file chosen';
  document.getElementById('fileName').textContent = fileName;
});

</script>

</body>
</html>