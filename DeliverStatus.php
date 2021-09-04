<?php
  require_once("CheckSession.php");
  require_once("connect.php");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Grocery | Deliver Status</title>
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
                               Deliver
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
                                    <a href="#">Deliver</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">View Deliver</a>
                                </li>
                                <li class="breadcrumb-item active">Active/Deactive Deliver</li>
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
                            <div class="card">
                                <div class="card-header bg-white">
                                    <i class="fa fa-table"></i> Active / Deactive Deliver
                                </div>
                                <div class="card-body m-t-35">
                                    <form method="POST" action="db/activeDeliver.php">
                                    <table id="example1" class="display table table-stripped table-bordered">
                                        <thead>
                 <tr>
              <th>#</th>
              <th>NO</th>
              <th>Customer Name</th>
              <th>Gender</th>
              <th>Password</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Date</th>
              <th>Status</th>
              <!--<th>Edit</th>-->
              <!--<th>Delete</th>-->
            </tr>
            </thead>
            <tbody>
              
              <?php
                $q = "SELECT * FROM deliver";
                $data = mysqli_query($con,$q);
                $i = 0;
                while($result = mysqli_fetch_array($data)){
                  $i++;
                // print_r($data);
                // exit();
              ?>

              <tr>
                <td align="center" bgcolor="#FFFFFF">
                  <input name="chk[]" type="checkbox" id="chk[]" value="<?php echo $result['deliver_id']; ?>"></td>
               <td><?php echo $i;?></td>
               <td><?php echo $result['deliver_name'];?></td>
               <td><?php echo $result['gender'];?></td>
               <td><?php echo $result['password'];?></td>
               <td><?php echo $result['contact_no'];?></td>
               <td><?php echo $result['email_id'];?></td>
               <td><?php echo $result['date'];?></td>
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
              </tr>
               </tr>
               <?php
            }
            ?>

               </tbody> 

               </table>
               
              <input class="btn btn-primary glow_button" type="submit" name="active_id" value="Active/Deactive">      
            
               </form>
                                </div>
                            </div>
                                                        
                            
                    </div>
                </div>
            </div>
        </div>
    </div>                   
    </div>
<?
        require_once("button.php");
    ?>
    <!-- # right side -->
</div>
 
    <?php
        require_once("footer.php");
    ?>


    <?php
        require_once("footer_script.php");
    ?>

</body>
</html>
