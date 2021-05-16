<!DOCTYPE html>
<html>
<head>
<title>登录成功</title>
	<link rel="stylesheet" href="css/header.css">
<meta name="content-type";
 charset="UTF-8">
	
</head>
<body> 
<div> 
<?php

session_start(); //声明变量

$username = isset($_SESSION['user']) ? $_SESSION['user'] : ""; //判断session是否为空

if (!empty($username)) { 
?> 
	<div class="head">
		<h2><?php echo $username?> 游戏天堂欢迎您</h2>
	</div>
<div class='card-holder'>
  <div class='card-wrapper'>
    <a href='loginsucc.php'>
      <div class='card bg-01'>
        <span class='card-content'>首页</span>
      </div>
    </a>
  </div>
  <div class='card-wrapper'>
    <a href='userinfo.php'>
      <div class='card bg-02'>
        <span class='card-content'>我的信息</span>
      </div>
    </a>
  </div>
	</div>
	
	<div class="gamelist">
		<div class="game1"> 
			<a href="game1.php"><img src="image/game1.png" height="200px" width="200px"> </a> <br>
			<a href="game1.php"> 五子棋</a> </div> <br>
			<a href="game2.php"><img src="image/game2.png" height="200px" width="200px"> </a> <br>
			<a href="game2.php"> 俄罗斯方块</a> </div> <br>
	</div>
<?php
} else { //未登录，无权访问
     ?>
 <h1>你无权访问！！！</h1> 
<?php
} ?> 
</div>
</body>
</html>
