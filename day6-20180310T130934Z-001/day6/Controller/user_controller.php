<?php
	require_once('../Model/database.php'); 
	require_once('../Model/user_db.php');
	
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
			$pass=md5($pass);
			//lay tat ca du lieu trong bang users_table ra bien $users
			
			$users = userDB::get_users();
			// kiem tra xem $email va $pass co trong mang $users khong, neu co thi vao trang chu con khong thi thong bao email va pass khong hop le
			if (userDB::check_user($users,$email,$pass)){
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
			$pass=md5($pass);// Ma hoa md5 cho password
			$first_name=filter_input(INPUT_POST, 'first_name');
			$last_name=filter_input(INPUT_POST, 'last_name');
			$user = new user($email,$pass,$first_name,$last_name);
			userDB::add_user($user);
			include_once('../View/list_user.php');
			break;
		case 'edit_user':
			$ID=filter_input(INPUT_GET,'key');
			include_once('../View/edit_user.php');
			break;
		case 'update_user':
			//Lay thong tin tu form edit_user
			$ID=filter_input(INPUT_POST,'IDuser');
			$u= userDB::get_user_by_ID($ID);
			$pass = $u->getPassword();
			$email=filter_input(INPUT_POST, 'email');
			$first_name=filter_input(INPUT_POST, 'first_name');
			$last_name=filter_input(INPUT_POST, 'last_name');
			// Goi ham update user
			$user = new user($email,$pass,$first_name,$last_name);
			userDB::update_user($ID,$user);
			include_once('../View/list_user.php');
			break;
		case 'delete_user':
			//Lay thong tin ID cua user can xoa
			$ID=filter_input(INPUT_GET,'key');
			//Thuc hien ham delete_user
			$count_delete = userDB::delete_user($ID);			
			echo "count delete : ".$count_delete;
			include_once('../View/list_user.php');
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
						
			include_once('../View/list_user_search.php');
			break;
	}

?>