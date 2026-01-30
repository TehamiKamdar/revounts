<?php 
date_default_timezone_set("Asia/Karachi");

session_start();

define('url','https://www.revounts.com.au/');


function edit_store_form($id)
{
		$select='select * from tblstores where id="'.$id.'"';
		$connection=db_connect();
		$result=mysqli_query($connection,$select);
		$rows=mysqli_fetch_array($result);
		?>			
						<div class="col-md-12 text-right">
					<a style="display: none;" href="javascript:void(0)" class="btn btn-primary m-b-20" onclick="delete_store_new(<?php echo $rows['id'] ?>)">Delete Store</a>
					<br>
					<?php 
					$create_date = strtotime($rows['created_at']);
					$created_date = date('d-M-Y h:i a', $create_date);
					$update_date = strtotime($rows['updated_at']);
					$updated_date = date('d-M-Y h:i a', $update_date);
					?>
					<p><div class="tooltips"><i class="fa fa-plus-square"></i><span class="tooltiptext">Created At</span></div> &nbsp;&nbsp; <b><?php echo ($created_date != NULL)?$created_date:'N/A' ?> </b> &nbsp;&nbsp; <div class="tooltips"><i class="fa fa-user"></i><span class="tooltiptext">Created By</span></div> &nbsp;&nbsp; <b><?php echo ($rows['enterby'] != NULL)?$rows['enterby']:'N/A' ?></b></p>
					
					<p><div class="tooltips"><i class="fa fa-pencil-square-o"></i><span class="tooltiptext">Updated At</span></div> &nbsp;&nbsp; <b><?php echo ($updated_date != NULL)?$updated_date:'N/A' ?> </b> &nbsp;&nbsp; <div class="tooltips"><i class="fa fa-user"></i><span class="tooltiptext">Updated By</span></div> &nbsp;&nbsp; <b><?php echo ($rows['updated_by'] != NULL)?$rows['updated_by']:'N/A' ?></b></p>
					</div>
						<div class="col-md-12">

							

                                                        
                        				
											<form class="form-horizontal" method="post"  enctype="multipart/form-data"  name="store_edit_form">
												 
												<input type="hidden" name="username" value="<?php echo $_SESSION['loginUser']?>">
												<input type="hidden" name="store_id" value="<?php echo $rows['id'] ?>">
												<input type="hidden" name="update_store_url" value="<?php echo $rows['store_url'] ?>">
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Store Name*</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="store_name" onkeyup="nametourl()" id="s_name"  class="form-control" value="<?php echo $rows['name'] ?>" >
	                                                </div>
	                                            </div>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Store Url*</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="<?php echo $rows['store_url'] ?>" readonly>
	                                                <span style="font-size: 10px;"><i>*Not Editable</i></span>
	                                                </div>
	                                            </div>
                                                <div class="form-group">
	                                                <label class="col-md-2 control-label">Heading*</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="heading" onkeyup="nametourl()" id="s_heading"  class="form-control" value="<?php echo $rows['heading'] ?>" >
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Choose Category</label>
	                                                <div class="col-md-10">
	                                                    <select class="form-control"  id="heading" value="" name="category_store[]">
                                                        <?php category_name($rows['Category']); ?>
														<?php list_sub_categories(); ?>
														</select> 
	                                                </div>
	                                            </div>
	                                            
	                                            
	                                           
	                                            
												 <div class="form-group">
	                                                <label class="col-md-2 control-label">Choose Season</label>
	                                                <div class="col-md-10">
	                                                    <select class="form-control multi-select select2" id="strings"  name="season_store[]" multiple>
														<?php season_name($rows['season']); ?>
														<?php list_season(); ?>
														
														</select>   
	                                                </div>
	                                            </div>
	                                            
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Short Description</label>
	                                                <div class="col-md-10">
	                                                    <textarea type="text" class="summernote" value="" id="shrt_desc" name="store_short_description" ><?php  echo $rows['short_desc'] ?></textarea>
	                                                </div>
	                                            </div>
											   
	                                             
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Long Description</label>
	                                                <div class="col-md-10">
	                                                    <textarea type="text" class="summernote" value="" id="lng_desc" name="store_long_description" ><?php  echo $rows['long_desc'] ?></textarea>
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Image</label>
	                                                <div class="col-md-10">
	                                                    <input type="file" class="filestyle" name="store_image_update" id="s_image"  data-iconname="fa fa-cloud-upload">
	                                                </div>
	                                            </div>
	                                           <div class="form-group">
	                                                <label class="col-md-2 control-label">Image Alt</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="alt" name="image_alt" value="<?php  echo $rows['img_alt'] ?>">
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Banner Image</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="alt" name="banner_image" value="<?php  echo $rows['banner_img'] ?>">
	                                                </div>
	                                            </div>
	                                            
	                                            
												  <div class="form-group">
	                                                <label class="col-md-2 control-label">Direct URL</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="direct_url" name="direct_url" value="<?php  echo $rows['direct_url'] ?>">
	                                                </div>
	                                            </div>
												
												  <div class="form-group">
	                                                <label class="col-md-2 control-label">Tracking URL</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="tracking_url" name="store_tracking_url" value="<?php  echo $rows['tracking_url'] ?>">
	                                                </div>
	                                            </div>
												 <div class="form-group">
	                                                <label class="col-md-2 control-label">Meta Title</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="title" name="meta_title" value="<?php  echo $rows['meta'] ?>" onFocus="countTitle('title','char_title_count',48)" onKeyDown="countTitle('title','char_title_count',48)" onKeyUp="countTitle('title','char_title_count',48)">
	                                                     <div id="char_title_count"></div>
	                                                </div>
	                                            </div>
												 <div class="form-group">
	                                                <label class="col-md-2 control-label">Meta Description</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="desc" name="meta_desc" value="<?php  echo $rows['meta_des'] ?>" onFocus="countDes('desc','char_des_count',156)" onKeyDown="countDes('desc','char_des_count',156)" onKeyUp="countDes('desc','char_des_count',156)">
	                                                    <div id="char_des_count"></div>
	                                                </div>
	                                            </div>
                                                    <div class="form-group">
	                                                <label class="col-md-2 control-label">AMP Meta Description</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" id="amp_desc" name="meta_desc_amp" value="<?php  echo $rows['amp_meta_desc'] ?>">
	                                                </div>
	                                            </div>
                                                   
												<center><label>HelpFull Links</label></center>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Facebook</label>
	                                                <div class="col-md-10">
	                                                    <input type="url" class="form-control" id="keywords" name="facebook" value="<?php echo $rows['facebook'] ?>">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Pinterest</label>
	                                                <div class="col-md-10">
	                                                    <input type="url" class="form-control" id="keywords" name="pinterest" value="<?php echo $rows['pinterest'] ?>">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Twitter</label>
	                                                <div class="col-md-10">
	                                                    <input type="url" class="form-control"  name="twitter" value="<?php echo $rows['twitter'] ?>">
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Instagram</label>
	                                                <div class="col-md-10">
	                                                    <input type="url" class="form-control"  name="instagram" value="<?php echo $rows['instagram'] ?>">
	                                                </div>
	                                            </div>
	                                            
	                                            
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Youtube</label>
	                                                <div class="col-md-10">
	                                                    <input type="url" class="form-control"  name="youtube" value="<?php echo $rows['youtube'] ?>">
	                                                </div>
	                                            </div>
	                                            
	                                            
	                                            
	                                            
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Email</label>
	                                                <div class="col-md-10">
	                                                    <input type="url" class="form-control"  name="google_plus" value="<?php echo $rows['google'] ?>">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Phone#</label>
	                                                <div class="col-md-10">
	                                                    <input type="url" class="form-control"  name="android" value="<?php echo $rows['android'] ?>">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Address</label>
	                                                <div class="col-md-10">
	                                                    <input type="url" class="form-control"  name="ios" value="<?php echo $rows['ios'] ?>">
	                                                </div>
	                                            </div>
												
												
													<?php if($rows['top']==1)
											{	?>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Top Stores</label>
	                                                <div class="col-md-10">
	                                                    <input type="checkbox" name="top" id="feature"  value="1" checked data-plugin="switchery"  data-color="#81c868">
	                                                </div>
	                                            </div>
											<?php } ?>
											
											<?php if($rows['top']==0)
											{	?>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Top Stores</label>
	                                                <div class="col-md-10">
	                                                    <input type="checkbox" name="top" id="feature"  value="1" data-plugin="switchery"  data-color="#81c868">
	                                                </div>
	                                            </div>
											<?php } ?>
											
											
												<?php if($rows['meta_date']==1)
											{	?>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Exclude Title Date</label>
	                                                <div class="col-md-10">
	                                                    <input type="checkbox" name="meta_date" id="feature"  value="1" checked data-plugin="switchery"  data-color="#81c868">
	                                                </div>
	                                            </div>
											<?php } ?>
											
											<?php if($rows['meta_date']==0)
											{	?>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Exclude Title Date</label>
	                                                <div class="col-md-10">
	                                                    <input type="checkbox" name="meta_date" id="feature"  value="1" data-plugin="switchery"  data-color="#81c868">
	                                                </div>
	                                            </div>
											<?php } ?>
											
											<?php if($rows['for_sitemap']==1)
											{	?>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">For Sitemap</label>
	                                                <div class="col-md-10">
	                                                    <input type="checkbox" name="for_sitemap" id="for_sitemap"  value="1" checked data-plugin="switchery"  data-color="#81c868">
	                                                </div>
	                                            </div>
											<?php } ?>
											
											<?php if($rows['for_sitemap']==0)
											{	?>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">For Sitemap</label>
	                                                <div class="col-md-10">
	                                                    <input type="checkbox" name="for_sitemap" id="for_sitemap"  value="1" data-plugin="switchery"  data-color="#81c868">
	                                                </div>
	                                            </div>
											<?php } ?>

												
												
							
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Save Your Store</label>
	                                                <div class="col-md-10">
	                                                   <button type="button" onclick="edit_store()" class="btn btn-purple waves-effect waves-light">Save</button>
													   <img id="spinner" src=""><span id="status"></span>
													   
	                                                </div>
	                                            </div>
	                                        </form>
                        				</div>
		<?php	
}


function all_authors()
{
	$select="select * from author";
	$con=db_connect();
	$query=mysqli_query($con,$select);
	while($row=mysqli_fetch_array($query))
	{
		?>
		<tr id="authorRow<?php echo $row['id'] ?>"> 
			<td><img class="img-responsive img-circle" style="width:100px" src="<?php echo url.'images/author/'.$row['image']  ?>" /></td>					
			<td><?php echo $row['name'] ?></td>					
			<td><?php echo $row['short_desc'] ?></td>					
			<td><?php echo $row['slug'] ?></td>					
			<td><a href="edit_author.php?<?php echo $_SERVER['QUERY_STRING'] ?>&authorId=<?php echo $row['id']; ?>" class="btn btn-primary waves-effect">Edit</a></td>					
        </tr>
		<?php
	}
}



function catName($id){
    $select="select `name` from tblblogcat where id=$id";
	$con=db_connect();
	$query=mysqli_query($con,$select);
	$row=mysqli_fetch_array($query);
	echo $row['name'];
	
}


function storeName($id)
{
	$select="select `name` from tblstores where id=$id";
	$con=db_connect();
	$query=mysqli_query($con,$select);
	$row=mysqli_fetch_array($query);
	echo $row['name'];
	
	}
	
	
function parent_categories()
{
  $select="select * from tblcategory where parent='Please Select'";
   $con=db_connect();
  $query=mysqli_query($con,$select);
  while($row=mysqli_fetch_array($query))
  {
    ?>
    <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
    <?php
  }
}


function approved_comments()
{
	$select="select * from comments where `status`='Approved'";
	$con=db_connect();
	$query=mysqli_query($con,$select);
	while($row=mysqli_fetch_array($query))
	{
		?>
			<tr id="commentRow<?php echo $row['id'] ?>"> 
									<td id="readResponse<?php echo $row['id'] ?>">
									<?php if($row['read']=='false'){   ?>
									<i style="color:red;" class="fa fa-circle" aria-hidden="true"></i>
									<?php } else { ?>
									<i style="color:green;" class="fa fa-circle" aria-hidden="true"></i>
									<?php } ?>
									</td>
									<td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['status'] ?></td>
                                    <td><?php echo coupon($row['coupon']); ?></td>
									<td><?php storeName($row['store']); ?></td>
									<td><?php echo $row['location'] ?></td>
									<td><?php echo $row['email'] ?></td>		
									<td><?php echo $row['commented_on']; ?></td>
									<td><?php echo $row['comment_time'] ?></td>
                                    <td>
									<a href="javascript:void(0)" class="btn btn-primary btn-md" onclick="approve_comment(<?php echo $row['id']; ?>)"><i class="fa fa-check" aria-hidden="true"></i></a>
									<a href="javascript:void(0)" class="btn btn-warning btn-md" onclick="delete_comment(<?php echo $row['id']; ?>)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
									</a>
									</td>
                                </tr>
		<?php
		
	}
	
}


