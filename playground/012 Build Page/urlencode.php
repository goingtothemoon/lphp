<html>
<head>
	<meta charset="UTF-8">
	<title>First Page</title>
</head>
<body>


<!-- Basic link within a php page	<a href="second_page.php">Second Page</a> -->

<?php 

# using urlencode and rawirlencode

	$page = "Will Smith";
	$quote = "Throughout life people will make you mad";
	$link1 = "/bio/" . rawurlencode($page) . "?quote=" .
	urlencode($quote);
	$link2 = "/bio/" . urlencode($page) . "?quote=" .
	rawurlencode($quote);

	echo $link1 . "<br />";
	echo $link2 . "<br />";

 ?>

	
</body>
</html>