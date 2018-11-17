
<?php 
$month=filter_input(INPUT_POST,'thang');
$year=filter_input(INPUT_POST,'nam');
$action=filter_input(INPUT_POST,"action");
$result="";
if(isset($action)){
    switch ($month) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
        $result="There are 31 day";
        break;
        case 4:
        case 6:
        case 9:
        case 11:
        $result="There are 30 day";
        break;
        case 2:
        if ($year %4 ==0)
        {
            if($year %100 ==0)
            {
                if($year % 400==0)
                {
                    $result="There are 29 day";
                }
                else
                {
                    $result="There are 28 day";
                }
            }
            else
                {
                     $result="There are 29 day";
                }
            }
         else
            {
                 $result="There are 28 day";
            }


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
	<h3>MONTH</h3>

<div>
  <form action="month.php" method="post">
    <label for="fname">month:</label>
    <input type="text" id="fname" name="thang" placeholder="Nhập tháng">
     <label for="fname">year:</label>
    <input type="text" id="fname" name="nam" placeholder="Nhập năm">

    <input type="hidden" name="action" value="action">
    <input type="submit" value="Submit">
  </form>
</div>
 <div> <?php echo $result; ?> </div>
</body>
</html>