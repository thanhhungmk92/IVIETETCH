<?php
$code=filter_input(INPUT_POST,'code');
$id=filter_input (INPUT_POST,'id');
$action=filter_input(INPUT_POST,'action');
$day1=strlen($code);
$group=round($day1/3,0);
$mod = $day1%3;
$result="";
if($mod>0)
$group= $group+1;
for($i=0;$i<=$group;$i++)
{
    $tmp=substr($code,$i*3,3);
    if($i<$group-1)
    {
        $result=$result.$tmp."-";
    }

    else
        $result=$result.$tmp;
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
   <h3>NGĂN SỐ</h3>

<div>
  <form action="icode.php" method="post">
    <label for="fname">ID:</label>
    <input type="text" id="fname" name="code" placeholder="CODE">

    <label for="lname">CODE:</label>
    <input type="text" id="lname" name="id" placeholder="ID"> 
   <input type="hidden" value="action" name="action">
    <input type="submit" value="Thực hiện">
    <span><?php echo $result; ?></span>
  </form>
</div>

</body>
</html>