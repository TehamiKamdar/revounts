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

        <title>Public Requests</title>

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

   <link href="assets/plugins/datatables/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/fixedheader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/datatables.colVis.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/datatables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
 
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
   .update_info{
       padding: 5px 0;
   }
   .update_info span {
           display:none;font-size: 12px; padding-left: 10px; color: #656565;
       }
        .update_info:hover span {
            display:inline-block;
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
                                    <li class="active tab">
                                        <a href="#home-2" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-home"></i></span> 
                                            <span class="hidden-xs">Contact Requests</span> 
                                        </a> 
                                    </li> 
                                    <li class="tab"> 
                                        <a href="#profile-2" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                            <span class="hidden-xs">Coupon Request</span> 
                                        </a> 
                                    </li>
                                </ul> 
                                <div class="tab-content"> 
                                
                                    <div class="tab-pane active" id="home-2"> 
                                     
									 	<div class="row">
								           <div class="col-sm-12">
								               <div class="card-box table-responsive">
                                                    <h4 class="m-t-0 header-title"><b>Contact Requests</b></h4>
								               <table id="datatablexx" class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Message</th>
                                                        <th>Date Added</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php contact_requests(); ?>
                                                    </tbody>
                                                </table>
                                            </div>
                            
                                        	</div>			
                					</div> <!--End Form Row-->
									 	 
                					</div> 
                					
                                    <div class="tab-pane" id="profile-2">
									
									 <div class="row">
								           <div class="col-sm-12">
								               <div class="card-box table-responsive">
                                                    <h4 class="m-t-0 header-title"><b>Coupon Requests</b></h4>
								               <table id="datatablexxx" class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>Store</th>
                                                        <th>Coupon Type</th>
                                                        <th>Coupon Title</th>
                                                        <th>Coupon Description</th>
                                                        <th>Date Added</th>
                                                        <th>IP Address</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php coupon_requests(); ?>
                                                    </tbody>
                                                </table>
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
     
          
			
			
			<div id="custom-modal" class="modal-demo">
			</div>
						
						
			<a href="#custom-modal"  id="settings_response" data-animation="door" data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a"></a>
			

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
        <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>

		
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script src="assets/js/ajax_request.js"></script>
		<!-- Modal-Effect -->
        <script src="assets/plugins/custombox/js/custombox.min.js"></script>
        <script src="assets/plugins/custombox/js/legacy.min.js"></script>

        <script src="assets/plugins/datatables/jquery.datatables.min.js"></script>
<script src="assets/plugins/datatables/datatables.bootstrap.js"></script>
	</body>
</html>
<script type="text/javascript">
	$(".select2").select2();

$(document).ready(function(){
       
	
$('#datatablexx').dataTable();
$('#datatablexxx').dataTable();
})

</script>
<?php } else { header("Location: https://www.revounts.com.au/revounts_cms/"); die(); } ?>