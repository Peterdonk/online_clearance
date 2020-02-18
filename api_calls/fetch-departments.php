<?php require_once '../db.php'; ?>
         
<?php   
$counter = 1;
$getDepartments = mysqli_query($connectionString,"SELECT * FROM departments_tbl ORDER BY department_id ASC")or die(mysqli_error($connectionString));
while($eachDepartment = mysqli_fetch_array($getDepartments)){  
    $get_department_Id = $eachDepartment['department_id'];
    $get_department_name = $eachDepartment['department_name'];
    $get_department_timestamp = $eachDepartment['department_timestamp'];
   ?>
    <tr>
    <td><b><?php echo $counter;   ?></b></td>
    <td><?php echo $get_department_name  ?></td>
    <td><?php echo $get_department_timestamp  ?></td>                                                                           
    <td>
        <button type="button" class="btn btn-outline-success btn-sm btn-edit" id="<?php echo $get_department_Id  ?>">Edit</button>
        <button type="button" class="btn btn-outline-danger btn-sm btn-delete" id="<?php echo $get_department_Id  ?>">Delete</button>
    </td>
</tr>


<?php $counter++; }
?>
                                       