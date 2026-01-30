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
		
		<title>Revounts Reserved CMS. Built 1.0</title>
		
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
                        			<h4 class="m-t-0 header-title"><b>ADD CATEGORY</b></h4>
                        			<div class="row">
                        				<div class="col-md-8">
                        					<form class="form-horizontal" role="form"name="add_cat_form" method="post">
											<input type="hidden"  name="add_cat"/>		
											
											    <div class="form-group">
                                                  <label class="col-md-2 control-label">Category Type</label>
                                                  <div class="col-md-10">
                                                    <label for="catType1">Parent Category</label>
                                                    <input type="radio" checked  onchange="setCatType(this.value)" name="type_radio" id="catType1" value="0">
                                                    <label for="catType2">Sub Category </label>
                                                    <input type="radio" onchange="setCatType(this.value)" name="type_radio" id="catType2" value="1"> 
                                                  </div>
                                                </div>
                                              
                                              
                                                <div class="form-group" id="subBox" style="display: none;">
                                                  <label class="col-md-2 control-label">Select Parent Category</label>
                                                  <div class="col-md-10">
                                                     <select class="form-control" name="parent">
                                                      <option>Please Select</option>
                                                      <?php parent_categories(); ?>
                                                     </select>
                                                  </div>
                                                </div> 
                                              
                                              
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Name*</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="cat_name" class="form-control" value="" >
	                                                </div>
	                                            </div>
												 <div class="form-group">
	                                                <label class="col-md-2 control-label">Slug*</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="cat_slug" class="form-control" value="" >
	                                                </div>
	                                            </div>
												 <div class="form-group">
	                                                <label class="col-md-2 control-label">Meta Title</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="cat_title" class="form-control" value="" >
	                                                </div>
	                                            </div>
												
												 <div class="form-group">
	                                                <label class="col-md-2 control-label">Meta Description</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="cat_meta_desc" class="form-control" value="" >
	                                                </div>
	                                            </div>
 
                                                <div class="form-group">
	                                                <label class="col-md-2 control-label">Description</label>
	                                                <div class="col-md-10">
	                                                    <textarea  class="form-control" name="cat_desc" ></textarea>
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="form-group" id="img_id">
	                                                <label class="col-md-2 control-label">Image</label>
	                                                <div class="col-md-10">
	                                                    <input type="file" class="filestyle" name="image" data-iconname="fa fa-cloud-upload">
	                                                </div>
	                                            </div>
	                                           
                                                  <div class="form-group">
	                                                <label class="col-md-2 control-label" id="get_result">Save Your Category</label>
	                                                <div class="col-md-10">
	                                                   <input type="button" onclick="add_category()" id="save_btn" class="btn btn-purple waves-effect waves-light" value="Submit">
	                                                <label id="response"> </label>
													</div>
	                                            </div>
	                                        </form>
                        				</div>
                        				  
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
            
            function setCatType(val)
            {
               var box=document.getElementById('subBox');
                
               var img=document.getElementById('img_id');
                
              if(val=='0')
              {
                box.style.display="none";
                img.style.display="block";
              }
              else if(val=='1')
              {
                box.style.display="block";
                img.style.display="none";
              } 
            }
            
        </script>
		
	
	</body>
</html>
<?php } else {
header('location: '.url.'revounts_cms');
}
 ?>