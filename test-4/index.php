<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Testing Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }
        .btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
        }
        .social-icons {
            margin-top: 20px;
        }
        .social-icons a {
            display: inline-block;
            margin-right: 10px;
            color: #007bff;
            font-size: 24px;
            text-decoration: none;
            transition: transform 0.3s ease-in-out;
        }
        .social-icons a:hover {
            transform: scale(1.2);
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Password Testing Form</h2>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="password">Enter Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Test Password</button>
        </form>
        <div class="footer">
            <div class="social-icons">
                <a href="https://www.instagram.com/mr.fidal" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/mrfidal" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://github.com/mr-fidal" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://t.me/mrfidal" target="_blank"><i class="fab fa-telegram"></i></a>
            </div>
            <p>&copy; 2024 Fidal</p>
        </div>
    </div>
</body>
</html>
