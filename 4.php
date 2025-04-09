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
            background-color: #f7f7f7; /* 设置一个默认的背景颜色 */
        }

        .message {
            color: #333;
            font-size: 18px;
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
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .open-in-browser-btn:hover {
            background-color: #0056b3;
        }

        /* 媒体查询，适配小屏幕设备 */
        @media (max-width: 600px) {
            .message, .open-in-browser-btn {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <div class="message" id="message"> </div> 
    <button class="open-in-browser-btn" id="openInBrowserBtn" style="display: none;">进入✅</button>

    <script>
        // 检测是否从微信访问
        var isWeChat = /MicroMessenger/i.test(navigator.userAgent);

        // 根据访问来源显示不同内容
        if (isWeChat) {
            // 微信中显示提示信息
            document.getElementById('message').innerText = '您当前在微信中，无法访问此页面。';
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