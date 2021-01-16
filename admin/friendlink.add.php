<?php
include ("global.php");

$id		 = trim($_GET ['id'])?trim($_GET ['id']):0;
$act			 = trim($_GET ['act'])?trim($_GET ['act']):'add';
if (!empty($id)) {
	$id = mysql_real_escape_string(verify_id($id));
}
$actName = $act == 'add'?'添加':'修改';

$friendlink = $db->find ( "select * from phpaadb_friendlink where id=" . $id );
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>无标题文档</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
<script src="../include/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
function doAction(a,id){
	ids = 0;
	if(a=='delpic'){
		$.ajax({
			url:'article.action.php',
			type: 'POST',
			data:'act=delpic&id='+id,
			success: function(data){
				document.getElementById('picdiv').innerHTML="";
			}
		});
	}
}
</script>
</head>

<body onLoad="document.getElementById('name').focus()">
<table width="100%" border="0" align="center" cellpadding="0"
	cellspacing="0">
  <tr>
    <td width="*" height="1299" valign="top" style="padding: 10px;">
    <form action="friendlink.action.php" method="post" enctype="multipart/form-data" name="form1">
        <input type="hidden" name="act" value="<?php echo $act;?>">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" >
          <tr>
            <td height="829" valign="top" style="padding:10px;"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="form_title">
                <tr>
                  <td height="31"><?php echo $actName;?>链接</td>
                </tr>
              </table>
              <table width="100%" border="0" cellpadding="0" cellspacing="0" >
                <tr>
                  <td height="40" align="right" class="form_list">类别 ：</td>
                  <td class="form_list">
                  <select name="category" style="font-size:12px">
                      <option value="委办局" <?php if($friendlink ['category']=="委办局"){?>selected<?php }?>> 委办局</option>
                      <option value="街道" <?php if($friendlink ['category']=="街道"){?>selected<?php }?>> 街道</option>
                  </select></td>
                </tr>
                <tr>
                  <td height="40" align="right" class="form_list">名称 ：</td>
                  <td class="form_list"><input name="name" type="text" class="form" style="width: 300px" value="<?php echo $friendlink ['name'];?>"></td>
                </tr>
                <tr>
                  <td height="40" align="right" class="form_list">地址：</td>
                  <td class="form_list"><input name="url" type="text" class="form" style="width: 300px" value="<?php echo $friendlink ['url'];?>"></td>
                </tr>
                <tr>
                  <td height="40" align="right" class="form_list">LOGO：</td>
                  <td class="form_list"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="200"><input type="file" name="pic" id="pic"></td>
                        <td><div id="picdiv">
                            <?php 
                if(!empty($friendlink ['pic'])){
                ?>
                            <img src="../<?php echo $friendlink ['pic'];?>" width="100" height="40" onMouseOver="document.getElementById('bigPic').style.display=''" onMouseOut="document.getElementById('bigPic').style.display='none'">
                            <div id="bigPic" style="display:none; position:absolute;"><img src="../<?php echo $friendlink ['pic'];?>"></div>
                            <font style="cursor:pointer; font-size:12px" onclick="doAction('delpic',<?php echo $id;?>)">删除图片</font>
                            <?php
                }
                ?>
                          </div></td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td height="40" align="right" class="form_list">说明：</td>
                  <td class="form_list"><textarea name="description" class="form" style="width:300px; height: 50px; overflow: auto"><?php echo trim ( $friendlink ['description'] );?></textarea>
                </tr>
                <tr>
                  <td height="40" align="right" class="form_list">排序：</td>
                  <td height="40" class="form_list"><input name="seq" type="text" class="form" style="width: 50px" value="<?php echo $friendlink ['seq']?$friendlink ['seq']:0;?>"></td>
                </tr>
              </table>
              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="form_title">
                <tr>
                  <td height="31" align="center"><input name="id" type="hidden" value="<?php echo $id;?>">
                    <input type="submit" name="button" id="button" value="提交">
                    <input type="button" value="返回" onClick="window.history.go(-1)">
                    &nbsp;</td>
                </tr>
              </table></td>
          </tr>
        </table>
        <p>&nbsp;</p>
      </form></td>
  </tr>
</table>
</body>
</html>
