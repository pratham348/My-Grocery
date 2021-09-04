<?php
require("connect.php");
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from demo.admireadmin.com/admire2/login1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Dec 2018 13:10:52 GMT -->
<head>
    <title>Forgot Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!--Global styles -->
    <link type="text/css" rel="stylesheet" href="css/components.css" />
    <link type="text/css" rel="stylesheet" href="css/custom.css" />
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/wow/css/animate.css"/>
    <!--End of Plugin styles-->	
    <link type="text/css" rel="stylesheet" href="css/pages/login1.css"/>
</head>
<body>
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="img/loader.gif" style=" width: 40px;" alt="loading...">
    </div>
</div>


<div class="container wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 login_top_bottom">
            <div class="row">
                <div class="col-lg-5  col-md-8  col-sm-12 mx-auto">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center">
                            <span class="text-white"> &nbsp;<br>Forgot Password ?<br></span>
                        </h3>
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
                    </div>
                    <div class="bg-white login_content login_border_radius">
                        <form action="ForgotPassword/dbForgotPassword.php" id="login_validator" method="POST" class="login_validator">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                    <span class="input-group-addon"> <i class="fa fa-user text-primary"></i>
                                    </span>
                                        <input type="text" class="form-control" name="user-login-name" id="username" placeholder="Username" id="user-login-name" required="" />
                                    </div>
                                </div>
                            </div>
                            <!--</h3>-->
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"> <i class="fa fa-envelope text-primary"></i>
                                    </span>
                                        <input type="email" class="form-control form-control-md"   name="user-email"  placeholder="Email" id="user-email" required="" />
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" value="Submit" name="forgot-password" class="btn btn-primary btn-block login_button"  />
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                        <script>
function validate_forgot() {
    if((document.getElementById("user-login-name").value == "") && (document.getElementById("user-email").value == "")) {
        document.getElementById("validation-message").innerHTML = "Login name or Email is required!"
        return false;
    }
    return true
}
</script>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- global js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- end of global js-->
<!--Plugin js-->
<script type="text/javascript" src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="vendors/wow/js/wow.min.js"></script>
<!--End of plugin js-->
<script type="text/javascript" src="js/pages/login1.js"></script>
</body>


<!-- Mirrored from demo.admireadmin.com/admire2/login1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Dec 2018 13:10:53 GMT -->
</html>