function read_comments()
{
	$select="select * from comments where `read`='true'";
	$con=db_connect();
	$query=mysqli_query($con,$select);
	while($row=mysqli_fetch_array($query))
	{
		?>
			<tr id="commentRow<?php echo $row['id'] ?>"> 
									<td id="readResponse<?php echo $row['id'] ?>">
									<?php if($row['read']=='false'){   ?>
									<i style="color:red;" class="fa fa-circle" aria-hidden="true"></i>
									<?php } else { ?>
									<i style="color:green;" class="fa fa-circle" aria-hidden="true"></i>
									<?php } ?>
									</td>
									<td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['status'] ?></td>
                                    <td><?php echo coupon($row['coupon']); ?></td>
									<td><?php storeName($row['store']); ?></td>
									<td><?php echo $row['location'] ?></td>
									<td><?php echo $row['email'] ?></td>		
									<td><?php echo $row['commented_on']; ?></td>
									<td><?php echo $row['comment_time'] ?></td>
                                    <td>
									<a href="javascript:void(0)" class="btn btn-primary btn-md" onclick="approve_comment(<?php echo $row['id']; ?>)"><i class="fa fa-check" aria-hidden="true"></i></a>
									<a href="javascript:void(0)" class="btn btn-warning btn-md" onclick="delete_comment(<?php echo $row['id']; ?>)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
									</a>
									</td>
                                </tr>
		<?php
		
	}
	
}

function read_comment($id)
{
	$con=db_connect();
	$select="select `comment`,`name`,`email`,`comment_time`,`status` from comments where id=$id";
	$query=mysqli_query($con,$select);
	$row=mysqli_fetch_array($query);
	?>
	<div class="modal-dialog"> 
              <div class="modal-content"> 
					<div class="modal-header">
						<h2>Comment</h2>
					</div>
						<p>Name: <?php echo $row['name'] ?></p>
						<p>Comment: <?php echo $row['comment'] ?></p>
						<p>Email: <?php echo $row['email'] ?></p>
				</div> 
     </div> 
	<?php
	$update="update comments set `read`='true' where id=$id";
	mysqli_query($con,$update);
	
}


function delete_comment($id)
{
	$delete="delete from comments where id=$id";
	$con=db_connect();
	if(mysqli_query($con,$delete))
	{
		echo 'Removed';
	}
	else
	{
		echo 'Error Occured';
	}
}


function editt_comment($id,$getvalue_edit)
{
	$delete="delete from comments where id=$id";
	$con=db_connect();
	if(mysqli_query($con,$delete))
	{
		echo 'Removed';
	}
	else
	{
		echo 'Error Occured';
	}
}


function all_subscribers()
{
  $select="select * from subscriptions ORDER BY id DESC limit 20";
  $con=db_connect();
  $query=mysqli_query($con,$select);
  while($row=mysqli_fetch_array($query))
  {
    ?>
                <tr id="subscriberRow<?php echo $row['id'] ?>">
                    <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td><?php echo $row['page'] ?></td>
                  <td><?php echo $row['date']; ?></td>
                  <td><?php echo $row['time'] ?></td>
                  <!--<td>-->
                  <!--    <a href="javascript:void(0)" class="btn btn-primary btn-md" onclick="delete_subscriber(<?php echo $row['id']; ?>)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>-->
                  <!--</td>-->
                </tr>

              
    <?php
  }
}

function delete_subscriber($id)
{
  $delete="delete from subscriptions where id=$id";
  $con=db_connect();
  if(mysqli_query($con,$delete))
  {
    echo 'Removed';
  }
  else
  {
    echo 'Error Occured';
  }
}



function approve_comment($id)
{
	$update="update comments set status='Approved' where id=$id";
	$con=db_connect();
	if(mysqli_query($con,$update))
	{
		echo 'Approved';
	}
	else
	{
		echo 'Error Occured';
	}
}

function coupon($id)
{
	$select="select `offer` from tblcoupon where id=$id";
	$con=db_connect();
	$query=mysqli_query($con,$select);
	$row=mysqli_fetch_array($query);
	echo $row['offer'];
	
}

function all_comments()
{
	$select="select * from comments";
	$con=db_connect();
	$query=mysqli_query($con,$select);
	while($row=mysqli_fetch_array($query))
	{
		?>
								<tr id="commentRow<?php echo $row['id'] ?>"> 
									<td id="readResponse<?php echo $row['id'] ?>">
									<?php if($row['read']=='false'){   ?>
									<i style="color:red;" class="fa fa-circle" aria-hidden="true"></i>
									<?php } else { ?>
									<i style="color:green;" class="fa fa-circle" aria-hidden="true"></i>
									<?php } ?>
									</td>
									<td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['status'] ?></td>
									<td><?php echo $row['blogname'] ?></td>
									<td><?php echo $row['email'] ?></td>		
									<td><?php echo $row['commented_on']; ?></td>
									<td><?php echo $row['comment_time'] ?></td>
                                    <td>
									<a href="javascript:void(0)" class="btn btn-primary btn-md" onclick="approve_comment(<?php echo $row['id']; ?>)"><i class="fa fa-check" aria-hidden="true"></i></a>
									<a href="javascript:void(0)" class="btn btn-warning btn-md" onclick="delete_comment(<?php echo $row['id']; ?>)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
									<a href="javascript:void(0)" class="btn btn-warning btn-md" onclick="read_comment(<?php echo $row['id']; ?>)"><i class="fa fa-eye" aria-hidden="true"></i></a>
									
									<a href="javascript:void(0)" class="btn btn-warning btn-md" onclick="editt_comment(<?php echo $row['id']; ?>)"><i class="fa fa-edit" aria-hidden="true"></i></a>
									</td>
                                </tr>

							
		<?php
	}
}





function authors_list() {
	
	// Query the database

	$query="select * from author"; 
	
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);
	while($row=mysqli_fetch_array($result))
	{
	echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
	}
}



function add_author()
{
 $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
 $path = '../../images/author/'; // upload directory	
 $img = $_FILES['avatar']['name'];
 $tmp = $_FILES['avatar']['tmp_name'];
 // get uploaded file's extension
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 // check's valid format
 if(in_array($ext, $valid_extensions)) 
 {     

  $path = $path.$img;
  if(move_uploaded_file($tmp,$path)) 
  {
		  $insert="insert into author(
		  `name`,
		  `gender`,
		  `slug`,
		  `short_desc`,
		  `meta_title`,
		  `meta_desc`,
		  `image`,
		  `facebook`,
		  `twitter`,
		  `google`,
                   `quora`,
          `email`,
          `contact`,`sidebar`) values(
		  '".$_POST['author_name']."',
		  '".$_POST['gender']."',
		  '".$_POST['author_url']."',
	      '".$_POST['author_desc']."',
		  '".$_POST['author_title']."',
		  '".$_POST['author_meta_desc']."',
		  '".$img."',
		  '".$_POST['facebook']."',
		  '".$_POST['twitter']."',
		  '".$_POST['google_plus']."',
                  '".$_POST['quora']."', 
          '".$_POST['email']."',
          '".$_POST['contact']."',
           '".$_POST['sidebar'][0]."' 	
		  )";
		  
		  $con=db_connect(); 
		  mysqli_query($con,$insert);
         echo "<h1>Added Successfully</h1>";		  
  }
 } 
 else 
 {
  echo 'invalid file';
 }
 
	
}





function delete_season($id)
	{
		$connection = db_connect();
		$delete="delete from season where id='".$id."'";
		mysqli_query($connection,$delete);
		
	}

function users_list() {
	
	// Query the database

$query="select * from tbluser"; 
	
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);
	while($row=mysqli_fetch_array($result))
	{
	echo '<option value="'.$row['id'].'">'.$row['uname'].'</option>';
	}
}


//Create User
function create_user($name,$pass,$type,$network)
{
	$connection = db_connect();
	$select = "select * from tbluser where uname='".$_GET['acc_name']."'";
	
	$result = mysqli_query($connection,$select);
	
	$num_rows=mysqli_num_rows($result);
	
	if($num_rows>0)
	{
		echo 'User Already Exists';
		
	}
	else
	{
	
	$insert="INSERT INTO `tbluser`(`uname`, `pwd`, `type`, `status`, `network`) values ('".$name."','".$pass."','".$type."','1','".$network."')";
	
	mysqli_query($connection,$insert) or die("Error In Query+".$insert);
	
	echo 'User Created Succesfully';
		
		
	}
	
}




//Total Coupons
function total_coupon() {
	
	// Query the database

    $query="select * from tblcoupon"; 
	
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);
	
	$num_rows=mysqli_num_rows($result);

    return $num_rows;
}
//Total Stores
function total_stores() {
	
	// Query the database

$query="select * from tblstores"; 
	
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);
	
	$num_rows=mysqli_num_rows($result);

    return $num_rows;
}

//Total Blog Posts
function total_blogposts() {
	
	// Query the database

$query="select * from tblblogpost"; 
	
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);
	
	$num_rows=mysqli_num_rows($result);

    return $num_rows;
}

//Total Reviews
function total_reviews() {
	
	// Query the database

$query="select * from review"; 
	
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);
	
	$num_rows=mysqli_num_rows($result);

    return $num_rows;
}


//Total Users
function total_users() {
	
	// Query the database

$query="select * from tbluser"; 
	
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);
	
	$num_rows=mysqli_num_rows($result);

    return $num_rows;
}

//total_networks
function total_network() {
	
	// Query the database

	$query="select * from tblnetwork"; 
	
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);
	
	$num_rows=mysqli_num_rows($result);

    return $num_rows;
}

//Ghazi - 17-08-2021
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

//Ghazi - 17-08-2021
function weekly_blogs() {
	
	// Query the database 

	$query="SELECT * FROM `tblblogpost` WHERE `publish_date` >= DATE(NOW()) - INTERVAL 7 DAY"; 
	
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);

    while($rows=mysqli_fetch_array($result))
	{
		echo '<a target="_blank" href="https://www.revounts.com.au/blog/'.$rows['url'].'">'.$rows['name'].'</a><br>'; 
		
	}
}
function weekly_reviews() {
	
	// Query the database

	$query="SELECT * FROM `review` WHERE `date` >= DATE(NOW()) - INTERVAL 7 DAY"; 
	
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);

    while($rows=mysqli_fetch_array($result))
	{
	    
		echo '<a target="_blank" href="https://www.revounts.com.au/reviews/'.$rows['slug'].'">'.$rows['product'].'</a><br>'; 
		
	}
}
function weekly_stores_created() {
	
	// Query the database 

	$query="SELECT * FROM `tblstores` WHERE `created_at` >= DATE(NOW()) - INTERVAL 7 DAY ORDER BY `tblstores`.`created_at` DESC"; 
	
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);

    while($rows=mysqli_fetch_array($result))
	{
		echo '<div class="update_info"><a target="_blank" href="https://www.revounts.com.au/'.$rows['store_url'].'">'.$rows['name'].'</a> <span>('.date('d M', strtotime($rows['created_at'])).')</span></div>'; 
		
	}
}
function weekly_stores_updated() {
	
	// Query the database

	$query="SELECT * FROM `tblstores` WHERE `updated_at` >= DATE(NOW()) - INTERVAL 7 DAY ORDER BY `tblstores`.`updated_at` DESC"; 
	
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);

    while($rows=mysqli_fetch_array($result))
	{
		
	    echo '<div class="update_info"><a target="_blank" href="https://www.revounts.com.au/'.$rows['store_url'].'">'.$rows['name'].'</a> <span>('.date('d M - h:i A', strtotime($rows['updated_at'])).') &nbsp; ('.$rows['updated_by'].')</span></div>'; 
	    
		
	}
}

function weekly_coupons_updated() {
	
	// Query the database

	$query="SELECT DISTINCT tblcoupon.store, tblcoupon.updated_at, tblcoupon.updated_by, s.name,COUNT(*) AS counter,s.store_url
FROM tblcoupon LEFT JOIN (SELECT DISTINCT id,name,store_url FROM tblstores) AS s ON tblcoupon.store = s.id WHERE tblcoupon.updated_at >= DATE(NOW()) - INTERVAL 7 DAY GROUP BY s.name DESC ORDER BY `tblcoupon`.`updated_at` DESC"; 
	
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);

    while($rows=mysqli_fetch_array($result))
	{
		
	    echo '<div class="update_info"><a target="_blank" href="https://www.revounts.com.au/'.$rows['store_url'].'">'.$rows['name'].'</a> <span>('.$rows['counter'].' coupons) ('.date('d M - h:i A', strtotime($rows['updated_at'])).') ('.$rows['updated_by'].')</span></div>'; 
	    
		
	}
}

function stores_description_missing() {
	
	// Query the database 

	$query="SELECT name,short_desc,store_url,created_at,direct_url,tracking_url FROM `tblstores` WHERE LENGTH(short_desc) <= 100"; 
	
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);

    while($rows=mysqli_fetch_array($result))
	{
		echo '<tr>
            <td>'.$rows['name'].'<br><a href="https://www.revounts.com.au/'.$rows['store_url'].'" target="_blank">View Store</a></td>
            <td>'.$rows['short_desc'].'</td>
            <td>'.$rows['created_at'].'</td>
            <td>'.(($rows['direct_url']==$rows['tracking_url'])?"Inactive":"Active").'</td>
            <td style="width:20px">'.$rows['tracking_url'].'</td>
        </tr>';
		
	}
}

function seo_onpage_issues() {
	
	// Query the database 

	$query="SELECT name,long_desc,meta,meta_des,store_url,for_sitemap,direct_url,tracking_url FROM `tblstores` WHERE LENGTH(meta) > 48 || LENGTH(meta_des) > 156 || LENGTH(meta) < 35 || LENGTH(meta_des) < 100"; 
	
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);

    while($rows=mysqli_fetch_array($result))
	{
		echo '<tr>
            <td>'.$rows['name'].'<br><a href="https://www.revounts.com.au/'.$rows['store_url'].'" target="_blank">View Store</a></td>
            <td><strong>Length: '.strlen($rows['meta']).'</strong> <br>'.$rows['meta'].'</td>
            <td><strong>Length: '.strlen($rows['meta_des']).'</strong> <br>'.$rows['meta_des'].'</td>
            <td>'.((strlen($rows['long_desc'])<50)?"No":"Yes").'</td>
            <td>'.(($rows['for_sitemap']==1)?"Yes":"No").'</td>
            <td>'.(($rows['direct_url']==$rows['tracking_url'])?"Inactive":"Active").'</td>
        </tr>';
		
	}
}

