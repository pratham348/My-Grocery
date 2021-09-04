<?php
  require_once("CheckSession.php");
  require_once("connect.php");
  require_once("CheckAddress.php");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
   
    <title>My Grocery | View Order</title>
    
    <?php
        require_once("head.php");
    ?>
    
</head>

<body class="body">

    <!--nav bar-->
    <?php
        require_once("navigation.php");
    ?>
    <!--nav bar-->
    <!--left-->
    <?php
        require_once("left.php");
    ?>
 <div class="wrapper">
        
        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-4 col-sm-4">
                            <h4 class="nav_top_align">
                                <i class="fa fa-th"></i>
                                View Order
                            </h4>
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-8">
                            <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                                <li class="breadcrumb-item">
                                    <a href="index1.html">
                                        <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">View Order</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
                </div>
            </header>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-xl-12" style="width: 90%;">
                                <div class="card m-t-35">
                                    <div class="card-header bg-white">
                                        <i class="fa fa-file-text-o"></i>
                                        Order Details
                                    </div>
                                    <div class="card-body m-t-35">
              <?php
                $oid=$_GET["oid"];
              $q = "SELECT * FROM order_details WHERE order_id='$oid'";
              $data = mysqli_query($con,$q);
              $i = 0;
              ?>
              <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <br>
                                        <thead>
                                        <tr>
                                          <th>No</th>
                                          <th>Order Id</th>
                                          <th>Seller Name</th>
                                          <th>Product Name</th>
                                          <th>Quantity</th>
                                          <th>Product Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
               <?php
              
              while($result = mysqli_fetch_array($data)){
              $i++;
              // print_r($data);
              // exit();
              ?>
              <tr>
               <td><?php echo $i;?></td>
               <td><?php echo $result['order_id']; ?></td>
               <td><?php 
               $seller=$result['seller_id'];
               $q2 = "SELECT seller_name FROM seller WHERE seller_id='$seller'";
               $data2 = mysqli_query($con,$q2);
               $r2 = mysqli_fetch_array($data2);
               echo $r2['seller_name'];
               ?></td>
               <td><?php
                $pro_id= $result['product_id'];
                $q1 = "SELECT product_name FROM product WHERE product_id = '$pro_id'";
                $data1 = mysqli_query($con,$q1);
                $r=mysqli_fetch_assoc($data1);
                echo $r['product_name'];
               ?></td>
               
               <td><?php echo $result['qty'];?></td>
               <td><?php echo $result['product_amount'];?></td>
               
              
                          
               </tr>
             
               <?php
            }
            ?>

          </tbody>
                                    </table>
             <h3>Delivery Details</h3>
            <?php
            $cid=$_GET["cid"];
            $q1 = "SELECT * FROM customer WHERE cust_id='$cid'";
            $data1 = mysqli_query($con,$q1);
            $result1 = mysqli_fetch_assoc($data1);

            $q2 = "SELECT * FROM customer_address WHERE cust_id='$cid'";
            $data2 = mysqli_query($con,$q2);
            $result2 = mysqli_fetch_assoc($data2);
             ?>
             <label><b>Customer Name:</b> <?php echo $result1['cust_name'];?></label><br>
             <label><b>Address:</b> <?php echo $result2['address'];?></label><br>
             <label><b>Pincode:</b> <?php echo $result2['pincode'];?></label><br>
             <label><b>Contact No:</b> <?php echo $result2['phone_no'];?></label><br>


                                        
                                    </div>
                                </div>
                            </div>

                            <!-- /.row -->
                        </div>
                        
                      </div>
                      </div>  

<?php
    require_once("footer.php");
?>


<!-- global scripts-->
<?php
    require_once("footer_script.php");
?>

</body>
</html>