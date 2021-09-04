<?php
    require_once("CheckSession.php");
    include_once("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Seller Address</title>
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
						<h3>Seller Address</h3>
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
                     <form class="theme-form" method="POST" action="db/dbAddress.php">
                        
 <input type="hidden" name="Add" value="<?php echo $_SESSION['id']; ?>">
                       
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control"placeholder="Enter Full Address" required="" name="address">
                        </div>
                        <div class="form-group">
                            <label>Area</label>
                            <select name="area" class="form-control" required="">
                                <option value="Ghatlodia">Ghatlodia</option>
                                <option value="Chandkheda">Chandkheda</option>
                                <option value="Paldi">Paldi</option>
                                <option value="Sarkhej">Sarkhej</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <select name="city" class="form-control" required="">
                                <option value="Ahmedabad">Ahmedabad</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label>District</label>
                                <select name="district" class="form-control" required="">
                                    <option value="City">City</option>
                                    <option value="Ruler">Ruler</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label>State</label>
                                <select name="state" class="form-control" required="">
                                    <option value="Gujarat">Gujarat</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <select name="country" class="form-control" required="">
                                <option value="India">India</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pincode</label>
                            <input type="text" placeholder="Enter Pincode" name="pincode" class="form-control" pattern="[0-9]{6}" title="You can enter only 6 digits" required="">
                        </div>
                        <div class="form-group">
                            <label>Phone No</label>
                            <input type="text" placeholder="Enter Phone No" name="phone" class="form-control" pattern="[6789][0-9]{9}" title="You Can enter only 10 digits which is start from 9,8 and 7" required="">
                        </div>
                        <input type="submit" name="CustAdd" class="btn btn-solid" value="Register" > 
                    </form>
					</div><!--/Customer Address-->
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


