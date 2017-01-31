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
		<!--名称-->链接测试
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
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
                	<tr>
                        <td width="25%" height="30"><span id="user_cz">数据库连接测试：</span></td>
                        <td height="30">
                            <?php $query=mysql_query("SELECT * FROM `admin`");
                             if($query)
                                  {
                            ?>
							<?php
                                  echo "<span id=\"seccess\">成功&nbsp;&nbsp;&nbsp;<img src=\"images/pic21.gif\" width=\"17\" height=\"15\"></span>";
                                  }
                                  else
                                  {
                                  	echo "<span id=\"warn\">错误&nbsp;&nbsp;&nbsp;<img src=\"images/X.gif\" width=\"12\" height=\"13\"></span>";
                                  }
                            ?>
                       </td>
					</tr>
					<tr>
                        <td width="25%" height="30"><span id="user_cz">管理员连接测试：</span></td>
                        <td height="30">
                        	<?php $query_admin=mysql_query("SELECT * FROM `admin`");
                                  if($query_admin)
                                  {
                            ?>
                            <?php
                                    echo "<span id=\"seccess\">成功&nbsp;&nbsp;&nbsp;<img src=\"images/pic21.gif\" width=\"17\" height=\"15\"></span>";
                                  }
                                  else
                                  {
                                  	echo "<span class=\"warn\">错误&nbsp;&nbsp;&nbsp;<img src=\"images/X.gif\" width=\"12\" height=\"13\"></span>";
                                  }
                            ?>
                        </td>
					</tr>
				</table>
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