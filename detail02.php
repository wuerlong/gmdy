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

$star01 = ceil(($star['list01'] + $star['list02'] + $star['list03'] + $star['list04'] + $star['list05'] + $star['list06'] + $star['list07'])/7);
$star02 = ceil(($star['list08'] + $star['list09'] + $star['list10'] + $star['list11'] + $star['list12'] + $star['list13'])/6);
$star03 = ceil(($star['list14'] + $star['list15'] + $star['list16'] + $star['list17'])/4);
$star04 = ceil(($star['list18'] + $star['list19'] + $star['list20'] + $star['list21'] + $star['list22'])/5);
$star05 = ceil(($star['list23'] + $star['list24'] + $star['list25'] + $star['list26'] + $star['list27'])/5);
$star06 = ceil(($star['list28'] + $star['list29'] + $star['list30'] + $star['list31'] + $star['list32'] + $star['list33'])/6);
$star07 = ceil(($star['list34'] + $star['list35'] + $star['list36'] + $star['list37'])/4);
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
                <td>1、在校穿校服，佩戴红领巾，队干部佩戴标志。</td>
                <td><?php if($star ['list01']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list01']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list01']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list01']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list01']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>2、升旗仪式要肃立，少先队员敬队礼，唱响国歌。</td>
                <td><?php if($star ['list02']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list02']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list02']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list02']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list02']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>3、看到老师文明有礼，使用文明用语。举止文明得体，不说粗话脏话。</td>
                <td><?php if($star ['list03']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list03']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list03']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list03']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list03']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>4、课间文明游戏，和睦相处；上下楼梯靠右走，禁止翻越护栏。</td>
                <td><?php if($star ['list04']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list04']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list04']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list04']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list04']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>5、食堂用餐有序排队，文明安静用餐，保持桌面整洁，节约粮食。</td>
                <td><?php if($star ['list05']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list05']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list05']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list05']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list05']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>6、男生不留长发、女同学不烫发、不化妆、不佩戴首饰。</td>
                <td><?php if($star ['list06']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list06']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list06']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list06']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list06']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>7、遵守交通规则，过马路走人行横道线，骑自行车同学推行进入校园。</td>
                <td><?php if($star ['list07']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list07']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list07']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list07']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list07']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
            </table>
          </div>
          <div id='inline_content02' style='padding:10px; background:#fff;'>
            <div style="text-align:center;"><img src="static/images/icon03.jpg" >&nbsp;&nbsp;<img src="static/images/list07.png" > <?php if($star07=='10'||$star07=='9'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star07=='8'||$star07=='7'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star07=='6'||$star07=='5'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star07=='4'||$star07=='3'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star07=='2'||$star07=='1'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?>&nbsp;&nbsp;<img src="static/images/icon04.jpg" ></div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
			  <tr>
                <td>1、积极参加学校组织的各项重大活动，尽自己的努力能为班级做出贡献。</td>
                <td><?php if($star ['list34']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list34']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list34']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list34']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list34']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>2、积极参加团队活动和社会实践活动，有组织和纪律性。</td>
                <td><?php if($star ['list35']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list35']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list35']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list35']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list35']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>3、乐观开朗、积极向上，珍爱生命，远离毒品。</td>
                <td><?php if($star ['list36']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list36']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list36']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list36']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list36']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>4、快乐学习，有进步；明辨是非，有自信；心中有理想，传递正能量。</td>
                <td><?php if($star ['list37']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list37']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list37']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list37']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list37']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
            </table>
          </div>
          <div id='inline_content03' style='padding:10px; background:#fff;'>
            <div style="text-align:center;"><img src="static/images/icon03.jpg" >&nbsp;&nbsp;<img src="static/images/list05.png" > <?php if($star05=='10'||$star05=='9'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star05=='8'||$star05=='7'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star05=='6'||$star05=='5'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star05=='4'||$star05=='3'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star05=='2'||$star05=='1'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?>&nbsp;&nbsp;<img src="static/images/icon04.jpg" ></div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
			  <tr>
                <td>1、两操入场及退场队伍整齐，站队做到快、静、齐，精神饱满；动作标准规范，有活力。</td>
                <td><?php if($star ['list23']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list23']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list23']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list23']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list23']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>2、认真做好眼保健操，穴位准确，动作标准。</td>
                <td><?php if($star ['list24']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list24']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list24']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list24']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list24']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>3、坚持每天参加体育锻炼，不做危险游戏。</td>
                <td><?php if($star ['list25']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list25']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list25']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list25']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list25']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>4、积极参加校内外各项体育锻炼和活动竞赛。</td>
                <td><?php if($star ['list26']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list26']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list26']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list26']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list26']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>5、学会自我保护，有不良的症状及时向老师反映。</td>
                <td><?php if($star ['list27']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list27']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list27']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list27']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list27']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
            </table>
          </div>
          <div id='inline_content04' style='padding:10px; background:#fff;'>
            <div style="text-align:center;"><img src="static/images/icon03.jpg" >&nbsp;&nbsp;<img src="static/images/list06.png" > <?php if($star06=='10'||$star06=='9'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star06=='8'||$star06=='7'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star06=='6'||$star06=='5'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star06=='4'||$star06=='3'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star06=='2'||$star06=='1'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?>&nbsp;&nbsp;<img src="static/images/icon04.jpg" ></div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              
              <tr>
                <td>1、积极乐观的面对困难和挫折，不自卑，不嫉妒，不偏激，保持身心健康。</td>
                <td><?php if($star ['list28']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list28']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list28']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list28']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list28']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>2、体贴帮助父母长辈，主动承担力所能及的家务劳动。</td>
                <td><?php if($star ['list29']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list29']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list29']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list29']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list29']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>3、校外谨慎交友，在校有自己的朋友，同学间不攀比、互帮互助、和睦相处。</td>
                <td><?php if($star ['list30']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list30']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list30']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list30']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list30']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>4、爱护学校的绿化和公共设施，节约用水用电。</td>
                <td><?php if($star ['list31']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list31']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list31']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list31']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list31']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>5、学会自己管理好自己的时间，文明绿色上网，不吸烟不喝酒。</td>
                <td><?php if($star ['list32']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list32']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list32']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list32']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list32']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>6、遵守国法校纪、社会公德，诚实守信有担当，做到知错就改。</td>
                <td><?php if($star ['list33']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list33']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list33']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list33']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list33']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
            </table>
          </div>
          <div id='inline_content05' style='padding:10px; background:#fff;'>
            <div style="text-align:center;"><img src="static/images/icon03.jpg" >&nbsp;&nbsp;<img src="static/images/list02.png" > <?php if($star02=='10'||$star02=='9'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star02=='8'||$star02=='7'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star02=='6'||$star02=='5'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star02=='4'||$star02=='3'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star02=='2'||$star02=='1'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?>&nbsp;&nbsp;<img src="static/images/icon04.jpg" ></div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              
              <tr>
                <td>1、按时到校，不迟到，不早退，不旷课。</td>
                <td><?php if($star ['list08']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list08']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list08']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list08']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list08']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>2、预备铃响后，快速到达教室，安静等候上课。</td>
                <td><?php if($star ['list09']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list09']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list09']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list09']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list09']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>3、坐姿端正，专心听讲，勤于思考；</td>
                <td><?php if($star ['list10']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list10']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list10']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list10']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list10']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>4、主动学习，按时完成作业，作业书写工整；考试不作弊，考试卷面整洁。</td>
                <td><?php if($star ['list11']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list11']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list11']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list11']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list11']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>5、学会合作学习，认真倾听他人发言，勇于表达自己见解，口齿清晰，声音响亮。</td>
                <td><?php if($star ['list12']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list12']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list12']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list12']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list12']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>6、阅读书籍，开阔视野，能写读书笔记，有自己独到见解。</td>
                <td><?php if($star ['list13']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list13']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list13']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list13']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list13']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
            </table>
			
          </div>
          <div id='inline_content06' style='padding:10px; background:#fff;'>
            <div style="text-align:center;"><img src="static/images/icon03.jpg" >&nbsp;&nbsp;<img src="static/images/list03.png" > <?php if($star03=='10'||$star03=='9'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star03=='8'||$star03=='7'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star03=='6'||$star03=='5'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star03=='4'||$star03=='3'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star03=='2'||$star03=='1'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?>&nbsp;&nbsp;<img src="static/images/icon04.jpg" ></div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>1、认真做好每天的个人卫生。</td>
                <td><?php if($star ['list14']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list14']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list14']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list14']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list14']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
              <tr>
                <td>2、按时认真完成值日生工作，小岗位工作认真负责。</td>
                <td><?php if($star ['list15']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list15']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list15']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list15']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list15']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>3、维护校园整洁，积极参加室内外大扫除；爱护学校的一草一木，不攀折，不践踏。</td>
                <td><?php if($star ['list16']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list16']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list16']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list16']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list16']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>4、不带零食进校园。不随地吐痰，不乱扔垃圾，看到垃圾、纸屑等能主动捡起。</td>
                <td><?php if($star ['list17']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list17']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list17']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list17']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list17']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
            </table>
			
          </div>
          <div id='inline_content07' style='padding:10px; background:#fff;'>
            <div style="text-align:center;"><img src="static/images/icon03.jpg" >&nbsp;&nbsp;<img src="static/images/list04.png" > <?php if($star04=='10'||$star04=='9'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star04=='8'||$star04=='7'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star04=='6'||$star04=='5'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star04=='4'||$star04=='3'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star04=='2'||$star04=='1'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?>&nbsp;&nbsp;<img src="static/images/icon04.jpg" ></div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              
              <tr>
                <td>1、积极参加学校组织的校内外志愿服务活动。</td>
                <td><?php if($star ['list18']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list18']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list18']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list18']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list18']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>2、勤劳笃行乐奉献，主动为同伴、为班级、为学校做事，顾全大局。</td>
                <td><?php if($star ['list19']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list19']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list19']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list19']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list19']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>3、在家里，自己的事情自己做，主动分担家务。</td>
                <td><?php if($star ['list20']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list20']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list20']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list20']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list20']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>4、积极参加“雏鹰假日小队”活动，主动参与社区志愿服务活动。</td>
                <td><?php if($star ['list21']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list21']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list21']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list21']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list21']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
              </tr>
			  <tr>
                <td>5、同学之间团结互助，理解宽容，主动帮助老人和儿童，尊重残疾人。</td>
                <td><?php if($star ['list22']=='10'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><?php }else if($star ['list22']=='8'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><?php }else if($star ['list22']=='6'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list22']=='4'){?><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else if($star ['list22']=='2'){?><img src="img/star1.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }else{?><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><img src="img/star2.png" ><?php }?></td>
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