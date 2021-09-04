<?php
  require_once("CheckSession.php");
  require_once("connect.php");
  require_once("CheckAddress.php");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Grocery | Order Status Update</title>
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
                                Pending Order Tables
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
                                    <i class="fa fa-table"></i>Pending Order Table
                                </div>
                                <div class="card-body p-t-25">
                                    <div class="">
                                        <div class="pull-sm-right">
                                            <div class="tools pull-sm-right"></div>
                                        </div>
                                    </div>
                                    <form method="POST" action="db/active&deactiveDelivery.php">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <br>
                                        <thead>
                                        <tr>
                                          <th>#</th>
                                          <th>NO</th>
                                          <!--<th>Product Name</th>
                                          <th>Seller Name</th>-->
                                          <th>Customer Name</th>
                                          <!--<th>Quantity</th>-->
                                          <th>Amount</th>
                                          <th>Order Date Time</th>
                                          <th>Deliver Date Time</th>
                                          <th>Order Dispatch Status</th>
                                          <th>Order Deliver Status</th>
                                          <th>Order Status</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
               <?php
              $q = "SELECT * FROM product_order WHERE dilivary_status=0";
              $data = mysqli_query($con,$q);
              $i = 0;
              while($result = mysqli_fetch_array($data)){
              $i++;
              // print_r($data);
              // exit();
              ?>

              <tr>
                <td align="center" bgcolor="#FFFFFF">
                  <input name="chk[]" type="checkbox" id="chk[]" value="<?php echo $result['order_id']; ?>"></td>
               <td><?php echo $i;?></td>
               <!--<td><?php
                $pro_id= $result['product_id'];
                $q1 = "SELECT product_name FROM product WHERE product_id = '$pro_id'";
                $data1 = mysqli_query($con,$q1);
                $r=mysqli_fetch_assoc($data1);
                echo $r['product_name'];
               ?></td>
               <td><?php 
               $seller=$result['seller_id'];
               $q2 = "SELECT seller_name FROM seller WHERE seller_id='$seller'";
               $data2 = mysqli_query($con,$q2);
               $r2 = mysqli_fetch_array($data2);
               echo $r2['seller_name'];
               ?></td>-->
               
               <td><?php 
               $customer=$result['cust_id'];
               $q3 = "SELECT cust_name FROM customer WHERE cust_id='$customer'";
               $data3 = mysqli_query($con,$q3);
               $r3 = mysqli_fetch_array($data3);
               echo $r3['cust_name'];?></td>
               <!--<td><?php echo $result['qty'];?></td>-->
               <td><?php echo $result['total_amount'];?></td>
               <td><?php echo $result['order_date_time'];?></td>
               <td><?php echo $result['dilivary_date_time'];?></td> 
               <td><?php
               if($result['order_dispatch_status']==1)
                        {
                          ?>
                                <font color="green">Dispatched</font>
                          <?php
                        } 
                        else
                        {
                          ?>
                                <font color="red">In Process</font>
                          <?php
                        }?>
               </td>
               <td><?php
               if($result['order_dilivar_status']==1)
                        {
                          ?>
                                <font color="green">Delivered</font>
                          <?php
                        } 
                        else
                        {
                          ?>
                                <font color="red">On The Way</font>
                          <?php
                        }?>
               </td> 
               <td><?php 
               if($result['dilivary_status']==1)
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
                        }?>
               </td> 
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
               <td><a href="OrderDetails.php?oid=<?php echo $result['order_id'];?>&cid=<?php echo $result['cust_id'];?>"> View Order</a></td>
              </tr>
                          
               </tr>
               <?php
            }
            ?>
          </tbody>
                                    </table>
                                    <input class="btn btn-primary glow_button" type="submit" name="dispatch_id" value="Dispatch Order">

                                    <input class="btn btn-primary glow_button" type="submit" name="deliver_id" value="Deliver Order">

                                    <input class="btn btn-primary glow_button" type="submit" name="complete_id" value="Complete Order">
                                    
                                    </form>

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
