

<?php

require_once 'db.php';  


//get total number of departments

$query_1 = mysqli_query($connectionString,"SELECT * FROM `departments_tbl`")or die(mysqli_error($connectionString));

$department_total = mysqli_num_rows($query_1);


//get total number of programmes
$query_2 = mysqli_query($connectionString,"SELECT * FROM `programmes_tbl`")or die(mysqli_error($connectionString));

$programmes_total = mysqli_num_rows($query_2);


//get total number of students
$query_3 = mysqli_query($connectionString,"SELECT * FROM `student_tbl`")or die(mysqli_error($connectionString));

$student_total = mysqli_num_rows($query_3);


//get total number of clearing agents
$id_array = array();
$officer_counter = 0;
$query_4 = mysqli_query($connectionString,"SELECT * FROM `clearing_agents`");

while ($each_office = mysqli_fetch_array($query_4)) {
    //get_id
    $agent_secret_id = $each_office['agent_secret_id'];

    if(in_array($agent_secret_id, $id_array)){

    }else{
        $officer_counter+=1;
        array_push($id_array, $agent_secret_id);
    }
}




?>


<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Online Clearance</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="An online clearing system for Akim State College University" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/akim_state.gif">
        <!-- slick css -->
        <link href="assets/libs/slick-slider/slick/slick.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/slick-slider/slick/slick-theme.css" rel="stylesheet" type="text/css" />

        <!-- jvectormap -->
        <link href="assets/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />

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
                                    <h4 class="mb-0 font-size-18">Dashboard</h4>

                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="font-size-14">Number of Students</h5>
                                            </div>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="dripicons-box"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <h4 class="m-0 align-self-center"><?php  echo $student_total;  ?></h4>

                                        <p class="py-2"></p>
                                      
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="font-size-14">Number of Offices</h5>
                                            </div>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="dripicons-briefcase"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <h4 class="m-0 align-self-center"><?php echo $officer_counter;  ?></h4>
                                        <p class="py-2"></p>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="font-size-14">Number of Programmes</h5>
                                            </div>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="dripicons-tags"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <h4 class="m-0 align-self-center"><?php  echo $programmes_total;  ?></h4>
                                        <p class="py-2"></p>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="font-size-14">Number of Departments</h5>
                                            </div>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="dripicons-cart"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <h4 class="m-0 align-self-center"><?php  echo $department_total;  ?></h4>

                                        <p class="py-2"></p>
                                       
                                    </div>
                                </div>
                            </div>


                        
    
                        </div>
                        <!-- end row -->

                       
    <div class="container d-flex justify-content-center mt-4">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 align-self-center">
               
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mx-auto text-center">
                                        <i class="fa fa-street-view fa-4x text-info"></i>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <p class="text-info">Add Student</p>
                                        <p class="text-secondary"></p>
                                        <a class="btn btn-info mt-2 px-4" href="add-student.php">Click Here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mx-auto text-center">
                                        <i class="fa fa-landmark fa-4x text-warning"></i>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <p class="text-info">Add Office</p>
                                        <p class="text-secondary"></p>
                                        <a class="btn btn-warning mt-2 px-4" href="add-clearer.php">Click Here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mx-auto text-center">
                                        <i class="fa fa-building fa-4x text-success"></i>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <p class="text-info">Add Department</p>
                                        <p class="text-secondary"></p>
                                        <a class="btn btn-success mt-2 px-4" href="add-department.php">Click Here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mx-auto text-center">
                                        <i class="fa fa-book-reader fa-4x text-danger"></i>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <p class="text-info">Add Programme</p>
                                        <p class="text-secondary"></p>
                                        <a class="btn btn-danger mt-2 px-4" href="add-programme.php">Click Here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="assets/libs/slick-slider/slick/slick.min.js"></script>

        <!-- Jq vector map -->
        <script src="assets/libs/jqvmap/jquery.vmap.min.js"></script>
        <script src="assets/libs/jqvmap/maps/jquery.vmap.usa.js"></script>

        <script src="assets/js/pages/dashboard.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
