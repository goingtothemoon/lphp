<html>
<head>
	<meta charset="UTF-8">
	<title>Includes</title>
</head>
<body>

	<?php 
	include("incAndReqFiles_header.php"); 
	include("included_functions.php"); 
	?>
	The header has been included.
	<?php echo hello("Everyone"); ?>

	<?php 
	/*

	Include
	-Functions
	-Layout sections
	-Reusable HTML/PHP code
	-CSS and JavaScript

	Three variations of include
	-include()
	-require() // won't load if it cant run
	-include_once()
	

	*/ 
	?>

