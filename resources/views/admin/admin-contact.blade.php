<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Contact Us - Admin View</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/assets/civil_registry_logo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- Add Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- External JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        /* Reset and Base Styles */
        .contact-page {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: #d8e4f0;
        }

        /* Navigation Styles */
        .contact-page nav {
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

        .contact-page .image-container img {
            width: 50px;
            height: 45px;
            margin-top: 5px;
            margin-left: 20px;
            position: relative;
            border-radius: 50%;
        }

        .contact-page .logo-name {
            font-size: 15px;
            margin-left: 30px;
            white-space: nowrap;
            font-family: "Poppins", sans-serif;
        }

        .contact-page .logo-name a {
            margin-left: -16px;
            font-family: "Poppins", sans-serif;
        }

        .contact-page nav button {
            display: none;
        }

        .contact-page nav .menu {
            width: 100%;
            margin-top: -5px;
            margin-left: 30px;
            text-align: center;
            justify-content: center;
            align-items: center;
        }

        .contact-page nav .menu ul li {
            padding: -5px;
            font-size: 17px;
            list-style: none;
            font-weight: bold;
            margin-right: 50px;
            display: inline-block;
            position: relative;
            font-family: "Poppins", sans-serif;
        }

        .contact-page nav .menu ul:nth-child(2) li {
            top: -8px;
            left: 10px;
            color: #757575;
            position: relative;
        }

        .contact-page nav .menu ul li a {
            color: black;
            text-decoration: none;
        }

        .contact-page nav .menu .active,
        .contact-page .a:hover {
            color: #426DDC;
            font-size: 20px;
        }

        .contact-page nav .menu ul li a:hover {
            color: #426DDC;
            transition: 0.3s ease;
        }

        .contact-page .dropdown_menuuu {
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
        }

        .contact-page .menu ul li:hover .dropdown_menuuu {
            display: block;
        }

        .contact-page .dropdown_menuuu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .contact-page .dropdown_menuuu ul li {
            width: 100%;
            padding: 8px 20px;
            white-space: nowrap;
            transition: background-color 0.3s ease;
        }

        .contact-page .dropdown_menuuu ul li:hover {
            background-color: #f5f5f5;
        }

        .contact-page .dropdown_menuuu ul li a {
            color: #333;
            text-decoration: none;
            font-size: 15px;
            display: block;
            width: 100%;
        }

        .contact-page .dropdown_menuuu ul li a:hover {
            color: #426DDC;
        }

        .contact-page #accountDropdown {
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

        .contact-page #accountDropdown.show {
            display: block;
        }

        .contact-page #accountDropdown a {
            display: block;
            padding: 10px 16px;
            color: #333;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            font-family: "Poppins", sans-serif;
        }

        .contact-page #accountDropdown a:hover {
            color: #426DDC;
            transition: 0.3s ease;
        }

        .contact-page nav .search-container {
            position: relative;
            margin-left: auto;
            margin-right: 20px;
            display: flex;
            align-items: center;
        }

        .contact-page nav .search-container input[type="text"] {
            padding: 8px 35px 8px 15px;
            border-radius: 20px;
            border: 1px solid #ccc;
            font-family: "Poppins", sans-serif;
            font-size: 14px;
            outline: none;
            transition: all 0.3s ease;
            width: 180px;
        }

        .contact-page nav .search-container input[type="text"]:focus {
            border-color: #426DDC;
            box-shadow: 0 0 5px rgba(66, 109, 220, 0.5);
        }

        .contact-page nav .search-container .fa-search, button.search-button {
            position: absolute;
            border: none;
            background: none;
            right: 12px;
            color: gray;
            font-size: 16px;
            pointer-events: auto;
        }

        .contact-page nav .search-container .fa-search:hover {
            color: #426DDC;
            transition: 0.3s ease;
        }

        .contact-page nav .user-icon {
            font-size: 28px;
            color: #333;
            margin-right: 23px;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .contact-page nav .user-icon:hover {
            color: #426DDC;
        }

        /* Contact Section */
        .contact-page .contact-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            padding: 80px 10%;
            background-color: #d8e4f0;
            flex-grow: 1;
            align-items: stretch;
            min-height: 600px;
        }

        .contact-page .contact-text {
            max-width: 500px;
            display: flex;
            flex-direction: column;
        }

        .contact-page .contact-text h1 {
            font-size: 30px;
            color: #2c3e50;
            margin-bottom: 20px;
            text-align: center;
        }

        .contact-page .contact-text p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .contact-page .contact-info-box {
            background-color: #f9f9ff;
            border-radius: 12px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 20px;
        }

        .contact-page .contact-info-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(66, 109, 220, 0.25);
        }

        .contact-page .contact-info-box h3 {
            margin-bottom: 20px;
            font-size: 20px;
            color: #2c3e50;
        }

        .contact-page .contact-form {
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .contact-page .contact-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #2c3e50;
            text-align: center;
        }

        .contact-page .form-group {
            margin-bottom: 20px;
        }

        .contact-page .form-group:last-child {
            margin-bottom: 0;
        }

        .contact-page .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #2c3e50;
        }

        .contact-page .form-group input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.3s;
            margin-bottom: 10px;
        }

        .contact-page .form-group input:focus {
            border-color: #426DDC;
            outline: none;
        }

        .contact-page .form-group button {
            padding: 12px 24px;
            background: #426DDC;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            width: 100%;
        }

        .contact-page .form-group button:hover {
            background: #274aa6;
            transform: scale(1.02);
        }

        /* Make the right column (feedback) fill the height */
        .contact-page .contact-section > .contact-form {
            display: flex;
            flex-direction: column;
            height: 100%;
            min-height: 400px;
        }

        .contact-page .contact-section > .contact-form h2 {
            flex-shrink: 0;
        }

        .contact-page .feedback-scroll-container {
            flex: 1 1 auto;
            max-height: unset;
            min-height: 0;
            overflow-y: auto;
            padding-right: 15px;
            margin-top: 15px;
        }

        .contact-page .feedback-scroll-container::-webkit-scrollbar {
            width: 6px;
        }

        .contact-page .feedback-scroll-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }

        .contact-page .feedback-scroll-container::-webkit-scrollbar-thumb {
            background: #426DDC;
            border-radius: 4px;
        }

        .contact-page .feedback-scroll-container::-webkit-scrollbar-thumb:hover {
            background: #274aa6;
        }

        .contact-page .feedback-item {
            margin-bottom: 15px;
            padding: 12px;
            background: #f9f9ff;
            border-radius: 8px;
            transition: transform 0.2s ease;
        }

        .contact-page .feedback-item:hover {
            transform: translateY(-2px);
        }

        .contact-page .feedback-header {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 8px;
        }

        .contact-page .feedback-icon {
            font-size: 24px;
            color: #426DDC;
        }

        .contact-page .feedback-name {
            font-weight: bold;
            color: #2c3e50;
            font-size: 14px;
        }

        .contact-page .feedback-email {
            color: #888;
            font-size: 13px;
            margin-left: 8px;
        }

        .contact-page .feedback-message {
            background: #e6f0fa;
            color: #222;
            border-radius: 8px;
            padding: 10px 15px;
            font-size: 14px;
            font-style: italic;
            line-height: 1.4;
        }

        /* Footer Styles */
        .contact-page footer {
            background: #fff;
            padding: 40px 0 0 0;
            margin-top: auto;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-page .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            align-items: start;
        }

        .contact-page .footer-content {
            padding: 0 15px;
        }

        .contact-page .footer-content h3 {
            color: #426DDC;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
            text-align: left;
        }

        .contact-page .footer-content p {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 10px;
            width: 100%;
        }

        .contact-page .footer-content a {
            color: #666;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-page .footer-content a:hover {
            color: #426DDC;
        }

        .contact-page .map-container {
            width: 100%;
            height: 200px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-page .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .contact-page .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 15px;
            justify-content: flex-start;
        }

        .contact-page .social-icons li {
            list-style: none;
        }

        .contact-page .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #f5f5f5;
            transition: all 0.3s ease;
        }

        .contact-page .social-icons a:hover {
            background: #426DDC;
            transform: translateY(-3px);
        }

        .contact-page .social-icons i {
            color: #666;
            font-size: 20px;
            transition: color 0.3s ease;
        }

        .contact-page .social-icons a:hover i {
            color: #fff;
        }

        .contact-page .bottom-bar {
            background: #426DDC;
            text-align: center;
            padding: 15px 0;
            margin-top: 40px;
        }

        .contact-page .bottom-bar p {
            color: #fff;
            margin: 0;
            font-size: 14px;
        }

        /* Modal Styles */
        .contact-page .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
            align-items: center;
            justify-content: center;
        }

        .contact-page .modal.show {
            display: flex;
        }

        .contact-page .modal-content {
            background-color: white;
            padding: 2rem;
            border-radius: 0.5rem;
            width: 100%;
            max-width: 32rem;
            margin: 1rem;
            position: relative;
        }

        .contact-page .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .contact-page .modal-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #1f2937;
        }

        .contact-page .modal-close {
            color: #6b7280;
            cursor: pointer;
            padding: 0.5rem;
        }

        .contact-page .modal-close:hover {
            color: #374151;
        }

        .contact-page .form-group {
            margin-bottom: 1rem;
        }

        .contact-page .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: #374151;
            margin-bottom: 0.5rem;
        }

        .contact-page .form-input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            font-size: 0.875rem;
        }

        .contact-page .form-input:focus {
            outline: none;
            border-color: #426DDC;
            box-shadow: 0 0 0 3px rgba(66, 109, 220, 0.1);
        }

        .contact-page .form-textarea {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            font-size: 0.875rem;
            min-height: 8rem;
            resize: vertical;
        }

        .contact-page .form-textarea:focus {
            outline: none;
            border-color: #426DDC;
            box-shadow: 0 0 0 3px rgba(66, 109, 220, 0.1);
        }

        .contact-page .btn {
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            font-size: 0.875rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }

        .contact-page .btn-secondary {
            background-color: #f3f4f6;
            color: #374151;
        }

        .contact-page .btn-secondary:hover {
            background-color: #e5e7eb;
        }

        .contact-page .btn-primary {
            background-color: #426DDC;
            color: white;
        }

        .contact-page .btn-primary:hover {
            background-color: #274aa6;
        }

        .contact-page .button-group {
            display: flex;
            justify-content: flex-end;
            gap: 0.75rem;
            margin-top: 1rem;
        }

        /* Responsive Styles */
        @media (max-width: 1200px) {
            .contact-page .contact-section {
                padding: 60px 5%;
            }
        }

        @media (max-width: 992px) {
            .contact-page .contact-section {
                grid-template-columns: 1fr;
                gap: 30px;
                padding: 40px 5%;
            }

            .contact-page .contact-text {
                max-width: 100%;
            }

            .contact-page .contact-info-box {
                margin-bottom: 30px;
            }

            .contact-page .container {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }

            .contact-page .footer-content:last-child {
                grid-column: span 2;
            }
        }

        @media (max-width: 768px) {
            .contact-page .contact-section {
                padding: 30px 20px;
            }

            .contact-page .contact-text h1 {
                font-size: 24px;
            }

            .contact-page .contact-form {
                padding: 20px;
            }

            .contact-page .contact-form h2 {
                font-size: 20px;
            }

            .contact-page .form-group input,
            .contact-page .form-group textarea {
                padding: 10px;
            }

            .contact-page .button-group {
                flex-direction: column;
                gap: 10px;
            }

            .contact-page .button-group button {
                width: 100%;
            }

            .contact-page footer {
                padding: 30px 0 0 0;
            }

            .contact-page .container {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .contact-page .footer-content {
                text-align: center;
                padding: 0;
            }

            .contact-page .footer-content h3 {
                text-align: center;
            }

            .contact-page .footer-content p {
                text-align: center;
            }

            .contact-page .map-container {
                height: 250px;
                margin: 0 auto;
                max-width: 500px;
            }

            .contact-page .social-icons {
                justify-content: center;
            }

            .contact-page .bottom-bar {
                margin-top: 30px;
            }

            .contact-page nav {
                height: auto;
                padding: 10px 0;
            }

            .contact-page .image-container img {
                width: 70px;
                height: 35px;
                margin-left: 10px;
            }

            .contact-page .logo-name {
                font-size: 13px;
                margin-left: 15px;
            }

            .contact-page .search-container {
                margin: 10px auto;
                width: 90%;
            }

            .contact-page .search-container input[type="text"] {
                width: 100%;
            }

            .contact-page .contact-info-box {
                padding: 15px;
            }

            .contact-page .contact-info-box h3 {
                font-size: 18px;
                margin-bottom: 15px;
            }

            .contact-page .contact-form {
                margin-bottom: 15px;
            }

            .contact-page .form-group {
                margin-bottom: 15px;
            }

            .contact-page .form-group label {
                font-size: 14px;
            }

            .contact-page .form-group input {
                padding: 8px 12px;
                font-size: 14px;
            }

            .contact-page .form-group button {
                padding: 8px 16px;
                font-size: 14px;
            }
        }

        @media (max-width: 640px) {
            .contact-page .modal-content {
                margin: 0.5rem;
                padding: 1rem;
                width: 95%;
            }

            .contact-page .modal-title {
                font-size: 1.1rem;
            }

            .contact-page .form-label {
                font-size: 0.8rem;
            }

            .contact-page .form-input,
            .contact-page .form-textarea {
                font-size: 0.8rem;
                padding: 0.4rem;
            }

            .contact-page .btn {
                padding: 0.4rem 0.8rem;
                font-size: 0.8rem;
            }

            .contact-page .container {
                padding: 0 15px;
            }

            .contact-page .footer-content h3 {
                font-size: 16px;
            }

            .contact-page .footer-content p {
                font-size: 13px;
            }

            .contact-page .social-icons a {
                width: 35px;
                height: 35px;
            }

            .contact-page .social-icons i {
                font-size: 18px;
            }

            .contact-page .bottom-bar p {
                font-size: 12px;
            }
        }
    </style>
</head>

<body class="contact-page">
    @include('layouts.admin-navbar')

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="contact-text">
            <h1>We'd love to hear from you!</h1>
            <p>If you have any questions or feedback, feel free to contact us using the form. We're here to help you!</p>
            
            <div class="contact-info-box">
                <h3><i class="fas fa-thumbtack"></i> Contact Information</h3>
                
                <form class="contact-form" method="POST" action="{{ route('contact.update') }}">
                    @csrf
                    <input type="hidden" name="field" value="address">
                    <div class="form-group">
                        <label for="address"><strong>Address:</strong></label>
                        <input type="text" id="address" name="address" value="{{ $contact->address ?? '2/F Left Wing Executive Building City Government Complex, Maysilo Circle, Plainview, Mandaluyong City' }}" required>
                        <button type="submit">Save</button>
                    </div>
                </form>

                <form class="contact-form" method="POST" action="{{ route('contact.update') }}">
                    @csrf
                    <input type="hidden" name="field" value="phone">
                    <div class="form-group">
                        <label for="phone"><strong>Phone:</strong></label>
                        <input type="text" id="phone" name="phone" value="{{ $contact->phone ?? 8533-28-21 }}" required>
                        <button type="submit">Save</button>
                    </div>
                </form>

                <form class="contact-form" method="POST" action="{{ route('contact.update') }}">
                    @csrf
                    <input type="hidden" name="field" value="email">
                    <div class="form-group">
                        <label for="email"><strong>Email:</strong></label>
                        <input type="email" id="email" name="email" value="{{ $contact->email ?? 'city.registrar@mandaluyong.gov.ph' }}" required>
                        <button type="submit">Save</button>
                    </div>
                </form>

                <form class="contact-form" method="POST" action="{{ route('contact.update') }}">
                    @csrf
                    <input type="hidden" name="field" value="office_hours">
                    <div class="form-group">
                        <label for="office_hours"><strong>Office Hours:</strong></label>
                        <input type="text" id="office_hours" name="office_hours" value="{{ $contact->office_hours ?? 'Monday to Friday: 8:00 AM - 5:00 PM' }}" required>
                        <button type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="contact-form">
            <h2>User Feedback</h2>
            <div class="feedback-scroll-container">
                @forelse($feedbacks as $feedback)
                    <div class="feedback-item">
                        <div class="feedback-header">
                            <i class="fas fa-user-circle feedback-icon"></i>
                            <span class="feedback-name">{{ $feedback->name }}</span>
                            <span class="feedback-email">{{ $feedback->email }}</span>
                            <button onclick="openReplyModal('{{ $feedback->id }}', '{{ $feedback->name }}', '{{ $feedback->email }}')" class="text-blue-600 hover:text-blue-800" style="background: none; border: none; cursor: pointer; margin-left: 8px;" title="Reply to Feedback">
                                <i class="fas fa-reply"></i>
                            </button>
                            <form method="POST" action="{{ route('admin.contact.feedback.delete', $feedback->id) }}" style="display:inline; margin-left:8px;" onsubmit="return confirm('Are you sure you want to delete this feedback?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background: none; border: none; cursor: pointer; color: #f87171; font-size: 18px; margin-left: 4px;" title="Delete Feedback">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                        <div class="feedback-message">"{{ $feedback->feedback }}"</div>
                    </div>
                @empty
                    <div style="text-align:center; color:#888; font-size:16px; margin-top:20px;">
                        No feedbacks yet.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Reply Modal -->
    <div id="replyModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Reply to Feedback</h3>
                <button onclick="closeReplyModal()" class="modal-close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <form id="replyForm" method="POST" action="{{ route('admin.contact.feedback.reply') }}">
                @csrf
                <input type="hidden" id="feedbackId" name="feedback_id">
                <div class="form-group">
                    <label class="form-label">To:</label>
                    <input type="text" id="recipientName" name="recipient_name" class="form-input" readonly>
                    <input type="email" id="recipientEmail" name="recipient_email" class="form-input mt-2" readonly>
                </div>
                <div class="form-group">
                    <label for="subject" class="form-label">Subject:</label>
                    <input type="text" id="subject" name="subject" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="message" class="form-label">Message:</label>
                    <textarea id="message" name="message" class="form-textarea" required></textarea>
                </div>
                <div class="button-group">
                    <button type="button" onclick="closeReplyModal()" class="btn btn-secondary">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Send Reply
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
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
            }
        }

        document.getElementById("searchInput").addEventListener("keypress", function(e) {
            if (e.key === "Enter") {
                performSearch();
            }
        });

        function openReplyModal(feedbackId, name, email) {
            const modal = document.getElementById('replyModal');
            modal.classList.add('show');
            document.getElementById('feedbackId').value = feedbackId;
            document.getElementById('recipientName').value = name;
            document.getElementById('recipientEmail').value = email;
            document.getElementById('subject').value = 'Re: Your Feedback - Mandaluyong City Civil Registry';
        }

        function closeReplyModal() {
            const modal = document.getElementById('replyModal');
            modal.classList.remove('show');
            document.getElementById('replyForm').reset();
        }

        // Close modal when clicking outside
        document.getElementById('replyModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeReplyModal();
            }
        });

        // Prevent form submission from closing modal
        document.getElementById('replyForm').addEventListener('click', function(e) {
            e.stopPropagation();
        });

        // Add this new code for form submission
        document.getElementById('replyForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            
            fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Reply sent successfully!');
                    closeReplyModal();
                } else {
                    alert('Failed to send reply: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while sending the reply. Please try again.');
            });
        });
    </script>
</body>
</html>
