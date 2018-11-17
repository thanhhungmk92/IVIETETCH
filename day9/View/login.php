
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	body {
		width:500px;
		margin:30px auto;

	}
	label{
		float:left;
		width:5em;
		text-align: right;
		padding:5px;
	}
	input{
		margin-left: 1em;
		margin-bottom:.5em;
		padding:5px;
	}
	#button {
		margin-left:7.9em;
		padding:5px 20px 5px 20px;
		color:white;
	    background-color: #4CAF50;
	    border: none;
	    border-radius: 4px;
	    cursor: pointer;
	}
	#button:hover {
    background-color: #45a049;
}
	#reset {
		padding:5px 20px 5px 20px;
	}
	input:focus
	{
		border: 2px solid blue;
	}


</style>
</head>
<body>
	<!---hh-->
	<!---trong the input radio buoc ten phai giong nhau-->
	<form name="email_form" action="User_controller.php" method="POST">
		<label> User name:</label>
		<input type="text" name="username" id="username" autofocus> <br>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password" > <br>
		<input type="checkbox" name="remember" id="remember" value="remember"> Remember me <br>
		<input type="hidden" name="action" value="login" >
		<input type="submit" name="login" value="Register" id="button">
		
	</form>

</body>
</html>