function stores_networks_list() {
	
	// Query the database 

	$query="SELECT name,store_url,direct_url,tracking_url FROM `tblstores`"; 
	
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);

    while($rows=mysqli_fetch_array($result))
	{
		echo '<tr>
            <td>'.$rows['name'].'<br><a href="https://www.revounts.com.au/'.$rows['store_url'].'" target="_blank">View Store</a></td>
            <td>'.(($rows['direct_url']==$rows['tracking_url'])?"Inactive":"Active").'</td>';
            
            $parse = parse_url($rows['tracking_url']);
            $host = $parse['host'];
            
            if ($host == 'brwd.me' || $host == 'r.brandreward.com') {
                $host = 'Brandreward';
            } 
            elseif ($host == 't.cfjump.com') {
                $host = 'CommissionFactory';
            }
            elseif ($host == 'www.dlm9trk.com') {
                $host = 'DWClick';
            }
            elseif ($host == 'www.linkbux.com' || $host == 'lkbx.me' || $host == 'lbux.me') {
                $host = 'LinkBux';
            }
            elseif ($host == 'www.awin1.com' || $host == 'tidd.ly') {
                $host = 'Awin';
            }
            elseif ($host == 'clicktrk.diginlink.com') {
                $host = 'DiginLink';
            }
            elseif ($host == 'netlink.nisalink.com' || $host == 'awlink.nisalink.com' || $host == 'track.nisalink.com' || $host == 'linkage.nisalink.com' || $host == 'link.nisalink.com') {
                $host = 'NisaLink';
            }
            elseif ($host == 'click.linksynergy.com') {
                $host = 'LinkShare';
            }
            elseif ($host == 'ad.admitad.com') {
                $host = 'Admitad';
            }
            elseif ($host == 'pboost.me' || $host == 'pbee.me') {
                $host = 'PartnerBoost';
            }
            elseif ($host == 'go.linkscircle.com') {
                $host = 'LinksCircle';
            }
            elseif (strpos($rows['tracking_url'], 'ir3.xyz') || strpos($rows['tracking_url'], 'sjv.io') || strpos($rows['tracking_url'], 'pxf.io') || strpos($rows['tracking_url'], 'prf.hn') || strpos($rows['tracking_url'], '2gl34e.net') || strpos($rows['tracking_url'], 'trw6mw.net') || strpos($rows['tracking_url'], 'snlv.net') || strpos($rows['tracking_url'], 'ngi2ba.net') || strpos($rows['tracking_url'], 'dfjeo3.net') || strpos($rows['tracking_url'], '7zd4df.net') || strpos($rows['tracking_url'], 'o64jx9.net') || strpos($rows['tracking_url'], 'ilbqy6.net') || strpos($rows['tracking_url'], 'owjezm.net') || strpos($rows['tracking_url'], 'r69o.net') || strpos($rows['tracking_url'], 'i8epma.net') || strpos($rows['tracking_url'], 'tv2h87.net') || strpos($rows['tracking_url'], 'f6rcao.net') || strpos($rows['tracking_url'], '8zwg.net') || strpos($rows['tracking_url'], 'imp.i295768.net') || strpos($rows['tracking_url'], 'imp.i339540.net') || strpos($rows['tracking_url'], 'rvgu.net') || strpos($rows['tracking_url'], 'tod8mp.net') || strpos($rows['tracking_url'], '7eer.net') || strpos($rows['tracking_url'], 'lmwjx3.net') || strpos($rows['tracking_url'], 'snlv.net') || strpos($rows['tracking_url'], 'z6rjha.net') || strpos($rows['tracking_url'], 'tm7566.net') || strpos($rows['tracking_url'], '4emhls.net') || strpos($rows['tracking_url'], 'briy.net')) {
                $host = 'Impact';
            }
            elseif (strpos($rows['tracking_url'], 'fxo.co')) {
                $host = 'FlexOffer';
            }
            elseif (strpos($rows['tracking_url'], 'brwd.me')) {
                $host = 'Brandreward';
            }
            elseif (strpos($rows['tracking_url'], 'linksynergy.com')) {
                $host = 'LinkShare';
            }
            elseif (strpos($rows['tracking_url'], 'adpgtrack.com')) {
                $host = 'Adpump';
            }
            elseif (strpos($rows['tracking_url'], '1.envato.market')) {
                $host = 'Envato';
            }
            elseif (strpos($rows['tracking_url'], 'jdoqocy.com') || strpos($rows['tracking_url'], 'kqzyfj.com')) {
                $host = 'CJ';
            }
            elseif (strpos($rows['tracking_url'], 'voila.love')) {
                $host = 'Voila';
            }
            elseif ($rows['direct_url']==$rows['tracking_url']) {
                $host = 'No Network';
            }
            
            
            else {
                $host = $rows['tracking_url'];
            }
        echo '<td style="width: 30%;">'.$host.'</td>
            <td style="width:30%;">'.mb_strimwidth($rows['tracking_url'], 0, 50, "...").'</td>
            
        </tr>';
		
	}
}

function coupon_requests() {
	
	// Query the database 

	$query="SELECT * FROM `coupon_request` ORDER BY `coupon_request`.`date` DESC"; 
	
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);

    while($rows=mysqli_fetch_array($result))
	{
		echo '<tr>
            <td>'.$rows['store'].'<br><a href="https://www.revounts.com.au/'.$rows['store_slug'].'" target="_blank">View Store</a></td>
            <td>'.$rows['type'].' <br> '.$rows['code'].'</td>
            <td>'.$rows['title'].'</td>
            <td>'.$rows['description'].'</td>
            <td>'.$rows['date'].'</td>
            <td>'.$rows['added_ip'].'</td>
        </tr>';
		
	}
}

function contact_requests() {
	
	// Query the database 

	$query="SELECT * FROM `contact_request` ORDER BY `contact_request`.`created_at` DESC"; 
	
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);

    while($rows=mysqli_fetch_array($result))
	{
		echo '<tr>
            <td>'.$rows['name'].'</td>
            <td>'.$rows['email'].'</td>
            <td>'.$rows['message'].'</td>
            <td>'.$rows['created_at'].'</td>
        </tr>';
		
	}
}

//All Users
function all_users() {
	
	// Query the database
	$query="select * from tbluser order by id desc"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
	$count=1;
	while($rows=mysqli_fetch_array($result))
	{
		echo '<form role="form"><tr>

									<td>'.$count++.'</td>
                                    <td>'.$rows['uname'].'</td>
                                    <td>'.$rows['pwd'].'</td>
									'; 
									if($rows['status']==1)
									{
										echo '<td><span class="label label-table label-success">Active</span></td>';
										
									}
									
									else
									{
										echo '<td><span class="label label-table label-inverse">Disabled</span></td>';
										
									}
									
									
									
									echo '
                                    <td>'. selected_network($rows['network'])  .'</td>
                                    
                                    <td><button type="button"  class="btn btn-purple waves-effect waves-light" onclick="delete_user('.$rows['id'].')">Delete</button>
									<button class="btn btn-primary waves-effect waves-light" onclick="edit_user('.$rows['id'].')" data-toggle="modal" data-target="#con-close-modal">Edit</button>
									
										';
										if($rows['status']==1)
										echo '
										<a href="#" id="'.$rows['id'].'" class="btn btn-inverse waves-effect waves-light" onclick="user_status_switch('.$rows['id'].')">Disable</a>
									</td>
                                </tr>
								';
								else
								{
								echo '
								<a href="#" id="'.$rows['id'].'" class="btn btn-success waves-effect waves-light" onclick="user_status_switch('.$rows['id'].')">Enable</a>
									</td>
                                </tr>
								
								</form>';
				}
	}
	   
}

// Login Function
function login($uname,$pwd)
{
	$query="select * from tbluser where uname='".$uname."' and pwd='".$pwd."'";
	
	// Connect to the database
    $connection = db_connect();
	
	// Query the database
    $result = mysqli_query($connection,$query);
	
	$num_rows=mysqli_num_rows($result);
	$rows=mysqli_fetch_array($result);
	
	if($num_rows>0)
	{
		if($rows['status']==0)
		{
			header('location:error_pages/page-404.html');
			
		}
		else
		{
                        $_SESSION['loginStatus']=1;
                        $_SESSION['loginUser']=$uname;

			header('location: dashboard_1.php?dashboard='.$uname.'&status='.'1'.'&un='.$uname);
                        

			
		}
		
	}
	
	else
	{
		
		header('location: index.php?error=login-failed?');
	}
	
	
}


function encryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}

function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );
}



function edit_user($id)
{
	$connection = db_connect();
	$select="select * from tbluser where id='".$id."'";
	$query=mysqli_query($connection,$select);
	$rows=mysqli_fetch_array($query);
	
	echo '
                                        <div class="modal-dialog"> 
                                            <div class="modal-content"> 
                                                <div class="modal-header"> 
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                    <h4 class="modal-title">Edit User: '.$rows['uname'].'</h4> 
                                                </div> 
                                                <div class="modal-body"> 
                                                    <div class="row"> 
                                                        <div class="col-md-6"> 
                                                            <div class="form-group"> 
                                                                <label for="field-1" class="control-label">Name</label> 
                                                                <input type="text" class="form-control" id="field-1" value="'.$rows['uname'].'"> 
                                                            </div> 
                                                        </div> 
                                                        <div class="col-md-6"> 
                                                            <div class="form-group"> 
                                                                <label for="field-2" class="control-label">Password</label> 
                                                                <input type="text" class="form-control" id="field-2" value="'.$rows['pwd'].'" placeholder="Doe"> 
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Network</label> 
                                                                <input type="text" class="form-control" id="field-3" value="'.$rows['network'].'"  placeholder="Address"> 
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                    <div class="row"> 
                                                        <div class="col-md-4"> 
                                                            <div class="form-group"> 
                                                                <label for="field-4" class="control-label">Type</label> 
                                                                <input type="text" class="form-control" id="field-4" value="'.$rows['type'].'"  placeholder="Boston"> 
                                                            </div> 
                                                        </div> 
                                                </div> 
                                                <div class="modal-footer">
													<label for="field-4" class="control-label" id="update_response"></label> 	
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                                                    <button type="button" class="btn btn-info waves-effect waves-light" onclick="update_user('.$rows['id'].')">Save changes</button> 
                                                </div> 
                                            </div> 
                                        </div>
                                    <!-- /.modal -->';
	
	
}

function update_user($id,$name,$pass,$net,$type)
{
	$connection = db_connect();
	$update="update tbluser set uname='".$name."',pwd='".$pass."',network='".$net."',type='".$type."' where id='".$id."'";
	mysqli_query($connection,$update);
	
	echo "Update Successfully";
	
}

function addNetwork($network,$enterby)
{
	$connection = db_connect();
	
	$query=mysqli_query($connection,"select * from tblnetwork where Network='".$network."'");
	$result=mysqli_num_rows($query);
	
	if($result>0)
	{
		echo ' <button type="button" class="close" onclick="Custombox.close();">
			        <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Network Status</h4>
			    <div class="custom-modal-text">
				<h3>Ooops! '.$network.'</h3>Already Exist
				</div>';
	}
	else
	{
					$insert="insert into tblnetwork(`Network`,`enterby`) values('".$network."','".$enterby."')";
					mysqli_query($connection,$insert);
					echo ' <button type="button" class="close" onclick="Custombox.close();">
			        <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Network Status</h4>
			    <div class="custom-modal-text">
				<h3>'.$network.'</h3> Successfully Added To Database
				</div>';
	}
	
	
}

function all_networks()
{
	$connection=db_connect();
	$select= "select * from tblnetwork";
	$query = mysqli_query($connection,$select);
	while($rows=mysqli_fetch_array($query))
	{
		echo '<option value="'.$rows['id'].'">'.$rows['Network'].'</option>';
	}
	
}


function selected_network($netw)
{
														$connection=db_connect();
														$networks=explode(',',$netw);
														$network_array=count($networks);
														
														$i=0;
														$names="";
														for($i=0;$i<$network_array;$i++)
														{
															
															$select ="select * from tblnetwork where id='".$networks[$i]."'";
															$query = mysqli_query($connection,$select);
															$rows= mysqli_fetch_array($query);
															$names=$rows['Network'].",".$names;
															$i+1;
														}
														
														$clean_names=str_replace(',','-',$names);
														return $clean_names;
	
	
	
}


function all_network() {
	
	// Query the database
	$query="select * from tblnetwork order by id desc"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
	$count=1;
	while($rows=mysqli_fetch_array($result))
	{
							echo'<form role="form"><tr>
									<td>'.$count++.'</td>
                                    <td>'.$rows['Network'].'</td>
                                    <td>'.$rows['enterby'].'</td>
                                </tr>
								';
								
				}
	}
	   

	// Update User Status   
	   function update_status($id)
	   {
	
		 $connection = db_connect();
	$select="select * from tbluser where id='".$id."'";
	$result=mysqli_query($connection,$select);
	$rows=mysqli_fetch_array($result);
	
	if($rows['status']==1)
	{
		$update="update tbluser set status='0' where id='".$id."'";
		mysqli_query($connection,$update);	
		echo 'Status Updated';	
	}
	
	else
	{
		$update="update tbluser set status='1' where id='".$id."'";
		mysqli_query($connection,$update);
		echo 'Status Updated';
		
	}
		   
	   }



