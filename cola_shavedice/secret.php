<?php
//SAIHS{S3cr3t_F0und_by_b43e64_fi1!t3r...}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Denied</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #000000;
            color: #00ff00;
            font-family: 'Courier New', monospace;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: 
                repeating-linear-gradient(
                    0deg,
                    transparent,
                    transparent 2px,
                    rgba(0, 255, 0, 0.03) 2px,
                    rgba(0, 255, 0, 0.03) 4px
                );
        }

        .container {
            max-width: 700px;
            padding: 40px;
            text-align: center;
            border: 2px solid #00ff00;
            background: rgba(0, 0, 0, 0.8);
            box-shadow: 
                0 0 20px rgba(0, 255, 0, 0.3),
                inset 0 0 20px rgba(0, 255, 0, 0.1);
            animation: flicker 3s infinite;
        }

        @keyframes flicker {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.98; }
        }

        h1 {
            font-size: 3em;
            margin-bottom: 20px;
            text-shadow: 0 0 10px #00ff00;
            letter-spacing: 5px;
            animation: glow 2s ease-in-out infinite alternate;
            color: #ff0000;
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 10px #ff0000, 0 0 20px #ff0000;
            }
            to {
                text-shadow: 0 0 20px #ff0000, 0 0 30px #ff0000, 0 0 40px #ff0000;
            }
        }

        p {
            font-size: 1.2em;
            line-height: 1.8;
            margin: 20px 0;
            text-shadow: 0 0 5px rgba(0, 255, 0, 0.5);
        }

        .warning {
            margin-top: 30px;
            font-size: 0.9em;
            opacity: 0.7;
        }

        .typing-effect::after {
            content: '|';
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                to bottom,
                transparent 50%,
                rgba(0, 255, 0, 0.05) 50%
            );
            background-size: 100% 4px;
            pointer-events: none;
            animation: scanline 10s linear infinite;
        }

        @keyframes scanline {
            0% { transform: translateY(0); }
            100% { transform: translateY(100vh); }
        }
    </style>
    <script>
        setTimeout(function() {
            window.location.href = "https://www.youtube.com/shorts/LFE6MoO-LSo";
        }, 1000);
    </script>
</head>
<body>
    <div class="container">
        <h1>Go away...</h1>
        <p>You can't see the flag because "//" is added in front of the flag!</p>
        <p class="warning">Redirecting...</p>
    </div>
</body>
</html>