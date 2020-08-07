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
<h3> <b>欢迎登陆</b> </h3>
<form  action="{{url('/users/logins')}}" method="post">
    用户名：<input type="text"  name="qname" placeholder="请输入用户名\邮箱\手机号"><br>
    密码：<input type="password"  name="qmima" placeholder="请输入密码"><br>
    <button type="submit" >登录</button>
</form>
</body>
</html>