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
              <td>1.升国旗时要立正，敬礼姿势要标准，唱国歌时响又亮，聆听讲话要安静。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list01" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>2.校服整洁又大方，领巾标志佩戴好。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list02" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>3.听从教导有礼貌，微笑待人勤问好。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list03" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>4.做人诚实讲道理，遵守规则有秩序。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list04" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>5.课间休息不吵闹，课前准备不要忘，楼道慢步靠右行，安全第一要牢记。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list05" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>6.餐前把手洗干净，安静用餐不挑食，结束餐具放整齐。</td>
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
              <td>1.准时上学不迟到，生病有事要请假，专心听课多动脑，举手发言不胆小。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list07" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>2.预备铃响进教室，准备书本坐端正，静待老师来上课。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list08" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>3.读书姿势要端正，认真作业字写好。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list09" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>4.完成作业需检查，预习复习不能忘。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list10" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>5.阅读书籍不能少，养成阅读好习惯。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list11" value=""></p>
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
              <td>1.勤剪指甲勤洗澡，饭前便后要洗手，随身携带手帕纸。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list12" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>2.书本文具放整齐，东西用完放放好，保持桌面常干净。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list13" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>3.认真对待“小岗位”，桌子椅子排排齐，值日工作有秩序。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list14" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>4.不带零食到学校，不把垃圾随地丢，看到垃圾忙拾起。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list15" value=""></p>
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
              <td>1.谦让有礼，关心、爱护同学，热心帮助有空难的同学。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list16" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>2.认真参加学校志愿服务活动，热心为他人服务。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list17" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>3.学会感恩，主动为校、为班、为同伴做事，乐于奉献。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list18" value=""></p>
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
              <td>1.认真做好广播操、课间操、眼保健操，积极参加有益的文体活动。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list19" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>2.积极参加体育锻炼，乐观开朗向上，不做有危险的游戏。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list20" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>3.学会自我照顾，身体若有不适要及时向老师反应。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list21" value=""></p>
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
              <td>1.自己的事情自己做，帮助老师做点事，关心父母不撒娇。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list22" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>2.团结友爱讲互助，集体生活真快乐。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list23" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>3.节约用水讲环保，爱护公物保护绿化。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list24" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>4.知错就能改，东西及时还，遇到困难不害怕。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list25" value=""></p>
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
              <td>1.积极参加学校组织的各种活动和社会实践活动，认真完成集体交给的任务。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list26" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>2.参加活动队伍齐，抬头挺胸精神好，文明观众听指挥。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list27" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>3.知道中国的传统节日，了解它的由来及意义。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list28" value=""></p>
                </div></td>
            </tr>
            <tr>
              <td>4.了解少先队的相关知识，积极参加苗苗团，少先队。</td>
              <td><div id="starRating">
                  <p class="photo"> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <span><i class="high"></i><i class="nohigh"></i></span> <input type="hidden" class="list" name="list29" value=""></p>
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
	for ($i=0; $i<30; $i++) {
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