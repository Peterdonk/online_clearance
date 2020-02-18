<?php require_once '../db.php';
header('Content-type: application/json; charset=UTF-8');


    $response = array();
    
    if ($_POST['id']) {
        
        $pid = intval($_POST['id']);
        $getDepartmentInfo = mysqli_query($connectionString,"SELECT * FROM departments_tbl WHERE `department_id`='$pid' LIMIT 1")or die(mysqli_error($connectionString));
        $departmentDetails = mysqli_fetch_array($getDepartmentInfo);  

        $response['name']  = $departmentDetails['department_name'];
        
        echo json_encode($response);
    }