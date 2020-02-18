<?php

require_once '../db.php';
	
	if ($_POST['id']) {
		
		$pid = intval($_POST['id']);
		$query = mysqli_query($connectionString,"DELETE FROM `programmes_tbl` WHERE `programmes_tbl`.`programmes_id` = '$pid'") or die(mysqli_error($connectionString));

		if($query){
			echo 'success';
		}
	}