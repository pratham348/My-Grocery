<?php
	require("connect.php");

/*if(isset($_GET["del_id"]))
  {
    $id=$_GET["del_id"];

    $q = "DELETE FROM customer where cust_id = '$id'";

    $q1 = mysqli_query($con,$q);
      if($q1== true ){
        header("Location:CustomerTable.php");
      }
  }
  else*/
   if(isset($_POST["active_id"]))
  {
    $cnt = array();
          $cnt = count($_POST['chk']);
          if($cnt > 0){
            for($i=0;$i<$cnt;$i++)
            {
              $row_no=$_POST['chk'][$i];
              
              $sql="UPDATE product_order set status=!status where order_id = ".$row_no;
              mysqli_query($con,$sql);
              header("Location:OrderTable.php");
            }
          }else
          {
            echo "There is no data for Active/Deactive.";
          }

    /* $id=$_GET["active_id"];   
    $q = "UPDATE customer set status=!status where cust_id = '$id'";

    $q1 = mysqli_query($con,$q);
      if($q1 ==true){
        header("Location:CustomerTable.php");
      }   */     
  }
?>