<?php
include ("global.php");

$id 		= !empty($id) ? intval($id) : 0;
$level 		= !empty($level) ? intval($level) : 1;
$page 		= !empty($page) ? intval($page) : 1;
$page_size 	= 10;
$keywords 	= trim($keywords);
$mpurl 		= $_SERVER['PHP_SELF']."?id=".$id."&level=".$level."&keywords=".$keywords;


$classid = $id;

$classle = getCategoryById($id);

$classname = $classle['name'];
$classid = $classle['id'];

$chackid = $id;

$pid = $db->find ( "select pid from phpaadb_category where id=" . $id );

if($pid['pid'] > 0){$chackid = $pid['pid'];$classid = $pid['pid'];}
//echo $pid['pid'];

$ddid=''; 
if($chackid==5||$chackid==6||$chackid==7){
	$ddid='01'; 
}
if($chackid==8||$chackid==9||$chackid==10||$chackid==11){
	$ddid='02'; 
}

//查询SQL
$sql = "select *
		from phpaadb_baby
		where delete_session_id is null";

if(!empty($classname)){
	$sql .=  " and classroom like '".$classname."%'";
}

if(!empty($keywords)){
	$sql.=" and title = '".$keywords."'";
}

//$sql .=	" order by classroom asc";

//echo $sql;
//总记录数
$total_nums = $db->getRowsNum ($sql );

//执行分页查询
$list = $db->selectLimit ( $sql, $page_size, ($page - 1) * $page_size );

