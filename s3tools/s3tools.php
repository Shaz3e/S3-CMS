<?php
	require_once("function.php");
/********************************************************************************
	// start session for staff/admin
		define("NAME",$_SESSION['name']);
		
		// if session expires or un athorize attampt to view private area
		if(!$_SESSION['name']){
			header("Location: ../error.php?error");
		}
		
	// $setting->TimeOut();

********************************************************************************/	
?>
<!DOCTYPE HTML>
<!--
/*======================================================================*\
|| #################################################################### ||
|| # Package - HTML Template based on Shaz3e S3 Framework               ||
|| # Copyright (C) 2010  shaz3e.com. All Rights Reserved.               ||
|| # Authors - Shahrukh A. Khan (Shaz3e) and DiligentCreators           ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of shaz3e.com                         ||
|| # for more information visit http://www.shaz3e.com/                  ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses websites - http://www.shaz3e.com        ||
|| # A project of DiligentCreators - Construcing Ideas...               ||
|| #################################################################### ||
\*======================================================================*/
-->
<html>
<head>
<meta name="viewport" content="width=device-width, intial-scale=1, maximum-scale=1, user-scaleable=no">
<meta charset="utf-8">