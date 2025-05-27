<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Civil Registry</title>
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background: #f4f8fb;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 6px 24px rgba(30,99,233,0.08);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(90deg, #1E63E9 60%, #426DDC 100%);
            color: #fff;
            padding: 36px 32px 24px 32px;
            text-align: center;
        }
        .header h1 {
            margin: 0 0 8px 0;
            font-size: 2.2rem;
            letter-spacing: 2px;
        }
        .header p {
            margin: 0;
            font-size: 1.1rem;
            font-weight: 300;
        }
        .content {
            padding: 32px 32px 24px 32px;
            color: #333;
        }
        .content h2 {
            color: #1E63E9;
            margin-top: 0;
            font-size: 1.4rem;
        }
        .content p {
            font-size: 1.08rem;
            line-height: 1.7;
        }
        .welcome-box {
            background: #eaf1fb;
            border-left: 5px solid #1E63E9;
            border-radius: 8px;
            padding: 18px 22px;
            margin: 24px 0 18px 0;
            font-size: 1.1rem;
        }
        .footer {
            background: #f7faff;
            color: #888;
            text-align: center;
            padding: 18px 0;
            font-size: 0.98rem;
            border-top: 1px solid #e3e8f0;
        }
        @media (max-width: 600px) {
            .container, .content, .header { padding: 18px !important; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Welcome to Civil Registry!</h1>
            <p>Your account has been <b>approved</b></p>
        </div>
        <div class="content">
            <h2>Dear {{ $first_name ??  'Valued User' }},</h2>
            <div class="welcome-box">
                We are delighted to inform you that your account has been formally accepted and you are now a valued member of the Civil Registry website.
            </div>
            <p>
                You may now log in and access all the features and services available to our registered users.<br>
                We are committed to providing you with a seamless and secure experience.<br><br>
                Should you have any questions or require assistance, please do not hesitate to contact our support team.<br><br>
                <b>Welcome aboard!</b>
            </p>
            <p style="margin-top: 32px; color: #1E63E9; font-weight: 600;">Sincerely,<br>The Civil Registry Team</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Civil Registry Department. All Rights Reserved.
        </div>
    </div>
</body>
</html>
