<?php
include ("global.php");

$id	= trim($_GET ['id'])?trim($_GET ['id']):0;
$level	= trim($_GET ['level'])?trim($_GET ['level']):1;
$step	= trim($_GET ['step'])?trim($_GET ['step']):0;
$act	= trim($_GET ['act'])?trim($_GET ['act']):'add';

$infor = $db->find ( "select * from phpaadb_baby where id=" . $id );
$star = $db->find ( "select * from phpaadb_starlog where uid=" . $id." and level = ".$level );
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
</head>
<body>
<div class="pagemain">
  <div class="warp" style="background-image: url(static/images/bg03.jpg);">
    <?php include_once 'inc/header.php';?>
    <div class="clearfix"></div>
    <div class="main">
      <div class="page_left">
        <div class="face">
          <div class="face_img"><img src="static/images/face.jpg" ></div>
          <div class="face_infor">姓名：<?php echo $infor ['title'];?><br>
            性别：<?php echo $infor ['sex'];?><br>
            <?php echo $infor ['cid'];?><br>
            年级：<?php echo $infor ['classroom'];?></div>
          <div class="clearfix"></div>
        </div>
        <div class="infochack" id="foreTab">
          <ul>
            <li class="infolist" id='infolist'><img src="static/images/list01.png" > <span id="infolist01"><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ></span></li>
            <li class="infolist"><img src="static/images/list02.png" > <span id="infolist02"><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ></span></li>
            <li class="infolist"><img src="static/images/list03.png" > <span id="infolist03"><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ></span></li>
            <li class="infolist"><img src="static/images/list04.png" > <span id="infolist04"><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ></span></li>
            <li class="infolist"><img src="static/images/list05.png" > <span id="infolist05"><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ></span></li>
            <li class="infolist"><img src="static/images/list06.png" > <span id="infolist06"><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ></span></li>
            <li class="infolist"><img src="static/images/list07.png" > <span id="infolist07"><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ></span></li>
          </ul>
        </div>
      </div>
      <div class="page_right">
      <form action="chack.action.php" method="post" enctype="multipart/form-data" name="form1">
        <input type="hidden" name="act" value="<?php echo $act;?>">
        <input type="hidden" name="classroom" value="<?php echo $infor ['classroom'];?>">
        <div class="chackbox tabContent" id="chackbox01">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><b style="font-size:18px;">守规明礼</b></td>
              <td> </td>
            </tr>
			<tr>
              <td>1、尊敬国旗，升国旗时，规范敬队礼、正确有感情地高唱国歌。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list01" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>2、遵守校纪校规，在校穿校服，佩戴红领巾，队干部佩戴标志。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list02" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>3、待人热情有礼貌，说话文明，会使用礼貌用语。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list03" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>4、与同学和睦相处，互帮互助，关心爱护低年级小朋友。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list04" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>5、课间休息讲规范，安全第一要牢记，不大声喧哗，不追逐打闹，<br>楼道慢步靠右走。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list05" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>6、遵守就餐秩序，排队拿饭时不拥挤、不插队，安静用餐、不挑食不浪费。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list06" value=""></p>
                </div></td>
            </tr>
          </table>
        </div>
        <div class="chackbox tabContent" id="chackbox02" style="display: none;">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><b style="font-size:18px;">勤奋好学</b></td>
              <td> </td>
            </tr>
			<tr>
              <td>1、按时到校，迟到同学要喊“报告”，经老师允许后，方可进入教室上课。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list07" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>2、两分钟预备铃响，立即进入教室，准备好学习用具，做好上课准备。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list08" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>3、上课认真听讲、积极开动脑筋、踊跃回答问题，敢于提出问题。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list09" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>4、独立、按时完成作业，有错及时订正。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list10" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>5、按时到场，诚信考试不作弊。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list11" value=""></p>
                </div></td>
            </tr>
			<tr>
              <td>6、阅读健康有益的少儿课外读物，并能做好读书笔记。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list12" value=""></p>
                </div></td>
            </tr>
          </table>
        </div>
        <div class="chackbox tabContent" id="chackbox03" style="display: none;">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><b style="font-size:18px;">卫生劳动</b></td>
              <td> </td>
            </tr>
			<tr>
              <td>1、衣着整洁，经常洗澡，勤剪指甲，勤洗头，早晚刷牙，饭前便后要洗手。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list13" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>2、自己的事情自己做，桌椅、抽屉摆放整齐。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list14" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>3、认真完成班级安排的值日生工作，保持校园、班级整洁。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list15" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>4、自觉维护校园卫生环境，不随地吐痰、不乱扔垃圾、不随意折枝摘花。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list16" value=""></p>
                </div></td>
            </tr>
          </table>
        </div>
        <div class="chackbox tabContent" id="chackbox04" style="display: none;">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><b style="font-size:18px;">志愿奉献</b></td>
              <td> </td>
            </tr>
			<tr>
              <td>1、积极参加集体活动，认真完成集体交给的任务。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list17" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>2、乐意为集体服务，珍惜集体荣誉，不做有损集体荣誉的事情。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list18" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>3、积极参加“雏鹰假日小队”活动，主动参与社区志愿服务活动。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list19" value=""></p>
                </div></td>
            </tr>
			<tr>
              <td>4、帮助老人和儿童，做力所能及的事，主动关心残疾人。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list20" value=""></p>
                </div></td>
            </tr>
          </table>
        </div>
        <div class="chackbox tabContent" id="chackbox05" style="display: none;">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><b style="font-size:18px;">健康修身</b></td>
              <td> </td>
            </tr>
			<tr>
              <td>1、坚持锻炼身体，积极参加有益的文体活动。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list21" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>2、认真参加早操和课间大活动，不得无故迟到、早退、旷操。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list22" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>3、进退场集合快、静、齐，做操动作有力到位。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list23" value=""></p>
                </div></td>
            </tr>
			<tr>
              <td>4、自觉做好眼保健操，穴位要准确、动作要到位。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list24" value=""></p>
                </div></td>
            </tr>
			<tr>
              <td>5、课外体育活动要在指定场地上进行，不做危险游戏。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list25" value=""></p>
                </div></td>
            </tr>
			<tr>
              <td>6、学会自我照顾，注意身体状况变化，若有不良症状要及时向老师反映，<br>采取必要的保健措施。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list26" value=""></p>
                </div></td>
            </tr>
          </table>
        </div>
        <div class="chackbox tabContent" id="chackbox06" style="display: none;">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><b style="font-size:18px;">自律自强</b></td>
              <td> </td>
            </tr>
			<tr>
              <td>1、要有积极向上的心态，面对困难，要勇于正视，敢于克服。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list27" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>2、关心父母，主动为父母分担家务；听从师长的教导，及时与师长沟通。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list28" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>3、同学之间友好相处、团结有爱、关系和谐。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list29" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>4、自觉爱护学校里的公共财物、校园设施，损坏公物主动赔偿，节约用水用电。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list30" value=""></p>
                </div></td>
            </tr>
			<tr>
              <td>5、乐观开朗向上，文明绿色上网。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list31" value=""></p>
                </div></td>
            </tr>
          </table>
        </div>
        <div class="chackbox tabContent" id="chackbox07" style="display: none;">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><b style="font-size:18px;">阳光成长</b></td>
              <td> </td>
            </tr>
			<tr>
              <td>1、积极参加学校四大节日活动，展示自己，为班级增光添彩。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list32" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>2、积极参加学校组织的团队活动和社会实践活动，表现出色。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list33" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>3、知道中国的传统节日，了解它的由来及意义。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list34" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>4、通过自己的努力，在各方面取得成绩和进步。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list35" value=""></p>
                </div></td>
            </tr>
          </table>
        </div>
        <div class="btn02"><input name="id" type="hidden" value="<?php echo $id;?>">
              <input name="step" type="hidden" value="<?php echo $step;?>">
			  <input name="level" type="hidden" value="<?php echo $level;?>">
              <input type="submit" name="button" class="btn001" id="button" value=" 提交 ">
              &nbsp;&nbsp;&nbsp;
              <input type="button" class="btn001"  onClick="javascript:history.back(-1)" value="返回">
              </div>
              </form>
      </div>
    </div>
  </div>
