<?php
include ("../global.php");
$db->Get_user_shell_check($_SESSION[id],$_SESSION[shell]);
 if(isset($_POST[sub]))
 {
 	$upload_query=mysql_query("SELECT * FROM `dxtg` WHERE `dxtg_id`=$_GET[upload]");
	$upload_row=mysql_fetch_array($upload_query);
	$upload_img=$upload_row[dxtg_url];
  	$img_ok = $db->upfile('../dxtg/', $upload_img, $_FILES["ldjh_img"], 'image/pjpeg');
    $sql = "UPDATE `dxtg` SET `dxtg_title` = '$_POST[ldjh_title]', `dxtg_tjdz` = '$_POST[ldjh_tjdz]', `dxtg_url` = '$upload_img',`dxtg_time` = '$_POST[ldjh_time]' WHERE `dxtg_id` = $_GET[upload];";//修改sql
    $query=mysql_query($sql);
    if($query&&$img_ok)
    {
         echo "<script> alert(\"修改成功\"); location.href(\"dxtg.php\");</script>";
    }
    else
    {
       echo "<script> alert(\"修改失败\"); location.href(\"dxtg.php\");</script>";
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
		<!--名称-->推荐图片
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
 				<?
                   $sql = "SELECT * FROM `dxtg` WHERE `dxtg_id`=$_GET[upload];";//sql
                   $query=mysql_query($sql);
                   $row=mysql_fetch_array($query);
                ?>
					<form name="add_shsj" method="post" action=""  enctype="multipart/form-data"  onsubmit="return checkdxtg()">
                    <tr>
            	        <td height="30"><span id="add_upload">推荐题目：&nbsp;&nbsp;&nbsp;<input type="text" name="ldjh_title" id="add_tm" value="<?php echo $row[dxtg_title]?>"/> </span></td>
                    </tr>
                    <tr>
            	        <td height="30"><span id="add_upload">推荐图片：&nbsp;&nbsp;&nbsp;<input type="file" name="ldjh_img" id="add_tm"/> </span></td>
                    </tr>
                     <tr>
            	        <td height="30"><span id="add_upload">推荐地址：&nbsp;&nbsp;&nbsp;<input type="text" name="ldjh_tjdz"  id="add_tm" value="<?php echo $row[dxtg_tjdz]?>"/> </span></td>
                    </tr>
                     <tr>
            	        <td height="30"><span id="add_upload">推荐时间：&nbsp;&nbsp;&nbsp;<input type="text" name="ldjh_time" onclick="setday(this)" id="add_tm" value="<?php echo $row[dxtg_time]?>"/> </span></td>
                    </tr>
                    <tr>
                        <td height="30"><span id="add_upload">操&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;作：&nbsp;&nbsp;&nbsp;<input type="submit" name="sub" value="提交">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="ret" value="重置"></span></td>
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