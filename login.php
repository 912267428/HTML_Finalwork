<!doctype html>
<html>
<head>
<meta name="content-type"; charset="utf-8">
<title>游戏天堂</title>
	<link rel="stylesheet" href="css/bigsnow.css">
</head>

<body>
<script type="text/javascript" src="js/snowflakes.min.1.0.0.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<div style="text-align:center;">
 <div class="content" align="center"> <!--头部-->
 <div class="header"> <h1>游戏天堂欢迎你</h1> <br> <h1>请登录</h1> </div> 
	 
 <div class="middle"> 
 <form id="loginform" action="loginaction.php" method="post"> 
<table border="0"> 
	<tr> 
<td>用户名：</td> 
<td> <input type="text" id="name" name="username" 
required="required" value="<?php
echo isset($_COOKIE["user"]) ? $_COOKIE["user"] : ""; ?>"> </td> 
	</tr> 
<tr> 
	<td>密   码：</td> <td><input type="password" id="password" name="password" required="required" value="<?php
			echo isset($_COOKIE["pwd"]) ? $_COOKIE["pwd"] : ""; ?>">
	</td> 
</tr> 
<tr> 
	<td colspan="2"> <input type="checkbox" id="remember" name="remember" checked = 1><small>记住我(七天免输入) </td> 
</tr> 
<tr> 
	<td colspan="2" align="center" style="color:red;font-size:10px;"> <!--提示信息--> 
<?php
$err = isset($_GET["err"]) ? $_GET["err"] : "";
switch ($err) {
    case 1:
        echo "用户名或密码错误！";
        break;

    case 2:
        echo "用户名或密码不能为空！";
        break;
} ?> </td> 
	</tr> 
	<tr> <td colspan="2" align="center"> 
<input type="submit" id="login" name="login" value="登录"> <input type="reset" id="reset" 
name="reset" value="重置"> </td> </tr> 
<tr> 
    <td colspan="2" align="center"> 还没有账号? 快去<a href="register.php">注册</a>吧</td>
</tr> 
</table> 
</form> 
</div> 

	 
</body>
</html>