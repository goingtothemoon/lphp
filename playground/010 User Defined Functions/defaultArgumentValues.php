<html>
<head>
	<meta charset="UTF-8">
	<title>Default Argument Values</title>
</head>
<body>

	<?php 
		// If you dont have a value for color use red or office for room
		function paint($room="office", $color="red") {
			return "The color of the {room} is {$color}.<br />";
		}

		echo paint(); // custom 
		echo paint("bedroom", "blue"); 

		// The special NULL value represents a variable with no value. NULL is the only possible value of type null.
		echo paint("bedroom", null);

		echo paint("blue"); // order still matters

	 ?>
	
</body>
</html>