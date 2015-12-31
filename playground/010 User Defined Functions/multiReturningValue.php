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
			return array($add, $subt); // Using arrays!!! It will be able to return more than one value back.
		}

		$result_array = add_subt(10,5);

		echo "Add: " . $result_array[0] . "<br />";
		echo "Subt: " . $result_array[1] . "<br />";

	 ?>
	
</body>
</html>