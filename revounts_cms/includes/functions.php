<?php
################# Fucntions start here ##########################
function isValidEmail($email){
	return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email);
}
######
function isValidURL($url){
	return preg_match('|^http(s)?://[a-z0-9-]+(\.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $url);
}
######
function queryString($string){
	if(gettype($string) == "string"){
		# Escapes special characters in a string for use in a SQL statement
		return mysql_real_escape_string(trim($string));
	}elseif(gettype($string) == "array"){
		$ary_to_return = array();
		foreach($string as $str){
			$ary_to_return[]=mysql_real_escape_string(trim($str));	}
		return $ary_to_return;
	}else{
		return trim($string);	}
}
#######
function d($array){
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}
########
function returnQuery($sql){
	$query = mysql_query($sql);
	if($query && (mysql_num_rows($query) > 0)){
		$data = array();
		while($row = mysql_fetch_assoc($query)){
			$data[] = $row;
			}	
		}else{ $data = false; }
	return $data;		
} 
###########
function runQuery($sql){
	$query = mysql_query($sql);
	if($query){
		$data = true;	
	}else{ 
		$data = false; }
	return $data;		
} 
###########
function allSettings(){
	$sql  = "SELECT * FROM tblsetting";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function updateSetting($logo, $banner, $fb, $twitter, $pin, $insta, $gplus, $stumbleupon, $meta_title, $meta_des, $meta_key, $analytic, $master,$category_meta_title, $category_meta_des, $category_meta_key, $deal_meta_title, $deal_meta_des, $deal_meta_key,$store_meta_title,  $store_meta_des, $store_meta_key, $blog_meta_title, $blog_meta_des, $blog_meta_key, $dynamic_meta_title, $dynamic_meta_des, $dynamic_meta_key ){
	$sql  = "UPDATE `tblsetting` SET `logo`='$logo',`banner`='$banner', `facebook`='$fb',`twitter`='$twitter',`pinterest`='$pin',`instagram`='$insta',`gplus`='$gplus',
`stumbleupon`='$stumbleupon',`google_analytics`='$analytic',`web_master`='$master',`meta_title`='$meta_title',`meta_des`='$meta_des',`meta_key`='$meta_key',
 `store_title`='$store_meta_title',`store_des`='$store_meta_des',`store_key`='$store_meta_key',`cat_title`='$category_meta_title',
`cat_des`='$category_meta_des',`cat_key`='$category_meta_key',`deal_title`='$deal_meta_title',`deal_des`='$deal_meta_des',`deal_key`='$deal_meta_key',
`blog_title`='$blog_meta_title',`blog_des`='$blog_meta_des',`blog_key`='$blog_meta_key',
`dynamic_title`='$dynamic_meta_title',`dynamic_des`='$dynamic_meta_des',`dynamic_key`='".$dynamic_meta_key."' WHERE `id`='1';";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function login($username, $pass){
	$sql  = "SELECT * FROM tbluser WHERE uname  ='$username' AND pwd = '$pass'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function findUser($name){
	$sql  = "SELECT uname FROM `tbluser` WHERE uname = '$name'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function delete($table, $id){
	$sql  = "DELETE FROM `$table` WHERE `id`='$id'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function delete2($table, $id){
	$sql  = "DELETE FROM `$table` WHERE `Id`='$id'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function reg($name, $password, $type, $network, $status){
	$sql  = "INSERT INTO `tbluser`(`id`,`uname`,`pwd`,`type`,`status`,`network`,`ad_store`,`ad_coupon`,`ad_cat`,`ad_slider`,`ad_net`,`ad_user`,`ad_ofr`,`sorting`,`t_store`,`t_coupon`,`t_cat`,`t_meta`,`t_slider`,`t_net`,`t_user`,`enterby`) VALUES ( NULL,'$name','$password','$type','$status','$network',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL); 
";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function old_password($username, $pass){
	$sql  = "SELECT id FROM tbl_user WHERE usr_name='$username' AND pass = '$pass'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}}	
#####
function allUsers(){
	$sql  = "SELECT tbluser.id, tbluser.uname, tbluser.pwd, tbluser.type, tblnetwork.Network, tbluser.status FROM `tbluser` INNER JOIN
`tblnetwork` ON tbluser.network = tblnetwork.id where tbluser.type = '2'
";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}}		
#####
function allUserById($id){
	$sql  = "SELECT * FROM `tbluser`  WHERE  tbluser.id = $id";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}}		
#####
function editUser($id, $name, $password, $network){
	$sql  = "UPDATE `tbluser` SET `uname`='$name',`pwd`='$password',`network`='$network' WHERE `id`='$id'; ";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}}
function check($id){
	$sql  = "SELECT `status` FROM `tbluser` WHERE id = '$id'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}}		
#####
function change($id){
	$sql  = "UPDATE `tbluser` SET `status`='0' WHERE `id`='$id';";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}}		
#####
function change2($id){
	$sql  = "UPDATE `tbluser` SET `status`='1' WHERE `id`='$id';";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}}		
#####
function change_password($pass, $id){
	$sql  = "UPDATE `tbl_user` SET `pass`='$pass' WHERE `id`='$id';";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}}
