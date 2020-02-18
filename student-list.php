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
        <title>Form Validation | Apaxy - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

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
                                    <h4 class="mb-0 font-size-18">View Students By Department</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apaxy</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Validation</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        
                                                 <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">All Departments</h4>

                                        <div class="table-responsive">
                                            <table id="datatable-buttons" class="table table-centered table-nowrap mb-0 table-hover">
                                                <thead>
                                                     <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Index</th>
                                                        <th scope="col">Department</th>
                                                        <th scope="col">Program</th>
                                                        <th scope="col">Level</th>
                                                        <th scope="col">Registered</th>
                                                        <th scope="col">Completed</th>
                                       
                                                    </tr>
                                                </thead>
                                                <tbody>                                                      
<?php   
$counter = 1;
$getStudents = mysqli_query($connectionString,"SELECT * FROM student_tbl WHERE student_department = '$selected_department' ORDER BY student_id ASC")or die(mysqli_error($connectionString));
while($eachStudent= mysqli_fetch_array($getStudents)){  

    $get_student_Id = $eachStudent['student_id'];
    $get_student_name = $eachStudent['student_name'];
    $get_student_index = $eachStudent['student_index'];
    $get_student_department = $eachStudent['student_department'];
    $get_student_program = $eachStudent['student_program'];
    $get_student_level = $eachStudent['student_level'];
    $get_student_registered = $eachStudent['student_year_registered'];
    $get_student_completed = $eachStudent['student_year_completed'];

   ?>
    <tr>
    <td><b><?php echo $counter;   ?></b></td>
    <td><?php echo $get_student_name;  ?></td>
    <td><?php echo $get_student_index;  ?></td>
    <td><?php echo $get_student_department;  ?></td>
    <td><?php echo $get_student_program;  ?></td>
    <td><?php echo $get_student_level;  ?></td>
    <td><?php echo $get_student_registered;  ?></td>
    <td><?php echo $get_student_completed;  ?></td>
</tr>


<?php $counter++; }
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











                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                2019 © Apaxy.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
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
