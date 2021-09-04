<?php
	//session_start();
	include_once("connect.php");
	include 'AddToCart.php';
	$cart = new Cart;
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Grocery | Forgot Password</title>
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
	<br>
	<div class="contact agileits" >
				<div class="contact-agileinfo">
					<div class="contact-form wthree" style="width: 50%;">
						<h3><center>Forgot Password</center></h3>
						<hr>
                <?php
                if(isset($_GET["message1"]))
                {
                  ?>
                  <h3 class="box-title" style="color: green;">
                    <?php echo $_GET["message1"]; ?>
                  </h3>
                  <?php    
                }
                else if(isset($_GET["message"]))
                {
                  ?>
                  <h3 class="box-title" style="color: red;">
                    <?php echo $_GET["message"]; ?>
                  </h3>
                  <?php    
                }
              ?>
                         
                        </p>
						<form class="theme-form" method="POST" action="ForgotPassword/dbSellerForgotPass.php">
						<div class="form-group">
                            <label for="email">Username</label>
                            <input type="text" class="form-control" placeholder="Username" required="" name="user-login-name" id="user-login-name" >
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="user-email" placeholder="Email" required="" name="user-email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                        </div>
                        
                        <input type="submit" name="forgot-password" class="btn btn-solid" value="Submit" style="width: 100%;"> 
                        <br><br>
                        
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
			<!-- //contact -->
		</div>
	</div>
	<br>


  
	<?php
		include_once("footer.php");
	?>
	<?php
		include_once("footer_script.php");
	?>

</body>
</html>

