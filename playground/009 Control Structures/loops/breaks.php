<html>
<head>
	<meta charset="UTF-8">
	<title>Break</title>
</head>
<body>
	
	<?php 
	// break ends execution of the current for, foreach, while, do-while or switch structure.
	// break stops the process

	for ($count=0; $count <=10 ; $count++) { 
		if ($count == 5) {
			# ends execution at 5 (4)
			break;
		}
		# breaks out of the loop
		echo $count . " , ";
	}

	 ?>

	 <br />

	 <?php 

	 	for ($i=0; $i <=5 ; $i++) { 
	 		if ($i % 2 == 0) { continue(1); }
	 	for ($k=0; $k <=5 ; $k++) { 
	 		if ($k == 3) { break(2); }
	 			# code...
	 			echo $i . "-" . $k . "<br />";
	 		}
 			
	 		}

	  ?>


</body>
</html>