<?php require_once '../db.php';
header('Content-type: application/json; charset=UTF-8');


    $response = array();
    
    if ($_POST['id']) {
        
        $pid = intval($_POST['id']);
        $getStudentInfo = mysqli_query($connectionString,"SELECT * FROM student_tbl WHERE `student_id`='$pid' LIMIT 1")or die(mysqli_error($connectionString));
        $eachStudent = mysqli_fetch_array($getStudentInfo);  

        $response['id'] = $eachStudent['student_id'];
	    $response['name'] = $eachStudent['student_name'];
	    $response['index'] = $eachStudent['student_index'];
	    $response['department'] = $eachStudent['student_department'];
	    $response['programme'] = $eachStudent['student_program'];
	    $response['contact'] = $eachStudent['student_contact'];
	    $response['started'] = $eachStudent['student_year_registered'];
	    $response['completed'] = $eachStudent['student_year_completed'];
	    $response['password'] = $eachStudent['student_pass'];

        
        echo json_encode($response);
    }