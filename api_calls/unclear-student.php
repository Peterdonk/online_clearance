<?php
require_once '../db.php';

$get_student_id = $_POST['id'];
$get_clearer_id = $_POST['clearer'];


$clear_student = mysqli_query($connectionString,"DELETE FROM `cleared_students` WHERE `cleared_students`.`cleared_student_id` = '$get_student_id' AND `cleared_students`.`cleared_agent_id`='$get_clearer_id'")or die(mysqli_error($connectionString));

if($clear_student){
	echo 'success';
}else{
	echo 'error';
}
       
