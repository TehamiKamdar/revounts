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

        <title>CartInCoupon</title>

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
                                            <span class="hidden-xs">Weekly Report</span> 
                                        </a> 
                                    </li> 
                                    <li class="tab"> 
                                        <a href="#profile-2" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                            <span class="hidden-xs">Content Missing</span> 
                                        </a> 
                                    </li>
                                    <li class="tab"> 
                                        <a href="#seo-issues" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                            <span class="hidden-xs">SEO Issues</span> 
                                        </a> 
                                    </li>
                                    <li class="tab"> 
                                        <a href="#networks" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                            <span class="hidden-xs">Networks</span> 
                                        </a> 
                                    </li>
                                </ul> 
                                <div class="tab-content"> 
                                
                                    <div class="tab-pane active" id="home-2"> 
                                     
									 <div class="row">
								           <div class="col-sm-12">
                        		             <div class="card-box">
                    							<h3>Revounts Weekly News</h3>
                    							    <div class="row">
                                                        <div class="col-lg-12">
                                                            <h4>Blogs Added</h4>
                                                            <?php echo weekly_blogs(); ?>
                                                            <br><br>
                    							        </div>
                                                    </div> 
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <h4>Reviews Published</h4>
                                                            <?php echo weekly_reviews(); ?>
                                                            <br><br>
                    							        </div>
                                                    </div> 
                                                    
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <h4>Stores Added</h4>
                                                            <?php echo weekly_stores_created(); ?>
                    							        </div>
                    							        <div class="col-lg-6">
                                                            <h4>Stores Updated</h4>
                                                            <?php echo weekly_stores_updated(); ?>
                    							        </div>
                                                    </div> 
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <br><br>
                                                            <h4>Coupons Updated</h4>
                                                            <?php echo weekly_coupons_updated(); ?>
                    							        </div>
                                                    </div> 
                    							</div>
                                        	</div>			
                					     </div> 	 
                					</div> 
                					
                                    <div class="tab-pane" id="profile-2">
									
									 <div class="row">
								           <div class="col-sm-12">
								               <div class="card-box table-responsive">
                                                    <h4 class="m-t-0 header-title"><b>Missing Store Descriptions</b></h4>
								               <table id="datatablexx" class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>Store</th>
                                                        <th>Description</th>
                                                        <th>Created at</th>
                                                        <th>Status</th>
                                                        <th>Tracking URL</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php stores_description_missing(); ?>
                                                    </tbody>
                                                </table>
                                            </div>
                            
                                        	</div>			
                					</div> <!--End Form Row-->
									
									</div> 
									
									<div class="tab-pane" id="seo-issues">
									
									 <div class="row">
								           <div class="col-sm-12">
								               <div class="card-box table-responsive">
                                                    <h4 class="m-t-0 header-title"><b>SEO On-page Issues</b></h4>
                                                    <p>
                                                        Meta Title Length = <strong>48</strong><br>
                                                        Meta Description Length = <strong>156</strong>
                                                    </p>
								               <table id="datatablexxx" class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>Store</th>
                                                        <th>Meta Title</th>
                                                        <th>Meta Description</th>
                                                        <th>Long Description</th>
                                                        <th>SEO</th>
                                                        <th>Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php seo_onpage_issues(); ?>
                                                    </tbody>
                                                </table>
                                            </div>
                            
                                        	</div>			
                					</div> <!--End Form Row-->
									
									</div> 
									
									<style>
									    #datatablexxxx tr select {width:100%;}
									</style>
									
									<div class="tab-pane" id="networks">
									
									 <div class="row">
								           <div class="col-sm-12">
								               <div class="card-box table-responsive">
                                                    <h4 class="m-t-0 header-title"><b>Networks List & Report</b></h4>
                                                    <br><br>
                                                <table id="datatablexxxx" class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>Store</th>
                                                        <th>Status</th>
                                                        <th>Network Name</th>
                                                        <th>Tracking URL</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php stores_networks_list(); ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Store</th>
                                                            <th>Status</th>
                                                            <th>Network Name</th>
                                                            <th>Tracking URL</th>
                                                        </tr>
                                                    </tfoot>
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

<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/jszip.min.js"></script>
<script src="assets/plugins/datatables/pdfmake.min.js"></script>
<script src="assets/plugins/datatables/vfs_fonts.js"></script>
<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables/buttons.print.min.js"></script>
<script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="assets/plugins/datatables/dataTables.colVis.js"></script>
<script src="assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

<script src="assets/pages/datatables.init.js"></script>

<script type="text/javascript">
	$(".select2").select2();

$(document).ready(function(){
       
	
$('#datatablexx').dataTable();
$('#datatablexxx').dataTable();
$('#').dataTable( {
        keys: true,
        dom: 'Bfrtip',
        buttons: [
            
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
})
TableManageButtons.init();

$(document).ready(function () {
    $('#datatablexxxx').DataTable({
        initComplete: function () {
            this.api()
                .columns()
                .every(function () {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .appendTo($(column.footer()).empty())
                        .on('change', function () {
                            var val = $.fn.dataTable.util.escapeRegex($(this).val());
 
                            column.search(val ? '^' + val + '$' : '', true, false).draw();
                        });
 
                    column
                        .data()
                        .unique()
                        .sort()
                        .each(function (d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>');
                        });
                });
        },
        keys: true,
        dom: 'Bfrtip',
        buttons: [
            
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    });
});

</script>

	</body>
</html>

<?php } else { header("Location: https://www.revounts.com.au/revounts_cms/"); die(); } ?>