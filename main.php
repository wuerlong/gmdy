<?php
include_once 'global.php';
//echo $_SESSION['classroom'];
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
  <div class="warp">
  <?php include_once 'inc/header.php';?>
    <div class="clearfix"></div>
    <div class="main">
      <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-left:auto; margin-right:auto;">
        <tr>
        <?php if( strpos($_SESSION['classroom'],"一年级") !== false || strpos($_SESSION['classroom'],"二年级") !== false ||$_SESSION['classroom']=='all'){ ?>
          <td align="center"><div class="chosebox">
              <div class="chosetitle">1-2年级</div>
              <?php if( strpos($_SESSION['classroom'],"一年级") !== false ||$_SESSION['classroom']=='all'){ 
			  if($_SESSION['classroom']=='一年级1班'){
			  ?>
              <div class="choselist"><a href="list.php?id=12">一年级1班</a></div>
              <?php }else if($_SESSION['classroom']=='一年级2班'){?>
               <div class="choselist"><a href="list.php?id=13">一年级2班</a></div>
              <?php }else if($_SESSION['classroom']=='一年级3班'){ ?>
               <div class="choselist"><a href="list.php?id=14">一年级3班</a></div>
              <?php }else if($_SESSION['classroom']=='一年级4班'){ ?>
               <div class="choselist"><a href="list.php?id=15">一年级4班</a></div>
              <?php }else { ?>
              <div class="choselist"><a href="list.php?id=3">一年级</a></div>

             <?php }}?>
             <?php if( strpos($_SESSION['classroom'],"二年级") !== false ||$_SESSION['classroom']=='all'){ 
			 if($_SESSION['classroom']=='二年级1班'){
			  ?>
              <div class="choselist"><a href="list.php?id=16">二年级1班</a></div>
              <?php }else if($_SESSION['classroom']=='二年级2班'){?>
               <div class="choselist"><a href="list.php?id=17">二年级2班</a></div>
              <?php }else if($_SESSION['classroom']=='二年级3班'){ ?>
               <div class="choselist"><a href="list.php?id=18">二年级3班</a></div>
              <?php }else if($_SESSION['classroom']=='二年级4班'){ ?>
               <div class="choselist"><a href="list.php?id=19">二年级4班</a></div>
              <?php }else { ?>
              <div class="choselist"><a href="list.php?id=4">二年级</a></div>
              <?php }}?>
            </div></td>
        <?php }?>
        <?php if( strpos($_SESSION['classroom'],"三年级") !== false || strpos($_SESSION['classroom'],"四年级") !== false || strpos($_SESSION['classroom'],"五年级") !== false ||$_SESSION['classroom']=='all'){ ?>
          <td align="center"><div class="chosebox">
              <div class="chosetitle">3-5年级</div>
              <?php if( strpos($_SESSION['classroom'],"三年级") !== false ||$_SESSION['classroom']=='all'){ 
			  if($_SESSION['classroom']=='三年级1班'){
			  ?>
              <div class="choselist"><a href="list.php?id=20">三年级1班</a></div>
              <?php }else if($_SESSION['classroom']=='三年级2班'){?>
               <div class="choselist"><a href="list.php?id=21">三年级2班</a></div>
              <?php }else if($_SESSION['classroom']=='三年级3班'){ ?>
               <div class="choselist"><a href="list.php?id=22">三年级3班</a></div>
              <?php }else if($_SESSION['classroom']=='三年级4班'){ ?>
               <div class="choselist"><a href="list.php?id=23">三年级4班</a></div>
              <?php }else if($_SESSION['classroom']=='三年级5班'){ ?>
               <div class="choselist"><a href="list.php?id=42">三年级5班</a></div>
              <?php }else { ?>
              <div class="choselist"><a href="list.php?id=5">三年级</a></div>
              <?php }}?>
              <?php if( strpos($_SESSION['classroom'],"四年级") !== false ||$_SESSION['classroom']=='all'){ 
			  if($_SESSION['classroom']=='四年级1班'){
			  ?>
              <div class="choselist"><a href="list.php?id=24">四年级1班</a></div>
              <?php }else if($_SESSION['classroom']=='四年级2班'){?>
               <div class="choselist"><a href="list.php?id=25">四年级2班</a></div>
              <?php }else if($_SESSION['classroom']=='四年级3班'){ ?>
               <div class="choselist"><a href="list.php?id=26">四年级3班</a></div>
              <?php }else if($_SESSION['classroom']=='四年级4班'){ ?>
               <div class="choselist"><a href="list.php?id=27">四年级4班</a></div>
              <?php }else if($_SESSION['classroom']=='四年级5班'){ ?>
               <div class="choselist"><a href="list.php?id=43">四年级5班</a></div>
              <?php }else { ?>
              <div class="choselist"><a href="list.php?id=6">四年级</a></div>
              <?php }}?>
              <?php if( strpos($_SESSION['classroom'],"五年级") !== false ||$_SESSION['classroom']=='all'){ 
			  if($_SESSION['classroom']=='五年级1班'){
			  ?>
              <div class="choselist"><a href="list.php?id=28">五年级1班</a></div>
              <?php }else if($_SESSION['classroom']=='五年级2班'){?>
               <div class="choselist"><a href="list.php?id=29">五年级2班</a></div>
              <?php }else if($_SESSION['classroom']=='五年级3班'){ ?>
               <div class="choselist"><a href="list.php?id=30">五年级3班</a></div>
              <?php }else if($_SESSION['classroom']=='五年级4班'){ ?>
               <div class="choselist"><a href="list.php?id=31">五年级4班</a></div>
              <?php }else if($_SESSION['classroom']=='五年级5班'){ ?>
               <div class="choselist"><a href="list.php?id=44">五年级5班</a></div>
              <?php }else { ?>
              <div class="choselist"><a href="list.php?id=7">五年级</a></div>
              <?php }}?>
            </div></td>
           <?php }?>
           <?php if( strpos($_SESSION['classroom'],"六年级") !== false || strpos($_SESSION['classroom'],"七年级") !== false || strpos($_SESSION['classroom'],"八年级") !== false || strpos($_SESSION['classroom'],"九年级") !== false ||$_SESSION['classroom']=='all'){ ?>
          <td align="center"><div class="chosebox">
              <div class="chosetitle">6-9年级</div>
              <?php if( strpos($_SESSION['classroom'],"六年级") !== false ||$_SESSION['classroom']=='all'){ 
			  if($_SESSION['classroom']=='六年级1班'){
			  ?>
              <div class="choselist"><a href="list.php?id=32">六年级1班</a></div>
              <?php }else if($_SESSION['classroom']=='六年级2班'){?>
               <div class="choselist"><a href="list.php?id=33">六年级2班</a></div>
              <?php }else if($_SESSION['classroom']=='六年级3班'){ ?>
               <div class="choselist"><a href="list.php?id=34">六年级3班</a></div>
              <?php }else if($_SESSION['classroom']=='六年级4班'){ ?>
               <div class="choselist"><a href="list.php?id=35">六年级4班</a></div>
              <?php }else { ?>
              <div class="choselist"><a href="list.php?id=8">六年级</a></div>
              <?php }}?>
              <?php if( strpos($_SESSION['classroom'],"七年级") !== false ||$_SESSION['classroom']=='all'){ 
			  if($_SESSION['classroom']=='七年级1班'){
			  ?>
              <div class="choselist"><a href="list.php?id=36">七年级1班</a></div>
              <?php }else if($_SESSION['classroom']=='七年级2班'){?>
               <div class="choselist"><a href="list.php?id=37">七年级2班</a></div>
              <?php }else if($_SESSION['classroom']=='七年级3班'){ ?>
               <div class="choselist"><a href="list.php?id=38">七年级3班</a></div>
              <?php }else if($_SESSION['classroom']=='七年级4班'){ ?>
               <div class="choselist"><a href="list.php?id=39">七年级4班</a></div>
              <?php }else { ?>
              <div class="choselist"><a href="list.php?id=9">七年级</a></div>
              <?php }}?>
              <?php if( strpos($_SESSION['classroom'],"八年级") !== false ||$_SESSION['classroom']=='all'){ 
			  if($_SESSION['classroom']=='八年级1班'){
			  ?>
              <div class="choselist"><a href="list.php?id=40">八年级1班</a></div>
              <?php }else if($_SESSION['classroom']=='八年级2班'){
			  ?>
              <div class="choselist"><a href="list.php?id=45">八年级2班</a></div>
              <?php }else { ?>
              <div class="choselist"><a href="list.php?id=10">八年级</a></div>
              <?php }}?>
              <?php if( strpos($_SESSION['classroom'],"九年级") !== false ||$_SESSION['classroom']=='all'){ 
			  if($_SESSION['classroom']=='九年级1班'){
			  ?>
              <div class="choselist"><a href="list.php?id=41">九年级1班</a></div>
			  <?php }else if($_SESSION['classroom']=='九年级2班'){
			  ?>
              <div class="choselist"><a href="list.php?id=46">九年级2班</a></div>
              <?php }else { ?>
              <div class="choselist"><a href="list.php?id=11">九年级</a></div>
              <?php }}?>
            </div></td>
          <?php }?>
        </tr>
      </table>
    </div>
  </div>
</div>
<script src="static/js/jquery.min.js" type="text/javascript" charset="utf-8"></script> 
<script src="static/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script> 
<script src="static/js/main.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>