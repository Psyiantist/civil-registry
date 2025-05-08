<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Feedback</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #3247df;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background-color: #f9f9ff;
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 0 0 5px 5px;
        }
        .feedback-item {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #3247df;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }
        .logo {
            width: 60px;
            height: 60px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="https://drive.google.com/uc?export=view&id=1S_eS6zzW599Vln_nWluXRE3ZRJU9HHCZ" alt="Civil Registry Logo" class="logo">
        <h1>New User Feedback Received</h1>
    </div>
    
    <div class="content">
        <div class="feedback-item">
            <p class="label">From:</p>
            <p>{{ $name }}</p>
        </div>
        
        <div class="feedback-item">
            <p class="label">Email Address:</p>
            <p>{{ $email }}</p>
        </div>
        
        <div class="feedback-item">
            <p class="label">Message:</p>
            <p>{{ $userMessage }}</p>
        </div>
        
        <div class="feedback-item">
            <p class="label">Received Date:</p>
            <p>{{ now()->setTimezone('Asia/Manila')->format('F j, Y h:i A') }}</p>
        </div>
    </div>

    <div class="footer">
        <p>This is an automated email from Civil Registry Department - Mandaluyong City</p>
        <p>© 2025 Civil Registry Department. All Rights Reserved.</p>
    </div>
</body>
</html>
