<?php header("HTTP 1.1/ 404 Not Found"); ?>
<?php header("Y_Powered-By: The future."); ?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Modify Header</title>
</head>
<body>

	<?php 

		// header($string)
		// header("Content-Type: application/pdf");
		// header("HTTP/1.1 404 Not Found");

		# Headers are sent before page

		# Changed must be made before any HTML output
		#	- Before a single space or line return
		#	- Before whitespace in included files
		#	- Can come after whitespace inside PHP tags

		// header("HTTP 1.1/ 404 Not Found"); // wont work since its not before the header

	 ?>
	 <pre>
	 	<?php 
	 		print_r(headers_list());
	 	 ?>
	 </pre>
	
</body>
</html>