<html>
<head>
	<meta charset="UTF-8">
	<title>Unsetting Cookie</title>
</head>
<body>

	<?php 
		# Wrong way
			// unset($_COOKIE["user_id"]);

		# Right ways
			// setcookie($name);
			// setcookie($name, null);
			// setcookie($name, $value, (time() - 3600));
	 ?>
	
</body>
</html>