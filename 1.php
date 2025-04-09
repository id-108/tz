<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>按钮显示控制示例</title>
    <style>
        /* 默认情况下，按钮是隐藏的 */
        .open-in-browser-btn {
            display: none;
        }
    </style>
</head>
<body>

    <button class="open-in-browser-btn" id="openInBrowserBtn">在浏览器中打开</button>

    <script>
        // 检测是否从微信访问
        var isWeChat = /MicroMessenger/i.test(navigator.userAgent);

        // 如果不是从微信访问，显示按钮
        if (!isWeChat) {
            document.getElementById('openInBrowserBtn').style.display = 'block';
        }

        // 按钮点击事件
        document.getElementById('openInBrowserBtn').addEventListener('click', function() {
            // 这里填写你希望用户在浏览器中访问的网址
            window.location.href = 'https://www.youractualwebsite.com';
        });
    </script>

</body>
</html>