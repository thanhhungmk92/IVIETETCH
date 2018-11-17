
<?php 
$a=$_POST['a']; //$a=filter_input(INPUT_POST,'a');
$b=$_POST['b'];
$c=$_POST['c'];

if ($a =='' || $b=='' || $c=='')
{
	$result="Giá trị a,b,c không được để trống";
}
else
	if (is_numeric($a) && is_numeric($b) &&  is_numeric($c))
{
	if($a==0)
	{
		if ($b==0)
		{
		if ($c==0)
			 $result="Phương trình có vô số nghiệm";
		else
			{
			$result="Phương trình vô nghiệm";
			}
		}
	else
	{
	$nghiem = -($c) /$b;
	 $result = "Phương trình có nghiệm là : $nghiem";
	}
	}
	else
	{
		$delta=pow($b,2) - 4*$a*$c;
		if ($delta<0)
		{
			$result="Phương trình vô nghiệm";
		}
		else if ($delta==0)
		{
			$x=(-$b)/2*$a;
			$result="Phương trình có nghiệm kép: $x";
		}
		else
		{
			$x1=(-$b+sqrt($delta))/(2*$a);
			$x2=(-$b-sqrt($delta))/(2*$a);
			$result="Phương trình có 2 nghiệm  x1: $x1 và x2 : $x2";

		}
	}


}
	else 
	{
		$result="Gia trị nhập vào phải là số";
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
	<h3>Phương trình bậc 2</h3>

<div>
  <form action="ptbn2.php" method="post">
    <label for="fname">Giá trị a:</label>
    <input type="text" id="fname" name="a" placeholder="Hãy nhập giá trị a">

    <label for="lname">Giá trị b:</label>
    <input type="text" id="lname" name="b" placeholder="Hãy nhập giá trị b">
       <label for="lname">Giá trị c:</label>
    <input type="text" id="lname" name="c" placeholder="Hãy nhập giá trị c">
    <input type="submit" value="Submit"> <br>
    <span><?php echo $result; ?></span>
  </form>

</body>
</html>