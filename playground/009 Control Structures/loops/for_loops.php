<html>
<head>
	<meta charset="UTF-8">
	<title>For Loops</title>
</head>
<body>

	<?php 	

	// for ($expr1; $expr2; $expr3) { 
	// //   initial; test;  each

	// 	# Statement
	// 	}	

	?>

	<?php 
	// while loop example
	$count = 0;
	while ( $count <= 10) {
		# code...
		echo $count . " , ";
		$count++;
	}
	?>

<br /><br />

	<?php 
	// for loop example
	// similar to while loop
	for ($count = 0; $count <= 10; $count++) { 
		# what are we going to loop
		echo $count . " , ";
	}

	 ?>

<br /><br />

	<?php 

	for ($count = 1; $count < 20; $count++) { 
		# code...
		if ($count % 2 == 0) {
			# code...
			echo "{$count} is even.<br />";
		} else {
			# code...
			echo "{$count} is odd.<br />";
		}
	 }

	?>
	
</body>
</html>