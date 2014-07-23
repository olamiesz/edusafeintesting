<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- php -->
<?php 
session_start();
require ('./php/config.php');    // Includes config
//		require ('./php/GET.php'); // Includes the GET vars
?>

<!-- Le styles -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
body {
	padding-top: 60px;
	padding-bottom: 40px;
}

.sidebar-nav {
	padding: 9px 0;
}
</style>
<link href="bootstrap/css/bootstrap-responsive.min.css"
	rel="stylesheet">
<link href="bootstrap/css/edusafe.css" rel="stylesheet">
<!-- not good 
	<link href="bootstrap/css/docs.css" rel="stylesheet">
-->

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="./img/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144"
	href="../assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
	href="../assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72"
	href="../assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed"
	href="../assets/ico/apple-touch-icon-57-precomposed.png">

<title>EDUSAFE</title>

</head>

<body>
<!--
<?php echo $dir."<br>".$file."<br>".$extension."<br>"; print_r($_GET); echo $_GET['page']; ?>
-->
<!-- LAYOUT -->
	<?php if (file_exists($topbar)) include($topbar); else echo 'ERROR loading Topbar'; ?>

	<div class="container-fluid">
		<?php if (file_exists($header)) include($header); ?>

		<div class="row-fluid">

			<!-- wycielam span 3 - wklejam go do notatek -->
			
			<div class="span9">
				<?php if (file_exists($content)) include($content); else echo 'Error page does not exist:', $content; ?>
			</div>
		</div>
		<!--/row-->

		<?php if (file_exists($footer)) include($footer); ?>

		<?php if (file_exists($bottombar)) include($bottombar); else echo 'ERROR loading bottombar'; ?>
		
	</div>
	<!--/.fluid-container-->

	<!-- LAYOUT END -->

	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="./bootstrap/js/jquery.js"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
