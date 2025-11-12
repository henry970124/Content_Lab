<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/8/8b/Anonymous_emblem.svg">
    <title>Anonymous</title>
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
            max-width: 900px;
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
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 10px #00ff00, 0 0 20px #00ff00;
            }
            to {
                text-shadow: 0 0 20px #00ff00, 0 0 30px #00ff00, 0 0 40px #00ff00;
            }
        }

        .image-container {
            margin: 30px 0;
        }

        img {
            max-width: 400px;
            width: 100%;
            height: auto;
            filter: drop-shadow(0 0 20px rgba(0, 255, 0, 0.5));
            transition: all 0.3s ease;
        }

        img:hover {
            filter: drop-shadow(0 0 30px rgba(0, 255, 0, 0.8));
            transform: scale(1.05);
        }

        p {
            font-size: 1.1em;
            line-height: 1.8;
            margin: 15px 0;
            text-shadow: 0 0 5px rgba(0, 255, 0, 0.5);
        }

        .quote {
            margin-top: 30px;
            font-size: 1.2em;
            font-style: italic;
            color: #00ff00;
            text-shadow: 0 0 10px #00ff00;
            border-top: 1px solid #00ff00;
            border-bottom: 1px solid #00ff00;
            padding: 20px 0;
        }

        .typing-effect::after {
            content: '|';
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }

        /* Scanline effect */
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
</head>
<body>
    <div class="container">
        <h1>ANONYMOUS</h1>
        
        <div class="image-container">
            <img src="https://images.unsplash.com/photo-1565133471545-0075f90b7fec?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Z3V5JTIwZmF3a2VzJTIwbWFza3xlbnwwfHwwfHx8MA%3D%3D&fm=jpg&q=60&w=3000" alt="Anonymous">
        </div>
        
        <p>
            Anonymous is a decentralized international activist and hacktivist collective.
        </p>
        <p>
            Originating in 2003, known for various cyberattacks against governments and corporations.
        </p>
        
        <p class="quote">
            "We are Anonymous. We are Legion.<br>
            We do not forgive. We do not forget.<br>
            Expect us."
        </p>
    </div>
</body>
</html>
