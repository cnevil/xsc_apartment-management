<?php
include ("../global.php");
$db->Get_user_shell_check($_SESSION[id],$_SESSION[shell]);

if(isset($_POST[sub]))
{    $sql = "INSERT INTO `xjy` (`xjy_id`, `xjy_title`, `xjy_content`, `xjy_time`) VALUES (NULL, '$_POST[ldjh_title]','$_POST[ldjh_content]', '$_POST[ldjh_time]');";//修改sql
	$query=mysql_query($sql);
	if($query)
	{
		echo "<script> alert(\"添加成功\"); location.href(\"xjy.php\");</script>";
	}
	else
	{
		echo "<script> alert(\"添加失败\"); location.href(\"xjy.php\");</script>";
	}

}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/add_upload_1.js" type="text/javascript"></script>
<script src="js/add_upload_2.js" type="text/javascript"></script>
<script language="javascript" src="js/setday.js" type="text/javascript"></script>
<link href="css/add_upload_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">

	<div id="top_center">
		<div id="top_left">
			<img src="images/left-top-right.gif"/>
    	</div>
		<div id="top_title">
		<!--名称-->新家园报
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
			<div id="content">
 				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<form name="add_shsj" method="post" action=""  onsubmit="return checkshsj()">
                    <tr>
            	        <td height="30"><span id="add_upload">题目：&nbsp;&nbsp;&nbsp;<input type="text" name="ldjh_title" id="add_tm"/> </span></td>
                    </tr>
				    <tr>
                        <td><span id="add_upload">内容：</span>
                        	<textarea name="ldjh_content" id="text"></textarea>
							<IFRAME ID="eWebEditor1" src="../editor/ewebeditor.htm?id=ldjh_content&style=coolblue" frameborder="0" scrolling="no" width="550" height="350">
							</IFRAME>
						</td>
                    </tr>
                    <tr>
                        <td height="30"><span id="add_upload">时间：&nbsp;&nbsp;&nbsp;<input type="text" onclick="setday(this)" name="ldjh_time"/></span></td>
                    </tr>
                    <tr>
                        <td height="30"><span id="add_upload">操作：&nbsp;&nbsp;&nbsp;<input type="submit" name="sub" value="提交">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="ret" value="重置"></span></td>
                     </tr>
                     </form>
				</table>
			</div>
			<!--内容-->
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