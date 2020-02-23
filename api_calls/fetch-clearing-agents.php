<?php require_once '../db.php'; ?>
         
<?php   
$counter = 1;

$secret_id_array = [];


$getAgents = mysqli_query($connectionString,"SELECT * FROM clearing_agents ORDER BY agent_id ASC")or die(mysqli_error($connectionString));
while($eachAgent = mysqli_fetch_array($getAgents)){ 

    $get_secret_id = $eachAgent['agent_secret_id']; 
    $get_id = $eachAgent['agent_id'];
    $get_name = $eachAgent['agent_name'];
    $get_contact = $eachAgent['agent_contact'];
    $get_address = $eachAgent['agent_address'];
    $get_department = $eachAgent['agent_department'];
    $get_role = $eachAgent['agent_role'];
    $get_password = $eachAgent['agent_password'];
    $get_username = $eachAgent['agent_username'];


if(in_array($get_secret_id, $secret_id_array)){


}else{  ?>

    <tr>
    <td><b><?php echo $counter;   ?></b></td>
    <td><?php echo $get_name  ?></td>
    <td><?php echo $get_contact  ?></td>
<td>
<?php   

$check_for_multiple = mysqli_query($connectionString,"SELECT * FROM clearing_agents join departments_tbl on clearing_agents.agent_department = departments_tbl.department_id WHERE agent_secret_id = '$get_secret_id'")or die(mysqli_error($connectionString));

if(mysqli_num_rows($check_for_multiple) > 1){
    //there are multiple instances for department
    while ($each_department = mysqli_fetch_array($check_for_multiple)) {

        $department_name = $each_department['department_name'];
        # code...
        ?>

<span class="badge badge-primary"><?php  echo $department_name; ?></span>

        <?php 
    }
}else{
    if($get_department==='0'){ ?>
<span class="badge badge-primary"><?php  echo 'All'; ?></span>
        <?php }else{ 

$get_department_name = mysqli_fetch_array($check_for_multiple);
            ?>
<span class="badge badge-primary"><?php  echo $get_department_name['department_name']; ?></span>
      <?php  }  
}

?>
    </td>

     <td><?php echo $get_role;  ?></td>

    <td><?php echo $get_address;  ?></td>


    <td><?php echo $get_username;  ?></td>
    <td><?php echo $get_password;  ?></td>

    <td>
        <button type="button" class="btn btn-outline-success btn-sm btn-edit" id="<?php echo $get_secret_id  ?>">Edit</button>
        <button type="button" class="btn btn-outline-danger btn-sm btn-delete" id="<?php echo $get_secret_id  ?>">Delete</button>
    </td>
</tr>


<?php $counter++;array_push($secret_id_array, $get_secret_id); }
?>

<?php  } ?>

                                       