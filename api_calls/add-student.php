<?php
require_once '../db.php';

$get_student_name = $_POST['name'];
$get_student_index = $_POST['index_number'];
$get_student_department = $_POST['department'];
$get_student_programme = $_POST['programme'];
$get_student_contact = $_POST['contact'];
$get_student_started = $_POST['year_started'];
$get_student_completed = $_POST['year_completed'];

$generated_password = mt_rand(10000,999999);
$new_password = 'akm'.$generated_password;


$student_message = "Your Online Clearance Login Details Username:".$get_student_index."  Password:".$new_password;

//first check if student index already exists 

$check_student_index = mysqli_query($connectionString,"SELECT * FROM `student_tbl` WHERE `student_index` = '$get_student_index' LIMIT 1")or die(mysqli_error($connectionString));

if(mysqli_num_rows($check_student_index) > 0){
echo "already";
}else{	
$addStudent = mysqli_query($connectionString,"INSERT INTO `student_tbl` (`student_id`, `student_name`, `student_department`, `student_index`,`student_pass`, `student_contact`, `student_program`, `student_year_registered`, `student_year_completed`, `student_timestamp`) VALUES (NULL, '$get_student_name', '$get_student_department', '$get_student_index','$new_password', '$get_student_contact', '$get_student_programme', '$get_student_started', '$get_student_completed', current_timestamp())") or die(mysqli_error($connectionString));
if($addStudent){

        //defining the parameters
$key = "eNZmDi2eh2o6G3FjMFmKhcWsU";  // Remember to put your own API Key here
$to = $get_student_contact;
$msg = $student_message;
$sender_id = "Akim State"; //11 Characters maximum
$date_time = "";

//encode the message
$msg = urlencode($msg);

//prepare your url
$url = "https://apps.mnotify.net/smsapi?"
            . "key=$key"
            . "&to=$to"
            . "&msg=$msg"
            . "&sender_id=$sender_id"
            . "&date_time=$date_time";
$response = file_get_contents($url) ;
//response contains the response from mNotify

echo "success";
}
}
       
