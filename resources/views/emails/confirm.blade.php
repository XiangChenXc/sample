<html>
<head>
    <meta charset="UTF-8">
    <title>注册确认按钮</title>
</head>
<body>
    <h1>感谢您在Sample网站进行注册</h1>

    <p>
        请点击下面的链接完成链接
        <a href="{{ route('confirm_email', $user->activation_token) }}}">
            {{ route('confirm_email', $user->activation_token) }}
        </a>
    </p>

    <p>
        如果不是本人操作，请忽略
    </p>
</body>
</html>