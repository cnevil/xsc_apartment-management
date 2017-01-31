<?php
include ("../global.php");
$db->Get_user_shell_check($_SESSION[id],$_SESSION[shell]);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/list_js.js" type="text/javascript"></script>
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
		新闻图片<!--修改名称-->
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
			<div id="search">
				<div id="search_main">

				</div>
			</div>
			<!--搜索-->
			<div id="content">
				<table width="100%" height="25" border="1px" cellpadding="0" cellspacing="0" bordercolor="d6dbdf">
                	<tr bgcolor="e7ecf1">
                    	<td width="28%" align="center"><span id="lb_head">
                    	<!--修改标题-->新闻名称</a></span>&nbsp;&nbsp;
						</td>
						<td width="28%" align="center"><span id="lb_head">
						<!--修改为本页面--><!--修改标题-->新闻地址</a></span>&nbsp;&nbsp;
						</td>
                    	<td width="28%"  align="center"><span id="lb_head">新闻图片</span></td>
						<td width="16%" align="center"><span id="lb_head_cz">操作&nbsp;&nbsp;</span></td>
                    </tr>
                </table>
                <table width="100%" height="5" border="0px" cellpadding="0" cellspacing="0" >
                	<tr>
                    	<td></td>
                    </tr>
                </table>
                <table width="100%" height="25" border="1px" cellpadding="0" cellspacing="0" bgcolor="" bordercolor="#acadad">
                    <?php
                   		$sql_sel = "SELECT * FROM `xw`";
						$query_sel = mysql_query($sql_sel);
						while ($row = mysql_fetch_array($query_sel)) {
                    ?>
                	<tr>
                    	<td width="28%" align="center"><?php echo $row[xw_name]?></td><!--修改显示名称-->
						<td width="28%" align="center"><?php echo $row[xw_url]?></td><!--修改显示时间-->
						<td width="28%" align="center"><?php echo"<img src=\"../images/xw_".$row[xw_id].".jpg\""." width=122px height=74px>" ;?></td><!--修改显示时间-->
						<td width="16%" align="center"><!--修改俩处del的值和取消的页面-->
						&nbsp;&nbsp;<input id="cz" type="button" value="修改" onclick="location.href='xwtp_upload.php?upload=<?php echo $row[xw_id]?>'"/>&nbsp;&nbsp;<!--修改俩处upload的值和添加的页面--> </td>
                    </tr>
                   <?php
                   }
                  ?>
				</table>
			</div>
			<!--内容-->
			<div id="fy">
			</div>
			<!--分页-->
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