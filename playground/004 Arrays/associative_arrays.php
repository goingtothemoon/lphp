<html>
<head>
	<meta charset="UTF-8">
	<title>Associative Arrays</title>
</head>
<body>

	<h1>Associative Arrays</h1>
	<br />
	An <b>object indexed</b> collection of objects
	<br />
	Not in any ceratin order and can be re-arranged. <br />
	The label is called the key and whats inside the key is the value 
	making a key-value pair.
	<p>
		Basic arrays:
			When order is more important.
	</p><br />
	<p>
		Associative arrays:
			When having a reference label is most important.
	</p><br />

<br />

<?php $assoc = array("first_name" => "Ted", "last_name" => "Dole"); ?>
=> pointing to the next data<br />
The key is first_name the value is Kevin <br /><br />	

<?php echo $assoc["first_name"]; ?><br /><br />	
Still asking for the value (the index) the object is first_name
	
</body>
</html>