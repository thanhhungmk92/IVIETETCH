<?php
	$math=filter_input(INPUT_POST,"toan",FILTER_VALIDATE_FLOAT);
	$physics=filter_input(INPUT_POST,"ly",FILTER_VALIDATE_FLOAT);
	$chemistry=filter_input(INPUT_POST,"hoa",FILTER_VALIDATE_FLOAT);
	
	if(is_numeric($math)&&is_numeric($physics)&&is_numeric($chemistry))
	{
		$average=number_format(($math+$physics+$chemistry)/3,2);
	
	
	if ( $average >=8 )
	{
		 $xeploai="Rank is A";

	}
	else if ($average>=6.5 && $average<8)
	{
		 $xeploai="Rank is B";
	}
	else if ($average>=5.0 && $average<6.5)
	{
		$xeploai="Rank is C";
	}
	else if($average<5)
	{
		$xeploai="Rank is D";
	}	
	}
	else
	{
		$average="";
		$xeploai= "Không hợp lệ";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF8">
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>
<body>
	<form name="diem" action="xuly.php" method="post">
		<div id="form">
			<table>
				<tr> <th> ID </th>
					<th> Average </th>
					<th> Xếp loại </th>
				</tr>
				<?php for($i=0;$i<10;$i++) {?>
				<tr>
					<td><?php echo $i+1;?></td>
					<td><?php echo $average;?></td>
					<td><?php echo $xeploai; ?></td>
				</tr>
				<?php } ?>
			</table>
		
		</div>
		
		
	</form>

</body>
</html>