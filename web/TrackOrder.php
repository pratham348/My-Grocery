<?php
// initializ shopping cart class
include_once("connect.php");
include 'AddToCart.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Grocery | Track Order</title>
    <?php
        include_once("head.php");
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    <script>
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }
    </script>
</head>
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
      <center><h1>Track Order</h1></center>
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
              <th>Order Date Time</th>
              <th>Status</th>
              
            </tr>
            </thead>
            <tbody>
               <?php
               $id=$_SESSION['id'];
              $q = "SELECT * FROM product_order WHERE dilivary_status=0 AND cust_id='$id'";
              $data = mysqli_query($con,$q);
              $i = 0;
              while($result = mysqli_fetch_array($data)){
              $i++;
              $oid=$result['order_id'];
              $sql="SELECT * FROM order_details where order_id='$oid'";
              $sqldata=mysqli_query($con,$sql);
              while ($sqlresult=mysqli_fetch_assoc($sqldata)) 
              {
                
              
              // print_r($data);
              // exit();
              ?>

              <tr>
               <td><?php echo $i;?></td>
               <td><?php
                $pro_id=$sqlresult['product_id'];
                $q1 = "SELECT * FROM product WHERE product_id='$pro_id'";
                $data1 = mysqli_query($con,$q1);
                $result1=mysqli_fetch_assoc($data1);
                echo $result1['product_name'];?></td>
               <td><?php echo $sqlresult['qty'];?></td>
               <td><?php echo $sqlresult['product_amount'];?></td>
               <td><?php echo $result1['product_details'];?></td>
               <td>
                <img style="border: 1px solid black;" src="<?php echo $result1['photo']; ?>" width="70" height="70"></td>    
               <td>
                <?php echo $result['order_date_time']; ?></td>
                <td>
                <?php
                        if($result["order_dispatch_status"]==1)
                        {
                          if($result['order_dilivar_status']==1)
                            {
                              if($result['dilivary_status']==1)
                              {
                                  echo '<font color="green">Order Placed</font>';
                              }
                              else
                              {
                                  echo '<font color="red">In Progress</font>';
                              }

                            }
                          else
                            {
                              echo '<font color="red">On The Way</font>';
                            }
                            
                        }
                        else
                        {
                        ?>
                          <font color="red">At seller's store</font>
                        <?php
                        }
                        ?>
                
               </td>
               
              </tr>
                          
               </tr>
               <?php
             }
            }
            ?>
               </tbody>
                                    </table>
                                    <br>
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