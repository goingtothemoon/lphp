<html>
<head>
	<meta charset="UTF-8">
	<title>Type Juggling and Type Casting</title>
</head>
<body>

	<!-- gettype — Get the type of a variable -->
	<!-- settype — Set the type of a variable -->

	<b>Type Juggling:</b> <br /><br />
	<?php $count = "2"; // start with a string ?>
	Type: <?php echo gettype($count); ?> <br />

	<?php $count += 3; ?>
	Type: <?php echo gettype($count); // count gets converted to an integer ?> <br /><br /><br />

	Convert integer back to a string: <br /><br />

	<?php $cats = "I have ".$count. " cats."; ?><br />
	Cats: <?php echo gettype($cats); ?><br />
	<br />

	<b>Type Casting:</b> <br />

	<?php settype($count, "integer"); ?><br />
	count: <?php echo gettype($count); ?><br />

	<?php $count2 = (string) $count; ?>
	count: <?php echo gettype($count); ?><br />
	count2: <?php echo gettype($count2); ?><br />
	

	<br />

<?php $test1 = 3; ?>
<?php $test2 = 3; ?>
<?php settype($test1, "string"); ?>
<?php (string) $test2; ?>

test1: <?php echo gettype($test1); // changed to string ?><br />
test2: <?php echo gettype($test2); // did not change ?><br />

</body>
</html>