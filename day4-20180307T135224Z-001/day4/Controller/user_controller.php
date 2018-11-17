<?php
	require_once('../Model/database.php'); 
	require_once('../Model/user_db.php');
	global $users;
	
	$action=filter_input(INPUT_POST,'action');
	if (empty($action)){
		$action=filter_input(INPUT_GET,'action');
		if(empty($action)){
			$action='form_login';
		}
	}
	switch ($action) {
		case 'form_login':
			include('../View/login.php');
			break;
		case 'login':
			//Lay email va pass
			$email=filter_input(INPUT_POST, 'email');
			$pass=filter_input(INPUT_POST, 'pass');
			//lay tat ca du lieu trong bang users_table ra bien $users
			$users = get_users();
			// kiem tra xem $email va $pass co trong mang $users khong, neu co thi vao trang chu con khong thi thong bao email va pass khong hop le
			if (check_user($users,$email,$pass)){
				include('../View/list_user.php');
			} 
			else{
				include('../View/login.php');
				echo "Error email or pass";
				break;
			}
			break;
		case 'form_register':
				include('../View/register.php');
			break;
		case 'register':
			$email=filter_input(INPUT_POST, 'email');
			$pass=filter_input(INPUT_POST, 'pass');
			$first_name=filter_input(INPUT_POST, 'first_name');
			$last_name=filter_input(INPUT_POST, 'last_name');
			add_user($email,$pass,$first_name,$last_name);
			include_once('../View/list_user.php');
			break;
	}

?>