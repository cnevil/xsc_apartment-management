<?
include ("../global.php");
$db->Get_user_shell_check($_SESSION[id],$_SESSION[shell]);
if(isset($_POST[subfile])){
	$sc=$db->upfile('../images/','jctj_bj.jpg',$_FILES["filename"],'image/pjpeg');//文件夹地址 文件名 文件本地地址 文件类型]
	if($sc){
		echo "<script> alert(\"修改成功\"); location.href(\"banner.php\");</script>";
	}
	else{
		echo "<script> alert(\"格式错误\"); location.href(\"banner.php\");</script>";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/list_js.js" type="text/javascript"></script>
<script src="js/userjs.js" type="text/javascript"></script>
<link href="css/list_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">

	<div id="top_center">
		<div id="top_left">
			<img src="images/left-top-right.gif"/>
    	</div>
		<div id="top_title">
		<!--名称-->头部修改
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
					<form name="fileset" method="post"  enctype="multipart/form-data" action=""  onsubmit="return checkfile()">
                    	<tr>
                        	<td height="30"><span id="tb">上传banner：<input type="file"  name="filename"/> </span><span id="warn">注意，请上传宽180px.高257px的jpg文件</span></td>
                        </tr>
                        <tr>
                       		<td height="30"><span id="tb_cz">操&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;作：<input type="submit" name="subfile" value="提交">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="ret" value="重置"></span></td>
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