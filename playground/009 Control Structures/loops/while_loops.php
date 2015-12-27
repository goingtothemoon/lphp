<html>
<head>
	<meta charset="UTF-8">
	<title>While Loops</title>
</head>
<body>

	<?php 

	// 	   While loops
	//
	// while (expression) {
	// 	# code...
	// 	statement;
	// }

	// while ($count <= 10) {
	// 	# code...
	// 	echo $count;
	// 	// If you take bottom line out the loop will go on forever.
	// 	$count += 1;
	// }

	 ?>

	 <?php 

	 	$count = 0;
	 	while ($count <= 10) {
	 		// Added an If statement so that when $count is = 5 it will echo FIVE
	 		if ($count == 5) {
	 			# code...
	 			echo "FIVE, ";
	 		} else {
	 		  # code...
	 		  echo $count . "  , ";
	 		}

	 		$count++; //increment by 1
	 	}

	 	echo "<br />";
	 	echo "Count: {$count}";
	  ?>
	
</body>
</html>