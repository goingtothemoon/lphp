<html>
<head>
	<meta charset="UTF-8">
	<title>Common Problems</title>
</head>
<body>

		<?php 

			phpinfo(); // makes simple php page confirms its working and more details

			/* 
			# E_STRICT is available, with the value 2048. When enabled, messages will be issued to warn you about code usage which is deprecated or which may not be future-proof.
			# http://php.net/manual/en/errorfunc.constants.php

			# Warning and Errors
			   Make sure display errors is on and configured. 
			   //In the php.ini file 
			   display_errors = On
			   error_reporting = E_ALL

			   //In PHP code
			   ini_set('display_errors', 'On');
			   error_reporting(E_All);

			   //E_STRICT 

			   error_reporting (E_ALL | E_STRICT);

			   // Use ~ for omit

			   error_reporting (E_ALL & ~E_DEPRECATED);

			   // return the current level

			   error_reporting();
			-------------------------------------------------------------

			   # Fatal Errors
			   - PHP understood the code but could not execute it. (ex: calling a function that hasnt been defined)

			   # Syntax Errors
			   - PHP could not understand or process the code

			   # Warnings
			   - PHP found a problem, but was able to recover (ex: Dividing by 0)

			   # Notices
			   - PHP is offering advice

			 -------------------------------------------------------------

			 #Logs
			 - C:/wamp/logs/php_error.log

			 -------------------------------------------------------------

			 echo $variable; // variable value
			 print_r($array); // Use <pre> tags with this. Prints readable array
			 gettype($variable); // variable type
			 var_dump($variable); // variable type and value
			 get_defined_vars(); // array of defined variables
			 debug_backtrace(); // show backtrace

			
			*/



		 ?>
	
</body>
</html>