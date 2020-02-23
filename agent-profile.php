
<?php


require_once 'db.php';

if(!isset($_COOKIE['si'])){
    echo '<script>window.location.href="index.php";</script>';
}else{
    $department = $_COOKIE['d'];
$id = $_COOKIE['si']; //clearers secret ID
}





        $pid = $id;
        $getAgentInfo = mysqli_query($connectionString,"SELECT * FROM clearing_agents WHERE `agent_secret_id`='$pid' LIMIT 1")or die(mysqli_error($connectionString));
        $agentDetails = mysqli_fetch_array($getAgentInfo);  


        $agent_name = $agentDetails['agent_name'];
        $agent_contact  = $agentDetails['agent_contact'];
        $agent_address  = $agentDetails['agent_address'];
        $agent_role  = $agentDetails['agent_role'];


?>


<!doctype html>
<html lang="en">

    <head>
         <meta charset="utf-8" />
        <title>Student Profile | Online Clearance</title>
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


        <style type="text/css">

          .profile__group {
    width: 100% !important;
}
            .profile{
  box-sizing: border-box;
  max-width: 380px;
  padding-top: 40px;

  font-family: "Roboto Condensed", "Arial", sans-serif;
  font-size: 14px;
  font-weight: 400;  
  color: #222;
  
  background-color: #fff;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12), 0 3px 1px -2px rgba(0, 0, 0, .2);
  text-align: center;
  
  position: relative;
  z-index: 0;
  overflow: hidden;
}

.profile:before{
  content: "";
  width: 85px;
  height: 50px;

  transition: transform .5s cubic-bezier(0.42, 0.04, 0.13, 0.92);
  border-radius: 50%;
  background-color: #15a251;

  position: absolute;
  top: -70px;
  left: 50%;
  z-index: -1;  
  transform: translateX(-50%) scale(7);
}

.profile:hover:before{
  transition: transform .7s cubic-bezier(0.66, 0.09, 0, 1.31);
  transform: translateX(-50%) translateY(200%) scale(25);
}

.profile:hover, .profile:hover .profile__value, .profile:hover .profile__social{
  color: #fff;

}

.profile:hover .profile__group, .profile:hover .profile__avatar{
  border-color: #fff;
}

.profile:hover .profile__stats{
  background-color: #0c7338;  
}

.profile__header{
  transition: color .4s ease-out .1s;  
}

.profile__avatar{
  border-radius: 50%;
  width: 120px;
  height: 120px;

  border: 6px solid #15a251;
  transition: border-color .4s ease-out .1s;
}

.profile:hover .profile__avatar{
  transition-delay: .2s;
}

.profile__name{
  margin-top: 10px;
  margin-bottom: 0;
  font-size: 30px;
}

.profile__stats{
  display: flex;
  justify-content: center;
  flex-wrap: wrap;  

  margin-top: 25px;
  margin-bottom: 25px;  

  background-color: #f0f0f0;
  padding-top: 25px;
  padding-bottom: 25px;
  transition: background-color .4s ease-out .1s;
}

.profile:hover .profile__stats{
  transition-delay: .2s;
}

/*.profile__group{
  box-sizing: border-box;
  width: 33.3333333%;
  transition: border-color .4s ease-out .1s;

  border-right: 1px solid #BDBDBD;
  padding-left: 2%;
  padding-right: 2%;
}

profile:hover .profile__group{
  transition-delay: .4s;
}

.profile__group:nth-child(n+4){
  margin-top: 20px;
}

.profile__group:nth-child(3n+3){
  border-right: none;
}*/

.profile__param, .profile__value{
  display: block;
  transition: color .4s ease-out .1s;
}

.profile__param{
  text-transform: uppercase;
}

.profile__value{
  font-size: 30px;
  color: #15a251;
  font-weight: 700;
}

.profile__socials{
  padding-bottom: 25px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.profile__social{
  border: 2px solid currentColor;
  color: #7B1FA2;
  border-radius: 50%;
  transition: color .4s ease-out .3s;
  
  margin-left: 10px;
  margin-right: 10px;  
  padding: 10px;
  position: relative;
}

.profile__social-icon{
  width: 18px;
  height: 18px;
  display: block;
  fill: currentColor;
}

.profile__social-name{
  position: absolute;
  left: -9999px;
}

/*
* demo styles
*/

        </style>

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
                                    <h4 class="mb-0 font-size-18">Clearing Office Profile</h4>

                                   
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                    

                    

                 

                        <div class="row justify-content-center">
                          
                                        



                                        <div class="page">
  <div class="page__container">
    <article class="profile">
      <header class="profile__header">
        <img src="assets/images/user_image.png" class="profile__avatar" alt="avatar of Stas Melnikov">
        <h3 class="profile__name"><?php echo $agent_name; ?></h3>
        <span class="profile__post"><?php echo $agent_role; ?></span>
      </header>
      <div class="profile__stats">

         <div class="profile__group">
          <span class="profile__value">Office</span>
          <span class="profile__param">Type</span>
        </div>   


        <div class="profile__group">
          <span class="profile__value"><?php echo $agent_contact; ?></span>
          <span class="profile__param">Contact</span>

        </div> 

        <div class="profile__group">
          <span class="profile__value"><?php echo $agent_role; ?></span>
          <span class="profile__param">Role</span>
        </div>   

              
      <!--   <div class="profile__group">
          <span class="profile__value"><?php echo $agent_role; ?></span>
          <span class="profile__param">Year Completed</span>
        </div>   -->        
             
                            
      </div>
      <footer class="profile__socials">
             <h3 class="profile__name"><?php echo $agent_address; ?></h3>              
      </footer>
    </article>
  </div>
</div>




                        </div>
                        <!-- end row -->
                        
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


        <script>
            
            $(document).ready(function(){
                $( ".profile" ).hover(
                  function() {
                    $('.profile__name').css({'color':'#fff'});
                  }, function() {
                    $('.profile__name').css({'color':'#495057'});
                  }
                );
            })


        </script>


      



    </body>
</html>
