<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .fb-container{
            display: flex;
            flex-direction: column;
            display: relative;
        }
        .test-circle{
            width: 60px;
            height: 60px;
            border-radius: 30px;
            display: absolute;
            background-color: pink;
            opacity: 30%;
        }
    </style>
</head>

<body>
    Messenger測試頁
    <!-- Messenger 洽談外掛程式 Code -->
    <div class="fb-container">
        <div class="test-circle"></div>
    </div>
    <aside>
        <div id="fb-root"></div>
    </aside>

    <!-- Your 洽談外掛程式 code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    {{-- Line的圓圈 --}}
    <div class="line-it-button" data-lang="zh_Hant" data-type="share-c" data-env="REAL"
        data-url="https://developers.line.biz/zh-hant/docs/line-social-plugins/install-guide/using-line-share-buttons/"
        data-color="default" data-size="large" data-count="false" data-ver="3" style="display: none;"></div>

    {{-- messenger js --}}
    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "186281691223735");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v18.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/zh_TW/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    {{-- line js link --}}
    <script src="https://www.line-website.com/social-plugins/js/thirdparty/loader.min.js" async="async" defer="defer">
    </script>

    <script type="text/javascript">
        LineIt.loadButton();
    </script>

    {{-- 後面加上要分享的帳號的好友連結，即可變成一個預設分享該好友的連結 --}}
    {{-- https://social-plugins.line.me/lineit/share?url= --}}

    {{-- 蒙恩好友連結 --}}
    {{-- https://page.line.me/emr4909k --}}

    {{-- 需要改網域的話，來這邊更改，改成abc.com或是去messenger和line那邊改網址 --}}
    {{-- C:\WINDOWS\system32\drivers\etc --}}
    {{-- 127.0.0.1 abc.com --}}
</body>

</html>
