<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('ajax_db.php');

$connection = db_connect(); 

	    $select="SELECT * FROM `events`";
			
	$data = mysqli_query($connection,$select);
    $checkLen=mysqli_num_rows(mysqli_query($connection,$select));
   print_r($data);
   die();
    $users=[];
    $i = 0;
    if ($checkLen > 0) {
    	while($data_array=mysqli_fetch_array($data)){
		 $users[$i]['storename'] =$data_array['storename'];
		 $users[$i]['title'] =$data_array['title'];
		 $users[$i]['description'] = $data_array['description'];
		 $i++;
		}
		
    }

    
    
	    $response['status'] = 1;
		$response['data'] = $users;
		echo json_encode($response);
		exit();
	
   ?>