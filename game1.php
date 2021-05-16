<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HTML5五子棋</title>

<link rel="stylesheet" href="css/game1.css">
<link rel="stylesheet" href="css/header.css">
</head>
<body>
<?php
session_start(); //声明变量
	$_SESSION["game"] = 1;
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
	
<div id="box">
	<div id="centent">
		<canvas id="canvas" width="450" height="450"></canvas>
	</div>
	<button id="button">撤回</button>
	<button id="anew">重开</button>
	<div id="state">
		<div class="state-chess Bchess"></div>
		<div class="chessName">黑棋走</div>
	</div>
	<div id="winner">
		<div class="state-chess Bchess"></div>
		<div class="chessName"></div>
	</div>
</div>
	
<div align="center">
	<form action="gameaction.php"> 
     <input type="submit" value="开始游戏"> 
	</form> 
	</div>
	
<script src="js/game1.js"></script>
<script>
    game.drawLine()
    game.canvas.addEventListener("mousedown",game.canvasClick)
    game.regret_chess.addEventListener("mousedown",game.regret)
    game.anew.addEventListener("mousedown",game.anewClick)

</script>

</body>
</html>
