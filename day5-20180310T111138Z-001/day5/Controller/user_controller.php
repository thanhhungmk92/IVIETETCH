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
			if (check_user($users,$email,md5($pass))){
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
			add_user($email,$pass,$first_name,$last_name);
			include_once('../View/list_user.php');
			break;
		case 'edit_user':
			$ID=filter_input(INPUT_GET,'key');
			include_once('../View/edit_user.php');
			break;
		case 'update_user':
			//Lay thong tin tu form edit_user
			$ID=filter_input(INPUT_POST,'IDuser');
			$email=filter_input(INPUT_POST, 'email');
			$first_name=filter_input(INPUT_POST, 'first_name');
			$last_name=filter_input(INPUT_POST, 'last_name');
			// Goi ham update user
			update_user($ID,$email,$last_name,$first_name);
			include_once('../View/list_user.php');
			break;
		case 'delete_user':
			//Lay thong tin ID cua user can xoa
			$ID=filter_input(INPUT_GET,'key');
			//Thuc hien ham delete_user
			$count_delete = delete_user($ID);
			echo "count delete : ".$count_delete;
			include_once('../View/list_user.php');
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
						
			include_once('../View/list_user_search.php');
			break;
	}

?>