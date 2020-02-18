   
         <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/akim_state.gif" alt="" height="40">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/akim_state.gif" alt="" height="60">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/akim_state.gif" alt="" height="40">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/akim_state.gif" alt="" height="60"><span style="font-weight: bold;color: #9cd4b6;font-size: 1.1em;">AKIM STATE</span>
                                </spanAKIM>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-backburger"></i>
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

                     

                        <div class="dropdown d-none d-lg-inline-block ml-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-sm-inline-block ml-1">Shane</span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile</a>
                               
                                <a class="dropdown-item" href="index.php"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>
                            </div>
                        </div>
            
                    </div>
                </div>
            </header>
   
   
   
   
   
   
   
   
   
    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

<div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

            <li>
                <a href="index.html" class="waves-effect">
                    <i class="mdi mdi-view-dashboard"></i><span class="badge badge-pill badge-success float-right">3</span>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="add-programme.php" class=" waves-effect">
                    <i class="mdi mdi-calendar-month"></i>
                    <span>Programme</span>
                </a>
            </li>

            <li>
                <a href="add-department.php" class=" waves-effect">
                    <i class="mdi mdi-calendar-month"></i>
                    <span>Department</span>
                </a>
            </li>

            <li>
                <a href="add-clearer.php" class=" waves-effect">
                    <i class="mdi mdi-calendar-month"></i>
                    <span>Clearing Office</span>
                </a>
            </li>


            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-email-multiple-outline"></i>
                    <span>Student</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="add-student.php">Add Student</a></li>
                    <li><a href="view-students.php">View Student</a></li>
                    <li><a href="view-edit-students.php">Manage Student</a></li>
                </ul>
            </li>

            <li>
                <a href="index.php" class=" waves-effect">
                    <i class="mdi mdi-lock"></i>
                    <span>Logout</span>
                </a>
            </li>

        
    </div>
    <!-- Sidebar -->
</div>
</div>
<!-- Left Sidebar End -->