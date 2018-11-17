
<?php 
$f1=1;
$f2=1;
$ft=$f1;
$result2=0;

$n=filter_input(INPUT_POST,'n');
$arr=array();

if($n==0)
{
	$result="";
}
else if ($n==1)
{
	$result="$f1";
    $result2=$f1;
    $arr[$n-1]=$f1;
}
else if ($n==2)
{
    $result="$f1,$f2";
    $result2=$f1+$f2;
    $arr[$n-1]=$f2;
}
else
{
	$result="$f1, $f2";
    $result2=2;
	$action=filter_input(INPUT_POST,"action");
	if(isset($action)) {
	for($i=3;$i<=$n;$i++)
     {
	$ft=$f1; //1 1
	$f1=$f2;//1 2
	$f2=$ft+$f2;//2 3
	$result=$result.", $f2";
    $result2=$result2+$f2; 
    
    }
  $arr[$n-1]=$f2;
  
    
    }
}
foreach ($arr as $key=>$value)
  {
    
  }
  function getFibonaci($n)
{
    if($n == 1 || $n == 2)
        return 1;
    else
        return (getFibonaci($n - 1) + getFibonaci($n - 2));
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
  <form action="exfibo.php" method="post">
    <label for="fname">Giá trị n:</label>
    <input type="text" id="fname" name="n" placeholder="Nhập số">

    <input type="hidden" name="action" value="action">
    <input type="submit" value="Submit"> <br>
    <span><?php echo $result; ?></span>
    <br>
    <span><?php echo "Chỉ mục có giá trị lớn nhất là:"." ".$key; ?></span>
    <br>
    <br>
    <span><?php echo $result2; ?></span>
    <br>
    


  </form>

</body>
</html>