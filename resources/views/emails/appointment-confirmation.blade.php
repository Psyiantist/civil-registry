<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            padding: 20px 0;
            background-color: #426DDC;
            color: white;
        }
        .content {
            padding: 20px;
            background-color: #f9f9f9;
        }
        .footer {
            text-align: center;
            padding: 20px;
            font-size: 12px;
            color: #666;
        }
        .info-row {
            margin-bottom: 15px;
        }
        .info-label {
            font-weight: bold;
            color: #426DDC;
        }
        .important-note {
            background-color: #fff3cd;
            border: 1px solid #ffeeba;
            padding: 15px;
            margin: 20px 0;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Appointment Confirmation</h1>
        </div>
        <div class="content">
            <p>Dear {{ $user->first_name }} {{ $user->last_name }},</p>
            
            <p>Your appointment has been successfully scheduled. Here are your appointment details:</p>
            
            <div class="info-row">
                <div class="info-label">Reference Number:</div>
                <div>{{ $appointment->reference_number }}</div>
            </div>
            
            <div class="info-row">
                <div class="info-label">Appointment Date:</div>
                <div>{{ date('F d, Y', strtotime($appointment->appointment_date)) }}</div>
            </div>
            
            <div class="info-row">
                <div class="info-label">Appointment Time:</div>
                <div>{{ date('h:i A', strtotime($appointment->appointment_time)) }}</div>
            </div>
            
            <div class="info-row">
                <div class="info-label">Appointment Type:</div>
                <div>{{ $appointment->appointment_type }}</div>
            </div>
            
            <div class="info-row">
                <div class="info-label">Document Type:</div>
                <div>{{ $appointment->document_type }}</div>
            </div>

            <div class="important-note">
                <p><strong>Important Notes:</strong></p>
                <ul>
                    <li>Please bring all required documents on your appointment date.</li>
                    <li>Arrive at least 15 minutes before your scheduled time.</li>
                    <li>If you need to cancel or reschedule, please do so at least 24 hours before your appointment.</li>
                </ul>
                <p><strong>Document Claiming Requirements:</strong></p>
                <p>If someone else will attend or claim the document on behalf of the owner, they must bring:</p>
                <ul>
                    <li>✓ Authorization letter signed by the document owner</li>
                    <li>✓ Photocopy of the owner's valid ID</li>
                    <li>✓ Three signatures of the owner (on the letter or ID)</li>
                </ul>
                <p><em>No release without these requirements.</em></p>
            </div>

            <p><strong>Appointment Details:</strong></p>
            <ul>
                <li><strong>Requester Name:</strong> {{ $appointment->requester_name }}</li>
                <li><strong>Document Owner:</strong> {{ $appointment->document_owner_name }}</li>
                <li><strong>Relationship:</strong> {{ $appointment->relationship }}</li>
                <li><strong>Appointment Type:</strong> {{ $appointment->appointment_type }}</li>
                <li><strong>Document Type:</strong> {{ $appointment->document_type }}</li>
                <li><strong>Date:</strong> {{ \Carbon\Carbon::parse($appointment->appointment_date)->format('F d, Y') }}</li>
                <li><strong>Time:</strong> {{ \Carbon\Carbon::parse($appointment->appointment_time)->format('h:i A') }}</li>
            </ul>

            <p>If you have any questions or need to make changes to your appointment, please contact us immediately.</p>
            
            <p>Best regards,<br>
            Mandaluyong City Civil Registry Team</p>
        </div>
        <div class="footer">
            <p>This is an automated message, please do not reply to this email.</p>
            <p>Mandaluyong City Civil Registry<br>
            Email: civilregistry@mandaluyong.gov.ph<br>
            Phone: (02) 8532-5001</p>
        </div>
    </div>
</body>
</html> 