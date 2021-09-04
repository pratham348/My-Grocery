<?php
	//session_start();
	include_once("connect.php");
	include 'AddToCart.php';
	$cart = new Cart;
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Grocery | Reset Password</title>
	<?php
		include_once("head.php");
	?>
	
</head>
<body>
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
						<h3><center>Reset Password</center></h3>
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
						<form class="theme-form" method="POST" action="ForgotPassword/dbResetPassword.php">
						<input type="hidden" name="user" value="<?php echo $_GET["name"]; ?>">
						<div class="form-group">
                            <label for="email">Password</label>
                            <input type="password" class="form-control" id="txtPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  name="Password" placeholder="Password" />
                        </div>

                        <div class="form-group">
                            <label for="email">Confirm Password</label>
                            <input type="password" class="form-control" id="txtConfirmPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  name="ConfirmPassword" placeholder="Confirm Password" />
                        </div>
                        
                        <input type="submit" value="Reset Password" name="btnReset1" class="btn btn-solid" style="width: 100%" onclick="return Validate()"/> 
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

