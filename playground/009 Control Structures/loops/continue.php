<html>
<head>
	<meta charset="UTF-8">
	<title>Continue</title>
</head>
<body>
	
	<?php 
	/* 
	   Continue basically shouts next to skip ahead to the next one.

	   Continue is used within looping structures to skip the rest of the current loop iteration and continue 
	   execution at the condition evaluation and then the beginning of the next iteration.
	*/

	   for ($count=0; $count <= 10 ; $count++) { 
	   	# code...
	   		if ($count % 2 == 0) {
	   			# code...
	   			continue;
	   			// asking it to continue earlier
	   		}
	   	echo $count . ", ";

	   }

	 ?>

	 <?php 

	 	$count = 0;
	 	while ($count <= 10) {
	 		# code...
	 		if ($count == 5) {
	 			# makre sure for incre.
	 			$count++;
	 			continue;
	 		}
	 		echo $count . " , ";
	 		$count++;
	 	}

	  ?>

	  <?php 

	  	// loop inside a loop with continue
	  for ($i=0; $i<=5 ; $i++) { 
	  	# code...
	  	if ($i % 2 == 0) { continue(1); }
	  	 for ($k=0; $k<=5 ; $k++) { 
	  	  if ($k == 3) { continue(2); }
	  		echo $i . "-" . $k . "<br />";
	  	}
	  	
	  }

	   ?>



</body>
</html>