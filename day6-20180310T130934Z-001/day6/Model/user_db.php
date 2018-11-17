<?php
	class user{
		private $IDuser;
		private $email;
		Private $password;
		private $first_name;
		private $last_name;

		public function __construct($email,$password,$first_name,$last_name){
			$this->email=$email;
			$this->password=$password;
			$this->first_name=$first_name;
			$this->last_name=$last_name;
		}
		public function getIDuser(){return $this->IDuser;}
		public function getEmail(){return $this->email;}
		public function getFirstname(){return $this->first_name;}
		public function getLastname(){return $this->last_name;}
		public function getPassword(){return $this->password;}

		public function setIDuser($value){$this->IDuser=$value;}
		public function setEmail($value){$this->email=$value;}
		public function setFirstname($value){$this->first_name=$value;}
		public function setLastname($value){$this->last_name=$value;}
		public function setPassword($value){$this->password=$value;}
	}

	class userDB{
		public static function get_users(){
			$db = Database::getDB();
			$query = 'SELECT * FROM users_table ORDER BY IDuser ASC';
			try {
				$statement = $db ->prepare($query);
				$statement -> execute();
				$result = $statement-> fetchAll();
				$statement-> closeCursor();

				foreach($result as $u){
					$user = new user($u['email'],$u['password'],$u['first_name'],$u['last_name']);
					$user->setIDuser($u['IDuser']);
					$list_users[] =$user;
				}
				return $list_users;

			} catch (PDOException $e){
				echo "Error get database";
			}
		}

		public static function get_user_by_ID($ID){
			$db = Database::getDB();
			$query = 'SELECT * FROM users_table 
					  WHERE IDuser=:ID	
					  ORDER BY IDuser ASC';
			try {
				$statement = $db ->prepare($query);
				$statement->bindValue(':ID',$ID);		
				$statement -> execute();
				$result = $statement-> fetch();
				$statement-> closeCursor();
				$user = new user($result['email'],$result['password'],$result['first_name'],$result['last_name']);
				$user->setIDuser($result['IDuser']);				
				return $user;

			} catch (PDOException $e){
				echo "Error get data";
			}
		}

		//Them du lieu vao database userdb
		public static function add_user($user){
			$db = Database::getDB();
			$email=$user->getEmail();
			$password = $user->getPassword();
			$last_name = $user->getLastname();
			$first_name =$user->getFirstname();
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
		public static function update_user($IDuser,$user){
			$db = Database::getDB();
			$ID = $user->getIDuser();
			$email=$user->getEmail();
			$password = $user->getPassword();
			$last_name = $user->getLastname();
			$first_name =$user->getFirstname();
			try{
				$query = 'UPDATE users_table
						 SET email=:email, last_name=:last_name, first_name=:first_name
						 WHERE IDuser=:ID';
				$statement = $db->prepare($query);
				$statement->bindValue(':email',$email);			
				$statement->bindValue(':first_name',$first_name);
				$statement->bindValue(':last_name',$last_name);
				$statement->bindValue(':ID',$IDuser);
				$statement->execute();
				$statement->closeCursor();
			} catch(PDOException $e){
				echo "Error Update database";
			}
		}
		// delete user
		public static function delete_user($ID){
			$db = Database::getDB();			
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

		// kiem tra user co ton tai trong mang users khong
		public static function check_user($users,$email,$pass){
			$check_value=FALSE;
		    foreach($users as $v){
		      if($v->getEmail()==$email && $v->getPassword()==$pass){
		        $check_value=TRUE;
		        break;
		      }      
		    }
	    	return $check_value;
		}
		// Function search user
		public static function search_user($value){
			$db = Database::getDB();
			$query = "SELECT * FROM users_table 
					 WHERE 	email=:value OR first_name like '%".":value"."%' OR last_name =:value 
					 ORDER BY IDuser ASC";
			try {
				$statement = $db ->prepare($query);
				$statement-> bindValue(':value',$value);
				$statement -> execute();
				$result = $statement-> fetchAll();
				$statement-> closeCursor();

				foreach($result as $u){
					$user = new user($u['email'],$u['password'],$u['first_name'],$u['last_name']);
					$user->setIDuser($u['IDuser']);
					$list_users[] =$user;
				}
				return $list_users;				

			} catch (PDOException $e){
				echo "Error get database";
			}
		}

	}


	
	
	
	
	
	
	
	
?>