<html>
<head>
	<meta charset="UTF-8">
	<title>Strings</title>
</head>
<body>

	<?php 
	# Think of string being text

	echo "Hello this is a string<br />";
	echo 'Hello this is a string<br />';

	# You can use "" or '' to make your string.

	# Assigning stings to  variables

	$greeting = "Hello";
	$greeting2 = "String!";
	$complete = $greeting. " ". $greeting2;

	echo $complete;


	 ?>

	 <br />
	 
	 <?php 
	 # Variable replacement inside a string.
	 echo "$complete Again<br />";

	 # What happends when using '' instead of ""
	 echo '$complete using diff. method';
	 # It does not to the subsitution

	 # Inline replacement
	 echo "{$phrase}Again<br />";
	 // If you dont have a space you can use curly braces in order to call the variable

	  ?>
	
</body>
</html>