<!DOCTYPE html>
<html>
<head>
    <title>Account Credentials</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        .credentials {
            background: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            margin-top: 10px;
        }
        p {
            font-size: 16px;
            color: #555;
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Account Credentials for Your Child</h2>
        <p>Dear Parent/Guardian,</p>
        <p>Below are the login credentials for your child's account:</p>

        <div class="credentials">
            <p><strong>Username:</strong> {{ $username }}</p>
            <p><strong>Password:</strong> {{ $password }}</p>
        </div>

        <p>Please ensure that these credentials are kept safe. If you have any questions, feel free to contact us.</p>

        <p class="footer">Best regards,<br>Your Team Name</p>
    </div>
</body>
</html>
