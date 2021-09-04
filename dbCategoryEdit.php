<?php
require("connect.php");

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
     
     $Category_name = $_POST["txtCategory"];
     $editid = $_POST["editID"];
if (!empty($_FILES["uploadedimage"]["name"])) {

    $file_name=$_FILES["uploadedimage"]["name"];
    $temp_name=$_FILES["uploadedimage"]["tmp_name"];
    $imgtype=$_FILES["uploadedimage"]["type"];
    $ext= GetImageExtension($imgtype);
    $imagename=date("d-m-Y")."-".time().$ext;
    $target_path = "Images/".$imagename;
    

if(move_uploaded_file($temp_name, $target_path)) {

    $q = "UPDATE category SET Category_name='$Category_name',photo='$target_path' WHERE category_id = $editid";
    //$q="INSERT into 'category' ('Category_name','images_path') VALUES ('".$Category_name."','".$target_path."')";
    $data = mysqli_query($con,$q);
       //print_r($data);
      // exit();
        if($data == true){
            header("location:CategoryTable.php?message=Category Updated");
          }

        }
        else
        {
             
             print_r($errors);
        } 
    
}else{

    header("location:CategoryTable.php?error=Error While Updating Category on the server");
  // exit("Error While uploading image on the server");
} 



?>
