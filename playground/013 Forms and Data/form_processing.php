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
		if(isset($_POST]"username"])){  // isset — Determine if a variable is set and is not NULL
			# code...
		$username = $_POST["username"]; // Easier to work with instead of always using superglobal
		}
		if (isset($_POST["password"])) {
			# code...
			$password = $_POST["password"];
		}
		


		echo "{$username}: {$password}";

		// Post data does not need to be incoded or decoded
	 ?>
	
</body>
</html>