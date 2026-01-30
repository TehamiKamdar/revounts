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
		<meta name="author" content="">
		<link rel="shortcut icon" href="assets/images/favicon.png">
		<title>Edit Author</title>
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
						$select="select * from author where id='".$_GET['authorId']."'";
						$con=db_connect();
						$query=mysqli_query($con,$select);
						$row=mysqli_fetch_array($query);
						?>
                         <div class="row">
                        	<div class="col-sm-12">
                        		<div class="card-box">
                        			<h4 class="m-t-0 header-title"><b>Edit Author</b></h4>
                        			<div class="row">
                        				<div class="col-md-12">
                        				
											<form class="form-horizontal" method="post"  enctype="multipart/form-data"  name="update_author_form">
												<input type="hidden" name="update_author" value="<?php echo $row['id'] ?>">
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Author Name*</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="author_name" value="<?php echo $row['name'] ?>"  class="form-control">
	                                                </div>
	                                            </div>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Author Url*</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="author_url" value="<?php echo $row['slug'] ?>"   class="form-control" >
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Author Gender*</label>
	                                                <div class="col-md-10">
	                                                    <select name="gender"  class="form-control">
														<option value="m">Male</option>
														<option value="f" selected>Female</option>
														</select>
	                                                </div>
	                                            </div>
												 
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Author Description</label>
	                                                <div class="col-md-10">
	                                                    <textarea type="text" class="summernote"   name="author_desc" >
														<?php echo $row['short_desc'] ?>
														</textarea>
	                                                </div>
	                                            </div>
											   
											   <div class="form-group">
	                                                <label class="col-md-2 control-label">Avatar</label>
	                                                <div class="col-md-10">
	                                                    <input type="file" class="filestyle" name="avatar" data-iconname="fa fa-cloud-upload">
	                                                </div>
	                                            </div>
											   
												 <div class="form-group">
	                                                <label class="col-md-2 control-label">Meta Title</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control"  name="author_title" value="<?php echo $row['meta_title'] ?>">
	                                                </div>
	                                            </div>
	                                            
												
												 <div class="form-group">
	                                                <label class="col-md-2 control-label">Meta Description</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" name="author_meta_desc" value="<?php echo $row['meta_desc'] ?>">
	                                                </div>
	                                            </div>
                                               
												
												<center><label>Author Social Profiles</label></center>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Facebook</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="keywords" name="facebook"  value="<?php echo $row['facebook'] ?>">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Twitter</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="keywords" name="twitter" value="<?php echo $row['twitter'] ?>">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Google Plus</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="keywords" name="google_plus" value="<?php echo $row['google'] ?>">
	                                                </div>
	                                            </div>


                                                   <div class="form-group">
	                                                <label class="col-md-2 control-label">Quora</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="keywords" name="quora" value="<?php echo $row['quora'] ?>">
	                                                </div>
	                                            </div>

												<div class="form-group">
	                                                <label class="col-md-2 control-label">Contact</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="keywords" name="contact" value="<?php echo $row['contact'] ?>">
	                                                </div>
	                                            </div>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Email</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="keywords" name="email" value="<?php echo $row['email'] ?>">
	                                                </div>
	                                            </div>
                                                         <div class="form-group">
	                                                <label class="col-md-2 control-label">Show In Sidebar</label>
	                                                <div class="col-md-10">
	                                                    <?php if($row['sidebar']=='1') { ?>
                                                           <input type="checkbox" class="form-control"  name="sidebar[]" checked value="1">
                                                            <?php } else { ?>
                                                             <input type="checkbox" class="form-control"  name="sidebar[]" value="1">
                                                            <?php } ?>
                                                            <input type="hidden" class="form-control"  name="sidebar[]" value="0">
	                                                </div>
	                                            </div>
												
												<hr>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Save</label>
	                                                <div class="col-md-10">
	                                                   <button type="button" onclick="updateAuthor()" class="btn btn-purple waves-effect waves-light">Save</button>
													   <img id="spinner" src=""><span id="status"></span>
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

										<div id="custom-modal" class="modal-demo">
										</div>
						
						
										<a href="#custom-modal"  id="store_edit_response" data-animation="door" data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a"></a>
                               
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
         <script src="assets/js/ajax_request.js"></script>

       
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
		<script>
		
			function nametourl()
			{
				var text=document.getElementById("s_slug").value;
				
				var url=ToSeoUrl(text);
				
				document.getElementById("s_slug").innerText=url;
				
				
				
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
		
		</script>
	
	</body>
</html>
<?php } ?>