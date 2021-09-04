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
		include_once("navigation.php");
	?>

	<br>
  <div class="contact agileits">
        <div class="contact-agileinfo">
          <div class="contact-form wthree" >
<section id="form"><!--form-->
    <div class="container">
      <div class="row">
        
        <div class="col-sm-4">
          <div class="signup-form"><!--sign up form-->
            <h3>Update Customer Details </h3>
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
                    <form class="theme-form" method="POST" action="db/dbChangeDetails.php">
                        <script type="text/javascript">
    function Validatas() {
        var password = document.getElementById("Password").value;
        var confirmPassword = document.getElementById("ConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
<?php
             $id = $_SESSION['id'];
             $sql = "SELECT * FROM customer where cust_id = '$id'";
             $q1 = mysqli_query($con,$sql);
             $data = mysqli_fetch_array($q1);
?>
<input type="hidden" name="editID" value="<?php echo $data["cust_id"]; ?>">
                        <div class="form-group">
                            <label for="email">Name</label>
                            <input type="text" class="form-control"placeholder="Seller Name" required="" name="txtName" value="<?php echo $data['cust_name']; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="email">Gender</label>
                            <input type="radio" name="gen" checked="checked"value="Male"<?php if($data['gender']=="Male"){ echo "checked";}?>/>Male
                <input type="radio" name="gen" value="Female"<?php if($data['gender']=="Female"){ echo "checked";}?>/>Female
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Email" required="" name="txtEmail" value="<?php echo $data['email_id']; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="email">Contact No</label>
                            <input type="text" class="form-control" placeholder="Contact No" required="" name="txtContect" value="<?php echo $data['contact_no']; ?>">
                        </div>
                        <!--<div class="form-group">
                            <label for="review">Password</label>
                            <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required="" name="Password" id="Password" value="<?php //echo $data['password']; ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="review">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password" required="" name="ConfirmPassword" id="ConfirmPassword" value="<?php //echo $data['password']; ?>" />
                        </div>-->
                        <input type="submit" name="CustomerUpdata" class="btn btn-solid" value="Update Details" onclick="return Validatas()"> 
                        <!--<input type="Reset" class="btn btn-solid" value="Reset" >-->
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