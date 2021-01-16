<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
include_once ("data/config.inc.php");

if (isset ( $_POST ["username"] )) {
	$username = mysql_real_escape_string($_POST ["username"]);
} else {
	$username = "";
}
if (isset ( $_POST ["password"] )) {
	$password = mysql_real_escape_string($_POST ["password"]);
} else {
	$password = "";
}

if (empty($username)||empty($password)){
	exit("<script>alert('用户名或密码不能为空！');window.history.go(-1)</script>");
}


$user_row = $db->find("select userid,username,yz,classroom from phpaadb_users where username = '".$username."' and Password='".md5 ( $password ) ."'");

if (!empty($user_row )) {
	$_SESSION['userid'] = $user_row['SysUserId'];
	$_SESSION['yz'] = $user_row['yz'];
	$_SESSION['username']=$user_row['username'];
	$_SESSION['classroom']=$user_row['classroom'];
	setcookie("userid",$_SESSION['userid']);
	setcookie("username",$username,time()+60*60*24*365);
	header("Location: main.php");
}else{
	exit("<script>alert('用户名或密码不正确！');window.history.go(-1)</script>");
}
?>
