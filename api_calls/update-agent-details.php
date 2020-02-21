<?php
require_once '../db.php';

$get_name = $_POST['name'];
$get_contact = $_POST['Contact'];
$get_address = $_POST['address'];
$get_agent_id = $_POST['agent_id'];
$get_agent_role = $_POST['role'];

$generated_number = mt_rand(100000,999999); 

$count_departments = count($_POST['department']);


$get_user_info = mysqli_query($connectionString,"SELECT * FROM clearing_agents WHERE agent_secret_id='$agent_secret_id' LIMIT 1")or die(mysqli_error($connectionString));

$agent_details = mysqli_fetch_array($get_user_info);

$agent_username = $agent_details['agent_username'];


$empty_table = mysqli_query($connectionString,"DELETE FROM `clearing_agents` WHERE `clearing_agents`.`agent_secret_id` = '$get_agent_id'")or die(mysqli_error($connectionString));

if($empty_table){

for ($i=0; $i < $count_departments; $i++) {

    # code...
    $current_selected_department = $_POST['department'][$i];

    $insert_query = mysqli_query($connectionString,"INSERT INTO `clearing_agents` (`agent_id`, `agent_secret_id`, `agent_department`, `agent_name`, `agent_contact`, `agent_address`,`agent_role`,`agent_username`,`agent_password`, `agent_timestamp`) VALUES (NULL, '$generated_number', '$current_selected_department', '$get_name', '$get_contact', '$get_address','$get_agent_role', current_timestamp())")or die(mysqli_error($connectionString));
}

}


if($insert_query){
    echo 'success';
}else{
    echo 'error';
}

