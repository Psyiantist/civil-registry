<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response to Your Feedback</title>
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
            background: #426DDC;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 30px;
        }
        .message-box {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            border-left: 4px solid #426DDC;
        }
        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            color: #666;
            border-top: 1px solid #eee;
        }
        .note-box {
            background: #e8f4ff;
            border-left: 4px solid #426DDC;
            padding: 15px;
            margin: 20px 0;
            border-radius: 4px;
        }
        .contact-info {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        .contact-info p {
            margin: 5px 0;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Response to Your Feedback</h1>
        </div>

        <div class="content">
            <p>Dear {{ $recipientName }},</p>

            <p>Thank you for your feedback. We appreciate you taking the time to share your thoughts with us.</p>

            <div class="message-box">
                <p><strong>Our Response:</strong></p>
                <p>{{ $messageContent }}</p>
            </div>

            <div class="note-box">
                <p><strong>Note:</strong> This is an automated message. Please do not reply to this email.</p>
            </div>

            <div class="contact-info">
                <p><strong>Mandaluyong City Civil Registry</strong></p>
                <p>Email: mandaluyonreg@gmail.com</p>
                <p>Phone: (02) 8531-1001</p>
                <p>Address: 2nd Floor, City Hall Annex Building, Maysilo Circle, Mandaluyong City</p>
            </div>
        </div>

        <div class="footer">
            <p>© {{ date('Y') }} Mandaluyong City Civil Registry. All rights reserved.</p>
        </div>
    </div>
</body>
</html> 