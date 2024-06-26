<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment Section</title>
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
        .form-group input, .form-group textarea {
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
        .comments {
            margin-top: 30px;
        }
        .comment {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #e9e9e9;
            border-radius: 5px;
        }
        .comment .name {
            font-weight: bold;
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
        .footer {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Leave a Comment</h2>
        <form action="submit_comment.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
        <div class="comments">
            <h3>Comments</h3>
            <?php
            // Fetch and display comments from the database
            $servername = "localhost";
            $username = "root"; // Replace with your database username
            $password = ""; // Replace with your database password
            $dbname = "test"; // Replace with your database name

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch comments
            $sql = "SELECT name, comment FROM comments";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='comment'><div class='name'>" . htmlspecialchars($row["name"]) . "</div><div class='message'>" . htmlspecialchars($row["comment"]) . "</div></div>";
                }
            } else {
                echo "No comments yet.";
            }

            $conn->close();
            ?>
        </div>
        <div class="footer">
            <div class="social-icons">
                <a href="https://www.instagram.com/mr.fidal" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/mrfidal" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://github.com/mr-fidal" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://t.me/mrfidal" target="_blank"><i class="fab fa-telegram"></i></a>
            </div>
            <p>&copy; 2024 <a style="color: green;" href="https://mrfidal.in">Fidal</a></p>
        </div>
    </div>
</body>
</html>
