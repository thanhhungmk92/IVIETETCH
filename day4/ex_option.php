<?php
 $result="";
    $card_type= filter_input(INPUT_POST,'card_type');
    $action= filter_input(INPUT_POST,"action");
    if(isset($action)) 
    {
        $result = "You has choose $card_type";
    }


?>
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
    .result
    {
        color:blue;
    }
</style>
</head>
<body>
	<!---hh-->
	<!---trong the input radio buoc ten phai giong nhau-->
	<h3>Using CSS to style an HTML Form</h3>

    <div class="box">
        <form action="ex_option.php" method="POST">
            <input type="radio" name="card_type" value="Visa" checked="checked"> <label> Visa </label> <br>
            <input type="radio" name="card_type" value="MasterCard">  <label> MasterCard </label> <br>
            <input type="radio" name="card_type" value="Discover"> <label> Discover </label> <br>
            <input type="radio" name="card_type" value="Debit"> <label> Debit </label> <br>
            <input type="hidden" name="action" value="OK"> 
            <input type="submit" value="OK">

        </form>
        <br>
        </div>
        <div class="result">
            <?php echo  "$result"; ?>
        </div>
    

</body>
</html>