<html lang="en">
    <head>
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/assets/civil_registry_logo.png') }}">
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Appointment Page - Residence View </title>
    
    <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>
    
    <style>
        body {
            font-family: 'Poppins';
        }
        .selected-date, .selected-time {
            background-color: #426DDC;
            color: white;
        }

        *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }


    html, body {
      overflow-x: hidden;
      height: 100%;
      margin: 0;
      padding: 0;
      background: linear-gradient(rgba(90, 110, 130, 0.3), rgba(90, 110, 130, 0.3)),
      url('storage/assets/appointment_bg.jpg') no-repeat center center fixed;;
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
              url('storage/assets/appointment_bg.jpg') no-repeat center center fixed;
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


    /* Responsive Styles for Appointment Page */
    @media (max-width: 1200px) {
        .container {
            width: 100%;
            padding: 0 20px;
        }

        .bg-white {
            max-width: 90%;
            margin: 0 auto;
        }
    }

    @media (max-width: 992px) {
        .bg-white {
            padding: 1.5rem;
        }

        .grid-cols-2 {
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        .grid-cols-7 {
            gap: 0.5rem;
        }

        .grid-cols-7 div {
            font-size: 0.9rem;
            padding: 0.5rem;
        }

        .grid-cols-2 button {
            font-size: 0.9rem;
            padding: 0.5rem;
        }
    }

    @media (max-width: 768px) {
        .bg-white {
            padding: 1rem;
            margin-top: 1rem;
        }

        h2 {
            font-size: 1.5rem;
        }

        .text-2xl {
            font-size: 1.25rem;
        }

        .grid-cols-7 {
            grid-template-columns: repeat(7, 1fr);
        }

        .grid-cols-7 div {
            font-size: 0.8rem;
            padding: 0.4rem;
        }

        .grid-cols-2 button {
            font-size: 0.8rem;
            padding: 0.4rem;
        }

        .container {
            flex-direction: column;
            height: auto;
            padding: 20px;
        }

        .footer-content {
            width: 100%;
            margin: 10px 0;
            text-align: center;
            justify-content: center;
        }

        .map-container {
            height: 200px;
            margin: 10px 0;
        }

        .social-icons {
            justify-content: center;
            margin-top: 10px;
        }

        .social-icons li {
            margin: 0 10px;
        }

        /* Modal Responsive Styles */
        .max-w-md {
            width: 90%;
            margin: 0 auto;
        }

        .p-6 {
            padding: 1rem;
        }
    }

    @media (max-width: 480px) {
        .bg-white {
            padding: 0.75rem;
            margin-top: 0.5rem;
        }

        h2 {
            font-size: 1.25rem;
        }

        .text-2xl {
            font-size: 1.1rem;
        }

        .grid-cols-7 div {
            font-size: 0.7rem;
            padding: 0.3rem;
        }

        .grid-cols-2 button {
            font-size: 0.7rem;
            padding: 0.3rem;
        }

    

        /* Modal Responsive Styles */
        .max-w-md {
            width: 95%;
        }

        .p-6 {
            padding: 0.75rem;
        }

        .text-xl {
            font-size: 1.1rem;
        }
    }

    /* Smooth Transitions */
    .bg-white,
    .grid-cols-2 button,
    .grid-cols-7 div {
        transition: all 0.3s ease;
    }

    /* Hover Effects */
    .grid-cols-2 button:hover {
        transform: translateY(-2px);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .grid-cols-7 div:hover:not(.text-gray-400) {
        transform: scale(1.1);
    }

    /* Animation for Form Elements */
    .bg-white {
        animation: fadeInUp 0.5s ease forwards;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Calendar Navigation Buttons */
    .text-gray-600 {
        transition: color 0.3s ease;
    }

    .text-gray-600:hover {
        color: #426DDC;
    }

    /* Form Input Focus Styles */
    select:focus,
    input:focus {
        outline: none;
        border-color: #426DDC;
        box-shadow: 0 0 0 2px rgba(66, 109, 220, 0.2);
    }

    /* Submit Button Styles */
    #confirmBtn {
        transition: all 0.3s ease;
    }

    #confirmBtn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    </style>
    </head>

    <body>
        @include('layouts.residence-navbar')

        <section class="flex items-center justify-center min-h-screen pt-10">
            <div class="details">
        <div class="bg-white bg-opacity-100 p-8 rounded-lg shadow-lg w-full max-w-3xl mt-12 mb-4">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6"> BOOK AN APPOINTMENT </h2>
        <form action="{{ route('residence.appointment.store') }}" method="POST" id="appointmentForm">
            @csrf
            <!-- Loading overlay -->
            <div id="loadingOverlay" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(255,255,255,0.7); z-index:9999; align-items:center; justify-content:center;">
                <div style="display:flex; flex-direction:column; align-items:center;">
                    <div class="loader"></div>
                    <span class="loading-text">Processing...</span>
                </div>
            </div>
            <style>
                .loader {
                    border: 6px solid #f3f3f3;
                    border-top: 6px solid #426DDC;
                    border-radius: 50%;
                    width: 50px;
                    height: 50px;
                    animation: spin 1s linear infinite;
                }
                .loading-text {
                    margin-top: 16px;
                    color: #426DDC;
                    font-weight: bold;
                    font-size: 18px;
                }
                @keyframes spin {
                    0% { transform: rotate(0deg); }
                    100% { transform: rotate(360deg); }
                }
                @media (max-width: 600px) {
                    #loadingOverlay > div {
                        width: 100vw;
                        min-height: 100vh;
                        justify-content: center;
                    }
                    .loader {
                        width: 36px;
                        height: 36px;
                        border-width: 4px;
                    }
                    .loading-text {
                        font-size: 15px;
                    }
                }
            </style>
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
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
            <div>
            <label class="block text-gray-600 mb-2"> Select appointment type </label>
            <select name="appointment_type" class="w-full border rounded py-2 px-3 text-gray-600" required>
                <option value="">Select appointment type</option>
                <option value="Releasing of document"> Releasing of document </option>
                <option value="Document Correction"> Document Correction </option>
                <option value="Document Consultation"> Document Consultation </option>
                <option value="Legitimation"> Legitimation </option>
                <option value="Late Registration of Document"> Late Registration of Document </option>
                <option value="Requirement Submission"> Requirement Submission </option>
            </select>
            </div>
            <div>
            <label class="block text-gray-600 mb-2"> Choose document type </label>
            <select name="document_type" class="w-full border rounded py-2 px-3 text-gray-600" required>
                <option value="">Select document type</option>
                @foreach($requirements as $requirement)
                    <option value="{{ $requirement->title }}">{{ $requirement->title }}</option>
                @endforeach
            </select>
            </div>
            </div>

            <div class="mb-6">
            <label class="block text-gray-600 mb-2"> Select preferred date and time </label>
            <div class="flex items-center justify-between mb-4">
            <button type="button" class="text-gray-600" onclick="prevMonth()">
             <i class="fas fa-chevron-left"></i>
            </button>
            <span class="text-gray-600" id="currentMonth"> January 2025 </span>
            <button type="button" class="text-gray-600" onclick="nextMonth()">
             <i class="fas fa-chevron-right"></i>
            </button>
            </div>

            <div class="grid grid-cols-7 gap-2 text-center text-gray-600" id="calendarDays">
            <!-- Calendar days will be generated-->
            </div>
            <input type="hidden" name="appointment_date" id="selectedDate">
            </div>

        <div class="grid grid-cols-2 gap-4 mb-6">
        <div>
        <h3 class="text-center text-gray-600 mb-2"> Morning </h3>
        <div class="grid grid-cols-2 gap-2">
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="07:00"> 7:00 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="07:30"> 7:30 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="08:00"> 8:00 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="08:30"> 8:30 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="09:00"> 9:00 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="09:30"> 9:30 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="10:00"> 10:00 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="10:30"> 10:30 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="11:00"> 11:00 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="11:30"> 11:30 </button>
        </div>
        </div>
           
        <div>
        <h3 class="text-center text-gray-600 mb-2"> Afternoon </h3>
        <div class="grid grid-cols-2 gap-2">
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="13:00"> 1:00 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="13:30"> 1:30 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="14:00"> 2:00 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="14:30"> 2:30 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="15:00"> 3:00 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="15:30"> 3:30 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="16:00"> 4:00 </button>
            <button type="button" class="border rounded py-2 bg-brown-500 cursor-pointer" onclick="selectTime(this)" data-time="16:30"> 4:30 </button>
        </div>
        </div>
        </div>
        <input type="hidden" name="appointment_time" id="selectedTime">

        <div class="text-center">
            <button type="submit" id="confirmBtn" class="bg-gray-500 hover:bg-blue-500 text-white py-2 px-6 rounded">
                CONFIRM
            </button>
         </div>
        </form>

    <div id="confirmationModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-md w-full">
      <h2 class="text-xl font-bold mb-4 text-center text-green-700">Appointment Confirmed!</h2>
      <p class="text-gray-700 text-center mb-6">
        📌 Your appointment is subject to approval. Wait for the confirmation email before attending your appointment.<br><br>
        Thank you!
      </p>
      <div class="flex justify-center">
        <button onclick="closeModal('confirmationModal')" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded">
          OK
        </button>
      </div>
    </div>
    </div>

  
    <div id="cancellationModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-md w-full">
      <h2 class="text-xl font-bold mb-4 text-center text-red-700">Appointment Cancelled!</h2>
      <p class="text-gray-700 text-center mb-6">
        Your appointment has been cancelled. If this was a mistake, please try again.<br><br>
        Thank you!
      </p>
      <div class="flex justify-center">
        <button onclick="closeModal('cancellationModal')" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded">
          OK
        </button>
      </div>
    </div>
    </div>
      
     </div>
    </div>
   </div>
</div>
</section>
@include('layouts.footer')


  <script>
    document.addEventListener('DOMContentLoaded', function() {
      
        // Calendar initialization
        const calendarDays = document.getElementById('calendarDays');
        if (calendarDays) {
            generateCalendar();
        }

        // Form submission handler
        const appointmentForm = document.getElementById('appointmentForm');
        if (appointmentForm) {
            appointmentForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const loadingOverlay = document.getElementById('loadingOverlay');
                if (loadingOverlay) loadingOverlay.style.display = 'flex';
                
                const selectedDate = document.getElementById('selectedDate');
                const selectedTime = document.getElementById('selectedTime');
                const appointmentType = document.querySelector('select[name="appointment_type"]');
                const documentType = document.querySelector('select[name="document_type"]');

                if (!selectedDate?.value || !selectedTime?.value || !appointmentType?.value || !documentType?.value) {
                    alert('Please fill in all required fields');
                    if (loadingOverlay) loadingOverlay.style.display = 'none';
                    return;
                }

                const formData = new FormData(this);
                
                fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || '',
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => {
                    if (loadingOverlay) loadingOverlay.style.display = 'none';
                    if (!response.ok) {
                        return response.json().then(data => {
                            throw new Error(data.message || 'Network response was not ok');
                        });
                    }
                    return response.json();
                })
                .then(data => {
                    if (loadingOverlay) loadingOverlay.style.display = 'none';
                    if (data.success) {
                        showConfirmationModal(selectedDate.value, selectedTime.value, data);
                        this.reset();
                        if (calendarDays) {
                            generateCalendar();
                        }
                    } else {
                        showCancellationModal(data.message);
                    }
                })
                .catch(error => {
                    if (loadingOverlay) loadingOverlay.style.display = 'none';
                    console.error('Error:', error);
                    showCancellationModal(error.message);
                });
            });
        }
    });

    function performSearch() {
        const searchInput = document.getElementById("searchInput");
        if (!searchInput) return;

        const input = searchInput.value.trim().toLowerCase();
        if (!input) {
            alert("Please enter a search term.");
            return;
        }

        if (input === "home page" || input === "homepage" || input === "home") {
            window.location.href = "{{ route('residence-homepage') }}";
        } else if (input === "faqs" || input === "facts" || input === "help") {
            window.location.href = "{{ route('residence-faqs') }}";
        } else if (input === "about" || input === "about civil") {
            window.location.href = "{{ route('residence-about-us') }}";
        } else if (input === "appointment" || input === "appointments" || input === "schedule" || input === "schedules") {
            window.location.href = "{{ route('residence-appointment') }}";
        } else if (input === "reqs" || input === "requirements" || input === "requirement") {
            window.location.href = "{{ route('residence-requirements') }}";
        } else if (input === "contact" || input === "number" || input === "email") {
            window.location.href = "{{ route('residence-contact-us') }}";
        } else {
            alert("No results found.");
            searchInput.value = "";
        }
    }

    const months = [
        "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ];
    let currentDate = new Date();
    let currentMonthIndex = currentDate.getMonth();
    let currentYear = currentDate.getFullYear();

    function generateCalendar() {
        const calendarDays = document.getElementById('calendarDays');
        const currentMonth = document.getElementById('currentMonth');
        
        if (!calendarDays || !currentMonth) return;

        calendarDays.innerHTML = '';

        const firstDay = new Date(currentYear, currentMonthIndex, 1).getDay();
        const daysInMonth = new Date(currentYear, currentMonthIndex + 1, 0).getDate();
        const today = new Date();
        today.setHours(0, 0, 0, 0);

        for (let i = 0; i < firstDay; i++) {
            const emptyCell = document.createElement('div');
            emptyCell.classList.add('text-gray-400');
            calendarDays.appendChild(emptyCell);
        }

        for (let day = 1; day <= daysInMonth; day++) {
            const dayCell = document.createElement('div');
            const currentDate = new Date(currentYear, currentMonthIndex, day);
            currentDate.setHours(0, 0, 0, 0);

            dayCell.classList.add('cursor-pointer');
            dayCell.textContent = day;

            if (currentDate <= today) {
                dayCell.classList.add('text-gray-400', 'cursor-not-allowed');
                dayCell.style.pointerEvents = 'none';
            } else {
                dayCell.onclick = function() {
                    selectDate(dayCell);
                };
            }

            calendarDays.appendChild(dayCell);
        }

        currentMonth.textContent = `${months[currentMonthIndex]} ${currentYear}`;
    }

    function prevMonth() {
        if (currentMonthIndex > 0) {
            currentMonthIndex--;
        } else {
            currentMonthIndex = 11;
            currentYear--;
        }
        generateCalendar();
    }

    function nextMonth() {
        if (currentMonthIndex < 11) {
            currentMonthIndex++;
        } else {
            currentMonthIndex = 0;
            currentYear++;
        }
        generateCalendar();
    }

    function selectDate(element) {
        const calendarDays = document.querySelectorAll('.grid-cols-7 div');
        if (!calendarDays.length) return;

        calendarDays.forEach(function (date) {
            date.classList.remove('selected-date');
        });
        element.classList.add('selected-date');
        
        const selectedDate = new Date(currentYear, currentMonthIndex, element.textContent);
        const selectedDateInput = document.getElementById('selectedDate');
        if (selectedDateInput) {
            selectedDateInput.value = selectedDate.toISOString().split('T')[0];
        }
    }

    function selectTime(element) {
        const timeButtons = document.querySelectorAll('.grid-cols-2 button');
        if (!timeButtons.length) return;

        timeButtons.forEach(function (time) {
            time.classList.remove('selected-time');
        });
        element.classList.add('selected-time');
        
        const selectedTimeInput = document.getElementById('selectedTime');
        if (selectedTimeInput) {
            selectedTimeInput.value = element.dataset.time;
        }
    }

    function showConfirmationModal(date, time, data) {
        const confirmationModal = document.getElementById("confirmationModal");
        const confirmationMessage = document.querySelector("#confirmationModal p");
        
        if (!confirmationModal || !confirmationMessage) return;

        confirmationMessage.innerHTML = `Your appointment is subject to approval. Wait for the confirmation email before attending your appointment.<br><br>
            📅 Date: ${date}<br>
            ⏰ Time: ${time}<br>
            🔖 Reference Number: ${data.reference_number}<br><br>
            Please check your email for further details.<br>
            If you need to cancel due to an error or change of mind, kindly email us as soon as possible.<br><br>
            Thank you!`;

        confirmationModal.classList.remove("hidden");
    }

    function showCancellationModal(errorMessage) {
        const cancellationModal = document.getElementById("cancellationModal");
        const cancellationMessage = document.querySelector("#cancellationModal p");
        
        if (!cancellationModal || !cancellationMessage) return;

        cancellationMessage.innerHTML = `There was an error processing your appointment request.<br><br>
            ${errorMessage || 'Please try again or contact our support team for assistance.'}<br><br>
            Thank you for your understanding.`;

        cancellationModal.classList.remove("hidden");
    }

    function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.add("hidden");
        }
    }
  </script>

 </body>
</html>
