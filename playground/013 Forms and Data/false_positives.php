<html>
<head>
	<meta charset="UTF-8">
	<title>False Positives</title>
</head>
<body>

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

		echo is_equal (0, false);
		echo is_equal (4, true);
		echo is_equal (0,"0");
		echo is_equal (0,"");
		echo is_equal (0, "a");
		echo is_equal ("1", "01");
		echo is_equal ("", null);
		echo is_equal (3, "3 dogs");
		echo is_equal (100, "le2");
		echo is_equal (100, 100.00);
		echo is_equal ("abc", true);

	 ?>
	
</body>
</html>