<?php
	require("connect.php");

	if(isset($_GET["active_id"]))
  {
    $id=$_GET["active_id"];   
    $q = "UPDATE category set status=!status where category_id = '$id'";

    $q1 = mysqli_query($con,$q);
    if($q1 > 0){
      header("Location:CategoryTable.php");
    }        
  }
?>