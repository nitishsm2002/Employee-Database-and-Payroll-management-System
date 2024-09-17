<?php
  include('configall.php');
   
if (isset($_GET['del'])) {
	$id = $_GET['del'];
    $sqll="DELETE FROM `department`  WHERE Depart_id=$id;";
	$check=mysqli_query($connection, $sqll);
	if($check)
    {echo"Done Done";
    header('location: department.php');
    }
    else{
        echo"Failed";
    }
    
	
}
?>

 