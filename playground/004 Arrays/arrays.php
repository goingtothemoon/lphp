<html>
<head>
	<meta charset="UTF-8">
	<title>Arrays</title>
</head>
<body>

	<?php 
		/*
		  An array is an ordered interger-indexed collection of objects.

		  Arrays are like files with unlimited amount
		  Can contain a string, number, or even another array
		*/ 

		  $numbers = array(4,8,10,12,15,62);
		  # The numberes will always be in this order

		  echo $numbers[3]
		  # Need to provied the index(position) in this case I use 3 which
		  # should show number 12 since programing lang. count from 0.


	?>

	<?php $mixed = array(7, "dog", 8, "pig", array("A", "B", "C")); ?><br />
	<?php echo $mixed[2] ?><br />
	<?php // echo $mixed[4] ?><br />
	<?php // echo $mixed ?><br />

	<br />
	Since we want to read what's in the array whe need to use print_r which is print readable.
	
	<pre>
		<?php echo print_r($mixed); ?><br />
	</pre>
	<br />
	<?php echo $mixed[4][1] ?><br />

</body>
</html>