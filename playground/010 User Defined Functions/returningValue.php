<html>
<head>
	<meta charset="UTF-8">
	<title>Returning Value</title>
</head>
<body>

	<?php 

		function add($var1 , $var2) {
			// sum does not exist outside this function
			$sum = $var1 + $var2;

			// always have a return value
			return $sum;
		}

		$result1 = add(3,4);
		$result2 = add(5, $result1);
		echo $result2;
		echo "<br />";

	 ?>

	 <?php 

	 	function chinese_zodiac($year) {
	 		switch (($year - 4) % 12) {
	 			// using return instead of break since its not required
	 			case  0: return 'Rat';
	 			case  1: return 'Ra';
	 			case  2: return 'R';
	 			case  3: return 'Tiger';
	 			case  4: return 'Dragon';
	 			case  5: return 'Snake';
	 			case  6: return 'Horse';
	 			case  7: return 'Goat';
	 			case  8: return 'Monkey';
	 			case  9: return 'Rooster';
	 			case 10: return 'Dog';
	 			case 11: return 'Pig';

	 		}
	 	}

	 	// A functions that wraps all of the logic

	 	$zodiac = chinese_zodiac(2013);
	 	echo "2013 is the year of the {$zodiac}. <br />";

	 	echo "2027 is the year of the " . chinese_zodiac(2027) . ".<br />";
	 	
	 	// better to leave echo statements out of the function.

	  ?>

	  <br />


	
</body>
</html>