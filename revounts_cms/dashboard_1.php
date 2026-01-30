<?php 
		
include('php_scripts/dbconfig.php');
include('php_scripts/functions.php');


require 'NEXstats.php';
$NexStats = new NEXStats($url);

?>




<!DOCTYPE html>
<?php if($_SESSION['loginStatus'] == '1') { ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
       
	    <meta name="author" content="">
		
		<link rel="shortcut icon" href="assets/images/favicon.png">
		
		<title>Revounts Reserved CMS. Built 1.0</title>
        
        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">
        <link href="assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">

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
		<?php include('includes/short.php'); ?>
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
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                
                                <h4 class="page-title">Revounts Management System</h4>
                                <p class="text-muted page-title-alt">Welcome to Revounts Data Management System</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md md-loyalty text-primary"></i>
                                    <h2 class="m-0 text-dark counter font-600"><?php echo total_coupon(); ?></h2>
                                    <div class="text-muted m-t-5">Coupons</div>
                                    <div style="z-index: 1; margin: 20px 10px 0; position: relative;">
                                    <a href="add_coupon_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>" class="btn btn-block btn-sm btn-primary">Add Coupons</a>
                                    <a href="all_coupon_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>" class="btn btn-block btn-sm btn-primary">Update Coupons</a>
                                    </div>
                                </div>
                            
                                
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md md-store-mall-directory text-info"></i>
                                    <h2 class="m-0 text-dark counter font-600"><?php echo total_stores(); ?></h2>
                                    <div class="text-muted m-t-5">Stores</div>
                                    <div style="z-index: 1; margin: 20px 10px 0; position: relative;">
                                    <a href="add_store_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>" class="btn btn-block btn-sm btn-primary">Add New Store</a>
                                    <a href="edit_store_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>" class="btn btn-block btn-sm btn-primary">Update Store</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md md-border-color text-pink"></i>
                                    <h2 class="m-0 text-dark counter font-600"><?php echo total_blogposts(); ?></h2>
                                    <div class="text-muted m-t-5">Blogs</div>
                                    <div style="z-index: 1; margin: 20px 10px 0; position: relative;">
                                    <a href="create_blog_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>" class="btn btn-block btn-sm btn-primary">Add Blog</a>
                                    <a href="all_blog_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>" class="btn btn-block btn-sm btn-primary">Edit Blog</a>
                                    </div>
                                </div>
                            </div>
							
                            
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md md-stars text-custom"></i>
                                    <h2 class="m-0 text-dark counter font-600"><?php echo total_reviews(); ?></h2>
                                    <div class="text-muted m-t-5">Reviews</div>
                                    <div style="z-index: 1; margin: 20px 10px 0; position: relative;">
                                    <a href="add_review_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>" class="btn btn-block btn-sm btn-primary">Add Review</a>
                                    <a href="all_review_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>" class="btn btn-block btn-sm btn-primary">Edit Review</a>
                                    </div>
                                </div>
                            </div>
                        </div>
        

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    Revounts © 2021. All rights reserved.
                </footer>

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
        <!-- jQuery  -->
        <script src="assets/plugins/moment/moment.js"></script>


        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>

         <script src="assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>

        <!-- Todojs  -->
        <script src="assets/pages/jquery.todo.js"></script>

        <!-- chatjs  -->
        <script src="assets/pages/jquery.chat.js"></script>

        <script src="assets/plugins/peity/jquery.peity.min.js"></script>
		
		<script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

		<script src="assets/pages/jquery.dashboard_2.js"></script>
		
        

    </body>
</html>

<?php } else { header("Location: https://www.revounts.com.au/revounts_cms/"); die(); } ?>

