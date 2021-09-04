<?php
require("../connect.php");

    function GetImageExtension($imagetype)
     {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }
     
     $seller = $_POST["seller"];
     $pname = $_POST["ProName"];
     $cate = $_POST["id"];
     //$image = $_POST["uploadedimage"];
     $qty = $_POST["ProQty"];
     $amt = $_POST["ProAmt"];
     $detail =$_POST["ProDetails"];

if (!empty($_FILES["uploadedimage"]["name"])) {

    $file_name=$_FILES["uploadedimage"]["name"];
    $temp_name=$_FILES["uploadedimage"]["tmp_name"];
    $imgtype=$_FILES["uploadedimage"]["type"];
    $ext= GetImageExtension($imgtype);
    $imagename=date("d-m-Y")."-".time().$ext;
    $target_path = "../Product/".$imagename;
    

if(move_uploaded_file($temp_name, $target_path)) {

    $q = "INSERT INTO product(seller_id,category_id,product_name,Qty,product_amt,product_details,photo) VALUES('$seller','$cate','$pname','$qty','$amt','$detail','$target_path')";
    //$q="INSERT into 'category' ('Category_name','images_path') VALUES ('".$Category_name."','".$target_path."')";
    $data = mysqli_query($con,$q);
       //print_r($data);
      // exit();
        if($data == true){
            header("location:../SellerDashboard.php?message=Product Added");
          }

        }
        else
        {
             header("location:../SellerDashboard.php?error=Error While uploading Category on the Server");
             //print_r($errors);
        } 
    
}else{

    header("location:../SellerDashboard.php?error=Error While uploading Category on the server");
  // exit("Error While uploading image on the server");
} 



?>
