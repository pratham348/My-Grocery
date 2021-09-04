<?php
	require("../connect.php");

 if(isset($_POST["active_id"]))
  {
    $cnt = array();
          $cnt = count($_POST['chk']);
          if($cnt > 0){
            for($i=0;$i<$cnt;$i++)
            {
              $row_no=$_POST['chk'][$i];
              
              $sql="UPDATE deliver set status=!status where deliver_id = ".$row_no;
              mysqli_query($con,$sql);
              header("Location:../ViewDeliver.php");
            }
          }else
          {
            echo "There is no data for Active/Deactive.";
          }    
  }
?>