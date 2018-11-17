<?php
	class Car {
		private $car_reg_no;
		private $category;
		private $brand;
		private $daily_rate;

		public function __construct ($car_reg_no,$category,$brand,$daily_rate)
		{
			$this->car_reg_no=$car_reg_no;
			$this->category=$category;
			$this->brand=$brand;
			$this->daily_rate=$daily_rate;
		}
		public function getcar_reg_no()
		{
			return $this->car_reg_no;
		}
		public function getcategory()
		{
			return $this->category;
		}
		public function getbrand()
		{
			return $this->brand;
		}
		public function getdaily_rate()
		{
			return $this->daily_rate;
		}
		
		public function setcar_reg_no($value)
		{
			return $this->car_reg_no=$value;
		}
		public function setcategory($value)
		{
			return $this->category=$value;
		}
		public function setbrand($value)
		{
			return $this->brand=$value;
		}
		public function setdaily_rate($value)
		{
			return $this->daily_rate=$value;
		}
}
	class CarDB{

		public static function get_car()
		{
			$db=Database::getDB();
			$query = 'SELECT * FROM Car ORDER BY car_reg_no ASC';
		
		try
		{
			$statement = $db -> prepare($query);
			$statement -> execute();
			$result = $statement -> fetchAll();
			$statement->closeCursor();

			foreach($result as $c)
			{
				$car = new Car($c['car_reg_no'],$c['category'],$c['brand'],$c['daily_rate']);
				$car->setcar_reg_no($c['car_reg_no']);
				$list_users[]=$car;

			}
			return $list_users;

		}
		catch (PDOException $e)
		{
			echo "Error get database";

		}
		}
		
	}


	class Customers {
		private $customer_id;
		private $name;
		private $address;
		private $phone;
		private $discount;


		public function __construct ($customer_id,$name,$address,$phone,$discount)
		{
			$this->customer_id=$customer_id;
			$this->name=$name;
			$this->address=$address;
			$this->phone=$phone;
			$this->discount=$discount;
		}
		public function getcustomer_id()
		{
			return $this->customer_id;
		}
		public function getname()
		{
			return $this->name;
		}
		public function getaddress()
		{
			return $this->address;
		}
		public function getphone()
		{
			return $this->phone;
		}
		public function getdiscount()
		{
			return $this->discount;
		}
		
		public function setcustomer_id($value)
		{
			return $this->customer_id=$value;
		}
		public function setname($value)
		{
			return $this->name=$value;
		}
		public function setaddress($value)
		{
			return $this->address=$value;
		}
		public function setphone($value)
		{
			return $this->phone=$value;
		}
		public function setdiscount($value)
		{
			return $this->discount=$value;
		}
		
	}
	class CustomerDB {
		public static function get_customer()
		{
			$db=Database::getDB();
			$query = 'SELECT * FROM Customers ORDER BY customer_id ASC';
		
		try
		{
			$statement = $db -> prepare($query);
			$statement -> execute();
			$result = $statement -> fetchAll();
			$statement->closeCursor();

			foreach($result as $cu)
			{
				$records = new Customers($cu['customer_id'],$cu['name'],$cu['address'],$cu['phone'],$cu['discount']);
				$records->setcustomer_id($cu['customer_id']);
				$list_users[]=$records;
			}
			return $list_users;

		}
		catch (PDOException $e)
		{
			echo "Error get database";

		}
		}

	}	

	class Rental_records {
		private $rental_id;
		private $car_reg_no;
		private $customer_id;
		private $start_date;
		private $end_date;
		private $lastUpdate; //khong $name vi trong table ko co chu bang nao co // sao?? cai nao co name/ customer , co class phia tren


		public function __construct ($rental_id,$car_reg_no,$customer_id,$start_date,$end_date,$lastUpdate)
		{
			$this->rental_id=$rental_id;
			$this->car_reg_no=$car_reg_no;
			$this->customer_id=$customer_id;
			$this->start_date=$start_date;
			$this->end_date=$end_date;
			$this->lastUpdate=$lastUpdate;

		}
		public function getrental_id()
		{
			return $this->rental_id;
		}
		public function getcar_reg_no()
		{
			return $this->car_reg_no;
		}
		public function getcustomer_id()
		{
			return $this->customer_id;
		}
		public function getstart_date()
		{
			return $this->start_date;
		}
		public function getend_date()
		{
			return $this->end_date;
		}
		public function getlastUpdate()
		{
			return $this->lastUpdate;
		}
		
		public function setrental_id($value)
		{
			return $this->rental_id=$value;
		}
		public function setcar_reg_no($value)
		{
			return $this->car_reg_no=$value;
		}
		public function setcustomer_id($value)
		{
			return $this->customer_id=$value;
		}
		public function setstart_date($value)
		{
			return $this->start_date=$value;
		}
		public function setend_date($value)
		{
			return $this->end_date=$value;
		}
		public function setlastUpdate($value)
		{
			return $this->lastUpdate=$value;
		}
	}

	class Rental_recordsDB
	{
		
		public static function get_Rental_records()
		{
			$db=Database::getDB();
			$query = 'SELECT * FROM Rental_records ORDER BY rental_id ASC';
		
		try
		{
			$statement = $db -> prepare($query);
			$statement -> execute();
			$result = $statement -> fetchAll();
			$statement->closeCursor();

			foreach($result as $u)
			{
				$records = new Rental_records($u['rental_id'],$u['car_reg_no'],$u['customer_id'],$u['start_date'],$u['end_date'],$u['lastUpdate']);
				$records->setrental_id($u['rental_id']);
				$list_users[]=$records;
			}
			return $list_users;

		}
		catch (PDOException $e)
		{
			echo "Error get database";

		}
		}


		public static function search_car_no($value)
	{
		$db=Database::getDB();
		$query = 'SELECT rs.*,cus.name name FROM Rental_records rs, Customers cus WHERE rs.customer_id = cus.customer_id  and car_reg_no = :value ORDER BY rental_id ASC';		

		try {
			$statement = $db ->prepare($query);
			$statement-> bindValue(':value',$value);
			
			$statement -> execute(); //hay gio minh kh
			$result = $statement-> fetchAll();
			$statement-> closeCursor();
			foreach($result as $r)
			{
				$records=new Rental_records ($r['rental_id'],$r['car_reg_no'],$r['customer_id'],$r['start_date'],$r['end_date'],
					$r['lastUpdate']);
				$records->setrental_id($r['rental_id']);
				$records->name = $r['name'];
			
				$list_users[]=$records;
				
			}
			if(empty($list_users))
			{
				echo "<div align=center> <h3>Chưa có dữ liệu</h3></div>";
			}
			else
			{
				
				return $list_users; // y ta la view goi cai nay o dau
			}

		} catch (PDOException $e){
			echo "Error get database";
		}
	}

		public static function add_Rental_records($records)
	{
		$db= Database::getDB();
		$rental_id=$records->getrental_id();
		$car_reg_no=$records->getcar_reg_no();
		$customer_id=$records->getcustomer_id();
		$start_date=$records->getstart_date();
		$end_date=$records->getend_date();
		$lastUpdate=$records->getlastUpdate();
		try {
		$query ='INSERT INTO Rental_records(rental_id,car_reg_no,customer_id,start_date,end_date,lastUpdate)
		VALUES (:rental_id,:car_reg_no,:customer_id,:start_date,:end_date,:lastUpdate)';
		$statement = $db->prepare($query);
		$statement->bindValue (':rental_id',$rental_id);
		$statement->bindValue (':car_reg_no',$car_reg_no);
		$statement->bindValue (':customer_id',$customer_id);
		$statement->bindValue (':start_date',$start_date);
		$statement->bindValue (':end_date',$end_date);
		$statement->bindValue (':lastUpdate',$lastUpdate);
		$statement->execute();
		$statement->closeCursor();
	} catch (PDOException $e)
	{
		echo "Error Insert database";
	}

	}

	}

?>

