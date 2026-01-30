<?php 
date_default_timezone_set("Asia/Karachi");
include('ajax_db.php');


if(isset($_GET['edit_store_form']))
{
	edit_store_form($_GET['edit_store_form']);
}


if(isset($_POST['update_author']))
{
 $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
 $path = '../../images/author/'; // upload directory	
	
 $img = $_FILES['avatar']['name'];
 $tmp = $_FILES['avatar']['tmp_name'];
  
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
		  $update="update author set
		  `name`='".$_POST['author_name']."',
		  `slug`='".$_POST['author_url']."',
		  `gender`='".$_POST['gender']."',
		  `short_desc`='".$_POST['author_desc']."',
		  `image`='".$img."',
		  `meta_title`='".$_POST['author_title']."',
		  `meta_desc`='".$_POST['author_meta_desc']."',
		  `facebook`='".$_POST['facebook']."',
		  `twitter`='".$_POST['twitter']."',
		  `google`='".$_POST['google_plus']."',
                   `quora`='".$_POST['quora']."', 
		  `email`='".$_POST['email']."',
		  `contact`='".$_POST['contact']."',
                  `sidebar`='".$_POST['sidebar'][0]."'
		  where id='".$_POST['update_author']."'
		  ";
		  $con=db_connect();
		  mysqli_query($con,$update);
		  echo "<h1>Updated Successfully</h1>";
		  
		  
		  
		  
  }
 } 
 else 
 {
  echo "Invalid File";
 }
 
 }

	else
	{
		  $update="update author set
		  `name`='".$_POST['author_name']."',
		  `slug`='".$_POST['author_url']."',
		  `gender`='".$_POST['gender']."',
		  `short_desc`='".$_POST['author_desc']."',
		  `meta_title`='".$_POST['author_title']."',
		  `meta_desc`='".$_POST['author_meta_desc']."',
		  `facebook`='".$_POST['facebook']."',
		  `twitter`='".$_POST['twitter']."',
		  `google`='".$_POST['google_plus']."',
                    `quora`='".$_POST['quora']."', 
		  `email`='".$_POST['email']."',
		  `contact`='".$_POST['contact']."',
                  `sidebar`='".$_POST['sidebar'][0]."'
		  where id='".$_POST['update_author']."'
		  ";
		  $con=db_connect();
		  mysqli_query($con,$update);
		  echo "<h1>Updated Successfully</h1>";
	}
}






///////////////////////////////////////////Add Review Post
if(isset($_FILES['r_image']))
{
$slug=str_replace(" ","-",$_POST['r_slug']);  
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
$path = '../../images/review/'; // upload directory 
  
 $img = $_FILES['r_image']['name'];
 $tmp = $_FILES['r_image']['tmp_name'];
  
 // get uploaded file's extension
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
 // can upload same image using rand function
 
 
 // check's valid format
 if(in_array($ext, $valid_extensions)) 
 {     
  $path = $path.$img;  
 } 
 else 
 {
  echo 'invalid file';
 }
 
 
 if(empty($_POST['r_feature']))
 {
   $_POST['r_feature']=0;
 }
 if(empty($_POST['product_review']))
 {
   $_POST['product_review']=0;
 }
 
 $connection = db_connect(); 
if($_POST['is_draft'] == NULL){
	  $insert='INSERT INTO `review`
 (`slug`, `store_id`, `short_desc`,`long_desc`, `img`, `img_alt`, `country`, `meta_title`, `meta_desc`, `date`, `views`, `featured`,`product_review`,`editor_choice`, `timestamp`)
 VALUES 
 ("'.$slug.'",
 "'.$_POST['r_store'].'",
 "'.str_replace('"',"'",$_POST['r_short_description']).'",
 "'.str_replace('"',"'",$_POST['r_description']).'",
 "'.$img.'",
 "'.$_POST['img_alt'].'", 
 "'.$_POST['country'].'",
 "'.str_replace("`","'",$_POST['r_meta_title']).'",
 "'.$_POST['r_meta_desc'].'", 
 "'.$_POST['date'].'",
 "100",
 "'.$_POST['r_feature'].'",
 "'.$_POST['product_review'].'",
 "'.$_POST['editor_choice'].'",
 "'.date('d-m-Y').'"
 )';
 
}else{
	  $insert='INSERT INTO `review_draft`
 (`slug`, `store_id`, `short_desc`,`long_desc`, `img`, `img_alt`, `country`, `meta_title`, `meta_desc`, `date`, `views`, `featured`,`product_review`,`editor_choice`, `timestamp`)
 VALUES 
 ("'.$slug.'",
 "'.$_POST['r_store'].'",
 "'.str_replace('"',"'",$_POST['r_short_description']).'",
 "'.str_replace('"',"'",$_POST['r_description']).'",
 "'.$img.'",
 "'.$_POST['img_alt'].'", 
 "'.$_POST['country'].'",
 "'.str_replace("`","'",$_POST['r_meta_title']).'",
 "'.$_POST['r_meta_desc'].'", 
 "'.$_POST['date'].'",
 "100",
 "'.$_POST['r_feature'].'",
 "'.$_POST['product_review'].'",
 "'.$_POST['editor_choice'].'",
 "'.date('d-m-Y').'"
 )';
 
}

 if(move_uploaded_file($tmp,$path)) 
  {
     mysqli_query($connection,$insert);
  echo '<button type="button" class="close" onclick="Custombox.close();">
              <span>&times;</span><span class="sr-only">Close</span>
          </button>
          <h4 class="custom-modal-title">Review Status</h4>
          <div class="custom-modal-text">
        <h3>Review added successfully</h3>
        </div>';
  }
 

 
 
 
}




if(isset($_GET['read_comment']))
{
	read_comment($_GET['read_comment']);
}


if(isset($_POST['cat_form_value']))
{
    echo 'edit_category_1.php?'.$_POST['queryString'].'&catid='.$_POST['catid'];
}


if(isset($_GET['delete_comment']))
{
	delete_comment($_GET['delete_comment']);
}	

if(isset($_GET['approve_comment']))
{
	approve_comment($_GET['approve_comment']);
}


