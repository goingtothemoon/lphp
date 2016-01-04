<html>
<head>
	<meta charset="UTF-8">
	<title>Encoding Get</title>
</head>
<body>
	
	<?php 

		# urlencode(str) : Will take letters, numbers, underscore, and dash are unchanged
		# Reserved characters become % + 2 digit hexidecimal code
		# spaces become + sign

	?>

	<?php $link_name = "Second Page"; ?>
	<?php $id = 5; ?>
	<?php $company = "J & J" ?>

	<a href="second_page.php?id=<?php echo $id;?>&company=<?php echo urlencode($company); ?>"><?php echo $link_name ?></a>

</body>
</html>