<?php
	include_once('../model/database.php');
	include_once('../model/user_db.php');

	$action = filter_input(INPUT_POST,'action');
	if(empty($action)){
		$action = filter_input(INPUT_GET,'action');
		if (empty($action)){
			$action = 'form_add';
		}
	}
	switch ($action) {
	
			case 'form_add':
				include('../view/add_record.php');
			break;

			case 'add_new_record':
				include('../view/add_record.php');
			break;

			case 'add_Rental_records': 
			$rental_id=filter_input(INPUT_POST, 'rental_id');
			$car_reg_no=filter_input(INPUT_POST, 'car_reg_no');
			$customer_id=filter_input(INPUT_POST, 'customer_id');
			$start_date=filter_input(INPUT_POST, 'star_date');
			$end_date=filter_input(INPUT_POST, 'end_date');
			$lastUpdate=filter_input(INPUT_POST,'lastUpdate');
			$records=new Rental_records($rental_id,$car_reg_no,$customer_id,$start_date,$end_date,$lastUpdate);
			Rental_recordsDB::add_Rental_records($records);
			include_once('../view/new_list_record_car.php');
			break;

			case 'show_car':
			include_once('../view/list_record2.php');
			break;

			case 'view_details':
			$IDcar=filter_input(INPUT_GET,'key');
			$records= Rental_recordsDB::search_car_no($IDcar); // cai doan selery okkk
			if($records=="")
			{
				include_once('../view/list_record2.php');
			}
			else
			{

			include_once('../view/list_record_car.php');
		}
			break;

}
?>