<?php
include ("../global.php");
$db->Get_user_shell_check($_SESSION[id],$_SESSION[shell]);
session_destroy();
echo "<script language=\"javascript\">alert(\"您已经直接退出\");top.location.href=\"../index.php\";</script>";
?>
