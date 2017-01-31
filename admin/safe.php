<?php
include ("../global.php");
$db->Get_user_shell_check($_SESSION[id],$_SESSION[shell]);
if(isset($_GET[page])){
	$page=$_GET[page];
	}
else{
	$page=1;
	}
	$xsgs=14;//显示的个数
	$start_page=($page-1)*$xsgs;
	$query_page=mysql_query("SELECT * FROM `ip_time_jl`");
	$num_rows = mysql_num_rows($query_page);
	$ys=$num_rows/14;
	$title_rows=ceil($ys);
	if(isset($_POST[sub])){
		$_SESSION[serch]=$_POST[inp];
		header("Location:serch_safe.php");

	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/safe_js.js" type="text/javascript"></script>
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
		<!--名称-->安全信息
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
					<form name="serch_form" method="post" action=""  onsubmit="return checkserch()">
						<input type="text" id="inp" name="inp"/>
						<select id="sel" name="sel">
							<option value="ip">按ip搜索</option>
							<option value="time">按时间搜索</option>
						</select>
						<input type="submit" id="sub" name="sub" value="搜索"/>
					</form>
				</div>
			</div>
			<!--搜索-->
			<div id="content">
				<table width="100%" height="25" border="1px" cellpadding="0" cellspacing="0" bordercolor="d6dbdf">
                	<tr bgcolor="e7ecf1">
                    	<td width="56%" align="center"><span id="lb_head">
                    	<a href="safe.php?px=<?php
                    	if($_GET[px]==""){
							echo "up";
                    	}
                    	else if($_GET[px]=="up"){
							echo "down";
                    	}
                    	else if($_GET[px]=="down"){
							echo "up";
                    	}

                    	?>">登录ip</a></span>&nbsp;&nbsp;
						<?php
                    	if($_GET[px]==""){
							echo "<img src=\"images/down3.gif\" width=\"18\" height=\"15\" border=\"0\" alt=\"降序排列\"/>";
							$sql_order="DESC";
                    	}
                    	else if($_GET[px]=="up"){
							echo "<img src=\"images/up2.gif\" width=\"18\" height=\"15\" border=\"0\" alt=\"升序排列\"/>";
							$sql_order="ASC";
                    	}
                    	else if($_GET[px]=="down"){
							echo "<img src=\"images/down3.gif\" width=\"18\" height=\"15\" border=\"0\" alt=\"降序排列\"/>";
							$sql_order="DESC";
                    	}

                    	?></td>
						<td width="28%" align="center"><span id="lb_head">
						<a href="safe.php?px=<?php
                    	if($_GET[px]==""){
							echo "up";
                    	}
                    	else if($_GET[px]=="up"){
							echo "down";
                    	}
                    	else if($_GET[px]=="down"){
							echo "up";
                    	}

                    	?>">登录时间</a></span>&nbsp;&nbsp;
						<?php
                    	if($_GET[px]==""){
							echo "<img src=\"images/down3.gif\" width=\"18\" height=\"15\" border=\"0\" alt=\"降序排列\"/>";
							$sql_order="DESC";
                    	}
                    	else if($_GET[px]=="up"){
							echo "<img src=\"images/up2.gif\" width=\"18\" height=\"15\" border=\"0\" alt=\"升序排列\"/>";
							$sql_order="ASC";

                    	}
                    	else if($_GET[px]=="down"){
							echo "<img src=\"images/down3.gif\" width=\"18\" height=\"15\" border=\"0\" alt=\"降序排列\"/>";
							$sql_order="DESC";
                    	}
                    	$sql="SELECT * FROM `ip_time_jl` ORDER BY `time` $sql_order LIMIT $start_page,$xsgs";
						$query_ip=mysql_query($sql);
                    	?></td>
						<td width="16%" align="center"><span id="lb_head_cz">操作</span></td>
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
                    	<td width="56%" align="center"><?php echo $query_ip_row[ip]?></td>
						<td width="28%" align="center"><?php echo $query_ip_row[time]?></td>
						<td width="16%" align="center" valign="middle">
							<FORM METHOD=POST ACTION="http://www.ip138.com/ips8.asp" name="ipform" target="_blank" id="ip_search">
								<input name="ip"  id="hidden_s" height="0" TYPE="hidden" value="<?php echo $query_ip_row[ip]?>"/>
								<input id="cz" type="submit" value="查询地址">
								<input type="hidden"  id="hidden_s" height="0" name="action" value="2"/>
							</FORM>
                     	</td>
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
                pg.pageCount =<?php echo $title_rows;?>;  // 定义总页数(必要)
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