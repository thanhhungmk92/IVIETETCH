
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
		padding:10px 55px 10px 55px;
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
		border: 2px solid #4CAF50;
		box-shadow:0 0 7px #4CAF50;
       
	}
div {
	border:1px solid #4CAF50;
	padding: 30px;
	width: 300px;
	background-color:#fbf3d4;
	border-radius: 10px;
}
div a {
	text-decoration: none;
	color:#4CAF50;
}

</style>
</head>
<body>
	<div>
	<!---hh-->
	<!---trong the input radio buoc ten phai giong nhau-->
	<form name="email_form" action="user_controller.php" method="POST">
		<label> Email:</label>
		<input type="text" name="email" id="username"  autofocus> <br>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password" > <br>
		
		<input type="hidden" name="action" value="login" >
		<input type="submit" name="submit" value="Registion" id="button">
		<br>
		
         <a href="?action=form_register">Register User</a>
          
		
	</form>
</div>

</body>
</html>