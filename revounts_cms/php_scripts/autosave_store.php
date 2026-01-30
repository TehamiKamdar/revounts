<?php  

include('ajax_db.php');

$connect = db_connect(); 

 if(isset($_POST["store_id"]) && isset($_POST["meta_title"]))
 {
    $store_id = mysqli_real_escape_string($connect, $_POST["store_id"]);
    $store_name = mysqli_real_escape_string($connect, $_POST["store_name"]);
    $heading = mysqli_real_escape_string($connect, $_POST["heading"]);
    $store_short_description = mysqli_real_escape_string($connect, $_POST["store_short_description"]);
    $store_long_description = mysqli_real_escape_string($connect, $_POST["store_long_description"]);
    $meta_title = mysqli_real_escape_string($connect, $_POST["meta_title"]);
    $meta_desc = mysqli_real_escape_string($connect, $_POST["meta_desc"]);
            
  if($_POST["store_id"] != '')  
  {  
    //update post  
    $sql = "UPDATE autosave_store SET name = '".$store_name."', short_desc = '".$store_short_description."', long_desc = '".$store_long_description."', meta = '".$meta_title."', meta_des = '".$meta_desc."', heading = '".$heading."' WHERE id = '".$_POST["store_id"]."'";  
    mysqli_query($connect, $sql);  
  }  
  else  
  {  
    //insert post  
    $sql = "INSERT INTO autosave_store(id, name, short_desc, long_desc, meta, meta_des, heading) VALUES ('".$store_id."', '".$store_name."', '".$store_short_description."', '".$store_long_description."', '".$meta_title."', '".$meta_desc."', '".$heading."')";  
    mysqli_query($connect, $sql);  
    echo mysqli_insert_id($connect);  
  }
 }  
 ?>