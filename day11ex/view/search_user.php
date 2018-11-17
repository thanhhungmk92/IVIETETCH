<?php
  include_once('../model/user_db.php')
?>
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
		height:200px;
	}
	div h2{
		text-align:center;
	}
	div a{
		list-style: none;
		text-decoration: none;
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
	    margin-top:10px;
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
	<h2> Search User </h2>
	<form name="email_form" action="." method="POST">
		
		<label for="name">Name:</label>
		<input type="text" id="name" name="search_value_user" > <br>

		<input type="hidden" name="action" value="search_user_form" >
		<input type="submit" name="login" value="Search user" id="button"><br>
	
		
	</form>
</div>

</body>
</html>