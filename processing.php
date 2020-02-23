

<?

require_once 'db.php';


if(!isset($_COOKIE['si'])){
    echo '<script>window.location.href="index.php";</script>';
}else{
    $department = $_COOKIE['d'];
$id = $_COOKIE['si']; //clearers secret ID
}


$check_if_single_all = mysqli_query($connectionString,"SELECT * FROM clearing_agents WHERE agent_secret_id = '$id'")or die(mysqli_error($connectionString));

if(mysqli_num_rows($check_if_single_all) > 1){
echo '<script>window.location.href="multi-clearance.php"</script>';
}else{
	$get_single = mysqli_fetch_array($check_if_single_all);

	if($get_single['agent_department'] == '0'){
		echo '<script>window.location.href="multi-clearance.php"</script>';
	}else{
	echo '<script>window.location.href="agents.php"</script>';
		
	}
}
