<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	.box {
		width:80%;
		margin: 0 auto;

	}
	img {
		width:5%;
	}
</style>
</head>
<body>
	<div class=“box”>
<form action="star.php" method="post">
    <label for="fname">Nhập số:</label>
    <input type="text" id="fname" name="a" placeholder="Cần in bao nhiêu">

  <input type="hidden" value="action" name="action">
    <input type="submit" value="Submit">
  </form>
<br>
</div>
<?php
$n=filter_input(INPUT_POST,'a');
$action=filter_input(INPUT_POST,'action');
if (isset($action)){
	for ($i=1;$i<=$n;$i++){
		for ($j=1;$j<=$i;$j++) { // for(k=1;k<=$n-1;k++) echo <img>
			?>
		<img src="images/c.png">
	<?php
	}
	echo "<br>";
	}
}
?>
</body>
</html>