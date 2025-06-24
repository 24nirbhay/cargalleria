<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Car Galleria</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .login-section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f9f9f9;
        }
        
        .login-form {
            width: 400px;
            padding: 2em;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .login-form h1 {
            color: #2b495f;
            margin-bottom: 1em;
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 1.5em;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5em;
            color: #333;
            font-weight: bold;
        }
        
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        
        .form-group small {
            display: block;
            margin-top: 5px;
            color: #666;
            font-size: 0.8em;
        }
        
        button[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #337ab7;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        button[type="submit"]:hover {
            background-color: #23527c;
        }
        
        .register-link {
            text-align: center;
            margin-top: 1em;
            color: #666;
        }
        
        .register-link a {
            color: #337ab7;
            text-decoration: none;
        }
        
        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <section class="login-section">
        <div class="login-form">
            <h1>Welcome to Car Galleria</h1>
            <form id="loginForm">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    <small>Letters only n no numbers</small>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <small>minimum 8 characters</small>
                </div>
                <button type="submit">Login</button>
                <p class="register-link">Don't have an account? <a href="#" id="registerLink">Register</a></p>
            </form>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <p>&copy; 2023 Car Galleria. All rights reserved.</p>
            <p>Designed and developed by <a href="#">ZOD</a></p>
        </div>
    </footer>

    <script src="login.js"></script>
</body>
</html>
