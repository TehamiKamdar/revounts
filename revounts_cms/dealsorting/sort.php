<?php
include('include/connect.php');
$ids= explode(",", $_GET['ids']);

$ids_array = explode(",", $_GET['ids']);
sort($ids_array);
$count=count($ids_array);

for ($i = 0; $i < $count; $i++) 
{
    $qry="UPDATE tblcoupon SET `sort`=" .$ids_array[$i]. " WHERE `id`='" .$ids[$i]. "'";
	mysql_query($qry);
}
?>