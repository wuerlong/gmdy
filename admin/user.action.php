<?php
header('Content-Type: text/html; charset=utf-8');
require_once ("global.php");
$act = $_POST ['act'];

if ($act=='add') {
	if(empty($_POST['username'])){
		exit("<script>alert('用户名不能为空!');window.history.go(-1)</script>");
	}
	if(empty($_POST['password'])){
		exit("<script>alert('密码不能为空!');window.history.go(-1)</script>");
	}
	if($_POST['password']!=$_POST['password2']){
		exit("<script>alert('两次密码输入不一致!');window.history.go(-1)</script>");
	}
	if(check_username($_SESSION['username'])){
		exit("<script>alert('用户 ".$_POST['username']." 已经存在!');window.history.go(-1)</script>");
	}
	$record = array(
		'username'			=>$_POST ['username'],
		'password'			=>md5($_POST ['password']),
		'userflag'			=>$_POST ['userflag']
	);
	$id = $db->save('phpaadb_users',$record);
	header("Location: user.php");
}

if ($act=='edit'){
	$userid = $_POST['userid'];
	if (!empty($userid)) {
		$userid = mysql_real_escape_string(verify_id($userid));
	}
	if($_POST['password']!=$_POST['password2']){
		exit("<script>alert('两次密码输入不一致!');window.history.go(-1)</script>");
	}
	$record = array(
		'userflag'			=>$_POST ['userflag']
	);
	if(!empty($_POST['password'])) $record['password'] = md5($_POST['password']);
	$db->update('phpaadb_users',$record,'userid='.$userid);
	header("Location: user.php");
}


if ($act=='delete') {	
	$userid = $_POST['userid'];
	if (!empty($userid)) {
		$userid = mysql_real_escape_string(verify_id($userid));
	}
	$db->delete('phpaadb_users','userid in('.$userid.')');
	exit();
}

if ($act=='editpwd') {
	if(empty($_POST['oldpassword'])||empty($_POST['password'])){
		exit("<script>alert('密码不能为空!');window.history.go(-1)</script>");
	}
	if($_POST['password']!=$_POST['password2']){
		exit("<script>alert('新密码两次输入不一致!');window.history.go(-1)</script>");
	}
	if(!check_password($_SESSION['userid'],$_POST ['oldpassword'])){
		exit("<script>alert('原始密码错误!');window.history.go(-1)</script>");
	}
	$record = array(
		'password'			=>md5($_POST ['password'])
	);
	$db->update('phpaadb_users',$record,'userid='.$_SESSION['userid']);
	if (!empty($_POST['hlink'])){
		header("Location: ".$_POST['hlink']);
	}else{
		header("Location: article.php");
	}
}

function check_username($username){
	global $db;
	return $db->getRowsNum("select userid from phpaadb_users where username='".$username."'");
}

function check_password($userid,$oldpassword){
	global $db;
	return $db->getRowsNum("select userid from phpaadb_users where userid=".$userid." and password='".md5($oldpassword)."'");
}
?>