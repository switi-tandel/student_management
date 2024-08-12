<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Student Created</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 16px;
            color: #555;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #aaa;
        }
        .highlight {
            color: #2c3e50;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Our University!</h1>
        <p>Dear <span class="highlight">{{ $student->student_name }}</span>,</p>
        <p>Congratulations on successfully registering as a new student at our university! We are excited to have you join our community.</p>
        
        <p>Here are your registration details:</p>
        <ul>
            <li><strong>Name:</strong> {{ $student->student_name }}</li>
            <li><strong>Email:</strong> {{ $student->email }}</li>
            <li><strong>Class:</strong> {{ $student->class }}</li>
            <li><strong>Admission Date:</strong> {{ $student->admission_date }}</li>
            <li><strong>Yearly Fees:</strong> ${{ $student->yearly_fees }}</li>
        </ul>

        <p>If you have any questions or need further assistance, please feel free to reach out to us at <strong>support@university.com</strong>.</p>
        <p>We look forward to seeing you on campus!</p>

        <p>Thank you for choosing our university!</p>
        <div class="footer">
            <p>&copy; 2024 University Name. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>
