
<?php


require_once 'db.php';


if(!isset($_COOKIE['si'])){
    echo '<script>window.location.href="index.php";</script>';
}else{
    $department = $_COOKIE['d'];
$id = $_COOKIE['si']; //clearers secret ID
}




?>


<!doctype html>
<html lang="en">

    <head>
        <title>Clearing Office | Online Clearance</title>
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

         <!-- alertifyjs Css -->
        <link href="assets/libs/alertifyjs/build/css/alertify.min.css" rel="stylesheet" type="text/css" />

        <!-- alertifyjs default themes  Css -->
        <link href="assets/libs/alertifyjs/build/css/themes/default.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark" data-layout="horizontal">

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                         <div class="navbar-brand-box">
                            <a href="agent-profile.php" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/akim_state.gif" alt="" height="40">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/akim_state.gif" alt="" height="60">
                                </span>
                            </a>

                            <a href="agent-profile.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/akim_state.gif" alt="" height="40">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/akim_state.gif" alt="" height="60"><span style="font-weight: bold;color: #9cd4b6;font-size: 1.1em;">AKIM STATE</span>
                                </spanAKIM>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm mr-2 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">
        
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                      


                  
                      <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/user_image.png"
                                    alt="Header Avatar">
                                <span class="d-none d-sm-inline-block ml-1"><?php echo $_COOKIE['nm'];  ?></span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item" href="agent-profile.php"><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile</a>
                               
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

           <div class="topnav">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="agent-profile.php">
                                        <i class="mdi mdi-storefront mr-2"></i>Profile
                                    </a>
                                </li>

                                 <li class="nav-item">
                                    <a class="nav-link" href="processing.php">
                                        <i class="mdi mdi-storefront mr-2"></i>Clearance
                                    </a>
                                </li>

                                 <li class="nav-item">
                                    <a class="nav-link" href="index.php">
                                        <i class="mdi mdi-storefront mr-2"></i>Logout
                                    </a>
                                </li>

                             

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

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
                                    <h4 class="mb-0 font-size-18">Clearance By Department</h4>

                                    
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                    

                    

                 <input type="hidden" name="" id="clearer_id" value="<?php echo $id;  ?>">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Select Department</h4>

                                       
 <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0 table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Department Name</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="loadTable">
                                                   
         
<?php   
$counter = 1;


$check_if_single_all = mysqli_query($connectionString,"SELECT * FROM clearing_agents JOIN departments_tbl on clearing_agents.agent_department = departments_tbl.department_id WHERE agent_secret_id = '$id'")or die(mysqli_error($connectionString));


    
if(mysqli_num_rows($check_if_single_all) > 1){

while ($eachDepartment = mysqli_fetch_array($check_if_single_all)) {

    $department_name = $eachDepartment['department_name'];
    $department_id = $eachDepartment['department_id'];
   ?>
    <tr>
    <td><b><?php echo $counter;   ?></b></td>
    <td><a href='clear-students.php?d=<?php echo $department_id; ?>'><?php echo $department_name; ?></td>                                                                          
</tr>


<?php $counter++; }

}else{


$getDepartments = mysqli_query($connectionString,"SELECT * FROM departments_tbl ORDER BY department_id ASC")or die(mysqli_error($connectionString));
while($eachDepartment = mysqli_fetch_array($getDepartments)){  
    $get_department_Id = $eachDepartment['department_id'];
    $get_department_name = $eachDepartment['department_name'];
    $get_department_timestamp = $eachDepartment['department_timestamp'];
   ?>
    <tr>
    <td><b><?php echo $counter;   ?></b></td>
    <td><a href='student-list.php?d=<?php echo $get_department_Id; ?>'><?php echo $get_department_name; ?></td>                                                                          
</tr>


<?php $counter++; }

}
?>
                                       
                                                        
                                                      
                                                        
                                                  
                                                 
                                                </tbody>
                                            </table>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <!-- sample modal content -->

                
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

      

        <script src="assets/libs/slick-slider/slick/slick.min.js"></script>

        <!-- Jq vector map -->
        <script src="assets/libs/jqvmap/jquery.vmap.min.js"></script>
        <script src="assets/libs/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- <script src="assets/js/pages/dashboard.init.js"></script> -->

                 <script src="assets/libs/alertifyjs/build/alertify.min.js"></script>

        <script src="assets/js/pages/alertifyjs.init.js"></script>


        <script src="assets/js/app.js"></script>


       

    </body>
</html>
