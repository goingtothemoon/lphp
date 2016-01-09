<html>
<head>
	<meta charset="UTF-8">
	<title>Form Processing</title>
</head>
<body>

	<pre>
		<?php 
			print_r($_POST);
		 ?>
	</pre>
	<br />

	<?php 
		// set default values

		if (isset($_POST["username"])) {  // isset — Determine if a variable is set and is not NULL
			# code...
		$username = $_POST["username"]; // Easier to work with instead of always using superglobal
		} else {
			$username = ""; // Default
		}
		if (isset($_POST["password"])) {
			# code...
			$password = $_POST["password"];
		} else {
			$password = ""; // Default
		}
	?>

	<?php 
		// set default values using ternary operator (faster way)
		// # Another conditional operator is the "?:" (or ternary) operator.

		$username = isset($_POST['username']) ? $_POST['username'] : "";
		$password = isset($_POST['password']) ? $_POST['password'] : "";
	 ?>
	
	<?php 
		// detect form submission
		// form.php line 18; must have name submit for this to work

		if (isset($_POST['submit'])) {
			echo "form was submitted";
		}

		

	 ?>



	<?php
		echo "{$username}: {$password}";

		// Post data does not need to be incoded or decoded

	 ?>
	
</body>
</html>