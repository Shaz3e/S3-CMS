<?php
/**
* Database Class
*/
class MySQLiDatabase{
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
		$this->connection = mysqli_connect($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
		if(!$this->connection){
			die ("Database connection failed: " . mysqli_connect_error());
		}else{
			$select_db = mysqli_select_db($this->connection,$this->db_name);
			if(!$select_db){
				die("Database selection failed: " . mysqli_error($this->connection));
			}
		}
	} // end connect()
	
	// close mysql connection
	public function close_connection(){
		if(isset($this->connection)){
			mysqli_close($this->connection);
			unset($this->connection);
		}
	} // end close_connection()
	
	// run database query
	public function query($sql){
		$result = mysqli_query($this->connection,$sql);
		$this->confirm_query($result);
		return $result;
	} // end query($sql)
	
	// confirm mysql query 
	public function confirm_query($result){
		if(!$result){
			die ("Database query failed: " . mysqli_error($this->connection));
		}
	} // end confirm_query($result)
	
	// mysql fetch_array()
	public function fetch_array($result_set){
		return mysqli_fetch_array($result_set);
	}// end fetch_array()
		
	// mysql num_rows()
	public function num_rows($result_set){
		return mysqli_num_rows($result_set);
	}// end num_rows()
	
} // end class MySQLDatabase

$database = new MySQLiDatabase();
$db =& $database;
