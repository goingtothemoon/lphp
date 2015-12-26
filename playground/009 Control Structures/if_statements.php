<html>
<head>
	<meta charset="UTF-8">
	<title>If Statements</title>
</head>
<body>
	


	<?php
		$a = 4;
		$b = 3;

		if ($a > $b) {
			echo "a is larger than b";
		}
	 ?>
	 <br />
	 A special welcome message only to new users
	 <br />
	
	<?php // Only welcome new users
		$new_user = true;
		if ($new_user) {
		 	# code...
		 	echo "<h1>Welcome!</h1>";
		 	echo "<p>We are happ you joined used</p>";
		 } 

	 ?>
	<br />

	<?php // don't divide by zero
		  // result is being defined in the if statement
		$numerator = 20;
		$denominator = 4;
		if ($denominator > 0) {
			# code...
			$result = $numerator / $denominator;
			echo "Result: {$result}";
		}
	 ?>





</body>
</html>