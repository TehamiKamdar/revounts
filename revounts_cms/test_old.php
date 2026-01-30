<?php
include('php_scripts/dbconfig.php'); 
include('php_scripts/functions.php');

//Stores
$select_store="select `store_url`,`id`,`name` from tblstores";
$con=db_connect();
$result=mysqli_query($con,$select_store);

//Categories
$select_category="select `slug` from tblcategory";
$result_category=mysqli_query($con,$select_category);

//Blogs
$select_blog="select `url` from tblblogpost";
$result_blog=mysqli_query($con,$select_blog);

//Season
$select_season="select `slug` from season";
$result_season=mysqli_query($con,$select_season);






echo '<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
      http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
      <url>
  <loc>https://www.myfirstsaving.com</loc>
</url>

<url>
  <loc>https://www.myfirstsaving.com/stores</loc>
</url>

<url>
  <loc>https://www.myfirstsaving.com/categories</loc>
</url>
<url>
  <loc>https://www.myfirstsaving.com/blogs</loc>
</url>


      <url>
  <loc>https://www.myfirstsaving.com/terms</loc>
</url>
<url>
  <loc>https://www.myfirstsaving.com/about</loc>
</url>
<url>
  <loc>https://www.myfirstsaving.com/privacy</loc>
</url>
      ';
      while($row_store=mysqli_fetch_assoc($result))
      {
          echo '<url>
  <loc>https://www.myfirstsaving.com/on/'.strtolower($row_store['store_url']).'</loc>
</url>';

            //Coupon
            $select_coupon="select `slug` from tblcoupon where store='".$row_store['id']."'";
            $result_coupon=mysqli_query($con,$select_coupon);
             while($row_coupon=mysqli_fetch_assoc($result_coupon))
             {
                 if($row_coupon['slug']==null)
                 {
                     
                 } else
                 {
                 echo '<url>
  <loc>https://www.myfirstsaving.com/coupon/'.strtolower($row_store['store_url']).'/'.strtolower($row_coupon['slug']).'</loc>
                      </url>'; }
             }

        while($row_category=mysqli_fetch_array($result_category))
        {
             echo '<url>
  <loc>https://www.myfirstsaving.com/category/'.strtolower($row_category['slug']).'</loc>
</url>';

        while($row_blog=mysqli_fetch_array($result_blog))
        {
            echo '<url>
  <loc>https://www.myfirstsaving.com/blog/'.strtolower($row_blog['url']).'</loc>
</url>';
        }

        }



      }
      while($row_season=mysqli_fetch_array($result_season))
      {
        echo '<url>
  <loc>https://www.myfirstsaving.com/deals/'.strtolower($row_season['slug']).'</loc>
</url>';
      }



echo '</urlset>';
?>






