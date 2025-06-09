<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/x-icon" href="{{ asset('storage/assets/civil_registry_logo.png') }}">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title> Appointment Page - Admin View </title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />

  <style>

    body {
      font-family: 'Poppins';
      margin-bottom: 60px;
      overflow-x: hidden;
      height: 100%;
    }

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        .p-8 {
            padding: 1.5rem;
            min-height: auto;
        }

        .main-section {
            margin-bottom: 2rem;
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
        padding: 2rem;
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 100vw;
        overflow-x: hidden;
        }

        .overflow-x-auto {
            width: 100%;
            max-width: 100%;
            overflow-x: auto;
        }

        .max-h-\[600px\] {
            width: 100%;
            max-width: 100%;
        }

        table {
            width: 100%;
            max-width: 100%;
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

    

        html, body {
        height: 100%;
        margin: 0;
        display: flex;
        flex-direction: column;
        }

       main {
       flex: 1;
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
    

    .date-filter-container {
        background: rgba(255, 255, 255, 0.95);
        padding: 1.5rem;
        border-radius: 1rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        margin-bottom: 1.5rem;
        backdrop-filter: blur(8px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .date-input-group {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .date-input-wrapper {
        position: relative;
    }

    .date-input-wrapper label {
        display: block;
        font-size: 0.875rem;
        font-weight: 600;
        color: #1F2937;
        margin-bottom: 0.5rem;
        letter-spacing: 0.025em;
    }

    .date-input-wrapper input[type="date"] {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 2px solid #E5E7EB;
        border-radius: 0.75rem;
        background-color: white;
        color: #1F2937;
        font-size: 0.875rem;
        transition: all 0.3s ease;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        cursor: pointer;
        appearance: none;
        -webkit-appearance: none;
    }

    .date-input-wrapper input[type="date"]:hover {
        border-color: #93C5FD;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .date-input-wrapper input[type="date"]:focus {
        outline: none;
        border-color: #3B82F6;
        box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.15);
    }

    /* Custom date picker button styles */
    .date-input-wrapper input[type="date"]::-webkit-calendar-picker-indicator {
        opacity: 0;
        position: absolute;
        right: 0.75rem;
        top: 50%;
        transform: translateY(-50%);
        width: 1.25rem;
        height: 1.25rem;
        cursor: pointer;
        z-index: 2;
    }

    /* Custom date picker button */
    .date-input-wrapper::after {
        content: '';
        position: absolute;
        right: 0.75rem;
        top: 50%;
        transform: translateY(-50%);
        width: 1.25rem;
        height: 1.25rem;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%236B7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z'%3E%3C/path%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        pointer-events: none;
        transition: all 0.2s ease;
    }

    .date-input-wrapper:hover::after {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%233B82F6'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z'%3E%3C/path%3E%3C/svg%3E");
    }

    .date-input-wrapper input[type="date"]:focus + .date-input-wrapper::after {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%233B82F6'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z'%3E%3C/path%3E%3C/svg%3E");
    }

    /* Date picker popup styles */
    .date-input-wrapper input[type="date"]::-webkit-datetime-edit {
        padding: 0;
    }

    .date-input-wrapper input[type="date"]::-webkit-datetime-edit-fields-wrapper {
        padding: 0;
    }

    .date-input-wrapper input[type="date"]::-webkit-datetime-edit-text {
        padding: 0 0.2em;
        color: #6B7280;
    }

    .date-input-wrapper input[type="date"]::-webkit-datetime-edit-year-field,
    .date-input-wrapper input[type="date"]::-webkit-datetime-edit-month-field,
    .date-input-wrapper input[type="date"]::-webkit-datetime-edit-day-field {
        padding: 0 0.2em;
        color: #1F2937;
    }

    .date-input-wrapper input[type="date"]:focus::-webkit-datetime-edit-text,
    .date-input-wrapper input[type="date"]:focus::-webkit-datetime-edit-year-field,
    .date-input-wrapper input[type="date"]:focus::-webkit-datetime-edit-month-field,
    .date-input-wrapper input[type="date"]:focus::-webkit-datetime-edit-day-field {
        color: #3B82F6;
    }

    /* Date picker popup button styles */
    .date-input-wrapper input[type="date"]::-webkit-inner-spin-button,
    .date-input-wrapper input[type="date"]::-webkit-clear-button {
        display: none;
    }

    .date-input-wrapper input[type="date"]::-webkit-calendar-picker-indicator {
        background: transparent;
        bottom: 0;
        color: transparent;
        cursor: pointer;
        height: auto;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: auto;
    }

    .filter-button {
        background: linear-gradient(135deg, #3B82F6 0%, #2563EB 100%);
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 0.75rem;
        font-weight: 600;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        border: none;
        box-shadow: 0 4px 6px -1px rgba(37, 99, 235, 0.2);
        letter-spacing: 0.025em;
        position: relative;
        overflow: hidden;
    }

    .filter-button:hover {
        background: linear-gradient(135deg, #2563EB 0%, #1D4ED8 100%);
        transform: translateY(-1px);
        box-shadow: 0 6px 8px -1px rgba(37, 99, 235, 0.25);
    }

    .filter-button:active {
        transform: translateY(0);
        box-shadow: 0 2px 4px -1px rgba(37, 99, 235, 0.2);
    }

    .filter-button:focus {
        outline: none;
        box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.3);
    }

    .filter-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(
            90deg,
            transparent,
            rgba(255, 255, 255, 0.2),
            transparent
        );
        transition: 0.5s;
    }

    .filter-button:hover::before {
        left: 100%;
    }

    .filter-button i {
        font-size: 0.875rem;
        transition: transform 0.3s ease;
    }

    .filter-button:hover i {
        transform: rotate(90deg);
    }

    @media (min-width: 640px) {
        .date-filter-container {
            display: flex;
            align-items: flex-end;
            gap: 1.5rem;
        }

        .date-input-group {
            flex-direction: row;
            flex: 1;
            gap: 1.5rem;
        }

        .date-input-wrapper {
            flex: 1;
        }
    }

    /* Add smooth scrolling to the page */
    html {
        scroll-behavior: smooth;
    }

    /* Add a subtle animation to the container */
    .date-filter-container {
        animation: fadeIn 0.5s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Mobile Responsive Styles */
    @media (max-width: 768px) {
        .date-filter-container {
            padding: 1rem;
            margin: 0 -0.5rem 1rem -0.5rem;
            border-radius: 0.75rem;
        }

        .date-input-group {
            gap: 0.75rem;
        }

        .date-input-wrapper {
            margin-bottom: 0.5rem;
        }

        .date-input-wrapper label {
            font-size: 0.8125rem;
            margin-bottom: 0.375rem;
        }

        .date-input-wrapper input[type="date"] {
            padding: 0.625rem 0.75rem;
            font-size: 0.8125rem;
        }

        .filter-button {
            width: 100%;
            justify-content: center;
            padding: 0.625rem 1rem;
            margin-top: 0.5rem;
        }

        /* Table Responsive Styles */
        .overflow-x-auto {
            margin: 0 -0.5rem;
            padding: 0 0.5rem;
        }

        table {
            min-width: 800px; /* Ensure table doesn't get too squeezed */
        }

        th, td {
            padding: 0.75rem 0.5rem;
            font-size: 0.8125rem;
            white-space: nowrap;
        }

        /* Status badge adjustments */
        .status-badge {
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
        }

        /* Action buttons adjustments */
        .action-button {
            padding: 0.375rem 0.75rem;
            font-size: 0.75rem;
        }

        /* Select dropdown adjustments */
        select {
            padding: 0.375rem 0.5rem;
            font-size: 0.75rem;
        }

        /* Table container adjustments */
        .max-h-[600px] {
            max-height: 400px;
        }

        /* Scrollbar styling for better mobile experience */
        .overflow-x-auto::-webkit-scrollbar {
            height: 6px;
        }

        .overflow-x-auto::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 3px;
        }

        .overflow-x-auto::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 3px;
        }

        .overflow-x-auto::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        /* Add touch-friendly scrolling */
        .overflow-x-auto {
            -webkit-overflow-scrolling: touch;
            scrollbar-width: thin;
            scrollbar-color: #888 #f1f1f1;
        }

        /* Improve table header visibility */
        thead {
            position: sticky;
            top: 0;
            z-index: 10;
        }

        /* Add visual indicator for scrollable content */
        .overflow-x-auto::after {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            width: 20px;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.9));
            pointer-events: none;
        }
    }

    /* Small Mobile Devices */
    @media (max-width: 480px) {
        .date-filter-container {
            padding: 0.75rem;
        }

        .date-input-wrapper input[type="date"] {
            padding: 0.5rem 0.625rem;
        }

        .filter-button {
            padding: 0.5rem 0.75rem;
        }

        th, td {
            padding: 0.5rem 0.375rem;
            font-size: 0.75rem;
        }
    }

    /* Landscape Mode */
    @media (max-width: 768px) and (orientation: landscape) {
        .date-filter-container {
            flex-direction: row;
            align-items: flex-end;
        }

        .date-input-group {
            flex-direction: row;
        }

        .filter-button {
            width: auto;
            margin-top: 0;
        }

        .max-h-[600px] {
            max-height: 300px;
        }
    }

    /* Enhanced Table Responsive Styles */
    @media (max-width: 768px) {
        /* Table Container */
        .table-container {
            position: relative;
            margin: 0 -1rem;
            padding: 0 1rem;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        /* Table Styles */
        table {
            width: 100%;
            min-width: 800px;
            border-collapse: separate;
            border-spacing: 0;
        }

        /* Table Header */
        thead {
            position: sticky;
            top: 0;
            z-index: 20;
            background: #2563EB;
        }

        thead th {
            position: relative;
            padding: 0.75rem 0.5rem;
            font-size: 0.8125rem;
            font-weight: 600;
            color: white;
            text-align: left;
            white-space: nowrap;
            border-bottom: 2px solid #1D4ED8;
        }

        /* Table Body */
        tbody tr {
            transition: background-color 0.2s ease;
        }

        tbody tr:hover {
            background-color: rgba(37, 99, 235, 0.05);
        }

        tbody td {
            padding: 0.75rem 0.5rem;
            font-size: 0.8125rem;
            border-bottom: 1px solid #E5E7EB;
            vertical-align: middle;
        }

        /* Status Badge */
        .status-badge {
            display: inline-block;
            padding: 0.25rem 0.5rem;
            border-radius: 0.375rem;
            font-size: 0.75rem;
            font-weight: 500;
            text-align: center;
            min-width: 80px;
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 0.5rem;
            flex-wrap: nowrap;
        }

        .action-button {
            padding: 0.375rem 0.75rem;
            border-radius: 0.375rem;
            font-size: 0.75rem;
            font-weight: 500;
            white-space: nowrap;
            transition: all 0.2s ease;
        }

        /* Select Dropdown */
        select {
            padding: 0.375rem 0.5rem;
            border-radius: 0.375rem;
            font-size: 0.75rem;
            background-color: white;
            border: 1px solid #E5E7EB;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%236B7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 0.5rem center;
            background-size: 1rem;
            padding-right: 2rem;
        }

        /* Scrollbar Styling */
        .table-container::-webkit-scrollbar {
            height: 6px;
            width: 6px;
        }

        .table-container::-webkit-scrollbar-track {
            background: #F3F4F6;
            border-radius: 3px;
        }

        .table-container::-webkit-scrollbar-thumb {
            background: #9CA3AF;
            border-radius: 3px;
        }

        .table-container::-webkit-scrollbar-thumb:hover {
            background: #6B7280;
        }

        /* Scroll Indicators */
        .table-container::before,
        .table-container::after {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 20px;
            pointer-events: none;
            z-index: 10;
        }

        .table-container::before {
            left: 0;
            background: linear-gradient(to right, rgba(255, 255, 255, 0.9), transparent);
        }

        .table-container::after {
            right: 0;
            background: linear-gradient(to left, rgba(255, 255, 255, 0.9), transparent);
        }

        /* Empty State */
        .empty-state {
            padding: 2rem;
            text-align: center;
            background: white;
            border-radius: 0.5rem;
            margin: 1rem 0;
        }

        .empty-state p {
            color: #6B7280;
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }
    }

    /* Small Mobile Devices */
    @media (max-width: 480px) {
        thead th {
            padding: 0.625rem 0.375rem;
            font-size: 0.75rem;
        }

        tbody td {
            padding: 0.625rem 0.375rem;
            font-size: 0.75rem;
        }

        .status-badge {
            padding: 0.25rem 0.375rem;
            font-size: 0.6875rem;
            min-width: 70px;
        }

        .action-button {
            padding: 0.25rem 0.5rem;
            font-size: 0.6875rem;
        }

        select {
            padding: 0.25rem 0.375rem;
            font-size: 0.6875rem;
            padding-right: 1.75rem;
            background-size: 0.875rem;
        }
    }

    /* Landscape Mode */
    @media (max-width: 768px) and (orientation: landscape) {
        .table-container {
            max-height: 60vh;
        }

        thead {
            position: sticky;
            top: 0;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }
    }

    /* Touch Device Optimizations */
    @media (hover: none) {
        .action-button:active {
            transform: scale(0.98);
        }

        select:active {
            background-color: #F3F4F6;
        }

        tbody tr:active {
            background-color: rgba(37, 99, 235, 0.1);
        }
    }

  </style>
</head>

<body>
    @include('layouts.admin-navbar')

    <main class="p-8 main-section">
        <h2 class="text-2xl font-bold text-center mb-4">Scheduled Appointments</h2>
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

            <div class="max-h-[600px] overflow-y-auto relative">
                @if($appointments->isEmpty())
                    <div class="text-center py-8 bg-white shadow rounded-lg">
                        <p class="text-gray-500 text-lg">No appointments have been made yet.</p>
                    </div>
                @else
                    <table class="min-w-full bg-white shadow rounded-lg overflow-hidden">
                        <thead class="bg-blue-600 text-white">
                            <tr>
                                <th class="py-3 px-4 text-left">User Name</th>
                                <th class="py-3 px-4 text-left">Requester Name</th>
                                <th class="py-3 px-4 text-left">Document Owner</th>
                                <th class="py-3 px-4 text-left">Relationship</th>
                                <th class="py-3 px-4 text-left">Appointment Type</th>
                                <th class="py-3 px-4 text-left">Document Type</th>
                                <th class="py-3 px-4 text-left">Date & Time</th>
                                <th class="py-3 px-4 text-left">Status</th>
                                <th class="py-3 px-4 text-left">Action</th>
                                <th class="py-3 px-4 text-left">Delete</th>
                            </tr>
                        </thead>
                        <tbody id="appointmentTable">
                            @foreach($appointments as $appointment)
                            <tr class="border-b">
                                <td class="py-3 px-4">{{ $appointment->user->first_name }} {{ $appointment->user->last_name }}</td>
                                <td class="py-3 px-4">{{ $appointment->requester_name }}</td>
                                <td class="py-3 px-4">{{ $appointment->document_owner_name }}</td>
                                <td class="py-3 px-4">{{ $appointment->relationship }}</td>
                                <td class="py-3 px-4">{{ $appointment->appointment_type }}</td>
                                <td class="py-3 px-4">{{ $appointment->document_type }}</td>
                                <td class="py-3 px-4">{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('F d, Y') }} {{ \Carbon\Carbon::parse($appointment->appointment_time)->format('h:i A') }}</td>
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
                                            @php
                                                $appointmentDate = \Carbon\Carbon::parse($appointment->appointment_date)->format('Y-m-d');
                                                $dailyAppointments = \App\Models\Appointment::where('appointment_date', $appointmentDate)
                                                    ->where('status', 'Approved')
                                                    ->count();
                                                $isLimitReached = $dailyAppointments >= 40;
                                            @endphp
                                            <select name="status" onchange="handleStatusChange(this, {{ $appointment->id }}, {{ $isLimitReached ? 'true' : 'false' }})" class="status-select" {{ $isLimitReached ? 'disabled' : '' }}>
                                                <option value="Pending" {{ $appointment->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="Approved" {{ $appointment->status == 'Approved' ? 'selected' : '' }} {{ $isLimitReached ? 'disabled' : '' }}>Approved</option>
                                                <option value="Declined" {{ $appointment->status == 'Declined' ? 'selected' : '' }}>Declined</option>
                                            </select>
                                            @if($isLimitReached)
                                                <div class="text-red-600 text-sm mt-1">Daily appointment limit (40) reached for this date</div>
                                            @endif
                                        </form>
                                    @else
                                        <select disabled class="status-select">
                                            <option selected>{{ $appointment->status }}</option>
                                        </select>
                                    @endif
                                </td>
                                <td class="py-3 px-4">
                                    <button onclick="showDeleteModal({{ $appointment->id }})" class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 text-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="8" class="py-3 px-4 text-right">
                                    @if(Auth::guard('employee')->user()->username === 'admin1' || Auth::guard('employee')->user()->username === 'Admin1')
                                        <button onclick="showLogsModal()" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors duration-200 flex items-center space-x-2 inline-flex">
                                            <i class="fas fa-history"></i>
                                            <span>View All Logs</span>
                                        </button>
                                    @endif
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                @endif
            </div>
        </div>
    </main>

    <!-- Approved Appointments Section -->
    <main class="p-8 main-section">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold text-center">Approved Appointments</h2>
            <div class="bg-blue-100 text-blue-800 px-4 py-2 rounded-lg font-semibold">
                Approved: <span id="approvedCount">{{ $approvedAppointments->count() }}</span> / 40
            </div>
        </div>
        <div class="overflow-x-auto">
            <div class="mb-4 flex flex-col sm:flex-row justify-between items-center gap-4 bg-white/95 p-6 rounded-xl shadow-lg backdrop-blur-sm border border-white/20">
                <div class="flex flex-col sm:flex-row gap-4">
                    <div class="relative">
                        <label for="start_date" class="block text-sm font-medium text-gray-700 mb-1">Start Date</label>
                        <div class="relative">
                            <input type="date" id="start_date" name="start_date" 
                                class="w-full px-4 py-2.5 text-gray-700 bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200 ease-in-out cursor-pointer"
                                onchange="updateApprovedCount(this.value)"
                            >
                        </div>
                    </div>
                    <div class="relative">
                        <label for="end_date" class="block text-sm font-medium text-gray-700 mb-1">End Date</label>
                        <div class="relative">
                            <input type="date" id="end_date" name="end_date" 
                                class="w-full px-4 py-2.5 text-gray-700 bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200 ease-in-out cursor-pointer"
                                onchange="updateApprovedCount(this.value)"
                            >
                        </div>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button onclick="filterApprovedAppointments()" class="px-4 py-2.5 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-lg font-semibold hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 ease-in-out transform hover:-translate-y-0.5 shadow-lg hover:shadow-xl flex items-center gap-2">
                        <i class="fas fa-filter"></i>
                        <span>Filter</span>
                    </button>
                    <button onclick="clearDateFilters()" class="px-4 py-2.5 bg-gradient-to-r from-gray-600 to-gray-700 text-white rounded-lg font-semibold hover:from-gray-700 hover:to-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-all duration-200 ease-in-out transform hover:-translate-y-0.5 shadow-lg hover:shadow-xl flex items-center gap-2">
                        <i class="fas fa-times"></i>
                        <span>Clear</span>
                    </button>
                </div>
            </div>

            <div class="max-h-[600px] overflow-y-auto relative">
                <table class="min-w-full bg-white shadow rounded-lg overflow-hidden">
                    <thead class="bg-blue-600 text-white">
                        <tr>
                            <th class="py-3 px-4 text-left">Reference Number</th>
                            <th class="py-3 px-4 text-left">User Name</th>
                            <th class="py-3 px-4 text-left">Requester Name</th>
                            <th class="py-3 px-4 text-left">Document Owner</th>
                            <th class="py-3 px-4 text-left">Relationship</th>
                            <th class="py-3 px-4 text-left">Appointment Type</th>
                            <th class="py-3 px-4 text-left">Document Type</th>
                            <th class="py-3 px-4 text-left">Date & Time</th>
                            <th class="py-3 px-4 text-left">Status</th>
                            @if(Auth::guard('employee')->user()->username === 'admin1' || Auth::guard('employee')->user()->username === 'Admin1')
                                <th class="py-3 px-4 text-left">Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody id="approvedAppointmentTable">
                        @foreach($approvedAppointments as $appointment)
                        <tr class="border-b">
                            <td class="py-3 px-4 font-medium">{{ $appointment->reference_number }}</td>
                            <td class="py-3 px-4">{{ $appointment->user->first_name }} {{ $appointment->user->last_name }}</td>
                            <td class="py-3 px-4">{{ $appointment->requester_name }}</td>
                            <td class="py-3 px-4">{{ $appointment->document_owner_name }}</td>
                            <td class="py-3 px-4">{{ $appointment->relationship }}</td>
                            <td class="py-3 px-4">{{ $appointment->appointment_type }}</td>
                            <td class="py-3 px-4">{{ $appointment->document_type }}</td>
                            <td class="py-3 px-4">{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('F d, Y') }} {{ \Carbon\Carbon::parse($appointment->appointment_time)->format('h:i A') }}</td>
                            <td class="py-3 px-4">
                                <span class="bg-green-300 text-green-900 px-2 py-1 rounded text-sm">{{ $appointment->status }}</span>
                            </td>
                            @if(Auth::guard('employee')->user()->username === 'admin1' || Auth::guard('employee')->user()->username === 'Admin1')
                                <td class="py-3 px-4">
                                    <form action="{{ route('admin.appointments.status', $appointment->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('PUT')
                                        <select name="status" onchange="handleApprovedStatusChange(this, {{ $appointment->id }})" class="status-select">
                                            <option value="Approved" {{ $appointment->status === 'Approved' ? 'selected' : '' }}>Approved</option>
                                            <option value="Completed" {{ $appointment->status === 'Completed' ? 'selected' : '' }}>Completed</option>
                                            <option value="Cancelled">Cancel</option>
                                        </select>
                                    </form>
                                </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- Cancellation Modal -->
    <div id="cancellationModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-md w-full">
            <h2 class="text-xl font-bold mb-4 text-center text-red-700">Cancel Appointment</h2>
            <p class="text-gray-600 mb-4 text-center">Are you sure you want to cancel this appointment?</p>
            <form id="cancellationForm" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="status" value="Cancelled">
                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="closeCancellationModal()" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400 transition-colors duration-200">No, Keep It</button>
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition-colors duration-200">Yes, Cancel Appointment</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Modal -->
    <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-md w-full">
            <h2 class="text-xl font-bold mb-4 text-center text-red-700">Delete Appointment</h2>
            <p class="text-gray-600 mb-4 text-center">Are you sure you want to delete this appointment? This action cannot be undone.</p>
            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="closeDeleteModal()" class="modal-button cancel">Cancel</button>
                    <button type="submit" class="modal-button confirm">Delete Appointment</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Logs Modal -->
    <div id="logsModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-4xl w-full">
            <h2 class="text-xl font-bold mb-4 text-center text-blue-700">Appointment Activity Logs</h2>
            <div class="max-h-[500px] overflow-y-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-2 px-4 text-left">Date</th>
                            <th class="py-2 px-4 text-left">Employee</th>
                            <th class="py-2 px-4 text-left">Action</th>
                            <th class="py-2 px-4 text-left">Status Change</th>
                        </tr>
                    </thead>
                    <tbody id="logsTableBody">
                        <!-- Logs will be populated here -->
                    </tbody>
                </table>
            </div>
            <div class="flex justify-end mt-4">
                <button onclick="closeLogsModal()" class="modal-button cancel">Close</button>
            </div>
        </div>
    </div>

    <!-- Loading Overlay -->
    <div id="loadingOverlay" class="fixed inset-0 bg-black/40 backdrop-blur-sm flex items-center justify-center z-50 hidden">
        <div class="bg-white/90 rounded-2xl p-8 flex flex-col items-center shadow-2xl transform transition-all duration-300 scale-95 opacity-0" id="loadingContent">
            <div class="relative">
                <div class="w-16 h-16 border-4 border-blue-200 rounded-full"></div>
                <div class="w-16 h-16 border-4 border-blue-600 rounded-full animate-spin border-t-transparent absolute top-0 left-0"></div>
            </div>
            <div class="mt-4 flex flex-col items-center">
                <p class="text-gray-800 font-medium text-lg">Loading</p>
                <div class="flex space-x-1 mt-2">
                    <div class="w-2 h-2 bg-blue-600 rounded-full animate-bounce" style="animation-delay: 0ms"></div>
                    <div class="w-2 h-2 bg-blue-600 rounded-full animate-bounce" style="animation-delay: 150ms"></div>
                    <div class="w-2 h-2 bg-blue-600 rounded-full animate-bounce" style="animation-delay: 300ms"></div>
                </div>
            </div>
        </div>
    </div>

@include('layouts.footer')
  

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

    // Show loading overlay with animation
    function showLoading() {
        const overlay = document.getElementById('loadingOverlay');
        const content = document.getElementById('loadingContent');
        overlay.classList.remove('hidden');
        // Trigger reflow
        void overlay.offsetWidth;
        content.classList.remove('scale-95', 'opacity-0');
        content.classList.add('scale-100', 'opacity-100');
    }

    // Hide loading overlay with animation
    function hideLoading() {
        const overlay = document.getElementById('loadingOverlay');
        const content = document.getElementById('loadingContent');
        content.classList.remove('scale-100', 'opacity-100');
        content.classList.add('scale-95', 'opacity-0');
        setTimeout(() => {
            overlay.classList.add('hidden');
        }, 300); // Match the duration of the transition
    }

    function handleStatusChange(select, appointmentId, isLimitReached) {
        if (isLimitReached && select.value === 'Approved') {
            Swal.fire({
                icon: 'warning',
                title: 'Appointment Limit Reached',
                text: 'The daily appointment limit (40) has been reached for this date.',
                confirmButtonColor: '#426DDC'
            });
            select.value = 'Pending';
            return;
        }

        if (select.value === 'Cancelled') {
            const modal = document.getElementById('cancellationModal');
            const form = document.getElementById('cancellationForm');
            form.action = `{{ url('admin/appointments') }}/${appointmentId}/status`;
            modal.classList.remove('hidden');
            select.value = 'Pending';
        } else {
            showLoading();
            select.form.submit();
        }
    }

    function closeCancellationModal() {
        const modal = document.getElementById('cancellationModal');
        modal.classList.add('hidden');
    }

    function showDeleteModal(appointmentId) {
        const modal = document.getElementById('deleteModal');
        const form = document.getElementById('deleteForm');
        form.action = `{{ url('admin/appointments') }}/${appointmentId}`;
        modal.classList.remove('hidden');
    }

    function closeDeleteModal() {
        const modal = document.getElementById('deleteModal');
        modal.classList.add('hidden');
    }

    function showLogsModal() {
        const logsModal = document.getElementById('logsModal');
        logsModal.classList.remove('hidden');
        
        showLoading();
        fetch('{{ route("admin.appointments.all-logs") }}', {
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            credentials: 'same-origin'
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                hideLoading();
                if (data.success) {
                    const logsTableBody = document.getElementById('logsTableBody');
                    logsTableBody.innerHTML = '';
                    
                    data.logs.forEach(log => {
                        const row = document.createElement('tr');
                        row.className = 'border-b hover:bg-gray-50';
                        
                        const date = new Date(log.created_at).toLocaleString();
                        
                        let actionText = log.action;
                        switch(log.action) {
                            case 'status_update':
                                actionText = 'Updated Status';
                                break;
                            case 'delete':
                                actionText = 'Deleted Appointment';
                                break;
                            case 'create':
                                actionText = 'Created Appointment';
                                break;
                        }
                        
                        let statusChange = '';
                        if (log.action === 'status_update') {
                            const oldStatus = log.old_status ? log.old_status.charAt(0).toUpperCase() + log.old_status.slice(1) : 'Unknown';
                            const newStatus = log.new_status ? log.new_status.charAt(0).toUpperCase() + log.new_status.slice(1) : 'Unknown';
                            statusChange = `Changed from ${oldStatus} to ${newStatus}`;
                        } else if (log.action === 'delete') {
                            statusChange = 'Appointment was removed';
                        } else if (log.action === 'create') {
                            statusChange = 'New appointment was created';
                        }
                        
                        row.innerHTML = `
                            <td class="py-2 px-4">${date}</td>
                            <td class="py-2 px-4">${log.employee ? log.employee.first_name + ' ' + log.employee.last_name : 'Unknown'}</td>
                            <td class="py-2 px-4">${actionText}</td>
                            <td class="py-2 px-4">${statusChange}</td>
                        `;
                        
                        logsTableBody.appendChild(row);
                    });
                }
            })
            .catch(error => {
                hideLoading();
                console.error('Error fetching logs:', error);
                alert('Failed to load logs. Please try again.');
            });
    }

    function closeLogsModal() {
        const logsModal = document.getElementById('logsModal');
        logsModal.classList.add('hidden');
    }

    function updateApprovedCount(selectedDate) {
        const startDate = document.getElementById('start_date').value;
        const endDate = document.getElementById('end_date').value;
        
        if (!startDate || !endDate) return;
        
        showLoading();
        fetch(`{{ route('admin.appointments.filter-approved') }}?start_date=${startDate}&end_date=${endDate}`, {
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            credentials: 'same-origin'
        })
        .then(response => response.json())
        .then(data => {
            hideLoading();
            if (data.success) {
                // Count appointments for each date
                const dateCounts = {};
                data.appointments.forEach(appointment => {
                    const date = appointment.appointment_date;
                    if (!dateCounts[date]) {
                        dateCounts[date] = 0;
                    }
                    dateCounts[date]++;
                });

                // Update the count display with the total count
                const totalCount = data.appointments.length;
                document.getElementById('approvedCount').textContent = totalCount;

                // Log the counts for each date (for debugging)
                console.log('Appointments per date:', dateCounts);
            }
        })
        .catch(error => {
            hideLoading();
            console.error('Error updating count:', error);
        });
    }

    function filterApprovedAppointments() {
        const startDate = document.getElementById('start_date').value;
        const endDate = document.getElementById('end_date').value;
        const isAdmin1 = {{ Auth::guard('employee')->user()->username === 'admin1' || Auth::guard('employee')->user()->username === 'Admin1' ? 'true' : 'false' }};
        
        if (!startDate || !endDate) {
            alert('Please select both start and end dates');
            return;
        }

        showLoading();
        fetch(`{{ route('admin.appointments.filter-approved') }}?start_date=${startDate}&end_date=${endDate}`, {
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            credentials: 'same-origin'
        })
        .then(response => response.json())
        .then(data => {
            hideLoading();
            if (data.success) {
                const tableBody = document.getElementById('approvedAppointmentTable');
                if (!tableBody) {
                    console.error('Table body element not found');
                    return;
                }
                
                tableBody.innerHTML = '';
                
                // Update the count display
                const countElement = document.getElementById('approvedCount');
                if (countElement) {
                    countElement.textContent = data.appointments.length;
                }
                
                data.appointments.forEach(appointment => {
                    const row = document.createElement('tr');
                    row.className = 'border-b';
                    
                    // Format the date and time
                    const date = new Date(appointment.appointment_date);
                    const time = appointment.appointment_time;
                    
                    // Format date as "Month Day, Year"
                    const formattedDate = date.toLocaleDateString('en-US', {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    });
                    
                    // Format time as "HH:MM AM/PM"
                    const [hours, minutes] = time.split(':');
                    const timeString = new Date(2000, 0, 1, parseInt(hours), parseInt(minutes)).toLocaleTimeString('en-US', {
                        hour: 'numeric',
                        minute: '2-digit',
                        hour12: true
                    });
                    
                    let rowHtml = `
                        <td class="py-3 px-4 font-medium">${appointment.reference_number}</td>
                        <td class="py-3 px-4">${appointment.user.first_name} ${appointment.user.last_name}</td>
                        <td class="py-3 px-4">${appointment.requester_name}</td>
                        <td class="py-3 px-4">${appointment.document_owner_name}</td>
                        <td class="py-3 px-4">${appointment.relationship}</td>
                        <td class="py-3 px-4">${appointment.appointment_type}</td>
                        <td class="py-3 px-4">${appointment.document_type}</td>
                        <td class="py-3 px-4">${formattedDate} ${timeString}</td>
                        <td class="py-3 px-4">
                            <span class="bg-green-300 text-green-900 px-2 py-1 rounded text-sm">${appointment.status}</span>
                        </td>`;

                    if (isAdmin1) {
                        rowHtml += `
                            <td class="py-3 px-4">
                                <form action="/admin/appointments/${appointment.id}/status" method="POST" class="inline">
                                    @csrf
                                    @method('PUT')
                                    <select name="status" onchange="handleApprovedStatusChange(this, ${appointment.id})" class="status-select">
                                        <option value="Approved" ${appointment.status === 'Approved' ? 'selected' : ''}>Approved</option>
                                        <option value="Completed" ${appointment.status === 'Completed' ? 'selected' : ''}>Completed</option>
                                        <option value="Cancelled">Cancel</option>
                                    </select>
                                </form>
                            </td>`;
                    }

                    row.innerHTML = rowHtml;
                    tableBody.appendChild(row);
                });
            }
        })
        .catch(error => {
            hideLoading();
            console.error('Error filtering appointments:', error);
            alert('Failed to filter appointments. Please try again.');
        });
    }

    function handleApprovedStatusChange(select, appointmentId) {
        if (select.value === 'Cancelled') {
            const modal = document.getElementById('cancellationModal');
            const form = document.getElementById('cancellationForm');
            form.action = `{{ url('admin/appointments') }}/${appointmentId}/status`;
            modal.classList.remove('hidden');
            select.value = 'Approved';
        } else {
            showLoading();
            const form = select.closest('form');
            form.submit();
        }
    }

    // Add loading state to form submissions
    document.addEventListener('DOMContentLoaded', function() {
        const forms = document.querySelectorAll('form');
        forms.forEach(form => {
            form.addEventListener('submit', function() {
                showLoading();
            });
        });

        // Add form submission handler for cancellation form
        const cancellationForm = document.getElementById('cancellationForm');
        if (cancellationForm) {
            cancellationForm.addEventListener('submit', function(e) {
                e.preventDefault();
                showLoading();
                const formData = new FormData(this);
                formData.append('status', 'Cancelled');
                
                // Submit the form
                fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-HTTP-Method-Override': 'PUT'
                    },
                    credentials: 'same-origin'
                })
                .then(async response => {
                    const responseText = await response.text();
                    console.log('Response Status:', response.status);
                    console.log('Response Text:', responseText);
                    
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}, message: ${responseText}`);
                    }
                    
                    try {
                        return JSON.parse(responseText);
                    } catch (e) {
                        console.error('Failed to parse JSON:', e);
                        throw new Error('Invalid JSON response from server');
                    }
                })
                .then(data => {
                    hideLoading();
                    if (data.success) {
                        window.location.reload();
                    } else {
                        throw new Error(data.message || 'Failed to cancel appointment');
                    }
                })
                .catch(error => {
                    hideLoading();
                    console.error('Error:', error);
                    alert(error.message || 'Failed to cancel appointment. Please try again.');
                });
            });
        }
    });

    // Add this at the beginning of your script section
    document.addEventListener('DOMContentLoaded', function() {
        const startDateInput = document.getElementById('start_date');
        const endDateInput = document.getElementById('end_date');

        // Function to disable weekends
        function disableWeekends(input) {
            input.addEventListener('input', function(e) {
                const selectedDate = new Date(this.value);
                const day = selectedDate.getDay();
                
                // 0 is Sunday, 6 is Saturday
                if (day === 0 || day === 6) {
                    alert('Weekends are not available. Please select a weekday.');
                    this.value = '';
                }
            });

            // Add min attribute to prevent selecting past dates
            const today = new Date();
            const yyyy = today.getFullYear();
            const mm = String(today.getMonth() + 1).padStart(2, '0');
            const dd = String(today.getDate()).padStart(2, '0');
            input.min = `${yyyy}-${mm}-${dd}`;
        }

        // Apply to both date inputs
        disableWeekends(startDateInput);
        disableWeekends(endDateInput);

        // Add note about office hours
        const dateFilterContainer = document.querySelector('.date-filter-container');
        const officeHoursNote = document.createElement('p');
        officeHoursNote.className = 'text-sm text-gray-600 mt-2';
        officeHoursNote.innerHTML = '<i class="fas fa-info-circle mr-1"></i> Note: Office is open Monday to Friday, 8:00 AM - 5:00 PM';
        dateFilterContainer.appendChild(officeHoursNote);
    });

    function clearDateFilters() {
        // Clear date inputs
        document.getElementById('start_date').value = '';
        document.getElementById('end_date').value = '';
        
        // Reset the approved count to the initial value
        const initialCount = {{ $approvedAppointments->count() }};
        document.getElementById('approvedCount').textContent = initialCount;
        
        // Reload the approved appointments table to show all appointments
        showLoading();
        fetch('{{ route("admin.appointments.filter-approved") }}', {
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            credentials: 'same-origin'
        })
        .then(response => response.json())
        .then(data => {
            hideLoading();
            if (data.success) {
                const tableBody = document.getElementById('approvedAppointmentTable');
                tableBody.innerHTML = '';
                
                data.appointments.forEach(appointment => {
                    const row = document.createElement('tr');
                    row.className = 'border-b';
                    let rowHtml = `
                        <td class="py-3 px-4 font-medium">${appointment.reference_number}</td>
                        <td class="py-3 px-4">${appointment.user.first_name} ${appointment.user.last_name}</td>
                        <td class="py-3 px-4">${appointment.requester_name}</td>
                        <td class="py-3 px-4">${appointment.document_owner_name}</td>
                        <td class="py-3 px-4">${appointment.relationship}</td>
                        <td class="py-3 px-4">${appointment.appointment_type}</td>
                        <td class="py-3 px-4">${appointment.document_type}</td>
                        <td class="py-3 px-4">${new Date(appointment.appointment_date).toLocaleDateString()} ${new Date(appointment.appointment_time).toLocaleTimeString()}</td>
                        <td class="py-3 px-4">
                            <span class="bg-green-300 text-green-900 px-2 py-1 rounded text-sm">${appointment.status}</span>
                        </td>`;

                    if ({{ Auth::guard('employee')->user()->username === 'admin1' || Auth::guard('employee')->user()->username === 'Admin1' ? 'true' : 'false' }}) {
                        rowHtml += `
                            <td class="py-3 px-4">
                                <form action="/admin/appointments/${appointment.id}/status" method="POST" class="inline">
                                    @csrf
                                    @method('PUT')
                                    <select name="status" onchange="handleApprovedStatusChange(this, ${appointment.id})" class="status-select">
                                        <option value="Approved" ${appointment.status === 'Approved' ? 'selected' : ''}>Approved</option>
                                        <option value="Completed" ${appointment.status === 'Completed' ? 'selected' : ''}>Completed</option>
                                        <option value="Cancelled">Cancel</option>
                                    </select>
                                </form>
                            </td>`;
                    }

                    row.innerHTML = rowHtml;
                    tableBody.appendChild(row);
                });
            }
        })
        .catch(error => {
            hideLoading();
            console.error('Error resetting appointments:', error);
            alert('Failed to reset appointments. Please try again.');
        });
    }
  </script>
</body>
</html>
