<?php
    require_once("CheckSession.php");
   // session_start();
    include_once("connect.php");
    include 'AddToCart.php';
    $cart = new Cart;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Seller Address</title>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
    <script src="jquery.min.js"></script>

    <script type="text/javascript">
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>');
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                    
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>');
            $('#pincode').html('<option value="">Select pincode first</option>'); 
        }
    });

    $('#city').on('change',function(){
        var cityID = $(this).val();
        if(cityID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'city_id='+cityID,
                success:function(html){
                    $('#pincode').html(html);
                }
            }); 
        }else{
            $('#pincode').html('<option value="">Select pincode first</option>'); 
        }
    });

    
});
</script>
	<?php
		include_once("head.php");
	?>	
</head>
<body>
	<?php
		include_once("header.php");
	?>
	<?php

        if (isset($_SESSION['user']))
            include_once("navigation.php");
        else
            include_once("navigation1.php");
                             
    ?>
	<br>
	<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree" >
								<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="signup-form">
						<h3>Customer Address</h3>
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
<?php

    //Get all country data
    //$query = $con->query("SELECT * FROM locations GROUP BY country_name ORDER BY country_id ASC");
    
    //Count total number of rows
    //$rowCount = $query->num_rows;
?>
                    <form class="theme-form" method="POST" action="db/dbAddress.php">

<input type="hidden" name="Add" value="<?php echo $_SESSION['id']; ?>">
                       
                        <div class="form-group">
                            <label for="name">Address</label>
                            <textarea class="form-control"placeholder="Enter Full Address" required="" name="address" maxlength="100"></textarea>
                            <p style="color: green;">Note:Enter your full address in following format <br>Full Address,Area,City.</p>
                        </div>
                       <!-- <div class="form-group">
                            <label>Area</label>
                            <select name="area" class="form-control" required="">
                                <option value="Ghatlodia">Ghatlodia</option>
                                <option value="Chandkheda">Chandkheda</option>
                                <option value="Paldi">Paldi</option>
                                <option value="Sarkhej">Sarkhej</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <select name="country" id="country" class="form-control" >
        <option value="">Select Country</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                //echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
            }
        }else{
            //echo '<option value="">Country not available</option>';
        }
        ?>
    </select>
                            

                        </div>-->
                       <!-- <div class="form-group">
                            <label>District</label>
                                <select name="district" class="form-control" required="">
                                    <option value="City">City</option>
                                    <option value="Ruler">Ruler</option>
                                </select>
                        </div>-->

                        <!--<div class="form-group">
                            <label>State</label>
                            <select name="state" id="state"  class="form-control">
                                <option value="">Select country first</option>
                            </select>
                            
                        </div>

                        <div class="form-group">
                            <label>City</label>
                            <select name="city" id="city" class="form-control">
                                <option value="">Select state first</option>
                            </select>
                            
                        </div>-->

                        <div class="form-group">
                            <label>Pincode</label>
                            <select name="pincode" id="pincode" class="form-control">
                                <option value="">Select Pincode</option>
        <?php
        $query = $con->query("SELECT pincode FROM locations WHERE city_name ='Ahmedabad City' ORDER BY pincode ASC");
        $rowCount = $query->num_rows;
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['pincode'].'">'.$row['pincode'].'</option>';
            }
        }else{
            echo '<option value="">Country not available</option>';
        }
        ?>
    </select>
                        </div>

                        <div class="form-group">
                            <label>Phone No</label>
                            <input type="text" placeholder="Enter Phone No" name="phone" class="form-control" pattern="[6789][0-9]{9}" title="You Can enter only 10 digits which is start from 9,8 and 7" required="">
                        </div>
                        <input type="submit" name="CustAdd" class="btn btn-solid" value="Register" > 
                    </form>
					</div>
					
					</div><!--/Customer Sign Up-->
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
