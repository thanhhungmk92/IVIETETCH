<?php
$code=filter_input(INPUT_POST,'code');
$id=filter_input (INPUT_POST,'id');
$action=filter_input(INPUT_POST,'action');

$day1=strlen($code); 

$group2=floor($day1/3);

$result="";

if($day1>3)
{
    $result = substr($code,0,3);
    if($group2==1)
            {

                $result .= '-' .substr($code,3,$day1);
            }
    else 
            {
            for ($i=1; $i<$group2+1; $i++) { 

                    if($i<>$group2 && (strlen(substr($code,3*$i,(3*$i)+3))%3)==0){ 
                    $result .= '-' .substr($code,(3*$i),$day1);
                    }
                   
                   else if($i<>$group2 && ($day1%3)<>0)
                    {
                        $result .= '-'.substr($code,(3*$i)+1,$day1);
                    }
                }
            }
        }
else
    if($day1>0)
    {
        $result = substr($code,0,3);
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
  <form action="icode_edit.php" method="post">
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