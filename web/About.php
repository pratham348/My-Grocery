<?php
	//require_once("CheckSession.php");
	include_once("connect.php");
		include 'AddToCart.php';
	$cart = new Cart;
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Grocery | Categories</title>
	<?php
		include_once("head.php");
	?>
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

	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="Index.php">Home</a>
						<i>|</i>
					</li>
					<li>About Us</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- about page -->
	<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">About My Grocery
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="w3l-welcome-info">
				<div class="col-sm-6 col-xs-6 welcome-grids">
					<div class="welcome-img">
						<img src="images/about.jpg" class="img-responsive zoom-img" alt="">
					</div>
				</div>
				<div class="col-sm-6 col-xs-6 welcome-grids">
					<div class="welcome-img">
						<img src="images/about2.jpg" class="img-responsive zoom-img" alt="">
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<h2>
			<div class="w3l-welcome-text">
				
				<p>My Grocery is a online grocery store which helps local sellers to sell their product  online and grow their business without any additional charges.</p>
				<p>We provide local grocery product to our customers So,they can easily purchase locally available products.</p>
				<p>Sellers can sellel their product easily on our website and customers can easily buy local product.</p>
				<p>Now this time our website is available in Ahmedabad only but we try to provide it in all cities of Gujarat and also India. </p>
				<p>We provide opportunity to sell products from local seller so they earn more benifit from their stores without investing a big amount. </p>
			
			</div>
			</h2>
		</div>
	</div>
	<!-- //welcome -->
	<!-- video -->

	<?php
		include_once("footer.php");
	?>
	<?php
		include_once("footer_script.php");
	?>
</body>
</html>