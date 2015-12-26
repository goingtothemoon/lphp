<html>
<head>
	<meta charset="UTF-8">
	<title>Constants</title>
</head>
<body>
	
Constants stays defined for the duration of the script. <br />

	<?php  
		$max_width = 980;

		define("MAX_WIDTH", 980);
		echo MAX_WIDTH;
	?>	

<br />

<?php // can't change the value
// MAX_WIDTH += 1
// echo MAX_WIDTH
 ?>

 <?php // can't redefine
// define("MAX_WIDTH", 981);
// echo MAX_WIDTH;
 ?>


</body>
</html>