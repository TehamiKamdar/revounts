<?php
header("Content-type: text/xml");
include('php_scripts/dbconfig.php'); 
include('php_scripts/functions.php');


$con=db_connect();

//Categories
$select_category="select `slug` ,`update_date` from tblcategory where parent = 'please select' and slug <> 'entertainment' ";
$result_category=mysqli_query($con,$select_category);

//Sub Categories
$select_sub_category="select `slug`, `parent` from tblcategory where parent != 'please select'";
$result_sub_category=mysqli_query($con,$select_sub_category);


echo '<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
      http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<url>
     <loc>https://www.revounts.com.au/categories</loc>
     <changefreq>weekly</changefreq>
     <priority>0.5</priority>
     <lastmod>'.gmdate("Y-m-d\TH:i:sP").'</lastmod>
</url>

';


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
</url>

';
		}
		
		
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
</url>

';
		}
		
		

echo '</urlset>';
?>