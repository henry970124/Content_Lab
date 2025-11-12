<?php
require_once 'jwt.php';

$user = getJWTFromCookie();

if (!$user) {
    header('Location: /?page=login');
    exit();
}

$isAdmin = ($user['username'] === 'admin');
if ($isAdmin) {
    $flag = getenv('FLAG');
}
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - JWT Authentication</title>
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

        .dashboard {
            background: #2d2d2d;
            border: 1px solid #404040;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.5);
            padding: 40px;
            width: 100%;
            max-width: 600px;
        }

        h1 {
            color: #e0e0e0;
            margin-bottom: 20px;
            text-align: center;
        }

        .welcome {
            background: #1e3d2f;
            border-left: 4px solid #4caf50;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
            color: #90ee90;
        }

        .info-box {
            background: #252525;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
            border: 1px solid #404040;
        }

        .info-box h3 {
            color: #b0b0b0;
            margin-bottom: 10px;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #404040;
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: #b0b0b0;
        }

        .info-value {
            color: #e0e0e0;
            font-family: monospace;
            background: #1a1a1a;
            padding: 2px 8px;
            border-radius: 3px;
        }

        .jwt-token {
            background: #3d2f1f;
            border: 1px solid #ff9800;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            word-break: break-all;
            font-family: monospace;
            font-size: 12px;
            color: #ffb84d;
        }

        .logout-btn {
            display: block;
            width: 100%;
            padding: 12px;
            background: #c62828;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            transition: background 0.3s;
        }

        .logout-btn:hover {
            background: #b71c1c;
        }

        .hint {
            background: #3d2f1f;
            border-left: 4px solid #ff9800;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
            color: #ffb84d;
            font-size: 14px;
        }

        .admin-welcome {
            background: #1e3d2f;
            border-left: 4px solid #4caf50;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
            color: #90ee90;
            font-size: 1.1em;
        }

        .flag-box {
            background: #252525;
            border: 2px solid #4caf50;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .flag-box h3 {
            color: #4caf50;
            margin-bottom: 15px;
            text-align: center;
            font-size: 1.2em;
        }

        .flag-content {
            background: #1a1a1a;
            border: 1px solid #4caf50;
            padding: 20px;
            border-radius: 5px;
            word-break: break-all;
            font-family: monospace;
            font-size: 1.1em;
            color: #4caf50;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>Welcome to Dashboard</h1>
        
        <?php if ($isAdmin): ?>
        <div class="admin-welcome">
            ADMIN ACCESS GRANTED!
        </div>
        
        <div class="flag-box">
            <h3>FLAG</h3>
            <div class="flag-content">
                <?php echo htmlspecialchars($flag); ?>
            </div>
        </div>
        <?php else: ?>
        <div class="welcome">
            You are successfully logged in as guest!
        </div>

        <div class="hint">
            You don't have admin privileges. Maybe you need to explore more...
        </div>
        <?php endif; ?>

        <div class="info-box">
            <h3>User Information</h3>
            <div class="info-item">
                <span class="info-label">Username:</span>
                <span class="info-value"><?php echo htmlspecialchars($user['username']); ?></span>
            </div>
            <div class="info-item">
                <span class="info-label">Issued At:</span>
                <span class="info-value"><?php echo date('Y-m-d H:i:s', $user['iat']); ?></span>
            </div>
            <div class="info-item">
                <span class="info-label">Expires At:</span>
                <span class="info-value"><?php echo date('Y-m-d H:i:s', $user['exp']); ?></span>
            </div>
        </div>

        <div class="info-box">
            <h3>Your JWT Token</h3>
            <div class="jwt-token">
                <?php echo htmlspecialchars($_COOKIE['jwt_token']); ?>
            </div>
        </div>

        <a href="/?page=logout" class="logout-btn">Logout</a>
    </div>
</body>
</html>
