<?php
require_once '../db.php';

$get_student_id = $_POST['id'];
$get_clearer_id = $_POST['clearer'];


$clear_student = mysqli_query($connectionString,"INSERT INTO `cleared_students` (`cleared_id`, `cleared_student_id`, `cleared_agent_id`, `cleared_timestamp`) VALUES (NULL, '$get_student_id', '$get_clearer_id', current_timestamp())")or die(mysqli_error($connectionString));

if($clear_student){
	echo 'success';
}else{
	echo 'error';
}
       
