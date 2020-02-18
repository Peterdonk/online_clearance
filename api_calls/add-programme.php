<?php
require_once '../db.php';


        $get_programme_name = $_POST['programme_name'];

        //first check if department already exists 

        $check_programme = mysqli_query($connectionString,"SELECT * FROM `programmes_tbl` WHERE `programmes_name` = '$get_programme_name' LIMIT 1")or die(mysqli_error($connectionString));

        if(mysqli_num_rows($check_programme) > 0){
        	 echo "already";
        }else{	
        $addProgramme = mysqli_query($connectionString,"INSERT INTO `programmes_tbl` (`programmes_id`, `programmes_name`, `programmes_timestamp`) VALUES (NULL, '$get_programme_name', current_timestamp())") or die(mysqli_error($connectionString));
        if($addProgramme){
            echo "success";
        }
        }
       
