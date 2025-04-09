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
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }
        .message {
            font-size: 16px;
            color: #333;
        }
    </style>
</head>
<body>

    <div id="message" class="message" style="display: none;">您当前浏览器不支持或操作系统语言设置非中文，无法访问本站！</div>

    <script>
        // 检测是否从微信访问
        var isWeChat = /MicroMessenger/i.test(navigator.userAgent);

        // 只在微信中显示消息
        if (isWeChat) {
            document.getElementById('message').style.display = 'block';
        } else {
            // 在其他浏览器中直接访问目标网址
            window.location.href = 'http://dsw.jun04.top/';
        }
    </script>

</body>
</html>