<?php require_once '../db.php';
header('Content-type: application/json; charset=UTF-8');


    $response = array();
    
    if ($_POST['id']) {
        
        $pid = intval($_POST['id']);
        $getAgentInfo = mysqli_query($connectionString,"SELECT * FROM clearing_agents WHERE `agent_secret_id`='$pid' LIMIT 1")or die(mysqli_error($connectionString));
        $agentDetails = mysqli_fetch_array($getAgentInfo);  


        $response['name']  = $agentDetails['agent_name'];
        $response['contact']  = $agentDetails['agent_contact'];
        $response['address']  = $agentDetails['agent_address'];
        $response['role']  = $agentDetails['agent_role'];
       

        
        echo json_encode($response);
    }