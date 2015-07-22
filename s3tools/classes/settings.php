<?php

class SiteSetting{
/***********************************************************************************************************
	function SiteName(){
		global $database;
		$query = $database->query("SELECT * FROM settings");
		while($row = $database->fetch_array($query)){
			echo $row['system_name'];
		}
	} // SiteName

/*
	function SiteTitle(){
		global $database;
		$query = $datbase->query("SELECT FROM settings");
		while($row = $database->num_rows($query)){
			if($row['system_name'] == 1){
				echo $row['system_name'];
			}else{
				echo 'test';
			}
		} // endwhile
	} // SiteTitle
*/

	function TimeOut(){
		global $database;
		// set timeout period in seconds
		$query = $database->query("SELECT * FROM settings");
		while($row = $database->fetch_array($query)){
			$inactive = $row['life_time'];
			
			// check to see if $_SESSION['timeout'] is set
			if(isset($_SESSION['timeout']) ) {
				$session_life = time() - $_SESSION['timeout'];
				if($session_life > $inactive){ 
					// go to login page when idle
					session_destroy();
					unset($_SESSION['name']);
					header("Location: ../error.php?timeout");
				}
			}
			$_SESSION['timeout'] = time();
		}// endwhile
	} // TimeOut
	
***********************************************************************************************************/

}// end SiteSetting{}


$setting = new SiteSetting();
$option =& $setting;
?>