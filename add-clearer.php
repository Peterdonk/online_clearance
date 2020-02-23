

<?php  require_once 'db.php';  ?>
<!doctype html>
<html lang="en">

    <head>
         <meta charset="utf-8" />
        <title>Clearing Office | Online Clearance</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="An online clearing system for Akim State College University" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/akim_state.gif">

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

        <link href="assets/css/select2.min.css" rel="stylesheet" type="text/css" />

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
                                    <h4 class="mb-0 font-size-18">Add Clearing Office</h4>

                                  
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row justify-content-center">
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Add New Clearing Office</h4>
                                       
                                        
                                        <form class=" mt-4"  id="add-agent" method="POST">
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" class="form-control name" id="name" placeholder="Name"required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label for="contact">Contact</label>
                                                    <input type="text" name="Contact" class="form-control contact" id="contact" placeholder="Contact"required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Department</label>
                                                  <select id="select2" class="form-control" name="department[]" multiple>
                                                      <option value="0">All</option>

                                                        <?php 

                                                    $get_departments = mysqli_query($connectionString,"SELECT * FROM departments_tbl")or die(mysqli_error($connectionString));

                                                    while($each_department = mysqli_fetch_array($get_departments)){

                                                    $department_id = $each_department['department_id'];
                                                    $department_name = $each_department['department_name'];

                                                    ?>

<option value="<?php echo $department_id; ?>"><?php echo $department_name;  ?></option>


                                              <?php  };    ?>
                                                  </select>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label for="role">Role</label>
                                                    <input type="text" name="role" class="form-control role" id="role" placeholder="Role" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Address</label>
                                                   <textarea rows="5" placeholder="Address" name="address" class="form-control"></textarea>
                                                    <div class="valid-feedback" required>
                                                        Looks good!
                                                    </div>
                                                </div>
                                               
                                              
                                            </div>
                                           
                                            <button class="btn btn-primary text-center" type="submit">Add Clearing Agent</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                         <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">All Clearing Agents</h4>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Contact</th>
                                                        <th scope="col">Departments</th>
                                                        <th scope="col">Role</th>
                                                        <th scope="col">Address</th>
                                                        <th scope="col">Username</th>
                                                        <th scope="col">Password</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="loadTable">
                                                   
                                                        
                                                        
                                                      
                                                        
                                                  
                                                 
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
<!-- sample modal content -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title mt-0" id="myModalLabel">Edit Programme</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form class=""  id="edit-agent" method="POST">
    <input type="hidden" name="agent_id" value="" id="agent_id">
                                            
       <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" class="form-control name" id="edit-name" placeholder="Name"required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label for="contact">Contact</label>
                                                    <input type="text" name="Contact" class="form-control contact" id="edit-contact" placeholder="Contact"required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Department</label>
                                                  <select id="select22" class="form-control" name="department[]" multiple>
                                                      <option value="0">All</option>

                                                        <?php 

                                                    $get_departments = mysqli_query($connectionString,"SELECT * FROM departments_tbl")or die(mysqli_error($connectionString));

                                                    while($each_department = mysqli_fetch_array($get_departments)){

                                                    $department_id = $each_department['department_id'];
                                                    $department_name = $each_department['department_name'];

                                                    ?>

<option value="<?php echo $department_id; ?>"><?php echo $department_name;  ?></option>


                                              <?php  };    ?>
                                                  </select>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label for="role">Role</label>
                                                    <input type="text" name="role" class="form-control role" id="edit-role" placeholder="Role" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Address</label>
                                                   <textarea rows="5" placeholder="Address" id="edit-address" name="address" class="form-control"></textarea required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>


                                                 <div class="col-md-12 mb-3">
                                                    <label for="edit-username">Username</label>
                                                   <input placeholder="Username" id="edit-username" name="username" class="form-control" required readonly>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>


                                                 <div class="col-md-12 mb-3">
                                                    <label for="edit-password">Password</label>
                                                   <input placeholder="password" id="edit-password" name="password" class="form-control" required>
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

        <!-- parsleyjs -->
        <script src="assets/libs/parsleyjs/parsley.min.js"></script>
        <!-- validation init -->
        <script src="assets/js/pages/form-validation.init.js"></script>

         <script src="assets/libs/alertifyjs/build/alertify.min.js"></script>

        <script src="assets/js/pages/alertifyjs.init.js"></script>

        <script src="assets/js/app.js"></script>

        <script src="assets/js/select2.min.js"></script>


 <script type='text/javascript'>
                $(document).ready(function(){

                     $('#select2,#select22').select2({
                        width: '100%'
                      });

                    fetchAgents();

                     alertify.set('notifier','position', 'top-right');
                    $('#add-agent').submit(function(e){
                    e.preventDefault();
                    var formdata = $(this).serialize();

                 $.ajax({
                url:'api_calls/add-agent.php',
                type: 'POST',
                data: formdata,
                success:function(res){
                
                if(res === "success"){
                    $('#add-agent').trigger("reset");
                    $('#select2,#select22').trigger('change');
         
              alertify.success("Added Successfully");
              fetchAgents();

                }else if(res === "already"){
                 alertify.error("Name Exists Already");
                
                }
            },
                error:function(res){
                    console.log(res);
                }

            });

          

                   

                })


            $('#edit-agent').submit(function(e){
                    e.preventDefault();
                    var formdata = $(this).serialize();

                 $.ajax({
                url:'api_calls/update-agent-details.php',
                type: 'POST',
                data: formdata,
                success:function(res){
                
                if(res === "success"){
              alertify.success("Updated Successfully");
              $('#myModal').modal('hide');
              fetchAgents();

                }else if(res === "already"){
                 alertify.error("Name Exists Already");
                
                }
            },
                error:function(res){
                    console.log(res);
                }

            });

           

                });


            $(document).on('click','.btn-edit',function(e){
                

                var id = $(this).attr('id');

                $('#agent_id').val(id);

                  $.ajax({
                url:'api_calls/get-clearing-agent-details.php',
                type: 'POST',
                data: {id:id},
                success:function(res){

                var departments_array = res.department;
                
                $('#edit-name').val(res.name);
                $('#edit-contact').val(res.contact);
                $('#edit-username').val(res.username);
                $('#edit-password').val(res.password);
                $('#edit-address').html(res.address);
                $('#edit-role').val(res.role);
                $('#select22').val(departments_array).trigger('change');
                $('#myModal').modal('show');
            },
                error:function(res){
                    console.log(res);
                }

            });
            })


            $(document).on('click','.btn-delete',function(e){
                var id = $(this).attr('id');
                alertify.confirm("Are You Sure Want To Delete This Agent",
                  function(){
                    $.ajax({
                url:'api_calls/delete-agent.php',
                type: 'POST',
                data: {id:id},
                success:function(res){
                
                if(res==='success'){
                    alertify.success("Deleted Successfully");
                    fetchAgents();
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
                   
                  }).set('labels', {ok:'Yes, Delete!', cancel:'Not Today'}).set('movable','true').setHeader('Delete Agent');
            })





            });


        function fetchAgents(){
             $('.loadTable').load('api_calls/fetch-clearing-agents.php');
        }
    
    </script>

    </body>
</html>
