<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .forgot-password-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
        }

        .forgot-password-container h1 {
            margin-bottom: 20px;
        }

        .forgot-password-container p {
            margin-bottom: 20px;
        }

        .forgot-password-container input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .forgot-password-container button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .forgot-password-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="forgot-password-container">
        <h1>Forgot Password</h1>
        <p>Enter your email address below to reset your password.</p>
        <form action="reset_password_process.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <button type="submit">Reset Password</button>
        </form>
    </div>
</body>
</html>