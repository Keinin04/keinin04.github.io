<?php
session_start();

// Hardcoded user credentials for demonstration purposes
$valid_username = 'Agung';
$valid_password = 'password';
$valid_email= 'agung.gmail.com';

// Process login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        // Login successful, store user information in session
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $valid_email;

        header("Location: /"); // Redirect to a dashboard page after login
        exit();
    } else {
        // Invalid username or password, display error using SweetAlert
        echo <<<EOD
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                setTimeout(function() {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Invalid username or password!",
                    });
                }, 500); // Adjust the delay time (in milliseconds) as needed
            });
        </script>
EOD;
            $username = '';
            $password = '';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- account -->
<!-- 
    username = Agung 
    password = password 
-->
    <title>Form Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        .login-container h2 {
            margin: 0 0 20px;
            color: #333;
        }

        .login-form input {
            width: 90%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .login-form button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 3px;
            cursor: pointer;
        }

        .login-form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>FashionAvenue</h2>
        <h2>Login</h2>
        <form class="login-form" action="" method="post">
            <input type="text" placeholder="Username" name="username" required>
            <input type="password"  placeholder="Password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>

    	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
