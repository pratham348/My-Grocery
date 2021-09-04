<?php
	//require_once("CheckSession.php");
	//include_once("connect.php");
	//session_start();
	include_once("connect.php");
	//include_once("cartAction.php");
	//include 'AddToCart.php';
//$cart = new Cart;

?>
<!-- //Modal2 -->
	<!-- //signup Model -->
	<!-- //header-bot -->
	<!-- navigation <--></-->
	<div class="ban-top">
		<div class="container">
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li class="">
									<a class="nav-stylehead" href="index.php">Home
										<span class="sr-only"></span>
									</a>
								</li>
								<li class="dropdown">
									<a class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown">Categories
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li>
											<a href="Category.php">All Categories</a>
										</li>
										<?php
        $query = $con->query("select * from category");
        $rowCount = $query->num_rows;
        if($rowCount > 0){
            while($row = $query->fetch_assoc())
            	{ ?>
            	<li>
            		<a href="ByCategory.php?cat_id=<?php echo $row['category_id'];?>"><?php echo $row['Category_name']; ?></a>
            	</li>
           <?php }
        }else{
        	echo '<li><a href="#">Category Not Available</a></li>';
            //echo '<option class="nav-stylehead" value="">Country not available</option>';
        }
        ?>
										
									</ul>
								</li>
								<li class="">
									<a class="nav-stylehead" href="viewCart.php">Cart <i class="fa fa-shopping-cart">
									<?php						            
						            $cartItems = $cart->contents();
						            if(count($cartItems)>0){
						            	echo '<span class="badge badge-success" style="width: 20px; height: 20px; font-size: 15px; font-color:white; background-color: #ff5722;"> '.count($cartItems).'</span>';
						            }
						            else {
						            	echo "";
						            }
						        	
									?></i>
								</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="About.php">About Us</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="Feedback.php">Feedback</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="SignIn.php"><span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="SignUp.php"><span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up</a>
								</li>
								
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- //navigation -->