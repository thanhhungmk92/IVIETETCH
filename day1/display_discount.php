<?php
	$product_description=$_POST['product_description'];
	$list_price=$_POST['list_price'];
	$discount_percent=$_POST['discount_percent'];

	$discount=$list_price * $discount_percent *.01;
	$discount_price=$list_price-$discount;

	$list_price_formatted = "$".number_format($list_price,2);
	$discount_percent_formatted=$discount_percent."%";
	$discount_formatted= "$".number_format($discount,2);
	$discount_price_formatted="$".number_format($discount_price,2);

	$product_description_escaped=htmlspecialchars($product_description);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF8">
	<title>Product Discount</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="content">
		<h1>Product Discont Calculator</h1>
		
			<div id="data">
				<label> Product Description</label>
				<span><?php echo $product_description_escaped; ?></span><br>

				<label> List Price </label>
				<span><?php echo $list_price_formatted; ?></span><br>

				<label> Standard Discount </label>
				<span><?php echo $discount_percent_formatted; ?></span><br>

				<label> Discount Amount </label>
				<span><?php echo $discount_formatted; ?></span><br>

				<label> Discount Percent </label>
				<span><?php echo $discount_price_formatted; ?></span><br>

			</div>
	</div>

</body>
</html>