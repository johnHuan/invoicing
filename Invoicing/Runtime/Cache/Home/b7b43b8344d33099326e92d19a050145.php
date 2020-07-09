<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>报表生成系统</title>
    <link href="/invoicing/Public/style/login.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div class="main">
    <div class="login-form">
        <h1>User Login</h1>
        <div class="head">
            <img src="/invoicing/Public/img/user.png" alt=""/>
        </div>
        <form method="post" action="/invoicing/index.php/home/index/index">
            <input type="text" class="text" placeholder="请输入账号"  name="username" id="UserName" />
            <input type="password" placeholder="请输入密码"  name="password" id="password" />
            <div class="submit">
                <input type="submit" value="LOGIN" >
            </div>
            <div><a href="/invoicing/Admin">admin</a></div>
        </form>

    </div>
</div>
</body>
</html>