<?php 
date_default_timezone_set("Asia/Karachi");
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
		
		<title>Cartincoupon Reserved CMS. Built 1.0</title>
		
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
		
		<!--Modal Css-->
	    <link href="assets/plugins/custombox/css/custombox.css" rel="stylesheet">
		
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/ajax_request.js"></script>
<style>
    #error_message{
  display: none;
}
</style>
		
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
						
						
						<div class="col-md-3" style="position: absolute; top: 4%; right: 1%;">
						    <select class="form-control multi-select select2" onchange="window.open(this.options[this.selectedIndex].value);" >
                                                       <option selected disabled>Search Stores</option>
            							<?php list_stores_search(); ?>
            						 </select>
						</div>

                        
                        <div class="row">
                        	<div class="col-sm-12">
                        		<div class="card-box">
                        			<h4 class="m-t-0 header-title"><b>Create Store</b></h4>
                        			
                        			
                        			
                        			<div class="row">
                        				<div class="col-md-12">
                        				
											<form class="form-horizontal" method="post"  enctype="multipart/form-data"  name="store_form">

												<input type="hidden" name="username" value="<?php echo $_SESSION['loginUser']?>">
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Store Name*</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="store_name" id="s_name"  class="form-control">
	                                   
	                                                </div>
	                                            </div>
												 <div class="form-group">
	                                                <label class="col-md-2 control-label">Store Slug* (URL For Your Store)</label>
	                                                <div class="col-md-10 slug-box">
	                                                    <input type="text" oncontextmenu="return false;" name="store_slug" onkeyup="nametourl();" id="slugText"   class="form-control">
	                                                    <p id='error_message'>Dot Not Use <b>Space</b></p>
	                                                    <div class="result"></div>
	                                                </div>
	                                            </div>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Heading*</label>
	                                                <div class="col-md-10">
	                                                    
														<input type="text" id="heading" name="store_heading" class="form-control">
													
	                                                </div>
	                                            </div>
												
												
											
												
												
												
												  
	                                                       
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Choose Categories</label>
	                                                <div class="col-md-10">
	                                                    <select class="form-control multi-select select2" id="cat" name="store_category[]">
                                                        <option value="Please Select">Please Select</option>
														<?php list_sub_categories(); ?>
														</select>
	                                                </div>
	                                            </div>
												 
	                                           
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Short Description</label>
	                                                <div class="col-md-10">
	                                                    <textarea type="text" class="summernote" value="" id="shrt_desc" name="store_short_description" ></textarea>
	                                                </div>
	                                            </div>
											   
	                                             
													<div class="form-group">
	                                                <label class="col-md-2 control-label">Long Description</label>
	                                                <div class="col-md-10">
	                                                    <textarea type="text" class="summernote" value="" id="lng_desc" name="store_long_description" ></textarea>
	                                                </div>
	                                            </div>		
	                                         
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Image</label>
	                                                <div class="col-md-10">
	                                                    <input type="file" class="filestyle" name="store_image" id="s_image"  data-iconname="fa fa-cloud-upload">
	                                                </div>
	                                            </div>
												
												
	                                           <div class="form-group">
	                                                <label class="col-md-2 control-label">Image Alt</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="alt" name="image_alt" value="">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Banner Image</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="alt" name="banner_image" value="">
	                                                </div>
	                                            </div>
												
												
												
												
												  <div class="form-group">
	                                                <label class="col-md-2 control-label">Direct URL</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="direct_url" name="direct_url" value="">
	                                                </div>
	                                            </div>
												
												  <div class="form-group">
	                                                <label class="col-md-2 control-label">Tracking URL</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="tracking_url" name="store_tracking_url" value="">
	                                                </div>
	                                            </div>
												 <div class="form-group">
	                                                <label class="col-md-2 control-label">Meta Title</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="title" name="meta_title" value="" maxlength="48">
	                                                    <span style="font-size: 10px;"><i>* <b>48</b> characters allowed.</i></span>
	                                                </div>
	                                                <!--Number of chars: <span id="sessionNum_counter">5</span>-->
	                                            </div>
	                                            
												
												 <div class="form-group">
	                                                <label class="col-md-2 control-label">Meta Description</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="desc" name="meta_desc" value="" maxlength="156">
	                                                    <span style="font-size: 10px;"><i>* <b>156</b> characters allowed.</i></span>
	                                                </div>
	                                            </div>
 
												<center><label>HelpFull Links</label></center>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Facebook</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="keywords" name="facebook" value="">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Pinterest</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="keywords" name="pinterest" value="">
	                                                </div>
	                                            </div>
												
												
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Twitter</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="keywords" name="twitter" value="">
	                                                </div>
	                                            </div>
	                                            
	                                            
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Instagram</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="keywords" name="instagram" value="">
	                                                </div>
	                                            </div>
	                                            
	                                            
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Youtube</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="keywords" name="youtube" value="">
	                                                </div>
	                                            </div>
	                                            
	                                            
	                                            
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Email</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="keywords" name="google_plus" value="">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Phone#</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="keywords" name="android" value="">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Address</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="keywords" name="ios" value="">
	                                                </div>
	                                            </div>
												
												<hr>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Top Store</label>
	                                                <div class="col-md-10">
	                                                    <input type="checkbox" name="top" id="feature"  value="1" checked data-plugin="switchery"  data-color="blue">
														
	                                                </div>
	                                            </div>
												
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Exclude Title Date</label>
	                                                <div class="col-md-10">
	                                                    <input type="checkbox" name="meta_date" id="feature"  value="1" checked data-plugin="switchery"  data-color="blue">
														
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">For Sitemap</label>
	                                                <div class="col-md-10">
	                                                    <input type="checkbox" name="for_sitemap" id="for_sitemap"  value="1" checked data-plugin="switchery"  data-color="blue">
														
	                                                </div>
	                                            </div>
	                                            
											
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Save Your Store</label>
	                                                <div class="col-md-10">
	                                                   <button type="button" onclick="add_store()" class="btn btn-purple waves-effect waves-light">Save</button>
													   <img src="images/spinner.gif" style="no-repeat center center;width:32px;height:32px; display:none;" id="loader">
	                                                </div>
	                                            </div>
												
											
	                                        </form>
                        				</div>
														
										<div class="col-md-6" id="error_box"  style="display:none; margin:auto;  margin-left:20%; text-align:center; border:2px solid red; ">
											<fieldset>
											<legend>Errors</legend>
												<p id="validation" style="color:black; font-weight:600;" ></p>
											</fieldset>
										
	                                            </div>
										
										
                        				<div id="custom-modal" class="modal-demo">
										</div>
						
						
							<a href="#custom-modal"  id="store_response" data-animation="door" data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a"></a>
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
       
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
		
		
		<!-- Modal-Effect -->
        <script src="assets/plugins/custombox/js/custombox.min.js"></script>
        <script src="assets/plugins/custombox/js/legacy.min.js"></script>
		
		
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
		
		<script>
		
			function nametourl()
			{
				var text=document.getElementById("slugText").value;
				
				var url=ToSeoUrl(text);
				
				document.getElementById("slugText").value=url;
				
				
			}
		
			function ToSeoUrl(url) {
        
  // make the url lowercase         
  var encodedUrl = url.toString().toLowerCase(); 

  // replace & with and           
  encodedUrl = encodedUrl.split(/\&+/).join("-and-")

  // remove invalid characters 
  encodedUrl = encodedUrl.split(/[^a-z0-9]/).join("-");       

  // remove duplicates 
  encodedUrl = encodedUrl.split(/-+/).join("-");

  // trim leading & trailing characters 
  encodedUrl = encodedUrl.trim('-'); 

  return encodedUrl; 
}

