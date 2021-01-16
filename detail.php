<?php
include ("global.php");

$id	= trim($_GET ['id'])?trim($_GET ['id']):0;
$level	= trim($_GET ['level'])?trim($_GET ['level']):1;
$infor = $db->find ( "select * from phpaadb_baby where id=" . $id );

if($level==5){

	$al = $db->findAll ( "select * from phpaadb_starlog where uid=" . $id ." order by level desc ");

}else{
	$al = $db->findAll ( "select * from phpaadb_starlog where uid=" . $id." and level = ".$level );
}

$startatol = 0 ;
$star01 = 0;
$star02 = 0;
$star03 = 0;
$star04 = 0;
$star05 = 0;
$star06 = 0;
$star07 = 0;
$i = 0;
foreach ( $al as $key=>$star ) {
	$i++;
$startatol = $startatol + ($star['list01'] + $star['list02'] + $star['list03'] + $star['list04'] + $star['list05'] + $star['list06'] + $star['list07'] + $star['list08'] + $star['list09'] + $star['list10'] + $star['list11'] + $star['list12'] + $star['list13'] + $star['list14'] + $star['list15'] + $star['list16'] + $star['list17'] + $star['list18'] + $star['list19'] + $star['list20'] + $star['list21'] + $star['list22'] + $star['list23'] + $star['list24'] + $star['list25'] + $star['list26'] + $star['list27'] + $star['list28'] + $star['list29'] + $star['list30'] + $star['list31'] + $star['list32'] + $star['list33'] + $star['list34'] + $star['list35'] + $star['list36'] + $star['list37'] + $star['list38'] + $star['list39'] + $star['list40'])/2 ;

$star01 = ceil(($star['list01'] + $star['list02'] + $star['list03'] + $star['list04'] + $star['list05'] + $star['list06'])/6);
$star02 = ceil(($star['list07'] + $star['list08'] + $star['list09'] + $star['list10'] + $star['list11'])/5);
$star03 = ceil(($star['list12'] + $star['list13'] + $star['list14'] + $star['list15'])/4);
$star04 = ceil(($star['list16'] + $star['list17'] + $star['list18'])/3);
$star05 = ceil(($star['list19'] + $star['list20'] + $star['list21'])/3);
$star06 = ceil(($star['list22'] + $star['list23'] + $star['list24'] + $star['list25'])/4);
$star07 = ceil(($star['list26'] + $star['list27'] + $star['list28'] + $star['list29'])/4);
}
//print_r($star);
// $star01;

$levelname = '';
if($level==1){
	$levelname = '第一学期上';
}else if($level==2){
	$levelname = '第一学期下';
}else if($level==3){
	$levelname = '第二学期上';
}else if($level==4){
	$levelname = '第二学期下';
}else if($level==5){
	$levelname = '综合学年';
}

$bgimg = '';
$bglevel = 1;

$bglevel = $bglevel + $al[0]['level'];

