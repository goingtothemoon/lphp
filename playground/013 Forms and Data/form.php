<html>
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>


<!-- This is going to post the data to form_processing.php // Method we are using is post -->
	<form action="form_processing.php" method="post">
		<!-- Inside post there will be a value for username -->
		Username: <input type="text" name="username" value="" /><br />
		<!-- Type: password which shows bullets instead of text -->
		Password: <input type="password" name="password" value="" /><br />
		<br />
		<!-- Submit button -->
		<input type="submit" name="submit" value="Submit" />
	</form>
	
</body>
</html>