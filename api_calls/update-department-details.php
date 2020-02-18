<?php

require_once '../db.php';

        $get_department_id = $_POST['depart_id'];
        $get_department_name = $_POST['department_name'];

         $check_department = mysqli_query($connectionString,"SELECT * FROM `departments_tbl` WHERE `department_name` = '$get_department_name' LIMIT 1")or die(mysqli_error($connectionString));

        if(mysqli_num_rows($check_department) > 0){
        	 echo "already";
        }else{	
        $updateDepartment = mysqli_query($connectionString,"UPDATE `departments_tbl` SET `department_name` = '$get_department_name' WHERE `departments_tbl`.`department_id` = '$get_department_id'") or die(mysqli_error($connectionString));
        if($updateDepartment){
            echo "success";
        }
        }