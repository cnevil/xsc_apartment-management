<?php
include ("../global.php");
$db->Get_user_shell_check($_SESSION[id], $_SESSION[shell]);
if (isset ($_POST[sub])) {
	$upload_sql = "UPDATE `xw` SET `xw_url` = '$_POST[xw_url]', `xw_name` = '$_POST[xw_name]' WHERE `xw_id` = $_GET[upload];";
	$upload_query = mysql_query($upload_sql);

	$img_name="xw_".$_GET[upload].".jpg";
    $img_ok = $db->upfile('../images/', $img_name, $_FILES["xw_img"], 'image/pjpeg'); //文件夹地址 文件名 文件本地地址 文件类型
	if ($upload_query&&$img_ok) {
		echo "<script> alert(\"修改新闻图片成功\"); location.href(\"xwtp.php\");</script>";
	} else {
		echo "<script> alert(\"修改新闻图片失败,请选择jpg格式图片\"); location.href(\"xwtp.php\");</script>";
	}


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
		<!--名称-->新闻图片
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
			<?
				$sql_sel = "SELECT * FROM `xw` WHERE `xw_id`=$_GET[upload];";
				$query_sel = mysql_query($sql_sel);
				$row = mysql_fetch_array($query_sel);
            ?>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<form name="psset" method="post" action="" enctype="multipart/form-data" onsubmit="return checkxw()">
                	<tr>
                    	<td height="30"><span id="user">新闻<?php echo $_GET[upload]?>名称：<input type="text"  name="xw_name" value="<?php echo $row[xw_name]?>"/> </span></td>
                    </tr>
					<tr>
                    	<td height="30"><span id="user">新闻<?php echo $_GET[upload]?>地址：<input type="text"  name="xw_url" value="<?php echo $row[xw_url]?>"/></span></td>
                    </tr>
                    <tr>
                        <td height="30"><span id="user">新闻<?php echo $_GET[upload]?>图片：<input type="file"  name="xw_img" /></span></td>
                    </tr>
                    <tr>
                        <td height="30"><span id="user_cz">操&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;作：<input type="submit" name="sub" value="提交">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="ret" value="重置"></span></td>
                    </tr>
                </form>
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