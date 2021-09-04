<?php
  require_once("CheckSession.php");
  require_once("connect.php");
  require_once("CheckAddress.php");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
   
    <title>My Grocery | Change Details</title>
    
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
 <div class="wrapper">
        
        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-4 col-sm-4">
                            <h4 class="nav_top_align">
                                <i class="fa fa-th"></i>
                                Update Details
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
                                    <a href="#">Update Details</a>
                                </li>
                                <li class="breadcrumb-item active">Change Details</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-xl-12" style="width: 90%;">
                                <div class="card m-t-35">
                                    <div class="card-header bg-white">
                                        <i class="fa fa-file-text-o"></i>
                                        Change Details
                                    </div>
                                    <div class="card-body m-t-35">
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
                                        <form action="db/dbChangeDetails.php" method="post" class="form-horizontal login_validator" id="form_inline_validator">
<?php
             $id = $_SESSION['id'];
             $sql = "SELECT * FROM deliver where deliver_id = '$id'";
             $q1 = mysqli_query($con,$sql);
             $data = mysqli_fetch_array($q1);
?>
<input type="hidden" name="editID" value="<?php echo $data["deliver_id"]; ?>">
                                            <div class="form-group row">
                                                <div class="col-xl-4 text-xl-right">
                                                    <label for="required" class="col-form-label">Name</label>
                                                </div>
                                                <div class="col-xl-4">
                                                  <input type="text" class="form-control"placeholder="Deliver Name" required="" name="txtName" value="<?php echo $data['deliver_name']; ?>" pattern="^[a-zA-Z]+$" title="You must contain uppercase letter and lowercase latters Only" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-xl-4 text-xl-right">
                                                    <label for="password" class="col-form-label">Gender</label>
                                                </div>
                                                <div class="col-xl-4">
                                                    <input type="radio" name="gen" checked="checked" value="Male"<?php if($data['gender']=="Male"){ echo "checked";}?>>Male
                                                    <input type="radio" name="gen" value="Female"<?php if($data['gender']=="Female"){ echo "checked";}?>>female
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-xl-4 text-xl-right">
                                                    <label for="email" class="col-form-label">E-mail</label>
                                                </div>
                                                <div class="col-xl-4">
                                                    <input type="email" class="form-control" placeholder="Email" required="" name="txtEmail" value="<?php echo $data['email_id']; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-xl-4 text-xl-right">
                                                    <label for="confirm_password" class="col-form-label">Contact No</label>
                                                </div>
                                                <div class="col-xl-4">
                                                    <input type="text" class="form-control" placeholder="Contact No" required="" name="txtContect" value="<?php echo $data['contact_no']; ?>" pattern="^[6789]\d{9}$" title="Your mobile number must contain 10 digits  start with 6,7,8 and 9 " >
                                                </div>
                                            </div>
                                            
                                            </div>
                                            <div class="form-actions form-group row">
                                                <div class="col-xl-8 ml-auto">
                                                    <input type="submit" value="Update Details" name="UpdDetails" class="btn btn-primary">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                      </div>
                      </div>  

<?php
    require_once("footer.php");
?>


<!-- global scripts-->
<?php
    require_once("footer_script.php");
?>

</body>
</html>