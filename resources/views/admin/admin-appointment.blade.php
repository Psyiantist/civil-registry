<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="/storage/assets/favicon.ico">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title> Requirements Page - Admin View </title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />

  <style>

    body {
      font-family: 'Poppins';
      margin-bottom: 60px;
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

        html, body {
        height: 100%;
        margin: 0;
        display: flex;
        flex-direction: column;
        }

       main {
       flex: 1;
       }

    footer {
    background: #fff;
    padding-top: 20px;
    padding-bottom: 5px;
    position: static;
    bottom: 0;
    left: 0;
    width: 100%;
    z-index: 1000; 
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

  </style>
</head>

<body>
        <nav>
            <div class="image-container">
                <img src="{{ asset('storage/assets/civil_registry_logo.png') }}"> </div>
    
            <div class="logo-name">
                <b> Civil Registry <br/> <a> Mandaluyong City </a> </b> </div>
    
            <div class="menu">
                <ul>
                    <li> <a href="{{ route('admin.homepage') }}"> Home </a> </li>
    
            <li> <a class="active" href="#"> Services <i class="fas fa-caret-down"> </i> </a> 
    
            <div class="dropdown_menuuu">
              <ul>
            <li> <a class="active" href="{{ route('admin.appointment') }}"> Appointment </a> </li>
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
        <div id="accountDropdown">
            <div style="padding: 16px 0 8px 0; text-align: center;">
                <div style="font-size: 40px; color: #e0e0e0; margin-bottom: 4px;">
                    <i class="fas fa-user-circle"></i>
                </div>
                <div style="font-weight: bold; font-size: 18px;">Admin</div>
                <div style="font-size: 14px; color: #757575; word-break: break-all;">city.registrar@<br>mandaluyong.gov.ph</div>
            </div>
            <a href="#">Settings</a>
            <a href="{{ route('admin.logout') }}" id="logoutLink">Logout</a>
        </div>
      
        <button class="menu-toggle"> </button>
      </nav>

      <main class="p-8">
        <h2 class="text-2xl font-bold text-center mb-6">Scheduled Appointments</h2>
        <div class="overflow-x-auto">
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @endif

            @if($appointments->isEmpty())
                <div class="text-center py-8 bg-white shadow rounded-lg">
                    <p class="text-gray-500 text-lg">No appointments have been made yet.</p>
                </div>
            @else
                <div class="max-h-[600px] overflow-y-auto">
                    <table class="min-w-full bg-white shadow rounded-lg overflow-hidden">
                        <thead class="bg-blue-600 text-white">
                            <tr>
                                <th class="py-3 px-4 text-left">User Name</th>
                                <th class="py-3 px-4 text-left">Appointment Type</th>
                                <th class="py-3 px-4 text-left">Document Type</th>
                                <th class="py-3 px-4 text-left">Date & Time</th>
                                <th class="py-3 px-4 text-left">Status</th>
                                <th class="py-3 px-4 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody id="appointmentTable">
                            @foreach($appointments as $appointment)
                            <tr class="border-b">
                                <td class="py-3 px-4">{{ $appointment->user->first_name }} {{ $appointment->user->last_name }}</td>
                                <td class="py-3 px-4">{{ $appointment->appointment_type }}</td>
                                <td class="py-3 px-4">{{ $appointment->document_type }}</td>
                                <td class="py-3 px-4">{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('Y-m-d') }} {{ \Carbon\Carbon::parse($appointment->appointment_time)->format('h:i A') }}</td>
                                <td class="py-3 px-4">
                                    @php
                                        $statusColors = [
                                            'Pending' => 'bg-yellow-300 text-yellow-900',
                                            'Approved' => 'bg-green-300 text-green-900',
                                            'Completed' => 'bg-blue-300 text-blue-900',
                                            'Cancelled' => 'bg-red-300 text-red-900',
                                            'Declined' => 'bg-red-300 text-red-900'
                                        ];
                                        $colorClass = $statusColors[$appointment->status] ?? 'bg-yellow-300 text-yellow-900';
                                    @endphp
                                    <span class="{{ $colorClass }} px-2 py-1 rounded text-sm">{{ $appointment->status }}</span>
                                </td>
                                <td class="py-3 px-4">
                                    @if($appointment->status === 'Pending')
                                        <form action="{{ route('admin.appointments.status', $appointment->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('PUT')
                                            <select name="status" onchange="handleStatusChange(this, {{ $appointment->id }})" class="border rounded px-2 py-1 text-sm">
                                                <option value="Pending" {{ $appointment->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="Approved" {{ $appointment->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                <option value="Completed" {{ $appointment->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                                <option value="Cancelled" {{ $appointment->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                                                <option value="Declined" {{ $appointment->status == 'Declined' ? 'selected' : '' }}>Declined</option>
                                            </select>
                                            <input type="hidden" name="cancellation_reason" id="cancellation_reason_{{ $appointment->id }}">
                                        </form>
                                    @else
                                        <select disabled class="border rounded px-2 py-1 text-sm bg-gray-100">
                                            <option selected>{{ $appointment->status }}</option>
                                        </select>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </main>

    <!-- Cancellation Modal -->
    <div id="cancellationModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-md w-full">
            <h2 class="text-xl font-bold mb-4 text-center text-red-700">Cancel Appointment</h2>
            <form id="cancellationForm" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="status" value="Cancelled">
                <div class="mb-4">
                    <label for="cancellation_reason" class="block text-gray-700 text-sm font-bold mb-2">Reason for Cancellation:</label>
                    <textarea name="cancellation_reason" id="cancellation_reason" rows="3" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" required></textarea>
                </div>
                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="closeCancellationModal()" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Confirm Cancellation</button>
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
    }}
    document.getElementById("searchInput").addEventListener("keypress", function(e) {
        if (e.key === "Enter") {
        performSearch();
    }
    });

    function handleStatusChange(select, appointmentId) {
        if (select.value === 'Cancelled') {
            // Show cancellation modal
            const modal = document.getElementById('cancellationModal');
            const form = document.getElementById('cancellationForm');
            form.action = `/admin/appointments/${appointmentId}/status`;
            modal.classList.remove('hidden');
            // Prevent form submission until reason is provided
            select.value = 'Pending';
        } else {
            // Submit form for other status changes
            select.form.submit();
        }
    }

    function closeCancellationModal() {
        const modal = document.getElementById('cancellationModal');
        modal.classList.add('hidden');
        document.getElementById('cancellation_reason').value = '';
    }
  </script>
</body>
</html>
