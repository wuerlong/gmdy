<?php
require_once ("global.php");
$act = $_POST ['act'];

if ($act=='add') {	
	$record = array(
		'category'		=>$_POST ['category'],
		'name'			=>$_POST ['name'],
		'url'			=>$_POST ['url'],
		'description'	=>$_POST ['description'],
		'seq'			=>$_POST ['seq']
	);
	if(!empty($_FILES['pic']['name'])){
		$upload_file = uploadFile('pic');//上传图片，返回地址
		$record['pic']=$upload_file;
	}
	$id = $db->save('phpaadb_friendlink',$record);
	header("Location: friendlink.php");
}

if ($act=='edit'){
	$id = $_POST ['id'];
	$record = array(
		'category'		=>$_POST ['category'],
		'name'			=>$_POST ['name'],
		'url'			=>$_POST ['url'],
		'description'	=>$_POST ['description'],
		'seq'			=>$_POST ['seq']
	);
	if(!empty($_FILES['pic']['name'])){
		$upload_file = uploadFile('pic');//上传图片，返回地址
		$record['pic']=$upload_file;
	}
	 $db->update('phpaadb_friendlink',$record,'id='.$id);
	 header("Location: friendlink.php");
}

if ($act=='delete') {	
	$id = $_POST ['id'];
	$db->delete('phpaadb_friendlink','id in('.$id.')');
	exit();
}

//删除缩略图
if ($act=='delpic') {
	$id = $_POST ['id'];
	$pic_path = $db->getOneField("select pic from phpaadb_friendlink where id=".$id);
	if(is_file(ROOT_PATH.$pic_path)){
		@unlink(ROOT_PATH.$pic_path);
	}
	$db->update('phpaadb_friendlink',array('pic'=>''),'id in('.$id.')');
	exit();
}
?>