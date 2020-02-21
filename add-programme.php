
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Add Programme | Online Clearance</title>
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
                                    <h4 class="mb-0 font-size-18">School Programmes</h4>

                                
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row justify-content-center">
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Add New Programme</h4>
                                       
                                        
                                        <form class="mt-4" id="add-programme" method="POST">
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Name</label>
                                                    <input type="text" name="programme_name" class="form-control programme-name" id="validationCustom01" placeholder="Programme Name"required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                               
                                              
                                            </div>
                                           
                                            <button class="btn btn-primary text-center" type="submit">Add Programme</button>
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
                                        <h4 class="header-title mb-4">All Programmes</h4>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Date Created</th>
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
<form class=""  id="edit-programme" method="POST">
    <input type="hidden" name="programme_id" value="" id="programme_id">
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <label for="edit-programme-name">Name</label>
                                                    <input type="text" name="programme_name" class="form-control edit-programme-name" id="edit-programme-name" placeholder="Programme Name"required>
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





<?php  require_once 'footer.php';  ?>




                
              
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


 <script type='text/javascript'>
                $(document).ready(function(){

                    fetchProgrammes();

                     alertify.set('notifier','position', 'top-right');
                    $('#add-programme').submit(function(e){
                    e.preventDefault();
                    var formdata = $(this).serialize();

                    if($('.programme-name').val()===''){
                        alertify.error("Please Enter Name");
                    }else{

                 $.ajax({
                url:'api_calls/add-programme.php',
                type: 'POST',
                data: formdata,
                success:function(res){
                
                if(res === "success"){
            $('.programme-name').val('');
              alertify.success("Added Successfully");
              fetchProgrammes();

                }else if(res === "already"){
                 alertify.error("Name Exists Already");
                
                }
            },
                error:function(res){
                    console.log(res);
                }

            });

            }

                   

                })


            $('#edit-programme').submit(function(e){
                    e.preventDefault();
                    var formdata = $(this).serialize();

                    if($('.edit-programme-name').val()===''){
                        alertify.error("Please Enter Name");
                    }else{

                 $.ajax({
                url:'api_calls/update-programmes-details.php',
                type: 'POST',
                data: formdata,
                success:function(res){
                
                if(res === "success"){
              alertify.success("Updated Successfully");
              $('#myModal').modal('hide');
              fetchProgrammes();

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

                $('#programme_id').val(id);

                  $.ajax({
                url:'api_calls/get-programmes-details.php',
                type: 'POST',
                data: {id:id},
                success:function(res){
                
                $('.edit-programme-name').val(res.name);
                $('#myModal').modal('show');
            },
                error:function(res){
                    console.log(res);
                }

            });
            })


            $(document).on('click','.btn-delete',function(e){
                var id = $(this).attr('id');
                alertify.confirm("Are You Sure Want To Delete This Programme",
                  function(){
                    $.ajax({
                url:'api_calls/delete-programme.php',
                type: 'POST',
                data: {id:id},
                success:function(res){
                
                if(res==='success'){
                    alertify.success("Deleted Successfully");
                    fetchProgrammes();
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


        function fetchProgrammes(){
             $('.loadTable').load('api_calls/fetch-programmes.php');
        }
    
    </script>

    </body>
</html>
