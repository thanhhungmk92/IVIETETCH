
<?php
	 $users=array();
	$users['u1']=array('ID'=>'1','user_name'=>'hung@gmail.com','password'=>'12345','firstname'=>'Thanh','lastname'=>'Hung');
	$users['u2']=array('ID'=>'2','user_name'=>'admin@gmail.com','password'=>'12345','firstname'=>'Thi','lastname'=>'Trang');
	$users['u3']=array('ID'=>'3','user_name'=>'ngan@gmail.com','password'=>'12345','firstname'=>'My','lastname'=>'Hanh');
	$users['u4']=array('ID'=>'4','user_name'=>'bao@gmail.com','password'=>'12345','firstname'=>'Phung','lastname'=>'Mai');
	$users['u5']=array('ID'=>'5','user_name'=>'mai@gmail.com','password'=>'12345','firstname'=>'Yen','lastname'=>'Nhi');
	$lifetime=2*14*60*60;
	session_set_cookie_params($lifetime,'/');
	session_start();
// function check information
	function check_user($users,$user_name,$pass)
	{
		$check_value=FALSE;
		foreach($users as $u => $v)
		{
			
			if($v['user_name']==$user_name && $v['password']==$pass)
			{
				$check_value=TRUE;
				break;
			}
		}
		return $check_value;
	}
	//function delete information user
	function delete($users,$key)
	{
		unset($users[$key]);
		array_values($user);

	}
	function add_user($user,$user_name,$pass,$firstname,$lastname)
	{
		$item=array('user_name'=>$user_name,'password'=>$pass,'firstname'=>$firstname,'lastname'=>$lastname);
		$users[]=$item;
		$i++;
		$_SESSION['USER'][$i]=$item; //TU DAT TEN SESSION,

	}
	//function update information user
	//function add information user

	?>