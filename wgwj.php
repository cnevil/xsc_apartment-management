<?php
include ("global.php");
if(isset($_GET[page])){
	$page=$_GET[page];
	}
else{
	$page=1;
	}
	$xsgs=18;//显示的个数
	$start_page=($page-1)*$xsgs;
	$query_page=mysql_query("SELECT * FROM `zczp`");//修改取出的数据库d
	$num_rows = mysql_num_rows($query_page);
	$ys=$num_rows/$xsgs;
	$title_rows=ceil($ys);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>辽宁工程技术大学-葫芦岛校区公寓管理网</title>
<link href="css/index_style.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="js/fy.js"></script>
<body>
<div id="main">
<?php


include ("head.php");
?>
<div id="main_list">
	<div id="main_list_left">
			<div id="main_list_left_top">
				您的位置：<a href="index.php">首页</a>=><a href="wgwj.php">违规违纪</a>
			</div>
			<div id="main_list_left_middle">
				<div id="main_list_left_title">
					<ul>
							<?
							$query=mysql_query("SELECT * FROM `xszj` ORDER BY `xszj_time` desc  LIMIT $start_page, $xsgs");
							while($row=mysql_fetch_array($query)){
							?>
								<li><a href="wgwj_content.php?id=<?php echo $row[xszj_id]?>"><?php echo $row[xszj_title]?></a></li>
							<?
							}
							?>


					</ul>
				</div>
				<div id="main_list_left_time">
					<ul>
														<?
							$query=mysql_query("SELECT * FROM `xszj` ORDER BY `xszj_time` desc  LIMIT $start_page, $xsgs");
							while($row=mysql_fetch_array($query)){
							?>
								<li><?php echo $row[xszj_time]?></li>
							<?
							}
							?>

					</ul>
				</div>
			</div>
			<div id="main_list_left_bottom">
				<script language="JavaScript">
                	var pg = new showPages('pg');
                	pg.pageCount =<?php echo $title_rows;?>;  // 定义总页数(必要)
                	//pg.argName = 'p';  // 定义参数名(可选,默认为page)
                	pg.printHtml();
                </script>
			</div>
	</div>
	<div id="main_list_right">
<img src="images/wgwj_bj.jpg" width="200" height="600" border="0"  />
	</div>
</div>
<div id="four">
		<?php

include ("foot.php");
?>
	</div>
</div>
</body>
</html>