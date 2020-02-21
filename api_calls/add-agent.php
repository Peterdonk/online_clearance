<?php
require_once '../db.php';


        $get_name = $_POST['name'];
        $get_contact = $_POST['Contact'];
        $get_address = $_POST['address'];
        $get_role = $_POST['role'];

        $generated_number = mt_rand(100000,999999); 

        $generated_password = mt_rand(10000,999999);
        $new_password = 'akm'.$generated_password;
        $officer_username = 'office';


        $officer_message = "Your Office Clearance Login Details Username:".$officer_username."  Password:".$new_password;


        $count_departments = count($_POST['department']);

        for ($i=0; $i < $count_departments; $i++) {

            # code...
            $current_selected_department = $_POST['department'][$i];

            $insert_query = mysqli_query($connectionString,"INSERT INTO `clearing_agents` (`agent_id`, `agent_secret_id`, `agent_department`, `agent_name`, `agent_contact`, `agent_address`,`agent_role`,`agent_username`,`agent_password`, `agent_timestamp`) VALUES (NULL, '$generated_number', '$current_selected_department', '$get_name', '$get_contact', '$get_address','$get_role','$officer_username','$new_password', current_timestamp())")or die(mysqli_error($connectionString));
        }


        if($insert_query){

                    //defining the parameters
// $key = "eNZmDi2eh2o6G3FjMFmKhcWsU";  // Remember to put your own API Key here
// $to = $get_contact;
// $msg = $officer_message;
// $sender_id = "Akim State"; //11 Characters maximum
// $date_time = "";

//encode the message
// $msg = urlencode($msg);

//prepare your url
// $url = "https://apps.mnotify.net/smsapi?"
//             . "key=$key"
//             . "&to=$to"
//             . "&msg=$msg"
//             . "&sender_id=$sender_id"
//             . "&date_time=$date_time";
// $response = file_get_contents($url) ;
//response contains the response from mNotify

            echo 'success';
        }else{
            echo 'error';
        }

        //first check if department already exists 

       
       