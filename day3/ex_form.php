
<?php
	$user=$_GET['user'];
	$pass=$_GET['pass'];
	$action=$_GET['action'];
	echo "user : $user";
	echo "<br>";
	echo "action: $action";
	echo "<br>";
	echo "Password: $pass";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF8">
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
	<style>
	label {
		float:left;
		width:100px;
	}
	input {
    width: 30%;
    padding: 10px;

  
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
  
}
</style>
</head>
<body>
	<!---hh-->
	<!---trong the input radio buoc ten phai giong nhau-->

<div>
  <form action="ex_form.php" method="GET" none="form_data">
  	<label>User:</label>
  	<input type="text" name="user" value="tan"><br>
  	<label> Password: </label>
  	<input type="Password" name="pass" value='12345'>
  	<input type="hidden" name="action" value="login">
  	<input type="submit" name="sm_form" value="OK">

  </form>
</div>
</body>
</html>