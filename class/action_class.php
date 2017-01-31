<?php
class action extends mysql {
	public function user_login($username, $passwd) {
		$jm=md5("shl5332");
		define(ALL_PS, $jm);
		$username = str_replace(" ", "", $username);
		$sql = "SELECT * FROM `admin` WHERE `username` ='$username' ";
		$query = mysql_query($sql);
		$row = mysql_fetch_array($query);
		$un = is_array($row);
		$ps = $un ? $row[passwd] == md5($passwd . ALL_PS) : false;
		if ($ps) {
			if ($_SESSION["autonum"] == $_POST[yzm]) {
				$_SESSION[id] = $row[id];
				$_SESSION[shell] = md5($row[id] . $row[passwd] . ALL_PS);
				$_SESSION[times] = mktime();
				$ip= $this->getIp();
				$time= $this->getTime();
				$sql_ip_time = "INSERT INTO `ip_time_jl` (`id` ,`ip` ,`time` )VALUES (NULL , '$ip', '$time'); ";
				$query_ip_time = mysql_query($sql_ip_time);
				echo "<script language=\"javascript\">alert(\"登陆成功\");location.href=\"main.php\"</script>";
			} else {
				session_destroy();
				setcookie("cookie[one]", "");
				setcookie("cookie[two]", "");
				echo "<script language=\"javascript\">alert(\"验证错误\");location.href=\"index.php\"</script>";
			}

		} else {
			session_destroy();
			setcookie("cookie[one]", "");
			setcookie("cookie[two]", "");
			echo "<script language=\"javascript\">alert(\"用户名或密码错误\");location.href=\"index.php\"</script>";
		}
	}
	public function user_cookie_login($username, $passwd) {
		$jm=md5("shl5332");
		define(ALL_PS, $jm);
		$username = str_replace(" ", "", $username);
		$sql = "SELECT * FROM `admin` WHERE `username` ='$username' ";
		$query = mysql_query($sql);
		$row = mysql_fetch_array($query);
		$un = is_array($row);
		$ps = $un ? $row[passwd] == md5($passwd . ALL_PS) : false;
		if ($ps) {

			$_SESSION[id] = $row[id];
			$_SESSION[shell] = md5($row[id] . $row[passwd] . ALL_PS);
			$_SESSION[times] = mktime();
			$ip= $this->getIp();
			$time= $this->getTime();
			$sql_ip_time = "INSERT INTO `ip_time_jl` (`id` ,`ip` ,`time` )VALUES (NULL , '$ip', '$time'); ";
			$query_ip_time = mysql_query($sql_ip_time);
			echo "<script language=\"javascript\">alert(\"登陆成功\");location.href=\"main.php\"</script>";

		} else {
			echo "<script language=\"javascript\">alert(\"用户名或密码错误\");location.href=\"index.php\"</script>";
			session_destroy();
			setcookie("cookie[one]", "");
			setcookie("cookie[two]", "");
		}
	}
	public function Get_user_shell($id, $shell) {
		$jm=md5("shl5332");
		define(ALL_PS, $jm);
		$sql = "SELECT * FROM `admin` WHERE `id` ='$id' ";
		$query = mysql_query($sql);
		$row = mysql_fetch_array($query);
		$un = is_array($row);
		$shell = $un ? $shell == md5($row[id] . $row[passwd] . ALL_PS) : false;
		return $shell ? $row : null;
	}
	public function Get_user_shell_check($id, $shell) {
		if ($row = $this->Get_user_shell($id, $shell)) {
				return $row;

		} else {
			echo "<script language=\"javascript\">alert(\"不允许从别的入口进入后台\");location.href=\"index.php\"</script>";
		}
	}
public function check_user_shell($username, $passwd) {
		$jm=md5("shl5332");
		define(ALL_PS, $jm);
		$sql_username = "SELECT * FROM `admin` WHERE `username` ='$username' ";
		$query_username = mysql_query($sql_username);
		$row_username = mysql_fetch_array($query_username);
		$un_username = is_array($row_username);
		$oldpasswd=$row_username[passwd];
		$checkpasswd=md5($passwd.ALL_PS);
	    if($oldpasswd==$checkpasswd)
		echo "<script language=\"javascript\">alert(\"密码正确\");location.href=\"userchange.php\"</script>";
		else
		echo "<script language=\"javascript\">alert(\"密码错误\");location.href=\"user.php\"</script>";

	}
	public function change_user_shell($username, $passwd) {
		$jm=md5("shl5332");
		define(ALL_PS, $jm);
        $changepasswd=md5($passwd.ALL_PS);
        $query_upload=mysql_query("UPDATE `admin` SET `username` = '$username',`passwd` = '$changepasswd' WHERE `id` =1 ;");
        if($query_upload)
		echo "<script language=\"javascript\">alert(\"修改成功\");top.location.href=\"index.php\"</script>";
		else
		echo "<script language=\"javascript\">alert(\"修改失败\");top.location.href=\"index.php\"</script>";



	}