</div>
<script src="static/js/jquery.min.js" type="text/javascript" charset="utf-8"></script> 
<script src="static/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script> 
<script src="static/js/main.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
<?php if($star){
	$j=1;
	for ($i=0; $i<36; $i++) {
		$j++;
		if($j<10){
			$j='0'.$i;
		}else{
			$j=$i;
		}
		if($star['list'.$j]>0){
	?>
	//var a=$('.photo').index(i);
	
	var a=$('.photo').eq(<?php echo $i-1?>);
	var item = a.find('span');
	
	var count = <?php echo $star['list'.$j]?> / 2
	if(count == 5) {
		item.find('.high').css('z-index',1);
	} else {
		item.eq(count).prevAll().find('.high').css('z-index',1);
	}
	item.parent('.photo').find("input[name^='list']").val(<?php echo $star['list'.$j]?>);
	
	//document.getElementById("infolist").click();
	
	
 
<?php }}}?>
/**
 $(function () {
<?php if($step>0){?>
	//var list=$('.infolist').eq(<?php echo $i-1?>);
	//var content=$('.tabContent').eq(<?php echo $i-1?>);
	$('.tabContent').css('display','none');//先隐藏
	$('.tabContent').eq(<?php echo $step?>).css('display','block');
	//$('#chackbox07').css('display','block');
	
<?php }?>

})
**/
</script> 
</body>
</html>