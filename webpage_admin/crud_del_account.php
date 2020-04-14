<?php


include('../include/db.php');

			
            $id =$_GET['acc_id'];		
            
				$del =" DELETE FROM `accounts` WHERE `account_id` ='$id'";
					if(mysqli_query($con,$del))
					{
					    echo' <script language="javascript" type="text/javascript"> alert("Account has been Deleted") </script>';
				    	echo "<script type='text/javascript'> window.location='user_manage.php'</script>";							
					}				
				
				
?>
	
			
		