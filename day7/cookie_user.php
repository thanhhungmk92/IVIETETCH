<?php
	$users=array();
	$users['u1']=array('ID'=>'1','user_name'=>'hung@gmail.com','password'=>'12345');
	$users['u2']=array('ID'=>'2','user_name'=>'admin@gmail.com','password'=>'12345');
	$users['u3']=array('ID'=>'3','user_name'=>'ngan@gmail.com','password'=>'12345');
	$users['u4']=array('ID'=>'4','user_name'=>'bao@gmail.com','password'=>'12345');
	$users['u5']=array('ID'=>'4','user_name'=>'mai@gmail.com','password'=>'12345');
	$result_check="";
	function check_user($users,$user_name,$password)
	{
		foreach($users as $u => $v)
		{
			$check_value=FALSE;
			if($v['user_name']==$user_name && $v['password']==$password)
			{
				$check_value=TRUE;
				break;
			}
		}
		return $check_value;
	}

	$name="userid"; 
	$value=filter_input(INPUT_POST,'username');
	$pass=filter_input(INPUT_POST,'password');
	$action=filter_input(INPUT_POST,'action');

	if(isset($action))
	{
		$remember=filter_input(INPUT_POST,'remember');
		if(!empty($remember))
		{
			if(isset($value))
			{
			setcookie($name,$value,time()+2*24*60*60);
			}
		}
		if(check_user($users,$value,$pass))
		{
			header("location:welcome.php");
		}
		else
		{
			$result_check = "Username or pass not";
		}
	}
	if(isset($_COOKIE['userid']))
	{
		$user=$_COOKIE['userid'];
	}
	else
	{
		$user="";
	}
	
?>
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
	<form name="email_form" action="cookie_user.php" method="POST">
		<label> User name:</label>
		<input type="text" name="username" id="username"  value="<?php echo $user; ?>" autofocus> <br>
		<label for="password">Pass word:</label>
		<input type="password" name="password" id="password" > <br>
		<input type="checkbox" name="remember" id="remember" value="remember"> Remember me <br>
		<input type="hidden" name="action" value="action" >
		<input type="submit" name="submit" value="Registion" id="button">
		<span><?php  echo $result_check; ?></span>
	</form>

</body>
</html>