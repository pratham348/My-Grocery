<?php
  require_once("CheckSession.php");
  require_once("connect.php");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Address</title>
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
                                Seller Address 
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
                                    <a href="#">Address </a>
                                </li>
                                <li class="breadcrumb-item active">Seller Address</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>
                          
    <!--wrapper-->
<div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col-12 data_tables">
                            <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
                            <div class="card">
                                <div class="card-header bg-white">
                                    <i class="fa fa-table"></i> Seller Address 
                                </div>
                                <div class="card-body p-t-25">
                                    <div class="">
                                        <div class="pull-sm-right">
                                            <div class="tools pull-sm-right"></div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
             <tr>
              <th>NO</th>
              <th>Seller Name</th>
              <th>Address</th>
             <!-- <th>Area</th>
              <th>Citys</th>
              <th>District</th>
              <th>State</th>
              <th>Country</th>-->
              <th>Pincode</th>
              <th>Phone NO</th>
              
            </tr>
            </thead>
            <tbody>
             <?php
              $q = "SELECT * FROM seller_address";
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
          $id1 = $result['seller_id'];
          $sql="SELECT seller_name FROM seller WHERE seller_id='$id1'";
          $d=mysqli_query($con,$sql);
          $r = mysqli_fetch_array($d);
          echo $r['seller_name'];
              
               ?></td>
               <td><?php echo $result['address'];?></td>
               <!--<td><?php //echo $result['area'];?></td>
               <td><?php //echo $result['city'];?></td>
               <td><?php //echo $result['district'];?></td>
               <td><?php //echo $result['state'];?></td>
               <td><?php //echo $result['country'];?></td> -->
               <td><?php echo $result['pincode'];?></td>
               <td><?php echo $result['phone_no'];?></td>

               </tr>
               <?php
            }
            ?>
               </tbody> 
                </table>
                                   <!-- <a href="CustomerStatus.php"> 
                                    <button class="btn btn-primary glow_button">Active/Deactive
                                                           </button></a>-->
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

     

    <!-- /.outer -->
    <?php
        require_once("footer.php");
    ?>


    <!-- global scripts-->
    <?php
        require_once("footer_script.php");
    ?>

</body>
</html>
