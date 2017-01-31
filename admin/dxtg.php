<?php
include ("../global.php");
$db->Get_user_shell_check($_SESSION[id],$_SESSION[shell]);
if(isset($_GET[page])){
	$page=$_GET[page];
	}
else{
	$page=1;
	}
	$xsgs=8;//显示的个数
	$start_page=($page-1)*$xsgs;
	$query_page=mysql_query("SELECT * FROM `dxtg`");//修改取出的数据库
	$num_rows = mysql_num_rows($query_page);
	$ys=$num_rows/$xsgs;
	$title_rows=ceil($ys);
if(isset($_POST[sub])){
		$_SESSION[dxtg_serch]=$_POST[inp];//修改session的值
		header("Location:dxtg_serch.php");//修改链接的搜索页面
	}
if(isset($_GET[del])){
		$del_query=mysql_query("SELECT * FROM `dxtg` WHERE  `dxtg_id`=$_GET[del]");
		$del_row=mysql_fetch_array($del_query);
		$del_img=$del_row[dxtg_url];
		$del_img_url="../dxtg/".$del_img;
		$del_qr=unlink($del_img_url);
		$query = mysql_query("DELETE FROM  `dxtg` WHERE  `dxtg_id`=$_GET[del]");//修改取出的数据库
  		 if($query&&$del_qr)
   		 {
	  		 echo "<script> alert(\"删除资料成功\"); location.href(\"dxtg.php\");</script>";//修改地址

  		  }

	}
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
		重点推荐<!--修改名称-->
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
                    	<td width="56%" align="center"><span id="lb_head">
                    	<!--修改为本页面--><a href="dxtg.php?px=<?php
                    	if($_GET[px]==""){
							echo "up";
                    	}
                    	else if($_GET[px]=="up"){
							echo "down";
                    	}
                    	else if($_GET[px]=="down"){
							echo "up";
                    	}

                    	?>"><!--修改标题-->推荐题目</a></span>&nbsp;&nbsp;
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
						<!--修改为本页面--><a href="dxtg.php?px=<?php
                    	if($_GET[px]==""){
							echo "up";
                    	}
                    	else if($_GET[px]=="up"){
							echo "down";
                    	}
                    	else if($_GET[px]=="down"){
							echo "up";
                    	}

                    	?>"><!--修改标题-->推荐图片</a></span>&nbsp;&nbsp;
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
						$sql="SELECT * FROM `dxtg` ORDER BY `dxtg_id` $sql_order LIMIT $start_page,$xsgs";//修改sql语句的值
						$query_ip=mysql_query($sql);
                    	?></td>
						<td width="16%" align="center"><span id="lb_head_cz">操作&nbsp;&nbsp;<a href="dxtg_add.php"><!--修改添加地址-->添加</a></span></td>
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
                    	<td width="56%" align="center"><?php echo $query_ip_row[dxtg_title]?></td><!--修改显示名称-->
						<td width="28%" align="center"><?php echo"<img src=\"../dxtg/".$query_ip_row[dxtg_url]."\""." width=122px height=74px>" ;?></td><!--修改显示时间-->
						<td width="16%" align="center"><input id="cz" type="button" value="删除" onclick="var del=chackinfo();if(del){location.href='?del=<?php echo $query_ip_row[dxtg_id]?>'}else{ location.href='dxtg.php'}"/><!--修改俩处del的值和取消的页面-->
                     	&nbsp;&nbsp;<img src="images/ml_fg.gif" id="fgf">&nbsp;&nbsp;<input id="cz" type="button" value="修改" onclick="location.href='dxtg_upload.php?upload=<?php echo $query_ip_row[dxtg_id]?>'"/>&nbsp;&nbsp;<img src="images/ml_fg.gif" id="fgf">&nbsp;&nbsp;<input id="cz" type="button" value="添加" onclick="location.href='dxtg_add.php'"/><!--修改俩处upload的值和添加的页面--> </td>
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