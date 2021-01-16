<?php
require_once ("global.php");

$act = trim($_POST ['act']);

//添加
if ($act=='add') {
	
	$record = array(
		'uid'			=>$_POST ['id'],
		'classroom'			=>$_POST ['classroom'],
		'list01'			=>$_POST ['list01'],
		'list02'			=>$_POST ['list02'],
		'list03'			=>$_POST ['list03'],
		'list04'			=>$_POST ['list04'],
		'list05'			=>$_POST ['list05'],
		'list06'			=>$_POST ['list06'],
		'list07'			=>$_POST ['list07'],
		'list08'			=>$_POST ['list08'],
		'list09'			=>$_POST ['list09'],
		'list10'			=>$_POST ['list10'],
		'list11'			=>$_POST ['list11'],
		'list12'			=>$_POST ['list12'],
		'list13'			=>$_POST ['list13'],
		'list14'			=>$_POST ['list14'],
		'list15'			=>$_POST ['list15'],
		'list16'			=>$_POST ['list16'],
		'list17'			=>$_POST ['list17'],
		'list18'			=>$_POST ['list18'],
		'list19'			=>$_POST ['list19'],
		'list20'			=>$_POST ['list20'],
		'list21'			=>$_POST ['list21'],
		'list22'			=>$_POST ['list22'],
		'list23'			=>$_POST ['list23'],
		'list24'			=>$_POST ['list24'],
		'list25'			=>$_POST ['list25'],
		'list26'			=>$_POST ['list26'],
		'list27'			=>$_POST ['list27'],
		'list28'			=>$_POST ['list28'],
		'list29'			=>$_POST ['list29'],
		'list30'			=>$_POST ['list30'],
		'list31'			=>$_POST ['list31'],
		'list32'			=>$_POST ['list32'],
		'list33'			=>$_POST ['list33'],
		'list34'			=>$_POST ['list34'],
		'list35'			=>$_POST ['list35'],
		'list36'			=>$_POST ['list36'],
		'list37'			=>$_POST ['list37'],
		'level'			=>$_POST ['level'],
		'orderlist'		=>$_POST ['orderlist'],
		'addtime'		=>date ( "Y-m-d H:i:s" )
	);
	
	
	
	$uid = 3;
	
	if($_POST ['classroom']=='一年级1班'||$_POST ['classroom']=='一年级2班'||$_POST ['classroom']=='一年级3班'||$_POST ['classroom']=='一年级4班'){
		$uid = 3;
	}else if($_POST ['classroom']=='二年级1班'||$_POST ['classroom']=='二年级2班'||$_POST ['classroom']=='二年级3班'||$_POST ['classroom']=='二年级4班'){
		$uid = 4;
	}else if($_POST ['classroom']=='三年级1班'||$_POST ['classroom']=='三年级2班'||$_POST ['classroom']=='三年级3班'||$_POST ['classroom']=='三年级4班'){
		$uid = 5;
	}else if($_POST ['classroom']=='四年级1班'||$_POST ['classroom']=='四年级2班'||$_POST ['classroom']=='四年级3班'||$_POST ['classroom']=='四年级4班'){
		$uid = 6;
	}else if($_POST ['classroom']=='五年级1班'||$_POST ['classroom']=='五年级2班'||$_POST ['classroom']=='五年级3班'||$_POST ['classroom']=='五年级4班'){
		$uid = 7;
	}else if($_POST ['classroom']=='六年级1班'||$_POST ['classroom']=='六年级2班'||$_POST ['classroom']=='六年级3班'||$_POST ['classroom']=='六年级4班'){
		$uid = 8;
	}else if($_POST ['classroom']=='七年级1班'||$_POST ['classroom']=='七年级2班'||$_POST ['classroom']=='七年级3班'||$_POST ['classroom']=='七年级4班'){
		$uid = 9;
	}else if($_POST ['classroom']=='八年级1班'||$_POST ['classroom']=='八年级2班'||$_POST ['classroom']=='八年级3班'||$_POST ['classroom']=='八年级4班'){
		$uid = 10;
	}else if($_POST ['classroom']=='九年级1班'||$_POST ['classroom']=='九年级2班'||$_POST ['classroom']=='九年级3班'||$_POST ['classroom']=='九年级4班'){
		$uid = 11;
	}
	
	$classroom = $db->find ( "select * from phpaadb_category where name ='" . $_POST ['classroom'] . "' " );
	
	
	
	//$star = $db->find ( "select * from phpaadb_starlog where uid=" . $_POST ['id'] );
	$star = $db->find ( "select * from phpaadb_starlog where uid=" . $id." and level = ".$_POST ['level'] );
	
	$step = trim($_POST ['step']);
	$step = $step+1;
	/**
	if($step>6){
		$step=0;
	}
	**/
	
	if($star){
		$db->update('phpaadb_starlog',$record,'uid='.$_POST ['id'].' and level ='.$_POST ['level']);
		
	}else{
		$id = $db->save('phpaadb_starlog',$record);
				
	}
	
	if($step==7){
		if($classroom){
			header("Location: list.php?id=".$classroom['id']);
		}else{
			header("Location: list.php?id=".$uid);
		}
	}else{
		header("Location: chack".$uid.".php?id=".$_POST ['id']."&step=".$step);
	}
	
	
	/**
	
	**/
	
}



?>