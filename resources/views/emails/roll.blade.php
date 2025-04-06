<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            color: #333;
            padding: 20px;
        }
        .email-container {
            background: #fff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        h2 {
            color: #0056b3;
            margin-bottom: 20px;
        }
        .info {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
        }
        .footer {
            margin-top: 30px;
            font-size: 13px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h2>{{ $subject }}</h2>

        <div class="info">
            <div><span class="label">Student Name:</span> {{ $studentName }}</div>
            <div><span class="label">Course:</span> {{ $course }}</div>
        </div>

        <hr>

        <div class="info">
            <div><span class="label">Guardian Name:</span> {{ $guardianName }}</div>
            <div><span class="label">Guardian Email:</span> {{ $guardianEmail }}</div>
            <div><span class="label">Contact Number:</span> {{ $contactNumber }}</div>
            <div><span class="label">Address:</span> {{ $address }}</div>
        </div>

        <hr>

        <div class="info">
            <div><span class="label">Evaluation:</span></div>
            <p>{{ $evaluation }}</p>
        </div>

        <div class="footer">
            This email was sent automatically by the little sunshine system. Please do not reply directly.
        </div>
    </div>
</body>
</html>
