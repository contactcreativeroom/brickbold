<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset OTP</title>
</head>
<body>
    <h1>Your Password Reset OTP</h1>
    <p>Hello,</p>
    <p>We received a request to reset your password. Your OTP (One-Time Password) for password reset is:</p>
    <h2>{{ $otp }}</h2>
    <p>This OTP is valid for a limited time. Please use it to reset your password promptly.</p>
    <p>If you did not request a password reset, please ignore this email.</p>
    <br>
    <p>Thank you,<br>Your Team</p>
</body>
</html>