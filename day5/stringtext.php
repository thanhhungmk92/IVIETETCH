<?php
$a=filter_input(INPUT_POST,'a');
$b=filter_input (INPUT_POST,'b');
$action=filter_input(INPUT_POST,'action');
$chuoi="";
$chuoi=strpos($a,$b,0);
if(isset($action))
{
    if($chuoi==NULL)
    {
        $result="Không tìm thấy";
    }
else
   $result= "Postion is:" .$chuoi;
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
	<!---hh-->
    <!---trong the input radio buoc ten phai giong nhau-->
    <h3>Tìm text giống nhau</h3>

<div>
  <form action="stringtext.php" method="post">
    <label for="fname">Chuỗi 1:</label>
    <input type="text" id="fname" name="a" placeholder="String 1">

    <label for="lname">Chuỗi 2:</label>
    <input type="text" id="lname" name="b" placeholder="String 2"> 
   <input type="hidden" value="action" name="action">
    <input type="submit" value="Tìm kiếm">
    <span> <?php echo $result; ?></span>
  </form>
</div>

</body>
</html>