if(isset($_POST['updateDeal']))
{
	
 $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
 $path = '../../images/deal/'; // upload directory	
	
 $img = $_FILES['update_deal_image']['name'];
 $tmp = $_FILES['update_deal_image']['tmp_name'];
  
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
		$update="update tblcoupon set 
		`name`='".$_POST['dealbox']."',
		`offer`='".$_POST['deal_title']."',
		`coupon_code`='".$_POST['code']."',
		`chk_active`='".$_POST['code_type']."',
		`expdate`='".$_POST['expiry_date']."',
		`tracking_url`='".$_POST['tracking_url']."',
		`store`='".$_POST['store']."',
		`featured_deal`='".$_POST['featured']."',
		`season`='".$_POST['season_select']."',
		`img`='".$img."',
		`season_active`='1',
		`old_price`='".$_POST['old_price']."',
		`new_price`='".$_POST['new_price']."'
		 where id='".$_POST['updateDeal']."'
		";

		  
		  $con=db_connect();
		  mysqli_query($con,$update);
		  echo $update;
		  
		  
		  
		  
  }
 } 
 else 
 {
  echo "Invalid File";
 }
 
 }

	else
	{
		$update="update tblcoupon set 
		`name`='".$_POST['dealbox']."',
		`offer`='".$_POST['deal_title']."',
		`coupon_code`='".$_POST['code']."',
		`chk_active`='".$_POST['code_type']."',
		`expdate`='".$_POST['expiry_date']."',
		`tracking_url`='".$_POST['tracking_url']."',
		`store`='".$_POST['store']."',
		`featured_deal`='".$_POST['featured']."',
		`season`='".$_POST['season_select']."',
		`season_active`='1',
		`old_price`='".$_POST['old_price']."',
		`new_price`='".$_POST['new_price']."'
		 where id='".$_POST['updateDeal']."'
		";
		  $con=db_connect();
		  mysqli_query($con,$update);
		  echo $update;
	}
}

if(isset($_GET['season_deals']))
{
	season_deals($_GET['season_deals']);
}

if(isset($_POST['dealValue']))
{
	if(!empty($_FILES['deal_image']))
	{
		   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
 $path = '../../images/deal/'; // upload directory	
	
 $img = $_FILES['deal_image']['name'];
 $tmp = $_FILES['deal_image']['tmp_name'];
  
 // get uploaded file's extension
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
 // can upload same image using rand function
 
 
 // check's valid format
 if(in_array($ext, $valid_extensions)) 
 {     

  $path = $path.$img;
  if(move_uploaded_file($tmp,$path)) 
  {
        $con=db_connect();
        $select="SELECT `sort` FROM tblcoupon where store='".$_POST['store']."' order by sort desc limit 1 ";
	$result=mysqli_query($connect,$select);
	$rows=mysqli_fetch_array($result);
	$sortOrder=$rows['sort'] + 2;

		  $insert="insert into tblcoupon(
		  `name`,
		  `offer`,
		  `coupon_code`,
		  `chk_active`,
		  `expdate`,
		  `tracking_url`,
		  `store`,
		  `featured_deal`,
		  `season`,
		  `img`,
		  `season_active`,
		  `old_price`,
		  `new_price`,
                  `sort`) values(
		  '".$_POST['dealbox']."',
		  '".$_POST['deal_title']."',
		  '".$_POST['code']."',
		  '".$_POST['code_type']."',
		  '".$_POST['expiry_date']."',
		  '".$_POST['tracking_url']."',
		  '".$_POST['store']."',
		  '".$_POST['featured']."',
		  '".$_POST['season_select']."',
		  '".$img."',
		  '1',
		  '".$_POST['old_price']."',
		  '".$_POST['new_price']."',
                  '".$sortOrder."' 
		  )";
		 
		  mysqli_query($con,$insert);
		  echo '<h1>Deal Added Successfully</h1>';
  }
 } 
 else 
 {
  echo 'invalid file';
 }
	}
	
	else
	{
        $con=db_connect();
        $select="SELECT `sort` FROM tblcoupon where store='".$_POST['store']."' order by sort desc limit 1 ";
	$result=mysqli_query($connect,$select);
	$rows=mysqli_fetch_array($result);
	$sortOrder=$rows['sort'] + 2;
	         $insert="insert into tblcoupon(
		  `name`,
		  `offer`,
		  `coupon_code`,
		  `chk_active`,
		  `expdate`,
		  `tracking_url`,
		  `store`,
		  `featured_deal`,
		  `season`,
		  `img`,
		  `season_active`,
		  `old_price`,
		  `new_price`,
                  `sort` ) values(
		  '".$_POST['dealbox']."',
		  '".$_POST['deal_title']."',
		  '".$_POST['code']."',
		  '".$_POST['code_type']."',
		  '".$_POST['expiry_date']."',
		  '".$_POST['tracking_url']."',
		  '".$_POST['store']."',
		  '".$_POST['featured']."',
		  '".$_POST['season_select']."',
		  '',
		  '1',
		  '".$_POST['old_price']."',
		  '".$_POST['new_price']."',
                  '".$sortOrder."' 
		  )";
		 
		  mysqli_query($con,$insert);
		  echo '<h1>Deal Added Successfully</h1>';
	}
}



if(isset($_POST['add_author']))
{
add_author();
}


if(isset($_GET['store_coupons']))
{
	all_coupons($_GET['store_coupons']);
}

if(isset($_GET['delete_season']))
{
 delete_season($_GET['delete_season']);
}


