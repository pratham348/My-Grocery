<?php
  require_once("CheckSession.php");
  require_once("connect.php");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Category</title>
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
                                Category Tables
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
                                    <a href="#">Category</a>
                                </li>
                                <li class="breadcrumb-item active">View Category</li>
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
                                    <i class="fa fa-table"></i> Category Table
                                </div>
                                <div class="card-body p-t-25">
                                    <div class="">
                                        <div class="pull-sm-right">
                                            <div class="tools pull-sm-right"></div>
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
           <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <br>
                                        <thead>
             <tr>
              <th>NO</th>
              <th>Category Name</th>
              <th>Image</th>
              <th>Status </th>
              <th>Edit</th>
              
            </tr>
            </thead>
            <tbody>
             <?php
              $q = "SELECT * FROM category";
              $data = mysqli_query($con,$q);
              $i = 0;
              while($result = mysqli_fetch_array($data)){
              $i++;
              // print_r($data);
              // exit();
              ?>
              <tr>
               <td><?php echo $i;?></td>
               <td><?php echo $result['Category_name'];?></td>
               <td><img style="border: 1px solid black;" src="<?php echo $result['photo']; ?>" width="70" height="70" /></td>
               
               <td><?php
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
                            ?></td>
               <td><a href="CategoryEdit.php?edit_id=<?php echo $result['category_id'];?>"class="btn btn-success btn-xs purple">
                <i class="fa fa-edit"></i>Edit</a>
               </td>
               <!--<td><a onclick="return confirm('Are you sure?');" href="del&activeCategory.php?del_id=<?php echo $result['category_id'] ?>" class="btn btn-info btn-xs black"><i class="fa fa-trash-o"></i>Delete</a>   -->                     
                
              
                          
               </tr>
               <?php
            }
            ?>
               </tbody> 
                </table>
                <br>
                                    <a href="CategoryStatus.php"> 
                                    <button class="btn btn-primary glow_button">Active/Deactive
                                                           </button></a>
                                    <a href="CategoryDelete.php"> 
                                    <button class="btn btn-primary glow_button">Delete Category
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
