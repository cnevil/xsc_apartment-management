<?php
include ("global.php");
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
				您的位置：<a href="index.php">首页</a>=><a href="xjy.php">新家园报</a>
			</div>
			<div id="main_list_left_middle">
				<?php
				$list_sql_content="SELECT * FROM `xjy` WHERE `xjy_id`='$_GET[id]'" ;
				$list_sql_query=mysql_query($list_sql_content);
				$list_sql_rows=mysql_fetch_array($list_sql_query);
				echo "<h2>".$list_sql_rows[xjy_title]."</h2>";
				echo $list_sql_rows[xjy_content];
				?>
			</div>
			<div id="main_list_left_bottom">
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