function add_parent_category(){
     $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
     $path = '../../images/category/'; // upload directory  
     $img = $_FILES['image']['name'];
     $tmp = $_FILES['image']['tmp_name'];
     // get uploaded file's extension
     $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
     // check's valid format
     if(in_array($ext, $valid_extensions)) 
     {     

      $path = $path.$img;
      if(move_uploaded_file($tmp,$path)) 
      {
          $date = date('Y-m-d');
          $insert="insert into tblcategory(
           name,
           slug,
           des,
           meta,
           meta_des,
           update_date, 
           parent,
           image 
           ) values(
          '".$_POST['cat_name']."',
          '".$_POST['cat_slug']."',
          '".$_POST['cat_desc']."',
            '".$_POST['cat_title']."',
          '".$_POST['cat_meta_desc']."',
          '".$date."', 
          'please select',
          '".$img."' 
          )";

          $con=db_connect(); 
          mysqli_query($con,$insert);
             echo "<h1>Added Successfully</h1>";      
      }
      else{
          echo 'Error';
      }
     } 
     else 
     {
      echo 'invalid file';
     }
    
}


	   function add_category($name,$slug,$des,$meta,$meta_desc,$date,$parent)
	   { 
	       $date = date('Y-m-d');
		   $con=db_connect();
		   $insert="insert into tblcategory(
		   `name`,
		   `slug`,
		   `des`,
		   `meta`,
		   `meta_des`,
		   `update_date`,
		   `parent`
		   ) values(
		       '$name',
		       '$slug',
		       '$des',
		       '$meta',
		       '$meta_desc',
		       '$date',
		       '$parent')";
		   
		   if(mysqli_query($con,$insert))
		   {
			   echo 'Success' ;
		   }
		   else
		   {
			   echo $insert;
		   }
		   
	   }
	   
	   
	   
	   function add_category_blog($bc_name,$bc_slug,$bc_desc,$bc_icon,$bc_title,$bc_meta_desc,$bc_meta_key)
	   {
		   $con2=db_connect();
		  $insert2="INSERT INTO `revounts_db`.`tblblogcat` (`name`, `slug`, `des`, `icon`, `meta_title`, `meta_des`, `meta_key`) VALUES ('$bc_name','$bc_slug','$bc_desc','$bc_icon','$bc_title','$bc_meta_desc','$bc_meta_key')";
		   
		   if(mysqli_query($con2,$insert2))
		   {
			   echo 'Success' ;
		   }
		   else
		   {
			   echo $insert2;
		   }
		   
	   }
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   function update_category($name,$slug,$des,$meta,$meta_desc,$id)
	   {
		   $con=db_connect();
		  
		   $update="update tblcategory set 
		   `name`='$name',
		   	`slug`='$slug',
			`des`='$des',
			`meta`='$meta',
			`meta_des`='$meta_desc'
			where id='$id'
			";
		   if(mysqli_query($con,$update))
		   {
			   echo 'Success' ;
		   }
		   else
		   {
			   echo 'Error While Updating';
		   }
		   
	   }
	   
	   
	   
	   function update_category_blog($up_name_cat_b,$up_slug_cat_b,$up_catdesc_cat_b,$up_icon_cat_b,$up_title_cat_b,$up_metadesc_cat_b,$up_name_key_b,$up_cat_b)
	   {
		   $con=db_connect();
		  
		  $update="UPDATE `revounts_db`.`tblblogcat` SET `name` = '$up_name_cat_b', `slug` = '$up_slug_cat_b', `des` = '$up_catdesc_cat_b', `icon` = '$up_icon_cat_b', `meta_title` = '$up_title_cat_b', `meta_des` = '$up_metadesc_cat_b', `meta_key` = '$up_name_key_b' WHERE `tblblogcat`.`id` = '$up_cat_b'";
		   if(mysqli_query($con,$update))
		   {
			   echo 'Success' ;
		   }
		   else
		   {
			   echo 'Error While Updating';
		   }
		   
	   }
	   
	   
	   
	   
	   
	   
	   
	   
	   
	  function all_categories()
	  {
	// Query the database
	$query="select * from tblcategory order by id desc"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
	$count=1;
	while($rows=mysqli_fetch_array($result))
	{
		echo '<form role="form"><tr>

									<td>'.$count++.'</td>
                                    <td>'.$rows['name'].'</td>
                                    <td>'.$rows['slug'].'</td>';
									 if($rows['featured']==1)
									 {
										echo '<td><span class="label label-table label-success">Featured</span></td>'; 
									 }
									 else
									 {
										 echo '<td><span class="label label-table label-inverse">Disabled</span></td>';
									 }
									echo '
	
                                    <td>'.$rows['Slider'].'</td>
                                    
                                    <td><button type="button"  class="btn btn-purple waves-effect waves-light" onclick="delete_category('.$rows['id'].')">Delete</button>
									<button class="btn btn-primary waves-effect waves-light" onclick="edit_category('.$rows['id'].')" data-toggle="modal" data-target="#con-close-modal">Edit</button>	
										
									</td>
                                </tr>

								</form>';
				}
	}
	
	
	
	function list_categories_blog()
{
	// Query the database
	$query="SELECT * FROM `tblblogcat` order by name asc"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
	
	while($rows=mysqli_fetch_array($result))
	            {
		echo '<option value="'.$rows['id'].'">'.$rows['name'].'</option>';
				}
	
}
	
	

		  
	
		// add category
		function edit_category($id)
		{
				
	$connection = db_connect();
	$select="select * from tblcategory where id='".$id."'";
	$query=mysqli_query($connection,$select);
	$rows=mysqli_fetch_array($query);
	
	echo '
                                        <div class="modal-dialog"> 
                                            <div class="modal-content"> 
                                                <div class="modal-header"> 
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                    <h4 class="modal-title">Edit Category: '.$rows['name'].'</h4> 
                                                </div> 
                                                <div class="modal-body"> 
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-1" class="control-label">Name</label> 
                                                                <input type="text" class="form-control" id="cat_name" value="'.$rows['name'].'"> 
                                                            </div> 
                                                        </div> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-2" class="control-label">Slug</label> 
                                                                <input type="text" class="form-control" id="cat_slug" value="'.$rows['slug'].'" placeholder="Doe"> 
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Meta Title</label> 
                                                                <input type="text" class="form-control" id="cat_meta" value="'.$rows['meta'].'"  placeholder="Address"> 
                                                            </div> 
                                                        </div> 
                                                    </div>


													<div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Description</label> 
                                                                <textarea class="form-control" id="cat_des" >'.$rows['desc'].'</textarea> 
                                                            </div> 
                                                        </div> 
                                                    </div> 
													
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-4" class="control-label">Meta Description</label> 
                                                                <input type="text" class="form-control" id="cat_meta_des" value="'.$rows['meta_des'].'"  placeholder="Boston"> 
                                                            </div> 
                                                        </div>
													<div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-4" class="control-label">Meta Keywords</label> 
                                                                <input type="text" class="form-control" id="cat_key"  value="'.$rows['meta_key'].'"  placeholder="Boston"> 
                                                            </div> 
                                                        </div>

												<div class="form-group">
	                                                <label class="col-md-4 control-label">Featured For Home</label>
	                                                <div class="col-md-4">
														
	                                                    <input type="checkbox" id="cat_featured" value="1" checked data-plugin="switchery"  data-color="#81c868"/>
	                                                </div>
	                                            </div>
											
                                                </div> 
                                                <div class="modal-footer">
													<label for="field-4" class="control-label" id="update_response"></label> 	
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                                                    <button type="button" class="btn btn-info waves-effect waves-light" onclick="update_category('.$rows['id'].')">Save changes</button> 
                                                </div> 
                                            </div> 
                                        </div>
                                    <!-- /.modal -->';
	

			
		}

	
	
	
	function delete_category($id)
	{
		$connection = db_connect();
		$delete="delete from tblcategory where id='".$id."'";
		mysqli_query($connection,$delete);
		all_categories();
		
		
		
	}

	function total_category() {
	
	// Query the database

$query="select * from tblcategory"; 
	
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);
	
	$num_rows=mysqli_num_rows($result);

    return $num_rows;
}


function list_categories()
{
	// Query the database
	$query="select * from tblcategory order by name asc"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
	
	while($rows=mysqli_fetch_array($result))
    {
		echo '<option value="'.$rows['id'].'">'.$rows['name'].'</option>';
	}
	
}


function list_sub_categories()
{
	// Query the database
	$query="select * from tblcategory where parent <> 'please select' order by name asc"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
	
	while($rows=mysqli_fetch_array($result))
	            {
		echo '<option value="'.$rows['id'].'">'.$rows['name'].'</option>';
				}
	
}



//All Faqs
function all_faqs() {
  
  // Query the database
  $query="SELECT * FROM `tblstore_faqs` order by id desc"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
  $count=1;
  while($rows=mysqli_fetch_array($result))
  {
      
        $query2="SELECT name FROM `tblstores` where id='".$rows['store_id']."'"; 
        $result2 = mysqli_query($connection,$query2);    
        $row3=mysqli_fetch_array($result2);    
            
        echo '<tr> <td>'.$count++.'</td>
            <td>'. $row3['name'].'</td>
            <td>'.$rows['faqs_heading'].'</td>
            <td>'.$rows['faqs_desc'].'</td>
            
                  '; 
                  
                  
                  
                  echo ' <td><button type="button"  class="btn btn-purple waves-effect waves-light" onclick="delete_faqs('.$rows['id'].')">Delete</button>
                  <button class="btn btn-primary waves-effect waves-light" onclick="edit_faqs('.$rows['id'].')" data-toggle="modal" data-target="#con-close-modal">Edit</button>';
    }
}
  
  
function edit_faqs_1($id)
{
  $connection = db_connect();
  $select="SELECT * FROM `tblstore_faqs` where id='".$id."'";
  $query=mysqli_query($connection,$select);
  $rows=mysqli_fetch_array($query);
  
   echo '
                                        <div class="modal-dialog"> 
                                            <div class="modal-content"> 
                                                <div class="modal-header"> 
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                    <h4 class="modal-title">Edit FAQs: '.$rows['faqs_heading'].'</h4> 
                                                </div> 
                                                <div class="modal-body"> 
                                                    <div class="row"> 
                                                        <div class="col-md-6"> 
                                                            <div class="form-group"> 
                                                                <label for="field-1" class="control-label">Question Heading</label> 
                                                                <input type="text" class="form-control" id="field-1" value="'.$rows['faqs_heading'].'"> 
                                                            </div> 
                                                        </div> 
                                                        <div class="col-md-6"> 
                                                            <div class="form-group"> 
                                                                <label for="field-2" class="control-label">Question Description</label> 
                                                                <input type="text" class="form-control" id="field-2" value="'.$rows['faqs_desc'].'" placeholder="Doe"> 
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                    
                                                   
                                                <div class="modal-footer">
                          <label for="field-4" class="control-label" id="update_response"></label>  
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                                                    <button type="button" class="btn btn-info waves-effect waves-light" onclick="update_faqs('.$id.')">Save changes</button> 
                                                </div> 
                                            </div> 
                                        </div>
                                    <!-- /.modal -->';
  
  
  
}


function update_faqs($id,$faqs_heading,$faqs_desc)
{
  $connection = db_connect();
  $update='update tblstore_faqs set faqs_heading="'.$faqs_heading.'",faqs_desc="'.$faqs_desc.'" where id="'.$id.'" ';
  mysqli_query($connection,$update);
  
  echo "Update Successfully";
  
}
  

function add_faqs(){
      $con=db_connect();
      
     $store_id= $_POST['store_id'];
    
   $count=count(array_filter($_POST['q_name']));
   
   for($insert=0; $insert<$count; $insert++){
       
        $question= $_POST['q_name'][$insert];
        $desc= $_POST['q_desc'][$insert];
       
        $query='INSERT INTO `tblstore_faqs` (`store_id`, `faqs_heading`, `faqs_desc`) VALUES ("'.$store_id.'", "'.$question.'", "'.$desc.'")';
        mysqli_query($con,$query);
        echo "Success"; 
     
    }
    
}



function list_stores_faqs()
{
  // Query the database
  $query="select * from tblstores order by name asc"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
  
  while($rows=mysqli_fetch_array($result))
              {
    echo '<option value="'.$rows['id'].'">'.$rows['name'].'</option>';
        }
  
}



function list_stores()
{
	// Query the database
	$query="select * from tblstores order by name asc"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
	
	while($rows=mysqli_fetch_array($result))
	            {
		echo '<option value="'.$rows['id'].'">'.$rows['name'].'</option>';
				}
	
}

function list_stores_search()
{
	// Query the database
	$query="select * from tblstores order by name asc"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
	
	while($rows=mysqli_fetch_array($result))
	            {
		echo '<option value="https://www.revounts.com.au/'.$rows['store_url'].'">'.$rows['name'].'</option>';
				}
	
}

function list_category_dropdown()
{
	// Query the database
	$query="SELECT * FROM `tblcategory` order by name asc"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
	
	while($rows=mysqli_fetch_array($result))
	            {
		echo '<option value="'.$rows['id'].'">'.$rows['name'].'</option>';
				}
	
}




function list_category()
{
	// Query the database
	$query="SELECT * FROM `tblblogcat` order by name asc"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
	
	while($rows=mysqli_fetch_array($result))
	            {
		echo '<option value="'.$rows['id'].'">'.$rows['name'].'</option>';
				}
	
}






