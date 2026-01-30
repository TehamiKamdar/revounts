            <?php 
					$con=db_connect();
					$select="select `id` from tbluser where uname='".$_GET['un']."' ";
					$result=mysqli_query($con,$select);
					$row=mysqli_fetch_assoc($result);
					
					$select_roles="select * from user_role where userid='".$row['id']."'";
					$result_roles=mysqli_query($con,$select_roles);
					$roles=mysqli_fetch_array($result_roles);
					
					
			?>
			<div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title"><h2>Navigation</h2></li>

							<li class="has_sub">
                                <a href="dashboard_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>" class="waves-effect"><i class="fa fa-dashboard"></i> <span> Dashboard</span></a>
                               
                            </li>
                            <li class="has_sub">
                                <a href="reports.php?<?php echo $_SERVER['QUERY_STRING']; ?>" class="waves-effect"><i class="fa fa-line-chart"></i> <span> Reports</span></a>
                               
                            </li>
							
							
							<?php if($roles['add_user']==1)
							{	?>
							
							<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="glyphicon glyphicon-user"></i> <span> USER </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    
                                    <li><a href="add_user_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-plus-sign"></i><span>Add User</span></a></li>
									<?php if($roles['edit_user']==1) { ?>
                                    <li><a href="all_user_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-arrow-down"></i>All User</a></li>
                                    <?php } ?>
									<li><a href="assign_role_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-arrow-down"></i>Assign Role</a></li>
                                    
                                </ul>
                            </li>
							
							<?php } ?>
							
							
								<?php if($roles['add_network']==1)
							{	?>
							<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="glyphicon glyphicon-stats"></i> <span> NETWORK </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                   
                                    <li><a href="add_network.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-plus"></i>Add Network</a></li>
									
								<?php if($roles['edit_network']==1) { ?>	
                                    
                                  <?php } ?>
                                </ul>
                            </li>
						
							<?php } ?>
							
							<?php if($roles['add_categories']==1)
							{	?>
							
							<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="glyphicon glyphicon-tree-conifer"></i><span>CATEGORIES</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                  
                                    <li><a href="add_category_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-plus"></i>Add Category</a></li>
								<?php if($roles['edit_categories']==1) { ?>
                                    <li><a href="all_category_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-arrow-down"></i>All Categories</a></li>
                                  <?php } ?>
                                </ul>
                            </li>
							<?php } ?>
							
							<?php if($roles['add_stores']==1)
							{	?>
							
							<li class="has_sub">
                                      <a href="javascript:void(0);" class="waves-effect"><i class="md md-business"></i><span class="label label-pink pull-right"><?php echo total_stores(); ?></span><span> STORES </span></a>
                                <ul class="list-unstyled">
                                   
                                    <li><a href="add_store_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-plus"></i>Add Store</a></li>
									<?php if($roles['edit_stores']==1) { ?>
                                    <li><a href="edit_store_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-arrow-down"></i>All Store</a></li>
									<?php } ?>
									
									<li><a href="add_faqs_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-plus"></i>FAQs</a></li>
									
									<li><a href="all_faqs_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-plus"></i>All FAQs</a></li>
						
                                  
                                </ul>
                            </li>
							<?php } ?>
							
							
							<?php if($roles['add_coupons']==1)
							{	?>
							
								<li class="has_sub">
                                 <a href="javascript:void(0);" class="waves-effect"><i class="md md-filter-tilt-shift"></i><span class="label label-success pull-right"><?php echo total_coupon(); ?></span><span> COUPONS </span> </a>
                                <ul class="list-unstyled">
                                    
                                    <li><a href="add_coupon_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-plus"></i>Add Coupon</a></li>
							<?php if($roles['edit_coupons']==1) { ?>		
                                    <li><a href="all_coupon_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-arrow-down"></i>All Coupon</a></li>
							<?php } ?>		
                                    <li><a href="coupon_sort_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-arrow-down"></i>Sort Coupon</a></li>
                                    <li><a href="add_deal_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-arrow-down"></i>Add Season Deal</a></li>
                                    <li><a href="all_deal_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-arrow-down"></i>Edit Season Deal</a></li>
                                    <li><a href="sort_deals.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-arrow-down"></i>Sort Deals</a></li>
                                  
                                </ul>
                            </li>
							
							<?php } ?>
							
							<li class="has_sub">
                                 <a href="javascript:void(0);" class="waves-effect"><i class="md-local-offer"></i><span class="label label-primary pull-right"><?php echo total_reviews(); ?></span><span> Reviews </span> </a>
                                <ul class="list-unstyled">
                                    
                                    <li><a href="add_review_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-plus"></i>Add Review</a></li>
                                    
                                    <li><a href="all_review_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-arrow-down"></i>All Reviews</a></li>
                                    <li><a href="draft_review_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-arrow-down"></i>Draft Reviews</a></li>
  
                                </ul>
                            </li>
							
                            
							
							
						
							<?php if($roles['add_blog']==1)
							{	?>
							<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="md md-description"></i><span class="label label-primary pull-right"><?php echo total_blogposts(); ?></span><span> BLOG POST </span></a>
                                <ul class="list-unstyled">
                                    
                                    <li><a href="create_blog_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-plus"></i>Add Blog</a></li>
                                    <?php if($roles['edit_blog']==1) { ?>
									<li><a href="all_blog_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-arrow-down"></i>All Blog</a></li>
									<?php } ?>
									<li><a href="draft_all_blog_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-arrow-down"></i>Draft Blog</a></li>
                                    <li><a href="add_blog_category_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-plus"></i>Add Blog Category</a></li>
                                    
									<!--<li><a href="add_author.php?<?php //echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-plus"></i>Add Author</a></li>-->
									<!--<li><a href="all_authors.php?<?php //echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-plus"></i>All Authors</a></li>-->
									
									<li><a href="all_category_blog.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-plus"></i>All Blog Category</a></li>
									
                                </ul>
                            </li>
							<?php } ?>
							
							<?php if($roles['add_deals']==1)
							{	?>
							
								<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="md md-add-shopping-cart"></i><span> Seasons </span></a>
                                <ul class="list-unstyled">
                                   
                                   <li><a href="seasons_add_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-plus"></i>Create Season</a></li>
							<?php if($roles['edit_deals']) { ?>	   
                                    <li><a href="all_seasons.php?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="glyphicon glyphicon-arrow-down"></i>Edit Season</a></li>
									
                             <?php } ?>    
                                </ul>
                            </li>

							<?php } ?>
							
				<li class="has_sub">
                                <a href="newsletter.php" class="waves-effect"><i class="md md-description"></i><span> Newsletter </span></a>
                                </li>
							
							<?php if($roles['settings']==1)
							{	?>
							
							<li class="has_sub">
                                <a href="general_setting_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>" class="waves-effect"><i class="md md-settings"></i> <span> Settings </span></a>
                                
                            </li>
							
							<?php } ?>
							
							<li class="has_sub">
                                <a href="requests.php?<?php echo $_SERVER['QUERY_STRING']; ?>" class="waves-effect"><i class="fa fa-envelope"></i> <span> Requests</span></a>
                               
                            </li>
							
							
						<!--	<li class="has_sub">
                                <a href="media_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>" class="waves-effect"><i class="md md-perm-media"></i><span>Media</span></a>
                               
                            </li>


                     <li class="has_sub">
                          <a target="_blank" href="imgcompressor_1.php?<?php echo $_SERVER['QUERY_STRING']; ?>" class="waves-effect"><i class="md md-settings"></i> <span>Image Compressor</span> <span class="menu-arrow"></span></a>
                                
                            </li>-->

							

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>