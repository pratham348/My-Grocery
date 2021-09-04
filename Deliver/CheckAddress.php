<?php
$a=$_SESSION['id'];
  $result=mysqli_query($con,"select * from deliver_address where deliver_id='$a'");
    $ar=mysqli_fetch_assoc($result);
  if (!isset($ar)) {
    header("location:DeliverAddress.php");
  }
?>