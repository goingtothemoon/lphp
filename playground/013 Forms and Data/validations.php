<html>
<head>
	<meta charset="UTF-8">
	<title>Validations</title>
</head>
<body>

	<?php 

	// * presence
	$value = "00"; // if nothing in string it will fail.
	if (!isset($value) || empty($value)) {
		# code...
		echo "Validation failed. 01<br />";
	}


	// * string length
	$value = "abcd";
	# Min
	$min = 3;
	if (strlen($value) < $min) {
		# code...
		echo "Validation failed. 02<br />";
	}

	# Max
	$max = 6;
		if (strlen($value) > $max) {
		# code...
		echo "Validation failed. 03<br />";
	}


	// * type
	$value = ""; 
		if (!is_string($value)) {
		# code...
		echo "Validation failed. 04<br />";
	}


	// * inclusion
	$value = "1"; 
	$set = array("1","2","3","4");
		if (!in_array($value, $set)) {
		
		echo "Validation failed. 06<br />";
	}


	// * uniqueness
	# Need database

	// * format
	// use a regex on a string
	// preg_match($regex, $subject)
	if (preg_match("/PHP/", "PHP is fun")) { //preg_match — Perform a regular expression match
		# code...
		echo "A match was found.";
	} else {
		# code...
		echo "A match was not found.";
	}
	$value = "watwat@wherewhre.com";  // finds the @ symbol and passes validation
	if (preg_match("/@/", "$value")) {
		# code...
		echo "Validation failed. 06<br />";
	}
	

	if (strrpos($value, "@") === false) {  // must use exact === if not will return 0 because @ is first
		echo "Validation failed (strrpos) <br />";
	} 
	


	 ?>
	
</body>
</html>