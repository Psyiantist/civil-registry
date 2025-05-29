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

    @include('layouts.footer')
    <script>

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
