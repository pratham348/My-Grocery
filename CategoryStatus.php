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
                                <li class="breadcrumb-item">
                                    <a href="#">View Category</a>
                                </li>
                                <li class="breadcrumb-item active">Active/Deactive Category</li>
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
                                    <i class="fa fa-table"></i> Active / Deactive Category
                                </div>
                                <div class="card-body m-t-35">
                                    <form method="POST" action="del&activeCategory.php">
                                    <table id="example1" class="display table table-stripped table-bordered">
                                        <thead>
                                        <tr>
              <th>#</th>
              <th>NO</th>
              <th>Category Name</th>
              <th>Image</th>
              <th>Status </th>
              <!--<th>Edit</th>
              <th>Delete</th>-->
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
                <td align="center" bgcolor="#FFFFFF">
                  <input name="chk[]" type="checkbox" id="chk[]" value="<?php echo $result['category_id']; ?>"></td>
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
              <!-- <td><a href="CategoryEdit.php?edit_id=<?php echo $result['category_id'];?>"class="btn btn-success btn-xs purple">
                <i class="fa fa-edit"></i>Edit</a>
               </td>
               <td><a onclick="return confirm('Are you sure?');" href="del&activeCategory.php?del_id=<?php echo $result['category_id'] ?>" class="btn btn-info btn-xs black"><i class="fa fa-trash-o"></i>Delete</a>   -->                     
                
              
                          
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

