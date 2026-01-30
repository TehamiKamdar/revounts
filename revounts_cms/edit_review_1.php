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

		<link rel="shortcut icon" href="assets/images/favicon.png">
		
		<title><?php echo sitename ?> Reserved CMS. Built 1.0</title>
		
		 <link href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
        <link href="assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
		
		<!--Modal Css-->
	<link href="assets/plugins/custombox/css/custombox.css" rel="stylesheet">
		
		
		<link href="assets/plugins/summernote/summernote.css" rel="stylesheet" />
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

         <script src="assets/js/modernizr.min.js"></script>
		 <script src="assets/js/ajax_request.js"></script>
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
						<?php include('includes/brdcrmb_settings.php'); 
						$select="select * from review where id='".$_GET['review_id']."'";
						$con=db_connect();
						$result=mysqli_query($con,$select);
						$rows=mysqli_fetch_array($result);
						
						?>

                        
                        <div class="row">
                        	<div class="col-sm-12">
                        		<div class="card-box">
                        			<h4 class="m-t-0 header-title"><b>Edit Review</b></h4>
                        			
                        			<div class="row">
                        				<div class="col-md-12">
                        					<form class="form-horizontal" role="form" enctype="multipart/form-data" id="reviewform"  name="review_edit_form"> 
											 <input type="hidden" name="review_id" value="<?php echo $rows['id'] ?>">		
											 <input type="hidden" name="old_img" value="<?php echo $rows['img'] ?>">		
	                                             
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Product Name</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="<?php echo $rows['product'] ?>" name="r_product">
	                                                </div>
	                                          </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Select Store</label>
	                                                <div class="col-md-10">
	                                                      <select class="form-control multi-select select2" id="store" name="r_store">
            		                                        <option>Select</option>
            		                                       
            		                                            <?php store_name($rows['store_id']); ?>   
            		                                            <?php echo list_stores(); ?>
            		                                       
            		                                      
            		                                    </select>
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Slug</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="<?php echo $rows['slug'] ?>" name="r_slug" readonly>
	                                                    <p><i>*Not Editable</i></p>
	                                                </div>
	                                            </div>
	                                           

												<div class="form-group">
	                                                <label class="col-md-2 control-label">Short Description</label>
	                                                <div class="col-md-10">
	                                                  
														  <textarea type="text" id="sum" class="summernote" name="r_short_description" ><?php echo $rows['short_desc'] ?></textarea>
	                                                </div>
	                                            </div>

											   <div class="form-group">
	                                                <label class="col-md-2 control-label">Review</label>
	                                                <div class="col-md-10">
	                                                    <textarea type="text" class="summernote" name="r_description" ><?php echo $rows['long_desc'] ?></textarea>
	                                                </div>
	                                            </div>
	                                                              
	                                         
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Image</label>
	                                                <div class="col-md-10">
	                                                    <input type="file" class="filestyle" name="review_image" data-iconname="fa fa-cloud-upload">
	                                                </div>
	                                            </div>
	                                            
	                                            
												
												
	                                           <div class="form-group">
	                                                <label class="col-md-2 control-label">Image Alt</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" name="img_alt" value="<?php echo $rows['img_alt'] ?>">
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Meta Title</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" name="r_meta_title" value="<?php echo $rows['meta_title'] ?>">
	                                                </div>
	                                            </div>
												
												 <div class="form-group">
	                                                <label class="col-md-2 control-label">Meta Description</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" name="r_meta_desc" value="<?php echo $rows['meta_desc'] ?>">
	                                                </div>
	                                            </div>
	                                             
                                                
                                                <div class="form-group">
	                                                <label class="col-md-2 control-label">Date</label>
	                                                <div class="col-md-4">
	                                                    <input type="date" class="form-control" name="date" value="<?php echo $rows['date']; ?>">
	                                                </div>
	                                            </div>
												 
												 
	                                             
											<?php if($rows['featured']==1)
											{	?>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Featured Check</label>
	                                                <div class="col-md-10">
	                                                    <input type="checkbox" name="r_feature[]" id="feature"  value="1" checked data-plugin="switchery"  data-color="#81c868">
                                                        <input type="hidden" name="r_feature[]" value="0">
	                                                </div>
	                                            </div>
											<?php } ?>
											
											<?php if($rows['featured']==0)
											{	?>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Featured Check</label>
	                                                <div class="col-md-10">
	                                                    <input type="checkbox" name="r_feature[]" id="feature"  value="1" data-plugin="switchery"  data-color="#81c868">
                                                        <input type="hidden" name="r_feature[]" value="0">
	                                                </div>
	                                            </div>
											<?php } ?>


											<?php if($rows['product_review']==1)
											{	?>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Product Check</label>
	                                                <div class="col-md-10">
	                                                    <input type="checkbox" name="product_review[]" id="product_review"  value="1" checked data-plugin="switchery"  data-color="#81c868">
                                                        <input type="hidden" name="product_review[]" value="0">
	                                                </div>
	                                            </div>
											<?php } ?>
											
											<?php if($rows['product_review']==0)
											{	?>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Product Check</label>
	                                                <div class="col-md-10">
	                                                    <input type="checkbox" name="product_review[]" id="product_review"  value="1" data-plugin="switchery"  data-color="#81c868">
                                                        <input type="hidden" name="product_review[]" value="0">
	                                                </div>
	                                            </div>
											<?php } ?>



											<?php if($rows['editor_choice']==1)
											{	?>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Editor Choice</label>
	                                                <div class="col-md-10">
	                                                    <input type="checkbox" name="editor_choice[]" id="editor_choice"  value="1" checked data-plugin="switchery"  data-color="#81c868">
                                                        <input type="hidden" name="editor_choice[]" value="0">
	                                                </div>
	                                            </div>
											<?php } ?>
											
											<?php if($rows['editor_choice']==0)
											{	?>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Editor Choice</label>
	                                                <div class="col-md-10">
	                                                    <input type="checkbox" name="editor_choice[]" id="editor_choice"  value="1" data-plugin="switchery"  data-color="#81c868">
                                                        <input type="hidden" name="editor_choice[]" value="0">
	                                                </div>
	                                            </div>
											<?php } ?>
											  <div class="form-group">
	                                                <label class="col-md-2 control-label">Draft</label>
	                                                <div class="col-md-10">
	                                                    <input type="checkbox" name="is_draft" id="is_draft"  value="1"  data-plugin="switchery"   data-color="#81c868">
	                                                </div>
	                                            </div>
											
											 
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Update Review</label>
	                                                <div class="col-md-10">
	                                                   <button type="button" onclick="edit_review()" class="btn btn-purple waves-effect waves-light">Submit</button>
                                                       <img src="images/spinner.gif" style="no-repeat center center;width:32px;height:32px; display:none; " id="loader"><span id="response"></span>
                   
                                          
	                                                </div>
	                                            </div>
							
	                                        </form>
                        				</div>
                                                    
                        				<div id="custom-modal" class="modal-demo">
										</div>
						
						
							<a href="#custom-modal"  id="blog_edit_response" data-animation="door" data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a"></a>
                        			
	                           
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
        <script type="text/javascript" src="assets/js/imagealt.js"></script>

        <script type="text/javascript" src="assets/pages/jquery.form-advanced.init.js"></script>
       

       
		
		<!-- Modal-Effect -->
        <script src="assets/plugins/custombox/js/custombox.min.js"></script>
        <script src="assets/plugins/custombox/js/legacy.min.js"></script>
		
		
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
		
		<script src="assets/plugins/summernote/summernote.min.js"></script>
		<script type="text/javascript" src="assets/js/imagealt.js"></script>
		 <script>

            jQuery(document).ready(function(){

                $('.summernote').summernote({
					 imageTitle: {
          specificAltField: true,
        },
        lang: 'en',
        popover: {
            image: [
                ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
                ['float', ['floatLeft', 'floatRight', 'floatNone']],
                ['remove', ['removeMedia']],
                ['custom', ['imageTitle','imageAlt']],
            ],
        },
                    height: 350,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false,
					dialogsFade: true	// set focus to editable area after initializing summernote
                });
                
                $('.inline-editor').summernote({
                    airMode: true            
                });

            });
      

        </script>
		
	
	</body>
</html>
<?php } else { header("Location: https://www.revounts.com.au/revounts_cms/"); die(); } ?>