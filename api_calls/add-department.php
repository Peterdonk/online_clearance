<?php
require_once '../db.php';


        $get_department_name = $_POST['department_name'];

        //first check if department already exists 

        $check_department = mysqli_query($connectionString,"SELECT * FROM `departments_tbl` WHERE `department_name` = '$get_department_name' LIMIT 1")or die(mysqli_error($connectionString));

        if(mysqli_num_rows($check_department) > 0){
        	 echo "already";
        }else{	
        $addDepartment = mysqli_query($connectionString,"INSERT INTO `departments_tbl` (`department_id`, `department_name`, `department_timestamp`) VALUES (NULL, '$get_department_name', current_timestamp())") or die(mysqli_error($connectionString));
        if($addDepartment){
            echo "success";
        }
        }
       
