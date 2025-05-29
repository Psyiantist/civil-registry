<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/assets/civil_registry_logo.png') }}">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title> Requirements Page - Residence View </title>

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

       

        html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.35)),
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

        /* Zoom-in screen orientation layout */
        @media(max-width: 1000px) {
        html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.35)),
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


    /* Responsive Styles for Requirements Page */
    @media (max-width: 1200px) {
        .container {
            width: 100%;
            padding: 0 20px;
        }

        .max-w-7xl {
            max-width: 90%;
            margin: 0 auto;
        }
    }

    @media (max-width: 992px) {
        .text-4xl {
            font-size: 2rem;
        }

        .grid-cols-2 {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .w-full.lg\:w-1/2 {
            width: 100%;
        }

        .flex-col.lg\:flex-row {
            flex-direction: column;
        }

        .gap-10 {
            gap: 2rem;
        }

        .p-8 {
            padding: 1.5rem;
        }
    }

    @media (max-width: 768px) {
        .text-4xl {
            font-size: 1.75rem;
        }

        .text-2xl {
            font-size: 1.5rem;
        }

        .px-8 {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .py-4 {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }

        .mb-10 {
            margin-bottom: 2rem;
        }

        .grid-cols-1.md\:grid-cols-2 {
            grid-template-columns: 1fr;
        }

        .h-32.w-32 {
            height: 6rem;
            width: 6rem;
        }

        .text-lg {
            font-size: 1rem;
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
    }

    @media (max-width: 480px) {
        .text-4xl {
            font-size: 1.5rem;
        }

        .text-2xl {
            font-size: 1.25rem;
        }

        .px-8 {
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }

        .py-4 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .mb-10 {
            margin-bottom: 1.5rem;
        }

        .h-32.w-32 {
            height: 5rem;
            width: 5rem;
        }

        .text-lg {
            font-size: 0.875rem;
        }

        .p-6 {
            padding: 1rem;
        }
    }

    /* Smooth Transitions */
    .group,
    .bg-white,
    .transform {
        transition: all 0.3s ease;
    }

    /* Hover Effects */
    .group:hover {
        transform: translateY(-5px);
    }

    .group:hover img {
        transform: rotate(3deg);
    }

    /* Animation for Checklist Items */
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

    #checklist li {
        animation: fadeInUp 0.5s ease forwards;
    }

    /* Card Hover Effects */
    .group {
        position: relative;
        overflow: hidden;
    }

    .group::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, rgba(66, 109, 220, 0.1), transparent);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .group:hover::after {
        opacity: 1;
    }

    /* Checklist Item Styles */
    #checklist li {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        padding: 0.5rem;
        border-radius: 0.5rem;
        transition: all 0.3s ease;
    }

    #checklist li:hover {
        background-color: rgba(66, 109, 220, 0.05);
        transform: translateX(5px);
    }

    /* Additional Info Section */
    #additionalInfo {
        transition: all 0.3s ease;
    }

    #additionalInfo:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>
    @include('layouts.residence-navbar')

    <!--MAIN SECTION --> 
    <section class="pt-10">
        <div class="details">
            <div class="relative z-10 pt-12 px-8 pb-20 flex flex-col items-center text-white min-h-screen">
                <h1 class="text-4xl font-bold bg-white text-blue-800 py-4 px-8 rounded-lg mb-10 shadow-lg transform hover:scale-105 transition-transform duration-300">REQUIREMENTS</h1>

                <div class="flex flex-col lg:flex-row gap-10 items-start justify-center w-full max-w-7xl">

                    <!-- Document Type Icons -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10 w-full lg:w-1/2">
                        @foreach($requirements as $requirement)
                        <div onclick="showChecklist('{{ $requirement->id }}')" 
                            class="group transition-all duration-300 transform hover:scale-105 hover:shadow-2xl hover:shadow-blue-400 p-6 bg-white rounded-xl flex flex-col items-center text-blue-500 cursor-pointer border-2 border-transparent hover:border-blue-400">
                            <div class="relative">
                                <img src="{{ asset('storage/assets/docreq.png') }}" 
                                    class="h-32 w-32 mb-3 transform group-hover:rotate-3 transition-transform duration-300" 
                                    alt="{{ $requirement->title }} Icon" />
                                <div class="absolute -top-2 -right-2 bg-blue-500 text-white rounded-full w-8 h-8 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                            <span class="text-lg font-semibold group-hover:text-blue-600 transition-colors duration-300">{{ $requirement->title }}</span>
                        </div>
                        @endforeach
                    </div>

                    <!-- Requirements Checklist -->
                    <div class="bg-white p-8 rounded-xl shadow-lg text-black w-full lg:w-1/2 transform transition-all duration-300 hover:shadow-xl">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-2xl font-bold text-gray-800" id="checklistTitle">CHECKLIST OF REQUIREMENTS</h2>
                            <div class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">
                                <i class="fas fa-info-circle mr-2"></i>Click a document type to view requirements
                            </div>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-6">
                            <ul id="checklist" class="space-y-3">
                                <!-- Checklist items will be populated here -->
                            </ul>
                        </div>
                        <div class="mt-6 p-4 bg-blue-50 rounded-lg hidden" id="additionalInfo">
                            <h3 class="text-lg font-semibold text-blue-800 mb-2">Important Notes:</h3>
                            <ul class="list-disc list-inside text-blue-700 space-y-2">
                                <li>All documents must be original or certified true copy</li>
                                <li>Bring valid government-issued ID</li>
                                <li>Processing time may vary depending on document type</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    @include('layouts.footer')

    <script>
       

        const checklistData = {
            @foreach($requirements as $requirement)
                '{{ $requirement->id }}': {!! json_encode(explode("\n", $requirement->description)) !!},
            @endforeach
        };

        function showChecklist(type) {
            const checklist = checklistData[type];
            const checklistEl = document.getElementById("checklist");
            const title = document.getElementById("checklistTitle");
            const additionalInfo = document.getElementById("additionalInfo");
            const requirement = @json($requirements).find(r => r.id == type);

            // Update title with animation
            title.style.opacity = "0";
            setTimeout(() => {
                title.textContent = `REQUIREMENTS FOR ${requirement.title.toUpperCase()}`;
                title.style.opacity = "1";
            }, 300);

            // Clear and populate checklist with animation
            checklistEl.innerHTML = "";
            checklist.forEach((item, index) => {
                if (item.trim()) {
                    const li = document.createElement("li");
                    li.className = "flex items-start space-x-3 transform transition-all duration-300 opacity-0";
                    li.style.animationDelay = `${index * 100}ms`;
                    
                    const icon = document.createElement("i");
                    icon.className = "fas fa-check-circle text-green-500 mt-1";
                    
                    const text = document.createElement("span");
                    text.className = "text-gray-700";
                    text.textContent = item.trim();
                    
                    li.appendChild(icon);
                    li.appendChild(text);
                    checklistEl.appendChild(li);
                    
                    // Trigger animation
                    setTimeout(() => {
                        li.style.opacity = "1";
                        li.style.transform = "translateX(0)";
                    }, 50);
                }
            });

            // Show additional info
            additionalInfo.classList.remove("hidden");
            additionalInfo.style.opacity = "0";
            setTimeout(() => {
                additionalInfo.style.opacity = "1";
            }, 500);

            // Smooth scroll to checklist
            title.scrollIntoView({ behavior: "smooth", block: "start" });
        }

        // Add hover effect to document type cards
        document.querySelectorAll('.grid > div').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.05)';
                this.style.boxShadow = '0 20px 25px -5px rgba(59, 130, 246, 0.3)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
                this.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1)';
            });
        });
    </script>
</body>
</html>
