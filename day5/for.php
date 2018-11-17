<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF8">
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
	<style>
	.box {
        width:60%;
        margin: 0 auto;
    }
</style>
</head>
<body>
	<!---hh-->
	<!---trong the input radio buoc ten phai giong nhau-->
	<label>Interest Rate:</label>
    <select>
        <?php for($v=5;$v<=12;$v++) :?>
        <option>
            <?php echo $v;?>
        </option>
    <?php endfor; ?>
    </select>
    <br>

</body>
</html>