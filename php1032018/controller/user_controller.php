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
				//$pass=md5($pass);
				// lay tat ca du lieu trong bang users ra bien $user
				$users = userDB::get_users();
				// kiem tra xem EMAIL va PASS co trong mang $user khong, neu co
				// thi show ra ket qua
				if (userDB::check_user($users,$email,$pass))
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
			//$pass=md5($pass);// Ma hoa md5 cho password
			$first_name=filter_input(INPUT_POST, 'first_name');
			$last_name=filter_input(INPUT_POST, 'last_name');
			$user=new user($email,$pass,$first_name,$last_name);
			userDB::add_user($user);
			include_once('../view/list_user.php');
			break;

			case 'edit_user':

			$ID=filter_input(INPUT_GET,'key');
			include_once('../view/edit_user.php');
			break;

			case 'Update':
			$ID=filter_input(INPUT_POST,'IDuser');
			$u=userDB::get_users_by_ID($ID);
			$pass=$u->getPassword();
			$email=filter_input(INPUT_POST,'email');
			$first_name=filter_input(INPUT_POST,'first_name');
			$last_name=filter_input(INPUT_POST,'last_name');
			$user=new user($email,$pass,$first_name,$last_name);
			userDB::update_user($ID,$user);
			include_once('../view/list_user.php');
			break;
		
			case 'delete':
			$ID=filter_input(INPUT_GET,'key');
			$count_delete=userDB::delete_user($ID);
			echo "Count delete:".$count_delete;
			include_once('../view/list_user.php');
			# code...
			break;

			case 'search_user':
			//Lay thong tin can tim
			$search_value = filter_input(INPUT_POST,'search_value');
			if (empty($search_value)){
				$users = userDB::get_users();
			}else{
				//Thuc hien ham search_user
				$users = userDB::search_user($search_value);
			}
						
			include_once('../view/list_user_search.php');
			break;

	}
?>