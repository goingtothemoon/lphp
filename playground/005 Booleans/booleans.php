<html>
<head>
	<meta charset="UTF-8">
	<title>Booleans</title>
</head>
<body>

A boolean can be true or false <br />
Can be used for test <br /><br /><br />

	<?php  
	// Assigning a boolean to a variable
	// Booleans are best used with conditionals 
		$result1 = true;
		$result2 = false;

	// 1 = True
	// nothing = False
	?>

	Result1: <?php echo $result1; ?><br />
	Result2: <?php echo $result2; ?><br />

	<br />

	result2 is boolean? <?php echo is_bool($result2) ?>
	
	
</body>
</html>