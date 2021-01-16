<?php
include ("global.php");

$id	= trim($_GET ['id'])?trim($_GET ['id']):0;
$level	= trim($_GET ['level'])?trim($_GET ['level']):1;
$infor = $db->find ( "select * from phpaadb_baby where id=" . $id  );

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

	$star01 = ($star01 + ceil(($star['list01'] + $star['list02'] + $star['list03'] + $star['list04'] + $star['list05'] + $star['list06'])/6))/$i;
	$star02 = ($star02 + ceil(($star['list07'] + $star['list08'] + $star['list09'] + $star['list10'] + $star['list11'] + $star['list12'])/6))/$i;
	$star03 = ($star03 + ceil(($star['list13'] + $star['list14'] + $star['list15'] + $star['list16'])/4))/$i;
	$star04 = ($star04 + ceil(($star['list17'] + $star['list18'] + $star['list19'] + $star['list20'])/4))/$i;
	$star05 = ($star05 + ceil(($star['list21'] + $star['list22'] + $star['list23'] + $star['list24'] + $star['list25'] + $star['list26'])/6))/$i;
	$star06 = ($star06 + ceil(($star['list27'] + $star['list28'] + $star['list29'] + $star['list30'] + $star['list31'])/5))/$i;
	$star07 = ($star07 + ceil(($star['list32'] + $star['list33'] + $star['list34'] + $star['list35'])/4))/$i;
}


