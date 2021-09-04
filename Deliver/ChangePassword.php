<?php
  require_once("CheckSession.php");
  require_once("connect.php");
  require_once("CheckAddress.php");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
   
    <title>My Grocery | Change Password</title>
    
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
                                <li class="breadcrumb-item active">Change Password</li>
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
                                        Change Password
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
             $sql = "SELECT * FROM deliver WHERE deliver_id = '$id'";
             $q1 = mysqli_query($con,$sql);
             $data = mysqli_fetch_array($q1);
?>
<input type="hidden" name="editPass" value="<?php echo $data['deliver_id'];?>">
                                            <div class="form-group row">
                                                <div class="col-xl-4 text-xl-right">
                                                    <label for="required" class="col-form-label">New Password</label>
                                                </div>
                                                <div class="col-xl-4">
                                                    <input type="password" name="txtPass" class="form-control" id="txtPassword" placeholder="New Password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-xl-4 text-xl-right">
                                                    <label for="required" class="col-form-label">Confirm Password</label>
                                                </div>
                                                <div class="col-xl-4">
                                                    <input type="password" name="ConfirmPass" class="form-control" id="txtConfirmPassword" placeholder="Confirm Password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/>
                                                </div>
                                            </div>
                                                        
                                            <div class="form-actions form-group row">
                                                <div class="col-xl-8 ml-auto">
                                                    <input type="submit" value="Change Password" name="UpdPass" class="btn btn-primary" onclick="return Validate()"/>
                                                </div>
                                            </div>
                                        </form>
<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
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