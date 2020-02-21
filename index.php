<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Login | Online Clearance</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="An online clearing system for Akim State College University" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/akim_state.gif">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="bg-primary bg-pattern">
        <div class="home-btn d-none d-sm-block">
            <a href="index.html"><i class="mdi mdi-home-variant h2 text-white"></i></a>
        </div>

        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <a href="index.php" class="logo"><img src="assets/images/akim_state.gif" height="100" alt="logo"></a>
                            <h5 class="font-size-16 text-white-50 mb-4">Online Clearance System</h5>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                    <h5 class="mb-5 text-center">Sign In </h5>
                                    <form class="form-horizontal" method="POST" id="sign_in_form">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mb-4">
                                                    <label for="username">Username</label>
                                                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" required>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="userpassword">Password</label>
                                                    <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password" required>
                                                </div>

                                              
                                                <div class="mt-4 mb-4">
                                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">
                                                         <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>

                                                    Log In</button>
                                                </div>

                                                <div class="text-center" id="error-show">
                                                    <span style="margin-top: 10px;font-weight: bolder;color: red">Username or Password Incorrect</span>
                                                </div>
                                                
                                              
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>


        <script type='text/javascript'>
                $(document).ready(function(){

                    $('.spinner-border').hide();
                    $('#error-show').hide();

                    $('#sign_in_form').submit(function(e){
                        $('.spinner-border').show();
                    e.preventDefault();
                    var formdata = $(this).serialize();

                 $.ajax({
                url:'api_calls/login.php',
                type: 'POST',
                data: formdata,
                success:function(res){
                
                if(res === "office"){
                
                window.location.href='agents.php';

                }else if(res === "not_exist"){
                $('#error-show').show();
                $('.spinner-border').hide();
                
                }else if(res === "student"){
                    window.location.href='students.php';
                }else if(res === "admin"){
                    window.location.href='add-programme.php'
                }
            },
                error:function(res){
                    console.log(res);
                }

            });

                })

            });
    
    </script>

    </body>
</html>