//print_r($star);
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
                <td>1、尊敬国旗，升国旗时，规范敬队礼、正确有感情地高唱国歌。</td>
                <td><?php if($star ['list01']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list01']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list01']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list01']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list01']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>2、遵守校纪校规，在校穿校服，佩戴红领巾，队干部佩戴标志。</td>
                <td><?php if($star ['list02']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list02']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list02']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list02']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list02']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>3、待人热情有礼貌，说话文明，会使用礼貌用语。</td>
                <td><?php if($star ['list03']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list03']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list03']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list03']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list03']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>4、与同学和睦相处，互帮互助，关心爱护低年级小朋友。</td>
                <td><?php if($star ['list04']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list04']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list04']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list04']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list04']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>5、课间休息讲规范，安全第一要牢记，不大声喧哗，不追逐打闹，楼道慢步靠右走。</td>
                <td><?php if($star ['list05']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list05']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list05']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list05']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list05']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>6、遵守就餐秩序，排队拿饭时不拥挤、不插队，安静用餐、不挑食不浪费。</td>
                <td><?php if($star ['list06']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list06']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list06']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list06']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list06']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
            </table>
          </div>
          <div id='inline_content02' style='padding:10px; background:#fff;'>
            <div style="text-align:center;"><img src="static/images/icon03.jpg" >&nbsp;&nbsp;<img src="static/images/list07.png" > <?php if($star07=='10'||$star07=='9'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star07=='8'||$star07=='7'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star07=='6'||$star07=='5'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star07=='4'||$star07=='3'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star07=='2'||$star07=='1'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?>&nbsp;&nbsp;<img src="static/images/icon04.jpg" ></div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>1、积极参加学校四大节日活动，展示自己，为班级增光添彩。</td>
                <td><?php if($star ['list32']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list32']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list32']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list32']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list32']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>2、积极参加学校组织的团队活动和社会实践活动，表现出色。</td>
                <td><?php if($star ['list33']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list33']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list33']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list33']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list33']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>3、知道中国的传统节日，了解它的由来及意义。</td>
                <td><?php if($star ['list34']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list34']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list34']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list34']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list34']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>4、通过自己的努力，在各方面取得成绩和进步。</td>
                <td><?php if($star ['list35']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list35']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list35']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list35']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list35']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
            </table>
          </div>
          <div id='inline_content03' style='padding:10px; background:#fff;'>
            <div style="text-align:center;"><img src="static/images/icon03.jpg" >&nbsp;&nbsp;<img src="static/images/list05.png" > <?php if($star05=='10'||$star05=='9'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star05=='8'||$star05=='7'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star05=='6'||$star05=='5'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star05=='4'||$star05=='3'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star05=='2'||$star05=='1'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?>&nbsp;&nbsp;<img src="static/images/icon04.jpg" ></div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>1、坚持锻炼身体，积极参加有益的文体活动。</td>
                <td><?php if($star ['list21']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list21']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list21']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list21']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list21']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>2、认真参加早操和课间大活动，不得无故迟到、早退、旷操。</td>
                <td><?php if($star ['list22']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list22']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list22']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list22']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list22']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>3、进退场集合快、静、齐，做操动作有力到位。</td>
                <td><?php if($star ['list23']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list23']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list23']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list23']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list23']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>4、自觉做好眼保健操，穴位要准确、动作要到位。</td>
                <td><?php if($star ['list24']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list24']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list24']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list24']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list24']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>5、课外体育活动要在指定场地上进行，不做危险游戏。</td>
                <td><?php if($star ['list25']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list25']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list25']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list25']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list25']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>6、学会自我照顾，注意身体状况变化，若有不良症状要及时向老师反映，采取必要的保健措施。</td>
                <td><?php if($star ['list26']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list26']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list26']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list26']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list26']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
            </table>
          </div>
          <div id='inline_content04' style='padding:10px; background:#fff;'>
            <div style="text-align:center;"><img src="static/images/icon03.jpg" >&nbsp;&nbsp;<img src="static/images/list06.png" > <?php if($star06=='10'||$star06=='9'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star06=='8'||$star06=='7'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star06=='6'||$star06=='5'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star06=='4'||$star06=='3'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star06=='2'||$star06=='1'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?>&nbsp;&nbsp;<img src="static/images/icon04.jpg" ></div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>1、要有积极向上的心态，面对困难，要勇于正视，敢于克服。</td>
                <td><?php if($star ['list27']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list27']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list27']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list27']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list27']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>2、关心父母，主动为父母分担家务；听从师长的教导，及时与师长沟通。</td>
                <td><?php if($star ['list28']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list28']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list28']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list28']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list28']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>3、同学之间友好相处、团结有爱、关系和谐。</td>
                <td><?php if($star ['list29']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list29']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list29']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list29']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list29']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>4、自觉爱护学校里的公共财物、校园设施，损坏公物主动赔偿，节约用水用电。</td>
                <td><?php if($star ['list30']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list30']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list30']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list30']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list30']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>5、乐观开朗向上，文明绿色上网。</td>
                <td><?php if($star ['list31']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list31']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list31']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list31']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list31']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
            </table>
          </div>
          <div id='inline_content05' style='padding:10px; background:#fff;'>
            <div style="text-align:center;"><img src="static/images/icon03.jpg" >&nbsp;&nbsp;<img src="static/images/list02.png" > <?php if($star02=='10'||$star02=='9'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star02=='8'||$star02=='7'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star02=='6'||$star02=='5'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star02=='4'||$star02=='3'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star02=='2'||$star02=='1'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?>&nbsp;&nbsp;<img src="static/images/icon04.jpg" ></div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>1、按时到校，迟到同学要喊“报告”，经老师允许后，方可进入教室上课。</td>
                <td><?php if($star ['list07']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list07']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list07']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list07']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list07']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>2、两分钟预备铃响，立即进入教室，准备好学习用具，做好上课准备。</td>
                <td><?php if($star ['list08']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list08']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list08']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list08']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list08']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>3、上课认真听讲、积极开动脑筋、踊跃回答问题，敢于提出问题。</td>
                <td><?php if($star ['list09']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list09']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list09']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list09']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list09']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>4、独立、按时完成作业，有错及时订正。</td>
                <td><?php if($star ['list10']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list10']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list10']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list10']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list10']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>5、按时到场，诚信考试不作弊。</td>
                <td><?php if($star ['list11']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list11']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list11']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list11']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list11']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>6、阅读健康有益的少儿课外读物，并能做好读书笔记。</td>
                <td><?php if($star ['list12']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list12']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list12']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list12']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list12']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
            </table>
			
          </div>
          <div id='inline_content06' style='padding:10px; background:#fff;'>
            <div style="text-align:center;"><img src="static/images/icon03.jpg" >&nbsp;&nbsp;<img src="static/images/list03.png" > <?php if($star03=='10'||$star03=='9'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star03=='8'||$star03=='7'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star03=='6'||$star03=='5'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star03=='4'||$star03=='3'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star03=='2'||$star03=='1'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?>&nbsp;&nbsp;<img src="static/images/icon04.jpg" ></div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>1、衣着整洁，经常洗澡，勤剪指甲，勤洗头，早晚刷牙，饭前便后要洗手。</td>
                <td><?php if($star ['list13']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list13']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list13']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list13']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list13']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>2、自己的事情自己做，桌椅、抽屉摆放整齐。</td>
                <td><?php if($star ['list14']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list14']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list14']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list14']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list14']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>3、认真完成班级安排的值日生工作，保持校园、班级整洁。</td>
                <td><?php if($star ['list15']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list15']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list15']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list15']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list15']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>4、自觉维护校园卫生环境，不随地吐痰、不乱扔垃圾、不随意折枝摘花。</td>
                <td><?php if($star ['list16']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list16']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list16']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list16']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list16']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
            </table>
			
          </div>
          <div id='inline_content07' style='padding:10px; background:#fff;'>
            <div style="text-align:center;"><img src="static/images/icon03.jpg" >&nbsp;&nbsp;<img src="static/images/list04.png" > <?php if($star04=='10'||$star04=='9'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star04=='8'||$star04=='7'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star04=='6'||$star04=='5'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star04=='4'||$star04=='3'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star04=='2'||$star04=='1'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?>&nbsp;&nbsp;<img src="static/images/icon04.jpg" ></div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>1、积极参加集体活动，认真完成集体交给的任务。</td>
                <td><?php if($star ['list17']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list17']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list17']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list17']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list17']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>2、乐意为集体服务，珍惜集体荣誉，不做有损集体荣誉的事情。</td>
                <td><?php if($star ['list18']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list18']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list18']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list18']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list18']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>3、积极参加“雏鹰假日小队”活动，主动参与社区志愿服务活动。</td>
                <td><?php if($star ['list19']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list19']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list19']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list19']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list19']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>4、帮助老人和儿童，做力所能及的事，主动关心残疾人。</td>
                <td><?php if($star ['list20']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list20']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list20']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list20']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list20']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
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