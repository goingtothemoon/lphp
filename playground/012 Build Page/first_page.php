<html>
<head>
	<meta charset="UTF-8">
	<title>First Page</title>
</head>
<body>


<!-- Basic link within a php page	<a href="second_page.php">Second Page</a> -->

<?php $link_name = "Second Page"; // Using PHP # Adding an id ?>

<?php $id = 2; // Links going with diffrent ID's ?>

<a href="second_page.php?id=<?php echo $id; ?>"><?php echo $link_name; ?></a>
	
</body>
</html>