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
	Since we want to read what's in the array whe need to use print_r which is print readable. <br />
	Text in a <b>pre</b> element is displayed in a fixed-width font, and it preserves both spaces and line breaks
	
	<pre>
		<?php echo print_r($mixed); ?><br />
	</pre>
	<br />
	<?php echo $mixed[4][1] ?><br />
	<br />
	<?php $mixed[2] = "cat"; ?><br />
	We are changing value 2 to cat
	<?php $mixed[4] = "mouse"; ?><br />
	Adding mouse to value 4
	<?php $mixed[] = "horse"; ?><br />
	Using [] will automatically put the value at the end of the array.

	<pre>
		<?php echo print_r($mixed) ?>
	</pre>

</body>
</html>