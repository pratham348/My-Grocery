<?php
	//session_start();
	include_once("connect.php");
	include 'AddToCart.php';
	$cart = new Cart;
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
		include_once("header2.php");
	?>
<?php

		if (isset($_SESSION['user']))
			include_once("navigation.php");
		else
			include_once("navigation1.php");
							 
	?>
<div style="background-image: url(bgimage/1.jpg);" >
	<br>
	<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree" style="background:white;" >
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h3>Customer Login</h3>
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
                else if(isset($_GET["message1"]))
                {
                  ?>
                  <h3 class="box-title" style="color: red;">
                    <?php echo $_GET["message1"]; ?>
                  </h3>
                  <?php    
                }
              ?>
                
                <div class="theme-card">
                    <form class="theme-form" method="POST" action="db/dbSignIn.php">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" required="" name="txtEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                        </div>
                        <div class="form-group">
                            <label for="review">Password</label>
                            <input type="password" class="form-control" id="review" placeholder="Enter your password" required="" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                        </div>
                        <input type="submit" name="CustLogin" class="btn btn-solid" value="Login"> 
                        <br><br>
                        <a href="CustomerForgotPassword.php">Forgot Password?</a>
                    </form>
					</div>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h3>Seller Login</h3>
						<hr>
                <?php
                if(isset($_GET["message11"]))
                {
                  ?>
                  <h3 class="box-title" style="color: green;">
                    <?php echo $_GET["message11"]; ?>
                  </h3>
                  <?php    
                }
                else if(isset($_GET["message1"]))
                {
                  ?>
                  <h3 class="box-title" style="color: red;">
                    <?php echo $_GET["message1"]; ?>
                  </h3>
                  <?php    
                }
              ?>
                <div class="theme-card">
                    <form class="theme-form" method="POST" action="db/dbSignIn.php">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" required="" name="txtEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                        </div>
                        <div class="form-group">
                            <label for="review">Password</label>
                            <input type="password" class="form-control" id="review" placeholder="Enter your password" required="" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                        </div>
                        <input type="submit" name="SellerLogin" class="btn btn-solid" value="Login"> 
                        <br><br>
                        <a href="SellerForgotPassword.php">Forgot Password?</a>
                    </form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
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

