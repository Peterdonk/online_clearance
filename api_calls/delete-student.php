<?php

require_once '../db.php';
	
	if ($_POST['id']) {
		
		$pid = intval($_POST['id']);
		$query = mysqli_query($connectionString,"DELETE FROM `student_tbl` WHERE `student_tbl`.`student_id` = '$pid'") or die(mysqli_error($connectionString));

		if($query){
			echo 'success';
		}
	}