
<!-- Bootstrap Style's Sheet -->
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/bootstrap-theme.css" rel="stylesheet">
<link href="../css/offline.css" rel="stylesheet">
<link href="../css/404.css" rel="stylesheet">

<!-- jQueries -->
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery-noconflict.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/scripts.js"></script>

<!-- Main Theme File -->
<link rel="stylesheet/less" type="text/css" href="../themes/style1/style.less">
<script type="text/javascript" src="../js/less.js"></script>

<script type="text/javascript">
	less.env = "development";
	less.watch();
</script>

<?php
require "../less.php";
$less = new lessc;
$less->setFormatter("compressed");
$less->checkedCompile("../themes/style1/style.less", "../compile/style.css");
?>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41080686-1', 'http://www.shaz3e.com');
  ga('send', 'pageview');

</script>


<!-- Fav Icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/favicon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/favicon/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/favicon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="../images/favicon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="../images/favicon/favicon.png">


<!--[if lt IE 9]>
<link href="../css/ie.css" type="text/css" rel="stylesheet">
<![endif]-->
<!--[if lt IE 9]><script src="../js/html5.js"></script><![endif]-->