if(isset($_POST['roles']))
{
	$con=db_connect();
	$insert="INSERT INTO `user_role`(`userid`, 
	`add_user`,
	`edit_user`, 
	`add_network`,
	`edit_network`,
	`add_categories`,
	`edit_categories`,
	`add_stores`,
	`edit_stores`,
	`add_coupons`,
	`edit_coupons`,
	`add_deals`,
	`edit_deals`,
	`add_blog`,
	`edit_blog`,
	`settings`) 
	VALUES (
	'".$_POST['userid']."',
	'".$_POST['add_user'][0]."',
	'".$_POST['edit_user'][0]."',
	'".$_POST['add_network'][0]."',
	'".$_POST['edit_network'][0]."',
	'".$_POST['add_category'][0]."',
	'".$_POST['edit_category'][0]."',
	'".$_POST['add_stores'][0]."',
	'".$_POST['edit_stores'][0]."',
	'".$_POST['add_coupons'][0]."',
	'".$_POST['edit_coupons'][0]."',
	'".$_POST['add_deals'][0]."',
	'".$_POST['edit_deals'][0]."',
	'".$_POST['add_blog'][0]."',
	'".$_POST['edit_blog'][0]."',
	'".$_POST['settings'][0]."')";
	
	
	mysqli_query($con,$insert);
	echo "<h1>Roles Assigned</h1>";
     	
	
}





//Add Season
if(isset($_POST['season']))
{
 $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
 $path = '../../images/season/'; // upload directory	
	
 $img = $_FILES['seasonImg']['name'];
 $tmp = $_FILES['seasonImg']['tmp_name'];
  
 // get uploaded file's extension
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
 // can upload same image using rand function
 
 
 // check's valid format
 if(in_array($ext, $valid_extensions)) 
 {     

  $path = $path.$img;
  if(move_uploaded_file($tmp,$path)) 
  {
		  $slug=str_replace(' ','-',$_POST['seasonSlug']);
		  $insert="insert into season(`name`,`meta_title`,`meta_desc`,`start_date`,`end_date`,`img`,`short_desc`,`slug`) 
		  values(
		  '".$_POST['season_name']."',
		  '".$_POST['meta_title']."',
		  '".$_POST['meta_desc']."',
		  '".$_POST['season_start']."',
		  '".$_POST['season_end']."',
		  '".$img."',
		  '".$_POST['short_desc']."',
		  '".$slug."')";
		  $con=db_connect();
		  mysqli_query($con,$insert);
		  echo '<h1>Created Successfully</h1>';
  }
 } 
 else 
 {
  echo 'invalid file';
 }
 
	
}
//Edit Season
if(isset($_POST['editSeason']))
{
		$slug=str_replace(' ','-',$_POST['seasonSlug']);
		  $update="update  season set 
		  `name`='".$_POST['season_name']."',
		  `slug`='".$slug."',
		  `meta_title`='".$_POST['meta_title']."',
		  `meta_desc`='".$_POST['meta_desc']."',
		  `start_date`='".$_POST['season_start']."',
		  `end_date`='".$_POST['season_end']."',
		  `short_desc`='".$_POST['short_desc']."'
		  where id='".$_POST['editSeason']."'
		  ";
		  $con=db_connect();
		  mysqli_query($con,$update);
		 echo 'Update Success';

	
}
if(isset($_POST['slider1']))
{
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
$path = '../../images/slider/'; // upload directory	
	
 $img = $_FILES['slider1_image']['name'];
 $tmp = $_FILES['slider1_image']['tmp_name'];
  
 // get uploaded file's extension
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
 // can upload same image using rand function
 
 
 // check's valid format
 if(in_array($ext, $valid_extensions)) 
 {     
  $path = $path.$img;

 $insert="update tblslider set img='".$img."',link='".$_POST['slider1_link']."',store='".$_POST['slider1_store']."' where id='1'";
  $con=db_connect();
  mysqli_query($con,$insert);
  if(move_uploaded_file($tmp,$path)) 
  {
	    echo '<button type="button" class="close" onclick="Custombox.close();">
			        <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Blog Status</h4>
			    <div class="custom-modal-text">
				<center><img src="'.constant_url.'images/slider/'.$img.'" width="60vw" height="60vh"></center>
				<h3>Slider 1 Save Successfully</h3>
				</div>';
  }
 } 
 else 
 {
  echo 'invalid file';
 }
}


if(isset($_POST['slider2']))
{
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
$path = '../../images/slider/'; // upload directory	
	
 $img = $_FILES['slider2_image']['name'];
 $tmp = $_FILES['slider2_image']['tmp_name'];
  
 // get uploaded file's extension
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
 // can upload same image using rand function
 
 
 // check's valid format
 if(in_array($ext, $valid_extensions)) 
 {     
  $path = $path.$img;
  $update="update tblslider set img='".$img."',link='".$_POST['slider2_link']."',store='".$_POST['slider2_store']."' where id='2'";
  $con=db_connect();
  mysqli_query($con,$update);
  if(move_uploaded_file($tmp,$path)) 
  {
	    echo '<button type="button" class="close" onclick="Custombox.close();">
			        <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Blog Status</h4>
			    <div class="custom-modal-text">
				<center><img src="'.constant_url.'images/slider/'.$img.'" width="60vw" height="60vh"></center>
				<h3>Slider 2 Save Successfully</h3>
				</div>';
  }
 } 
 else 
 {
  echo 'invalid file';
 }
}


if(isset($_POST['slider3']))
{
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
$path = '../../images/slider/'; // upload directory	
	
 $img = $_FILES['slider3_image']['name'];
 $tmp = $_FILES['slider3_image']['tmp_name'];
  
 // get uploaded file's extension
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
 // can upload same image using rand function
 
 
 // check's valid format
 if(in_array($ext, $valid_extensions)) 
 {     
  $path = $path.$img;
  $update="update tblslider set img='".$img."',link='".$_POST['slider3_link']."',store='".$_POST['slider3_store']."' where id='3'";
  $con=db_connect();
  mysqli_query($con,$update);
  if(move_uploaded_file($tmp,$path)) 
  {
	    echo '<button type="button" class="close" onclick="Custombox.close();">
			        <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Blog Status</h4>
			    <div class="custom-modal-text">
				<center><img src="'.constant_url.'images/slider/'.$img.'" width="60vw" height="60vh"></center>
				<h3>Slider 1 Save Successfully</h3>
				</div>';
  }
 } 
 else 
 {
  echo 'invalid file';
 }
}


