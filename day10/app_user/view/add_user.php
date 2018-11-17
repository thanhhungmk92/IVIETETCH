
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	body {
		width:500px;
		margin: 0 auto;

	}
	div 
	{
		margin-top:10px;
		padding: 20px 40px;
		width: 300px;
		
		background-color: #d8eafa;

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
		padding:7px 20px 7px 20px;
		color:white;
	    background-color: #1a80d6;
	    border: none;
	    border-radius: 4px;
	    cursor: pointer;
	    width:170px;
	}
	#button:hover {
    background-color:#0f45c1;
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
	<div>
	<!---hh-->
	<!---trong the input radio buoc ten phai giong nhau-->
	<h2> Add User </h2>
	<form name="email_form" action="." method="POST">
		<label> CodeID:</label>
		<input type="text" name="codeID" id="codeID" autofocus> <br>
		<label for="user_name">Username:</label>
		<input type="text" name="user_name" id="user_name" > <br>

		<label> Password:</label>
		<input type="password" name="password" id="password" autofocus> <br>
		<label for="phone">Phone:</label>
		<input type="text" name="phone" id="phone" > <br>
		<input type="hidden" name="action" value="add_user" >
		<input type="submit" name="login" value="Add user" id="button"><br>
		<label><a href=".?action=show_list_user">List show</a></label>
		
	</form>
</div>

</body>
</html>