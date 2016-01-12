<?php 
// IMPORTANT: Setting cookies must be before and HTML output
// Unless output buffering is turned on
	$name = "test";
	$value = "hello";
	$expire = time() + (60*60*24*7); // 60 seconds in a minute. 60 minutes in an hour. 24 hr in a day and 7 days in a week. (addming secods)

	// setcookie($name, $value, $expire);
	// setcookie($name);
	// setcookie($name, null, $expire);

	# Best pick
	// setcookie($name, $value, time() - 3600);
 ?>
	

<html>
<head>
	<meta charset="UTF-8">
	<title>Set Cookies</title>
</head>
<body>


	<?php 
	# This code will not show errors even though test2 does not exist because of the if/else and the empty string.
	// if (isset($_COOKIE["test2"])) {
	// 	$test = $_COOKIE["test2"];
	// } else {
	// 	$test = "";
	// }
	// 	echo $test;

	# Simplified to one line

	$test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";
	echo $test;

	 ?>



</body>
</html>