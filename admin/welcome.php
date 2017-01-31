<?php
include ("../global.php");
$db->Get_user_shell_check($_SESSION[id],$_SESSION[shell]);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/welcome_style.css" rel="stylesheet" type="text/css" />
<script src="js/welcome_js.js" type="text/javascript"></script>
</head>
<body>
<div id="main">

	<div id="top_center">
		<div id="top_left">
			<img src="images/left-top-right.gif"/>
    	</div>
		<div id="top_title">欢迎界面</div>
		<div id="top_right">
			<img src="images/nav-right-bg.gif"/>
		</div>
    </div>
    <div id="middle_center">
		<div id="middle_left">
        </div>
		<div id="main_content">
			<div id="main_content_top">
				<div id="main_content_left">
					<h3 id="h3_title"><span>欢迎登陆辽宁工程技术大学公寓管理中心管理后台</span></h3><!--标题1-->
					<p id="ts"> <img src="images/ts.gif" width="16" height="16"> 提示</p>
					<p id="ts">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;你好，欢迎登陆辽宁工程技术大学公寓管理中心网管理后台<!--标题2-->！如第一次使用</p>
					<p id="ts">本系统，强烈建议查看<a href="#"><span class="STYLE8">帮助文档</span></a>，以便能更好下的使用本系统！ 您必须对您上传的内容负责，涉及的法律责任将由您一个</p>
					<p id="ts">人负责.</p>
            		<p id="ts">&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;请注意保管好您的用户名密码，在您离开电脑做别的事情的时候，建议您退出您的管理界面，以免别人误传，或不当</p>
            		<p id="ts">操作造成数据丢失！</p>
         	   </div>
				<div id="main_content_right">
					<div id="dlxx_top">登录信息</div>
					<div id="dlxx_bottom">
						<?php
						$ip_sql="SELECT * FROM `ip_time_jl` ORDER BY `id` DESC";
						$ip_query=mysql_query($ip_sql);
						$ip_row=mysql_fetch_array($ip_query);
						$last_id=$ip_row[id]-1;
						$ip_sql_last="SELECT * FROM `ip_time_jl` WHERE `id`='$last_id'";
						$ip_query_last=mysql_query($ip_sql);
						$ip_row_last=mysql_fetch_array($ip_query);
						?>
						<p id="ts">上&nbsp;次&nbsp;登&nbsp;陆&nbsp;i&nbsp;p：<span id="ip">
						<?php
						echo $ip_row_last[ip];
						?>
						</span></p>
                        <p id="ts">上次登陆时间：<span id="date">
                        <?php
						echo $ip_row_last[time];
						?></span></p>
                        <p id="ts">本&nbsp;次&nbsp;登&nbsp;陆&nbsp;i&nbsp;p：
                        <?php
                        echo 	$bc=$db->getIp();
                        if($bc==$ip_row_last[ip]){
                        	echo "<span id=\"ip_right\">*俩次登陆一致</span>";
                        }
                        else{
                        	echo "<span id=\"ip_wrong\">*俩次登陆不一致</span>";
                        }
                        ?></p>
                        <p id="ts">本次登陆时间：<span id="date">
                        <?php
                        echo 	$db->getTime();
                        ?></span></p></div>
				</div>
			</div>
			<div id="main_content_bottom">
				<h3 id="h4_title"><span>版权说明</span></h3>
				<p  id="bq"> 本系统由电信学院开发，交由辽宁工程技术大学葫芦岛校区就业指导中心<!--标题3-->使用。任何组织和个人不得以任何理由， </p>
				<p  id="bq"> 盗用本网站内容，编码。 </p>

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