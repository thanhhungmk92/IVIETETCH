
 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
 $tong = 0;

 for ($j=1; $j < 50; $j++) 
 	{     if( kt($j)==1 )
 		{        
 			$tong = $tong + $j;       
 			echo $j.' - ';    }}
 			echo '<br/>total :'.$tong;
 			
function kt($so){    
	$kq=1;    
	for ($i=2; $i <=sqrt($so) ; $i++) {         
		if ($so%$i==0 && $so>2) {
		 $kq = 0;  break;        
		}   
		 }    return $kq;} 
		 ?>

</body>
</html>