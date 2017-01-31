<!--标题-->
<!--标题2-->
<!--logo-->
<?php
include ("../global.php");
if((!empty($_COOKIE['cookie']['one']))&&(!empty($_COOKIE['cookie']['two']))){
	$db->user_cookie_login($_COOKIE['cookie']['one'], $_COOKIE['cookie']['two']);
}
if (!empty ($_POST[adminname]) && !empty ($_POST[adminpasswd])) {

	if($_POST[dlsave]=="yessave"){
      	setcookie("cookie[one]","$_POST[adminname]",time()+3110400);
        setcookie("cookie[two]","$_POST[adminpasswd]",time()+3110400);
      }
     if($_POST[dlsave]=="nosave"){
      	setcookie("cookie[one]","");
        setcookie("cookie[two]","");
      }
      $db->user_login($_POST[adminname], $_POST[adminpasswd]);
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title><!--标题-->
<link href="css/index_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="js/index_js.js" type="text/javascript"></script>
</head>
<body>
	<div id="main">
    	<div id="top">
    	</div>
    	<div id="center">
    		<div id="center_left">
    		    <div id="center_left_img">
    		    	<img src="images/logo.png" width="279px" height="68px"/><!--logo-->
    		    </div>
    			<div id="center_left_content">
    				<p>1- 简洁的操作，极易上手...</p>
    				<p>2- 优美的动作，告别脚本讨厌的样式...</p>
    				<p>3- 强大的帮助，强大的帮助任何错误都可以很好的解决...</p>
    			</div>
    			<div id="center_left_lxfs">
    		    	<img src="images/icon-demo.gif" width="16" height="16"/>&nbsp;&nbsp;<a href="">使用说明</a>
    		  		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    		    </div>
    		</div>
    		<div id="center_right">
    		    <div id="center_right_img">
					欢迎登录辽宁工程技术大学公寓管理系统<!--标题2-->
    		    </div>
    			<div id="center_right_content">
    			    <form name="adminlogin" action="" method="post" onsubmit="return check()">
    					<p>管&nbsp;&nbsp;理&nbsp;&nbsp;员：<input type="text" id="input_k" name="adminname"/></p>
    					<p>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：<input type="password" id="input_k" name="adminpasswd"/></p>
    					<p>验&nbsp;&nbsp;证&nbsp;&nbsp;码：<input type="text" name="yzm"/>
    						<img src="yanzhengma.php" id="LoI_ValidateCodeImage" style="CURSOR: hand" onClick="refresh();" height="20" hspace="0" width="50" align="top" />
    				    </p>
    					<p>登录方式：<select name="dlsave">
                            	<option value="">请选择登录方式</option>
                                <option value="nosave">下次不自动登录</option>
                                <option value="yessave">下次自动登录</option>
                            </select>
                        </p>
    					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    					<input type="submit" value="登录"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="重置"></p>
    				</form>
    			</div>

    		</div>
    	</div>
    	<div id="bottom">
    	</div>
	</div>
</body>
</html>