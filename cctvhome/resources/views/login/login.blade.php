<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="{{asset('common/css/reset.css')}}" />
	<link rel="stylesheet" href="{{asset('common/css/login.css')}}" />
</head>
<body>
<div class="page">
	<div class="loginwarrp">
		<div class="logo">登陆</div>
        <div class="login_form">
			<form id="Login" name="Login" method="post" onsubmit="" action="login_do">
				<li class="login-item">
					<span>用户名：</span>
					<input type="text" name="user_tel" class="login_input" placeholder="手机号或者邮箱">
				</li>
				<li class="login-item">
					<span>密　码：</span>
					<input type="password" name="password" class="login_input">
				</li>
                <li class="login-item">

                    <span><a href="register"><font color="red">没有账号，前去注册</font></a></span>
                </li>
				<div class="clearfix"></div>
				<li class="login-sub">
					<input type="submit" name="Submit" value="登录" />
				</li>                      
           </form>
		</div>
	</div>
</div>
</body>
</html>