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
		<div class="logo">注册</div>
        <div class="login_form">
			<form id="Login" name="Login" method="post" onsubmit="" action="register_do">
				<li class="login-item">
					<span>用户名：</span>
					<input type="text" placeholder="请输入用户名或者密码" class="login_input" name="user_tel">
				</li>
				<li class="login-item">
					<span>密　码：</span>
					<input type="password" name="password" class="login_input">
				</li>
				<li class="login-item verify">
					<span>确认密码：</span>
					<input type="password" name="password_sure" class="login_input verify_input">
				</li>
                <li class="login-item">

                    <span><a href="login"><font color="red">已有账号，前去登录</font></a></span>
                </li>
				<div class="clearfix"></div>
				<li class="login-sub">
					<input type="submit"  value="注册" />
                    <input type="reset" value="重置" />
				</li>                      
           </form>
		</div>
	</div>
</div>
</body>
</html>