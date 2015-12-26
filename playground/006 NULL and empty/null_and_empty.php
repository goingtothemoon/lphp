<html>
<head>
	<meta charset="UTF-8">
	<title>NULL and Empty</title>
</head>
<body>

	<?php 
		// NULL: A lack of a value
		// is_null — Finds whether a variable is NULL

		$var1 = null;
		$var2 = "";
	 ?>
	
	var1 null? <?php echo is_null($var1); ?><br />
	var2 null? <?php echo is_null($var2); ?><br />
	var3 null? <?php echo is_null($var3); // var3 is not set (gives a notice) ?><br />

	<br />

	<!-- isset — Determine if a variable is set and is not NULL -->

	var1 is set? <?php echo isset($var1); ?><br />
	var2 is set? <?php echo isset($var2); ?><br />
	var3 is set? <?php echo isset($var3); ?><br />

	<br />

	<!-- Empty returns a boolean (true or false) for wheter a variable is considered to be empty. -->

	<?php // empty: "", null, 0, 0.0, "0", false, array() ?>
	<?php $var3 = "0"; ?>
	var1 is set? <?php echo empty($var1); ?><br />
	var2 is set? <?php echo empty($var2); ?><br />
	var3 is set? <?php echo empty($var3); ?><br />	



	
</body>
</html>