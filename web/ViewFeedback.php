<?php
	require_once("CheckSession.php");
	include_once("./connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Feedback</title>
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
      <center><h1>View Feedback</h1></center>
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
              <th>Product Image</th>
              <th>Customer Name</th>
              <th>Feedback</th>
            </tr>
            </thead>
            <tbody>
               <?php
              $q = "SELECT * FROM feedback WHERE seller_id='".$_SESSION['id']."'";
              $data = mysqli_query($con,$q);
              $i = 0;
              while($result = mysqli_fetch_array($data)){
              $i++;
              // print_r($data);
              // exit();
              ?>

              <tr>
               <td><?php echo $i;?></td>

               <td><?php 
               $pro_id=$result['product_id'];
               $q1="SELECT * FROM product WHERE product_id='$pro_id'";
               $data1 = mysqli_query($con,$q1);
               $result1 = mysqli_fetch_array($data1);

               echo $result1['product_name'];
               ?></td>
            
               <td>
                <img style="border: 1px solid black;" src="<?php echo $result1['photo']; ?>" width="70" height="70">
                </td>

               <td><?php 
               $cust_id=$result['cust_id'];
               $q2="SELECT * FROM customer WHERE cust_id='$cust_id'";
               $data2 = mysqli_query($con,$q2);
               $result2 = mysqli_fetch_array($data2);

               echo $result2['cust_name'];
               ?></td>

               <td><?php echo $result['feedback'];?></td>
              </tr>
                          
               </tr>
               <?php
            }
            ?>
               </tbody>
                                    </table>
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