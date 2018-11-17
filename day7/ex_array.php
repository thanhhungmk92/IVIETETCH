
<?php 
    $arr = array(1,5,3,23,15,50,22,9,27,29);
    $result="";

    for($i=0;$i<10;$i++)
    {
        $result=$result.$arr[$i]." ";
    }
    // Kiem tra so co trong day so

function kiemtra ($arr,$so)
{
    $result_searcha="Value is not found";
    for($i=0;$i<10;$i++)
    {
        if ($so==$arr[$i])
        {
        $result_searcha="Thấy ở vị trí $i của mảng";
        break;
    }
    }
        return $result_searcha;
}
   $action=filter_input(INPUT_POST,"action");
    $son=filter_input(INPUT_POST,"so");
    $result_searchb="";
    if(isset($action))
    {
        $result_searchb=kiemtra($arr,$son);
    }

    //Find max array
    function SLN($arr)
    {
          $max=$arr[0];
    $result_max="";
    for($i=1;$i<10;$i++)
        {
            if($max<$arr[$i])
        {
            $max=$arr[$i];
        }
         }
         return $max;
    }

    $result_max="Max array:" .SLN($arr);

    //Sum max
    function Tong($arr)
    {
        $sum=0;
    $result_sum="";
    for($i=0;$i<10;$i++) //for each($ar askey => $value)
    {
        $sum=$sum + $arr[$i];
    }
    return $sum;
    }
    
    $result_sum="Sum of array:".Tong($arr);


    //sort all array
   
            $kq="";
    $tam="";
    $sx2=$arr[0];
    for($i=0;$i<9;$i++) 
    {
        for($j=$i+1;$j<10;$j++)
        {
            if($arr[$i]<$arr[$j])
            {
                $t=$arr[$i];
                $arr[$i]=$arr[$j];
                $arr[$j]=$t;

            }
        }
    }
    $result_sort="sort array";
    foreach ($arr as $key => $value)
{
        $result_sort=$result_sort." ".$value;
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
    <h3>Array</h3>

<div>
  <form action="" method="post">
    <label for="fname">Chuỗi 1:</label>
    <input type="text" id="so" name="so" placeholder="Nhap so ">

   <input type="hidden" value="action" name="action">
    <input type="submit" value="Tìm kiếm">
    <span><?php echo $result; ?> </span> <br>
    <span> <?php echo $result_searchb;?></span> <br>
     <span> <?php echo $result_max;?></span> <br>
     <span> <?php echo $result_sum;?></span> <br>
     <span> <?php echo $result_sort;?></span> <br>
  </form>
</div>

</body>
</html>