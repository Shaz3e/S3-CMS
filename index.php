<<<<<<< HEAD
<?php require_once("s3tools/function.php"); ?>
=======
<?php
	require_once("s3tools/function.php");
?>
>>>>>>> 17968720b871c8c2d7e6ba32ff430cc9bf887c93
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
<?php SiteTitle("Photography Management System"); ?>
<!-- Bootstrap Style's Sheet -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-theme.css" rel="stylesheet">
<link href="css/offline.css" rel="stylesheet">
<link href="css/404.css" rel="stylesheet">

<!-- jQueries -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-noconflict.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

<!-- Main Theme File -->
<link rel="stylesheet/less" type="text/css" href="themes/style1/style.less">
<script type="text/javascript" src="js/less.js"></script>

<!-- Fav Icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/favicon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/favicon/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/favicon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="images/favicon/favicon.png">


<!--[if lt IE 9]>
<link href="css/ie.css" type="text/css" rel="stylesheet">
<![endif]-->
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>
<!--[if lt IE 9]>
    <div class="dc-broswer-alert">
    <p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/"><strong>upgrade your browser</strong></a> or <a href="http://www.google.com/chromeframe/?redirect=true"><strong>activate Google Chrome Frame</strong></a> to improve your experience.</p>
    </div>
<![endif]-->
<body class="dc-wrapper pageClass">
<section class="dc-header">
	<div id="dc-header">
    	<div class="dc-modules">
        	<div id="dc-modules">
                <div class="dc-clear"></div>
                	<div class="dc-logo"><a href="index.php"><img src="themes/style1/images/logo.png" alt="Shaz3e"></a></div>
                <div class="dc-clear"></div>
            </div>
        </div>
    </div>
</section>
<section class="dc-container">
<div class="dc-clear"></div>
	<div id="dc-container">
    <div class="dc-clear"></div>
        <section class="dc-componentFull">
<<<<<<< HEAD
            <?php
=======
            
            <?php
			/*************************************************************************************************************************
>>>>>>> 17968720b871c8c2d7e6ba32ff430cc9bf887c93
				$error = '';
				$username = '';
				$password = '';
				if(isset($_POST['submit'])){
					$username	= $_POST['username'];
					$password	= $_POST['password'];
<<<<<<< HEAD
					$last_login_time = date("Y-m-d H:i:s");
=======
>>>>>>> 17968720b871c8c2d7e6ba32ff430cc9bf887c93
					
					if(!$username || !$password){
						$error = '<div class="alert alert-warning">Username and password are required to login.</div>';
					}else{
						$query = $database->query("SELECT * FROM users WHERE username = '$username'");
						$row = $database->num_rows($query);
						if($row == 0){
							$error = '<div class="alert alert-danger">Username does not exist</div>';
						}else{
<<<<<<< HEAD
							$_SESSION['name'] = $username;
							
							$query = $database->query("UPDATE users SET last_login_time = '$last_login_time' WHERE username = '".$_SESSION['name']."'");
							
=======
>>>>>>> 17968720b871c8c2d7e6ba32ff430cc9bf887c93
							$query = $database->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
							$row = $database->num_rows($query);
							if($row == 0){
								$error = '<div class="alert alert-warning">Password is incorrect!</div>';
							}else{
<<<<<<< HEAD
								
								$query = $database->query("SELECT * FROM users WHERE username = '$username' AND usertype = '2'");
								$row = $database->num_rows($query);
								if($row == 1){
									//$_SESSION['name'] = $username;
									echo '<meta http-equiv="refresh" content="0;URL=administrator" />';
								}else{
									$query = $database->query("SELECT * FROM users WHERE username = '$username' AND usertype = '1'");
									$row = $database->num_rows($query);
									if($row == 1){
										//$_SESSION['name'] = $username;
										echo '<meta http-equiv="refresh" content="0;URL=administrator" />';
									}else{
										$query = $database->query("SELECT * FROM users WHERE username = '$username' AND usertype = '0'");
										$row = $database->num_rows($query);
										if($row == 1){
											//$_SESSION['name'] = $username;
=======
								$_SESSION['name'] = $username;
								$query = $database->query("SELECT * FROM users WHERE username = '$username' AND access_level = '0'");
								$row = $database->num_rows($query);
								if($row == 1){
									echo '<meta http-equiv="refresh" content="0;URL=administrator" />';
								}else{
									$query = $database->query("SELECT * FROM users WHERE username = '$username' AND access_level = '1'");
									$row = $database->num_rows($query);
									if($row == 1){
										echo '<meta http-equiv="refresh" content="0;URL=administrator" />';
									}else{
										$query = $database->query("SELECT * FROM users WHERE username = '$username' AND access_level = '2'");
										$row = $database->num_rows($query);
										if($row == 1){
>>>>>>> 17968720b871c8c2d7e6ba32ff430cc9bf887c93
											echo '<meta http-equiv="refresh" content="0;URL=dashboard" />';
										}
									}
								}
							}
						}
					}
				}
				// error defined
				if($error){
					echo $error;
				}else{
					echo '<h2>Login</h2><br>';
				}
<<<<<<< HEAD
=======
			*************************************************************************************************************************/
