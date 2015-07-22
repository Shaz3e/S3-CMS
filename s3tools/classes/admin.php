<?php

class Admin{
/***********************************************************************************************************
	public function AdminPage(){
		global $database;
		$query = $database->query("SELECT * FROM users WHERE username = '".$_SESSION['name']."'");
		while($row = $database->fetch_array($query)){
			if($row['usertype'] == 0 || $row['usertype'] == 1){
				header ("Location: ../error.php?authorization");
			}
		}
	}
	
	public function AdminLoggedIn(){
		global $database;
		$query = $database->query("SELECT * FROM users WHERE username = '".$_SESSION['name']."'");
		while($row = $database->fetch_array($query)){
			if($row['usertype'] == 2 || $row['usertype'] == 1){
				header ("Location: administrator");
			}
		}
	}
***********************************************************************************************************/
} // end Admin Class

$admin = new Admin();

?>