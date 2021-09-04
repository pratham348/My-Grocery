<?php
	require_once("CheckSession.php");
	include_once("./connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Product</title>
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
	<div>
			<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree" >
<div class="wrapper">        
    <!--wrapper-->
<div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col-12 data_tables">
                            <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
                            <div class="card">
                              <div class="carousel-inner">
    <div class="carousel-item active">
      <center><h1>My Products</h1></center>
      <br>
    </div>
</div>
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
                                <div class="card-body p-t-25">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
             <tr>
              <th>NO</th>
              <th>Product Name</th>
              <th>Quantity</th>
              <th>Amount</th>
              <th>Product Details</th>
              <th>Photo</th>
              <th>Status</th>
              <th>Edit</th>
            </tr>
            </thead>
            <tbody>
               <?php
              $q = "SELECT * FROM product WHERE seller_id='".$_SESSION['id']."'";
              $data = mysqli_query($con,$q);
              $i = 0;
              while($result = mysqli_fetch_array($data)){
              $i++;
              // print_r($data);
              // exit();
              ?>

              <tr>
               <td><?php echo $i;?></td>
               <td><?php echo $result['product_name'];?></td>
               <td><?php echo $result['Qty'];?></td>
               <td><?php echo $result['product_amt'];?></td>
               <td><?php echo $result['product_details'];?></td>
               <td>
                <img style="border: 1px solid black;" src="<?php echo $result['photo']; ?>" width="70" height="70"></td>	
               <td>
                <?php
                              if($result["status"]==1)
                              {
                                ?>
                                <font color="green">True</font>
                                <?php
                              }
                              else
                              {
                                ?>
                                <font color="red">False</font>
                                <?php
                              }
                            ?>
                 
               </td>
               <td>
                 <a href="EditProduct.php?edit_id=<?php echo $result['product_id']; ?>"><button class="btn btn-solid" style="background-color: rgb(255, 90, 38);"><font color="white" ><i class="fa fa-edit"></i> Edit</font></button></a>
                 
               </td>
              </tr>
                          
               </tr>
               <?php
            }
            ?>
               </tbody>
                                    </table>
                                    <br>
                                    <form action="DeleteProduct.php">
                                     <input type="submit"  class="btn btn-solid" value="Delete Product" > 
                                    </form>
                                </div>
                            </div>
                                                        
                            
                    </div>
                </div>
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