<?php
  require_once("CheckSession.php");
  require_once("connect.php");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Grocery | View Deliver Address</title>
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
                                Deliver Address 
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
                                <li class="breadcrumb-item active">Deliver Address</li>
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
                                    <i class="fa fa-table"></i> Deliver Address 
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
              <th>Deliver Name</th>
              <th>Address</th>
              <th>Pincode</th>
              
            </tr>
            </thead>
            <tbody>
             <?php
              $q = "SELECT * FROM deliver_address";
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
                $id1 = $result['deliver_id'];
                $sql="SELECT deliver_name FROM deliver WHERE deliver_id='$id1'";
                $d=mysqli_query($con,$sql);
                $r = mysqli_fetch_array($d);
                echo $r['deliver_name'];
                    
               ?></td>
               <td><?php echo $result['address'];?></td>
               <td><?php echo $result['pincode'];?></td>
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
