<?php
require_once ("global.php");

$page 			= $_GET ['page'] ? $_GET ['page'] : 1;
$page_size 		= 10;
$sql_string = "select * from phpaadb_message order by id desc";
$total_nums = $db->getRowsNum ( $sql_string );
$mpurl 	= "message.php";
$friendlink_list = $db->selectLimit ( $sql_string, $page_size, ($page - 1) * $page_size );

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>文章管理</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
<script src="../include/jquery.js" type="text/javascript" ></script>
<script type="text/javascript">
function doAction(a,id,v){
	if(a=='validate'){
		$.ajax({
			url:'message.action.php',
			type: 'POST',
			data:'act=validate&id='+id+'&validate='+v,
			success: function(data){
				if(data) alert(data);
				window.location.href = window.location.href;
			}
		});
	}
	if(a=='delete'){
		if(confirm('请确认是否删除！')){
			$.ajax({
				url:'message.action.php',
				type: 'POST',
				data:'act=delete&id='+id,
				success: function(data){
					if(data) alert(data);
					window.location.href = window.location.href;
				}
			});
		}
	}
	
	if(a=='deleteAll'){
		if(confirm('请确认是否删除！')){
			$.ajax({
				url:'message.action.php',
				type: 'POST',
				data:'act=delete&id='+getCheckedIds('checkbox'),
				success: function(data){
					if(data) alert(data);
					window.location.href = window.location.href;
				}
			});
		}
	}
}

//全选/取消
function checkAll(o,checkBoxName){
	var oc = document.getElementsByName(checkBoxName);
	for(var i=0; i<oc.length; i++) {
		if(o.checked){
			oc[i].checked=true;	
		}else{
			oc[i].checked=false;	
		}
	}
	checkDeleteStatus(checkBoxName)
}

//检查有选择的项，如果有删除按钮可操作
function checkDeleteStatus(checkBoxName){
	var oc = document.getElementsByName(checkBoxName);
	for(var i=0; i<oc.length; i++) {
		if(oc[i].checked){
			document.getElementById('DeleteCheckboxButton').disabled=false;
			return;
		}
	}
	document.getElementById('DeleteCheckboxButton').disabled=true;
}

//获取所有被选中项的ID组成字符串
function getCheckedIds(checkBoxName){
	var oc = document.getElementsByName(checkBoxName);
	var CheckedIds = "";
	for(var i=0; i<oc.length; i++) {
		if(oc[i].checked){
			if(CheckedIds==''){
				CheckedIds = oc[i].value;	
			}else{
				CheckedIds +=","+oc[i].value;	
			}
			
		}
	}
	return CheckedIds;
}
</script>
<style type="text/css">
<!--
.STYLE1 {
	color: #FF0000
}
-->
</style>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" >
  <tr>
    <td valign="top" style="padding:10px;"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="table_head">
        <tr>
          <td height="30">爆料管理 
            &nbsp;&nbsp;&nbsp;</td>
        </tr>
      </table>
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="table_form">
        <tr>
          <th width="40"><input type="checkbox" name="checkbox11" value="checkbox" onClick="checkAll(this,'checkbox')"></th>
          <th width="200" height="26">标题</th>
          <th>图片</th>
          <th width="500">描述</th>
          <th width="40">时间</th>
          <th width="80" height="26">操作</th>
        </tr>
        <?php
	foreach ($friendlink_list as $list){
  ?>
        <tr onMouseOver="this.className='relow'" onMouseOut="this.className='row'" class="row">
          <td align="center" ><input type="checkbox" name="checkbox" value="<?php echo $list['id'];?>" onClick="checkDeleteStatus('checkbox')"></td>
          <td align="center" ><?php echo $list['title'];?>&nbsp;</td>
          <td align="center"><?php if(!empty($list['pic'])){
			  $str = explode(",",$list['pic']);
			 // print_r($str);
			  foreach ($str as $value){
			  ?>
            <a href="../<?php echo $value;?>" target="_blank"><img src="../<?php echo $value;?>" width="120" height="80"></a>
            <?php }}?>
            &nbsp;</td>
          <td width="600"><?php echo $list['content'];?>&nbsp;</td>
          <td align="center"><?php echo date('Y-m-d',$list['addtime']);?>&nbsp;</td>
          <td align="center"> <?php
if($list['validate']==0){
?>
            <label style="cursor:pointer; color:#FF0000" onClick="doAction('validate',<?php echo $list['id'];?>,1)">未验证</label>
            <?php
}else{
?>
            <label style="cursor:pointer;" onClick="doAction('validate',<?php echo $list['id'];?>,0)">已验证</label>
            <?php
}
?>
            <label style="cursor:pointer" onClick="doAction('delete',<?php echo $list['id'];?>)">删除</label></td>
        </tr>
        <?php
	}
  ?>
      </table>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_footer">
        <tr>
          <td height="3" background="admin/images/20070907_03.gif">
          <input type="checkbox" name="checkbox11" value="checkbox" onClick="checkAll(this,'checkbox')">全选
          <input type="button" id="DeleteCheckboxButton" value="批量删除" disabled="disabled" onClick="doAction('deleteAll')">
          </td>
          <td height="3" background="admin/images/20070907_03.gif">
          <?php echo multi ( $total_nums, $page_size, $page, $mpurl, 0, 5 );?>
          </td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>