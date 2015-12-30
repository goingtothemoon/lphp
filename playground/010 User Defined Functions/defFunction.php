<html>
<head>
	<meta charset="UTF-8">
	<title>Defining Functions</title>
</head>
<body>

	<?php 

		// Function: A code that preforms a specific task ex: inarry

		function say_hello() {
			echo "Hello World!<br />";
		}

		// Call function
		// Must use ()
		say_hello();


		function say_hello_to($word) {
			echo "Hello {$word}!<br />";
		}

		say_hello_to("World");
		say_hello_to("Friend");

		function say_hello_caps() {
			echo "HELLO";
		}

		say_hello_caps();

		// Cannot redefine a function

	 ?>
	
</body>
</html>