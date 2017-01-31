<?php
include ("../global.php");
$db->Get_user_shell_check($_SESSION[id],$_SESSION[shell]);
$serch_tj=$_SESSION[gyxx_serch];//修改查询的session值
if(isset($_GET[page])){
	$page=$_GET[page];
	}
else{
	$page=1;
	}
	$xsgs=14;//显示的个数
	$start_page=($page-1)*$xsgs;
	$query_page=mysql_query("SELECT * FROM `gyxx` WHERE `gyxx_title`='$serch_tj' OR `gyxx_content`='$serch_tj' OR `gyxx_time`='$serch_tj'");//修改取出的数据库
	$num_rows = mysql_num_rows($query_page);
	$ys=$num_rows/14;
	$title_rows=ceil($ys);

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
		公寓信息<!--修改名称-->
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
					<form action="gyxx.php"><!--地址修改-->
						<input type="submit" id="sub" value="返回"/>
					</form>
				</div>
			</div>
			<!--搜索-->
			<div id="content">
				<table width="100%" height="25" border="1px" cellpadding="0" cellspacing="0" bordercolor="d6dbdf">
                	<tr bgcolor="e7ecf1">
                    	<td width="56%" align="center"><span id="lb_head">
                    	<!--修改为本页面--><a href="gyxx_serch.php?px=<?php
                    	if($_GET[px]==""){
							echo "up";
                    	}
                    	else if($_GET[px]=="up"){
							echo "down";
                    	}
                    	else if($_GET[px]=="down"){
							echo "up";
                    	}

                    	?>"><!--修改标题-->题目</a></span>&nbsp;&nbsp;
						<?php
                    	if($_GET[px]==""){
							echo "<img src=\"images/down3.gif\" width=\"18\" height=\"15\" border=\"0\" alt=\"降序排列\"/>";
                    	}
                    	else if($_GET[px]=="up"){
							echo "<img src=\"images/up2.gif\" width=\"18\" height=\"15\" border=\"0\" alt=\"升序排列\"/>";
                    	}
                    	else if($_GET[px]=="down"){
							echo "<img src=\"images/down3.gif\" width=\"18\" height=\"15\" border=\"0\" alt=\"降序排列\"/>";
                    	}

                    	?></td>
						<td width="28%" align="center"><span id="lb_head">
						<!--修改为本页面--><a href="gyxx_serch.php?px=<?php
                    	if($_GET[px]==""){
							echo "up";
                    	}
                    	else if($_GET[px]=="up"){
							echo "down";
                    	}
                    	else if($_GET[px]=="down"){
							echo "up";
                    	}

                    	?>"><!--修改标题-->时间</a></span>&nbsp;&nbsp;
						<?php
                    	if($_GET[px]==""){
							echo "<img src=\"images/down3.gif\" width=\"18\" height=\"15\" border=\"0\" alt=\"降序排列\"/>";
                    	}
                    	else if($_GET[px]=="up"){
							echo "<img src=\"images/up2.gif\" width=\"18\" height=\"15\" border=\"0\" alt=\"升序排列\"/>";
                    	}
                    	else if($_GET[px]=="down"){
							echo "<img src=\"images/down3.gif\" width=\"18\" height=\"15\" border=\"0\" alt=\"降序排列\"/>";
                    	}
						$sql="SELECT * FROM `gyxx` WHERE `gyxx_title`='$serch_tj' OR `gyxx_content`='$serch_tj' OR `gyxx_time`='$serch_tj' ORDER BY `gyxx_time` $sql_order LIMIT $start_page,$xsgs";//修改sql语句的值
						$query_ip=mysql_query($sql);
                    	?></td>
						<td width="16%" align="center"><span id="lb_head_cz">操作&nbsp;&nbsp;<a href="gyxx_add.php"><!--修改添加地址-->添加</a></span></td>
                    </tr>
                </table>
                <table width="100%" height="5" border="0px" cellpadding="0" cellspacing="0" >
                	<tr>
                    	<td></td>
                    </tr>
                </table>
                <table width="100%" height="25" border="1px" cellpadding="0" cellspacing="0" bgcolor="" bordercolor="#acadad">
                    <?php
                    while ($query_ip_row=mysql_fetch_array($query_ip)) {
                    ?>
                	<tr>
                    	<td width="56%" align="center"><?php echo $query_ip_row[gyxx_title]=$db->cutstr($query_ip_row[gyxx_title],30)?></td><!--修改显示名称-->
						<td width="28%" align="center"><?php echo $query_ip_row[gyxx_time]?></td><!--修改显示时间-->
						<td width="16%" align="center"><input id="cz" type="button" value="删除" onclick="var del=chackinfo();if(del){location.href='gyxx.php?del=<?php echo $query_ip_row[gyxx_id]?>'}else{ location.href='gyxx.php'}"/><!--修改俩处del的值和取消的页面-->
                     	&nbsp;&nbsp;<img src="images/ml_fg.gif" id="fgf">&nbsp;&nbsp;<input id="cz" type="button" value="修改" onclick="location.href='gyxx_upload.php?upload=<?php echo $query_ip_row[gyxx_id]?>'"/>&nbsp;&nbsp;<img src="images/ml_fg.gif" id="fgf">&nbsp;&nbsp;<input id="cz" type="button" value="添加" onclick="location.href='gyxx_add.php'"/><!--修改俩处upload的值和添加的页面--> </td>
                    </tr>
                   <?php
                   }
                  ?>
				</table>
			</div>
			<!--内容-->
			<div id="fy">
				<script language="JavaScript">
                var pg = new showPages('pg');
                pg.pageCount =<?php echo $title_rows;?>;;  // 定义总页数(必要)
                //pg.argName = 'p';  // 定义参数名(可选,默认为page)
                pg.printHtml();
                </script>
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