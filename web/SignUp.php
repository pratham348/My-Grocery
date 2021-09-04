<?php
   // session_start();
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
					<div class="contact-form wthree" style="background:white;">
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h3>Customer Registration</h3>
						<hr>
                <p style="color: red;">
                          <?php
                            if(isset($_GET["message1"]))
                            {
                              echo $_GET["message1"];
                            }
                          ?>
                        </p>
                <div class="theme-card">
                	<!--Customer Sign Up-->
                    <form class="theme-form" method="POST" action="db/dbSignUp.php">
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
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="email" placeholder="Customer Name" required="" name="CustName" pattern="^[a-zA-Z]+$" title="You must contain uppercase letter and lowercase latters Only">
                        </div>
                        <div class="form-group">
                            <label for="Gender">Gender</label>
                            <input type="radio" name="CustGen" checked="checked" value="Male">Male
			    			<input type="radio" name="CustGen" value="Female">Female
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" required="" name="CustEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact No</label>
                            <input type="text" class="form-control" id="email" placeholder="Contact No" required="" name="CustContect" pattern="^[6789]\d{9}$" title="Your mobile number must contain 10 digits  start with 6,7,8 and 9 ">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required="" name="CustPass" id="txtPassword" />
                        </div>
                        <div class="form-group">
                            <label for="password">Confirm Password</label>
                            <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  placeholder="Confirm Password" required="" name="CustCPass" id="txtConfirmPassword" />
                        </div>
                        <input type="submit" name="CustReg" class="btn btn-solid" value="Register" onclick="return Validate()"> 
                    </form>
					</div>
					
					</div><!--/Customer Sign Up-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h3>Seller Registration</h3>
						<hr>
                <p style="color: red;">
                          <?php
                            if(isset($_GET["message"]))
                            {
                              echo $_GET["message"];
                            }
                          ?>
                        </p>
                <div class="theme-card">
                	<!--Seller Sign Up-->
                    <form class="theme-form" method="POST" action="db/dbSignUp.php">
                        <script type="text/javascript">
    function Validates() {
        var password = document.getElementById("Password").value;
        var confirmPassword = document.getElementById("ConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
                        <div class="form-group">
                            <label for="email">Name</label>
                            <input type="text" class="form-control" id="email" placeholder="Seller Name" required="" name="txtName" pattern="^[a-zA-Z]+$" title="You must contain uppercase letter and lowercase latters Only">
                        </div>
                        <div class="form-group">
                            <label for="email">Gender</label>
                            <input type="radio" name="gen" checked="checked" value="Male">Male
			    			<input type="radio" name="gen" value="Female">Female
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" required="" name="txtEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                        </div>
                        <div class="form-group">
                            <label for="email">Licence No</label>
                            <input type="text" class="form-control" id="email" placeholder="Licence No" required="" name="txtLicence" pattern="[a-zA-Z0-9]+" title="You must contain Only letters (either case) and numbers">
                        </div>
                        <div class="form-group">
                            <label for="email">Contact No</label>
                            <input type="text" class="form-control" id="email" placeholder="Contact No" required="" name="txtContect" pattern="^[6789]\d{9}$" title="Your mobile number must contain 10 digits  start with 6,7,8 and 9 " >
                        </div>
                        <div class="form-group">
                            <label for="review">Password</label>
                            <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required="" name="Password" id="Password"/>
                        </div>
                        <div class="form-group">
                            <label for="review">Confirm Password</label>
                            <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Confirm Password" required="" name="ConfirmPassword" id="ConfirmPassword" />
                        </div>
                        <input type="submit" name="SellerReg" class="btn btn-solid" value="Register" onclick="return Validates()"> 
                    </form>
					</div><!--/Seller Sign Up-->
				</div>
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

