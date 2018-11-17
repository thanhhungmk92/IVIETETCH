
<?php 
$f1='';
$ft=0;
$n=filter_input(INPUT_POST,'n');
$arr =array();
if($n==0)
{
	$result="";
}
else
{
	$action=filter_input(INPUT_POST,"action");
	if(isset($action)) {
	for($i=1;$i<=$n;$i++) {
	$ft=$i+$ft;
    $arr[$i] = $i;
	
}
}
	$result="Sum = $ft";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF8">
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
	<style>
	input[type=text], select {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 30%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin-left: 55px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
	width: 30%;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
}
</style>
</head>
<body>
	<!---hh-->
	<!---trong the input radio buoc ten phai giong nhau-->
	<h3>FIBONUMBER</h3>

<div>
  <form action="integer.php" method="post">
    <label for="fname">Giá trị n:</label>
    <input type="text" id="fname" name="n" placeholder="Nhập số">

    <input type="hidden" name="action" value="action">
    <input type="submit" value="Submit"> <br>
    <span><?php echo $result; ?></span>
    <?php foreach($arr as $a) { echo $a." ";}?>
  </form>

</body>
</html>