>>>>>>> 17968720b871c8c2d7e6ba32ff430cc9bf887c93
			?>
            <hr>
            <div class="table-responsive">
            <form action="" method="post">
<<<<<<< HEAD
            <table class="table table-bordered table-hover">
            	<tr>
                    <td><input type="text" name="username" class="form-control" value="<?php echo htmlentities($username); ?>" placeholder="Username"></td>
                </tr>
            	<tr>
                    <td><input type="password" name="password" class="form-control" value="<?php echo htmlentities($password); ?>" placeholder="Password"></td>
                </tr>
                <tr>
                	<td>
=======
            <table class="table table-bordered">
            	<tr>
                	<td><label>Username:</label></td>
                    <td><input type="text" name="username" class="input-sm" value="<?php echo htmlentities($username); ?>"></td>
                </tr>
            	<tr>
                	<td><label>Password:</label></td>
                    <td><input type="password" name="password" class="input-sm" value="<?php echo htmlentities($password); ?>"></td>
                </tr>
                <tr>
                	<td colspan="2">
>>>>>>> 17968720b871c8c2d7e6ba32ff430cc9bf887c93
                    	<input type="submit" name="submit" value="Login" class="btn btn-success">
                        <a class="btn btn-info" href="#">Forgot your password?</a>
                    </td>
                </tr>
            </table>
            </form>
            </div>
            
        </section>        
   	<div class="dc-clear"></div>
    </div>
<div class="dc-clear"></div>
</section>
<div class="dc-clear"></div><!--clearfix -->
<section class="DiligentCreators">
	<div id="DiligentCreators">
            <div class="dc-clear"></div>
            <div class="dc-credits">
                <div id="dc-credits">
                    <div class="dc-modules">
                        <div id="dc-modules">
                            <div class="dc-clear"></div>
                                <div class="dc-block">
                                    <p>Designed &amp; Developed by <a href="http://www.diligentcreators.com" title="DiligentCreators" target="_blank">DiligentCreators</a></p>

                                </div>
                            <div class="dc-clear"></div>
                        </div>
                    </div>      	
                </div>
            </div>

            <div class="dc-copyright">
                <div id="dc-copyright">
                    <div class="dc-modules">
                        <div id="dc-modules">
                            <div class="dc-clear"></div>
                                <div class="dc-block">
                                    <p>&copy; <a href="index.php" title="Shaz3e"> S3 HTML</a> | All Rights Reserved.</p>
                                </div>
                            <div class="dc-clear"></div>
                        </div>
                    </div> 
                </div>
            </div>

		<div class="dc-clear"></div>
			<a href="http://www.shaz3e.com" class="shaz3e" target="_blank" title="Shaz3e"></a>
		<div class="dc-clear"></div>
    </div>
</section>

</body>
</html>