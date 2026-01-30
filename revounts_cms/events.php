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
                                        <a href="#settings-3" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                            <span class="hidden-xs">Top Stores</span> 
                                        </a> 
                                    </li> 
                                </ul> 
                                <div class="tab-content"> 
                                    
									<div class="tab-pane active" id="settings-3">
                                    
									
									<div class="row">
								           <div class="col-sm-12">
                        		             <div class="card-box">
                        			      <h4 class="m-t-0 header-title"><b>Add Event on Stores</b></h4>
                        			
                        			     <div class="row">
                        				<div class="col-md-12">
                        					<form class="form-horizontal add-top-store" role="form" >     
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Stores</label>
	                                                <div class="col-md-10">
	                                                    <select class="form-control select2" name="store_id">
	                                                    	<?php list_stores(); ?>

	                                                    </select>
	                                                </div>
	                                            </div>
											
												<div class="form-group">
	                                                <label class="col-md-2 control-label"></label>
	                                                <div class="col-md-10">
	                                                  <button type="submit"  class="btn btn-primary" value="">Add</button>

	                                                </div>
	                                            </div>
												
	                                        </form>
	                                         <div class="card-box table-responsive">
                           
                            <h3 id="status_response"></h3>
							
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Store</th>
                                    <th>Status</th>
                                    <th>Added at</th>
									
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody id="update_table_top_store">
                                
                                </tbody>
                            </table>
							
							</div>
                        				</div>
                        				
                        				
                        			</div>
									
									
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
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


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
        $('#datatable-buttons').dataTable();
	
		let html ='';

	$.ajax({
             url: "https://www.revounts.com.au/revounts_cms/php_scripts/get-events.php",
             dataType: "json",
             type: "post",
             data: {},
             
                       
              success: function(dataval) {
              	console.log(dataval);
              	if (dataval.status == 1) {
              		$.each( dataval.data, function( i, val ) {
              			html += '<tr><td>'+val.storename+'</td><td>'+val.title+'</td><td>'+val.description+'</td><td><button type="button" class="btn btn-primary removeStr" data-id="'+val.store_id+'" value="" >Remove</button></td></tr>';
              		})
              		$("#update_table_top_store").html(html);
              	}
              }

		})
})

	$(document).on("submit",".add-top-store",function(e){
		e.preventDefault();
		let html ='';
		 $.ajax({
             url: "https://www.revounts.com.au/revounts_cms/php_scripts/top_stores.php",
             dataType: "json",
             type: "post",
             data: new $('.add-top-store').serialize(),
             
                       
              success: function(dataval) {
              	console.log(dataval);
              	if (dataval.status == 1) {
              		$.each( dataval.data, function( i, val ) {
              			html += '<tr><td>'+val.name+'</td><td>'+val.status+'</td><td>'+val.created_at+'</td><td><button type="button" class="btn btn-primary removeStr" data-id="'+val.store_id+'" value="" >Remove</button></td></tr>';
              		})
              		$("#update_table_top_store").html(html);
              	}
              }

		})
	})


	$(document).on("click",".removeStr",function(){
		let store_id = $(this).data("id");
		
		let html ='';

		 $.ajax({
             url: "https://www.revounts.com.au/revounts_cms/php_scripts/remove_store.php",
             dataType: "json",
             type: "post",
             data: {store_id:store_id},
             
                       
              success: function(dataval) {
              	console.log(dataval);
              	if (dataval.status == 1) {
              		$.each( dataval.data, function( i, val ) {
              			html += '<tr><td>'+val.name+'</td><td>'+val.status+'</td><td>'+val.created_at+'</td><td><button type="button" class="btn btn-primary removeStr" data-id="'+val.store_id+'" value="" >Remove</button></td></tr>';
              		})
              		$("#update_table_top_store").html(html);
              	}
              }

		})
	})
</script>
<?php } ?>