if(isset($_POST['slider40']))
{
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
$path = '../../images/slider/'; // upload directory	
	
 $img = $_FILES['slider40_image']['name'];
 $tmp = $_FILES['slider40_image']['tmp_name'];
  
 // get uploaded file's extension
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
 // can upload same image using rand function
 
 
 // check's valid format
 if(in_array($ext, $valid_extensions)) 
 {     
  $path = $path.$img;
  $update="update tblslider set img='".$img."',link='".$_POST['slider40_link']."',store='".$_POST['slider40_store']."' where id='4'";
  $con=db_connect();
  mysqli_query($con,$update);
  if(move_uploaded_file($tmp,$path)) 
  {
	    echo '<button type="button" class="close" onclick="Custombox.close();">
			        <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Blog Status</h4>
			    <div class="custom-modal-text">
				<center><img src="'.constant_url.'images/slider/'.$img.'" width="60vw" height="60vh"></center>
				<h3>Slider 2 Save Successfully</h3>
				</div>';
  }
 } 
 else 
 {
  echo 'invalid file';
 }
}

if(isset($_POST['slider50']))
{
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
$path = '../../images/slider/'; // upload directory	
	
 $img = $_FILES['slider50_image']['name'];
 $tmp = $_FILES['slider50_image']['tmp_name'];
  
 // get uploaded file's extension
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
 // can upload same image using rand function
 
 
 // check's valid format
 if(in_array($ext, $valid_extensions)) 
 {     
  $path = $path.$img;
  $update="update tblslider set img='".$img."',link='".$_POST['slider50_link']."',store='".$_POST['slider50_store']."' where id='5'";
  $con=db_connect();
  mysqli_query($con,$update);
  if(move_uploaded_file($tmp,$path)) 
  {
	    echo '<button type="button" class="close" onclick="Custombox.close();">
			        <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Blog Status</h4>
			    <div class="custom-modal-text">
				<center><img src="'.constant_url.'images/slider/'.$img.'" width="60vw" height="60vh"></center>
				<h3>Slider 3 Save Successfully</h3>
				</div>';
  }
 } 
 else 
 {
  echo 'invalid file';
 }
}



if(isset($_GET['edit_faqs']))
{
  edit_faqs_1($_GET['edit_faqs']);
  
}


if(isset($_GET['update_faqs']))
{
    
  update_faqs($_GET['update_faqs'],$_GET['name'],$_GET['pass']);
  

  
}



if(isset($_GET['faqs_id']))
{
    
  $select = "DELETE FROM `tblstore_faqs` where id='".$_GET['faqs_id']."'";
  
  $result = mysqli_query($connection,$select);
    
  echo all_faqs();
  
  
}



if(isset($_POST['get_faqsform']))
{

add_faqs();

}



///////////////////////////////////////////////Add User

if(isset($_GET['acc_name']))
{

	create_user($_GET['acc_name'],$_GET['pass'],$_GET['acctype'],$_GET['network']);
	
}

///////////////////////////////////////////////User Delete
if(isset($_GET['user_id']))
{
		
	$select = "DELETE FROM tbluser where id='".$_GET['user_id']."'";
	
	$result = mysqli_query($connection,$select);
		
	echo all_users();
	
	
}
///////////////////////////////////////////////Get All Users
if(isset($_GET['get_all_users']))
{
	echo all_users();
}	



/////////////////////////////////////////////// Get Total Users
if(isset($_GET['total_users']))
{
	echo total_users();
}

/////////////////////////////////////////////// Get Total Networks
if(isset($_GET['total_network']))
{
	echo total_network();
}

/////////////////////////////////////////////// Enable/Disable User
if(isset($_GET['uid']))
{
    
	update_status($_GET['uid']);
	
}

///////////////////////////////////////////////Update User
if(isset($_GET['update_user']))
{
    
	update_user($_GET['update_user'],$_GET['name'],$_GET['pass'],$_GET['network'],$_GET['type']);
	

	
}
///////////////////////////////////////////////Edit User
if(isset($_GET['edit_user']))
{
	edit_user($_GET['edit_user']);
	
}
///////////////////////////////////////////////Add Network
if(isset($_GET['add_network']))
{
	addNetwork($_GET['add_network'],$_GET['user']);
}
///////////////////////////////////////////////Get All Networks
if(isset($_GET['get_all_networks']))
{
	all_network();
	
}


if(isset($_GET['delete_subscriber']))
{
  delete_subscriber($_GET['delete_subscriber']);
} 




///////////////////////////////////////////////Add Category
if(isset($_POST['add_cat']))
{
    
    if($_POST['type_radio'] == '0'){ 
        
        add_parent_category(); 
    }
    else if($_POST['type_radio'] == '1'){ 
        
        add_category($_POST['cat_name'],$_POST['cat_slug'],$_POST['cat_desc'],$_POST['cat_title'],$_POST['cat_meta_desc'],date('d-m-Y'),$_POST['parent']);
    } 
    else{}
     
	
}

///////////////////////////////////////////////Add Blog Category
if(isset($_POST['add_blog_cat']))
{
	$bc_name=$_POST['cat_name_blog'];
	$bc_slug=$_POST['cat_slug_blog'];
	$bc_desc=$_POST['cat_desc_blog'];
	$bc_icon=$_POST['icon_blog'];
	$bc_title=$_POST['cat_title_blog'];
	$bc_meta_desc=$_POST['cat_meta_desc_blog'];
	$bc_meta_key=$_POST['cat_meta_key'];
	
	add_category_blog($bc_name,$bc_slug,$bc_desc,$bc_icon,$bc_title,$bc_meta_desc,$bc_meta_key);
	
	
}
///////////////////////////////////////////////Update Blog Category

if(isset($_POST['upd_cat_blog']))
	{
		$up_name_cat_b=$_POST['upd_cat_name_b'];
		$up_slug_cat_b=$_POST['upd_cat_slug_b'];
		$up_catdesc_cat_b=$_POST['upd_cat_desc_b'];
		$up_icon_cat_b=$_POST['upd_icon_b'];
		$up_title_cat_b=$_POST['upd_cat_title_b'];
		$up_metadesc_cat_b=$_POST['upd_cat_meta_desc_b'];
		$up_name_key_b=$_POST['upd_cat_meta_key_b'];
		$up_cat_b=$_POST['upd_cat_blog'];
		//update_category_blog($name,$slug,$des,$meta,$meta_desc,$date,$icon,$id);
		update_category_blog($up_name_cat_b,$up_slug_cat_b,$up_catdesc_cat_b,$up_icon_cat_b,$up_title_cat_b,$up_metadesc_cat_b,$up_name_key_b,$up_cat_b);
	
	}





