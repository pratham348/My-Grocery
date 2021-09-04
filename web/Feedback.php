<?php
	//session_start();
	include_once("connect.php");
	include 'AddToCart.php';
	$cart = new Cart;
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Grocery | Feedback</title>
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
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="<index class="php"></index>Home</a>
						<i>|</i>
					</li>
					<li>Feedback</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!---728x90--->

	<!-- contact page -->
	<div class="contact-w3l">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Give Feedback
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- contact -->
			<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">
						<form action="db/dbAdminFeedback.php" method="post">
							<div class="">
								<input type="text" name="Name" placeholder="Name" required="">
							</div>
							<div class="">
								<input class="email" type="email" name="Email" placeholder="Email" required="">
							</div>
							<div class="">
								<textarea placeholder="Enter Your Feedback" name="message" required=""></textarea>
							</div>
							<input type="submit" value="Submit" name="Feedback">
						</form>
					</div>
	</div>
</div>
</div>
</div>



	<?php
		include_once("footer.php");
	?>
	<?php
		include_once("footer_script.php");
	?>

</body>
</html>