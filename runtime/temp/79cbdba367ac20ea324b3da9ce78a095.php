<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"C:\software\xampp\htdocs\thinkphp\public/../application/admin\view\login\login.html";i:1503225712;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>调停课管理系统</title>
<link href="__STATIC__/admin/css/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="login">
		<div id="login_header">
			<h1 class="login_logo">
				<a href="#"><img src="__STATIC__/admin/images/login_logo.png" /></a>
			</h1>
			<div class="login_headerContent">
				<div class="navList">
					<ul>
						<li><a href="#">设为首页</a></li>
						<li><a href="#">反馈</a></li>
						<li><a href="#" target="_blank">帮助</a></li>
					</ul>
				</div>
				<h2 class="login_title">欢迎登录调停课管理系统</h2>
			</div>
		</div>
		<div id="login_content">
			<div class="loginForm">
				<form action="" method="post">
					<div id="errorMessage" align="center"></div>
					<p>
						<label>用户类别：</label>
						<select name="selectid">
							<option value="teacher">教师</option>
							<option value="admin">管理员</option>
						</select>
					</p>
					<p>
						<label>用户：</label>
						<input type="text" name="userid" size="15" class="login_input"  style="width: 128px;" />
					</p>
					<p>
						<label>密码：</label>
						<input type="password" name="password" size="15" class="login_input"  style="width: 128px;" />
					</p>
					<p>
						<label>学期：</label>
						<select name="xnxqh">
							<foreach name='xnxq' item='v'>
								<option value="" style="width: 108px;height: 20px"></option>
							</foreach>
						</select>
					</p>

					<div class="login_bar">
						<button class="sub">登录</button>
						<button class="rst">重置</button>
					</div>
				</form>
			</div>
			<div class="login_banner"><img src="__STATIC__/admin/images/login_banner.jpg" /></div>
			<div class="login_inner">
					<ul class="helpList">
						<li><a href="./help/wxxygzltj.ppt">调停课管理系统平台介绍PPT</a></li>
						<li><a href="#">忘记密码怎么办？</a></li>
						<li><a href="#">为什么登录失败？</a></li>
					</ul>
			</div>
		</div>
		<div id="login_footer">
			Copyright &copy;2016 皖西学院教务处
		</div>
	</div>
</body>
</html>