///////////////////////////////////////////////Edit Category
if(isset($_GET['edit_category']))
{
	
	edit_category($_GET['edit_category']);
}
///////////////////////////////////////////////Update Category
if(isset($_POST['upd_cat']))
	{
		//update_category($name,$slug,$des,$meta,$meta_desc,$date,$icon,$id);
		update_category($_POST['upd_cat_name'],$_POST['upd_cat_slug'],$_POST['upd_cat_desc'],$_POST['upd_cat_title'],$_POST['upd_cat_meta_desc'],$_POST['upd_cat']);
	
	}
	
///////////////////////////////////////////////Delete Category
if(isset($_GET['delete_category']))
	{
		delete_category($_GET['delete_category']);
		
		
		
	}


	
	
/////////////////////////////////Delete Season
if(isset($_GET['delete_season']))
	{
		delete_season($_GET['delete_season']);
		
		
		
	}
	
	
///////////////////////////////////////////////Add store

if(isset($_FILES['store_image']))
{
$slug=str_replace(" ","-",$_POST['store_name']);	
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
$path = '../../images/stores/'; // upload directory	
	
 $img = $_FILES['store_image']['name'];
 $tmp = $_FILES['store_image']['tmp_name'];
  
 // get uploaded file's extension
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

 
 // check's valid format
 if(in_array($ext, $valid_extensions)) 
 {     
  $path = $path.strtolower($img);
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
 

 
 $connection = db_connect();
  $insert="INSERT INTO `tblstores`
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
 ('".str_replace("'","`",$_POST['store_name'])."',
 '".str_replace("'","`",$_POST['store_long_description'])."',
 '".$_POST['store_slug']."',
 '".$_POST['store_tracking_url']."',
 '".$_POST['direct_url']."',
 '".str_replace("'","",$_POST['meta_title'])."',
 '".str_replace("'","",$_POST['meta_desc'])."',
 '".str_replace("'","",$_POST['meta_key'])."',
 '".$_POST['meta_date']."',
 '".strtolower($img)."',
 '".$_POST['image_alt']."',
 '".$_POST['banner_image']."',
 '".implode(",",$_POST['store_category'])."',
 '".$_POST['username']."',
 '1',
 '".str_replace("'","",$_POST['store_heading'])."',
 '".$_POST['store_short_description']."',
 '".date('F y j')."',
 '".$_POST['top']."',
 '".$_POST['for_sitemap']."',
 '100',
'".$_POST['facebook']."',
'".$_POST['pinterest']."',
'".$_POST['twitter']."',
'".$_POST['instagram']."',
'".$_POST['youtube']."',
'".$_POST['google_plus']."',
'".$_POST['android']."',
'".$_POST['ios']."')";
 
     if(mysqli_query($connection,$insert)){ 
         if(move_uploaded_file($tmp,$path)) 
          {
        	echo '<button type="button" class="close" onclick="Custombox.close();">
        			        <span>&times;</span><span class="sr-only">Close</span>
        			    </button>
        			    <h4 class="custom-modal-title">Store Status</h4>
        			    <div class="custom-modal-text">
        				<h3>'.$_POST['store_name'].' added successfully</h3>
        				</div>';
          }
          else 
         {
          echo 'Error';
         }
     }
     else 
     {
      echo 'Error';
     }
   
  
 } 
 else 
 {
  echo 'invalid file';
 }
 
}


if(isset($_FILES['product_image']))
{
$slug=str_replace(" ","-",$_POST['product_slug']);	
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
$path = '../../images/products/'; // upload directory	
	
 $img = $_FILES['product_image']['name'];
 $tmp = $_FILES['product_image']['tmp_name'];
  
 // get uploaded file's extension
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

 
 // check's valid format
 if(in_array($ext, $valid_extensions)) 
 {     
  $path = $path.strtolower($img);
  if(empty($_POST['top']))
 {
	 $_POST['top']=0;
 }
 
  if(empty($_POST['choice']))
 {
	 $_POST['choice']=0;
 }
 
 $connection = db_connect();
 $insert="INSERT INTO `tblproducts`
 (`name`,
 `price`, 
 `product_url`, 
 `discount`, 
 `direct_url`, 
 `meta`, 
 `meta_des`,
 `img`, 
 `img_alt`,
 `Category`,
 `enterby`, 
 `status`,
 `short_desc`,
 `expiry_date`,
 `top`,
 `views`,
 `editor_choice`,
 `tags`,
 `store`,
 `tracking_url`,
 `original_price`) 
 VALUES 
 ('".$_POST['product_name']."',
 '".$_POST['product_price']."',
 '".str_replace("'","",$slug)."',
 '".$_POST['product_discount']."',
 '".$_POST['direct_url']."',
 '".str_replace("'","",$_POST['meta_title'])."',
 '".str_replace("'","",$_POST['meta_desc'])."',
 '".$img."',
 '".$_POST['image_alt']."',
 '".implode(",",$_POST['product_category'])."',
 '".$_POST['username']."',
 '1',
 '".$_POST['product_short_description']."',
 '".$_POST['product_expiry_date']."',
 '".$_POST['top']."',
 '100',
  '".$_POST['choice']."',
 '".$_POST['product_tags']."',
 '".$_POST['store']."',
 '".$_POST['product_tracking_url']."',
 '".$_POST['original_price']."')";
 
 mysqli_query($connection,$insert);


 if(move_uploaded_file($tmp,$path)) 
  {
	echo '<button type="button" class="close" onclick="Custombox.close();">
			        <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Product Status</h4>
			    <div class="custom-modal-text">
				<h3>'.$insert.'</h3>
				</div>';
  }
   
  
 } 
 else 
 {
  echo 'invalid file';
 }
 
 
 
 
}












///////////////////////////////////////////////Delete Store
if(isset($_GET['delete_store']))
{
	delete_store($_GET['delete_store']);
	
}
if(isset($_GET['delete_store_new']))
{
	delete_store_new($_GET['delete_store_new']);
	
}

