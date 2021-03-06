<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"E:\WebRoot\PersonalCommunity\public/../application/chat\view\index\register.html";i:1494237657;}*/ ?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>注册用户</title>
		<link rel="stylesheet" href="/static/common/layui/css/layui.css">
		<link href="/static/chat/css/register.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<script>
		  var registerVerifyUserName = "<?php echo url('Register/registerVerifyUserName'); ?>";
		</script> 
		<script src="/static/common/jquery-3.1.1.js"></script>
		<script src="/static/common/common.js"></script>
  		<script src="/static/common/layer/layer.js"></script>
		<!--webfonts-->
		<!--//webfonts-->
		
</head>
<body>
	<div class="main">
		<div class="header" >
			<h1>创建一个账号</h1>
		</div>
			<form action="/registerController.html" method="post" enctype="multipart/form-data">
				<ul class="left-form">
					<h2>New Account:</h2>
					<li>
						<input type="text" id="username" name="username"  placeholder="用户名 (登录的账号)" required/>
						<a  id="username_ico"> </a>
						<div class="clear"></div>
					</li> 
					<li>
						<input type="text" id="nickname" name="nickname"  placeholder="昵称" required/>
						<a id="nickname_ico"> </a>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="password" id="password" name="password" placeholder="密码" required/>
						<a  id="password_ico"> </a>
						<div class="clear"> </div>
					</li>
					<li>
						<input type="password" id="repeat"  placeholder="确认密码" required/>
						<a  id="repeat_ico"> </a>
						<div class="clear"> </div>
					</li> 
					<input type="button" id="select"  value="选择头像">
					<div class="clear"> </div>
					<input type="file" name="pic" id="file" style="display: none;">
					<div id="head"></div> 
					<div class="clear"></div>
					<input type="submit" id="submit" name="submit"  value="立即注册">
					<div class="clear"> </div>
				</ul>
				
				<div class="clear"> </div>
					
			</form>
			
		</div>
			<!---start-copyright-->
   					<div class="copy-right">
						<p>Copyright © 2014-2017 <a href='http://www.joker1996.com'>http://www.joker1996.com</a>. All rights reserved.</p>
					</div>
			<!---//end-copyright-->

<script src="/static/chat/js/verifyUserInfo.js"></script>
</body>
</html>