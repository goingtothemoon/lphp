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
		$username = $_POST["username"]; // Easier to work with instead of always using superglobal
		$password = $_POST["password"];

		echo "{$username}: {$password}";

		// Post data does not need to be incoded or decoded
	 ?>
	
</body>
</html>