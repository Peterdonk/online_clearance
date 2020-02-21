<?php
require_once '../db.php';


        $get_name = $_POST['username'];
        $get_password = $_POST['password'];


        if($get_name === 'office'){

            $query_1 = mysqli_query($connectionString,"SELECT * FROM clearing_agents WHERE agent_username='$get_name' AND agent_password = '$get_password' LIMIT 1")or die(mysqli_error($connectionString));
            if(mysqli_num_rows($query_1) > 0){

                $officer_details = mysqli_fetch_array($query_1);

                $secret_id = $officer_details['agent_secret_id'];
                $agent_department = $officer_details['agent_department'];
                $agent_name = $officer_details['agent_name'];

                setcookie('nm',$agent_name,time()+2*24*60*60,'/');

                setcookie('si',$secret_id,time()+2*24*60*60,'/');
                setcookie('d',$agent_department,time()+2*24*60*60,'/');

                echo 'office';

            }else{
                echo 'not_exist';
            }
        }elseif ($get_name==='admin' || $get_name==='Admin') {
            if($get_password === 'admin_pass'){
                echo 'admin';
                setcookie('nm','Admin',time()+2*24*60*60,'/');
            }else{
                echo 'not_exist';
            }
            # code...
        }else{

            $query_2 = mysqli_query($connectionString,"SELECT * FROM `student_tbl` WHERE student_index='$get_name' AND student_pass='$get_password' LIMIT 1 ")or die(mysqli_error($connectionString));
            # code...
            if(mysqli_num_rows($query_2) > 0){

                $student_details = mysqli_fetch_array($query_2);

                $student_id = $student_details['student_id'];
                $student_department = $student_details['student_department'];
                $student_name= $student_details['student_name'];

                setcookie('si',$student_id,time()+2*24*60*60,'/');
                setcookie('d',$student_department,time()+2*24*60*60,'/');

                setcookie('nm',$student_name,time()+2*24*60*60,'/');

                echo 'student';

            }else{
                echo 'not_exist';
            }
        }
     

