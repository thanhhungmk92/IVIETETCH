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
	//Update user
	function update_user($ID,$email,$last_name,$first_name){
		global $db;
		try{
			$query = 'UPDATE users_table
					 SET email=:email, last_name=:last_name, first_name=:first_name
					 WHERE IDuser=:ID';
			$statement = $db->prepare($query);
			$statement->bindValue(':email',$email);			
			$statement->bindValue(':first_name',$first_name);
			$statement->bindValue(':last_name',$last_name);
			$statement->bindValue(':ID',$ID);
			$statement->execute();
			$statement->closeCursor();
		} catch(PDOException $e){
			echo "Error Update database";
		}
	}
	
	function get_user_by_ID($ID){
		global $db;
		$query = 'SELECT * FROM users_table 
				  WHERE IDuser=:ID	
				  ORDER BY IDuser ASC';
		try {
			$statement = $db ->prepare($query);
			$statement->bindValue(':ID',$ID);		
			$statement -> execute();
			$result = $statement-> fetch();
			$statement-> closeCursor();
			return $result;

		} catch (PDOException $e){
			echo "Error get data";
		}
	}
	// delete user
	function delete_user($ID){
		global $db;
		$query = 'DELETE FROM users_table
				  WHERE IDuser=:ID';
		try {
			$statement = $db-> prepare($query);
			$statement-> bindValue(':ID',$ID);
			$statement -> execute();
			$result_count = $statement->rowCount();// tra ve so dong thoa man cau lenh truy van
			$statement-> closeCursor();
			return $result_count;
		} catch (PDOException $e){
			echo "Error delete data";
		}
	}
	// Function search user
	function search_user($value){
		global $db;
		$query = "SELECT * FROM users_table 
				 WHERE 	email=:value OR first_name like '%".":value"."%' OR last_name =:value 
				 ORDER BY IDuser ASC";
		try {
			$statement = $db ->prepare($query);
			$statement-> bindValue(':value',$value);
			$statement -> execute();
			$result = $statement-> fetchAll();
			$statement-> closeCursor();
			return $result;

		} catch (PDOException $e){
			echo "Error get database";
		}
	}
	
?>