<?php

header("Content-type: text/xml");
include('php_scripts/dbconfig.php'); 
include('php_scripts/functions.php');

//Blogs
$select_store="select `slug`,`product`,`short_desc`,`img` from review";
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
		<title>Revounts Reviews | Revounts.com.au</title>
		<description>Read brands and product reviews before finalizing your decision. Use our recommendation and deals from Revounts.</description>
		<link>https://www.revounts.com.au/reviews</link>
		<image>
		<url>https://www.revounts.com.au/images/icon/favicon.png</url>
		<title>Revounts Reviews | Revounts.com.au</title>
		<link>https://www.revounts.com.au/reviews</link>
		</image>
		<generator>Revounts.com.au</generator>
		<lastBuildDate>'.$date.'</lastBuildDate>
		<atom:link href="https://www.revounts.com.au/review-feeds.xml" rel="self" type="application/rss+xml"/>
		<language>en-au</language>
		<copyright>Copyrights by Revounts</copyright>
';
	   while($row_store=mysqli_fetch_assoc($result))
	    {
	        
            $name_trim = trim(preg_replace('/[\t\n\r\s]+/', ' ', $row_store['product']));
            $store_name_replace = str_replace("&","and", "$name_trim");
            $store_name = $store_name_replace;
            
            $store_desc_strip = strip_tags($row_store['short_desc']);
            $store_desc_trim = trim(preg_replace('/[\t\n\r\s]+/', ' ', $store_desc_strip));
            $store_desc_replace = str_replace("&","and","$store_desc_trim");
            $store_desc = $store_desc_replace;
            
            $store_url = "https://www.revounts.com.au/reviews/".$row_store['slug'];
            
            $image = $row_store['img'];
            $store_img_replace_space = str_replace(" ","%20", "$image");
            $store_img_replace = str_replace("&","%26", "$store_img_replace_space");
            $store_img = "https://www.revounts.com.au/images/review/".$store_img_replace;   
	            
 echo '
        <item>
        	<title>'.$store_name.'</title>
        	<description>'.$store_desc.'</description>
        	<link>'.$store_url.'</link>
        	<dc:creator>Revounts</dc:creator>
        	<guid isPermaLink="false">'.$store_url.'</guid>
        	<media:content medium="image" url="'.$store_img.'"/>
        </item>

';
	            
		   
	    }


 
echo '</channel>
</rss>';
?>