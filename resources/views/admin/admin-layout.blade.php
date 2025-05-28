<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civil Registry - Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @stack('styles')
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
            <a href="{{ route('admin.homepage') }}" class="text-white flex items-center space-x-2 px-4">
                <i class="fas fa-home text-2xl"></i>
                <span class="text-2xl font-extrabold">Admin Panel</span>
            </a>

            <nav>
                <a href="{{ route('admin.homepage') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <i class="fas fa-home mr-2"></i>Homepage
                </a>
                <a href="{{ route('admin.appointment') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <i class="fas fa-calendar-check mr-2"></i>Appointments
                </a>
                <a href="{{ route('admin.requirements') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <i class="fas fa-file-alt mr-2"></i>Requirements
                </a>
                <a href="{{ route('admin.faqs') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <i class="fas fa-question-circle mr-2"></i>FAQs
                </a>
                <a href="{{ route('admin.about') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <i class="fas fa-info-circle mr-2"></i>About
                </a>
                <a href="{{ route('admin.contact') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <i class="fas fa-envelope mr-2"></i>Contact
                </a>
                <a href="{{ route('admin.email-tester') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <i class="fas fa-envelope-open-text mr-2"></i>Email Tester
                </a>
            </nav>
        </div>

        <!-- Content -->
        <div class="flex-1">
            <!-- Top Navigation -->
            <div class="bg-white shadow-lg">
                <div class="container mx-auto px-6 py-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <button class="text-gray-500 focus:outline-none md:hidden" id="mobile-menu-button">
                                <i class="fas fa-bars text-2xl"></i>
                            </button>
                        </div>
                        <div class="flex items-center">
                            <div class="relative">
                                <form action="{{ route('admin.logout') }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="flex items-center text-gray-500 hover:text-gray-700 focus:outline-none">
                                        <i class="fas fa-sign-out-alt text-xl"></i>
                                        <span class="ml-2">Logout</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <main class="container mx-auto px-6 py-8">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const sidebar = document.querySelector('.bg-gray-800');

        mobileMenuButton.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>

    @stack('scripts')
</body>
</html> 