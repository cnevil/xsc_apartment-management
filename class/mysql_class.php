<?php
class mysql {
	private $host;
	private $name;
	private $pass;
	private $table;
	private $ut;
	function __construct($host, $name, $pass, $table, $ut) {
		$this->host = $host;
		$this->name = $name;
		$this->pass = $pass;
		$this->table = $table;
		$this->ut = $ut;
		$this->connect();
	}

	function connect() {
		$conn = mysql_connect($this->host, $this->name, $this->pass) or die("数据库连接错误" . $this->error());
		mysql_select_db($this->table, $conn) or die("数据库连接错误" . $this->table);
		mysql_query("set names '$this->ut'");
	}
}
?>


