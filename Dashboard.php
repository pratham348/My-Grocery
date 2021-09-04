    <?php
  require_once("CheckSession.php");
  require_once("connect.php");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    
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
        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                   <div class="row no-gutters">
                       <div class="col-6">
                           <h4 class="m-t-5">
                            <br>
                               <i class="fa fa-home"></i>
                               Dashboard
                           </h4>
                       </div>
                   </div>
                </div>
            </header>
<div class="carousel-inner">
    <div class="carousel-item active">
      <center><h1>Welcome My Grocery Admin</h1></center>
    </div>
</div>

            <div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-12">
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="bg-primary top_cards">
                                        <div class="row icon_margin_left">

                                            <div class="col-lg-5 col-5 icon_padd_left">
                                                <div class="float-left">
<span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-users fa-stack-1x fa-inverse text-primary sales_hover"></i>
</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-7 icon_padd_left">
                                                <div class="float-right cards_content">
                                                    <?php
require("connect.php");
$sql = "SELECT seller_name FROM seller";
$q1 = mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($q1);

?>
                                                    <span class="number_val" id="sales_count"><?php echo $rowcount; ?></span><i
                                                        class="fa fa-long-arrow-up fa-2x"></i>
                                                    <br/>
                                                    <span class="card_description">Sellers</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="bg-success top_cards">
                                        <div class="row icon_margin_left">
                                            <div class="col-lg-5  col-5 icon_padd_left">
                                                <div class="float-left">
<span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-users fa-stack-1x fa-inverse text-success visit_icon"></i>
</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-7 icon_padd_left">
                                                <div class="float-right cards_content">
                                                     <?php
require("connect.php");
$sql = "SELECT cust_name FROM customer";
$q1 = mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($q1);

?>
                                                    <span class="number_val" id="visitors_count"><?php echo $rowcount; ?></span><i
                                                        class="fa fa-long-arrow-up fa-2x"></i>
                                                    <br/>
                                                    <span class="card_description">Customers</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="bg-success top_cards">
                                        <div class="row icon_margin_left">
                                            <div class="col-lg-5  col-5 icon_padd_left">
                                                <div class="float-left">
<span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-users fa-stack-1x fa-inverse text-success visit_icon"></i>
</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-7 icon_padd_left">
                                                <div class="float-right cards_content">
                                                     <?php
require("connect.php");
$sql = "SELECT deliver_name FROM deliver";
$q1 = mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($q1);

?>
                                                    <span class="number_val" id="visitors_count"><?php echo $rowcount; ?></span><i
                                                        class="fa fa-long-arrow-up fa-2x"></i>
                                                    <br/>
                                                    <span class="card_description">Delivers</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="bg-primary top_cards">
                                        <div class="row icon_margin_left">

                                            <div class="col-lg-5 col-5 icon_padd_left">
                                                <div class="float-left">
<span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-shopping-cart fa-stack-1x fa-inverse text-primary sales_hover"></i>
</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-7 icon_padd_left">
                                                <div class="float-right cards_content">
                                                    <?php
require("connect.php");
$sql = "SELECT product_name FROM product";
$q1 = mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($q1);

?>
                                                    <span class="number_val" id="sales_count"><?php echo $rowcount; ?></span><i
                                                        class="fa fa-long-arrow-up fa-2x"></i>
                                                    <br/>
                                                    <span class="card_description">Products</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="bg-primary top_cards">
                                        <div class="row icon_margin_left">

                                            <div class="col-lg-5 col-5 icon_padd_left">
                                                <div class="float-left">
<span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-shopping-cart fa-stack-1x fa-inverse text-primary sales_hover"></i>
</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-7 icon_padd_left">
                                                <div class="float-right cards_content">
                                                    <?php
require("connect.php");
$sql = "SELECT Category_name FROM category";
$q1 = mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($q1);

?>
                                                    <span class="number_val" id="sales_count"><?php echo $rowcount; ?></span><i
                                                        class="fa fa-long-arrow-up fa-2x"></i>
                                                    <br/>
                                                    <span class="card_description">Category</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="bg-success top_cards">
                                        <div class="row icon_margin_left">
                                            <div class="col-lg-5  col-5 icon_padd_left">
                                                <div class="float-left">
<span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-th fa-stack-1x fa-inverse text-success visit_icon"></i>
</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-7 icon_padd_left">
                                                <div class="float-right cards_content">
                                                     <?php
require("connect.php");
$sql = "SELECT order_id FROM product_order";
$q1 = mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($q1);

?>
                                                    <span class="number_val" id="visitors_count"><?php echo $rowcount; ?></span><i
                                                        class="fa fa-long-arrow-up fa-2x"></i>
                                                    <br/>
                                                    <span class="card_description">Order</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="bg-success top_cards">
                                        <div class="row icon_margin_left">
                                            <div class="col-lg-5  col-5 icon_padd_left">
                                                <div class="float-left">
