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
		
		<title>Coupon Reserved CMS. Built 1.0</title>
		
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
	
	<style>
.tooltips {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltips .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  
  /* Position the tooltip */
  position: absolute;
  z-index: 1;
  bottom: 100%;
  left: 50%;
  margin-left: -60px;
}

.tooltips:hover .tooltiptext {
  visibility: visible;
}
.char_title_count:after {
    content: "characters";
    display:block;
    float:left;
    width: 80px;
    height:40px;
    position:absolute;
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

                        <?php 
								$select='select * from tblstores where id="'.$_GET['store_id'].'"';
								$connection=db_connect();
								$result=mysqli_query($connection,$select);
								$rows=mysqli_fetch_array($result);
						?>
                         <div class="row">
						 <div class="col-md-3">
						 <select class="form-control multi-select select2" onchange="edit_store_form(this.value)" >
                                                       <option selected disabled>Please Select Store </option>
							<?php list_stores(); ?>
						 </select>
						 </div>
                        	<div class="col-md-9">
                        		<div class="card-box">
                        			<h4 class="m-t-0 header-title"><b>Edit Store</b></h4>
										<div class="row" id="edit_store_response">
                        				 <div class="col-md-12 text-center">
											<h2>Please Select A Store</h2>
										 </div>
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
        

       
		<!-- Modal-Effect -->
        <script src="assets/plugins/custombox/js/custombox.min.js"></script>
        <script src="assets/plugins/custombox/js/legacy.min.js"></script>
		
		
		
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
		
		<script src="assets/plugins/summernote/summernote.min.js"></script>
		 <script src="assets/js/ajax_request.js"></script>
		 
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


function countTitle(title, counter, max) {
  var count = max - document.getElementById(title).value.length;
  if (count < 0) { document.getElementById(counter).innerHTML = "<span style=\"color: red;\">" + count + " characters</span>"; }
  else { document.getElementById(counter).innerHTML = "" + count + " characters"; }
}
function countDes(desc, counter, max) {
  var count = max - document.getElementById(desc).value.length;
  if (count < 0) { document.getElementById(counter).innerHTML = "<span style=\"color: red;\">" + count + " characters</span>"; }
  else { document.getElementById(counter).innerHTML = "" + count + " characters"; }
}
	
		</script>

<script>
//   $(document).ready(function(){  
//       function autoSave()  
//       {  
//             var store_id = $('#store_id').val();
//             var store_name = $('#s_name').val();
//             var heading = $('#s_heading').val();
//             var store_short_description = $('#shrt_desc').val();
//             var store_long_description = $('#lng_desc').val();
//             var meta_title = $('#title').val();
//             var meta_desc = $('#desc').val();
//           if(store_id != '' && meta_title != '')  
//           {  
//                 $.ajax({  
//                      url:"https://www.revounts.com.au/revounts_cms/php_scripts/autosave_store.php",  
//                      method:"POST",  
//                      data:{store_id:store_id, store_name:store_name, heading:heading,store_short_description:store_short_description,store_long_description:store_long_description,meta_title:meta_title,meta_desc:meta_desc},  
//                      dataType:"text",  
//                      success:function(data)  
//                      {  
//                           if(data != '')  
//                           {  
//                               $('#store_id').val(data);  
//                           }  
//                           $('#autoSave').text("Post save as draft");  
//                           setInterval(function(){  
//                               $('#autoSave').text('');  
//                           }, 5000);  
//                      }  
//                 });  
//           }            
//       }  
//       setInterval(function(){   
//           autoSave();   
//           }, 10000);  
//  });    
</script>
	
	</body>
</html>
<?php } else { header("Location: https://www.revounts.com.au/revounts_cms/"); die(); } ?>