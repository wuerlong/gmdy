<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
include_once ("../data/config.inc.php");

if (isset ( $_POST ["username"] )) {
	$username = mysql_real_escape_string($_POST ["username"]);
} else {
	$username = "";
}
if (isset ( $_POST ["tel"] )) {
	$tel = mysql_real_escape_string($_POST ["tel"]);
} else {
	$tel = "";
}

if (empty($username)||empty($tel)){
	exit("<script>alert('用户名或学籍号不能为空！');window.history.go(-1)</script>");
}


$user_row = $db->find("select * from phpaadb_baby where title = '".$username."' and cid='".$tel."'");

if (!empty($user_row )) {
	$_SESSION['userid'] = $user_row['id'];
	$_SESSION['username']=$user_row['title'];
	header("Location: infor.php?id=".$user_row['id']);
}else{
	exit("<script>alert('用户名或学籍号不正确！');window.history.go(-1)</script>");
}
?>
