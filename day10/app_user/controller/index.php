<?php
	$lifetime=10*24*60*60;
	session_set_cookie_params($lifetime,'/');
	session_start();
	include_once('../model/user_db.php');
	$action=filter_input(INPUT_POST,'action');
	if(empty($action))
	{
		$action=filter_input(INPUT_GET,'action');
		if (empty($action))
		{
			$action='form_add_user';
		}
	}
	switch ($action)
	{
		case 'form_add_user':
		include_once('../view/add_user.php');
		break;
		
		case 'show_list_user':
		include_once('../view/list_user.php');
		break;
		case 'add_user':
		$codeID= filter_input(INPUT_POST,'codeID');
		$user_name= filter_input(INPUT_POST,'user_name');
		$password= filter_input(INPUT_POST,'password');
		$phone= filter_input(INPUT_POST,'phone');
		$u = new user ($codeID,$user_name,$password,$phone);
		$u->set_SESSION();
		include_once('../view/list_user.php');
		break;

		case 'update_user':
		include_once('../view/edit_user.php');
		break;


	}
?>
