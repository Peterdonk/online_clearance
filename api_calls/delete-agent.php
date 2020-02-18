<?php

require_once '../db.php';
	
	if ($_POST['id']) {
		
		$pid = intval($_POST['id']);
		$query = mysqli_query($connectionString,"DELETE FROM `clearing_agents` WHERE `clearing_agents`.`agent_secret_id` = '$pid'") or die(mysqli_error($connectionString));

		if($query){
			echo 'success';
		}
	}