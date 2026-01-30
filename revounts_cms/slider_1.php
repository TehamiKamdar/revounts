<?php 

include('php_scripts/dbconfig.php'); 
include('php_scripts/functions.php'); 

?>
<?php if($_SESSION['loginStatus'] == '1') { ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>CartInCoupon</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		
		
		 <link href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
        <link href="assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>
		
		<!--Modal Css-->
	<link href="assets/plugins/custombox/css/custombox.css" rel="stylesheet">
        
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php include('includes/topbar.php'); ?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

           <?php include('includes/sidebar.php'); ?>



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                       <?php include('includes/brdcrmb_settings.php'); ?>

                        <div class="row">
                            <div class="col-lg-12"> 
                                <ul class="nav nav-tabs tabs">
                                    <li class="tab"> 
                                        <a href="#messages-2" data-toggle="tab" aria-expanded="true"> 
                                            <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> 
                                            <span class="hidden-xs">Slider 1</span> 
                                        </a> 
                                    </li>
									<li class="tab"> 
                                        <a href="#messages-40" data-toggle="tab" aria-expanded="true"> 
                                            <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> 
                                            <span class="hidden-xs">Slider 2</span> 
                                        </a> 
                                    </li> 
									<li class="tab"> 
                                        <a href="#messages-50" data-toggle="tab" aria-expanded="true"> 
                                            <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> 
                                            <span class="hidden-xs">Slider 3</span> 
                                        </a> 
                                    </li>
									<li class="tab"> 
                                        <a href="#messages-3" data-toggle="tab" aria-expanded="true"> 
                                            <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> 
                                            <span class="hidden-xs">Advertise</span> 
                                        </a> 
                                    </li>
									
                                </ul> 
                                 
                                    <div class="tab-pane active" id="messages-2">
                                      
									 <div class="row">
								           <div class="col-sm-12">
                        		             <div class="card-box">
                        			      <h4 class="m-t-0 header-title"><b>Slider 1 Settings</b></h4>
                        			     <div class="row">
                        				<div class="col-md-12">
                        					<form class="form-horizontal" role="form" name="slider3_form" id="home">     
												
												<div class="form-group">
												  <input type="hidden" class="form-control" name="slider3" >
	                                                <label class="col-md-2 control-label">Image</label>
	                                                <div class="col-md-10">
	                                                    <input type="file" class="form-control" name="slider3_image" value="">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Link</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" name="slider3_link" value="">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Select Store</label>
	                                                <div class="col-md-10">
	                                                  <select class="form-control select2" name="slider3_store">
													  <?php list_stores(); ?>
													  </select>
	                                                </div>
	                                            </div>
												
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Save Settings</label>
	                                                <div class="col-md-2">
	                                             <button type="button"  class="btn btn-primary" onclick="sliderthree()" value="">Save</button>
											
	                                                </div>
													
	                                            </div>
												
	                                        </form>
                        				</div>
                        				
                        				
                        			</div>
									
									
                        		</div>
                        	</div>			
					     </div> <!--End Form Row-->	
									

									  
									</div>
									
									<div class="tab-pane" id="messages-40">
                                      
									 <div class="row">
								           <div class="col-sm-12">
                        		             <div class="card-box">
                        			      <h4 class="m-t-0 header-title"><b>Slider 2 Settings</b></h4>
                        			     <div class="row">
                        				<div class="col-md-12">
                        					<form class="form-horizontal" role="form" name="slider40_form" id="home">     
												
												<div class="form-group">
												  <input type="hidden" class="form-control" name="slider40" >
	                                                <label class="col-md-2 control-label">Image</label>
	                                                <div class="col-md-10">
	                                                    <input type="file" class="form-control" name="slider40_image" value="">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Link</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" name="slider40_link" value="">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Select Store</label>
	                                                <div class="col-md-10">
	                                                  <select class="form-control select2" name="slider40_store">
													  <?php list_stores(); ?>
													  </select>
	                                                </div>
	                                            </div>
												
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Save Settings</label>
	                                                <div class="col-md-2">
	                                             <button type="button"  class="btn btn-primary" onclick="sliderfourty()" value="">Save</button>
											
	                                                </div>
													
	                                            </div>
												
	                                        </form>
                        				</div>
                        				
                        				
                        			</div>
									
									
                        		</div>
                        	</div>			
					     </div> <!--End Form Row-->	
									

									  
									</div>
									<div class="tab-pane" id="messages-50">
                                      
									 <div class="row">
								           <div class="col-sm-12">
                        		             <div class="card-box">
                        			      <h4 class="m-t-0 header-title"><b>Slider 3 Settings</b></h4>
                        			     <div class="row">
                        				<div class="col-md-12">
                        					<form class="form-horizontal" role="form" name="slider50_form" id="home">     
												
												<div class="form-group">
												  <input type="hidden" class="form-control" name="slider50" >
	                                                <label class="col-md-2 control-label">Image</label>
	                                                <div class="col-md-10">
	                                                    <input type="file" class="form-control" name="slider50_image" value="">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Link</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" name="slider50_link" value="">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Select Store</label>
	                                                <div class="col-md-10">
	                                                  <select class="form-control select2" name="slider50_store">
													  <?php list_stores(); ?>
													  </select>
	                                                </div>
	                                            </div>
												
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Save Settings</label>
	                                                <div class="col-md-2">
	                                             <button type="button"  class="btn btn-primary" onclick="sliderfifty()" value="">Save</button>
											
	                                                </div>
													
	                                            </div>
												
	                                        </form>
                        				</div>
                        				
                        				
                        			</div>
									
									
                        		</div>
                        	</div>			
					     </div> <!--End Form Row-->	
									

									  
									</div>
									
									
									  <div class="tab-pane" id="messages-3">
                                      
									 <div class="row">
								           <div class="col-sm-12">
                        		             <div class="card-box">
                        			      <h4 class="m-t-0 header-title"><b>Ads</b></h4>
                        			     <div class="row">
                        				<div class="col-md-12">
                        					<form class="form-horizontal" role="form" name="slider4_form" id="home">     
												
												<div class="form-group">
												  <input type="hidden" class="form-control" name="slider4" >
	                                                <label class="col-md-2 control-label">Image</label>
	                                                <div class="col-md-10">
	                                                    <input type="file" class="form-control" name="slider4_image" value="">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Link</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" name="slider4_link" value="">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Select Store</label>
	                                                <div class="col-md-10">
	                                                  <select class="form-control select2" name="slider4_store">
													  <?php list_stores(); ?>
													  </select>
	                                                </div>
	                                            </div>
												
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Save Settings</label>
	                                                <div class="col-md-2">
	                                             <button type="button"  class="btn btn-primary" onclick="sliderfour()" value="">Save</button>
											
	                                                </div>
													
	                                            </div>
												
	                                        </form>
                        				</div>
                        				
                        				
                        			</div>
									
									
                        		</div>
                        	</div>			
					     </div> <!--End Form Row-->	
									

									  
									</div>

						


									
                                   
                                </div> 
                            </div> 

                            
                        </div>
                         <!-- end row -->

               <?php include('includes/footer.php'); ?>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->
			
			
			<div id="custom-modal" class="modal-demo">
			</div>
						
						
			<a href="#custom-modal"  id="slider" data-animation="door" data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a"></a>
			

        </div>
        <!-- END wrapper -->
    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

		
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script src="assets/js/ajax_request.js"></script>
    
		<!-- Modal-Effect -->
        <script src="assets/plugins/custombox/js/custombox.min.js"></script>
        <script src="assets/plugins/custombox/js/legacy.min.js"></script>
	</body>
</html>
<?php } ?>