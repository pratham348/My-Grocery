  <?php
	require("../connect.php");

if(isset($_POST["delete_id"]))
  {
    $cnt = array();
          $cnt = count($_POST['chk']);
          if($cnt > 0)
          {
            for($i=0;$i<$cnt;$i++)
            {
              $row_no=$_POST['chk'][$i];
              
              $sql="DELETE FROM product where product_id = ".$row_no;
              mysqli_query($con,$sql);
              header("Location:../MyProduct.php");
            }
          }else
          {
            echo "There is no data for Delete.";
          }

  }
?>