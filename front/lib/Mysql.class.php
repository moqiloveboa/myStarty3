<?php 
/**
* this MYSQL class
*/
class Mysql
{
	public $mysql_host;
	public $mysql_user;
	public $mysql_pass;
	public $mysql_db;
	function __construct($host,$user,$pass,$db)
	{
		$this->mysql_host 	= $host;
		$this->mysql_user 	= $user;
		$this->mysql_pass 	= $pass;
		$this->mysql_db 	= $db;
	}
}

 ?>