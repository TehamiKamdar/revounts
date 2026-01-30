<?php 
		
include('php_scripts/dbconfig.php');
include('php_scripts/functions.php');

if(isset($_GET['del']))
{
	delete_user($_GET['del']);
	
}


?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon_1.ico">

    <title><?php echo sitename ?> Reserved CMS. Built 1.0</title>

    <!-- DataTables -->
 <link href="assets/plugins/datatables/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/fixedheader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/datatables.colVis.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/datatables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/fixedColumns.datatables.min.css" rel="stylesheet" type="text/css"/>


    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/core.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>

	
	
	<!--Modal Css-->
	<link href="assets/plugins/custombox/css/custombox.css" rel="stylesheet">
	
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="assets/js/modernizr.min.js"></script>
	
	
	
	
	
	
	
	
	
	

</head>

<body class="fixed-left" onload="">

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
	
	  
                                                <div class="modal-footer"> 
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                                                    <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button> 
                                                </div> 
                                            </div> 
                                        </div>
                                    </div><!-- /.modal -->
	
	
	
	
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <?php include('includes/brdcrmb_settings.php'); ?>
				
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Total Users On Your Website:<span class="label label-pink" id="t_users"><?php //echo total_users(); ?></span></b></h4>
                            <h3 id="status_response"></h3>
						
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                <tr>
									<th>Sr</th>
                                    <th>Store</th>
                                    <th>Question Heading</th>
                                    <th>Question Description</th>
									<th>Action</th>
                                </tr>
                                </thead>
                                <tbody id="">
                                <?php all_faqs(); ?>
                                </tbody>
                            </table>
							
                        </div>
                    </div>
                </div>
				
				
				
				
				  
				
				

<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
</div>				
				



            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer">
            © 2016. All rights reserved.
        </footer>

    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

 


</div>
<script>
	
	setInterval(total_users, 9000);
	
		
	
	</script>


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

<script src="assets/plugins/datatables/jquery.datatables.min.js"></script>
<script src="assets/plugins/datatables/datatables.bootstrap.js"></script>

<script src="assets/plugins/datatables/datatables.buttons.min.js"></script>
<script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/jszip.min.js"></script>
<script src="assets/plugins/datatables/pdfmake.min.js"></script>
<script src="assets/plugins/datatables/vfs_fonts.js"></script>
<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables/buttons.print.min.js"></script>
<script src="assets/plugins/datatables/datatables.fixedheader.min.js"></script>
<script src="assets/plugins/datatables/datatables.keytable.min.js"></script>
<script src="assets/plugins/datatables/datatables.responsive.min.js"></script>
<script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/datatables.scroller.min.js"></script>
<script src="assets/plugins/datatables/datatables.colvis.js"></script>
<script src="assets/plugins/datatables/datatables.fixedcolumns.min.js"></script>

<script src="assets/pages/datatables.init.js"></script>


<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

		<script src="assets/plugins/notifyjs/js/notify.js"></script>
        <script src="assets/plugins/notifications/notify-metro.js"></script>

		
		
	
	<!--Custom Ajax-->
		
	<script src="assets/js/ajax_request.js" type="text/javascript"></script>
	<script src="assets/js/live_data.js" type="text/javascript" > </script>	


		<!-- Modal-Effect -->
        <script src="assets/plugins/custombox/js/custombox.min.js"></script>
        <script src="assets/plugins/custombox/js/legacy.min.js"></script>

	
		
<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({keys: true});
        $('#datatable-responsive').DataTable();
        $('#datatable-colvid').DataTable({
            "dom": 'C<"clear">lfrtip',
            "colVis": {
                "buttonText": "Change columns"
            }
        });
        $('#datatable-scroller').DataTable({
            ajax: "assets/plugins/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });
        var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
        var table = $('#datatable-fixed-col').DataTable({
            scrollY: "300px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedColumns: {
                leftColumns: 1,
                rightColumns: 1
            }
        });
    });
    TableManageButtons.init();

</script>







</body>
</html> 