<?php
		// Viet code ket noi den co so du lieu
	class Database {
		private static $dsn='mysql:host=localhost;dbname=userdb';
		private static $username='root';
		private static $password='';
		private static $option=array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		private static $db;
		private function __construct()
		{}
		public static function getDB()
		{
			if(!isset(self::$db))
				{
					try{
						self::$db = new PDO (self::$dsn,self::$username,self::$password,self::$option);
					}
					catch (PDOException $e)
					{
						echo "Error connect to Database";
						exit();
					}
				}
				return self::$db;

		}

	}
?>