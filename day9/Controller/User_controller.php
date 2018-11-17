<?php
	require_once('../Model/user_db.php');
	global $users;
	$action=filter_input(INPUT_POST,'action');
	if(empty($action))
	{
		$action=filter_input(INPUT_GET,'action');
		if(empty($action))
		{
			$action='form_login';
		}
	}
	switch ($action)
	{
		case 'form_login':
		include('../View/login.php');
		break;
		case 'login':
		$user_name=filter_input(INPUT_POST,'username');
		$password=filter_input(INPUT_POST,'password');
			if(check_user($users,$user_name,$password))
			{
			include('../View/list_user.php');
			}
			break;
		case 'delete':
		$key=filter_input(INPUT_GET,'key');
		delete($users,$key);
		include('../View/list_user.php');
		array_values($users);
	}
?>
