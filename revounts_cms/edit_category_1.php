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
		<meta name="description" content="">
		<meta name="author" content="">

		<link rel="shortcut icon" href="assets/images/favicon.png">
		
		<title>MyFirstSaving  Reserved CMS. Built 1.0</title>
		
		 <link href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
        <link href="assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
		
		
		
		
		<link href="assets/plugins/summernote/summernote.css" rel="stylesheet" />
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		
		
		
		<link href="assets/plugins/custombox/css/custombox.css" rel="stylesheet">
		
		
       
	
		<script src="assets/js/ajax_request.js" type="text/javascript"></script>
	
        <script src="assets/js/modernizr.min.js"></script>
		<?php include('includes/short.php'); ?>
		

	</head>

	<body class="fixed-left">

        <style>
            .waves-button-input{
                background-color: #7266ba !important;
                border: 0px !important;
            }
        </style>

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
						
						
						<a href="#custom-modal" id="modal" data-animation="door" data-plugin="custommodal" 
                                                    	data-overlaySpeed="100" data-overlayColor="#36404a"></a>
						
						
						
                        <div class="row">
                        	<div class="col-sm-12">
                        		<div class="card-box">
                        			<h4 class="m-t-0 header-title"><b>Edit CATEGORY</b></h4>
									<?php 
						$con=db_connect();
						$select="select * from tblcategory where id='".$_GET['catid']."'";
						$query=mysqli_query($con,$select);		
						$row=mysqli_fetch_array($query);
						?>
                        			<div class="row">
                        				<div class="col-md-8">
                        					<form class="form-horizontal" role="form"name="upd_cat_form" method="post">
											<input type="hidden"  name="upd_cat" value="<?php echo $_GET['catid'] ?>" />		
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Name*</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="upd_cat_name" class="form-control" value="<?php echo $row['name'] ?>" >
	                                                </div>
	                                            </div>
												 <div class="form-group">
	                                                <label class="col-md-2 control-label">Slug*</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="upd_cat_slug" class="form-control" value="<?php echo $row['slug'] ?>" >
	                                                </div>
	                                            </div>
												 <div class="form-group">
	                                                <label class="col-md-2 control-label">Meta Title</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="upd_cat_title" class="form-control" value="<?php echo $row['meta'] ?>" >
	                                                </div>
	                                            </div>
												
												 <div class="form-group">
	                                                <label class="col-md-2 control-label">Meta Description</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="upd_cat_meta_desc" class="form-control" value="<?php echo $row['meta_des'] ?>" >
	                                                </div>
	                                            </div>
 
                                               <div class="form-group">
	                                                <label class="col-md-2 control-label">Description</label>
	                                                <div class="col-md-10">
	                                                    <textarea  class="form-control" name="upd_cat_desc"  ><?php echo $row['des'] ?>
														</textarea>
	                                                </div>
	                                            </div>
	                                           
                                                  <div class="form-group">
	                                                <label class="col-md-2 control-label">Save Your Category</label>
	                                                <div class="col-md-10">
	                                                   <input type="button" onclick="update_category()" class="btn btn-purple waves-effect waves-light" value="Submit">
	                                                <label id="response"> </label>
													</div>
	                                            </div>
	                                        </form>
                        				</div>
                        				
                        			<!--	<div class="col-md-6">
                        					<form class="form-horizontal" role="form">                                    
	                                            
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Readonly</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" readonly="" value="Readonly value">
	                                                </div>
	                                            </div>                                    
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Disabled</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" disabled="" value="Disabled value">
	                                                </div>
	                                            </div>                                    
	                                            
	                                            
	                                            <div class="form-group">
	                                                <label class="col-sm-2 control-label">Static control</label>
	                                                <div class="col-sm-10">
	                                                  <p class="form-control-static">email@example.com</p>
	                                                </div>
	                                            </div>  
	                                            <div class="form-group">
	                                                <label class="col-sm-2 control-label">Helping text</label>
	                                                <div class="col-sm-10">
	                                                  <input type="text" class="form-control" placeholder="Helping text">
	                                                  <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
	                                                </div>
	                                            </div>  
	
	                                            <div class="form-group">
	                                                <label class="col-sm-2 control-label">Input Select</label>
	                                                <div class="col-sm-10">
	                                                    <select class="form-control">
	                                                        <option>1</option>
	                                                        <option>2</option>
	                                                        <option>3</option>
	                                                        <option>4</option>
	                                                        <option>5</option>
	                                                    </select>
	                                                    <h6>Multiple select</h6>
	                                                    <select multiple="" class="form-control">
	                                                        <option>1</option>
	                                                        <option>2</option>
	                                                        <option>3</option>
	                                                        <option>4</option>
	                                                        <option>5</option>
	                                                    </select>
	                                                </div>
	                                            </div> -->
	                           
	                                        </form>
                        				</div>
                        				
                        				
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
header('location: https://www.revounts.com.au/revounts_cms');
}
 ?>