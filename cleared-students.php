<?php require_once 'db.php';  


if(isset($_GET['d'])){
    $selected_department = $_GET['d'];
}else{
    echo "<script>window.location.href='view-students.php'</script>";
}

?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Cleared Student List | Online Clearance</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="An online clearing system for Akim State College University" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/akim_state.gif">

                <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />  

         <!-- alertifyjs Css -->
        <link href="assets/libs/alertifyjs/build/css/alertify.min.css" rel="stylesheet" type="text/css" />

        <!-- alertifyjs default themes  Css -->
        <link href="assets/libs/alertifyjs/build/css/themes/default.min.css" rel="stylesheet" type="text/css" />

        <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php require_once 'sidebar.php';  ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Student List</h4>

                                   
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        
                                                 <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">All Students</h4>

                                        <div class="table-responsive">
                                            <table id="datatable-buttons" class="table table-striped table-centered table-nowrap mb-0 table-hover">
                                                <thead>
                                                     <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Index</th>
                                                        <th scope="col">Department</th>
                                                        <th scope="col">Program</th>
                                                        <th scope="col">Contact</th>
                                                        <th scope="col">Registered</th>
                                                        <th scope="col">Completed</th>
                                                       
                                       
                                                    </tr>
                                                </thead>
                                                <tbody>                                                      
<?php   
$counter = 1;
$getStudents = mysqli_query($connectionString,"SELECT * FROM student_tbl join departments_tbl on student_tbl.student_department = departments_tbl.department_id join programmes_tbl on student_tbl.student_program = programmes_tbl.programmes_id WHERE student_department = '$selected_department' ORDER BY student_id ASC")or die(mysqli_error($connectionString));
while($eachStudent= mysqli_fetch_array($getStudents)){  

    $get_student_Id = $eachStudent['student_id'];
    $get_student_name = $eachStudent['student_name'];
    $get_student_index = $eachStudent['student_index'];
    $get_student_department = $eachStudent['department_name'];
    $get_student_program = $eachStudent['programmes_name'];
    $get_student_contact = $eachStudent['student_contact'];
    $get_student_registered = $eachStudent['student_year_registered'];
    $get_student_completed = $eachStudent['student_year_completed'];
    $get_student_password = $eachStudent['student_pass'];
    $get_student_department_raw = $eachStudent['student_department'];

    //check people decided to clear the student
    $check_clearers = mysqli_query($connectionString,"SELECT * FROM clearing_agents WHERE agent_department = '$get_student_department_raw' OR agent_department = '0'")or die(mysqli_error($connectionString));

    $get_total_department = mysqli_num_rows($check_clearers);


    // echo($get_total_department);

    $student_program_counter = 0;

    while($each_office = mysqli_fetch_array($check_clearers)){
        $get_agent_secret_id = $each_office['agent_secret_id'];

        //Check through cleared table to see if he has finished his clearing

        $check_cleared = mysqli_query($connectionString,"SELECT * FROM cleared_students WHERE cleared_student_id = '$get_student_Id' AND cleared_agent_id = '$get_agent_secret_id' ")or die(mysqli_error($connectionString));

            // $program_details = mysqli_fetch_array($check_cleared);

            // echo $program_details['cleared_agent_id'];

        if(mysqli_num_rows($check_cleared) > 0){
            $student_program_counter+=1;
        }  

    }

    // echo "  Program==>".$student_program_counter;

    if( $student_program_counter === $get_total_department){  ?>

 <tr>
    <td><b><?php echo $counter;   ?></b></td>
    <td><?php echo $get_student_name;  ?></td>
    <td><?php echo $get_student_index;  ?></td>
    <td><?php echo $get_student_department;  ?></td>
    <td><?php echo $get_student_program;  ?></td>
    <td><?php echo $get_student_contact;  ?></td>
    <td><?php echo $get_student_registered;  ?></td>
    <td><?php echo $get_student_completed;  ?></td>
</tr>


   <?php  $counter++; } ?>

  
   

<?php  }
?>
                                       
                                                        
                                                      
                                                        
                                                  
                                                 
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->











                
               <?php  require_once 'footer.php'; ?>


            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

          <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>


            <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>


        <!-- parsleyjs -->
        <script src="assets/libs/parsleyjs/parsley.min.js"></script>
        <!-- validation init -->
        <script src="assets/js/pages/form-validation.init.js"></script>

         <script src="assets/libs/alertifyjs/build/alertify.min.js"></script>

        <script src="assets/js/pages/alertifyjs.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
