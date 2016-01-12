<html>
<head>
	<meta charset="UTF-8">
	<title>False Positives</title>
</head>
<body>

	<?php # Importance of the triple equal ===. EXACT. ?>

	<?php

		function is_equal($value1, $value2)
		{
			$output = "{$value1} == {$value2}: ";
			if ($value1 == $value2) {
				$output .= "true<br />";
			} else {
				$output .= "false<br />";
			}
			#return returns program control to the calling module. Execution resumes at the expression following the called module's invocation.
			return $output;	
		}

		// All are true

		echo is_equal (0, false);
		echo is_equal (4, true);
		echo is_equal (0,"0");
		echo is_equal (0,"");
		echo is_equal (0, "a");
		echo is_equal ("1", "01");
		echo is_equal ("", null);
		echo is_equal (3, "3 dogs");
		echo is_equal (100, "1e2");
		echo is_equal (100, 100.00);
		echo is_equal ("abc", true);
		echo is_equal ("123", "   123");
		echo is_equal ("123", "+0123");


	 ?>

<br />

	 	<?php
	 		// using exact
		function is_exact($value1, $value2)
		{
			$output = "{$value1} === {$value2}: ";
			if ($value1 === $value2) {
				$output .= "true<br />";
			} else {
				$output .= "false<br />";
			}
			#return returns program control to the calling module. Execution resumes at the expression following the called module's invocation.
			return $output;	
		}

		// All are true

		echo is_exact (0, false);
		echo is_exact (4, true);
		echo is_exact (0,"0");
		echo is_exact (0,"");
		echo is_exact (0, "a");
		echo is_exact ("1", "01");
		echo is_exact ("", null);
		echo is_exact (3, "3 dogs");
		echo is_exact (100, "1e2");
		echo is_exact (100, 100.00);
		echo is_exact ("abc", true);
		echo is_exact ("123", "   123");
		echo is_exact ("123", "+0123");


	 ?>
	
	
	<?php 

	/*
		# Type juggling

		PHP does not require (or support) explicit type definition in variable declaration; 
		a variable's type is determined by the context in which the variable is used. 
		That is to say, if a string value is assigned to variable $var, $var becomes a string. 
		If an integer value is then assigned to $var, it becomes an integer.

		# Type juggling during comparisons

		- string vs null : converts to ""
		- boolean vs other: converts other to boolean
		- number vs other: converts other to number

		# Empty()

		- ""
		- 0
		- "0"
		- null
		- false
		- array()

		# Be careful with basic operators

		1) <, <=, >, >=
		2) &&, ||


	*/

	 ?>
</body>
</html>