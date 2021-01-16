<?php
require_once ("global.php");
$act = $_POST ['act'];

//验证留言
if ($act=='validate'){
	$id = $_POST ['id'];
	$record = array(
		'validate'			=>$_POST ['validate']
	);
	 $db->update('phpaadb_research',$record,'id='.$id);
	 exit();
}

//管理员回复


if ($act=='delete') {	
	$id = $_POST ['id'];
	$db->delete('phpaadb_research','id in('.$id.')');
	exit();
}

?>