<?php
require_once '../db.php';


$get_student_hidden = $_POST['student_hidden'];
$get_student_name = $_POST['name'];
$get_student_index = $_POST['index_number'];
$get_student_department = $_POST['department'];
$get_student_programme = $_POST['programme'];
$get_student_contact = $_POST['contact'];
$get_student_started = $_POST['year_started'];
$get_student_completed = $_POST['year_completed'];
$get_student_password = $_POST['password'];

        //first check if student index already exists 


$updateStudent = mysqli_query($connectionString,"
UPDATE `student_tbl` SET `student_name` = '$get_student_name', 
`student_department` = '$get_student_department', 
`student_index` = '$get_student_index', 
`student_contact` = '$get_student_contact', 
`student_program` = '$get_student_programme', 
`student_year_registered` = '$get_student_started', 
`student_year_completed` = '$get_student_completed',
`student_pass` = '$get_student_password' 
WHERE `student_tbl`.`student_id` = '$get_student_hidden'
	") or die(mysqli_error($connectionString));
if($updateStudent){
echo "success";
}
       
