<?php
include ("../global.php");
$db->Get_user_shell_check($_SESSION[id],$_SESSION[shell]);
session_destroy();
setcookie("cookie[one]", "");
setcookie("cookie[two]", "");
echo "<script language=\"javascript\">alert(\"您已经安全退出\");top.location.href=\"../index.php\";</script>";

?>