#####
function allNetworks(){
	$sql  = "select * from tblnetwork";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function findNetwork($name){
	$sql  = "SELECT * FROM `tblnetwork` WHERE Network = '$name'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function netwokById($id){
	$sql  = "SELECT * FROM `tblnetwork` WHERE id = '$id'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function addNetwork($name){
	$username = $_SESSION["username"];
	$sql  = "INSERT INTO `tblnetwork`(`id`,`Network`,`enterby`) VALUES ( NULL,'$name','$username'); ";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function editNetwork($id, $name){
	$sql  = "UPDATE `tblnetwork` SET `Network`='$name' WHERE `id`='$id'; ";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function allCategories(){
	$sql  = "select * from tblcategory";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function findCategory($name){
	$sql  = "SELECT * FROM `tblcategory` WHERE name = '$name'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function findCategoryById($id){
	$sql  = "SELECT * FROM `tblcategory` WHERE id = '$id'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function addCategory($name, $slug, $meta_title, $meta_description, $meta_keywords, $icon, $featured){
$date = date('Y-m-d h:i:s');
	$sql  = "INSERT INTO `tblcategory` (`id`, `name`, `slug`, `slidercat`, `Des`, `meta`, `meta_des`, `meta_key`, `Image`, `Slider`, `manurl`, `featured`, `featured_icon`, `update_date`, `icon`) VALUES
(NULL, '$name', '$slug', '$name', '$meta_description', '$meta_title', '$meta_description', '$meta_keywords', '', 'true', NULL, '$featured', NULL, '$date', '$icon')";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function editCategory($id, $name, $slug, $meta_title, $meta_description, $meta_keywords, $icon, $featured){
	$sql  = "UPDATE `tblcategory` SET `name`='$name', `slug`='$slug',`slidercat`='$name',`Des`='$meta_description',`meta`='$meta_title',
`meta_des`='$meta_description',`meta_key`='$meta_keywords',`icon`='$icon',`featured`='$featured' WHERE `id`='$id';";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function allCoupons(){
	$UserName =$_SESSION["username"];
		$UserType = $_SESSION["usertype"];
	if ($UserType == 2)
	{
	$sql  = "SELECT * FROM `tblcoupon` WHERE enterby = '$UserName' ORDER BY id DESC";
	}
	else
	{
	$sql  = "select * from tblcoupon order by id desc";
	}
	
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function findCoupons2($name){
	$UserName =$_SESSION["username"];
		$UserType = $_SESSION["usertype"];
	if ($UserType == 2)
	{
	$sql  = "SELECT * FROM `tblcoupon` WHERE `str` = '$name' AND enterby = '$UserName' ORDER BY recordlistingid ASC";
	}
	else
	{
	$sql  = "select * from tblcoupon WHERE `str` = '$name' ORDER BY recordlistingid ASC";
	}
	
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function findCoupons($name){
	$UserName =$_SESSION["username"];
		$UserType = $_SESSION["usertype"];
	if ($UserType == 2)
	{
	$sql  = "SELECT * FROM `tblcoupon` WHERE `str` = '$name' AND enterby = '$UserName' ORDER BY id DESC";
	}
	else
	{
	$sql  = "select * from tblcoupon WHERE `str` = '$name' order by id desc";
	}
	
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function findStoreName($name){
	$sql  = "SELECT id,`name` FROM `tblstores` WHERE `name` = '$name'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function findStoreSlug($url){
	$sql  = "SELECT id,`name` FROM `tblstores` WHERE `topfive_stores` = '$url'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function findStoreByID($id){
	$sql  = "SELECT `name` FROM `tblstores` WHERE `id` = '$id'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function findStoreByCatName($name, $category){
	$sql  = "SELECT id FROM `tblstorescat` WHERE `name` = '$name' AND Category = '$category'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function lastId($tablename){
	$sql  = "SELECT id FROM $tablename ORDER BY id DESC LIMIT 1";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
 
function addStore($storename, $url, $des, $category, $image, $alt, $turl, $surl, $mtitle, $mdes, $mkey, $cat, $fb, $pin, $featured, $auto_slug, $desc){
	$username = $_SESSION["username"];
	
	
	$sql  = "INSERT INTO `tblstores`(`id`,`name`,`des`,`url`,`des_url`,`store_url`,`meta`,`meta_des`,`meta_key`,`img`,`img_alt`,`network`,`Category`,`featured`,`top_stores`,`topfive_stores`,`dis_store`,`recordlistingid`,`enterby`,`rewo`,`likers`,`status`,`fb`,`pin`,`heading`,`desc`) 
	VALUES ( NULL,'$storename','$des','$turl','$turl','$surl','$mtitle','$mdes','$mkey','$image','$alt','network','$cat','$featured',NULL,'$url',NULL,NULL,'$username',NULL,NULL,'1','$fb','$pin','$auto_slug','$desc'); ";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = "error";
    }
	else{
	return $data;
	}	
	}
#####
function addCatStore($id, $storename, $url, $des, $row, $file, $alt, $turl, $surl, $mtitle, $mdes, $mkey, $cat){
	$username = $_SESSION["username"];
	
	
	$sql  = "INSERT INTO `pro`.`tblstorescat`(`id`,`name`,`des`,`url`,`des_url`,`store_url`,`meta`,`meta_des`,`meta_key`,`img`,`img_alt`,`network`,`Category`,`slider_store`,`top_stores`,`topfive_stores`,`dis_store`,`recordlistingid`,`enterby`) 
	VALUES ( '$id','$storename','$des','$turl','$turl',NULL,'$mtitle','$mdes','$mkey','$file','$alt','network','$cat',NULL,NULL,'$url',NULL,NULL,'$username'); 
";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = "error";
    }
	else{
	return $data;
	}	
	}
#####
function editStore($id, $storename, $url, $des, $cat, $image, $alt, $turl, $surl, $mtitle, $mdes, $mkey, $status, $featured, $fb, $pin, $auto_slug, $desc){
	$username = $_SESSION["username"];
	
	
	$sql  = "UPDATE `tblstores` SET `name`='$storename',`des`='$des',`url`='$turl',`des_url`='$turl',`store_url`='$surl',`meta`='$mtitle',`meta_des`='$mdes',`meta_key`='$mkey',`img`='$image',
	`img_alt`='$alt',`Category`='$cat',`featured`='$featured',`topfive_stores`='$url', `status`='$status',`fb`='$fb', `pin`='$pin',`heading`='$auto_slug', `desc`='$desc' WHERE `id`='$id'; 
";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = "error";
    }
	else{
	return $data;
	}	
	}
#####
function allDeals(){
	$sql  = "select * from tblpricebrand";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function findDeals($des){
	$sql  = "select * from tblpricebrand where Des = '$des'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function featuredCoupons(){
	$sql  = "SELECT * FROM tblcoupon WHERE featured = '1' ORDER BY recordlistingid";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function UpdateSortCoupons($id, $order){
	$sql  = "UPDATE `tblcoupon` SET `recordlistingid`='$order' WHERE `id`='$id';";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####	
function featuredDeals(){
	$sql  = "SELECT * FROM tblpricebrand WHERE featured = '1' ORDER BY sort_order";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function UpdateSortDeals($id, $order){
	$sql  = "UPDATE `tblpricebrand` SET `sort_order`='$order' WHERE `Id`='$id';";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function addDeal($des, $co, $ac, $expiry_date, $tracking_link, $image, $featured){
	$sql  = "INSERT INTO `tblpricebrand`(`Id`,`Des`,`coupon_code`,`chk_active`,`verify`,`Url`,`Image`,`Home`,`Pricepage`,`featured`,`update_date`,`sort_order`,`status`) VALUES ( NULL,'$des','$co','$ac','$expiry_date','$tracking_link','$image','true','true','$featured','2015-08-07 07:49:21',5,1); ";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function editDeal($id, $des, $co , $ac , $expiry_date, $tracking_link, $image, $featured, $status){
	$sql  = "UPDATE `tblpricebrand` SET `Des`='$des',`coupon_code`='$co',`chk_active`='$ac',`verify`='$expiry_date', `Url`='$tracking_link',`Image`='$image',`featured`='$featured', `status` = '$status' WHERE `Id`='$id';";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $sql;
	}
	}
#####
function findDealById($id){
	$sql  = "SELECT * FROM `tblpricebrand` WHERE Id = '$id'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function allStores(){
	$UserName =$_SESSION["username"];
		$UserType = $_SESSION["usertype"];
	if ($UserType == 2)
	{
	$sql  = "SELECT id, `name` FROM `tblstores` WHERE enterby = '$UserName' ORDER BY 'name'";
	}
	else
	{
	$sql  = "SELECT id, `name` FROM `tblstores` ORDER BY 'name' ";
	}
	
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function Stores(){
	$UserName =$_SESSION["username"];
		$UserType = $_SESSION["usertype"];
	if ($UserType == 2)
	{
	$sql  = "SELECT * FROM `tblstores` WHERE enterby = '$UserName' ORDER BY id DESC";
	}
	else
	{
	$sql  = "SELECT * FROM `tblstores` ORDER BY id desc";
	}
	
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function unsetMetaStores(){
	
	$sql  = "SELECT * FROM `tblstores` WHERE meta_des = '' OR  meta = '' OR  meta_key = '' ORDER BY id DESC";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function findStores($name){
	$UserName =$_SESSION["username"];
		$UserType = $_SESSION["usertype"];
	if ($UserType == 2)
	{
	$sql  = "SELECT * FROM `tblstores` WHERE `name` = '$name' AND enterby = '$UserName' ORDER BY id DESC";
	}
	else
	{
	$sql  = "SELECT * FROM `tblstores` WHERE `name` = '$name' ORDER BY id desc";
	}
	
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####

function addCoupon($name, $des, $tracking_link , $expiry_date, $store, $featured, $co, $ac){
$username = $_SESSION["username"];
	$sql  = "INSERT INTO `tblcoupon`(`id`,`name`,`offer`,`coupon_code`,`chk_active`,`chk_print`,`expdate`,`chk_never`,`des_url`,`category`,`str`,`str_img`,`featured`,`Deal`,`likes`,`used`,`recordlistingid`,`enterby`,`update_date`) 
VALUES ( NULL,'$name','$des','$co','$ac','COMMENTED','$expiry_date',NULL,'$tracking_link',NULL,'$store',NULL,'$featured',NULL,'0','0','1','$username',NULL);";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $sql;
	}
	}
#####
function editCoupon($id, $name, $des, $tracking_link , $expiry_date, $store, $featured, $co, $ac){
	$sql  = "UPDATE `tblcoupon` SET `name`='$name',`offer`='$des',`coupon_code`='$co',`chk_active`='$ac',`des_url`='$tracking_link',`str`='$store',`expdate`='$expiry_date',`featured`='$featured' WHERE `id`='$id'; 
";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function couponById($id){
	
	$sql  = "select * from  tblcoupon where id = '$id'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = "error";
    }
	else{
	return $data;
	}	
	}
#####
function addBlogCategory($name,$slug, $des, $mtitle, $mdes, $mkey,  $icon){
	
	
	
	$sql  = "INSERT INTO `tblblogcat`(`id`,`name`,`slug`,`des`, `icon` , meta_title, meta_des, meta_key) VALUES ( NULL,'$name','$slug','$des','$icon','$mtitle','$mdes','$mkey');";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = "error";
    }
	else{
	return $data;
	}	
	}
#####
function blogCategoryByName($name){
	$sql  = "SELECT `name` FROM `tblblogcat` WHERE NAME = '$name'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = "error";
    }
	else{
	return $data;
	}	
	}
#####
function allBlogCategories(){
	$sql  = "SELECT * FROM `tblblogcat` ";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = "error";
    }
	else{
	return $data;
	}	
	}
#####
function allBlogCategoryById($id){
	$sql  = "SELECT * FROM `tblblogcat` where id = '$id'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = "error";
    }
	else{
	return $data;
	}	
	}
#####
function editBlogCategory($id, $name,$slug, $des, $mtitle, $mdes, $mkey,  $icon){
	$sql  = "UPDATE `tblblogcat` SET `name`='$name',`slug`='$slug',`des`='$des',`meta_title`='$mtitle',`meta_des`='$mdes',`meta_key`='$mkey',`icon`='$icon' WHERE `id`='$id';";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = "error";
    }
	else{
	return $data;
	}	
	}
#####
function addBlogPost($name,$url,$des,$file,$alt,$mtitle,$mdes,$mkey,$cat,$store,$date, $featured,$name_your){
	$sql  = "INSERT INTO `tblblogpost`(`name`,`url`,`des`,`image`,`image_alt`,`meta_title`,`meta_des`,`meta_key`,`blog_cat`,`store`,`publish_date`,`status`,`featured`,`name_your`) 
VALUES ('$name','$url','$des','$file','$alt','$mtitle','$mdes','$mkey','$cat','$store','$date',1,'$featured','$name_your')";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = "error";
    }
	else{
	return $data;
	}	
	}
#####
function allBlogPosts(){
	$sql  = "SELECT * FROM `tblblogpost` order by id desc";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = "error";
    }
	else{
	return $data;
	}	
	}
#####
function getBlogPostById($id){
	$sql  = "SELECT * FROM `tblblogpost` where id = '$id'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = "error";
    }
	else{
	return $data;
	}	
	}
#####
function findPostSlug($url){
	$sql  = "SELECT id,`name` FROM `tblblogpost` WHERE `url` = '$url'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $data;
	}
	}
#####
function editBlogPost($id, $name,$url,$des,$file,$alt,$mtitle,$mdes,$mkey,$cat,$store,$date,$featured,$name_your){
	$sql  = "UPDATE `tblblogpost` SET `name`='$name',`url`='$url',`des`='$des',`image`='$file',`image_alt`='$alt',`meta_title`='$mtitle',`meta_des`='$mdes',`meta_key`='$mkey',`blog_cat`='$cat',`store`='$store',`publish_date`='$date',`featured`='$featured',`name_your`='$name_your' WHERE `id`='$id'; 
";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = 'error';
    }
	else{
	return $sql;
	}
	}
#####
function storeById($id){
	
	$sql  = "select * from  tblstores where id = '$id'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = "error";
    }
	else{
	return $data;
	}	
	}
#####
function storeCatById($id){
	
	$sql  = "select Category from  tblstorescat where id = '$id'";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = "error";
    }
	else{
	return $data;
	}	
	}