function store_name($id)
{
	// Query the database
	$query="select * from tblstores where id='".$id."'"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
	
	while($rows=mysqli_fetch_array($result))
	            {
		echo '<option selected value="'.$rows['id'].'">'.$rows['name'].'</option>';
				}
	
}

function list_category_name($id)
{
	// Query the database
	$query="select * from tblcategory where id='".$id."'"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
	
	while($rows=mysqli_fetch_array($result))
	            {
		echo '<option selected value="'.$rows['id'].'">'.$rows['name'].'</option>';
				}
	
}



function all_stores()
	  {
	// Query the database
	$query="select * from tblstores order by id desc"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
	$count=1;
	while($rows=mysqli_fetch_array($result))
	{
		echo '<form role="form"><tr>

									<td>'.$count++.'</td>
                                    <td>'.$rows['name'].'</td>
                                    <td>'.$rows['store_url'].'</td>';
									 if($rows['featured']==1)
									 {
										echo '<td><span class="label label-table label-success">Featured</span></td>'; 
									 }
									 else
									 {
										 echo '<td><span class="label label-table label-inverse">Disabled</span></td>';
									 }
									echo '
									 
                                    <td><img src="https://www.cartincoupon.com/images/stores/'.$rows['img'].'" width="50vw" height="50vh"></td>
                                    <td>'.$rows['short_desc'].'</td>
                                    <td><button type="button"  class="btn btn-purple waves-effect waves-light" onclick="delete_store('.$rows['id'].')">Delete</button>
									<a href="edit_store_1.php?'.$_SERVER['QUERY_STRING'].'&store_id='.$rows['id'].'" class="btn btn-primary waves-effect">Edit</button>	
										
									</td>
                                </tr>

								</form>';
				}
	}

 function delete_store($id)
	{
		$connection = db_connect();
		$delete="delete from tblstores where id='".$id."'";
		mysqli_query($connection,$delete);
		
	}
	 function delete_store_new($id)
	{
		$connection = db_connect();
		$select="select * from tblstores where id='".$id."' limit 1";
		$query = mysqli_query($connection,$select);

		$rows=mysqli_fetch_array($query);







		$insert="INSERT INTO `tblstores_del`
 (`name`, `long_desc`, `store_url`, `tracking_url`, `direct_url`, `meta`, `meta_des`, `meta_key`, `meta_date`, `img`, `img_alt`,`banner_img`, `Category`
 ,`enterby`, `status`, `heading`, `short_desc`,`publish_date`,`top`,`for_sitemap`,`views`,`facebook`,
`pinterest`,
`twitter`,
`instagram`,
`youtube`,
`google`,
`android`,
`ios`
) 
 VALUES 
 ('".str_replace("'","`",$rows['name'])."',
 '".str_replace("'","`",$rows['long_desc'])."',
 '".$rows['store_url']."',
 '".$rows['tracking_url']."',
 '".$rows['direct_url']."',
 '".str_replace("'","",$rows['meta'])."',
 '".str_replace("'","",$rows['meta_des'])."',
 '".str_replace("'","",$rows['meta_key'])."',
 '".$rows['meta_date']."',
 '".$rows['img']."',
 '".$rows['img_alt']."',
 '".$rows['banner_img']."',
 '".$rows['Category']."',

 '".$rows['enterby']."',
 '".$rows['status']."',
 '".$rows['heading']."',
 
 '".$rows['short_desc']."',
 '".$rows['publish_date']."',
 '".$rows['top']."',
 '".$rows['for_sitemap']."',
 '".$rows['views']."',

'".$rows['facebook']."',
'".$rows['pinterest']."',
'".$rows['twitter']."',
'".$rows['instagram']."',
'".$rows['youtube']."',
'".$rows['google_plus']."',
'".$rows['android']."',
'".$rows['ios']."')";
 


     if (mysqli_query($connection,$insert)) {
     	$delete="delete from tblstores where id='".$id."'";
		mysqli_query($connection,$delete);
     };
		
	}

	
	
function list_season()
{
	// Query the database
	$query="select * from season order by id desc"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
	
	while($rows=mysqli_fetch_array($result))
	            {
		echo '<option value="'.$rows['id'].'">'.$rows['name'].'</option>';
				}
	
}
	
function season_name($id)
{
	// Query the database
	$break=explode(',',$id);
	$count=count($break);
	for($i=0;$i<$count;$i++)
	{
		$query="select * from season where id='".$break[$i]."'"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
	
	while($rows=mysqli_fetch_array($result))
	            {
		echo '<option selected value="'.$rows['id'].'">'.$rows['name'].'</option>';
				}
	}
	
	
}	

