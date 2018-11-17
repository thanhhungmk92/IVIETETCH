<?php
$card_type=filter_input(INPUT_POST,'card_type');
$action = filter_input (INPUT_POST,'action');
$result="";
if (isset($action))
{
    $result= "Gia tri : $card_type";
}
else
{
    $result="";
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
</style>
</head>
<body>
	<!---hh-->
	<!---trong the input radio buoc ten phai giong nhau-->
    <div class="box">
        <form action="ex_select.php" method="POST">
            <select name="card_type">
                <option value="Visa" > Visa2 </option>
                <option value="Master" > Master </option>
                <option value="Discover" > Discover </option>
                <option value="Debit" > Debit </option>
            </select>
            <input type="hidden" value="action" name="action">
            <input type="submit" value="submit"><BR>
            <div> <?php echo $result; ?> </div>
             </form>
    </div>
    
    

</body>
</html>