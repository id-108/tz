<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>请使用浏览器打开</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-family: 'Arial', sans-serif;
            background-image: url('/images/2.png'); /* 添加背景图片 */
            background-size: cover; /* 背景图片覆盖整个元素 */
            background-position: center; /* 背景图片居中显示 */
            transition: background-image 0.3s ease; /* 背景图片变化的过渡效果 */
        }

        .open-in-browser-btn {
            display: none; /* 默认隐藏 */
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #ffffff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .open-in-browser-btn:hover {
            background-color: #0056b3;
        }

        /* 媒体查询，当屏幕宽度小于600px时，调整按钮大小 */
        @media (max-width: 600px) {
            .open-in-browser-btn {
                padding: 8px 16px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <button class="open-in-browser-btn" id="openInBrowserBtn">进入✅</button>

    <script>
        // 检测是否从微信访问
        var isWeChat = /MicroMessenger/i.test(navigator.userAgent);

        // 如果是从微信访问，隐藏背景图片
        if (isWeChat) {
            document.body.style.backgroundImage = 'none';
        }

        // 如果不是从微信访问，显示按钮
        if (!isWeChat) {
            document.getElementById('openInBrowserBtn').style.display = 'block';
        }

        // 为按钮添加点击事件
        document.getElementById('openInBrowserBtn').addEventListener('click', function() {
            // 重定向到另一个网址
            window.location.href = 'http://dsw.jun04.top/';
        });
    </script>

</body>
</html>