<?php
		function get_users()
		{
			global $db;
			$query = 'SELECT * FROM users_table ORDER BY IDuser ASC';
		
		try
		{
			$statement = $db -> prepare($query);
			$statement -> execute();
			$result = $statement -> fetchAll();
			$statement->closeCursor();
			return $result;

		}
		catch (PDOException $e)
		{
			display_db_error($e->getMessage());

		}
	}

	function check_user($users,$email,$password)
	{
		foreach($users as $u => $v)
		{
			$check_value=FALSE;
			if($v['email']==$email && $v['password']==$password)
			{
				$check_value=TRUE;
				break;
			}
		}
		return $check_value;
	}

	function add_user($email,$password,$first_name,$last_name)
	{
		global $db;
		try {
		$query ='INSERT INTO users_table(email,password,first_name,last_name)
		VALUES (:email,:password,:first_name,:last_name)';
		$statement = $db->prepare($query);
		$statement->bindValue (':email',$email);
		$statement->bindValue (':password',$password);
		$statement->bindValue (':first_name',$first_name);
		$statement->bindValue (':last_name',$last_name);
		$statement->execute();
		$statement->closeCursor();
	} catch (PDOException $e)
	{
		echo "Error Insert database";
	}

	}

	//Update user
	function update_user($ID,$email,$first_name,$last_name)
	{
		global $db;
		try
		{
			$query='UPDATE users_table SET email=:email,first_name=:first_name,last_name=:last_name WHERE IDuser=:ID';
			$statement = $db->prepare($query);
			$statement->bindValue (':ID',$ID);
			$statement->bindValue (':email',$email);
			$statement->bindValue (':first_name',$first_name);
			$statement->bindValue (':last_name',$last_name);
			$result=$statement->execute();
			$statement->closeCursor();
		}
		catch(PDOException $e)
		{
		echo "Error Insert database";
		}
	}

	function delete_user($ID)
	{
		global $db;
		$query='DELETE FROM users_table WHERE IDuser=:ID';
		try
		{
			$statement = $db->prepare($query);
		$statement->bindValue (':ID',$ID);
		$statement->execute();
		$statement->closeCursor();
		}
		catch(PDOException $e)
		{
		echo "Error Insert database";
		}
	}

		function get_users_by_ID($ID)
		{
			global $db;
			$query = 'SELECT * FROM users_table WHERE IDuser=:ID ORDER BY IDuser ASC';
		
		try
		{
			$statement = $db -> prepare($query);
			$statement->bindValue (':ID',$ID);
			$statement ->execute();
			$result = $statement ->fetch();
			$statement->closeCursor();
			return $result;

		}
		catch (PDOException $e)
		{
			echo "Error Insert database";

		}
	}
	
	function search_user($value)
	{
		global $db;
		

				 $query = "SELECT * FROM users_table 
				 WHERE 	email=:value OR first_name like concat('%', :value, '%')  ORDER BY IDuser ASC";
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

