<?php 

// // This is how you redirect to a new page
// header("Location: first_page.php");
// exit; // PHP is complete

# Using function for same use

function redirect_to($new_location) {
	header("Location: " . $new_location);
	exit;
}

$logged_in = $_GET['logged_in']; // $_GET : An associative array of variables passed to the current script via the URL parameters.

if ($logged_in == "1") {
	# code...
	redirect_to("http://www.yahoo.com");
} else {
	redirect_to("http://www.google.com");
}

 ?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Page redirection</title>
</head>
<body>

	<?php 

		// Page redirection

		/*
			# Sending person to different page.
			
			#302 Redirect
			-HTTP 1.1/302 Found
			-Location: path

			# header("Location: login.php");


		*/


	 ?>
	
</body>
</html>