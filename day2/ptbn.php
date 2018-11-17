
<?php 

$a=$_POST['a']; // $a=filter_inout(INPUT_POST,'a')
$b=$_POST['b'];
if ($a =='' || $b=='')
{
	$result="Giá trị a,b không được để trống";
}
else
{
	if (is_numeric($a) && is_numeric($b) ) //if(empty($action))khacrong
{
	if ($a==0)
	{
	if ($b==0)
	 $result="Phương trình có vô số nghiệm";
	else
	{
	$result="Phương trình vô nghiệm";
	}
	}
	else
	{
	 $result = -($b) /$a;
	}

}
else {

	$result="Giá trị nhập vào phải là số";
}
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
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>
	<!---hh-->
	<!---trong the input radio buoc ten phai giong nhau-->
	<h3>Using CSS to style an HTML Form</h3>

<div>
  <form action="ptbn.php" method="post">
    <label for="fname">Giá trị a:</label>
    <input type="text" id="fname" name="a" placeholder="Hãy nhập giá trị a">

    <label for="lname">Giá trị b:</label>
    <input type="text" id="lname" name="b" placeholder="Hãy nhập giá trị b">
    <input type="submit" value="Submit"> <br>
    <span><?php echo $result; ?></span>
  </form>

</body>
</html>