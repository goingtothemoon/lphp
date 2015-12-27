<html>
<head>
	<meta charset="UTF-8">
	<title>ForEach Loops</title>
</head>
<body>


	<?php 
	// Going to take an array and loop through the array until it gets to the end.

	// foreach ($variable as $value) {
	// 	# code...;
	// }

	 ?>

	 <?php 

	 	$ages = array(4,8,15,16,23,40);

	 	foreach ($ages as $age) {
	 		# code...
	 		echo "Age: {$age}<br />";
	 		// This code runs through our array and finishes at last value.
	 	}
	 ?>
<br /><br />

	<?php 
	// foreach using assoc. array
		$person = array(
				"first_name" => "Ted",
				"last_name"  => "Skull",
				"address"    => "123 ABC Ave.",
				"city"		 => "Falls",
				"zip"		 => "01210"
			);

		foreach ($person as $attribute => $data) {
			# code...
			$attr_nice = ucwords(str_replace("_", " ", $attribute));
			// ucwords — Uppercase the first character of each word in a string
			// str_replace — Replace all occurrences of the search string with the replacement string
			// Don't want to show users _

			echo "{$attr_nice}: {$data}<br />";
		}

	 ?>

	 When working with arrays think about working with foreach loops.

</body>
</html>