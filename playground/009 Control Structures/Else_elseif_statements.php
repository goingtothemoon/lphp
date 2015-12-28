<html>
<head>
	<meta charset="UTF-8">
	<title>Else and elseif statements</title>
</head>
<body>

	<?php 

		$a = 3;
		$b = 4;

		if ($a > $b) {
			# code...
			echo "a is larger than b";
		} elseif ($a < $b) {
			# code...
			echo "b is smaller than a";
		} else {
			echo "a is equal to b";
		}
		
	 ?>

</body>
</html>