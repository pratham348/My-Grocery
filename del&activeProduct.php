<?php
	require("connect.php");

if(isset($_GET["del_id"]))
  {
    $id=$_GET["del_id"];

    $q = "DELETE FROM product where product_id = '$id'";

    $q1 = mysqli_query($con,$q);
    if($q1 > 0){
      header("Location:ProductTable.php");
    }
  }
  else if(isset($_POST["active_id"]))
  {
    $cnt = array();
          $cnt = count($_POST['chk']);
          if($cnt > 0){
            for($i=0;$i<$cnt;$i++)
            {
              $row_no=$_POST['chk'][$i];
              
              $sql="UPDATE product set status=!status where product_id = ".$row_no;
              mysqli_query($con,$sql);
              header("Location:ProductTable.php");
            }
          }else
          {
            echo "There is no data for Active/Deactive.";
          }      
  }
?>