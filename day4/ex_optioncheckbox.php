<?php
 $result="";
    $visa= filter_input(INPUT_POST,'Visa');
    $MasterCard= filter_input(INPUT_POST,'MasterCard');
    $Discover= filter_input(INPUT_POST,'Discover');
    $Debit= filter_input(INPUT_POST,'Debit');

    $action= filter_input(INPUT_POST,"action");
    if(isset($action)) 
    {
        $result = "You has choose"." ".$visa." ".$MasterCard." ".$Discover." ".$Debit;
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
        <form action="ex_optioncheckbox.php" method="POST">
            <input type="checkbox" name="Visa" value="Visa"> <label> Visa </label> <br>
            <input type="checkbox" name="MasterCard" value="MasterCard">  <label> MasterCard </label> <br>
            <input type="checkbox" name="Discover" value="Discover"> <label> Discover </label> <br>
            <input type="checkbox" name="Debit" value="Debit"> <label> Debit </label> <br>
             <input type="hidden" name="action" value="action">
            <input type="submit" value="OK">
        </form>
    </div>
        <div class="result">
            <?php echo  "$result"; ?>
        </div>
    

</body>
</html>