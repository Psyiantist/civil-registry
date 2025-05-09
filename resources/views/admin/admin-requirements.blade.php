<html lang="en">
<head>
  <link rel="icon" type="image/x-icon" href="civil registry logo.png">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title> Requirements Page - Admin View </title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />

  <style>
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

        nav button{
        display: none;
        }

        nav .menu{
        width: 60%;
        margin-top: -5px;
        text-align: center;
        margin-left: 30px;
        }

        nav .menu ul li{
        padding: -5px;
        font-size: 17px;
        list-style: none;
        font-weight: bold;
        margin-right: 30px; 
        display: inline-block;
        position: relative;
        font-family: "Poppins", sans-serif;

        }

        nav .menu ul:nth-child(2) li{
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
        margin-left: -5px;
        }


        nav .menu ul li a:hover{
        color: #426DDC;
        transition: 0.3s ease; 
        }

        nav form{
        left: 25%;
        top: 65px;
        width: 60%;
        position: relative;
        }

        nav form input{
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

        html, body {
        overflow-x: hidden;
        height: 100%;
        margin: 0;
        padding: 0;
        background: linear-gradient(rgba(90, 110, 130, 0.3), rgba(90, 110, 130, 0.3)),
              url('appointment_bg.jpg') no-repeat center center fixed;
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: center center;
        }

        section {
        background: transparent;
        min-height: 100vh;
        padding: 2rem;
        position: relative;
        z-index: 1;
        }

        /* Zoom-in screen orientation layout */
        @media(max-width: 1000px) {
        html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        background: linear-gradient(rgba(90, 110, 130, 0.3), rgba(90, 110, 130, 0.3)),
              url('appointment_bg.jpg') no-repeat center center fixed;
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: center center;
        }

        section {
        background: transparent;
        min-height: 100vh;
        padding: 2rem;
        position: relative;
        z-index: 1;
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

  </style>
</head>

<body>
        <nav>
            <div class="image-container">
                <img src="civil registry logo.png"> </div>
    
            <div class="logo-name">
                <b> Civil Registry <br/> <a> Mandaluyong City </a> </b> </div>
    
            <div class="menu">
                <ul>
                    <li> <a href="Home Page - Admin View.html"> Home </a> </li>
    
            <li> <a class="active" href="#"> Services <i class="fas fa-caret-down"> </i> </a> 
    
            <div class="dropdown_menuuu">
              <ul>
            <li> <a href="Appointment Page - Admin View.html"> Appointment </a> </li>
            <li> <a class="active" href="Requirements Page - Admin View.html"> Requirements </a> </li>
               </ul>
            </div>
            </li>
    
                    <li> <a href="FAQs Page - Admin View.html"> FAQs </a> </li>
                    <li> <a href="About Us Page - Admin View.html"> About Us </a> </li>
                    <li> <a href="Contact Us Page - Admin View.html"> Contact Us </a> </li>
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
        <a href="#" id="logoutLink"> Logout </a> </div>
      
        <button class="menu-toggle"> </button>
      </nav>

  <!--MAIN SECTION --> 
      <section class="pt-10">
        <div class="details">
      <div class="relative z-10 pt-12 px-8 pb-20 flex flex-col items-center text-white min-h-screen">
        <h1 class="text-4xl font-bold bg-white text-blue-800 py-2 px-6 rounded-lg mb-10 shadow-lg">REQUIREMENTS</h1>
  
        <div class="flex flex-col lg:flex-row gap-10 items-start justify-center">

        <!-- ICONS -->
        <div class="grid grid-cols-2 gap-6 mb-10">
          <!-- BIRTH -->
          <div onclick="showChecklist('birth')" class="transition-transform transform hover:scale-105 hover:shadow-2xl hover:shadow-blue-400 p-6 bg-white rounded-xl flex flex-col items-center text-blue-500 cursor-pointer">
            <img src="docreq.png" class="h-32 w-32 mb-3" alt="Birth Icon" />
            <div class="flex items-center justify-center">
              <span id="birthText" contenteditable="true">Birth Certificate</span>
              <i class="fas fa-edit text-gray-500 ml-2 cursor-pointer" onclick="event.stopPropagation(); toggleEdit('birthText', this)"></i>
              <i class="fas fa-chevron-right text-gray-500 mt-2"></i>
            </div>
          </div>

          <!-- MARRIAGE -->
          <div onclick="showChecklist('marriage')" class="transition-transform transform hover:scale-105 hover:shadow-2xl hover:shadow-blue-400 p-6 bg-white rounded-xl flex flex-col items-center text-blue-500 cursor-pointer">
            <img src="docreq.png" class="h-32 w-32 mb-3" alt="Marriage Icon" />
            <div class="flex items-center justify-center">
              <span id="marriageText" contenteditable="true">Marriage Certificate</span>
              <i class="fas fa-edit text-gray-500 ml-2 cursor-pointer" onclick="event.stopPropagation(); toggleEdit('marriageText', this)"></i>
              <i class="fas fa-chevron-right text-gray-500 mt-2"></i>
            </div>
          </div>

          <!-- LICENSE -->
          <div onclick="showChecklist('license')" class="transition-transform transform hover:scale-105 hover:shadow-2xl hover:shadow-blue-400 p-6 bg-white rounded-xl flex flex-col items-center text-blue-500 cursor-pointer">
            <img src="docreq.png" class="h-32 w-32 mb-3" alt="Marriage License Icon" />
            <div class="flex items-center justify-center">
              <span id="licenseText" contenteditable="true">Marriage License</span>
              <i class="fas fa-edit text-gray-500 ml-2 cursor-pointer" onclick="event.stopPropagation(); toggleEdit('licenseText', this)"></i>
              <i class="fas fa-chevron-right text-gray-500 mt-2"></i>
            </div>
          </div>

          <!-- DEATH -->
          <div onclick="showChecklist('death')" class="transition-transform transform hover:scale-105 hover:shadow-2xl hover:shadow-blue-400 p-6 bg-white rounded-xl flex flex-col items-center text-blue-500 cursor-pointer">
            <img src="docreq.png" class="h-32 w-32 mb-3" alt="Death Icon" />
            <div class="flex items-center justify-center">
              <span id="deathText" contenteditable="true">Death Certificate</span>
              <i class="fas fa-edit text-gray-500 ml-2 cursor-pointer" onclick="event.stopPropagation(); toggleEdit('deathText', this)"></i>
              <i class="fas fa-chevron-right text-gray-500 mt-2"></i>
            </div>
          </div>

          <!-- RA9048 -->
          <div onclick="showChecklist('ra9048')" class="transition-transform transform hover:scale-105 hover:shadow-2xl hover:shadow-blue-400 p-6 bg-white rounded-xl flex flex-col items-center text-blue-500 cursor-pointer">
            <img src="docreq.png" class="h-32 w-32 mb-3" alt="RA 9048 Icon" />
            <div class="flex items-center justify-center">
              <span id="ra9048Text" contenteditable="true">RA 9048 (CORRECTION)</span>
              <i class="fas fa-edit text-gray-500 ml-2 cursor-pointer" onclick="event.stopPropagation(); toggleEdit('ra9048Text', this)"></i>
              <i class="fas fa-chevron-right text-gray-500 mt-2"></i>
            </div>
          </div>

          <!-- RA9255 -->
          <div onclick="showChecklist('ra9255')" class="transition-transform transform hover:scale-105 hover:shadow-2xl hover:shadow-blue-400 p-6 bg-white rounded-xl flex flex-col items-center text-blue-500 cursor-pointer">
            <img src="docreq.png" class="h-32 w-32 mb-3" alt="RA 9255 Icon" />
            <div class="flex items-center justify-center">
              <span id="ra9255Text" contenteditable="true">RA 9255 (LEGITIMATION)</span>
              <i class="fas fa-edit text-gray-500 ml-2 cursor-pointer" onclick="event.stopPropagation(); toggleEdit('ra9255Text', this)"></i>
              <i class="fas fa-chevron-right text-gray-500 mt-2"></i>
            </div>
          </div>
        </div>

        <!-- CHECKLIST -->
        <div class="bg-white p-6 rounded-lg shadow-md text-black max-w-md">
          <h2 class="text-xl font-bold text-gray-800 mb-4">
            <span id="checklistTitle" contenteditable="true">CHECKLIST OF REQUIREMENTS</span>
            <i class="fas fa-edit text-gray-500 ml-2 cursor-pointer" onclick="toggleEdit('checklistTitle', this)"></i>
          </h2>
          <ul id="checklist" class="list-disc list-inside text-gray-700 space-y-1"></ul>
        </div>

      </div>
    </div>
  </div>
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

const logoutLink = document.getElementById("logoutLink");

if (logoutLink) {
    logoutLink.addEventListener("click", (e) => {
        e.preventDefault();
        alert("You have been logged out.");
        window.location.href = "Home Page.html";
    });
}

function performSearch() {
    const inputField = document.getElementById("searchInput");
    const input = inputField.value.trim().toLowerCase();

    if (input === "") {
        alert("Please enter a search term.");
    } else {
        if (input === "home page" || input === "homepage" || input === "home") {
            window.location.href = "Home page - Residence View.html";
        } else if (input === "faqs" || input === "facts" || input === "help") {
            window.location.href = "FAQs Page - Residence View.html";
        } else if (input === "about" || input === "about civil") {
            window.location.href = "About Us Page - Residence View.html";
        } else if (input === "appointment" || input === "appointments" || input === "schedule" || input === "schedules") {
            window.location.href = "Appointment Page - Residence View.html";
        } else if (input === "reqs" || input === "requirements" || input === "requirement") {
            window.location.href = "Requirements Page - Residence View.html";
        } else if (input === "contact" || input === "number" || input === "email") {
            window.location.href = "Contact Us Page - Residence View.html";
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

const checklistData = {
    birth: [
        "Negative Results/Certification",
        "Baptismal Certificate",
        "Medical Records",
        "Voter’s Affidavit/Certification",
        "School Records",
        "SSS, GSIS, ITR, NBI",
        "Driver’s License",
        "Barangay Clearance",
        "Sworn Statement of Mother (Notarized)",
        "Marriage Contract of parents, if married",
        "Affidavit of two disinterested persons",
        "Representative"
    ],
    marriage: [
        "Marriage Application Form",
        "Valid IDs of both parties",
        "Certificate of No Marriage (CENOMAR)",
        "Birth Certificate (both parties)",
        "Parental Consent (if under 25)",
        "Marriage Counseling Certificate"
    ],
    license: [
        "Birth Certificate",
        "Baptismal Certificate",
        "Resident Certificate",
        "Barangay Clearance or Proof of Billing",
        "CENOMAR (Certificate of No Marriage) Both parties",
        "2 pcs of 1x1 ID picture",
        "If Annulled (Certificate of True Copy of Decision, Finality, Decree of Absolute Nullity of Marriage, Certificate of Authenticity, Certificate of Registration)",
        "Consent of Parents for 18-20 years old",
        "Advice of Parents for 18-20 years old",
        "1. Advice of Parents for 21-24 years old",
        "2. Seminars Certificate", 
        "For Foreigners: Legal Capacity (to be issued by their respective Embassy in the Philippines) If Divorced , Divorce Certificate/Decree Passport, Original and Xerox "
    ],
    ra9048: [
        "Petition Form",
        "Supporting Affidavit",
        "Valid IDs",
        "Original and corrected documents",
        "Barangay Certification",
        "Other relevant documents"
    ],
    death: [
        "Death Certificate",
        "Medical Certificate of Death",
        "Affidavit of Delayed Registration (if late)",
        "Valid ID of the informant",
        "Funeral Contract",
        "Certificate from Hospital/Doctor"
    ],
    ra9255: [
        "Authenticated Birth Certificate of the Child",
        "Affidavit to Use the Surname of the Father (executed by the mother if the child is 0-6; by the child with mother’s attestation if 7-17; by the child alone if 18+)",
        "If not acknowledged or name of the father is not entered in COLB Submit",
        "Proof of Filiation: SSS/GSIS, ITR, Philhealth, Pag-IBIG, Insurance Policy, Employment Record",
        "Affidavit of Admission of Paternity",
        "Personal Appearance of both parents"
    ]
};

function showChecklist(type) {
    const checklist = checklistData[type];
    const checklistEl = document.getElementById("checklist");
    const title = document.getElementById("checklistTitle");


    title.textContent = `REQUIREMENTS FOR ${type.toUpperCase()} CERTIFICATE`;


    checklistEl.innerHTML = "";
    checklist.forEach((item, index) => {
        const li = document.createElement("li");
        li.textContent = item;
        li.contentEditable = true; 
        li.style.outline = "none";
        li.addEventListener("blur", () => {
            checklistData[type][index] = li.textContent.trim();
            console.log(`Updated ${type} [${index}] ->`, checklistData[type][index]);
        });
        checklistEl.appendChild(li);
    });

    title.scrollIntoView({ behavior: "smooth" });
}
</script>

</body>
</html>