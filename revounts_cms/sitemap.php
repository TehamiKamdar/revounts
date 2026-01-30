<?php
header("Content-type: text/xml");
include('php_scripts/dbconfig.php'); 
include('php_scripts/functions.php');

//Stores
$select_store="select `store_url`,`id`,`name`,`for_sitemap`,`created_at`,`updated_at` from tblstores";
$con=db_connect();
$result=mysqli_query($con,$select_store);

//Categories
$select_category="select `slug` ,`update_date` from tblcategory where parent = 'please select' and slug <> 'entertainment' ";
$result_category=mysqli_query($con,$select_category);

//Sub Categories
$select_sub_category="select `slug`, `parent` from tblcategory where parent != 'please select'";
$result_sub_category=mysqli_query($con,$select_sub_category);

//Blogs
$select_blog="select `url`,`publish_date` from tblblogpost";
$result_blog=mysqli_query($con,$select_blog);


//Blog Category
$select_blogCat="select `slug` from tblblogcat";
$result_blogCat=mysqli_query($con,$select_blogCat);

//Reviews
$select_review="select `slug` from review";
$result_review=mysqli_query($con,$select_review);


echo '<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
      http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<url>
  <loc>https://www.revounts.com.au/</loc>
  <changefreq>weekly</changefreq>
 <priority>1</priority>
 <lastmod>'.gmdate("Y-m-d\TH:i:sP").'</lastmod>
</url>	  
<url>
  <loc>https://www.revounts.com.au/stores</loc>
  <changefreq>weekly</changefreq>
 <priority>1</priority>
 <lastmod>'.gmdate("Y-m-d\TH:i:sP").'</lastmod>
</url>

<url>
  <loc>https://www.revounts.com.au/coupons</loc>
  <changefreq>weekly</changefreq>
 <priority>1</priority>
 <lastmod>'.gmdate("Y-m-d\TH:i:sP").'</lastmod>
</url>
<url>
  <loc>https://www.revounts.com.au/blog</loc>
  <changefreq>weekly</changefreq>
 <priority>1</priority>
 <lastmod>'.gmdate("Y-m-d\TH:i:sP").'</lastmod>
</url> 

<url>
  <loc>https://www.revounts.com.au/reviews</loc>
  <changefreq>weekly</changefreq>
 <priority>1</priority>
 <lastmod>'.gmdate("Y-m-d\TH:i:sP").'</lastmod>
</url> 
<url>
  <loc>https://www.revounts.com.au/terms</loc>
  <changefreq>weekly</changefreq>
 <priority>1</priority>
 <lastmod>'.gmdate("Y-m-d\TH:i:sP").'</lastmod>
</url>
<url>
  <loc>https://www.revounts.com.au/about</loc>
  <changefreq>weekly</changefreq>
 <priority>1</priority>
 <lastmod>'.gmdate("Y-m-d\TH:i:sP").'</lastmod>
</url>
<url>
  <loc>https://www.revounts.com.au/privacy</loc>
  <changefreq>weekly</changefreq>
 <priority>1</priority>
 <lastmod>'.gmdate("Y-m-d\TH:i:sP").'</lastmod>
</url>

<url>
  <loc>https://www.revounts.com.au/contact</loc>
  <changefreq>weekly</changefreq>
 <priority>1</priority>
 <lastmod>'.gmdate("Y-m-d\TH:i:sP").'</lastmod>
</url>

<url>
  <loc>https://www.revounts.com.au/seasonal</loc>
  <changefreq>weekly</changefreq>
 <priority>0.5</priority>
 <lastmod>'.gmdate("Y-m-d\TH:i:sP").'</lastmod>
</url>

<url>
  <loc>https://www.revounts.com.au/seasonal/black-friday</loc>
  <changefreq>weekly</changefreq>
 <priority>0.5</priority>
 <lastmod>'.gmdate("Y-m-d\TH:i:sP").'</lastmod>
</url>

<url>
  <loc>https://www.revounts.com.au/seasonal/cyber-monday</loc>
  <changefreq>weekly</changefreq>
 <priority>0.5</priority>
 <lastmod>'.gmdate("Y-m-d\TH:i:sP").'</lastmod>
</url>

<url>
  <loc>https://www.revounts.com.au/seasonal/halloween</loc>
  <changefreq>weekly</changefreq>
 <priority>0.5</priority>
 <lastmod>'.gmdate("Y-m-d\TH:i:sP").'</lastmod>
