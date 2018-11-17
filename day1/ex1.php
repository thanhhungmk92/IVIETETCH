<!DOCTYPE html>
<html>
<head>
	<title>Example 1</title>
</head>
<body>
	<?php
	echo "Welcome";
	$first_name=$_GET['firstname'];
	$last_name=$_GET['lastname'];
	echo "<br>";
	echo "Fristname:". $first_name;
	echo "<br>";
	echo "Lastname:". $last_name;
	?>

</body>
</html>