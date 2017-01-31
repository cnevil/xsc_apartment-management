<?
include ("../global.php");
$db->Get_user_shell_check($_SESSION[id],$_SESSION[shell]);
if(isset($_POST[sub])){
$db->check_user_shell($_POST[username],$_POST[passwd]);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/list_js.js" type="text/javascript"></script>
<script src="js/userjs.js" type="text/javascript"></script>
<script src="js/fy.js" type="text/javascript"></script>
<link href="css/list_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">

	<div id="top_center">
		<div id="top_left">
			<img src="images/left-top-right.gif"/>
    	</div>
		<div id="top_title">
		<!--名称-->服务信息
		</div>
		<div id="top_right">
			<img src="images/nav-right-bg.gif"/>
		</div>
    </div>
    <div id="middle_center">
		<div id="middle_left">
        </div>
		<div id="main_content">
			<!--主要的内容区-->
			<div id="content_mima">
				<?php
				phpinfo()

				?>
			</div>

        </div>
		<div id="middle_right">
		</div>
	</div>
	<div id="bottom_center">
		<div id="bottom_left">
			<img src="images/buttom_left2.gif"/>
        </div>
		<div id="bottom_right">
			<img src="images/buttom_right2.gif"/>
		</div>
	</div>
</div>
</body>
</html>