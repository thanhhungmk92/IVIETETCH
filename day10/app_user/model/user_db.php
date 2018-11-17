<?php
	
	class user {


		private $codeID,$user_name,$password,$phone,$lifetime;
	
	
		
		//Ham khoi tao
		public function __construct($codeID,$user_name,$password,$phone)
		{
			$this->codeID=$codeID;
			$this->user_name=$user_name;
			$this->password=$password;
			$this->phone=$phone;
		}
		public function getCodeID()
		{
			return $this->codeID;
		}
		public function getUser_name()
		{
			return $this->user_name;
		}
		public function getPassword()
		{
			return $this->password;
		}
		public function getPhone()
		{
			return $this->phone;
		}
		
		public function setCodeID($value)
		{
			return $this->codeID=$value;
		}
		public function setUser_name($value)
		{
			return $this->user_name=$value;
		}
		public function setPassword($value)
		{
			return $this->password=$value;
		}
		public function setPhone($value)
		{
			return $this->phone=$value;
		}
		//public function getall
		public function getall()
		{
			$arr=array('codeID'=>$this->codeID,
						'user_name'=>$this->user_name,
						'password'=>$this->password,
						'phone'=>$this->phone);
			return $arr;

		}
		public function set_SESSION(){
			$_SESSION['user'][$this->codeID]=array('codeID'=>$this->codeID,
						'user_name'=>$this->user_name,
						'password'=>$this->password,
						'phone'=>$this->phone);
		}

	}


		//PRINT
		$user1 = new user('A12','tan','12345','0935444294');
		//print
		echo "CodeID:" .$user1->getCodeID();
		echo " - ";
		echo "User_name:" .$user1->getUser_name();
		echo " - ";
		echo "Password:" .$user1->getPassword();
		echo " - ";
		echo "Phone:" .$user1->getphone();
		echo "<br>";

		/*$u =array();
		$u[]=$user1->getall();
		print_r($u);
		echo "<br>";
		$life_time=10*24*24*60*60;
		session_set_cookie_params($life_time,'/');
		session_start();
		$_SESSION['user'][$user1->getCodeID()]=$u;
		print_r($_SESSION['user']);*/
		//fucntion
		
	
	
?>