<?php

header("Content-type: text/xml");
include('php_scripts/dbconfig.php'); 
include('php_scripts/functions.php');

//Blogs
$select_store="select `url`,`name`,`short_des`,`image`,`status` from tblblogpost";
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
		<title>Revounts Blog | Tips For Saving Money, Gift Ideas and Buying Guides</title>
		<description>Get money savings tips, recommendation and deals from Revounts. Read Blogs and stay updated with product reviews, consumer news, and gift guides for all events.</description>
		<link>https://www.revounts.com.au/blog</link>
		<image>
		<url>https://www.revounts.com.au/images/icon/favicon.png</url>
		<title>Revounts Blog | Tips For Saving Money, Gift Ideas and Buying Guides</title>
		<link>https://www.revounts.com.au/blog</link>
		</image>
		<generator>Revounts.com.au</generator>
		<lastBuildDate>'.$date.'</lastBuildDate>
		<atom:link href="https://www.revounts.com.au/blog-feeds.xml" rel="self" type="application/rss+xml"/>
		<language>en-au</language>
		<copyright>Copyrights by Revounts</copyright>
';
	   while($row_store=mysqli_fetch_assoc($result))
	    {
	        
            $name_trim = trim(preg_replace('/[\t\n\r\s]+/', ' ', $row_store['name']));
            $store_name_replace = str_replace("&","and", "$name_trim");
            $store_name = $store_name_replace;
            
            $store_desc_strip = strip_tags($row_store['short_des']);
            $store_desc_trim = trim(preg_replace('/[\t\n\r\s]+/', ' ', $store_desc_strip));
            $store_desc_replace = str_replace("&","and","$store_desc_trim");
            $store_desc = $store_desc_replace;
            
            $store_url = "https://www.revounts.com.au/blog/".$row_store['url'];
            
            $image = $row_store['image'];
            $store_img_replace_space = str_replace(" ","%20", "$image");
            $store_img_replace = str_replace("&","%26", "$store_img_replace_space");
            $store_img = "https://www.revounts.com.au/images/blog/".$store_img_replace;   
	            
	       if($row_store['status'] == "1"){
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

	       } else { }
	            
		   
	    }


 
echo '</channel>
</rss>';
?>