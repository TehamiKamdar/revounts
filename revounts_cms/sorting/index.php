<?php  include('include/connect.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content='' name='keywords'/>
<meta content='' 
name='Description'/>
<link href='https://sites.google.com/site/99webdemos/favicon.png' rel='shortcut icon' type='image/x-icon'/>

<title>Sort Coupons Instantly </title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css" />

<script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="js/jquery.mobile-1.0.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/jquery-ui.min.js"></script>
    
    <script type="text/javascript" language="JavaScript">
	
	jQuery(document).ready(
	
	function() 
	{
		jQuery("#sortThis").sortable({
			
			  update : function () 
			  { 
					var order = $(this).sortable('toArray');
					jQuery(document).load("sort.php?ids="+order); 
					jQuery(".form-message").show();
					jQuery(".form-message").fadeOut(3000);
			  }
		});
		
	}
	
    );
    </script>
</head>

<body>
<div data-role="page" id="page">
  
  <div data-role="content">
   <div style=" margin: auto; width: 60%;">
  
   
     <h2><label>Sort Coupons</label></h2>
     
     
<div class="form-message ui-loader ui-overlay-shadow ui-body-e ui-corner-all" style="display:none;top: 200px;">
<h1>Data Sort Successfully..</h1>
</div>
     
<form  method="post" name="action_form" action="index.php">
<table class="table" width="100%">
            <tr>
              <th>&nbsp;</th>
              <th width="20%" style="color:#F60;">Sort Data</th>
              <th>Name</th>
              <th>Action</th>
            </tr> 
            <tbody id="sortThis">
            <?php
			$allRecords = mysqli_query($connect,"select * from tblcoupon where store='".$_GET['store']."' ORDER BY sort asc");
		
				while($row= mysqli_fetch_assoc($allRecords))
				{
					?>
					<tr id="<?php echo $row['id']; ?>" >
                        <td>&nbsp;</td>
                        <td ><img src="images/icon-drag.png"  height="30" style="cursor:pointer;"/></td>
						<td><?php echo $row['name']; ?></td>
						<td class="action"><a href="add.php?id=<?php echo $row['id']; ?>">Edit</a></td>
					</tr>
					<?php
				}
		
			?>
            </tbody>
           
          
</table>

</form>


   </div>
  </div>
  
</div>
</body>
</html>
