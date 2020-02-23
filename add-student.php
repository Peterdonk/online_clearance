<?php require_once 'db.php';  ?>
<!doctype html>
<html lang="en">

    <head>
         <meta charset="utf-8" />
        <title>Add Student | Online Clearance</title>
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
                                    <h4 class="mb-0 font-size-18">Students</h4>

                                  
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row justify-content-center">
                            <div class="col-sm-12 col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Add New Student</h4>
                                       
                                        
                                        <form class="mt-4" id="add-student" method="POST">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="name">Full Name</label>
                                                    <input type="text" name="name" class="form-control name" id="name" placeholder="Student Name"required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>

                                                 <div class="col-md-6 mb-3">
                                                    <label for="index_number">Index Number</label>
                                                    <input type="text" name="index_number" class="form-control index-number" id="index_number" placeholder="Index Number"required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>


                                                 <div class="col-md-6 mb-3">
                                                    <label for="department">Department</label>
                                                  <select class="form-control" id="department" name="department">
                                                      
                                                    <?php 

                                                    $get_departments = mysqli_query($connectionString,"SELECT * FROM departments_tbl")or die(mysqli_error($connectionString));

                                                    while($each_department = mysqli_fetch_array($get_departments)){

                                                    $department_id = $each_department['department_id'];
                                                    $department_name = $each_department['department_name'];

                                                    ?>

<option value="<?php echo $department_id; ?>"><?php echo $department_name;  ?></option>


                                              <?php  }    ?>


                                                  </select>
                                                </div>


                                                  <div class="col-md-6 mb-3">
                                                    <label for="department">Programme</label>
                                                  <select class="form-control" id="programme" name="programme">
                                                      
                                                    <?php 

                                                    $get_programmes = mysqli_query($connectionString,"SELECT * FROM programmes_tbl")or die(mysqli_error($connectionString));

                                                    while($each_programmes = mysqli_fetch_array($get_programmes)){

                                                    $programme_id = $each_programmes['programmes_id'];
                                                    $programme_name = $each_programmes['programmes_name'];

                                                    ?>

<option value="<?php echo $programme_id; ?>"><?php echo $programme_name;  ?></option>


                                              <?php  }    ?>


                                                  </select>
                                                </div>

                                                 <div class="col-md-6 mb-3">
                                                    <label for="contact">Contact</label>
                                                    <input type="text" name="contact" class="form-control contact" id="contact" placeholder="Contact"required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>

                                                 <div class="col-md-6 mb-3">
                                                    <label for="year_started">Year Registered</label>
                                                     <input placeholder="Year Registered" type="text" class="form-control" data-provide="datepicker" data-date-format="MM yyyy" data-date-autoclose="true" data-date-min-view-mode="1" required id="year_started" name="year_started">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                               

                                                <div class="col-md-6 mb-3">
                                                    <label for="year_completed">Year Completed</label>
                                                    <input placeholder="Year Completed" type="text" class="form-control" data-provide="datepicker" data-date-format="MM yyyy" data-date-autoclose="true" data-date-min-view-mode="1" required id="year_completed" name="year_completed">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                               
                                               
                                               
                                               
                                               
                                               
                                              
                                            </div>
                                           
                                            <button class="btn btn-primary text-center" type="submit">Add Student</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
<!-- sample modal content -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title mt-0" id="myModalLabel">Edit Department</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form class="needs-validation" novalidate id="edit-department" method="POST">
    <input type="hidden" name="depart_id" value="" id="depart_id">
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <label for="edit-department-name">Name</label>
                                                    <input type="text" name="department_name" class="form-control edit-department-name" id="edit-department-name" placeholder="Department Name"required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                               
                                              
                                            </div>
                                           
                                            
                                        
</div>
<div class="modal-footer">
<button type="button" class="btn btn-outline-secondary waves-effect" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-outline-primary waves-effect waves-light">Update</button>
</form>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->





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


 <script type='text/javascript'>
                $(document).ready(function(){
                   
                    fetchDepartments();

                     alertify.set('notifier','position', 'top-right');
                    $('#add-student').submit(function(e){
                    e.preventDefault();
                    var formdata = $(this).serialize();

                 $.ajax({
                url:'api_calls/add-student.php',
                type: 'POST',
                data: formdata,
                success:function(res){
                
                if(res === "success"){
              alertify.success("Added Successfully");
              $('#add-student').trigger("reset");
              $('#programme,#department').change();
              fetchDepartments();
                }else if(res === "already"){
                 alertify.error("Name Exists Already");
                
                }
            },
                error:function(res){
                    console.log(res);
                }

            });

     

                })


            $('#edit-department').submit(function(e){
                    e.preventDefault();
                    var formdata = $(this).serialize();

                    if($('.edit-department-name').val()===''){
                        alertify.error("Please Enter Name");
                    }else{

                 $.ajax({
                url:'api_calls/update-department-details.php',
                type: 'POST',
                data: formdata,
                success:function(res){
                
                if(res === "success"){
              alertify.success("Updated Successfully");
              $('#myModal').modal('hide');
              $('#edit-department').trigger("reset");
              fetchDepartments();

                }else if(res === "already"){
                 alertify.error("Name Exists Already");
                
                }
            },
                error:function(res){
                    console.log(res);
                }

            });

            }   

                });


            $(document).on('click','.btn-edit',function(e){
                

                var id = $(this).attr('id');

                $('#depart_id').val(id);

                  $.ajax({
                url:'api_calls/get-department-details.php',
                type: 'POST',
                data: {id:id},
                success:function(res){
                
                $('.edit-department-name').val(res.name);
                $('#myModal').modal('show');
            },
                error:function(res){
                    console.log(res);
                }

            });
            })


            $(document).on('click','.btn-delete',function(e){
                var id = $(this).attr('id');
                alertify.confirm("Are You Sure Want To Delete This Department",
                  function(){
                    $.ajax({
                url:'api_calls/delete-department.php',
                type: 'POST',
                data: {id:id},
                success:function(res){
                
                if(res==='success'){
                    alertify.success("Deleted Successfully");
                    fetchDepartments();
                }else{
                    alertify.error("Something went wrong");
                }
                
            },
                error:function(res){
                    console.log(res);
                }

            });
                  },
                  function(){
                   
                  }).set('labels', {ok:'Yes, Delete!', cancel:'Not Today'}).set('movable','true').setHeader('Delete Department');
            })





            });


        function fetchDepartments(){
             $('.loadTable').load('api_calls/fetch-departments.php');
        }
    
    </script>

    </body>
</html>