<span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-home fa-stack-1x fa-inverse text-success visit_icon"></i>
</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-7 icon_padd_left">
                                                <div class="float-right cards_content">
                                                     <?php
require("connect.php");
$sql = "SELECT address FROM seller_address";
$q1 = mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($q1);

?>
                                                    <span class="number_val" id="visitors_count"><?php echo $rowcount; ?></span><i
                                                        class="fa fa-long-arrow-up fa-2x"></i>
                                                    <br/>
                                                    <span class="card_description">Seller Address</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="bg-primary top_cards">
                                        <div class="row icon_margin_left">

                                            <div class="col-lg-5 col-5 icon_padd_left">
                                                <div class="float-left">
<span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-home fa-stack-1x fa-inverse text-primary sales_hover"></i>
</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-7 icon_padd_left">
                                                <div class="float-right cards_content">
                                                    <?php
require("connect.php");
$sql = "SELECT address FROM customer_address";
$q1 = mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($q1);

?>
                                                    <span class="number_val" id="sales_count"><?php echo $rowcount; ?></span><i
                                                        class="fa fa-long-arrow-up fa-2x"></i>
                                                    <br/>
                                                    <span class="card_description">Customer Address</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="bg-primary top_cards">
                                        <div class="row icon_margin_left">

                                            <div class="col-lg-5 col-5 icon_padd_left">
                                                <div class="float-left">
<span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-home fa-stack-1x fa-inverse text-primary sales_hover"></i>
</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-7 icon_padd_left">
                                                <div class="float-right cards_content">
                                                    <?php
require("connect.php");
$sql = "SELECT address FROM deliver_address";
$q1 = mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($q1);

?>
                                                    <span class="number_val" id="sales_count"><?php echo $rowcount; ?></span><i
                                                        class="fa fa-long-arrow-up fa-2x"></i>
                                                    <br/>
                                                    <span class="card_description">Deliver Address</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="bg-success top_cards">
                                        <div class="row icon_margin_left">
                                            <div class="col-lg-5  col-5 icon_padd_left">
                                                <div class="float-left">
<span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-comment fa-stack-1x fa-inverse text-success visit_icon"></i>
</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-7 icon_padd_left">
                                                <div class="float-right cards_content">
                                                     <?php
require("connect.php");
$sql = "SELECT name FROM admin_feedback";
$q1 = mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($q1);

?>
                                                    <span class="number_val" id="visitors_count"><?php echo $rowcount; ?></span><i
                                                        class="fa fa-long-arrow-up fa-2x"></i>
                                                    <br/>
                                                    <span class="card_description">Feedback</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                



                            </div>
                        </div>  

 <div class="outer">
                <div class="inner bg-container" style="width: 100%;">
                    <div class="card">
                        <div class="card-body">
                            <div class="row" style="width: 100%;">
                                <!--<div class="col-lg-6 m-t-35">
                                    <section>
                                    <!--<div class="text-center" style="align-content:center; ">
                                        <img src="admin.png" alt="admin" style="width: 100px;height: 100px;">      
                                    </div>
                                </section>
                                </div>-->
                                <div class="col-lg-6 m-t-25" style="margin-left: 50px;">
                                    <div class="text-center" style="align-content:center; ">
                                        <img src="admin.png" alt="admin" style="width: 100px;height: 100px;">      
                                    </div>
                                    <div>
                                        <ul class="nav nav-inline view_user_nav_padding">
                                            <li class="nav-item card_nav_hover">
                                                <a class="nav-link active" href="#user" id="home-tab"
                                                   data-toggle="tab" aria-expanded="true">User Details</a>
                                            </li>                          
                                        </ul>
<?php
$id=$_SESSION['id'];
$query = "SELECT * FROM admin WHERE admin_id='$id'";
$data = mysqli_query($con,$query);
$result=mysqli_fetch_array($data);
?>
                                        <div id="clothing-nav-content" class="tab-content m-t-10">
                                            <div role="tabpanel" class="tab-pane fade show active" id="user">
                                                <table class="table" id="users">
                                                    <tr>
                                                        <td>Name</td>
                                                        <td class="inline_edit">
                                                        <span class="editable"
                                                              data-title="Edit User Name"><?php echo $result['username']; ?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td class="inline_edit">
                                                        <span class="editable"
                                                              data-title="Edit User Name"><?php echo $result['email_id']; ?></span>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>Change Password</td>
                                                        <td class="inline_edit">
                                                        <span class="editable"
                                                              data-title="Edit User Name"><a href="ChangePassword.php"> Click Here</a>
                                                         </span>
                                                        </td>
                                                    </tr>

                                                    
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
                    </div>

                    


                

            
    <!--wrapper-->
</div>
</div>
    <!-- /#content -->
<!-- /#wrap -->
&nbsp;
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