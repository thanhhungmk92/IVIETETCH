<?php
	function get_users(){
		global $db;
		$query = 'SELECT * FROM users_table ORDER BY IDuser ASC';
		try {
			$statement = $db ->prepare($query);
			$statement -> execute();
			$result = $statement-> fetchAll();
			$statement-> closeCursor();
			return $result;

		} catch (PDOException $e){
			echo "Error get database";
		}
	}
	// kiem tra user co ton tai trong mang users khong
	function check_user($users,$email,$pass){
		$check_value=FALSE;
	    foreach($users as $u => $v){
	      if($v['email']==$email && $v['password']==$pass){
	        $check_value=TRUE;
	        break;
	      }      
	    }
    	return $check_value;
	}
	//Them du lieu vao database userdb
	function add_user($email,$password,$last_name,$first_name){
		global $db;
		try{
			$query='INSERT INTO users_table(email,password,first_name,last_name)
			VALUES (:email,:password,:first_name,:last_name)';
			$statement = $db->prepare($query);
			$statement->bindValue(':email',$email);
			$statement->bindValue(':password',$password);
			$statement->bindValue(':first_name',$first_name);
			$statement->bindValue(':last_name',$last_name);
			$statement->execute();
			$statement->closeCursor();
		} catch (PDOException $e){
			echo "Error Insert database";
		}
				
	}

?>