<html>
<head>
	<meta charset="UTF-8">
	<title>Multiple Returns</title>
</head>
<body>


	<?php 

		function add_subt ($val1, $val2) { 
			$add = $val1 + $val2;
			$subt = $val1 - $val2;

			// return $add; // how can we also return $subt?
			return array($add, $subt); // Using arrays!!! It will be able to return more than one value back. Just needs to be wrapped and can call unlimited.
		}

		$result_array = add_subt(10,5);

		echo "Add: " . $result_array[0] . "<br />";
		echo "Subt: " . $result_array[1] . "<br />";
		echo "<br />";

		// using list

		list($add_result, $subt_result) = add_subt(20,7); //takes value from arrays

		echo "Add: " . $add_result . "<br />";
		echo "Subt: " . $subt_result . "<br />";

	 ?>
	
</body>
</html>