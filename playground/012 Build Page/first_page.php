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

<a href="second_page.php?id=<?php echo $id;?>&company=<?php echo rawurldecode($company); ?>"><?php echo $link_name ?></a>

<!-- rawurlencode uses %20 instead of %26 like urlencode -->


<br />

<ul>

	<li>raqurlencode the path</li>
	<li>- Path is the part BEFORE the "?"</li>
	<li>- Spaces must be encoded as %20</li>

	<li>urlencode the query string</li>
	<li>- Query string is the part AFTER the "?"</li>
	<li>- Spaces are better encoded as "+"</li>

	<li>rawurlcode is more compatible generally</li>
	
</ul>

	
</body>
</html>