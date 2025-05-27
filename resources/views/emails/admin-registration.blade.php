<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
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
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Welcome to Civil Registry Admin Portal</h1>
        </div>
        <div class="content">
            <p>Dear {{ $firstName }},</p>
            
            <p>Welcome to the Civil Registry Admin Portal! Your account has been successfully created.</p>
            
            <p>You can now access the admin portal using your registered email and password.</p>
            
            <p>If you have any questions or need assistance, please don't hesitate to contact the system administrator.</p>
            
            <p>Best regards,<br>
            Civil Registry Team</p>
        </div>
        <div class="footer">
            <p>This is an automated message, please do not reply to this email.</p>
        </div>
    </div>
</body>
</html> 