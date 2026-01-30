<?php
header("Content-type: text/xml");
include('php_scripts/dbconfig.php'); 
include('php_scripts/functions.php');

//Stores
$select_store="select `store_url`,`id`,`name`,`heading`,`short_desc`,`img`,`for_sitemap`,`publish_date` from tblstores";
$con=db_connect();
$result=mysqli_query($con,$select_store);


$date = gmdate("D, d M Y H:i:s O");

echo '<?xml version="1.0" encoding="UTF-8"?>
<rss
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:georss="http://www.georss.org/georss"
	xmlns:thr="http://purl.org/syndication/thread/1.0"
	xmlns:media="http://search.yahoo.com/mrss/"
	xmlns:dc="http://purl.org/dc/elements/1.1/" 
	xmlns:content="http://purl.org/rss/1.0/modules/content/" 
	version="2.0"
	>
	<channel>
		<title>Revounts Australia | Top Online Coupons | Deals and Promo Codes</title>
		<description>Shop Smartly With Revounts Australia, Over Thousands Of online Stores. Get 100% Valid Discount Codes, Coupon Codes, Promo Codes, Free Shipping Codes and Deals</description>
		<link>https://www.revounts.com.au/</link>
		<image>
		<url>https://www.revounts.com.au/images/icon/favicon.png</url>
		<title>Revounts Australia | Top Online Coupons | Deals and Promo Codes</title>
		<link>https://www.revounts.com.au/</link>
		</image>
		<generator>Revounts</generator>
		<lastBuildDate>'.$date.'</lastBuildDate>
		<pubDate>Wed, 02 Oct 2002 15:00:00 +0200</pubDate>
		<atom:link href="https://www.revounts.com.au/feeds.xml" rel="self" type="application/rss+xml"/>
		<language>en-au</language>
		<copyright>Copyrights by Revounts</copyright>
';
	   while($row_store=mysqli_fetch_assoc($result))
	    {
	        
            $pulish_date = explode(" ", $row_store['publish_date']);
            $get_pulish_date = $pulish_date[0].' '.$pulish_date[2].' '.$pulish_date[1];
            $datetouse = date("Y-m-d", strtotime($get_pulish_date)); 
            $heading_trim = trim(preg_replace('/[\t\n\r\s]+/', ' ', $row_store['heading']));
            $heading_replace = str_replace("&","and","$heading_trim");
            $heading = $heading_replace;
            $name_trim = trim(preg_replace('/[\t\n\r\s]+/', ' ', $row_store['name']));
            $store_name_replace = str_replace("&","and", "$name_trim");
            $store_name = $store_name_replace;
            $store_desc_strip = strip_tags($row_store['short_desc']);
            $store_desc_trim = trim(preg_replace('/[\t\n\r\s]+/', ' ', $store_desc_strip));
            $store_desc_replace = str_replace("&","and","$store_desc_trim");
            $store_desc = $store_desc_replace;
            $store_url = "https://www.revounts.com.au/".$row_store['store_url'];
            $image = $row_store['img'];
            $store_img_replace_space = str_replace(" ","%20", "$image");
            $store_img_replace = str_replace("&","%26", "$store_img_replace_space");
            $store_img = "https://www.revounts.com.au/images/stores/".$store_img_replace;
	        if($row_store['for_sitemap'] == "1"){
	            
 echo '
        <item>
        	<title>'.$store_name.' '.$heading.'</title>
        	<description>'.$store_desc.'</description>
        	<link>'.$store_url.'</link>
        	<dc:creator>Revounts</dc:creator>
        	<guid isPermaLink="false">'.$store_url.'</guid>
        	<media:content medium="image" url="'.$store_img.'"/>
        </item>

';
	            
	        }
	        else {
echo '
        <item>
        	<title>'.$store_name.' '.$heading.'</title>
        	<description>'.$store_desc.'</description>
        	<link>'.$store_url.'</link>
        	<dc:creator>Revounts</dc:creator>
        	<guid isPermaLink="false">'.$store_url.'</guid>
        	<media:content medium="image" url="'.$store_img.'"/>
        </item>

';
	        }
		   
	    }


 
echo '</channel>
</rss>';
?>