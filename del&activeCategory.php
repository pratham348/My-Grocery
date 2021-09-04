  <?php
	require("connect.php");

if(isset($_POST["delete_id"]))
  {
    $cnt = array();
          $cnt = count($_POST['chk']);
          if($cnt > 0){
            for($i=0;$i<$cnt;$i++)
            {
              $row_no=$_POST['chk'][$i];
              
              $sql="DELETE FROM category where category_id = ".$row_no;
              mysqli_query($con,$sql);
              header("Location:CategoryTable.php");
            }
          }else
          {
            echo "There is no data for Delete.";
          }

    /*$id=$_GET["del_id"];

    $q = "DELETE FROM category where category_id = '$id'";

    $q1 = mysqli_query($con,$q);
    if($q1 > 0){
      header("Location:CategoryTable.php");
    }*/
  }
  else if(isset($_POST["active_id"]))
  { 
    $cnt = array();
          $cnt = count($_POST['chk']);
          if($cnt > 0){
            for($i=0;$i<$cnt;$i++)
            {
              $row_no=$_POST['chk'][$i];
              
              $sql="UPDATE category set status=!status where category_id = ".$row_no;
              mysqli_query($con,$sql);
              header("Location:CategoryTable.php");
            }
          }else
          {
            echo "There is no data for Active/Deactive.";
          }
       
  }
?>