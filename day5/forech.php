<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF8">
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
	<style>
	.box {
        width:60%;
        margin: 0 auto;
    }
</style>
</head>
<body>
	<!---hh-->
	<!---trong the input radio buoc ten phai giong nhau-->
	<?php

    $nam = array(
    1990,
    1991,
    1992,
    1993,
    1994,
    1995
);
    foreach ($nam as $key => $value){
    echo $key . ' => ' . $value;
    echo "<br>";
}
    ?>

</body>
</html>