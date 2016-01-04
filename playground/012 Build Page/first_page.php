<html>
<head>
	<meta charset="UTF-8">
	<title>First Page</title>
</head>
<body>


<!-- Basic link within a php page	<a href="second_page.php">Second Page</a> -->

<?php $link_name = "Second Page"; // Using PHP # Adding an id ?>

<?php $id = 5; // Links going with diffrent ID's ?>

<?php $company = "J & J" ?>

<!-- <a href="second_page.php?id=<?php echo $id; ?>"><?php echo $link_name; ?></a> -->

<br />

<a href="second_page.php?id=<?php echo $id;?>&company=<?php echo urlencode($company); ?>"><?php echo $link_name ?></a>
	
</body>
</html>