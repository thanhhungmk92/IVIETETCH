<?php
	//Viet code ket noi den co so du lieu
	//step 1
	$dsn='mysql:host=localhost;dbname=userdb';
	$username='root';
	$password='';
	$options = array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION);
	try {
		$db= new PDO($dsn,$username,$password,$options);

	} catch (PDOException $e){
		echo " Error connect to Database";
		exit;
	}
?>