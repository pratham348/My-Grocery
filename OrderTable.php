<?php
  require_once("CheckSession.php");
  require_once("connect.php");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Order</title>
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
    <!--left-->

   <div class="wrapper">
        
        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-4 col-sm-4">
                            <h4 class="nav_top_align">
                                <i class="fa fa-th"></i>
                                Order Tables
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
                                    <a href="#">Order</a>
                                </li>
                                <li class="breadcrumb-item active">View Orders</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col-12 data_tables">
                            <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
                            <div class="card">
                                <div class="card-header bg-white">
                                    <i class="fa fa-table"></i> Order Table
                                </div>
                                <div class="card-body p-t-25">
                                    <div class="">
                                        <div class="pull-sm-right">
                                            <div class="tools pull-sm-right"></div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <br>
                                        <thead>
                                        <tr>
                                            <th>NO</th>
                                            <!--<th>Seller Name</th>-->
                                            <th>Customer Name</th>
                                            <!--<th>Product Name</th>
                                            <th>Quantity</th>-->
                                            <th>Total Amount</th>
                                            <th>Order Date Time</th>
                                            <th>Dilivary Date Time</th>
                                            <th>Dilivary Status</th>
                                            <th>Status</th>
                                            <!--<th>Edit</th>-->
                                            <!--<th>Delete</th>-->
                                        </tr>
                                        </thead>
                                        <tbody>
              <?php
              $q = "select * from product_order";
              $data = mysqli_query($con,$q);
              $i = 0;
              while($r = mysqli_fetch_array($data))
              {
              $i++;
              // print_r($data);
              // exit();
              ?>
              <tr>
               <td><?php echo $i; ?></td>
               <!--<td><?php 
               //$seller=$r['seller_id'];
               //$q1 = "SELECT seller_name FROM seller WHERE seller_id='$seller'";
               //$data1 = mysqli_query($con,$q1);
               //$r1 = mysqli_fetch_array($data1);
               //echo $r1['seller_name'];
               ?></td>-->
               
               <td><?php 
               $customer=$r['cust_id'];
               $q2 = "SELECT cust_name FROM customer WHERE cust_id='$customer'";
               $data2 = mysqli_query($con,$q2);
               $r2 = mysqli_fetch_array($data2);
               echo $r2['cust_name'];?></td>

               <!--<td><?php 
               //$product=$r['product_id'];
               //$q3 = "SELECT product_name FROM product WHERE product_id='$product'";
               //$data3 = mysqli_query($con,$q3);
               //$r3 = mysqli_fetch_array($data3);
               //echo $r3['product_name'];?></td>

               <td><?php //echo $r['qty'];?></td>-->
               <td><?php echo $r['total_amount'];?></td>
               <td><?php echo $r['order_date_time'];?></td> 
               <td><?php echo $r['dilivary_date_time'];?></td> 
               <td>
                <?php
                              if($r["dilivary_status"]==1)
                              {
                                ?>
                                <font color="green">Order Placed</font>
                                <?php
                              }
                              else
                              {
                                ?>
                                <font color="red">In Progress</font>
                                <?php
                              }
                            ?>
                 
               </td>
               <td>
                <?php
                              if($r["status"]==1)
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
             
               </tr>
               <?php
            }
            ?>
          </tbody>
                                    </table>
                                    <a href="OrderDilivaryStatus.php"> 
                                    <button class="btn btn-primary glow_button">Complete Order
                                                           </button></a>

                                    <a href="OrderStatus.php"> 
                                    <button class="btn btn-primary glow_button">Active/Deactive
                                                           </button></a>
                                </div>
                            </div>
                                                        
                            
                    </div>
                </div>
            </div>
        </div>
    </div>                   
    </div>
    
        
     <!-- /.outer -->
    <?
        require_once("button.php");
    ?>
    <!-- # right side -->
</div>
<!-- /#wrap -->
<!-- global scripts-->
<?php
  require_once("footer.php");
?>
<!-- global scripts-->
<?php
  require_once("footer_script.php");
?>
</body>
</html>