function category_name($id)
{
	// Query the database
	$break=explode(',',$id);
	$count=count($break);
	for($i=0;$i<$count;$i++)
	{
		$query="SELECT * FROM `tblcategory` where id='".$break[$i]."'"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
	
	while($rows=mysqli_fetch_array($result))
	            {
		echo '<option selected value="'.$rows['id'].'">'.$rows['name'].'</option>';
				}
	}
	
	
}


	
function add_home_settings($mt,$md,$wm,$ga,$fb,$gp,$tw,$pin,$in,$su)
{
	$connection= db_connect();
	$insert=mysqli_query($connection,"UPDATE `home_settings` SET
	`meta_title`='".$mt."',
	`meta_desc`='".$md."',
	`webmaster`='".$wm."',
	`google_analytics`='".$ga."',
	`facebook`='".$fb."',
	`google_plus`='".$gp."',
	`twitter`='".$tw."',
	`pinterest`='".$pin."',
	`instagram`='".$in."',
	`stumbleupon`='".$su."' WHERE id='1'");
	
	echo '<button type="button" class="close" onclick="Custombox.close();">
			   <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Settings Status</h4>
			    <div class="custom-modal-text">
				<h3>'.$insert.'</h3>
				</div>';
	
	
}

function add_category_settings($mt,$md)
{
	$connection= db_connect();
	$insert=mysqli_query($connection,"UPDATE `category_settings` SET
	`meta_title`='".$mt."',
	`meta_desc`='".$md."'
	 WHERE id='1'");
	
	echo '<button type="button" class="close" onclick="Custombox.close();">
			   <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Settings Status</h4>
			    <div class="custom-modal-text">
				<h3>Category Page Settings Saved</h3>
		   </div>';
	
	
}

function add_store_settings($mt,$md)
{
	$connection= db_connect();
	$insert=mysqli_query($connection,"UPDATE `store_settings` SET
	`meta_title`='".$mt."',
	`meta_desc`='".$md."'
	 WHERE id='1'");
	
	echo '<button type="button" class="close" onclick="Custombox.close();">
			   <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Settings Status</h4>
			    <div class="custom-modal-text">
				<h3>Store Page Settings Saved</h3>
		   </div>';
	
	
}

function add_blog_settings($mt,$md)
{
	$connection= db_connect();
	$insert=mysqli_query($connection,"UPDATE `blog_settings` SET
	`meta_title`='".$mt."',
	`meta_desc`='".$md."'
	 WHERE id='1'");
	
	echo '<button type="button" class="close" onclick="Custombox.close();">
			   <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Settings Status</h4>
			    <div class="custom-modal-text">
				<h3>Blog Page Settings Saved</h3>
		   </div>';
	
	
}

function retrieve_home_settings()
{
	$select="select * from home_settings";
	$connection=db_connect();
	$result=mysqli_query($connection,$select);
	$row=mysqli_fetch_array($result);
	
	echo '<div class="row">
						    <div class="col-sm-12">
                        		             <div class="card-box">
                        			      <h4 class="m-t-0 header-title"><b>Data Retrieved Now You Can Update Settings</b></h4>
                        			
                        			     <div class="row">
                        				<div class="col-md-12">
                        					<form class="form-horizontal" role="form" name="home_form" id="home">     
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Meta Title</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="'.$row['meta_title'].'" name="home_meta_title" value="">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Meta Description</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="'.$row['meta_desc'].'" name="meta_desc" value="">
	                                                </div>
	                                            </div>
												
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Web Master</label>
	                                                <div class="col-md-10">
	                                                    <textarea class="form-control" name="webmaster" >'.$row['webmaster'].'</textarea>
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Google Analytics</label>
	                                                <div class="col-md-10">
	                                                    <textarea class="form-control" name="analytics" >'.$row['google_analytics'].'</textarea>
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Facebook</label>
	                                                <div class="col-md-10">
	                                                  <input type="text" class="form-control" name="fb" value="'.$row['facebook'].'"   value="">
	                                                </div>
	                                            </div>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Google Plus</label>
	                                                <div class="col-md-10">
	                                                  <input type="text" class="form-control" name="gp" value="'.$row['google_plus'].'" value="">
	                                                </div>
	                                            </div>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Twitter</label>
	                                                <div class="col-md-10">
	                                                  <input type="text" class="form-control" name="tw" value="'.$row['twitter'].'" value="">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Pinterest</label>
	                                                <div class="col-md-10">
	                                                  <input type="text" class="form-control" name="pin" value="'.$row['pinterest'].'" value="">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Instagram</label>
	                                                <div class="col-md-10">
	                                                  <input type="text" class="form-control" value="'.$row['instagram'].'" name="in" value="">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">StumbleUpon</label>
	                                                <div class="col-md-10">
	                                                  <input type="text" class="form-control" name="su" value="'.$row['stumbleupon'].'" value="">
	                                                </div>
	                                            </div>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Save Settings</label>
	                                                <div class="col-md-2">
	                                                  <button type="button"  class="btn btn-primary" name="home" onclick="home_settings()" value="">Save</button>
													  <button type="button"  class="btn btn-primary" name="home" onclick="retrieve_home_settings()" value="">Retrieve Settings</button>
	                                                </div>
													
	                                            </div>
												
	                                        </form>
                        				</div>
                        				
                        				
                        			</div>
									
									
                        		</div>
                        	</div>			
					     </div> <!--End Form Row-->	';
	
}

function retrieve_category_settings()
{
	$select="select * from category_settings";
	$connection=db_connect();
	$result=mysqli_query($connection,$select);
	$row=mysqli_fetch_array($result);
	
	echo '<div class="row">
								           <div class="col-sm-12">
                        		             <div class="card-box">
                        			      <h4 class="m-t-0 header-title"><b>Data Retrieved Now You Can Update Settings</b></h4>
                        			
                        			     <div class="row">
                        				<div class="col-md-12">
                        					<form class="form-horizontal" role="form" name="category_form">     
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Meta Title</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" name="category_meta_title" value="'.$row['meta_title'].'">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Meta Description</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" name="meta_desc" value="'.$row['meta_desc'].'">
	                                                </div>
	                                            </div>
												
												
												
												
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Save Settings</label>
	                                                <div class="col-md-10">
	                                                  <button type="button"  class="btn btn-primary" onclick="category_page()"  value="">Save</button>
													  <button type="button" class="btn btn-primary" onclick="retrieve_category_settings()" >Retrieve Settings</button>
	                                                </div>
	                                            </div>
												
	                                        </form>
                        				</div>
                        				
                        				
                        			</div>
									
									
                        		</div>
                        	</div>			
					</div> <!--End Form Row-->
	';

}

function retrieve_store_settings()
{
	$select="select * from store_settings";
	$connection=db_connect();
	$result=mysqli_query($connection,$select);
	$row=mysqli_fetch_array($result);
	
	echo '<div class="row">
								           <div class="col-sm-12">
                        		             <div class="card-box">
                        			      <h4 class="m-t-0 header-title"><b>Data Retrieved Now You Can Update Settings</b></h4>
                        			
                        			     <div class="row">
                        				<div class="col-md-12">
                        					<form class="form-horizontal" role="form" name="store_form">     
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Meta Title</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="'.$row['meta_title'].'" name="store_meta_title" value="">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Meta Description</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="'.$row['meta_desc'].'" name="meta_desc" value="">
	                                                </div>
	                                            </div>
												
												
												
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Save Settings</label>
	                                                <div class="col-md-10">
	                                                  <button type="button"  class="btn btn-primary" onclick="add_store_settings()" >Save</button>
													  <button type="button"  class="btn btn-primary" onclick="retrieve_store_settings()" >Retrieve Settings</button>
	                                                </div>
	                                            </div>
												
	                                        </form>
                        				</div>
                        				
                        				
                        			</div>
									
									
                        		</div>
                        	</div>			
					</div> <!--End Form Row-->';
}

function retrieve_blog_settings()
{
	
	$select="select * from blog_settings";
	$connection=db_connect();
	$result=mysqli_query($connection,$select);
	$row=mysqli_fetch_array($result);
	
	echo '<div class="row">
								           <div class="col-sm-12">
                        		             <div class="card-box">
                        			      <h4 class="m-t-0 header-title"><b>Data Retrieved Now You Can Update Settings</b></h4>
                        			
                        			     <div class="row">
                        				<div class="col-md-12">
                        					<form class="form-horizontal" role="form" name="blog_form">     
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Meta Title</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="'.$row['meta_title'].'" name="blog_meta_title" value="">
	                                                </div>
	                                            </div>
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Meta Description</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="'.$row['meta_desc'].'" name="meta_desc" value="">
	                                                </div>
	                                            </div>
												
												
												
												
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Save Settings</label>
	                                                <div class="col-md-10">
	                                                  <button type="button"  class="btn btn-primary" onclick="add_blog_settings()" >Save</button>
													  <button type="button"  class="btn btn-primary" onclick="retrieve_blog_settings()" >Retrieve Settings</button>
	                                                </div>
	                                            </div>
												
												
												
	                                        </form>
                        				</div>
                        				
                        				
                        			</div>
									
									
                        		</div>
                        	</div>			
					</div> <!--End Form Row-->';
		
}
////////////////////////////////////////Store Edit
function edit_store($id)
{
	$select="select `store_url` from tblstores where id='".$id."'";
	
	if(empty($_POST['top']))
	{
			$_POST['top']=0;
	}
	
	if(empty($_POST['meta_date'])) 
	{
			$_POST['meta_date']=0;
	}
	if(empty($_POST['for_sitemap']))
	{
			$_POST['for_sitemap']=0;
	}
	
	$season_value=implode(',',$_POST['season_store']);
	$category_value=implode(',',$_POST['category_store']);
	
 $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
 $path = '../../images/stores/'; // upload directory	
	
 $img = $_FILES['store_image_update']['name'];
 $tmp = $_FILES['store_image_update']['tmp_name'];
  
 // get uploaded file's extension
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
 // can upload same image using rand function
 
 if(!empty($img))
 {
	  // check's valid format
 if(in_array($ext, $valid_extensions)) 
 {     

  $path = $path.$img;
  if(move_uploaded_file($tmp,$path)) 
  {
 
	$update="UPDATE `tblstores` SET 
	`name`='".$_POST['store_name']."',
         `store_url`='".$_POST['update_store_url']."',
	`long_desc`='".mysqli_real_escape_string(db_connect(),$_POST['store_long_description'])."',
	`direct_url`='".$_POST['direct_url']."',
	`tracking_url`='".$_POST['store_tracking_url']."',
	`updated_by`='".$_POST['username']."',

	`meta`='".$_POST['meta_title']."',
	`meta_des`='".$_POST['meta_desc']."',
	`img_alt`='".$_POST['image_alt']."',
	`img`='".$img."',
	`banner_img`='".$_POST['banner_image']."',
	`Category`='".$category_value."',
	`short_desc`='".mysqli_real_escape_string(db_connect(),$_POST['store_short_description'])."',
	`publish_date`='".date('F y j')."',
	`top`='".$_POST['top']."',
	`for_sitemap`='".$_POST['for_sitemap']."',
	`meta_date`='".$_POST['meta_date']."', 
	`facebook`='".$_POST['facebook']."',
	`pinterest`='".$_POST['pinterest']."',
	`twitter`='".$_POST['twitter']."',
	`instagram`='".$_POST['instagram']."',
	`youtube`='".$_POST['youtube']."',
	`google`='".$_POST['google_plus']."',
	`android`='".$_POST['android']."',
	`ios`='".$_POST['ios']."', 
        `amp_meta_desc`='".$_POST['meta_desc_amp']."',
		`heading`='".$_POST['heading']."',
		`season`='".$season_value."'	
	WHERE id='".$id."'";
	
	$connection = db_connect();
	mysqli_query($connection,$update);
	$result=mysqli_query($connection,$select);
	$rows=mysqli_fetch_array($result);
	echo '<button type="button" class="close" onclick="Custombox.close();">
			   <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Settings Status</h4>
			    <div class="custom-modal-text">
				<h3>Store Updated Successfully</h3>    
		   </div>';	  
		  
  }
 } 
 else 
 {
  echo "Invalid File";
 }
 
 }

	else
	{
		date_default_timezone_set("Asia/Karachi");

		$update_at = date('Y-m-d H:i:s', time());
        $update="UPDATE `tblstores` SET 
	`name`='".$_POST['store_name']."',
         `store_url`='".$_POST['update_store_url']."',
	`long_desc`='".mysqli_real_escape_string(db_connect(),$_POST['store_long_description'])."',
	`direct_url`='".$_POST['direct_url']."',
	`tracking_url`='".$_POST['store_tracking_url']."',
	`meta`='".$_POST['meta_title']."',
	`meta_des`='".$_POST['meta_desc']."',
	`updated_by`='".$_POST['username']."',

	`img_alt`='".$_POST['image_alt']."',
	`banner_img`='".$_POST['banner_image']."',
	`Category`='".$category_value."',
	`short_desc`='".mysqli_real_escape_string(db_connect(),$_POST['store_short_description'])."',
	`publish_date`='".date('F y j')."',
	`top`='".$_POST['top']."',
	`for_sitemap`='".$_POST['for_sitemap']."',
	`meta_date`='".$_POST['meta_date']."', 
	`facebook`='".$_POST['facebook']."',
	`pinterest`='".$_POST['pinterest']."',
	`twitter`='".$_POST['twitter']."',
	`instagram`='".$_POST['instagram']."',
	`youtube`='".$_POST['youtube']."',
	`google`='".$_POST['google_plus']."',
	`android`='".$_POST['android']."',
	`ios`='".$_POST['ios']."',
        `amp_meta_desc`='".$_POST['meta_desc_amp']."',
		`heading`='".$_POST['heading']."',
		`updated_at`='".$update_at."',
		
		`season`='".$season_value."'	
	WHERE id='".$id."'";
	
	$connection = db_connect();
	mysqli_query($connection,$update);
	$result=mysqli_query($connection,$select);
	$rows=mysqli_fetch_array($result);
	echo '<button type="button" class="close" onclick="Custombox.close();">
			   <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Settings Status</h4>
			    <div class="custom-modal-text">
				<h3>Store Updated Successfully</h3>  
		   </div>';  
	}
								
}

function add_coupon()
{
    
if(isset($_POST['coupon_image']))
{

	$connect=db_connect();
	$select="SELECT `sort` FROM tblcoupon where store='".$_POST['store']."' order by sort desc limit 1 ";
	$result=mysqli_query($connect,$select);
	$rows=mysqli_fetch_array($result);
	$sortOrder=$rows['sort'] + 2;
	if(empty($_POST['featured']))
	{
		$_POST['featured']=0;
	}
	if(empty($_POST['popular']))
	{
		$_POST['popular']=0;
	}
	
	
		if(empty($_POST['store_feature']))
	{
		$_POST['store_feature']=0;
	}
	if(empty($_POST['expired_cpn']))
	{
		$_POST['expired_cpn']=0;
	}
	if(empty($_POST['addbyuser_cpn']))
	{
		$_POST['addbyuser_cpn']=0;
	}
	

	$path = $path.$img; 
	
             $insert='INSERT INTO `tblcoupon`(
        	`name`,
        	`offer`,
        	`offer_desc`,
        	`coupon_code`, 
        	`chk_active`,
        	`expdate`,
        	`tracking_url`,
        	`store`,
        	`category`,
        	`img`,
        	`featured`,
        	`exp_chk`,
        	`addbyuser`,
        	`store_feature`,
        	`sort`,
        	`enterby`,
         	`popular` ) VALUES (
        	"'.$_POST['offer'].'",
        	"'.$_POST['offer_details'].'",
        	"'.$_POST['offer_description'].'",
        	"'.$_POST['code'].'",
           	"'.$_POST['code_type'].'",
        	"'.$_POST['expiry_date'].'",
        	"'.$_POST['tracking_url'].'",
        	"'.$_POST['store'].'",
        	"'.$_POST['choose_category'].'",
        	"'.$_POST['coupon_image'].'",
        	"'.$_POST['featured'].'",
        	"'.$_POST['expired_cpn'].'",
        	"'.$_POST['addbyuser_cpn'].'",
        	"'.$_POST['store_feature'].'",
        	"'.$sortOrder.'",
        	"'.$_POST['username'].'",
        	"'.$_POST['popular'].'")';
        	

        	if(mysqli_query($connect,$insert)){
        	echo '<button type="button" class="close" onclick="Custombox.close();">
        			   <span>&times;</span><span class="sr-only">Close</span>
        			    </button>
        			    <h4 class="custom-modal-title">Settings Status</h4>
        			    <div class="custom-modal-text">
        				<h3>Coupon Added Successfully</h3>
                                          
        		   </div>'; 
        	    
        	}
		   
		         else 
                 {
                  echo 'Error';
                 }
       
    }
    
}

function season_deals($season)
	  {
	// Query the database
	$query="select * from tblcoupon where season=$season and season_active='1' order by id desc"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
	$count=1;
	while($rows=mysqli_fetch_array($result))
	{
		?>
		<form role="form"><tr id="cpn_<?php echo $rows['id'] ?>">

									<td><?php echo $count++ ?></td>
                                    <td><?php echo $rows['name']; ?></td>
                                    <td><?php echo coupon_store_name($rows['store']); ?></td>
                                    <td><?php echo $rows['offer'] ?></td>
									 <?php if($rows['featured']==1)
									 { ?>
										<td><span class="label label-table label-success">Featured</span></td>
									 <?php } else
									 { ?>
									 <td><span class="label label-table label-inverse">Disabled</span></td>
									 <?php } ?>
                                   
                                    
                                    <td><button type="button"  class="btn btn-purple waves-effect waves-light" onclick="delete_coupon(<?php echo $rows['id']; ?>,<?php echo $rows['store'] ?>)">Delete</button>
									<a class="btn btn-primary waves-effect waves-light" href="edit_deal_1.php?<?php echo 'status=1&un=hammad'.'&coupon_id='.$rows['id']; ?>">Edit</a>
									</td>
                                </tr>

								</form>
		<?php
				}
	}
 function all_coupons($store)
	  {
	// Query the database
	$query="select * from tblcoupon where store='$store' and season_active='0' order by id desc"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
	$count=1;
	while($rows=mysqli_fetch_array($result))
	{
		?>
		<form role="form"><tr id="cpn_<?php echo $rows['id'] ?>">

									<td><?php echo $count++ ?></td>
                                   <td>Created By: <?php echo $rows['enterby']; ?>
				                    <br>
				                    Updated By: <?php echo $rows['updated_by']; ?>
				                    <br>
				                    Updated At: <?php echo $rows['updated_at']; ?>
				                  </td>
                                    <td><?php echo $rows['name']; ?></td>
                                    <td><?php echo coupon_store_name($rows['store']); ?></td>
                                    <td><?php echo $rows['offer'] ?></td>
									 <?php if($rows['featured']==1)
									 { ?>
										<td><span class="label label-table label-success">Featured</span></td>
									 <?php } else
									 { ?>
									 <td><span class="label label-table label-inverse">Disabled</span></td>
									 <?php } ?>
                                   
                                    
                                    <td><button type="button"  class="btn btn-purple waves-effect waves-light" onclick="delete_coupon(<?php echo $rows['id']; ?>,<?php echo $rows['store'] ?>)">Delete</button>
									<button class="btn btn-primary waves-effect waves-light" onclick="edit_coupon(<?php echo $rows['id']; ?>)" data-toggle="modal" data-target="#con-close-modal">Edit</button>	
										
									</td>
                                </tr>

								</form>
		<?php
				}
	}

function coupon_store_name($id)
{
	// Query the database
	$query="select `name` from tblstores where id='".$id."'"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
	
	$row=mysqli_fetch_array($result);
	 $name= $row['name'];
	 
	 return $name;
	
	
}
	function delete_coupon($id,$store)
	{
		$connection = db_connect();
		$delete="delete from tblcoupon where id='".$id."'";
		mysqli_query($connection,$delete);
		all_coupons($store);
		
		
		
	}
	
	function edit_coupon($id)
		{
				
	$connection = db_connect();
	$select="select * from tblcoupon where id='".$id."'";
	$query=mysqli_query($connection,$select);
	$rows=mysqli_fetch_array($query);
	 
	  ?>
	  

	  <form name="update_coupon_form">
                                        <div class="modal-dialog"> 
                                            <div class="modal-content"> 
                                                <div class="modal-header"> 
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
													<input type="hidden" name="update_coupon" />	
													<input type="hidden" name="username" value="<?php echo $_SESSION['loginUser']?>"/>

													<p>Created At : <b><?php echo ($rows['created_at'] != NULL)?$rows['created_at']:'N/A' ?> </b></p>
					
								<p>Updated At : <b><?php echo ($rows['updated_at'] != NULL)?$rows['updated_at']:'N/A' ?> </b></p>	
                                                    <h5 class="modal-title">Edit Category: <?php echo $rows['name']; ?></h5>
													<h5>Coupon Active:&nbsp<span><strong><?php echo $rows['chk_active'] ?></span> </strong></h5>

                                                </div> 
                                                <div class="modal-body"> 
													
                                                    <div class="row"> 
												
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-1" class="control-label">Offer</label>
																<input type="hidden" value="<?php echo $id ?>" name="coupon_id">
                                                                <input type="text" class="form-control" name="update_offer"  value="<?php echo $rows['name']; ?>"> 
                                                            </div> 
                                                        </div>
														  
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-2" class="control-label">Offer Details</label> 
                                                                <input type="text" class="form-control" name="update_offer_details" value="<?php echo $rows['offer']; ?>" > 
                                                            </div> 
                                                        </div> 
														
														<div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-2" class="control-label">Select Store</label> 
                                                                <select name="store" type="text" class="form-control" >
																<?php store_name($rows['store']); ?>		
																<?php list_stores(); ?>
																</select> 
                                                            </div> 
                                                        </div>
                                                        
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-2" class="control-label">Select Category</label> 
                                                                <select name="category" type="text" class="form-control" >
                                                                    <?php list_category_name($rows['category']); ?>
																<?php list_category_dropdown(); ?>
																</select> 
                                                            </div> 
                                                        </div>
                                                        
                                                        
	                                            
	                                            
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Image Url</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control filestyle" name="coupon_image_update" id="s_image" value="<?php echo $rows['img'] ?>"  data-iconname="fa fa-cloud-upload">
	                                                </div>
	                                            </div>

	                                            
                                                        
														
														 <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-2" class="control-label">Offer Details</label> 
                                                                <textarea class="form-control" name="update_offer_desc" ><?php echo $rows['offer_desc'] ?></textarea> 
                                                            </div> 
                                                        </div>
                                                        
 														
														
														
                                                    </div> 
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Tracking Url</label> 
                                                                <input type="text" class="form-control"  name="update_tracking_url" value="<?php if($rows['tracking_url']!=NULL) {echo $rows['tracking_url'];}else{} ?>"  placeholder="Tracking Url"> 
                                                            </div> 
                                                        </div> 
                                                    </div>
													
													
													 <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Expiry</label> 
                                                                <input type="date" class="form-control" name="update_expiry_date" value="<?php echo $rows['expdate']; ?>">
                                                            </div> 
                                                        </div> 
                                                    </div>
													
													<?php 
                                                        $check = $rows['chk_active']; 
                                                        if($check == 'false'){
                                                    ?>
                                                                <div class="row"> 
                                                                    <div class="col-md-6"> 
                                                                        <div class="form-group"> 
                                                                            <label for="field-3" class="control-label">Code</label> 
                                                                            <input type="radio" onclick="check()"  name="update_code_type[]" value="false" id="cd" class="form-control" checked>
                                                                        </div> 
                                                                    </div>
                                                  
                                                                    <div class="col-md-6">
                                                                        <div class="form-group"> 
                                                                            <label for="field-3" class="control-label">Active</label> 
                                                                            <input type="radio" onclick="check_active()" value="true" name="update_code_type[]" id="cd" class="form-control" >
                                                                        </div>
                                                                  </div>
                                                                </div>
                                                                <div class="row" id="code_input"> 
                                                                    <div class="col-md-12"> 
                                                                        <div class="form-group"> 
                                                                            <label for="field-3" class="control-label">Enter Code</label> 
                                                                              <input type="text" class="form-control" name="update_code" value="<?php echo $rows['coupon_code']; ?>" >
                                                                        </div> 
                                                                    </div> 
                                                                </div>
                                                                       
                                                        <?php
                                                        }
                                                        else{
                                                        ?>
                                                                <div class="row"> 
                                                                    <div class="col-md-6"> 
                                                                        <div class="form-group"> 
                                                                            <label for="field-3" class="control-label">Code</label> 
                                                                            <input type="radio" onclick="check()"  name="update_code_type[]" value="false" id="cd" class="form-control" >
                                                                    </div> 
                                                                    </div>
                                                      
                                                                    <div class="col-md-6">
                                                                        <div class="form-group"> 
                                                                            <label for="field-3" class="control-label">Active</label> 
                                                                             <input type="radio" onclick="check_active()" value="true" name="update_code_type[]" id="cd_active" class="form-control" checked>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row" id="code_input" style="display: none"> 
                                                                    <div class="col-md-12"> 
                                                                        <div class="form-group"> 
                                                                            <label for="field-3" class="control-label">Enter Code</label> 
                                                                              <input type="text" class="form-control" name="update_code" value="<?php echo $rows['coupon_code']; ?>" >
                                                                        </div> 
                                                                    </div> 
                                                                </div>
                                                        <?php
                                                        }
                                                        ?>
                                  
													<div class="row" > 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-321" class="control-label">Featured For Home</label></br>
                                                              <?php if($rows['featured']=='1') { ?>																
                                                                  <input id="field-321" type="checkbox" name="update_featured" value="1" checked data-plugin="switchery" data-color="#81c868"/>
															  <?php } else { ?>
															<input id="field-321" type="checkbox" name="update_featured" value="1"  data-plugin="switchery" data-color="#81c868"/>
															  <?php } ?> 
															</div> 
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="row" > 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-321" class="control-label">Popular</label></br>
                                                              <?php if($rows['popular']=='1') { ?>																
                                                                  <input id="field-321" type="checkbox" name="update_popular" value="1" checked data-plugin="switchery" data-color="#81c868"/>
															  <?php } else { ?>
															<input id="field-321" type="checkbox" name="update_popular" value="1"  data-plugin="switchery" data-color="#81c868"/>
															  <?php } ?> 
															</div> 
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="row" > 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-321" class="control-label">Store Feature</label></br>
                                                              <?php if($rows['store_feature']=='1') { ?>																
                                                                  <input id="field-321" type="checkbox" name="update_store" value="1" checked data-plugin="switchery" data-color="#81c868"/>
															  <?php } else { ?>
															<input id="field-321" type="checkbox" name="update_store" value="1"  data-plugin="switchery" data-color="#81c868"/>
															  <?php } ?> 
															</div> 
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row" > 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-321" class="control-label">Expired</label></br>
                                                              <?php if($rows['exp_chk']=='1') { ?>																
                                                                  <input id="field-321" type="checkbox" name="exp_chk" value="1" checked data-plugin="switchery" data-color="#81c868"/>
															  <?php } else { ?>
															<input id="field-321" type="checkbox" name="exp_chk" value="1"  data-plugin="switchery" data-color="#81c868"/>
															  <?php } ?> 
															</div> 
                                                        </div>
                                                    </div>
                                                    <div class="row" > 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-345" class="control-label">Added by User</label></br>
                                                              <?php if($rows['addbyuser']==1) { ?>																
                                                                  <input id="field-345" type="checkbox" name="addbyuser" value="1" checked data-plugin="switchery" data-color="#81c868"/>
															  <?php } else { ?>
															<input id="field-345" type="checkbox" name="addbyuser" value="1"  data-plugin="switchery" data-color="#81c868"/>
															  <?php } ?> 
															</div> 
                                                        </div>
                                                    </div>
                                                    
                                                    
			
													
													
													
													
                                                </div> 
                                                <div class="modal-footer">
													<label for="field-4" class="control-label" id="update_response"></label> 	
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                                                    <button type="button" class="btn btn-info waves-effect waves-light" 
                                                    onclick="upd_coupon()">Save changes</button> 
                                                </div> 
                                            </div> 
                                        </div>
										</form>
	  
	  
	  <?php
	

			
		}

	
	
	 function all_seasons()
	  {
	// Query the database
	$query="select * from season order by id desc"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
	$count=1;
	while($row=mysqli_fetch_array($result))
	{
		?>
            
		<form role="form"><tr id="season_response<?php echo $row['id'] ?>">

					 				<td><?php echo $count++ ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['start_date'] ?></td>
                                    <td><?php echo $row['end_date'] ?></td>
									
                                    <td><button type="button"  class="btn btn-purple waves-effect waves-light" onclick="delete_season(<?php echo $row['id']; ?>)">Delete</button>
									<a href="edit_season_1.php?<?php echo $_SERVER['QUERY_STRING'].'&seasonId='.$row['id']; ?>" class="btn btn-primary waves-effect">Edit</a>		
										
									</td>
                                </tr>

								</form>
		<?php
				}
	}
	
	
	function update_coupon($id)
	{
	  
        
                		$connection = db_connect();
        
                		if(empty($_POST['update_featured']))
                		{
                			$_POST['update_featured']=0;
                		}
                		
                		if(empty($_POST['update_popular']))
                		{
                			$_POST['update_popular']=0;
                		}
                		
                		
                		if(empty($_POST['update_store']))
                		{
                			$_POST['update_store']=0;
                		}
                		
                		if(empty($_POST['exp_chk']))
                		{
                			$_POST['exp_chk']=0;
                		}
                		if(empty($_POST['addbyuser']))
                		{
                			$_POST['addbyuser']=0;
                		}
                		
                		
                		if(empty($_POST['update_code_type']))
                		{
                			echo "Please Select Coupon Type";
                		}
                		else
                		{
		date_default_timezone_set("Asia/Karachi");

							$update_at = date('Y-m-d H:i:s', time());

                    	    $update="UPDATE `tblcoupon` SET
                    		`name`='".$_POST['update_offer']."',
                    		`offer`='".$_POST['update_offer_details']."',
                    		`updated_by`='".$_POST['username']."',
                    		`coupon_code`='".$_POST['update_code']."',
                    		`chk_active`='".$_POST['update_code_type'][0]."',
                    		`expdate`='".$_POST['update_expiry_date']."',
                    		`tracking_url`='".$_POST['update_tracking_url']."',
                    		`featured`='".$_POST['update_featured']."',
                    		`popular`='".$_POST['update_popular']."',
                    		`store_feature`='".$_POST['update_store']."',
                    		`exp_chk`='".$_POST['exp_chk']."',
                    		`addbyuser`='".$_POST['addbyuser']."',
                    		`offer_desc`='".$_POST['update_offer_desc']."', 
                            `store`='".$_POST['store']."',  
                            `updated_at`='".$update_at."', 
                            `category`='".$_POST['category']."', 
                            `img`='".$_POST['coupon_image_update']."' 		
                    		WHERE id='".$id."'";
                    	
                    		mysqli_query($connection,$update);
                    		
                    		all_coupons($_POST['store']);
                		
                		    }

            
            }
            
        
        
	    
	

function all_blogs_draft()
	  {
	// Query the database
	$query="select * from tblblogpost_draft order by id desc"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
	$count=1;
	while($rows=mysqli_fetch_array($result))
	{
	   
		echo '<form role="form"><tr>

									<td>'.$count++.'</td>
                                    <td>'.$rows['name'].'</td>
                                    <td>'.$rows['short_des'].'</td>';
									 if($rows['featured']==1)
									 {
										echo '<td><span class="label label-table label-success">Enabled</span></td>'; 
									 }
									 else
									 {
										 echo '<td><span class="label label-table label-inverse">Disabled</span></td>';
									 }
									echo '
									 
                                    <td><img src="../../images/blog/'.$rows['image'].'" width="50vw" height="50vh"></td>
                                   
                                    <td><button type="button" class="btn btn-purple waves-effect waves-light" onclick="deleteBlog('.$rows['id'].')">Delete</button>
									<a href="draft_edit_blog_1.php?'.$_SERVER['QUERY_STRING'].'&blog_id='.$rows['id'].'" class="btn btn-primary waves-effect">Edit</a><br>
									<a href="https://www.revounts.com.au/blog-draft/'.$rows['url'].'" class="btn btn-secondary waves-effect" target="_blank">Live View</a>
										
									</td>
                                </tr>

								</form>';
				}
	}
function all_blogs()
	  {
	// Query the database
	$query="select * from tblblogpost order by id desc"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
	$count=1;
	while($rows=mysqli_fetch_array($result))
	{
	   
		echo '<form role="form"><tr>

									<td>'.$count++.'</td>
                                    <td>'.$rows['name'].'</td>
                                    <td>'.$rows['short_des'].'</td>';
									 if($rows['featured']==1)
									 {
										echo '<td><span class="label label-table label-success">Enabled</span></td>'; 
									 }
									 else
									 {
										 echo '<td><span class="label label-table label-inverse">Disabled</span></td>';
									 }
									echo '
									 
                                    <td><img src="../../images/blog/'.$rows['image'].'" width="50vw" height="50vh"></td>
                                   
                                    <td><!--<button type="button"  class="btn btn-purple waves-effect waves-light" onclick="delete_blog('.$rows['id'].')">Delete</button>-->
									<a href="edit_blog_1.php?'.$_SERVER['QUERY_STRING'].'&blog_id='.$rows['id'].'" class="btn btn-primary waves-effect">Edit</button>	
										
									</td>
                                </tr>

								</form>';
				}
	}
	
	
	
	function all_reviews_draft(){
		 $query="select * from review_draft order by id desc"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
  $count=1;
  while($rows=mysqli_fetch_array($result))
  {
 
    $query_stores="select `name` from tblstores where id= '".$rows['store_id']."'";  
    $result_stores = mysqli_query($connection,$query_stores);
    $rows_stores=mysqli_fetch_array($result_stores);


    echo '<form role="form"><tr>

                  <td>'.$count++.'</td>
                                    <td>'.$rows_stores['name'].'</td>
                                    <td>'.$rows['product'].'</td>
                                    <td>'.$rows['date'].'</td>'; 
                  echo '
                    
                                   
                                    <td><button type="button" style="display:none;" class="btn btn-purple waves-effect waves-light" onclick="delete_review_draft('.$rows['id'].')">Delete</button>
                  <a href="draft_edit_review_1.php?'.$_SERVER['QUERY_STRING'].'&review_id='.$rows['id'].'" class="btn btn-primary waves-effect">Edit</a> <br>
                  <a href="https://www.revounts.com.au/reviews-draft/'.$rows['slug'].'" class="btn btn-secondary waves-effect" target="_blank">Live View</a>
                    
                  </td>
                                </tr>

                </form>';
        }
	}
function all_reviews()
    {
  // Query the database
  $query="select * from review order by id desc"; 
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
  $count=1;
  while($rows=mysqli_fetch_array($result))
  {
 
    $query_stores="select `name` from tblstores where id= '".$rows['store_id']."'";  
    $result_stores = mysqli_query($connection,$query_stores);
    $rows_stores=mysqli_fetch_array($result_stores);


    echo '<form role="form"><tr>

                  <td>'.$count++.'</td>
                                    <td>'.$rows_stores['name'].'</td>
                                    <td>'.$rows['product'].'</td>
                                    <td>'.$rows['date'].'</td>'; 
                  echo '
                    
                                   
                                    <td><button type="button"  class="btn btn-purple waves-effect waves-light" onclick="delete_review('.$rows['id'].')">Delete</button>
                  <a href="edit_review_1.php?'.$_SERVER['QUERY_STRING'].'&review_id='.$rows['id'].'" class="btn btn-primary waves-effect">Edit</button> 
                    
                  </td>
                                </tr>

                </form>';
        }
  }

  
function delete_review($id)
  {
    $connection = db_connect();
    $delete="delete from review where id='".$id."'";
    mysqli_query($connection,$delete);
    all_reviews_draft();
    
    
  } 
  
  function delete_review_draft($id)
  {
    $connection = db_connect();
    $delete="delete from review_draft where id='".$id."'";
    mysqli_query($connection,$delete);
    all_reviews();
    
    
  } 
  
  function delete_review_ajax($id)
  {
    $connection = db_connect();
    $delete="delete from review where id='".$id."'";
    mysqli_query($connection,$delete);
   
    
    
  } 
  
  function delete_review_draft_ajax($id)
  {
    $connection = db_connect();
    $delete="delete from review_draft where id='".$id."'";
    mysqli_query($connection,$delete);
   
    
    
  } 

	
function delete_blog($id)
	{
		$connection = db_connect();
		$delete="delete from tblblogpost where id='".$id."'";
		mysqli_query($connection,$delete);
		all_blogs();
		
		
	}
	function delete_blog_ajax($id)
	{
		$connection = db_connect();
		$delete="delete from tblblogpost where id='".$id."'";
		mysqli_query($connection,$delete);
		///all_blogs();
		
		
	}
	function delete_blog_ajax_draft($id)
	{
		$connection = db_connect();
		$delete="delete from tblblogpost_draft where id='".$id."'";
		mysqli_query($connection,$delete);
		all_blogs_draft();
		
		
	}	
	
	function delete_blog_draft($id)
	{
		$connection = db_connect();
		$delete="delete from tblblogpost where id='".$id."'";
		mysqli_query($connection,$delete);
		all_blogs_draft();
		
		
	}	

////////////////////////////////////////Store Edit
	function edit_blog_draft($id){
$select="select * from tblblogpost_draft where id='".$id."'";	

if($_FILES['edit_b_image']['name'] == null)
{
	if(empty($_POST['b_feature']))
	{
			$_POST['b_feature']=0;
	}
	
	if(empty($_POST['top']))
	{
			$_POST['top']=0;
	}
	$connection = db_connect();
	$stores=implode(',',$_POST['b_store']);


	if($_POST['is_draft'] == 1){
	
			 $update="UPDATE `tblblogpost_draft` SET
	`name`='".$_POST['b_title']."',
        `url`='".str_replace(' ','-',$_POST['b_slug'])."',
	`long_des`='".mysqli_real_escape_string($connection,$_POST['b_long_description'])."',
	`short_des`='".mysqli_real_escape_string($connection,$_POST['b_short_description'])."',
	`image`='".$_POST['current_image']."',
	`image_alt`='".$_POST['img_alt']."',
	`tags`='".$_POST['tags2']."',
	`meta_title`='".$_POST['b_meta_title']."',
	`meta_des`='".$_POST['b_meta_desc']."',
	`category`='".$_POST['b_category']."',
	`publish_date`='".date('Y-m-d')."',
	`r_store`='".$_POST['r_store']."',
	
	`featured`='".$_POST['b_feature']."' WHERE id='".$id."'";
		}else{
				$update="INSERT INTO `tblblogpost`
		 (`name`, `short_des`, `long_des`, `image`, `image_alt`, `tags`, `meta_title`, `meta_des`, `category`, `featured`,`status`,publish_date,name_your,`url`,`views`,`r_store`)
		 VALUES 
		 ('".str_replace("'","`",$_POST['b_title'])."',
		 '".mysqli_real_escape_string($connection,$_POST['b_short_description'])."',
		 '".mysqli_real_escape_string($connection,$_POST['b_long_description'])."',
		 '".$_POST['current_image']."',
		 '".$_POST['img_alt']."',
		  '".$_POST['tags']."',
		 '".$_POST['b_meta_title']."',
		 '".$_POST['b_meta_desc']."',
		 '".$_POST['b_category']."',
		 '".$_POST['b_feature']."',
		 '1',
		 '".date('Y-m-d')."',
		 '".$_POST['username']."',
		 '".$slug."',
		  '100','".$_POST['r_store']."' )";
			 delete_blog_ajax_draft($id);
		}
	
	
	$connection = db_connect();
	mysqli_query($connection,$update);
	$result=mysqli_query($connection,$select);
	$rows=mysqli_fetch_array($result);
	echo '<button type="button" class="close" onclick="Custombox.close();">
			   <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Blog Status</h4>
			    <div class="custom-modal-text">
				<h3>Blog Updated Successfully '.$_POST['b_feature'].'</h3>
				<p><a target="_blank" href="https://www.cartincoupon.com/blog/'.str_replace(' ','-',$_POST['b_slug']).'">Visit Blog </a></p>
		   </div>';
}


else
{
		
	$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
	$path = '../../images/blog/'; // upload directory	
	
	$img = $_FILES['edit_b_image']['name'];
	$tmp = $_FILES['edit_b_image']['tmp_name'];
  
 // get uploaded file's extension
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

 
 // check's valid format
 if(in_array($ext, $valid_extensions)) 
 {     
  $path = $path.$img; 
   
  if(move_uploaded_file($tmp,$path)) 
  {
	
	if(empty($_POST['b_feature']))
	{
			$_POST['b_feature']=0;
	}
	
	if(empty($_POST['b_feature']))
	{
			$_POST['b_feature']=0;
	}
	$connection = db_connect();
	$slug=str_replace(" ","-",$_POST['b_slug']);
	$stores=implode(',',$_POST['b_store']);

	if($_POST['is_draft'] == 1){
		
$update="UPDATE `tblblogpost_draft` SET
	`name`='".$_POST['b_title']."',
	`url`='".$slug."',
	`long_des`='".mysqli_real_escape_string($connection,$_POST['b_long_description'])."',
	`short_des`='".mysqli_real_escape_string($connection,$_POST['b_short_description'])."',
	`image`='".$img."',
	`image_alt`='".$_POST['img_alt']."',
	`meta_title`='".$_POST['b_meta_title']."',
	`meta_des`='".$_POST['b_meta_desc']."',
	`category`='".$_POST['b_category']."',
	`publish_date`='".date('F y j')."',
	`featured`='".$_POST['b_feature']."' WHERE id='".$id."'";
		}else{
			$update="INSERT INTO `tblblogpost`
		 (`name`, `short_des`, `long_des`, `image`, `image_alt`, `tags`, `meta_title`, `meta_des`, `category`, `featured`,`status`,publish_date,name_your,`url`,`views`,`r_store`)
		 VALUES 
		 ('".str_replace("'","`",$_POST['b_title'])."',
		 '".mysqli_real_escape_string($connection,$_POST['b_short_description'])."',
		 '".mysqli_real_escape_string($connection,$_POST['b_long_description'])."',
		 '".$img."',
		 '".$_POST['img_alt']."',
		  '".$_POST['tags']."',
		 '".$_POST['b_meta_title']."',
		 '".$_POST['b_meta_desc']."',
		 '".$_POST['b_category']."',
		 '".$_POST['b_feature']."',
		 '1',
		 '".date('Y-m-d')."',
		 '".$_POST['username']."',
		 '".$slug."',
		  '100','".$_POST['r_store']."' )";
			 delete_blog_ajax_draft($id);
		}
	
	
	$connection = db_connect();
	mysqli_query($connection,$update);
	$result=mysqli_query($connection,$select);
	$rows=mysqli_fetch_array($result);
	echo '<button type="button" class="close" onclick="Custombox.close();">
			   <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Blog Status</h4>
			    <div class="custom-modal-text">
				<h3>Blog Updated Successfully '.$_POST['b_feature'].'</h3> 
		   </div>';
	
}
else
{
	echo 'Invalid File Upload.';
	
}
	
	
} 

else
{
	echo 'Invalid File Extension.';
}
	

}
	
	
	
	
	
	}
function edit_blog($id)
{
	
$select="select * from tblblogpost where id='".$id."'";	

if($_FILES['edit_b_image']['name'] == null)
{
	if(empty($_POST['b_feature']))
	{
			$_POST['b_feature']=0;
	}
	
	if(empty($_POST['top']))
	{
			$_POST['top']=0;
	}
	$connection = db_connect();
	$stores=implode(',',$_POST['b_store']);


	if($_POST['is_draft'] == 1){
		$update="INSERT INTO `tblblogpost_draft`
		 (`name`, `short_des`, `long_des`, `image`, `image_alt`, `tags`, `meta_title`, `meta_des`, `category`, `featured`,`status`,publish_date,name_your,`url`,`views`,`r_store`)
		 VALUES 
		 ('".str_replace("'","`",$_POST['b_title'])."',
		 '".mysqli_real_escape_string($connection,$_POST['b_short_description'])."',
		 '".mysqli_real_escape_string($connection,$_POST['b_long_description'])."',
		 '".$_POST['old_img']."',
		 '".$_POST['img_alt']."',
		  '".$_POST['tags']."',
		 '".$_POST['b_meta_title']."',
		 '".$_POST['b_meta_desc']."',
		 '".$_POST['b_category']."',
		 '".$_POST['b_feature']."',
		 '1',
		 '".date('Y-m-d')."',
		 '".$_POST['username']."',
		 '".$slug."',
		  '100','".$_POST['r_store']."' )";
			 delete_blog_ajax($id);

		}else{
			$update="UPDATE `tblblogpost` SET
	`name`='".$_POST['b_title']."',
        `url`='".str_replace(' ','-',$_POST['b_slug'])."',
	`long_des`='".mysqli_real_escape_string($connection,$_POST['b_long_description'])."',
	`short_des`='".mysqli_real_escape_string($connection,$_POST['b_short_description'])."',
	`image`='".$_POST['current_image']."',
	`image_alt`='".$_POST['img_alt']."',
	`tags`='".$_POST['tags2']."',
	`meta_title`='".$_POST['b_meta_title']."',
	`meta_des`='".$_POST['b_meta_desc']."',
	`category`='".$_POST['b_category']."',
	`publish_date`='".date('Y-m-d')."',
	`r_store`='".$_POST['r_store']."',
	
	`featured`='".$_POST['b_feature']."' WHERE id='".$id."'";
		}
	
	
	$connection = db_connect();
	mysqli_query($connection,$update);
	$result=mysqli_query($connection,$select);
	$rows=mysqli_fetch_array($result);
	echo '<button type="button" class="close" onclick="Custombox.close();">
			   <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Blog Status</h4>
			    <div class="custom-modal-text">
				<h3>Blog Updated Successfully '.$_POST['b_feature'].'</h3>
				<p><a target="_blank" href="https://www.cartincoupon.com/blog/'.str_replace(' ','-',$_POST['b_slug']).'">Visit Blog </a></p>
		   </div>';
}


else
{
		
	$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
	$path = '../../images/blog/'; // upload directory	
	
	$img = $_FILES['edit_b_image']['name'];
	$tmp = $_FILES['edit_b_image']['tmp_name'];
  
 // get uploaded file's extension
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

 
 // check's valid format
 if(in_array($ext, $valid_extensions)) 
 {     
  $path = $path.$img; 
   
  if(move_uploaded_file($tmp,$path)) 
  {
	
	if(empty($_POST['b_feature']))
	{
			$_POST['b_feature']=0;
	}
	
	if(empty($_POST['b_feature']))
	{
			$_POST['b_feature']=0;
	}
	$connection = db_connect();
	$slug=str_replace(" ","-",$_POST['b_slug']);
	$stores=implode(',',$_POST['b_store']);

	if($_POST['is_draft'] == 1){
		$update="INSERT INTO `tblblogpost_draft`
		 (`name`, `short_des`, `long_des`, `image`, `image_alt`, `tags`, `meta_title`, `meta_des`, `category`, `featured`,`status`,publish_date,name_your,`url`,`views`,`r_store`)
		 VALUES 
		 ('".str_replace("'","`",$_POST['b_title'])."',
		 '".mysqli_real_escape_string($connection,$_POST['b_short_description'])."',
		 '".mysqli_real_escape_string($connection,$_POST['b_long_description'])."',
		 '".$img."',
		 '".$_POST['img_alt']."',
		  '".$_POST['tags']."',
		 '".$_POST['b_meta_title']."',
		 '".$_POST['b_meta_desc']."',
		 '".$_POST['b_category']."',
		 '".$_POST['b_feature']."',
		 '1',
		 '".date('Y-m-d')."',
		 '".$_POST['username']."',
		 '".$slug."',
		  '100','".$_POST['r_store']."' )";
			 delete_blog_ajax($id);

		}else{
			$update="UPDATE `tblblogpost` SET
	`name`='".$_POST['b_title']."',
	`url`='".$slug."',
	`long_des`='".mysqli_real_escape_string($connection,$_POST['b_long_description'])."',
	`short_des`='".mysqli_real_escape_string($connection,$_POST['b_short_description'])."',
	`image`='".$img."',
	`image_alt`='".$_POST['img_alt']."',
	`meta_title`='".$_POST['b_meta_title']."',
	`meta_des`='".$_POST['b_meta_desc']."',
	`category`='".$_POST['b_category']."',
	`publish_date`='".date('F y j')."',
	`featured`='".$_POST['b_feature']."' WHERE id='".$id."'";
		}
	
	
	$connection = db_connect();
	mysqli_query($connection,$update);
	$result=mysqli_query($connection,$select);
	$rows=mysqli_fetch_array($result);
	echo '<button type="button" class="close" onclick="Custombox.close();">
			   <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Blog Status</h4>
			    <div class="custom-modal-text">
				<h3>Blog Updated Successfully '.$_POST['b_feature'].'</h3> 
		   </div>';
	
}
else
{
	echo 'Invalid File Upload.';
	
}
	
	
} 

else
{
	echo 'Invalid File Extension.';
}
	

}
	
	
	
	
									
	
}	
	
?>