<?php
session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if ($username === 'guest' && $password === 'guest') {
        require_once 'jwt.php';
        $token = generateJWT($username);
        
        setcookie('jwt_token', $token, time() + 3600, '/');
        
        header('Location: /?page=dashboard');
        exit();
    } else {
        $error = 'Invalid username or password!';
    }
}
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JWT Authentication</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #1a1a1a;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-container {
            background: #2d2d2d;
            border: 1px solid #404040;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.5);
            padding: 40px;
            width: 100%;
            max-width: 400px;
        }

        h1 {
            color: #e0e0e0;
            margin-bottom: 10px;
            text-align: center;
            font-size: 28px;
        }

        .hint {
            background: #1e3a5f;
            border-left: 4px solid #4a90e2;
            padding: 12px;
            margin: 20px 0;
            border-radius: 4px;
            font-size: 14px;
            color: #a8d0ff;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #b0b0b0;
            font-weight: 500;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #404040;
            background: #1a1a1a;
            color: #e0e0e0;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #4a90e2;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #4a90e2;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #357abd;
        }

        button:active {
            background: #2868a8;
        }

        .error {
            background: #4a1f1f;
            border-left: 4px solid #e74c3c;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 4px;
            color: #ff8080;
            font-size: 14px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #808080;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        
        <div class="hint">
            You can login with: <strong>guest/guest</strong>
        </div>

        <?php if ($error): ?>
            <div class="error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required placeholder="Enter username">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Enter password">
            </div>

            <button type="submit">Login</button>
        </form>

        <div class="footer">
            Secured with JWT Authentication
        </div>
    </div>
</body>
</html>

