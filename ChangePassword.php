<?php
  require_once("CheckSession.php");
  require_once("connect.php");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Grocery |Admin Change Password</title>
    
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
     <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                   <div class="row no-gutters">
                       <div class="col-6">
                           <h4 class="m-t-5">
                            <br>
                               <i class="fa fa-user"></i>
                               User Details
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
                                    <a href="#">User Details</a>
                                </li>
                                <li class="breadcrumb-item active">Change Password</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>
<div class="outer">
    <div class="inner bg-container">
      <div class="row">
       <div class="col-lg-12">
        <div class="card">
         <div class="card-header bg-white">
          Change Password
         </div>
         <form method="POST" action="dbChangePassword.php" enctype="multipart/form-data">
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
<?php
             $id = $_SESSION['id'];
             $sql = "SELECT * FROM admin where admin_id = '$id'";
             $q1 = mysqli_query($con,$sql);
             $data = mysqli_fetch_array($q1);
?>
           <table class="table">
          <input type="hidden" name="id" value="<?php echo $data['admin_id'] ?>">
        <tr>
            <td>New Password</td>
            <td><input type="password" name="txtPass" class="form-control" id="txtPassword" placeholder="New Password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" /></td>
        </tr>
        <tr>
            <td>Confirm Password</td>
            <td><input type="password" name="ConfirmPass" class="form-control" id="txtConfirmPassword" placeholder="Confirm Password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="Change Password" name="btnChange" onclick="return Validate()"/></td>
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
             <!--wrapper-->
</div>
</div>
    <!-- /#content -->
<!-- /#wrap -->
&nbsp;
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