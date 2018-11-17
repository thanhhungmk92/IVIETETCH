<?php
	
	class user {

		private $bookID,$name,$authur,$publishingyear,$production; // khai bao cac thuoc tinh cua class
		//Ham khoi tao
		public function __construct($bookID,$name,$authur,$publishingyear,$production)

		{
			$this->bookID=$bookID;
			$this->name=$name;
			$this->authur=$authur;
			$this->publishingyear=$publishingyear;
			$this->production=$production;
		}
		public function getbookID()
		{
			return $this->bookID;
		}
		public function getname()
		{
			return $this->name;
		}
		public function getauthur()
		{
			return $this->authur;
		}
		public function getpublishingyear()
		{
			return $this->getpublishingyear;
		}

		public function getproduction()
		{
			return $this->getproduction;
		}
		
		public function setbookID($value)
		{
			return $this->bookID=$value;
		}
		public function setname($value)
		{
			return $this->name=$value;
		}
		public function setauthur($value)
		{
			return $this->authur=$value;
		}
		public function setpublishingyear($value)
		{
			return $this->publishingyear=$value;
		}

		public function setproduction($value)
		{
			return $this->production=$value;
		}
		//public function getall
		public function getall()
		{
			$arr=array('bookID'=>$this->bookID,
						'name'=>$this->name,
						'authur'=>$this->authur,
						'publishingyear'=>$this->publishingyear,
						'production'=>$this->production);
			return $arr;

		}
		public function set_SESSION(){
			$_SESSION['user'][$this->bookID]=array('bookID'=>$this->bookID,
						'name'=>$this->name,
						'authur'=>$this->authur,
						'publishingyear'=>$this->publishingyear,
						'production'=>$this->production);
		}
	}

	function search($search_value)
	{
		$list_user=array();
		foreach($_SESSION['user'] as $user => $value)
		{
			if($value['bookID']==$search_value || $value['name']==$search_value ||
				$value['authur']==$search_value || $value['publishingyear']== $search_value || $value['production']==$search_value)
			{
				$list_user[$value['bookID']]=array('bookID'=>$value['bookID'],
									'name'=>$value['name'], 'authur'=>$value['authur'],
									'publishingyear'=>$value['publishingyear'],'production'=>$value['production']);
			}
		}
		return $list_user;
		}

		


?>