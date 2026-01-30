<?php

include('php_scripts/dbconfig.php'); 
include('php_scripts/functions.php');

if(isset($_GET['un']))
{
	$con=db_connect();
	$select="select * from tbluser where uname='".$_GET['un']."'";
	$result=mysqli_query($con,$select);
	$row=mysqli_fetch_array($result);
	
}





?>
<?php if($_SESSION['loginStatus'] == '1') { ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

		<link rel="shortcut icon" href="assets/images/favicon.png">
		
		<title>Cartincoupon Reserved CMS. Built 1.0</title>
		
		 <link href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
        <link href="assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
		
		<link href="assets/plugins/custombox/css/custombox.css" rel="stylesheet">
		
		
		<link href="assets/plugins/summernote/summernote.css" rel="stylesheet" />
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		
		
		<script src="assets/js/ajax_request.js" type="text/javascript"></script>
		
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>
		<?php include('includes/short.php'); ?>
	</head>

	<body class="fixed-left">

		<!-- Begin page -->
		<div id="wrapper">

            <!-- Top Bar Start -->
           <?php include('includes/topbar.php'); ?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
		<?php include('includes/sidebar.php'); ?>
			<!-- Left Sidebar End -->

			<!-- ============================================================== -->
			<!-- Start right Content here -->
			<!-- ============================================================== -->
			<div class="content-page">
				<!-- Start content -->
				<div class="content">
					<div class="container">

						<!-- Page-Title -->
						<?php include('includes/brdcrmb_settings.php'); ?>

						
						
						
						
       
		
				
			<div id="custom-modal" class="modal-demo">
			   
			     <button type="button" class="close" onclick="Custombox.close();">
			        <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Created</h4>
			    <div class="custom-modal-text" id="response">
				
				</div>

			</div>
						
						
						<a href="#custom-modal" id="modal" data-animation="sidefall" data-plugin="custommodal" 
                                                    	data-overlaySpeed="100" data-overlayColor="#36404a"></a>
						
						
						
					<p id="demo"></p>
					  
                        <div class="row">
                        	<div class="col-sm-6">
                        		<div class="card-box">
                        			<h4 class="m-t-0 header-title"><b>Assign Role</b></h4>
                        			
                        			<div class="row">
                        				<div class="col-md-12">
                        					<form class="form-horizontal" role="form" name="roles">  
												
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Select User</label>
	                                                <div class="col-md-10">
	                                         <select class="select2 " data-placeholder="Choose ...">  
		                                         <?php  users_list();
													?>
		                                       
		                                    </select>
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">General Settings</label>
	                                                <div class="col-md-10">
													<input type="hidden" name="roles">
													<input type="hidden" name="userid" value="<?php echo $row['id']; ?>">
	                                         <input type="checkbox" data-plugin="switchery" value="1" name="settings[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                         <input type="hidden" data-plugin="switchery" value="0" name="settings[]">
	
	                                                </div>
													
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Add User</label>
	                                                <div class="col-md-10">
	                                         <input type="checkbox" value="1" data-plugin="switchery" name="add_user[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                         <input type="hidden" value="0" data-plugin="switchery" name="add_user[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                                </div>
													<hr>
													<label class="col-md-2 control-label">Edit User</label>
	                                                <div class="col-md-10">
	                                         <input type="checkbox" value="1" data-plugin="switchery" name="edit_user[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                         <input type="hidden" value="0" data-plugin="switchery" name="edit_user[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                        
	                                                </div>
													
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Add Network</label>
	                                                <div class="col-md-10">
	                                         <input type="checkbox" value="1" data-plugin="switchery" name="add_network[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                         <input type="hidden" value="0" data-plugin="switchery" name="add_network[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                                </div>
													<hr>
													<label class="col-md-2 control-label">Edit Network</label>
	                                                <div class="col-md-10">
	                                         <input type="checkbox" value="1" data-plugin="switchery" name="edit_network[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                         <input type="hidden" value="0" data-plugin="switchery" name="edit_network[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                                </div>
													
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Add Categories</label>
	                                                <div class="col-md-10">
	                                         <input type="checkbox" value="1" data-plugin="switchery" name="add_category[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                         <input type="hidden" value="0" data-plugin="switchery" name="add_category[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                                </div>
													<hr>
													<label class="col-md-2 control-label">Edit Categories</label>
	                                                <div class="col-md-10">
	                                         <input type="checkbox" value="1" data-plugin="switchery" name="edit_category[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                         <input type="hidden" value="0" data-plugin="switchery" name="edit_category[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                                </div>
													
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Add Stores</label>
	                                                <div class="col-md-10">
	                                         <input type="checkbox" value="1" data-plugin="switchery" name="add_stores[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                         <input type="hidden" value="0" data-plugin="switchery" name="add_stores[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                                </div>
													<hr>
													<label class="col-md-2 control-label">Edit Stores</label>
	                                                <div class="col-md-10">
	                                         <input type="checkbox" value="1" data-plugin="switchery" name="edit_stores[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                         <input type="hidden" value="0" data-plugin="switchery" name="edit_stores[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                                </div>
													
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Add Coupons</label>
	                                                <div class="col-md-10">
	                                         <input type="checkbox" value="1" data-plugin="switchery" name="add_coupons[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                         <input type="hidden" value="0" data-plugin="switchery" name="add_coupons[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                                </div>
													<hr>
													<label class="col-md-2 control-label">Edit Coupons</label>
	                                                <div class="col-md-10">
	                                         <input type="checkbox" value="1" data-plugin="switchery" name="edit_coupons[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                         <input type="hidden" value="0" data-plugin="switchery" name="edit_coupons[]" data-color="#f05050">
	                                                </div>
													
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Add Deals</label>
	                                                <div class="col-md-10">
	                                         <input type="checkbox" value="1" data-plugin="switchery" name="add_deals[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                         <input type="hidden" value="0"  name="add_deals[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                                </div>
													<hr>
													<label class="col-md-2 control-label">Edit Deals</label>
	                                                <div class="col-md-10">
	                                         <input type="checkbox" value="1" data-plugin="switchery" name="edit_deals[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                         <input type="hidden" value="0" data-plugin="switchery" name="edit_deals[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                                </div>
													
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Add Blog</label>
	                                                <div class="col-md-10">
	                                         <input type="checkbox" value="1" data-plugin="switchery" name="add_blog[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                         <input type="hidden" value="0" data-plugin="switchery" name="add_blog[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                                </div>
													<hr>
													<label class="col-md-2 control-label">Edit Blog</label>
	                                                <div class="col-md-10">
	                                         <input type="checkbox" value="1" data-plugin="switchery" name="edit_blog[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                         <input type="hidden" value="0" data-plugin="switchery" name="edit_blog[]" data-color="#f05050" data-switchery="true" style="display: none;">
	                                                </div>
													
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Save</label>
	                                                <div class="col-md-10">
	                                         <button type="button"   onclick="assign_roles()" class="btn btn-primary">Save</button>
	                                                </div>
													
													
	                                            </div>
												
												
												
												
												 
                        				</div>
										
										
                        				</div>
										</form>
                        				
                        				
                        			</div>
                        		</div>
                        	</div>
                        </div>

                     
                               
                </div> <!-- content -->

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

		
        <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="assets/plugins/switchery/js/switchery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

        <script type="text/javascript" src="assets/plugins/autocomplete/jquery.mockjax.js"></script>
        <script type="text/javascript" src="assets/plugins/autocomplete/jquery.autocomplete.min.js"></script>
        <script type="text/javascript" src="assets/plugins/autocomplete/countries.js"></script>
        <script type="text/javascript" src="assets/pages/autocomplete.js"></script>

        <script type="text/javascript" src="assets/pages/jquery.form-advanced.init.js"></script>
       

	   
	   
	   <!-- Modal-Effect -->
        <script src="assets/plugins/custombox/js/custombox.min.js"></script>
        <script src="assets/plugins/custombox/js/legacy.min.js"></script>
	   
	   
		
		
		
		
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
		
		<script src="assets/plugins/summernote/summernote.min.js"></script>
		
		 <script>

            jQuery(document).ready(function(){

                $('.summernote').summernote({
                    height: 350,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
                
                $('.inline-editor').summernote({
                    airMode: true            
                });

            });
        </script>
		
	
	</body>
</html>
<?php } else {
header('location: https://www.myfirstsaving.com/saving_cms');
} 
?>