<?php require_once 'db.php';  ?>
<!doctype html>
<html lang="en">

    <head>
         <meta charset="utf-8" />
        <title>View Students | Online Clearance</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="An online clearing system for Akim State College University" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/akim_state.gif">

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
                                    <h4 class="mb-0 font-size-18">View Uncleared Students By Department</h4>
                                    
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
                                            <table class="table table-centered table-nowrap mb-0 table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Department Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="loadTable">
                                                   
         
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
    <td><a href='uncleared-students.php?d=<?php echo $get_department_Id; ?>'><?php echo $get_department_name; ?></td>                                                                          
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

        <!-- parsleyjs -->
        <script src="assets/libs/parsleyjs/parsley.min.js"></script>
        <!-- validation init -->
        <script src="assets/js/pages/form-validation.init.js"></script>

         <script src="assets/libs/alertifyjs/build/alertify.min.js"></script>

        <script src="assets/js/pages/alertifyjs.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
