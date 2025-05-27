<!DOCTYPE html>
<html>
<head>
    <title>Password Reset Confirmation</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 500px;
        }
        h2 {
            color: #426DDC;
            margin-bottom: 20px;
        }
        p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        .icon {
            font-size: 50px;
            color: #426DDC;
            margin-bottom: 20px;
        }
    </style>
    <meta http-equiv="refresh" content="5;url={{ route('login') }}">
</head>
<body>
    <div class="container">
        <div class="icon">✉️</div>
        <h2>Password Reset Email Sent</h2>
        <p>A new password has been sent to your email address. Please check your inbox and use the new password to login.</p>
        <p>You will be redirected to the login page in 5 seconds...</p>
    </div>
</body>
</html>
