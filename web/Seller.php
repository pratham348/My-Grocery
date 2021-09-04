<?php
  require_once("CheckSession.php");
  include_once("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
		include_once("head.php");
	?>
</head>
<body>
	<?php
		include_once("header.php");
	?>
	<?php
		include_once("nav.php");
	?>

	<br>
  <div class="contact agileits">
        <div class="contact-agileinfo">
          <div class="contact-form wthree" >
<!--form-->
    <div class="container">
      <div class="row">
        
        <div class="col-sm-4">
          <div class="signup-form"><!--sign up form-->
            <h3>My Profile</h3>
            <hr>
                <div class="theme-card">
                  <!--Seller Sign Up-->
                    <form class="theme-form" >
                        
<?php
             $id = $_SESSION['id'];
             $sql = "SELECT * FROM seller where seller_id = '$id'";
             $q1 = mysqli_query($con,$sql);
             $data = mysqli_fetch_array($q1);
?>

                        <div class="form-group">
                            <label for="email">Name</label>
                            <?php echo $data['seller_name']; ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Gender</label>
                            <?php echo $data['gender']; ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <?php echo $data['email_id']; ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Licence No</label>
                            <?php echo $data['licence_no']; ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Contact No</label>
                            <?php echo $data['contact_no']; ?>
                        </div>
                        <div class="form-group">
                            <label for="review">Change Password</label>
                            <a href="ChangeSellerPassword.php">Click Here</a>
                        </div>
                        <div class="form-group">
                            <label for="review">Change Details</label>
                            <a href="ChangeDetails.php">Click Here</a>
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
             $sql = "SELECT * FROM seller_address where seller_id = '$id'";
             $q1 = mysqli_query($con,$sql);
             $data = mysqli_fetch_array($q1);
?>

<?php
      $pin_id=$data['pincode'];
      $query="SELECT * FROM locations WHERE id='$pin_id'";
      $q2=mysqli_query($con,$query);
      $data1=mysqli_fetch_assoc($q2);

?>

                        <div class="form-group">
                            <label for="email">Address</label>
                            <?php echo $data['address']; ?>
                        </div>
                       <!--<div class="form-group">
                            <label for="email">Area</label>
                            <?php echo $data['area']; ?>
                        </div>
                        <div class="form-group">
                            <label for="email">City</label>
                            <?php echo $data1['city_name']; ?>
                        </div>-->
                        <!--<div class="form-group">
                            <label for="email">District</label>
                            <? //php echo $data['district']; ?>
                        </div>-->
                       <!-- <div class="form-group">
                            <label for="email">State</label>
                            <?php echo $data1['state_name']; ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Country</label>
                            <?php echo $data1['country_name']; ?>
                        </div>-->
                        <div class="form-group">
                            <label for="email">Pincode</label>
                            <?php echo $data['pincode']; ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Contact No</label>
                            <?php echo $data['phone_no']; ?>
                        </div>
                        <div class="form-group">
                            <label for="review">Change Address</label>
                            <a href="ChangeSellerAddress.php">Click Here</a>
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


<?php
		include_once("footer.php");
	?>
	<?php
		include_once("footer_script.php");
	?>

</body>
</html>