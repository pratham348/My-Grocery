<?php
	require_once("CheckSession.php");
	include_once("../connect.php");
	$a=$_SESSION['id'];
	$result=mysqli_query($con,"select * from seller_address where seller_id='$a'");
		$ar=mysqli_fetch_assoc($result);
	if (!isset($ar)) {
		header("location:SellerAddress.php");
	}
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

	<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree" >
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h3>Upload Product</h3>
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
                	<!--Customer Sign Up-->
                    <form class="theme-form" method="POST" enctype="multipart/form-data" action="dbSellerDashboard.php">
                         <input type="hidden" name="seller" value="<?php echo $_SESSION['id']; ?>">
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" class="form-control" placeholder="Product Name" required="" name="ProName" pattern="^[a-zA-Z]+$" title="You must contain uppercase letter and lowercase latters Only">
                        </div>
                        <div class="form-group">
                            <label for="name">Category</label>
                            <!--<select name="ProCat" class="form-control">-->
							           
                    <?php
                        $result = $con->query("select * from category");
                        echo "<select name='id' class='form-control' id='fname'>";
                        while ($row = $result->fetch_assoc()) {
                                      unset($id, $name);
                                      $id = $row['category_id'];
                                      $name = $row['Category_name']; 
                                      echo '<option value="'.$id.'">'.$name.'</option>';
                                      //echo "<li><a href='Category.php?category=".$row['category_id']."'>".$row['Category_name']."</a></li>";
                    }
                        //echo "</select>";   
                    ?>
						</select>
                            
                        </div>
                        <div class="form-group">
                            <label for="contact">Product Image</label>
                            <input type="file" name="uploadedimage" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="Gender">Qty</label>
                            <input type="number" class="form-control" name="ProQty" title="Please enter only number value Minimum value is 12" placeholder="Qty" required="" min="12" max="60">
                            <!--<select name="ProQty" class="form-control">
                              <option value="12">12</option>
                              <option value="24">24</option>
                              <option value="36">36</option>
                              <option value="48">48</option>
                            </select>-->
                            <!--<input type="text" class="form-control" placeholder="Qty" required="" name="ProQty">-->
                        </div>
                        <div class="form-group">
                            <label for="email">Amount</label>
                            <input type="text" class="form-control" placeholder="Amount" required="" name="ProAmt" title="You can enter only Amount in Number Format">
                        </div>
                        <div class="form-group">
                            <label for="contact">Product Details</label>
                            <input type="text" class="form-control"  placeholder="Product Details" required="" name="ProDetails" maxlength="150">
                            <p style="color: green;">For Example: Amul Butter packet of 200gm.</p>
                        </div>

                        <input type="submit" name="ProUpload" class="btn btn-solid" value="Upload Product" > 
                    </form>
					</div>
					
					</div><!--/Customer Sign Up-->
				</div>
	</div>
</div>
</section>
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