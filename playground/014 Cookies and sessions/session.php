<?php  
	// Sessions use cookies which use headers.
	// Must start before any HTML output
	// unless output buffering is turned on.
	session_start();
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Sessions</title>
</head>
<body>

	<?php  
	/*
		Cookies ->   -> COOKIE
				     -> SESSION # Session support in PHP consists of a way to preserve certain data across subsequent accesses.

		# Pros of a session
			- More storage
			- Smaller request sizes
			- Conceals data values
			- More secure, less hackable

		# Cons
			- Slower to access
			- Expire when browser is closed
			- Session files accumulate

	*/
	?>

	<?php 
		$_SESSION["first_name"] = "Person"; // setting it
		$name = $_SESSION["first_name"]; // reading it
		echo $name;
	?>

</body>
</html>