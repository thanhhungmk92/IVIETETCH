<?php
	include_once('../model/database.php');
	include_once('../model/user_db.php');

	$action = filter_input(INPUT_POST,'action');
	if(empty($action)){
		$action = filter_input(INPUT_GET,'action');
		if (empty($action)){
			$action = 'form_login';
		}
	}
	switch ($action) {
		case 'form_login':
			include_once('../view/login.php');
			break;
		case 'login':
				$email=filter_input(INPUT_POST,'email');
				$pass=filter_input(INPUT_POST,'password');
				// lay tat ca du lieu trong bang users ra bien $user
				$users = get_users();
				// kiem tra xem EMAIL va PASS co trong mang $user khong, neu co
				// thi show ra ket qua
				if (check_user($users,$email,$pass))
				{
					include('../view/list_user.php');
				}
				else
				{
					include('../view/login.php');
					echo " Loi email";
					break;
				}
			break;

			case 'form_register':
				include('../view/register.php');
			break;

			case 'Register': 
			$email=filter_input(INPUT_POST, 'email');
			$pass=filter_input(INPUT_POST, 'password');
			$first_name=filter_input(INPUT_POST, 'first_name');
			$last_name=filter_input(INPUT_POST, 'last_name');
			add_user($email,$pass,$first_name,$last_name);
			include_once('../view/list_user.php');
			break;

			case 'edit_user':

			$ID=filter_input(INPUT_GET,'key');
			include_once('../view/edit_user.php');
			break;

			case 'Update':
			$IDuser=filter_input(INPUT_POST,'IDuser');
			$email=filter_input(INPUT_POST,'email');
			$first_name=filter_input(INPUT_POST,'first_name');
			$last_name=filter_input(INPUT_POST,'last_name');
			update_user($IDuser,$email,$first_name,$last_name);
			include_once('../view/list_user.php');
			break;
		
			case 'delete':
			$ID=filter_input(INPUT_GET,'key');
			delete_user($ID);
			include_once('../view/list_user.php');
			# code...
			break;

			case 'search_user':
			//Lay thong tin can tim
			$search_value = filter_input(INPUT_POST,'search_value');
			if (empty($search_value)){
				$users = get_users();
			}else{
				//Thuc hien ham search_user
				$users = search_user($search_value);
			}
						
			include_once('../view/list_user_search.php');
			break;

	}
?>