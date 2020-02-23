<?php require_once '../db.php';
header('Content-type: application/json; charset=UTF-8');


    $response = array();

    $departments_array = array();
    
    if ($_POST['id']) {
        
        $pid = intval($_POST['id']);
        $getAgentInfo = mysqli_query($connectionString,"SELECT * FROM clearing_agents WHERE `agent_secret_id`='$pid' LIMIT 1")or die(mysqli_error($connectionString));
        $agentDetails = mysqli_fetch_array($getAgentInfo);  

        $query_2 = mysqli_query($connectionString,"SELECT * FROM clearing_agents WHERE agent_secret_id='$pid'");
        if(mysqli_num_rows($query_2) > 1){

        	while ($each_department = mysqli_fetch_array($query_2)) {
        		$get_department = $each_department['agent_department'];
        		array_push($departments_array, $get_department);

        		$my_departments = $departments_array;
        	}
        }else{

        	$my_departments = $agentDetails['agent_department'];

        }



        $response['name']  = $agentDetails['agent_name'];
        $response['contact']  = $agentDetails['agent_contact'];
        $response['address']  = $agentDetails['agent_address'];
        $response['role']  = $agentDetails['agent_role'];
        $response['department'] = $my_departments;
         $response['username']  = $agentDetails['agent_username'];
        $response['password']  = $agentDetails['agent_password'];

        
        echo json_encode($response);
    }