///////////////////////////////////////////////Edit Store
if(isset($_POST['store_id']))
{
		edit_store($_POST['store_id']);
}



///////////////////////////////////////////Add Blog Post
if(isset($_FILES['b_image']))
{
	// echo "<pre>",var_dump($_POST);
	// exit();
$slug=str_replace(" ","-",$_POST['b_slug']);	
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
$path = '../../images/blog/'; // upload directory	
	
 $img = $_FILES['b_image']['name'];
 $tmp = $_FILES['b_image']['tmp_name'];
  
 // get uploaded file's extension
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
 // can upload same image using rand function
 
 
 // check's valid format
 if(in_array($ext, $valid_extensions)) 
 {     
  $path = $path.$img;  
 } 
 else 
 {
  echo 'invalid file';
 }
 
 
 if(empty($_POST['b_feature']))
 {
	 $_POST['b_feature']=0;
	 
 }
 
 $connection = db_connect();
 
 $meta_key="Null";
 if($_POST['is_draft'] == NULL){
	
  $insert="INSERT INTO `tblblogpost`
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

}else{


   $insert="INSERT INTO `tblblogpost_draft`
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
 }
 if(move_uploaded_file($tmp,$path)) 
  {
        if( mysqli_query($connection,$insert)){
        

	            echo '<button type="button" class="close" onclick="Custombox.close();">
			        <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Blog Status</h4>
			    <div class="custom-modal-text">
				<h3>'.$_POST['b_title'].' added successfully</h3>
				<p><a href="https://www.cartincoupon.com/blog/'.$slug.'" target="_blank">Visit Store</a></p></div>';
        }
        else{
            
            mysqli_error($connection);
        }
      
  }
 

 
 
 
}


///////////////////////////////////////////////Save Home Page Settings
if(isset($_POST['home_meta_title']))
{
	add_home_settings($_POST['home_meta_title'],$_POST['meta_desc'],$_POST['webmaster'],$_POST['analytics'],$_POST['fb'],$_POST['gp'],$_POST['tw'],
	$_POST['pin'],$_POST['in'],$_POST['su']);
}

///////////////////////////////////////////////Save Category Page Settings
if(isset($_POST['category_meta_title']))
{
	add_category_settings($_POST['category_meta_title'],$_POST['meta_desc']);
}

///////////////////////////////////////////////Save Store Page Settings
if(isset($_POST['store_meta_title']))
{
	add_store_settings($_POST['store_meta_title'],$_POST['meta_desc']);
}
///////////////////////////////////////////////Save Blog Page Settings
if(isset($_POST['blog_meta_title']))
{
	add_blog_settings($_POST['blog_meta_title'],$_POST['meta_desc']);
}


///////////////////////////////////////////////Save Product Page Settings
if(isset($_POST['product_meta_title']))
{
	add_product_settings($_POST['product_meta_title'],$_POST['product_meta_desc']);
}


////////////////////////////////////////////////Retrieve Home Settings
if(isset($_GET['home_settings']))
{
	retrieve_home_settings();
		
}
////////////////////////////////////////////////Retrieve Category Settings
if(isset($_GET['category_settings']))
{
	retrieve_category_settings();
}
////////////////////////////////////////////////Retrieve Store Settings
if(isset($_GET['store_settings']))
{
	retrieve_store_settings();
}
////////////////////////////////////////////////Retrieve Store Settings
if(isset($_GET['blog_settings']))
{
	retrieve_blog_settings();
}
///////////////////////////////////////////////Add Coupon
if(isset($_POST['offer']))
{
	add_coupon();
}
///////////////////////////////////////////////Delete Coupon
if(isset($_GET['delete_coupon']))
{
	delete_coupon($_GET['delete_coupon'],$_GET['delStore']);
	
}
//////////////////////////////////////////////Edit Coupon
if(isset($_GET['edit_coupon']))
{
	edit_coupon($_GET['edit_coupon']);
}
///////////////////////////////////////////////Update Coupon
if(isset($_POST['coupon_id']))
{
	update_coupon($_POST['coupon_id']);
	
}


///////////////////////////////////////////////Delete Review
if(isset($_GET['delete_review']))
{
  delete_review($_GET['delete_review']);
}


///////////////////////////////////////////////Delete Blog
if (isset($_GET['delete_blog'])) {
    $id = intval($_GET['delete_blog']); // Convert to integer for safety
  
    delete_blog_ajax_draft($id); // Your function
}
///////////////////////////////////////////////Edit blog
if(isset($_POST['blog_id'])  && $_POST['draft_blog'] == NULL)
{
		edit_blog($_POST['blog_id']);
}

if ($_POST['draft_blog'] != '') {
	edit_blog_draft($_POST['blog_id']);
}

