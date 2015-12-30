<html>
<head>
	<meta charset="UTF-8">
	<title>Functions: Arguments</title>
</head>
<body>

	<?php 
		// How to work with arguments to the function

		function say_hello_to($word) {
			echo "Hello {$word}!<br /> ";
		}
			// function has its own world
			$name = "Jogn Doe"
		say_hello_to("$name");

	 ?>

	 <?php 
	 	// function with more than one argument
	 	// str_replace("quick", "super-fast", $third);

	 	// // relation
	 	// function str_replace($find, $replace, $target){

	 	// }


	  ?>

	  <?php 

	  	function better_hello($greeting, $target, $punct) {
	  		echo $greeting . " " . $target . $punct . "<br />";
	  	}
	  		better_hello("Hello", $name, "!");
	  		better_hello("Alo", $name, "!!!");
	  		
	  		better_hello("Hello", $name, null);

	   ?>

	
</body>
</html>