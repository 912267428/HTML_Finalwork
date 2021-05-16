<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>JS俄罗斯方块游戏代码 - 源码之家</title>

<link rel="stylesheet" type="text/css" href="css/game2.css">
<link rel="stylesheet" href="css/header.css">
</head>
<body>
<?php
session_start(); //声明变量
	$_SESSION['game'] = 2;
$username = isset($_SESSION['user']) ? $_SESSION['user'] : ""; //判断session是否为空

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
<div align="center">
<div class="game"  id="game"> </div>
<div class="gameOver" id="gameOver">
	<p>游戏结束啦</p>
</div>
<div class="info">
	<div class="next"  id="next"></div>
	<div class="time">
		<p>已用时： <span id="time">0</span>s</p>
		<p>已得分： <span id="recode">0</span>分</p>
	</div>
</div>
<div class="tips">
	<p>游戏注释：</p>
	<p>用键盘控制方块的下落和变形</p>
	<p>↑：变形</p>
	<p>←：左移</p>
	<p>↓：下移（有自定义的下落速度）</p>
	<p>→：右移</p>
	<p>空格：速降（会直接到达最下层）</p>
</div>
</div>
	
	<div align="center">
	<form action="gameaction.php"> 
     <input type="submit" value="开始游戏"> 
	</form> 
	</div>

	
<script type="text/javascript" src="js/game2/square.js"></script>
<script type="text/javascript" src="js/game2/squareFactory.js"></script>
<script type="text/javascript" src="js/game2/game.js"></script>
<script type="text/javascript" src="js/game2/local.js"></script>
<script type="text/javascript" src="js/game2/script.js"></script>

</body>
</html>