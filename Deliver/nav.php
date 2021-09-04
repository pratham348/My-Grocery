
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
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1" style="margin-right: 50px;">
							<ul class="nav navbar-nav menu__list" style="align-self: center;">
								<li class="">
									<a class="nav-stylehead" href="DilivaryDashboard.php">Home</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="ViewOrders.php">View Orders
										<span class="sr-only"></span>
									</a>
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