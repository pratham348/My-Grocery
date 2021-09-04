
<!-- //Modal2 -->
	<!-- //signup Model -->
	<!-- //header-bot -->
	<!-- navigation <--></-->
	<div class="ban-top">
		<div class="container">
			<div class="agileits-navi_search">
				<form action="#" method="post">
					
				</form>
			</div>
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
							    aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li class="">
									<a class="nav-stylehead" href="SellerHome.php">Home</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="SellerDashboard.php">Upload Product
										<span class="sr-only"></span>
									</a>
								</li>
								<!--<li class="">
									<a class="nav-stylehead" href="DilivaryDetails.php">Dilivary Details</a>
								</li>-->
								<li class="">
									<a class="nav-stylehead" href="MyProduct.php">My Products</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="ViewFeedback.php">View Feedback</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="ChangeDetails.php">Change Details</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="Seller.php">Hello <?php	
								if (isset($_SESSION['user']))
									echo "".$_SESSION['user'];
								else
									echo "User" ;
							 ?></a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="LogOut.php">Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- //navigation -->