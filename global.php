<?php
 include_once('configs/configs.php');
 include_once('class/mysql_class.php');
 include_once('class/action_class.php');
 $db = new action($mysqlurl, $mysqlname, $mysqlpasswd, $mysqlsjk, $mysqlbm);
 header("Content-type: text/html; charset=utf-8");//强制转换成utf-8
 session_start();
 ?>