<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>德育管理系统</title>
<link rel="stylesheet" href="css/weui.min.css" />
<link rel="stylesheet" href="css/css.css" />
</head>
<body>
<div class="containar">
  <div><img src="img/pic01.png" width="100%"></div>
  <div class="logbox">
  <form action="login.action.php" id="test_form" method="post">
    <div class="weui-panel weui-panel_access ">
      <div class="logtit">登录</div>
      <div class="weui-cells weui-cells_form" style="width: 94%; margin: 0 auto;" >
        <div class="weui-cell">
          <div class="weui-cell__hd"> <img class="weui-icon-img" src="img/icon01.png" alt=""> 
            <!--<label class="weui-label">联系人：</label>--> 
          </div>
          <div class="weui-cell__bd">
            <input class="weui-input" id="username" name="username" type="text" placeholder="姓名">
          </div>
        </div>
        <div class="weui-cell">
          <div class="weui-cell__hd"> <img class="weui-icon-img" src="img/icon02.png" alt=""> 
            <!--<label class="weui-label">手机号码：</label>--> 
          </div>
          <div class="weui-cell__bd">
            <input class="weui-input" type="number" id="tel" name="tel" pattern="[0-9]*" placeholder="学籍号">
          </div>
        </div>
      </div>
    </div>
    <div class="logbtn"><img id="postInfo" style="cursor:pointer;" src="img/btn01.png"></div>
    </form>
  </div>
</div>
<script type="text/javascript" src="js/jquery-2.1.4.js" ></script>
<script>
 $("#postInfo").on("click",function(){
      subtj();
  })
  //提交表单 
  function subtj(){
	  
    username=$("#username").val();
    tel=$('#tel').val();
    if(!username){
      alert("请填写姓名");
      return false;
    }
    if(!tel){
      alert("请填写学籍号");
      return false;
    }

	document.getElementById('test_form').submit();
  	
        
  }
</script>
</body>
</html>