#####
//

function usersStatus(){
	
	$sql  = "SELECT `status` FROM `tbluser` WHERE `type` = 2 ORDER BY id LIMIT 1";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = "error";
    }
	else{
	return $data;
	}	
	}

// Enable

function usersEnable(){
	
	$sql  = "UPDATE `tbluser` SET `status` = 1 WHERE `type` = 2";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = "error";
    }
	else{
	return $data;
	}	
	}

// Disable

function usersDisable(){
	
	$sql  = "UPDATE `tbluser` SET `status` = 0 WHERE `type` = 2";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = "error";
    }
	else{
	return $data;
	}	
	}	
#####
function get_ip_address(){
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
        if (array_key_exists($key, $_SERVER) === true) {
            foreach (explode(',', $_SERVER[$key]) as $ip) {
                if (filter_var($ip, FILTER_VALIDATE_IP) !== false) {
                    return $ip;
                }
            }
        }
    }
}	
###
function getVideoInfo($url){
    $type = "";
    $id = -1;
    //Détermination du "type" de vidéo :
    if(eregi("youtube",$url))            $type="youtube";
    else if(eregi("dailymotion",$url))    $type="dailymotion";
    else if(eregi("google",$url))        $type="google";
    else if(eregi("vimeo",$url))        $type="vimeo";
    else return false;
      
    //Détermination de l'"ID" de la vidéo :
    if($type=="youtube"){
        $debut_id = explode("v=",$url,2);
        $id_et_fin_url = explode("&",$debut_id[1],2);
        $id = $id_et_fin_url[0];
    }
    else if($type=="dailymotion"){
        $debut_id = explode("/video/",$url,2);
        $id_et_fin_url = explode("_",$debut_id[1],2);
        $id = $id_et_fin_url[0];
    }
    else if($type=="google"){
        $debut_id =  explode("docid=",$url,2);
        $id_et_fin_url = explode("&",$debut_id[1],2);
        $id = $id_et_fin_url[0];
    }
    else if($type=="vimeo"){
        $l_id= eregi("([0-9]+)$",$url,$lid);
        $id = $lid[0];
    }
      
    //Analyse et stockage des informations de la vidéo
    if($type=="youtube"){
		$iframe = '<iframe frameborder="0" width="490" height="325" src="https://www.youtube.com/embed/'.$id.'"></iframe>';
    }else if($type=="dailymotion"){
		$iframe = '<iframe frameborder="0" width="490" height="325" src="http://www.dailymotion.com/swf/video/'.$id.'"></iframe>';
    }else if($type=="google"){
       $iframe = '<iframe frameborder="0" width="490" height="325" src="http://video.google.com/googleplay'.'er.swf?docId='.$id.'&hl=fr"></iframe>';
	}else if($type=="vimeo"){
        $iframe = '<iframe frameborder="0" width="490" height="325" src="http://player.vimeo.com/video/'.$id.'"></iframe>';
    }
	return $iframe;
}
#####################
function storeslugs(){
	
	$sql  = "select storeslugs from tblsetting";
	$data = returnQuery($sql);
	if (mysql_error()) {
    return $data = "error";
    }
	else{
	return $data;
	}	
	}	

####
?>