<?php

require_once '../db.php';
	
	if ($_POST['id']) {
		
		$pid = intval($_POST['id']);
		$query = mysqli_query($connectionString,"DELETE FROM `departments_tbl` WHERE `departments_tbl`.`department_id` = '$pid'") or die(mysqli_error($connectionString));

		if($query){
			echo 'success';
		}
	}