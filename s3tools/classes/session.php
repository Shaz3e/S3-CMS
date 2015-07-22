<?php

class Session{
	
	public $session;
	
	public function __construct(){
		$this->session();
	}
	
	public function session(){
		$this->session = session_start();
	}
		
} // end class session

$session = new Session();
?>