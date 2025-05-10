<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Application Status - Civil Registry</title>
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background: #f8f6f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 6px 24px rgba(220,38,38,0.08);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(90deg, #f87171 60%, #fbbf24 100%);
            color: #fff;
            padding: 36px 32px 24px 32px;
            text-align: center;
        }
        .header h1 {
            margin: 0 0 8px 0;
            font-size: 2.1rem;
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
            color: #e11d48;
            margin-top: 0;
            font-size: 1.3rem;
        }
        .content p {
            font-size: 1.08rem;
            line-height: 1.7;
        }
        .reason-box {
            background: #fff7ed;
            border-left: 5px solid #f87171;
            border-radius: 8px;
            padding: 18px 22px;
            margin: 24px 0 18px 0;
            font-size: 1.08rem;
            color: #b91c1c;
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
            <h1>Account Application Update</h1>
            <p>We regret to inform you</p>
        </div>
        <div class="content">
            <h2>Dear {{ $first_name ?? 'Applicant' }},</h2>
            <p>
                Thank you for your interest in joining the Civil Registry website. After careful review, we regret to inform you that your account application has not been approved at this time.
            </p>
            <div class="reason-box">
                <b>Reason from the Administrators:</b><br>
                {{ $reason ?? 'No specific reason provided.' }}
            </div>
            <p>
                If you believe this was a mistake or would like to reapply, please feel free to contact our support team for further clarification or assistance.<br><br>
                We appreciate your understanding and thank you for your interest in our services.
            </p>
            <p style="margin-top: 32px; color: #e11d48; font-weight: 600;">Sincerely,<br>The Civil Registry Team</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Civil Registry Department. All Rights Reserved.
        </div>
    </div>
</body>
</html>
