<?php require_once '../db.php';
header('Content-type: application/json; charset=UTF-8');


    $response = array();
    
    if ($_POST['id']) {
        
        $pid = intval($_POST['id']);
        $getProgrammeInfo = mysqli_query($connectionString,"SELECT * FROM programmes_tbl WHERE `programmes_id`='$pid' LIMIT 1")or die(mysqli_error($connectionString));
        $programmeDetails = mysqli_fetch_array($getProgrammeInfo);  

        $response['name']  = $programmeDetails['programmes_name'];
        
        echo json_encode($response);
    }