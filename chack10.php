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
              <td>1、在校穿校服，佩戴红领巾，队干部佩戴标志。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list01" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>2、升旗仪式要肃立，少先队员敬队礼，唱响国歌。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list02" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>3、看到老师文明有礼，使用文明用语。举止文明得体，不说粗话脏话。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list03" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>4、课间文明游戏，和睦相处；上下楼梯靠右走，禁止翻越护栏。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list04" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>5、食堂用餐有序排队，文明安静用餐，保持桌面整洁，节约粮食。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list05" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>6、男生不留长发、女同学不烫发、不化妆、不佩戴首饰。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list06" value=""></p>
                </div></td>
            </tr>
			<tr>
              <td>7、遵守交通规则，过马路走人行横道线，骑自行车同学推行进入校园。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list07" value=""></p>
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
              <td>1、按时到校，不迟到，不早退，不旷课。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list08" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>2、预备铃响后，快速到达教室，安静等候上课。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list09" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>3、坐姿端正，专心听讲，勤于思考；</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list10" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>4、主动学习，按时完成作业，作业书写工整；考试不作弊，考试卷面整洁。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list11" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>5、学会合作学习，认真倾听他人发言，勇于表达自己见解，口齿清晰，声音响亮。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list12" value=""></p>
                </div></td>
            </tr>
			<tr>
              <td>6、阅读书籍，开阔视野，能写读书笔记，有自己独到见解。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list13" value=""></p>
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
              <td>1、认真做好每天的个人卫生。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list14" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>2、按时认真完成值日生工作，小岗位工作认真负责。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list15" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>3、维护校园整洁，积极参加室内外大扫除；爱护学校的一草一木，不攀折，<br>不践踏。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list16" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>4、不带零食进校园。不随地吐痰，不乱扔垃圾，看到垃圾、纸屑等能主动捡起。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list17" value=""></p>
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
              <td>1、积极参加学校组织的校内外志愿服务活动。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list18" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>2、勤劳笃行乐奉献，主动为同伴、为班级、为学校做事，顾全大局。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list19" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>3、在家里，自己的事情自己做，主动分担家务。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list20" value=""></p>
                </div></td>
            </tr>
			<tr>
              <td>4、积极参加“雏鹰假日小队”活动，主动参与社区志愿服务活动。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list21" value=""></p>
                </div></td>
            </tr>
			<tr>
              <td>5、同学之间团结互助，理解宽容，主动帮助老人和儿童，尊重残疾人。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list22" value=""></p>
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
              <td>1、两操入场及退场队伍整齐，站队做到快、静、齐，精神饱满；动作标准规范，<br>有活力。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list23" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>2、认真做好眼保健操，穴位准确，动作标准。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list24" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>3、坚持每天参加体育锻炼，不做危险游戏。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list25" value=""></p>
                </div></td>
            </tr>
			<tr>
              <td>4、积极参加校内外各项体育锻炼和活动竞赛。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list26" value=""></p>
                </div></td>
            </tr>
			<tr>
              <td>5、学会自我保护，有不良的症状及时向老师反映。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list27" value=""></p>
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
              <td>1、积极乐观的面对困难和挫折，不自卑，不嫉妒，不偏激，保持身心健康。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list28" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>2、体贴帮助父母长辈，主动承担力所能及的家务劳动。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list29" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>3、校外谨慎交友，在校有自己的朋友，同学间不攀比、互帮互助、和睦相处。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list30" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>4、爱护学校的绿化和公共设施，节约用水用电。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list31" value=""></p>
                </div></td>
            </tr>
			<tr>
              <td>5、学会自己管理好自己的时间，文明绿色上网，不吸烟不喝酒。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list32" value=""></p>
                </div></td>
            </tr>
			<tr>
              <td>6、遵守国法校纪、社会公德，诚实守信有担当，做到知错就改。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list33" value=""></p>
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
              <td>1、积极参加学校组织的各项重大活动，尽自己的努力能为班级做出贡献。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list34" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>2、积极参加团队活动和社会实践活动，有组织和纪律性。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list35" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>3、乐观开朗、积极向上，珍爱生命，远离毒品。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list36" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>4、快乐学习，有进步；明辨是非，有自信；心中有理想，传递正能量。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list37" value=""></p>
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
	for ($i=0; $i<38; $i++) {
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