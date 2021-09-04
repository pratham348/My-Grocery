<?php
    require_once("CheckSession.php");
    //session_start();
  include_once("connect.php");
  include 'AddToCart.php';
  $cart = new Cart;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
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
								<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="signup-form"><!--sign up form-->
						<h3>Change Password</h3>
						<hr>
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
                <div class="theme-card">
                	<!--Seller Sign Up-->
                     <form class="theme-form" method="POST" action="db/dbChangeSellerPassword.php">
<?php
             $id = $_SESSION['id'];
             $sql = "SELECT * FROM seller where seller_id = '$id'";
             $q1 = mysqli_query($con,$sql);
             $data = mysqli_fetch_array($q1);
?>
                        
 <input type="hidden" name="id" value="<?php echo $data['seller_id']; ?>">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" required="" name="Email">
                        </div>
                        <div class="form-group">
                            <label>Old Password</label>
                            <input type="Password" class="form-control"placeholder="Old Password" required="" name="txtOldPass" >
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="Password" class="form-control"placeholder="New Password" required="" name="txtPass"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="txtPassword" />
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="Password" class="form-control"placeholder="Confirm Password" required="" name="ConfirmPass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="txtConfirmPassword" />
                        </div>

                        <div class="form-group">
                        <input type="submit" name="ChangePass" class="btn btn-solid" value="Change Password" onclick="return Validate()"/> 
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


