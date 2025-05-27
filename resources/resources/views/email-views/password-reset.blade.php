<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Password Reset</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .logo {
            width: 100px;
            height: auto;
            margin-bottom: 15px;
        }
        .content {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .password-box {
            background: #f5f5f5;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
            text-align: center;
            font-size: 18px;
            color: #426DDC;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 12px;
            color: #666;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #426DDC;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .button:hover {
            background-color: #344CB7;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="https://drive.google.com/uc?export=view&id=1S_eS6zzW599Vln_nWluXRE3ZRJU9HHCZ" alt="Civil Registry Logo" class="logo">
        <h1>Civil Registry - Mandaluyong City</h1>
    </div>

    <div class="content">
        <h2>Password Reset Successful</h2>

        <p>Dear User,</p>

        <p>Your password has been successfully reset. Here is your new password:</p>

        <div class="password-box">
            {{ $newPassword }}
        </div>

        <p>For security reasons, we recommend that you change this password immediately after logging in.</p>

        <center>
            <a href="{{ route('login') }}" class="button">Login Now</a>
        </center>

        <p>If you did not request this password reset, please contact our support team immediately.</p>
    </div>

    <div class="footer">
        <p>This is an automated email. Please do not reply to this message.</p>
        <p>&copy; {{ date('Y') }} Civil Registry - Mandaluyong City. All rights reserved.</p>
    </div>
</body>
</html>
