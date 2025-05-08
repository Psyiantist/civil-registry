<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
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
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        }
        .header {
            text-align: center;
            padding: 20px 0;
            background-color: #426DDC;
            color: white;
            border-radius: 8px 8px 0 0;
        }
        .logo {
            max-width: 150px;
            height: auto;
        }
        .content {
            padding: 30px;
            background-color: #ffffff;
            border-radius: 0 0 8px 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .welcome-text {
            font-size: 24px;
            color: #426DDC;
            margin-bottom: 20px;
            text-align: center;
        }
        .message {
            font-size: 16px;
            margin-bottom: 20px;
            color: #666;
        }
        .status-box {
            background-color: #f8f9fa;
            border-left: 4px solid #426DDC;
            padding: 15px;
            margin: 20px 0;
            border-radius: 4px;
        }
        .status-title {
            color: #426DDC;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .footer {
            text-align: center;
            padding: 20px;
            color: #666;
            font-size: 14px;
        }
        .button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #426DDC;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin: 20px 0;
        }
        .button:hover {
            background-color: #344CB7;
        }
        .steps {
            margin: 20px 0;
            padding: 0;
            list-style: none;
        }
        .steps li {
            margin-bottom: 15px;
            padding-left: 25px;
            position: relative;
        }
        .steps li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #426DDC;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://drive.google.com/uc?export=view&id=1S_eS6zzW599Vln_nWluXRE3ZRJU9HHCZ" alt="Civil Registry Logo" class="logo">
        </div>

        <div class="content">
            <h1 class="welcome-text">Welcome to Civilnize!</h1>

            <p class="message">Dear {{ $name }},</p>

            <p class="message">Thank you for registering with the Civil Registry System. We're excited to have you on board!</p>

            <div class="status-box">
                <div class="status-title">Registration Status: Pending Approval</div>
                <p>Your registration is currently being reviewed by our administrators. This process typically takes 1-2 business days.</p>
            </div>

            <h3>What happens next?</h3>
            <ul class="steps">
                <li>Our administrators will review your registration details and ID verification</li>
                <li>You will receive another email once your account is approved</li>
                <li>After approval, you can log in and access all system features</li>
            </ul>

            <p class="message">If you have any questions or need assistance, please don't hesitate to contact our support team.</p>

            <div style="text-align: center;">
                <a href="{{ route('contact') }}" class="button">Contact Support</a>
            </div>
        </div>

        <div class="footer">
            <p>This is an automated message, please do not reply to this email.</p>
            <p>&copy; {{ date('Y') }} Civil Registry System. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
