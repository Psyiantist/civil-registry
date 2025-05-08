<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
    <style>
        /* Resetting some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* General Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            padding: 40px;
            color: #333;
            line-height: 1.6;
        }

        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
            overflow: hidden;
        }

        .email-header {
            background: linear-gradient(135deg, #4a6fdc 0%, #6c8ff8 100%);
            padding: 30px;
            text-align: center;
        }

        .email-body {
            padding: 35px;
        }

        h2 {
            font-size: 28px;
            color: #ffffff;
            font-weight: 600;
            margin-bottom: 10px;
            letter-spacing: 0.5px;
        }

        .subtitle {
            color: rgba(255, 255, 255, 0.85);
            font-size: 16px;
            font-weight: 400;
        }

        .email-content {
            font-size: 16px;
            line-height: 1.8;
            color: #4a5568;
        }

        .message-field {
            background-color: #f7f9fc;
            border-radius: 8px;
            padding: 20px;
            margin: 15px 0;
            border-left: 4px solid #4a6fdc;
        }

        .email-content p {
            margin-bottom: 15px;
        }

        .email-content strong {
            color: #3d5afe;
            font-weight: 600;
        }

        .cta-button {
            background-color: #4a6fdc;
            color: #000000; /* Changed to black as requested */
            text-decoration: none;
            padding: 14px 24px;
            font-size: 16px;
            border-radius: 8px;
            display: inline-block;
            margin-top: 25px;
            text-align: center;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(74, 111, 220, 0.2);
        }

        .cta-button:hover {
            background-color: #3d5afe;
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(74, 111, 220, 0.3);
        }

        .footer {
            font-size: 14px;
            color: #8a94a6;
            text-align: center;
            margin-top: 40px;
            border-top: 1px solid #e9ecef;
            padding-top: 20px;
        }

        .footer a {
            color: #4a6fdc;
            text-decoration: none;
            font-weight: 500;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .info-row {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .info-label {
            min-width: 80px;
        }

        /* Mobile Responsiveness */
        @media (max-width: 600px) {
            body {
                padding: 15px;
            }

            .email-header, .email-body {
                padding: 20px;
            }

            h2 {
                font-size: 24px;
            }

            .cta-button {
                font-size: 15px;
                padding: 12px 20px;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h2>New Contact Message</h2>
            <div class="subtitle">You've received a new inquiry</div>
        </div>

        <div class="email-body">
            <div class="email-content">
                <div class="info-row">
                    <div class="info-label"><strong>Name:</strong></div>
                    <div>{{ $name }}</div>
                </div>

                <div class="info-row">
                    <div class="info-label"><strong>Email:</strong></div>
                    <div>{{ $email }}</div>
                </div>

                <p><strong>Message:</strong></p>
                <div class="message-field">
                    <p>{{ $messageContent }}</p>
                </div>

                <a href="mailto:{{ $email }}" class="cta-button">Reply to {{ $name }}</a>
            </div>

            <div class="footer">
                <p>If you have any questions, feel free to <a href="mailto:contact@yourcompany.com">contact us</a>.</p>
                <p>This email was sent automatically. Please do not reply to this address.</p>
            </div>
        </div>
    </div>
</body>
</html>
