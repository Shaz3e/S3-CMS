<?php

class User{
/***********************************************************************************************************
	public function UserPage(){
		global $database;
		$query = $database->query("SELECT * FROM users WHERE username = '".$_SESSION['name']."'");
		while($row = $database->fetch_array($query)){
			if($row['usertype'] == 1 || $row['usertype'] == 2){
				header ("Location: ../error.php?authorization");
			}
		}
	}
	
	public function UserLoggedIn(){
		global $database;
		$query = $database->query("SELECT * FROM users WHERE username = '".$_SESSION['name']."'");
		while($row = $database->fetch_array($query)){
			if($row['usertype'] == 0){
				header ("Location: dashboard");
			}
		}
	}
***********************************************************************************************************/
}// end User Class

$user = new User();


?>