<html>
<head>
	<meta charset="UTF-8">
	<title>Array Functions</title>
</head>
<body>

	<?php  

		$numbers = array(8, 23, 15, 42, 16, 4 );

	?>

	<br />
	
	Count: <?php echo count($numbers);  ?><br />

	Max Value: <?php echo max($numbers);  ?><br />

	Min Value: <?php echo min($numbers); ?><br />

	<br />

	We can also sort these values<br />

	<pre>
	Sort: <?php sort($numbers); print_r($numbers); ?><br />
	</pre>

	<pre>
	Reverse sort: <?php rsort($numbers); print_r($numbers); ?><br />
	</pre>
	<br />

	Turn an Array into a String! <br />
	Implode: <?php echo $num_string = implode(" * ", $numbers); ?><br />
	Explode: <?php print_r(explode(" * ", $num_string)); ?><br />
	<br />

	15 in array?: <?php echo in_array(15, $numbers); // returns true or false ?><br />
	19 in array?: <?php echo in_array(19, $numbers); // return true or false ?><br />

	<br />

	


	
</body>
</html>