<?php
  require_once("CheckSession.php");
  require_once("connect.php");
 
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Category</title>
    <?php
        require_once("head.php");
    ?>
</head>

<body class="body">
<!--nav bar-->
    <?php
        require_once("navigation.php");
    ?>
    <!--nav bar-->
    <!--left-->
    <?php
        require_once("left.php");
    ?>
    <!--left-->

<div id="content" class="bg-container">
                <header class="head">
                    <div class="main-bar">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-4 col-sm-4">
                                <h4 class="nav_top_align skin_txt">
                                    <i class="fa fa-th"></i>
                                    Update Category
                                </h4>
                            </div>
                            <div class="col-lg-6 col-md-8 col-sm-8">
                                <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                                    <li class="breadcrumb-item">
                                        <a href="index1.html">
                                            <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">Category</a>
                                    </li>
                                    <li class="active breadcrumb-item">Update Category</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                </header>
                
    <!--wrapper-->
<div class="outer">
    <div class="inner bg-container">
      <div class="row">
       <div class="col-lg-12">
        <div class="card">
         <div class="card-header bg-white">
           Update Category
         </div>
         <?php
             $id = $_GET["edit_id"];
             $sql = "SELECT * FROM category where category_id = '$id'";
             $q1 = mysqli_query($con,$sql);
             $data = mysqli_fetch_array($q1);
          ?>
         <form method="POST" action="dbCategoryEdit.php" enctype="multipart/form-data">
          <input type="hidden" name="editID" value="<?php echo $id; ?>"><br>  
         <div class="card-body">
          <div class="table-responsive m-t-35">
            <?php
                if(isset($_GET["message"]))
                {
                  ?>
                  <h3 class="box-title" style="color: green;">
                    <?php echo $_GET["message"]; ?>
                  </h3>
                  <?php    
                }
                else if(isset($_GET["error"]))
                {
                  ?>
                  <h3 class="box-title" style="color: red;">
                    <?php echo $_GET["error"]; ?>
                  </h3>
                  <?php    
                }
              ?>
            
             
           <table class="table">
              <tr>
                  <td>Category</td>
                  <td><input type="text" name="txtCategory" placeholder="Category Name" value="<?php echo $data['Category_name'];?>" required></td>
              </tr>
              <tr>
                  <td>Photo</td>
                  <td><input type="file" name="uploadedimage" value="<?php echo $data['photo']; ?>" required></td>
              </tr>
              <tr>
                  <td><a href="CategoryTable.php"class="btn btn-info btn-xs black">Back</a></td>
                  <td><input type="submit" name="update" class="btn btn-success btn-xs purple"></td>
              </tr>
             
             
            </table>
                
          </div>
         </div>
        </div>
       </div>
      </div>         
    </div>
</div>
</div>
</div>
</form>
     

    <!-- /.outer -->
    <?php
        require_once("footer.php");
    ?>


    <!-- global scripts-->
    <?php
        require_once("footer_script.php");
    ?>

</body>
</html>
