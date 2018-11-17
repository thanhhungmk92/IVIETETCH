
	
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF8">
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>
<body>
	<div class="page">
		<p>Page</p>
		<ul >
		<?php
		$i=1;
		while ($i<=15)
		{?>
			<li class="li_page"><a href="#"><?php echo $i;?></a></li>
			<?php
			    $i++;
		}?>
		</ul>
</div>	
</body>
</html>