// $(document).ready(function(){
// var maxChars = $("#title");
// var max_length = maxChars.attr('maxlength');
// if (max_length > 0) {
//     maxChars.on('keyup', function(e){
//         length = new Number(maxChars.val().length);
//         counter = max_length-length;
//         $("#sessionNum_counter").text(counter);
//     });
// }
// });


function edit_store_form(id)
					{
						document.getElementById('edit_store_response').innerHTML='<center><img src="images/spinner.gif"></center>';
						var timestamp = new Date().getTime();
							 // Return Request
							  var xhttp = new XMLHttpRequest();
							  xhttp.onreadystatechange=function() {
								if (this.readyState == 4 && this.status == 200) {
									
								  document.getElementById('edit_store_response').innerHTML=this.responseText;
								   $('.summernote').summernote({
										height: 350,                 // set editor height
										minHeight: null,             // set minimum height of editor
										maxHeight: null,             // set maximum height of editor
										focus: false                 // set focus to editable area after initializing summernote
									});
								}
							  };
							 //Make Request	
							  xhttp.open("GET", "php_scripts/ajax_data.php?edit_store_form="+id+"&timeuniq="+timestamp, true);
							  xhttp.send();
					}
					
		</script>
		
		<script>
// $(document).ready(function(){
//     $('.slug-box input[type="text"]').on("keyup input", function(){
//         /* Get input value on change */
//         var inputVal = $(this).val();
//         var resultDropdown = $(this).siblings(".result");
//         if(inputVal.length){
//             $.get("https://www.revounts.com.au/revounts_cms/php_scripts/backend-search.php", {term: inputVal}).done(function(data){
//                 // Display the returned data in browser
//                 resultDropdown.html(data);
//             });
//         } else{
//             resultDropdown.empty();
//         }
//     });
    
//     // Set search input value on click of result item
//     $(document).on("click", ".result p", function(){
//         $(this).parents(".slug-box").find('input[type="text"]').val($(this).text());
//         $(this).parent(".result").empty();
//     });
// });
</script>

		
	
	</body>
</html>
<?php } else { header("Location: https://www.revounts.com.au/revounts_cms/"); die(); } ?>