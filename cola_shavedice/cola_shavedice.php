<!DOCTYPE html>
<html lang="zh_TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>可乐剉冰</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Microsoft JhengHei', 'Segoe UI', sans-serif;
            background: #0a0a0a;
            color: #e0e0e0;
            min-height: 100vh;
            padding: 20px;
        }

        header {
            max-width: 1200px;
            margin: 0 auto;
        }

        .资料 {
            background: #1a1a1a;
            border: 1px solid #333;
            border-radius: 10px;
            padding: 40px;
            margin-bottom: 30px;
            text-align: center;
        }

        .资料-d h2 {
            color: #4a90e2;
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .资料-d strong {
            color: #b0b0b0;
            font-size: 1.2em;
        }

        .简介II {
            margin-top: 30px;
        }

        .简介II ul {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .简介II li {
            background: #252525;
            padding: 10px 20px;
            border-radius: 5px;
            border: 1px solid #404040;
        }

        .简介II a {
            color: #4a90e2;
            text-decoration: none;
        }

        .简介II a:hover {
            color: #357abd;
        }

        .cola1 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .hs1 {
            background: #1a1a1a;
            border: 1px solid #333;
            border-radius: 10px;
            padding: 30px;
        }

        .hsd1 h1 {
            color: #4a90e2;
            font-size: 1.8em;
            margin-bottom: 15px;
            border-bottom: 2px solid #4a90e2;
            padding-bottom: 10px;
        }

        .hsd1 p {
            color: #b0b0b0;
            line-height: 1.8;
            margin-bottom: 10px;
        }

        footer {
            background: #1a1a1a;
            border: 1px solid #333;
            border-radius: 10px;
            padding: 30px;
            max-width: 1200px;
            margin: 30px auto;
        }

        .footer-d-img ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .footer-d-img a {
            color: #4a90e2;
            text-decoration: none;
            font-size: 1.1em;
            transition: color 0.3s;
        }

        .footer-d-img a:hover {
            color: #357abd;
        }

        .div {
            text-align: center;
            padding: 15px;
            color: #808080;
        }

        .div ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .div a {
            color: #4a90e2;
            text-decoration: none;
        }

        .div a:hover {
            color: #357abd;
        }
    </style>
</head>
<body>
    <header>
        <section class="资料">
            <div class="资料-d">
                <div class="简介">
                    <h2>可樂剉冰</h2>
                    <strong>Cola_ShavedIce</strong>
                </div>
                <div class="简介II">
                    <ul>
                        <li>
                            <span>SAIHS</span>
                        </li>
                        <li>
                            <span>127.0.0.1</span>
                        </li>
                        <li>
                            <span>ColaShavedIce@gmail.com</span>
                        </li>
                        <li>
                            <span>
                                <a href="https://www.instagram.com/cola_shavedice/">Instagram.com</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="cola1">
            <section class="hs1">
                <div class="hsd1">
                    <h1>關於我</h1>
                    <p>一名來自台北的高中生，熱愛Minecraft以及FPS類型遊戲</p>
                    <p>國中畢業於台北市立天母國中，目前就讀台北市立松山工農資訊系</p>
                    <p>懂一點點網路知識，Python C# JavaScript Kali Linux</p>
                </div>
            </section>
            <section class="hs1">
                <div class="hsd1">
                    <h1>進入資訊系的緣由</h1>
                    <p>從國中起就一直對電腦方面以及網路技術充滿豐富興趣</p>
                    <p>在某次與輔導老師的談話中，決定進入松山工農</p>
                </div>
            </section>
            <section class="hs1">
                <div class="hsd1">
                    <h1>搞笑不打稿</h1>
                    <p>由一群就讀高職與高中的學生聚集的組織</p>
                    <p>目前正在計畫運營YouTube頻道</p>
                </div>
            </section>
        </section>
    </header>
    <main>
    </main>
    <footer>
        <div class="footer-d-img">
            <ul>
                <li>
                    <a href="https://discordapp.com/users/Cola_ShavedIce">Discord</a>
                </li>                
                <li>
                    <a href="https://github.com/ColaShavedIce">GitHub</a>
                </li>
                <li>
                    <a href="https://space.bilibili.com/3493089115114338?spm_id_from=333.1296.0.0">Bilibili</a>
                </li>
            </ul>
        </div>
    </footer>
    <div class="div">
        <p>© 可樂剉冰 2025</p>
    </div>
    <div class="div">
        <ul>
            <li>
                <a href="?page=secret">Secret</a>
            </li>
            <li>|</li>
            <li>
                <a href="?page=anonymous">Anonymous</a>
            </li>
        </ul>
    </div>
    
    <script>
        const glitchChars = '!@#$%^&*()_+-=[]{}|;:,.<>?/~`0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz你我他她它們的一是不了人在有這個上中大來為和國地到以說時要就出會可也子自之用年得本那生對作成開而只能過去好很還如何工想於';
        
        function getTextNodes(node) {
            let textNodes = [];
            if (node.nodeType === 3) {
                textNodes.push(node);
            } else {
                for (let child of node.childNodes) {
                    textNodes = textNodes.concat(getTextNodes(child));
                }
            }
            return textNodes;
        }
        
        const originalTexts = new Map();
        const textNodes = getTextNodes(document.body);
        
        textNodes.forEach(node => {
            if (node.textContent.trim().length > 0) {
                originalTexts.set(node, node.textContent);
            }
        });
        
        function randomChar() {
            return glitchChars[Math.floor(Math.random() * glitchChars.length)];
        }
        
        function glitchText(text) {
            return text.split('').map(char => {
                if (char === ' ' || char === '\n' || char === '\t') {
                    return char;
                }
                return randomChar();
            }).join('');
        }
        
        function updateGlitch() {
            originalTexts.forEach((originalText, node) => {
                node.textContent = glitchText(originalText);
            });
        }
        setInterval(updateGlitch, 50);
    </script>
</body>
</html>