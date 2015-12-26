<html>
<head>
	<meta charset="UTF-8">
	<title>Numbers</title>
</head>
<body>

	<?php # Integers are whole numbers ?>

	<?php 

		$var1 = 3;
		$var2 = 4;

	 ?>

	 Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2-5; ?><br />
	 <br />

	 Absolute Value: <?php echo abs( 0 - 300 ); ?><br />
	 Exponential: <?php echo pow(2, 8); ?><br />
	 Square root: <?php echo sqrt(100); ?><br />
	 Modulo: <?php echo fmod(20, 7); ?><br />
	 Random: <?php echo rand(); ?><br />
	 Random (min, max): <?php echo rand(1,10) ?><br />
	
</body>
</html>