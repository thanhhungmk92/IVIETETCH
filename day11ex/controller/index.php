<?php
	$lifetime=10*24*60*60;
	session_set_cookie_params($lifetime,'/');
	session_start();
	//$_SESSION['user']=array();
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
		$bookID= filter_input(INPUT_POST,'bookID');
		$name= filter_input(INPUT_POST,'name');
		$authur= filter_input(INPUT_POST,'authur');
		$year= filter_input(INPUT_POST,'publishingyear');
		$production= filter_input(INPUT_POST,'production');
		$u = new user ($bookID,$name,$authur,$year,$production);
		$u->set_SESSION();
		include_once('../view/list_user.php');
		break;

		
		case 'form_update_user':
		include_once('../view/edit_user.php');
		break;
		case 'update_user':
			$key=filter_input(INPUT_POST,'key');
			$bookID= filter_input(INPUT_POST,'bookID');
			$name= filter_input(INPUT_POST,'name');
			$authur= filter_input(INPUT_POST,'authur');
			$year= filter_input(INPUT_POST,'publishingyear');
			$production= filter_input(INPUT_POST,'production');
			unset($_SESSION['user'][$key]);
			array_values($_SESSION['user']); // tra lai mang user
			$user=array('bookID'=>$bookID,'name'=>$name,'authur'=>$authur,'publishingyear'=>$year,'production'=>$production);
			$_SESSION['user'][$bookID]=$user;
			include_once('../view/list_user.php');
			break;

		case 'delete_user':
        $key=filter_input(INPUT_GET,'key');
        unset($_SESSION['user'][$key]);
        include('../view/list_user.php');
        break;

        case 'search_user':
		include_once('../view/search_user.php');
		break;

        case 'search_user_form':
			$value = filter_input(INPUT_POST,'search_value_user');
			if (empty($value)){
				include_once('../view/list_user.php');
			}
			else{
				include_once('../view/list_search_user.php');
			}
			
			break;


	}
?>