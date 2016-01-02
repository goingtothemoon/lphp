<html>
<head>
	<meta charset="UTF-8">
	<title>Debugging</title>
</head>
<body>

	<?php 

		$number = 99;
		$string = "Bug?";
		$array = array(1 => "Homepage", 2 => "About Us", 3 => "Services");

		var_dump($number); // dumps it to the screen no echo needed
		var_dump($string);
		var_dump($array);

	 ?>
<br />
<pre>
	 <?php 
		# This function returns a multidimensional array containing a list of all defined variables, 
	 	# be them environment, server or user-defined variables, within the scope that get_defined_vars() is called.

	 	# print_r(get_defined_vars()); // get_defined_vars — Returns an array of all defined variables

	  ?>

	</pre>
	<br />


	<?php 
		
		function say_hello_to($word) { 
			echo "Hello {$word}!<br /> ";

			var_dump(debug_backtrace()); // dumps info
		}

		say_hello_to('Everyone');

		// Third party tools
		// 1. Xdebug
		// 2. DBG
		// 3. FirePHP (firefox)

	 ?>




	
</body>
</html>