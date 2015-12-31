<html>
<head>
	<meta charset="UTF-8">
	<title>Scope and Global Variables</title>
</head>
<body>

		<?php 

			// A variable in a function can only be used in the function which is the variables scope
			// Global Scope and Local Scope

			$bar = "outside"; // global scope

			function foo() {
				// The global keyword is used to manipulate variable scope, and there is also the concept of super 
				// globals in PHP, which are special variables with a global scope.

				global $bar; // "Like opening a window for a home" this sets bar to global
					// isset — Determine if a variable is set and is not NULL
				if (isset($bar)) {
					echo "foo: " . $bar . "<br />"; // wont work once its exits the function it will use global scope
				}

				$bar = "inside"; // local scope (diffrent from global)
			}

			echo "1: " . $bar . "<br />"; // looking at the value of bar

			foo(); // calling foo function. Since we call this function it will not vall the $bar inside becuase of global

			echo "2: " . $bar . "<br />"; // now calling from foo function

		 ?>
	
</body>
</html>