<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- meta -->
	<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />
    <meta name="description" content="Official web site of the project">
    <meta name="author" content="The project team">

	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<!-- styles -->
    <link type="text/css" href="./css/bootstrap.css" rel="stylesheet">
	<link type="text/css" href="./css/docs.css" rel="stylesheet">
	<link type="text/css" href="./css/prettify.css" rel="stylesheet">
	<!-- only if top bar is present
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>
	-->
	
	<!-- icons -->
	<link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico" />	

	<!-- scripts -->
    <script src="./js/jquery-1.5.2.min.js"></script>    
    <script src="./js/bootstrap-dropdown.js"></script>
    <script src="./js/bootstrap-twipsy.js"></script>
    <script src="./js/bootstrap-scrollspy.js"></script>
	<script src="./js/prettify.js"></script>

	<title>ARDENT</title>
		
	<!-- php -->	
	<?php 
		session_start();
		require ('./php/config.php');    // Includes config
		require ('./php/GET.php'); // Includes the GET vars		
	?>
</head>

<body>
	<!-- LAYOUT -->
	<div id="topbar">
		<?php if (file_exists($topbar)) include($topbar); else echo 'ERROR loading Topbar'; ?>
	</div>
	
	<div id="header">
		<?php if (file_exists($header)) include($header); else echo 'ERROR loading Header'; ?>
	</div>
	
	<div id="content" style="min-height: 550px;">
		<?php if (file_exists($content)) include($content); else echo 'ERROR loading Content:', $content; ?>
	</div>
	
	<div id="footer">
		<?php if (file_exists($footer)) include($footer); else echo 'ERROR loading Footer'; ?>
	</div>
	<!-- LAYOUT END -->
</body>

</html>