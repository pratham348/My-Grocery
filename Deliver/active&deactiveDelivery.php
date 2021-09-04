<?php
require_once("connect.php");

if(isset($_POST["dispatch_id"]))
  {
    $cnt = array();
          $cnt = count($_POST['chk']);
          if($cnt > 0)
          {
            for($i=0;$i<$cnt;$i++)
            {
              $row_no=$_POST['chk'][$i];
              
              $sql="UPDATE product_order set order_dispatch_status=!order_dispatch_status where order_id = ".$row_no;
              mysqli_query($con,$sql);
              header("Location:PendingOrders.php?message=Order Dispatch Updated");
            }
          }else
          {	
          	header("Location:PendingOrders.php?error=Error On Order Dispatch Updated");
          }

   }
 elseif(isset($_POST["deliver_id"]))
  {
    $cnt = array();
          $cnt = count($_POST['chk']);
          if($cnt > 0)
          {
            for($i=0;$i<$cnt;$i++)
            {
              $row_no=$_POST['chk'][$i];
              
              $sql="UPDATE product_order set order_dilivar_status=!order_dilivar_status where order_id = ".$row_no;
              mysqli_query($con,$sql);
              header("Location:PendingOrders.php?message=Order Delivery Updated");
            }
          }else
          {
          	header("Location:PendingOrders.php?error=Error on Order Delivery Updated");
          }

   }
elseif(isset($_POST["complete_id"]))
  {
    $cnt = array();
          $cnt = count($_POST['chk']);
          if($cnt > 0)
          {
            for($i=0;$i<$cnt;$i++)
            {
              $row_no=$_POST['chk'][$i];
              
              $sql="UPDATE product_order set dilivary_status=!dilivary_status where order_id = ".$row_no;
              mysqli_query($con,$sql);
              header("Location:CompletedOrders.php?message=Order Updated");
            }
          }
          else
          {
            header("Location:PendingOrders.php?error=Error on Order Complete");
          }

   }
   else
   {
   	header("Location:PendingOrders.php?error=Error on Order Updated");
   }
?>