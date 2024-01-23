<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            color: #555;
        }

        input {
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .switch-form {
            text-align: center;
            margin-top: 20px;
        }

        .switch-form a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!--navbar start-->
    <?php
        // include('login.php');
    ?>
    <div class="container" id="loginContainer">
        <h2>Login</h2>
        <form id="loginForm">
            <label for="loginUsername">Username:</label>
            <input type="text" id="loginUsername" name="loginUsername" required>

            <label for="loginPassword">Password:</label>
            <input type="password" id="loginPassword" name="loginPassword" required>

            <button type="submit">Login</button>
        </form>

        <div class="switch-form">
            <p>Don't have an account? <a href="#" onclick="showRegistrationForm()">Register here</a></p>
        </div>
    </div>

    <div class="container" style="display: none;" id="registrationContainer">
        <h2>Registration</h2>
        <form id="registrationForm">
            <label for="regUsername">Username:</label>
            <input type="text" id="regUsername" name="regUsername" required>

            <label for="regPassword">Password:</label>
            <input type="password" id="regPassword" name="regPassword" required>

            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>

            <button type="submit">Register</button>
        </form>

        <div class="switch-form">
            <p>Already have an account? <a href="#" onclick="showLoginForm()">Login here</a></p>
        </div>
    </div>

    <script>
        function showRegistrationForm() {
            document.getElementById("loginContainer").style.display = "none";
            document.getElementById("registrationContainer").style.display = "block";
        }

        function showLoginForm() {
            document.getElementById("registrationContainer").style.display = "none";
            document.getElementById("loginContainer").style.display = "block";
        }
    </script>
</body>
</html>
