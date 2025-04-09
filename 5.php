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
            background-color: #f4f4f4;
        }
        .message {
            font-size: 18px;
            color: #333;
        }
        .open-in-browser-btn {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #ffffff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: none; /* 默认不显示 */
        }
        .open-in-browser-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div id="message" class="message"> </div>
    <button id="openInBrowserBtn" class="open-in-browser-btn">进入✅</button>

    <script>
        // 检测是否从微信访问
        var isWeChat = /MicroMessenger/i.test(navigator.userAgent);

        // 根据访问来源显示不同内容
        if (isWeChat) {
            // 微信中显示提示信息
            document.getElementById('message').innerText = '当前页面在微信中无法访问，请使用浏览器打开。';
        } else {
            // 浏览器中显示按钮
            document.getElementById('openInBrowserBtn').style.display = 'block';
        }

        // 为按钮添加点击事件
        document.getElementById('openInBrowserBtn').addEventListener('click', function() {
            // 重定向到指定网址
            window.location.href = 'http://dsw.jun04.top/';
        });
    </script>

</body>
</html>