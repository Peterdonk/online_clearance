<?php

require_once '../db.php';

        $get_programme_id = $_POST['programme_id'];
        $get_programme_name = $_POST['programme_name'];

         $check_programme = mysqli_query($connectionString,"SELECT * FROM `programmes_tbl` WHERE `programmes_name` = '$get_programme_name' LIMIT 1")or die(mysqli_error($connectionString));

        if(mysqli_num_rows($check_programme) > 0){
        	 echo "already";
        }else{	
        $updateProgramme = mysqli_query($connectionString,"UPDATE `programmes_tbl` SET `programmes_name` = '$get_programme_name' WHERE `programmes_tbl`.`programmes_id` = '$get_programme_id'") or die(mysqli_error($connectionString));
        if($updateProgramme){
            echo "success";
        }
        }