	public function getIp() {
		if (isset ($_SERVER)) {
			if (isset ($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$realip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else
				if (isset ($_SERVER['HTTP_CLIENT_IP'])) {
					$realip = $_SERVER['HTTP_CLIENT_IP'];
				} else {
					$realip = $_SERVER['REMOTE_ADDR'];
				}
		} else {
			if (getenv("HTTP_X_FORWARDED_FOR")) {
				$realip = getenv("HTTP_X_FORWARDED_FOR");
			} else
				if (getenv("HTTP_CLIENT_IP")) {
					$realip = getenv("HTTP_CLIENT_IP");
				} else {
					$realip = getenv("REMOTE_ADDR");
				}
		}
		return $realip;
	}
	public function getTime() {
		$filename = mktime();
		$getTime = date("Y-m-d", $filename);
		return $getTime;
	}
    public function upfile($movefile,$filename,$filezim,$filetype)
    {
                     $upfile=$filezim;
                     $name = $upfile["name"];
                     $type = $upfile["type"];
                     $size = $upfile["size"];
                     $tmp_name = $upfile["tmp_name"];
                     $error = $upfile["error"];
                     if($error=='0'){
						move_uploaded_file($tmp_name,$movefile.$filename);
						return 1;

                     }
                    else{
						return 0;
                     }

    }

	function cutstr($sourcestr, $cutlength) {
		$returnstr = '';
		$i = 0;
		$n = 0;
		$str_length = strlen($sourcestr); //字符串的字节数
		while (($n < $cutlength) && ($i <= $str_length)) {
			$temp_str = substr($sourcestr, $i, 1);
			$ascnum = Ord($temp_str); //得到字符串中第$i位字符的ascii码
			if ($ascnum >= 224) { //如果ASCII位高与224，
				$returnstr = $returnstr . substr($sourcestr, $i, 3); //根据UTF-8编码规范，将3个连续的字符计为单个字符
				$i = $i +3; //实际Byte计为3
				$n++; //字串长度计1
			} else
				if ($ascnum >= 192) { //如果ASCII位高与192，
					$returnstr = $returnstr . substr($sourcestr, $i, 2); //根据UTF-8编码规范，将2个连续的字符计为单个字符
					$i = $i +2; //实际Byte计为2
					$n++; //字串长度计1
				} else
					if ($ascnum >= 65 && $ascnum <= 90) { //如果是大写字母，
						$returnstr = $returnstr . substr($sourcestr, $i, 1);
						$i = $i +1; //实际的Byte数仍计1个
						$n++; //但考虑整体美观，大写字母计成一个高位字符
					} else { //其他情况下，包括小写字母和半角标点符号，
						$returnstr = $returnstr . substr($sourcestr, $i, 1);
						$i = $i +1; //实际的Byte数计1个
						$n = $n +0.5; //小写字母和半角标点等与半个高位字符宽...
					}
		}
		if ($str_length > $i) { //$str_length > $cutlength?
			$returnstr = $returnstr . "..."; //超过长度时在尾处加上省略号
		}
		return $returnstr;
	}
}
?>