</url>

<url>
  <loc>https://www.revounts.com.au/blog/categories</loc>
  <changefreq>weekly</changefreq>
 <priority>0.5</priority>
 <lastmod>'.gmdate("Y-m-d\TH:i:sP").'</lastmod>
</url>

';
	   while($row_store=mysqli_fetch_assoc($result))
	    {
	        
            $pulish_date = gmdate("Y-m-d\TH:i:sP");
            if ($row_store['updated_at'] != NULL){
                $pulish_date = $row_store['updated_at'];
            } else {
                $pulish_date = $row_store['created_at'];
            }
            $datetouse = gmdate("Y-m-d\TH:i:sP", strtotime($pulish_date));
	        if($row_store['for_sitemap'] == "1"){
	            
echo '<url>
    <loc>https://www.revounts.com.au/'.$row_store['store_url'].'</loc>
    <changefreq>daily</changefreq>
    <priority>1</priority>
    <lastmod>'.gmdate("Y-m-d\TH:i:sP").'</lastmod>
</url>

';
	            
	        }
	        else {
echo '<url>
    <loc>https://www.revounts.com.au/'.$row_store['store_url'].'</loc>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
    <lastmod>'.$datetouse.'</lastmod>
</url>

';
	        }
		   
	    }
	    
 		while($row_blog=mysqli_fetch_array($result_blog))
		{ 
		    $pulish_date = explode("-", $row_blog['publish_date']);
            $get_pulish_date = $pulish_date[0].'-'.$pulish_date[1].'-'.$pulish_date[2];
            $datetouse = date("Y-m-d", strtotime($get_pulish_date)); 
            
echo '<url>
    <loc>https://www.revounts.com.au/blog/'.strtolower($row_blog['url']).'</loc>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
    <lastmod>'.gmdate("Y-m-d\TH:i:sP").'</lastmod>
</url>

';
		}

		while($row_review=mysqli_fetch_array($result_review))
		{
		    $review_slug=str_replace(" ","",$row_review['slug']);
echo '<url>
    <loc>https://www.revounts.com.au/reviews/'.strtolower($review_slug).'</loc>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
    <lastmod>'.gmdate("Y-m-d\TH:i:sP").'</lastmod>
</url>

';
		}

		while($row_category=mysqli_fetch_array($result_category))
		{
		    $pulish_date = explode("-", $row_blog['update_date']);
            $get_pulish_date = $pulish_date[0].'-'.$pulish_date[1].'-'.$pulish_date[2];
            $datetouse = date("Y-m-d", strtotime($get_pulish_date));
            
echo '<url>
     <loc>https://www.revounts.com.au/coupons/'.strtolower($row_category['slug']).'</loc>
     <changefreq>weekly</changefreq>
     <priority>0.5</priority>
     <lastmod>'.gmdate("Y-m-d\TH:i:sP").'</lastmod>
</url>';
		}
echo '<url>
    <loc>https://www.revounts.com.au/coupons/entertainment</loc>
    <changefreq>weekly</changefreq>
    <priority>0.5</priority>
    <lastmod>'.gmdate("Y-m-d\TH:i:sP").'</lastmod>
</url>

';
		
		
		while($row_sub_category=mysqli_fetch_array($result_sub_category))
		{
		    $select_parent="select `slug` from tblcategory where id = '".$row_sub_category['parent']."'";
            $result_parent=mysqli_query($con,$select_parent);
            $row_parent=mysqli_fetch_array($result_parent);
            
echo '<url>
     <loc>https://www.revounts.com.au/coupons/'.strtolower($row_parent['slug']).'/'.strtolower($row_sub_category['slug']).'</loc>
     <changefreq>weekly</changefreq>
     <priority>0.5</priority>
     <lastmod>'.gmdate("Y-m-d\TH:i:sP").'</lastmod>
</url>';
		}
		
		

		
		
		while($row_blogCat=mysqli_fetch_array($result_blogCat))
		{
echo '<url>
     <loc>https://www.revounts.com.au/blog/category/'.strtolower($row_blogCat['slug']).'</loc>
     <changefreq>weekly</changefreq>
     <priority>0.5</priority>
     <lastmod>'.gmdate("Y-m-d\TH:i:sP").'</lastmod>
</url>

';
		}
		

 


 
echo '</urlset>';
?>