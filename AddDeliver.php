<?php
  require_once("CheckSession.php");
  require_once("connect.php");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Grocery  | Add Deliver</title>
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
                                    Deliver
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
                                        <a href="#">Deliver</a>
                                    </li>
                                    <li class="active breadcrumb-item">Add Deliver</li>
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
                                        <i class="fa fa-file-text-o"></i>
                                        Add Deliver
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
                                        <form action="adminforgotpassword/dbAddDeliver.php" method="post" class="form-horizontal login_validator" id="form_inline_validator">

                                            <div class="form-group row">
                                                <div class="col-xl-4 text-xl-right">
                                                    <label for="required" class="col-form-label">Name</label>
                                                </div>
                                                <div class="col-xl-4">
                                                  <input type="text" class="form-control"placeholder="Deliver Name" required="" name="txtName" pattern="^[a-zA-Z]+$" title="You must contain uppercase letter and lowercase latters Only" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-xl-4 text-xl-right">
                                                    <label for="password" class="col-form-label">Gender</label>
                                                </div>
                                                <div class="col-xl-4">
                                                    <input type="radio" name="gen" checked="checked" value="Male">Male
                                                    <input type="radio" name="gen" value="Female">female
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-xl-4 text-xl-right">
                                                    <label for="email" class="col-form-label">E-mail</label>
                                                </div>
                                                <div class="col-xl-4">
                                                    <input type="email" class="form-control" placeholder="Email" required="" name="txtEmail"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-xl-4 text-xl-right">
                                                    <label for="confirm_password" class="col-form-label">Contact No</label>
                                                </div>
                                                <div class="col-xl-4">
                                                    <input type="text" class="form-control" placeholder="Contact No" required="" name="txtContect"  pattern="^[6789]\d{9}$" title="Your mobile number must contain 10 digits  start with 6,7,8 and 9 " >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-xl-4 text-xl-right">
                                                    <label for="confirm_password" class="col-form-label">Password</label>
                                                </div>
                                                <div class="col-xl-4">
                                                    <input type="password" name="txtPass" class="form-control" id="txtPassword" placeholder=" Password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-xl-4 text-xl-right">
                                                    <label for="confirm_password" class="col-form-label">Confirm Password</label>
                                                </div>
                                                <div class="col-xl-4">
                                                    <input type="password" name="ConfirmPass" class="form-control" id="txtConfirmPassword" placeholder="Confirm Password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/>
                                                </div>
                                            </div>
                                            
                                            </div>
                                            <div class="form-actions form-group row">
                                                <div class="col-xl-8 ml-auto">
                                                    <input type="submit" value="Add Deliver" name="AddDeliver" class="btn btn-primary">
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
