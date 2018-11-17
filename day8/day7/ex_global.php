<!DOCTYPE html>
<html>
<head>
	<title>Access a global variable</title>
</head>
<body>
	<h1>Access a global variable</h1>
	<?php
		$a=20;
		//define function show
		function show_a(){
			global $a; // Refers to the global variable named $a;
			echo "a = ".$a;
		}
		// Call function show
		show_a();
	?>
</body>
</html>