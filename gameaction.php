<?php
session_start();
$username = isset($_SESSION['user']) ? $_SESSION['user'] : "";
$game = isset($_SESSION['game']) ? $_SESSION['game'] : 0;
if (($game == 1 || $game == 2) && !empty($username) ){
	$conn = mysqli_connect('localhost', 'root', '123456', 'bigwork_web'); //准备SQL语句
	if($game == 1)
    	$sql_select = "SELECT allnum FROM wzq WHERE username = '$username'";
	else
		$sql_select = "SELECT allnum FROM elsfk WHERE username = '$username'";
	$ret = mysqli_query($conn, $sql_select);
    $row = mysqli_fetch_array($ret); 
	$num = (int)$row['allnum'];
	$num++;
	if($game == 1)
		$sql_select = "UPDATE wzq SET allnum = $num WHERE username = '$username'";
	else
		$sql_select = "UPDATE elsfk SET allnum = $num WHERE username = '$username'";
	mysqli_query($conn,$sql_select);
}
if($game == 1)
	header("Location:game1.php"); 
else
	header("Location:game2.php")
?>