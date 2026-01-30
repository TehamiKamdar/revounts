<?php 

include('ajax_db.php');

$connection = db_connect(); 

	    $select="  SELECT top_stores.*,tblstores.name,tblstores.store_url FROM top_stores 
	    inner join tblstores on tblstores.id = top_stores.store_id
	    order by id desc ";
			


	$data = mysqli_query($connection,$select);
    $checkLen=mysqli_num_rows(mysqli_query($connection,$select));
   
    $users=[];
    $i = 0;
    if ($checkLen > 0) {
    	while($data_array=mysqli_fetch_array($data)){
		 $users[$i]['name'] =$data_array['name'];
		 $users[$i]['status'] =$data_array['store_url'];
		 $users[$i]['store_id'] =$data_array['store_id'];
		
		 $users[$i]['created_at'] =$data_array['created_at'];
		
		 $i++;
		}
		
    }

   





	    $response['status'] = 1;
		$response['data'] = $users;
		echo json_encode($response);
		exit();
	
  

	
   ?>