if ($_POST['draft_review'] != '') {
	$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
     $path = '../../images/review/'; // upload directory  

     $r_img = $_FILES['review_image']['name'];
     $r_tmp = $_FILES['review_image']['tmp_name'];

     // get uploaded file's extension
     $ext = strtolower(pathinfo($r_img, PATHINFO_EXTENSION));

     // can upload same image using rand function

     if(!empty($r_img))
     {
        // check's valid format
         if(in_array($ext, $valid_extensions)) 
         {     
    
          $path = $path.$r_img;
          if(move_uploaded_file($r_tmp,$path)) 
          {
               
             if($_POST['is_draft'] == NULL){
 				$update='INSERT INTO `review`
					 (`product`,`slug`, `store_id`, `short_desc`,`long_desc`, `img`, `img_alt`, `country`, `meta_title`, `meta_desc`, `date`, `views`, `featured`,`product_review`,`editor_choice`, `timestamp`)
					 VALUES 
					 ("'.$_POST['r_product'].'","'.$_POST['r_slug'].'",
					 "'.$_POST['r_store'].'",
					 "'.str_replace('"',"'",$_POST['r_short_description']).'",
					 "'.str_replace('"',"'",$_POST['r_description']).'",
					 "'.$r_img.'",
					 "'.$_POST['img_alt'].'", 
					 "'.$_POST['country'].'",
					 "'.str_replace("`","'",$_POST['r_meta_title']).'",
					 "'.$_POST['r_meta_desc'].'", 
					 "'.$_POST['date'].'",
					 "100",
					 "'.$_POST['r_feature'].'",
					 "'.$_POST['product_review'].'",
					 "'.$_POST['editor_choice'].'",
					 "'.date('d-m-Y').'"
					 )';
					 delete_review_draft_ajax($_POST['review_id']);
             } else{
             	 
					  $update='update review_draft set
              `product`="'.$_POST['r_product'].'",
              `store_id`="'.$_POST['r_store'].'", 
              `slug`="'.$_POST['r_slug'].'", 
              `short_desc`="'.str_replace('"',"'",$_POST['r_short_description']).'",
              `long_desc`="'.str_replace('"',"'",$_POST['r_description']).'",
              `img`="'.$r_img.'",
              `img_alt`="'.$_POST['img_alt'].'", 
              `meta_title`="'.$_POST['r_meta_title'].'",
              `meta_desc`="'.$_POST['r_meta_desc'].'", 
              `date`="'.$_POST['date'].'",  
              `featured`="'.$_POST['r_feature'][0].'" ,
              `product_review`="'.$_POST['product_review'][0].'",
              `editor_choice`="'.$_POST['editor_choice'][0].'" 
              where id="'.$_POST['review_id'].'"
              ';
             }
            

              $con=db_connect();
              mysqli_query($con,$update);
              echo "<h1>Updated Successfully</h1>";
    
    
    
    
          }
         } 
         else 
         {
          echo "Invalid File";
         }

     }

      else
      {
      	if($_POST['is_draft'] == NULL){
 				$update='INSERT INTO `review`
					 (`product`,`slug`, `store_id`, `short_desc`,`long_desc`, `img`, `img_alt`, `country`, `meta_title`, `meta_desc`, `date`, `views`, `featured`,`product_review`,`editor_choice`, `timestamp`)
					 VALUES 
					 ("'.$_POST['r_product'].'","'.$_POST['r_slug'].'",
					 "'.$_POST['r_store'].'",
					 "'.str_replace('"',"'",$_POST['r_short_description']).'",
					 "'.str_replace('"',"'",$_POST['r_description']).'",
					 "'.$_POST['img'].'",
					 "'.$_POST['img_alt'].'", 
					 "'.$_POST['country'].'",
					 "'.str_replace("`","'",$_POST['r_meta_title']).'",
					 "'.$_POST['r_meta_desc'].'", 
					 "'.$_POST['date'].'",
					 "100",
					 "'.$_POST['r_feature'].'",
					 "'.$_POST['product_review'].'",
					 "'.$_POST['editor_choice'].'",
					 "'.date('d-m-Y').'"
					 )';
					 delete_review_draft_ajax($_POST['review_id']);

             } else{
             	 $update='update review_draft set
          `product`="'.$_POST['r_product'].'",
          `store_id`="'.$_POST['r_store'].'", 
          `slug`="'.$_POST['r_slug'].'", 
          `short_desc`="'.str_replace('"',"'",$_POST['r_short_description']).'",
          `long_desc`="'.str_replace('"',"'",$_POST['r_description']).'", 
          `img_alt`="'.$_POST['img_alt'].'", 
          `meta_title`="'.$_POST['r_meta_title'].'",
          `meta_desc`="'.$_POST['r_meta_desc'].'", 
          `date`="'.$_POST['date'].'",  
          `featured`="'.$_POST['r_feature'][0].'" ,
              `product_review`="'.$_POST['product_review'][0].'",
              `editor_choice`="'.$_POST['editor_choice'][0].'" 


          where id="'.$_POST['review_id'].'"
          ';
             }
        
          $con=db_connect();
          mysqli_query($con,$update);
          echo "<h1>Updated Successfully</h1>";
      }
}

///////////////////////////////////////////////Edit Review
if(isset($_POST['review_id']) && $_POST['draft_review'] == NULL)
{
	
     $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
     $path = '../../images/review/'; // upload directory  

     $r_img = $_FILES['review_image']['name'];
     $r_tmp = $_FILES['review_image']['tmp_name'];

     // get uploaded file's extension
     $ext = strtolower(pathinfo($r_img, PATHINFO_EXTENSION));

     // can upload same image using rand function

     if(!empty($r_img))
     {
        // check's valid format
         if(in_array($ext, $valid_extensions)) 
         {     
    
          $path = $path.$r_img;
          if(move_uploaded_file($r_tmp,$path)) 
          {
               

          	if($_POST['is_draft'] == 1){
				  $update='INSERT INTO `review_draft`
			 (`product`,`slug`, `store_id`, `short_desc`,`long_desc`, `img`, `img_alt`, `country`, `meta_title`, `meta_desc`, `date`, `views`, `featured`,`product_review`,`editor_choice`, `timestamp`)
			 VALUES 
			 ("'.$_POST['r_product'].'","'.$_POST['r_slug'].'",
			 "'.$_POST['r_store'].'",
			 "'.str_replace('"',"'",$_POST['r_short_description']).'",
			 "'.str_replace('"',"'",$_POST['r_description']).'",
			 "'.$r_img.'",
			 "'.$_POST['img_alt'].'", 
			 "'.$_POST['country'].'",
			 "'.str_replace("`","'",$_POST['r_meta_title']).'",
			 "'.$_POST['r_meta_desc'].'", 
			 "'.$_POST['date'].'",
			 "100",
			 "'.$_POST['r_feature'].'",
			 "'.$_POST['product_review'].'",
			 "'.$_POST['editor_choice'].'",
			 "'.date('d-m-Y').'"
			 )';
			 delete_review_ajax($_POST['review_id']);
			 
			}else{
				 $update='update review set
              `product`="'.$_POST['r_product'].'",
              `store_id`="'.$_POST['r_store'].'", 
              `slug`="'.$_POST['r_slug'].'", 
              `short_desc`="'.str_replace('"',"'",$_POST['r_short_description']).'",
              `long_desc`="'.str_replace('"',"'",$_POST['r_description']).'",
              `img`="'.$r_img.'",
              `img_alt`="'.$_POST['img_alt'].'", 
              `meta_title`="'.$_POST['r_meta_title'].'",
              `meta_desc`="'.$_POST['r_meta_desc'].'", 
              `date`="'.$_POST['date'].'",  
              `featured`="'.$_POST['r_feature'][0].'" ,
              `product_review`="'.$_POST['product_review'][0].'",
              `editor_choice`="'.$_POST['editor_choice'][0].'" 
              where id="'.$_POST['review_id'].'"
              ';

			}

            
              $con=db_connect();
              mysqli_query($con,$update);
              echo "<h1>Updated Successfully</h1>";
    
    
    
    
          }
         } 
         else 
         {
          echo "Invalid File";
         }

     }

      else
      {
      	if($_POST['is_draft'] == 1){
				  $update='INSERT INTO `review_draft`
			 (`product`,`slug`, `store_id`, `short_desc`,`long_desc`, `img`, `img_alt`, `country`, `meta_title`, `meta_desc`, `date`, `views`, `featured`,`product_review`,`editor_choice`, `timestamp`)
			 VALUES 
			 ("'.$_POST['r_product'].'","'.$_POST['r_slug'].'",
			 "'.$_POST['r_store'].'",
			 "'.str_replace('"',"'",$_POST['r_short_description']).'",
			 "'.str_replace('"',"'",$_POST['r_description']).'",
			 "'.$_POST['old_img'].'",
			 "'.$_POST['img_alt'].'", 
			 "'.$_POST['country'].'",
			 "'.str_replace("`","'",$_POST['r_meta_title']).'",
			 "'.$_POST['r_meta_desc'].'", 
			 "'.$_POST['date'].'",
			 "100",
			 "'.$_POST['r_feature'].'",
			 "'.$_POST['product_review'].'",
			 "'.$_POST['editor_choice'].'",
			 "'.date('d-m-Y').'"
			 )';
			 delete_review_ajax($_POST['review_id']);
			 

			}else{
				 $update='update review set
          `product`="'.$_POST['r_product'].'",
          `store_id`="'.$_POST['r_store'].'", 
          `slug`="'.$_POST['r_slug'].'", 
          `short_desc`="'.str_replace('"',"'",$_POST['r_short_description']).'",
          `long_desc`="'.str_replace('"',"'",$_POST['r_description']).'", 
          `img_alt`="'.$_POST['img_alt'].'", 
          `meta_title`="'.$_POST['r_meta_title'].'",
          `meta_desc`="'.$_POST['r_meta_desc'].'", 
          `date`="'.$_POST['date'].'",  
          `featured`="'.$_POST['r_feature'][0].'" ,
              `product_review`="'.$_POST['product_review'][0].'",
              `editor_choice`="'.$_POST['editor_choice'][0].'" 


          where id="'.$_POST['review_id'].'"
          ';
			}
        
          $con=db_connect();
          mysqli_query($con,$update);
          echo "<h1>Updated Successfully</h1>";
      }
}




if(isset($_FILES['media_image']))
{	
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
$path = '../../images/'.$_POST['location'].'/'; // upload directory	
	
 $img = $_FILES['media_image']['name'];
 $tmp = $_FILES['media_image']['tmp_name'];
  
 // get uploaded file's extension
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
 // can upload same image using rand function
 
 
 // check's valid format
 if(in_array($ext, $valid_extensions)) 
 {     
  $path = $path.$img;
  
  $insert="insert into media(`url`,`location`) values('".constant_url.$_POST['location'].'/'.$img."','".$_POST['location']."')";
  $con=db_connect();
  mysqli_query($con,$insert);
   
  if(move_uploaded_file($tmp,$path)) 
  {
	echo '<button type="button" class="close" onclick="Custombox.close();">
			        <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Blog Status</h4>
			    <div class="custom-modal-text">
				<center><img src="'.constant_url.'images/'.$_POST['location'].'/'.$img.'" width="60vw" height="60vh"></center>
				<h3>Image Save Successfully</h3>
				<p><a href="#" target="_blank">Image Link: '.constant_url.'images/'.$_POST['location'].'/'.$img.'</a></p></div>';
  }
 } 
 else 
 {
  echo 'invalid file';
 }
 
 
}

//Add Season
if(isset($_POST['season']))
{
 $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
 $path = '../../images/season/'; // upload directory	
	
 $img = $_FILES['seasonImg']['name'];
 $tmp = $_FILES['seasonImg']['tmp_name'];
  
 // get uploaded file's extension
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
 // can upload same image using rand function
 
 
 // check's valid format
 if(in_array($ext, $valid_extensions)) 
 {     

  $path = $path.$img;
  if(move_uploaded_file($tmp,$path)) 
  {
		  $slug=str_replace(' ','-',$_POST['seasonSlug']);
		  $insert="insert into season(`name`,`meta_title`,`meta_desc`,`start_date`,`end_date`,`img`,`short_desc`,`slug`) 
		  values(
		  '".$_POST['season_name']."',
		  '".$_POST['meta_title']."',
		  '".$_POST['meta_desc']."',
		  '".$_POST['season_start']."',
		  '".$_POST['season_end']."',
		  '".$img."',
		  '".$_POST['short_desc']."',
		  '".$slug."')";
		  $con=db_connect();
		  mysqli_query($con,$insert);
		  echo '<h1>Created Successfully</h1>';
  }
 } 
 else 
 {
  echo 'invalid file';
 }
 
	
}
//Edit Season
if(isset($_POST['editSeason']))
{
		$slug=str_replace(' ','-',$_POST['seasonSlug']);
		  $update="update  season set 
		  `name`='".$_POST['season_name']."',
		  `slug`='".$slug."',
		  `meta_title`='".$_POST['meta_title']."',
		  `meta_desc`='".$_POST['meta_desc']."',
		  `start_date`='".$_POST['season_start']."',
		  `end_date`='".$_POST['season_end']."',
		  `short_desc`='".$_POST['short_desc']."'
		  where id='".$_POST['editSeason']."'
		  ";
		  $con=db_connect();
		  mysqli_query($con,$update);
		 echo 'Update Success';

	
}



?>