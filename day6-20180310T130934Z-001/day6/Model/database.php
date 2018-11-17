<?php
	//Viet code ket noi den co so du lieu
	//step 1
	class Database{
		private static $dsn='mysql:host=localhost;dbname=userdb';
		private static $username='root';
		private static $password='';
		private static $options = array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION);
		private static $db;
		private function __construct(){}

		public static function getDB(){
			if (!isset(self::$db)){
				try {
					self::$db= new PDO(self::$dsn,self::$username,self::$password,self::$options);

				} catch (PDOException $e){
					echo " Error connect to Database";
					exit();
				}
			}
			return self::$db;
		}
	}
?>