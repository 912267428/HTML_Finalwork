<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
	<link rel="stylesheet" href="css/header.css">
	<style type="text/css">
		.info{
			text-align: center
		}
	</style>
	
</head>

<body>
<?php
session_start(); //声明变量
$username = isset($_SESSION['user']) ? $_SESSION['user'] : ""; //判断session是否为空 
$conn = mysqli_connect("localhost", "root", "123456", "bigwork_web"); //准备SQL语句,查询用户名
    $sql_select = "SELECT allnum FROM wzq WHERE username = '$username'"; //执行SQL语句
    $ret = mysqli_query($conn, $sql_select);
    $row = mysqli_fetch_array($ret);
	$game_1_allnum = (int)$row['allnum'];
	
	$sql_select = "SELECT allnum FROM elsfk WHERE username = '$username'"; //执行SQL语句
    $ret = mysqli_query($conn, $sql_select);
    $row = mysqli_fetch_array($ret);
	$game_2_allnum = (int)$row['allnum'];
	
	mysqli_close($conn);
?> 
	<div class="head">
		<h1>游戏天堂欢迎您</h1><br>
		<h1>__________________________________________________________________________________________________</h1>
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
	
	<div class="info">
		<h3>玩家：<?php echo $username; ?></h3> <br>
		<h3>五子棋游玩局数： <?php echo $game_1_allnum;?> 分数：<?php echo $game_1_allnum*100;  ?></h3>
		<h3>俄罗斯方块游玩局数： <?php echo $game_2_allnum;?> 分数：<?php echo $game_2_allnum*100;  ?></h3>
	</div>
</body>
</html>