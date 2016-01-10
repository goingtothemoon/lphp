<?php 
	function hello($name){
		return "Hello {$name}!"
	}

	function redirect_to($new_location)
	{
		# code...
		header("Location: " . $new_location);
		exit;
	}

?>