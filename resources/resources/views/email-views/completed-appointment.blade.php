<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Completed</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .header {
            background: #0d6efd;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 30px;
        }
        .appointment-details {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
        .detail-item {
            margin-bottom: 15px;
        }
        .detail-label {
            font-weight: bold;
            color: #0d6efd;
        }
        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            color: #666;
        }
        .status-badge {
            display: inline-block;
            padding: 8px 16px;
            background: #0d6efd;
            color: white;
            border-radius: 20px;
            font-weight: bold;
            margin: 10px 0;
        }
        .note-box {
            background: #cfe2ff;
            border-left: 4px solid #0d6efd;
            padding: 15px;
            margin: 20px 0;
            border-radius: 4px;
        }
        .important-box {
            background: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 15px;
            margin: 20px 0;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Appointment Completed</h1>
        </div>

        <div class="content">
            <p>Dear {{ $first_name }},</p>

            <p>We are pleased to inform you that your appointment has been <strong>completed</strong>.</p>

            <div class="status-badge">
                Status: Completed
            </div>

            <div class="appointment-details">
                <div class="detail-item">
                    <span class="detail-label">Appointment Type:</span>
                    <span>{{ ucfirst($appointmentType) }}</span>
                </div>

                <div class="detail-item">
                    <span class="detail-label">Document Type:</span>
                    <span>{{ ucfirst($documentType) }}</span>
                </div>

                <div class="detail-item">
                    <span class="detail-label">Completed Date:</span>
                    <span>{{ \Carbon\Carbon::parse($appointmentDate)->format('F d, Y') }}</span>
                </div>

                <div class="detail-item">
                    <span class="detail-label">Completed Time:</span>
                    <span>{{ \Carbon\Carbon::parse($appointmentTime)->format('h:i A') }}</span>
                </div>
            </div>

            <div class="note-box">
                <strong>Important Information:</strong>
                <ul>
                    <li>Your appointment has been successfully completed</li>
                    <li>Please keep your receipt and any documents provided for your records</li>
                    <li>If you need additional copies or services, please schedule a new appointment</li>
                </ul>
            </div>

            <div class="important-box">
                <strong>Contact Information:</strong>
                <p>Civil Registry Office<br>
                Mandaluyong City Hall<br>
                Maysilo, Mandaluyong City</p>
                <p>Email: city.registrar@mandaluyong.gov.ph<br>
                Phone: 8533-28-21</p>
            </div>

            <p>Thank you for choosing our services. We appreciate your business.</p>

            <p>Best regards,<br>
            Civil Registry Office</p>
        </div>

        <div class="footer">
            <p>This is an automated message, please do not reply to this email.</p>
            <p>© {{ date('Y') }} Civil Registry Office. All rights reserved.</p>
        </div>
    </div>
</body>
</html>

