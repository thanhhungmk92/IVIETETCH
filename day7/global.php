<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$a=20;
	function showa()
	{
		global $a;
		echo "a = ".$a; // refer to the global varibale name $a;
	}
	showa();
	?>

</body>
</html>