if($infor ['sex']=='男性'){
	
	$al[0]['level'];
	
	if($level==5){
		$bgimg = 'bg04'.$bglevel;
	}else{
		$bgimg = 'bg04';
	}
	
}else{
	if($level==5){
		$bgimg = 'bg04_01'.$bglevel;
	}else{
		$bgimg = 'bg04_01';
	}
}
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8" />
<title>光明学校德育评价平台</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="static/css/main.css" />
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="css/colorbox.css" />
</head>
<body>
<div class="pagemain">
  <div class="warp" style="background-image: url(static/images/<?php echo $bgimg?>.jpg);">
    <?php include_once 'inc/header.php';?>
    <div class="clearfix"></div>
    <div class="main">
      <div class="flower_box">
        <p class="flower01"><a class='inline' href="#inline_content01"><img src="img/overlay.png" width="150" height="100"></a></p>
        <p class="flower02"><a class='inline' href="#inline_content02"><img src="img/overlay.png" width="120" height="110"></a></p>
        <p class="flower03"><a class='inline' href="#inline_content03"><img src="img/overlay.png" width="120" height="100"></a></p>
        <p class="flower04"><a class='inline' href="#inline_content04"><img src="img/overlay.png" width="150" height="100"></a></p>
        <p class="flower05"><a class='inline' href="#inline_content05"><img src="img/overlay.png" width="150" height="100"></a></p>
        <p class="flower06"><a class='inline' href="#inline_content06"><img src="img/overlay.png" width="150" height="100"></a></p>
        <p class="flower07"><a class='inline' href="#inline_content07"><img src="img/overlay.png" width="120" height="100"></a></p>
        <!-- This contains the hidden content for inline calls -->
        <div style='display:none'>
          <div id='inline_content01' style='padding:10px; background:#fff;'>
            <div style="text-align:center;"><img src="static/images/icon03.jpg" >&nbsp;&nbsp;<img src="static/images/list01.png" > <?php if($star01=='10'||$star01=='9'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star01=='8'||$star01=='7'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star01=='6'||$star01=='5'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star01=='4'||$star01=='3'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star01=='2'||$star01=='1'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?>&nbsp;&nbsp;<img src="static/images/icon04.jpg" ></div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>1.升国旗时要立正，敬礼姿势要标准，唱国歌时响又亮，聆听讲话要安静。</td>
                <td><?php if($star ['list01']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list01']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list01']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list01']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list01']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>2.校服整洁又大方，领巾标志佩戴好。</td>
                <td><?php if($star ['list02']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list02']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list02']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list02']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list02']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>3.听从教导有礼貌，微笑待人勤问好。</td>
                <td><?php if($star ['list03']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list03']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list03']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list03']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list03']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>4.做人诚实讲道理，遵守规则有秩序。</td>
                <td><?php if($star ['list04']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list04']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list04']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list04']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list04']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>5.课间休息不吵闹，课前准备不要忘，楼道慢步靠右行，安全第一要牢记。</td>
                <td><?php if($star ['list05']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list05']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list05']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list05']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list05']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>6.餐前把手洗干净，安静用餐不挑食，结束餐具放整齐。</td>
                <td><?php if($star ['list06']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list06']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list06']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list06']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list06']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
            </table>
          </div>
          <div id='inline_content02' style='padding:10px; background:#fff;'>
            <div style="text-align:center;"><img src="static/images/icon03.jpg" >&nbsp;&nbsp;<img src="static/images/list07.png" > <?php if($star07=='10'||$star07=='9'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star07=='8'||$star07=='7'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star07=='6'||$star07=='5'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star07=='4'||$star07=='3'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star07=='2'||$star07=='1'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?>&nbsp;&nbsp;<img src="static/images/icon04.jpg" ></div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>1.积极参加学校组织的各种活动和社会实践活动，认真完成集体交给的任务。</td>
                <td><?php if($star ['list26']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list26']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list26']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list26']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list26']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>2.参加活动队伍齐，抬头挺胸精神好，文明观众听指挥。</td>
                <td><?php if($star ['list27']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list27']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list27']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list27']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list27']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>3.知道中国的传统节日，了解它的由来及意义。</td>
                <td><?php if($star ['list28']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list28']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list28']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list28']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list28']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>4.了解少先队的相关知识，积极参加苗苗团，少先队。</td>
                <td><?php if($star ['list29']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list29']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list29']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list29']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list29']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
            </table>
          </div>
          <div id='inline_content03' style='padding:10px; background:#fff;'>
            <div style="text-align:center;"><img src="static/images/icon03.jpg" >&nbsp;&nbsp;<img src="static/images/list05.png" > <?php if($star05=='10'||$star05=='9'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star05=='8'||$star05=='7'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star05=='6'||$star05=='5'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star05=='4'||$star05=='3'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star05=='2'||$star05=='1'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?>&nbsp;&nbsp;<img src="static/images/icon04.jpg" ></div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>1.认真做好广播操、课间操、眼保健操，积极参加有益的文体活动。</td>
                <td><?php if($star ['list19']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list19']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list19']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list19']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list19']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>2.积极参加体育锻炼，乐观开朗向上，不做有危险的游戏。</td>
                <td><?php if($star ['list20']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list20']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list20']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list20']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list20']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>3.学会自我照顾，身体若有不适要及时向老师反应。</td>
                <td><?php if($star ['list21']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list21']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list21']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list21']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list21']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
            </table>
          </div>
          <div id='inline_content04' style='padding:10px; background:#fff;'>
            <div style="text-align:center;"><img src="static/images/icon03.jpg" >&nbsp;&nbsp;<img src="static/images/list06.png" > <?php if($star06=='10'||$star06=='9'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star06=='8'||$star06=='7'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star06=='6'||$star06=='5'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star06=='4'||$star06=='3'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star06=='2'||$star06=='1'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?>&nbsp;&nbsp;<img src="static/images/icon04.jpg" ></div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>1.自己的事情自己做，帮助老师做点事，关心父母不撒娇。</td>
                <td><?php if($star ['list22']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list22']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list22']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list22']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list22']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>2.团结友爱讲互助，集体生活真快乐。</td>
                <td><?php if($star ['list23']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list23']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list23']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list23']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list23']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>3.节约用水讲环保，爱护公物保护绿化。</td>
                <td><?php if($star ['list24']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list24']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list24']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list24']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list24']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>4.知错就能改，东西及时还，遇到困难不害怕。</td>
                <td><?php if($star ['list25']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list25']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list25']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list25']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list25']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
            </table>
          </div>
          <div id='inline_content05' style='padding:10px; background:#fff;'>
            <div style="text-align:center;"><img src="static/images/icon03.jpg" >&nbsp;&nbsp;<img src="static/images/list02.png" > <?php if($star02=='10'||$star02=='9'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star02=='8'||$star02=='7'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star02=='6'||$star02=='5'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star02=='4'||$star02=='3'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star02=='2'||$star02=='1'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?>&nbsp;&nbsp;<img src="static/images/icon04.jpg" ></div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>1.准时上学不迟到，生病有事要请假，专心听课多动脑，举手发言不胆小。</td>
                <td><?php if($star ['list07']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list07']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list07']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list07']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list07']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>2.预备铃响进教室，准备书本坐端正，静待老师来上课。</td>
                <td><?php if($star ['list08']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list08']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list08']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list08']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list08']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>3.读书姿势要端正，认真作业字写好。</td>
                <td><?php if($star ['list09']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list09']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list09']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list09']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list09']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>4.完成作业需检查，预习复习不能忘。</td>
                <td><?php if($star ['list10']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list10']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list10']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list10']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list10']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>5.阅读书籍不能少，养成阅读好习惯。</td>
                <td><?php if($star ['list11']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list11']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list11']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list11']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list11']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
            </table>
          </div>
          <div id='inline_content06' style='padding:10px; background:#fff;'>
            <div style="text-align:center;"><img src="static/images/icon03.jpg" >&nbsp;&nbsp;<img src="static/images/list03.png" > <?php if($star03=='10'||$star03=='9'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star03=='8'||$star03=='7'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star03=='6'||$star03=='5'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star03=='4'||$star03=='3'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star03=='2'||$star03=='1'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?>&nbsp;&nbsp;<img src="static/images/icon04.jpg" ></div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>1.勤剪指甲勤洗澡，饭前便后要洗手，随身携带手帕纸。</td>
                <td><?php if($star ['list12']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list12']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list12']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list12']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list12']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>2.书本文具放整齐，东西用完放放好，保持桌面常干净。</td>
                <td><?php if($star ['list13']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list13']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list13']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list13']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list13']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>3.认真对待“小岗位”，桌子椅子排排齐，值日工作有秩序。</td>
                <td><?php if($star ['list14']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list14']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list14']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list14']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list14']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>4.不带零食到学校，不把垃圾随地丢，看到垃圾忙拾起。</td>
                <td><?php if($star ['list15']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list15']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list15']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list15']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list15']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
            </table>
			
          </div>
          <div id='inline_content07' style='padding:10px; background:#fff;'>
            <div style="text-align:center;"><img src="static/images/icon03.jpg" >&nbsp;&nbsp;<img src="static/images/list04.png" > <?php if($star04=='10'||$star04=='9'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star04=='8'||$star04=='7'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star04=='6'||$star04=='5'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star04=='4'||$star04=='3'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star04=='2'||$star04=='1'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?>&nbsp;&nbsp;<img src="static/images/icon04.jpg" ></div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>1.谦让有礼，关心、爱护同学，热心帮助有空难的同学。</td>
                <td><?php if($star ['list16']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list16']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list16']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list16']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list16']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>2.认真参加学校志愿服务活动，热心为他人服务。</td>
                <td><?php if($star ['list17']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list17']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list17']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list17']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list17']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>3.学会感恩，主动为校、为班、为同伴做事，乐于奉献。</td>
                <td><?php if($star ['list18']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list18']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list18']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list18']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list18']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
            </table>
			
          </div>
        </div>
      </div>
      <div class="detail_box">
	    <div class="select_box">学期：
          <select class="select_nj" name="level" style="width:60%;" onChange="window.location.href='?id=<?php echo $id?>&level='+this.value">
          <option value="">---选择学期---</option>
		    <option value="5" <?php if($level ==5){?>selected<?php }?>>综合学年</option>
        	<option value="1" <?php if($level ==1){?>selected<?php }?>>第一学期上</option>
			<option value="2" <?php if($level ==2){?>selected<?php }?>>第一学期下</option>
			<option value="3" <?php if($level ==3){?>selected<?php }?>>第二学期上</option>
			<option value="4" <?php if($level ==4){?>selected<?php }?>>第二学期下</option>
          </select>
        </div>
        <div><img src="static/images/face.jpg" ></div>
        <div class="detail_info">姓名：<?php echo $infor ['title'];?><br>
          性别：<?php echo $infor ['sex'];?><br>
          学籍号：<?php echo $infor ['cid'];?><br>
          年级：<?php echo $infor ['classroom'];?><br>
		  学期：<?php echo $levelname;?><br>
          总体评价：<br>
          <?php if($startatol > 0){?><p>该学员总共获得<?php echo $startatol;?>颗星的评价！</p><?php }else{?><p>该学员本学期尚未进行评价！</p><?php }?></div>
		  
		<div><input type="button" class="btn001"  onClick="javascript:history.back(-1)" value="返回列表页"></div>
      </div>
    </div>
  </div>
</div>
<script src="static/js/jquery.min.js" type="text/javascript" charset="utf-8"></script> 
<script src="static/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script> 
<script src="js/jquery.colorbox.js"></script> 
<script>
$(document).ready(function(){
	$(".inline").colorbox({inline:true, width:"50%"});			
});
</script>
</body>
</html>