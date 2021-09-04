<?php
  require_once("CheckSession.php");
  require_once("connect.php");
  require_once("CheckAddress.php");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
   
    <title>Deliver Dashboard</title>
    
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
                       <div class="col-6">
                           <h4 class="m-t-5">
                               <i class="fa fa-home"></i>
                               Dashboard
                           </h4>
                       </div>
                   </div>
                </div>
            </header>
<div class="carousel-inner">
    <div class="carousel-item active">
      <center><h1>Welcome My Grocery Delivers</h1></center>
    </div>
</div>

 <div class="outer">
                <div class="inner bg-container" style="width: 100%;">
                    
    
                                          
<div class="contact agileits">
        <div class="contact-agileinfo">
          <div class="contact-form wthree" >
<!--form-->
    <div class="container">
      <div class="row">
        
        <div class="col-sm-4" style="width: 100%;">
          <div class="signup-form"><!--sign up form-->
            <h1></h1>
            <h3>My Profile</h3>
            <hr>
                <div class="theme-card">
                  <!--Seller Sign Up-->
                    <form class="theme-form" >
                        
<?php
             $id = $_SESSION['id'];
             $sql = "SELECT * FROM deliver where deliver_id = '$id'";
             $q1 = mysqli_query($con,$sql);
             $data = mysqli_fetch_array($q1);
?>

                        <div class="form-group">
                            <label for="email">Name:</label>
                            <?php echo $data['deliver_name']; ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Gender:</label>
                            <?php echo $data['gender']; ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <?php echo $data['email_id']; ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Contact No:</label>
                            <?php echo $data['contact_no']; ?>
                        </div>
                        <div class="form-group">
                            <label for="review">Change Password:</label>
                            <a href="ChangePassword.php">Click Here</a>
                        </div>
                    </form>
          </div><!--/Seller Sign Up-->
        </div>
      </div>
        <div class="col-sm-1">
          <h2 class="or"></h2>
        </div>

        <div class="col-sm-4">
          <div class="signup-form"><!--sign up form-->
            <h3>My Address</h3>
            <hr>
                <div class="theme-card">
                  <!--Seller Sign Up-->
                    <form class="theme-form" >
                        
<?php
             $id = $_SESSION['id'];
             $sql = "SELECT * FROM deliver_address where deliver_id = '$id'";
             $q1 = mysqli_query($con,$sql);
             $data = mysqli_fetch_array($q1);
?>

<?php
      $pin_id=$data['pincode'];
      $query="SELECT * from locations WHERE id='$pin_id'";
      $q2=mysqli_query($con,$query);
      $data1=mysqli_fetch_assoc($q2);

?>

                        <div class="form-group">
                            <label for="email">Address:</label>
                            <?php echo $data['address']; ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Pincode:</label>
                            <?php echo $data['pincode']; ?>
                        </div>
                        <div class="form-group">
                            <label for="review">Change Address:</label>
                            <a href="ChangeAddress.php">Click Here</a>
                        </div>
                        
                         
                    </form>
          </div><!--/Seller Sign Up-->
        </div>

      </div>
    </div>
  </div>
</div>
</div>
</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    


                

            
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