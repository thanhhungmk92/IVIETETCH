<?php
$key = filter_input(INPUT_GET,'key');
  $bookID =$_SESSION['user'][$key]['bookID'];
  $name=$_SESSION['user'][$key]['name'];
  $authur=$_SESSION['user'][$key]['authur'];
  $year=$_SESSION['user'][$key]['publishingyear'];
  $production=$_SESSION['user'][$key]['production'];
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
		height:400px;
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
		<input type="hidden" name="key" value="<?php echo $key; ?>">
		<label> BookID:</label>
		<input type="text" name="bookID" id="bookID" autofocus value ="<?php echo $bookID?>"> <br>
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" value ="<?php echo $name?>"> <br>

		<label> Authur:</label>
		<input type="Authur" name="authur" id="authur" autofocus value ="<?php echo $authur?>"> <br>
		<label for="publishingyear">Year:</label>
		<input type="text" name="publishingyear" id="publishingyear" value ="<?php echo $year?>" > <br>
		<label for="production">Production:</label>
		<input type="text" name="production" id="production" value ="<?php echo $production?>" > <br>

		<input type="hidden" name="action" value="update_user" >
		<input type="submit" name="login" value="Update" id="button"><br>
		<p><a href=".?action=show_list_user">List show</a></p>
		
	</form>
</div>

</body>
</html>