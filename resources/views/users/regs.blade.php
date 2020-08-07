<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/users/regs')}}" method="post">
        <h2>注册</h2>
        用户名：<input type="text" name="qname" placeholder="请输入用户名"><br>
        手机号：<input type="text"  name="qtel" placeholder="请输入手机号"><br>
        密码：<input type="password"  name="qmima" placeholder="请输入密码"><br>
        确认密码：<input type="password"  name="qmima" placeholder="确认密码"><br>
        <button type="submit">注册</button>
    </form>
</body>
</html>