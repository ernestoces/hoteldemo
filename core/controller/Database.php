<?php


class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="yn4xl2beg91d63t5";
		$this->pass="k1959p950xrsfi4o";
		$this->host="uyu7j8yohcwo35j3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
		$this->ddbb="e53sx46h0evt8xgw";
	} 


	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	function connect1(){
		$db = new PDO("mysql:host=$this->host;",$this->user,$this->pass);
		$db->exec("use `$this->ddbb`");
		return $db;	
	} 

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}

	
}





?>
