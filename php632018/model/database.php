<?php
		$dsn='mysql:host=localhost;dbname=userdb';
		$username='root';
		$password='';
		$option=array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		try
		{
				$db= new PDO($dsn,$username,$password,$option);

		}
		catch (PDOException $e)
		{
			$error_message = $e->getMessage();
			echo 'Loi';
			exit;
		}
?>