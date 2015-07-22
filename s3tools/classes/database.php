<?php
class MySQLDatabase{
	var $db_host = ''; // database host
	var $db_name = ''; // datbase name
	var $db_user = ''; // database username
	var $db_pass = ''; // database password
	
	private $connection;
	
	// start connection as soon as this file gets load
	public function __construct(){
		$this->connect();
	} // end __construct()
	
	// connect to the database
	public function connect(){
		$this->connection = mysql_connect($this->db_host,$this->db_user,$this->db_pass);
		if(!$this->connection){
			die ("Database connection failed: " . mysql_error());
		}else{
			$select_db = mysql_select_db($this->db_name,$this->connection);
			if(!$select_db){
				die("Database selection failed: " . mysql_error());
			}
		}
	} // end connect()
	
	// close mysql connection
	public function close_connection(){
		if(isset($this->connection)){
			mysql_close($this->connection);
			unset($this->connection);
		}
	} // end close_connection()
	
	// run database query
	public function query($sql){
		$result = mysql_query($sql);
		$this->confirm_query($result);
		return $result;
	} // end query($sql)
	
	// confirm mysql query 
	public function confirm_query($result){
		if(!$result){
			die ("Database query failed: " . mysql_error());
		}
	} // end confirm_query($result)
	
	// mysql fetch_array()
	public function fetch_array($result_set){
		return mysql_fetch_array($result_set);
	}// end fetch_array()
		
	// mysql num_rows()
	public function num_rows($result_set){
		return mysql_num_rows($result_set);
	}// end num_rows()
	
} // end class MySQLDatabase

$database = new MySQLDatabase();
$db =& $database;
?>