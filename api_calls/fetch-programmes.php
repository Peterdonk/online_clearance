<?php require_once '../db.php'; ?>
         
<?php   
$counter = 1;
$getProgrammes = mysqli_query($connectionString,"SELECT * FROM programmes_tbl ORDER BY programmes_id ASC")or die(mysqli_error($connectionString));
while($eachProgramme = mysqli_fetch_array($getProgrammes)){  
    $get_programme_Id = $eachProgramme['programmes_id'];
    $get_programme_name = $eachProgramme['programmes_name'];
    $get_programme_timestamp = $eachProgramme['programmes_timestamp'];
   ?>
    <tr>
    <td><b><?php echo $counter;   ?></b></td>
    <td><?php echo $get_programme_name  ?></td>
    <td><?php echo $get_programme_timestamp  ?></td>                                                                           
    <td>
        <button type="button" class="btn btn-outline-success btn-sm btn-edit" id="<?php echo $get_programme_Id  ?>">Edit</button>
        <button type="button" class="btn btn-outline-danger btn-sm btn-delete" id="<?php echo $get_programme_Id  ?>">Delete</button>
    </td>
</tr>


<?php $counter++; }
?>
                                       