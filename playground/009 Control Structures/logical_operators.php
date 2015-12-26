<html>
<head>
	<meta charset="UTF-8">
	<title>Logical operators</title>
</head>
<body>

	<b>Comparison and Logical Operators</b> <br />
	Equal: == <br />
	Identical: === <br />
	Compare: > < >= <= <> <br />
	Not equal: != <br />
	Not identical: !== <br /><br />

	<b>Logical Operators</b> <br />
	and: && <br />
	or: || <br />
	not: ! <br />
----------------------------------------------- <br />

	<?php 

	$a = 4;
	$b = 3;
	$c = 10;
	$d = 1;

	if (($a > $b) && ($c > $d)) {
		# code...
		echo "a is larger than b AND ";
		echo "c is larger than d";
	}

	?><br /><br />

	<?php 

	$a = 4;
	$b = 3;
	$c = 1;
	$d = 10;

	if (($a > $b) || ($c > $d)) {
		# code...
		echo "a is larger than b or ";
		echo "c is larger than d";
	}

	?>
	
</body>
</html>