?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8" />
<title>光明学校德育评价平台</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="static/css/main.css" />
</head>
<body>
<div class="pagemain">
  <div class="warp" style="background-image: url(static/images/bg02.jpg);">
    <?php include_once 'inc/header.php';?>
    <div class="clearfix"></div>
    <div class="main">
      <div class="page_left">
	  <div class="select_box">
          <select class="select_nj" name="level"  onChange="window.location.href='list.php?id=<?php echo $id?>&level='+this.value">
          <option value="">---选择学期---</option>
        	<option value="5" <?php if($level ==5){?>selected<?php }?>>综合学年</option>
			<option value="1" <?php if($level ==1){?>selected<?php }?>>第一学期上</option>
			<option value="2" <?php if($level ==2){?>selected<?php }?>>第一学期下</option>
			<option value="3" <?php if($level ==3){?>selected<?php }?>>第二学期上</option>
			<option value="4" <?php if($level ==4){?>selected<?php }?>>第二学期下</option>
          </select>
        </div>
	  <?php if($_SESSION['classroom']=='all'||$_SESSION['classroom']=='一年级'||$_SESSION['classroom']=='二年级'||$_SESSION['classroom']=='三年级'||$_SESSION['classroom']=='四年级'||$_SESSION['classroom']=='五年级'||$_SESSION['classroom']=='六年级'||$_SESSION['classroom']=='七年级'||$_SESSION['classroom']=='八年级九年级'||$_SESSION['classroom']=='八年级'||$_SESSION['classroom']=='九年级'||$_SESSION['classroom']=='七年级八年级'){?>
        <div class="select_box">
          <select class="select_nj" name="select_nj" onChange="window.location.href='list.php?level=<?php echo $level?>&id='+this.value">
          <option value="">---请选择---</option>
          <?php
		  	$art_list  = getCategoryListByPid ($classid);
			foreach ( $art_list as $al ) {
		?>
        	<option value="<?php echo $al ['id'];?>"><?php echo $al ['name'];?></option>
        <?php
		}
		?>
          </select>
        </div>
	  <?php }?>
		
        <div class="search_box">
        <form method="get" action="list.php" style="margin: 0"><input
			type="hidden" name="id" value="<?php echo $id;?>">
          <input type="text" class="select_nj" placeholder="输入姓名/学籍" name="keywords" value="<?php echo $keywords;?>">
          <input type="submit" value="查询" class="btn001">  <br> <br> <a href='pdf.php?id=<?php echo $id?>&level=<?php echo $level?>' target="_blank" class="btn001">打印评价表</a> <a href='pdf1.php?id=<?php echo $id?>&level=<?php echo $level?>' target="_blank" class="btn001">导出评价表</a>
          </form>
        </div>
      </div>
      <div class="page_right">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="xslist">
          <tr class="listbg">
            <td>学籍号</td>
            <td>姓名</td>
            <td>性别</td>
            <td>所在班级</td>
            <td>测评</td>
            <td>状态</td>
			<td>星数</td>
            <td>测评结果</td>
          </tr>
          <?php
			foreach ( $list as $al ) {
			
			if($level==5){
				$star = $db->find ( "select * from phpaadb_starlog where uid=" . $al ['id'] );
			}else{
				$star = $db->find ( "select * from phpaadb_starlog where uid=" . $al ['id']." and level = ".$level );
			}
			
			
			$ischack = '未评测';
			
			if($star){$ischack = '已评测';}
		?>
          <tr>
            <td><?php echo $al ['cid'];?></td>
            <td><?php echo $al ['title'];?></td>
            <td><?php echo $al ['sex'];?></td>
            <td><?php echo $al ['classroom'];?></td>
            <td><a href="chack<?php echo $chackid;?>.php?id=<?php echo $al ['id'];?>&level=<?php echo $level;?>"><img src="static/images/icon01.png"></a></td>
            <td><?php echo $ischack;?></td>
			<td><?php 
			$startatol = 0 ;
			
			if($level==5){
				$start = $db->findAll ( "select * from phpaadb_starlog where uid=" . $al ['id'] );
			}else{
				$start = $db->findAll ( "select * from phpaadb_starlog where uid=" . $al ['id']." and level = ".$level );
			}
			
			$i = 0;
			foreach ( $start as $key=>$star ) {
				$i++;
				$startatol = $startatol + ($star['list01'] + $star['list02'] + $star['list03'] + $star['list04'] + $star['list05'] + $star['list06'] + $star['list07'] + $star['list08'] + $star['list09'] + $star['list10'] + $star['list11'] + $star['list12'] + $star['list13'] + $star['list14'] + $star['list15'] + $star['list16'] + $star['list17'] + $star['list18'] + $star['list19'] + $star['list20'] + $star['list21'] + $star['list22'] + $star['list23'] + $star['list24'] + $star['list25'] + $star['list26'] + $star['list27'] + $star['list28'] + $star['list29'] + $star['list30'] + $star['list31'] + $star['list32'] + $star['list33'] + $star['list34'] + $star['list35'] + $star['list36'] + $star['list37'] + $star['list38'] + $star['list39'] + $star['list40'])/2 ;
			}
			//$startatol = ($star['list01'] + $star['list02'] + $star['list03'] + $star['list04'] + $star['list05'] + $star['list06'] + $star['list07'] + $star['list08'] + $star['list09'] + $star['list10'] + $star['list11'] + $star['list12'] + $star['list13'] + $star['list14'] + $star['list15'] + $star['list16'] + $star['list17'] + $star['list18'] + $star['list19'] + $star['list20'] + $star['list21'] + $star['list22'] + $star['list23'] + $star['list24'] + $star['list25'] + $star['list26'] + $star['list27'] + $star['list28'] + $star['list29'] + $star['list30'] + $star['list31'] + $star['list32'] + $star['list33'] + $star['list34'] + $star['list35'] + $star['list36'] + $star['list37'] + $star['list38'] + $star['list39'] + $star['list40'])/2 ;
			echo $startatol;
			
			?> 颗星</td>
            <td><a href="detail<?php echo $ddid;?>.php?id=<?php echo $al ['id'];?>&level=<?php echo $level;?>"><img src="static/images/icon02.png"></a></td>
          </tr>
          <?php
		}
		?>
        </table>
        <div style="text-align:center"><?php echo multi ( $total_nums, $page_size, $page, $mpurl, 0, 5 );?></div>
      </div>
    </div>
  </div>
</div>
<script src="static/js/jquery.min.js" type="text/javascript" charset="utf-8"></script> 
<script src="static/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script> 
<script src="static/js/main.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>