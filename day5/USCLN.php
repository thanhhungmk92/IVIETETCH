﻿<?php
$a=filter_input(INPUT_POST,'a');
$b=filter_input (INPUT_POST,'b');
$action=filter_input(INPUT_POST,'action');
if(isset($action))
{
    while($a!=$b) 
    {
        if($a>$b)                 
        {
           $a=$a-$b; 
        }
       else
        $b=$b-$a; 
    }
    $result=$a;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF8">
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
	<style>
	input[type=text] {
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
	<h3>ƯỚC SỐ CHUNG LỚN NHẤT</h3>

<div>
  <form action="USCLN.php" method="post">
    <label for="fname">Giá trị a:</label>
    <input type="text" id="fname" name="a" placeholder="Nhập số thứ nhất">

    <label for="lname">Giá trị b:</label>
    <input type="text" id="lname" name="b" placeholder="Nhập số thứ hai">
   
   <input type="hidden" value="action" name="action">
    <input type="submit" value="Submit">
    <span> <?php echo $result; ?></span>
  </form>
</div>

</body>
</html>