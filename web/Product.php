<?php
	//require_once("CheckSession.php");
	//session_start();
	include_once("connect.php");
	include 'AddToCart.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Grocery | Product</title>
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
<?php
			$id1 = $_GET["pro_id"];
			$q = "SELECT * FROM product WHERE product_id='$id1'";
            $data = mysqli_query($con,$q);
            $result = mysqli_fetch_array($data);
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
						<a href="Index.php">Home</a>
						<i>|</i>
					</li>
					<li>Product</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!---728x90--->

	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Product
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<form>
			<div class="col-md-5 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="<?php echo $result['photo']; ?>">
								<div class="thumb-image">
									<img src="<?php echo $result['photo']; ?>" data-imagezoom="true" class="img-responsive" alt="" width="200" height="200" > </div>
							</li>
							
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-7 single-right-left simpleCart_shelfItem">
				<h3><?php echo $result['product_name']; ?></h3>
				
				<p>
					<span class="item_price">Rs.<?php echo $result['product_amt']; ?></span>
					<label></label>
				</p>
				<div class="single-infoagile">
					<ul>
						<li>
							Cash on Delivery Eligible.
						</li>
						<li>
							Delivery to within 7 - 10 business days.
						</li>
						<li>
							<?php
					$id1 = $result['seller_id'];
					$sql="SELECT seller_name FROM seller WHERE seller_id='$id1'";
					$d=mysqli_query($con,$sql);
					$r = mysqli_fetch_array($d);
				?>
							Sold by <?php echo $r['seller_name']; ?>
						</li>
					</ul>
				</div>
				<div class="product-single-w3l">
					<p>
						<i class="fa fa-hand-o-right" aria-hidden="true"></i>Product Details</p>
					<ul>
						<li>
							<?php echo $result['product_details']; ?>
						</li>
					</ul>
					<p>
						<!--<i class="fa fa-refresh" aria-hidden="true"></i>All food products are
						<label>returnable.</label>-->
					</p>
				</div>
				<div>
										<a style="width: 50%;" class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $result['product_id']; ?>">ADD TO CART</a>
									</div>
				<div class="occasion-cart">
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
					
							<fieldset>
								<!--<input type="text" name="quantity" value="1" />-->

								<input type="hidden" name="hidden_name" value="<?php echo $result['product_name']; ?>" />

								<input type="hidden" name="hidden_price" value="<?php echo $result['product_amt']; ?> " />
												
								<!--<input type="submit" name="add_to_cart" value="Add to cart" class="button" />-->


								
							</fieldset>
						</form>
					</div>

				</div>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //Single Page -->
	<!---728x90--->

	<!-- special offers -->
	
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Buy More
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
					<?php
			$catId=$result['category_id'];
			$q1 = "SELECT * FROM product WHERE category_id='$catId'";
            $data1 = mysqli_query($con,$q1);
           while ($result1 = mysqli_fetch_array($data1)) {
    ?>
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="Product.php?pro_id=<?php echo $result1['product_id'];?>">
									<img src="<?php echo $result1['photo']; ?>" alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="#"><?php echo $result1['product_name'];  ?></a>
								</h4>
								<div class="w3l-pricehkj">
									<h6>Rs.<?php echo $result1['product_amt']; ?></h6>
								</div>
								<div>
										<a style="width: 100%;" class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $result1['product_id']; ?>" >ADD TO CART</a>
									</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
									<form action="#" method="post">
										<fieldset>
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="business" value=" " />
											<input type="hidden" name="item_name" value="Aashirvaad, 5g" />
											<input type="hidden" name="amount" value="220.00" />
											<input type="hidden" name="discount_amount" value="1.00" />
											<input type="hidden" name="currency_code" value="USD" />
											<input type="hidden" name="return" value=" " />
											<input type="hidden" name="cancel_return" value=" " />
											<!--<input type="submit" name="submit" value="Add to cart" class="button" />-->
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</li>
					<?php
				}
				?>
					
				</ul>
			</div>
		</div>
	</div>
	<!-- //special offers -->
	<!---728x90--->
	<!-- contact -->
	<?php
	if (isset($_SESSION['user']))
		{ ?>
			<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">
						<h3><center> Feedback </center></h3>
						<form method="post" action="db/dbFeedback.php" name="formData" id="formData">
							<div class="">
								<textarea placeholder="Enter Feedback" name="Feedback" required="" id="Feedback"></textarea>
							</div>
							<input type="hidden" name="sellerid" value="<?php echo $id1; ?>">
							<input type="hidden" name="customerid" value="<?PHP echo $_SESSION['id']; ?>">
							<input type="hidden" name="pro_id" value="<?php echo $result['product_id']; ?>">
							<input type="submit" name="feedbackbtn" value="Submit" id="buttton">
						</form>
					</div>
				</div>
			</div>
	 <?php }?>


		
<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>






	<?php
		include_once("footer.php");
	?>
		<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //jquery -->

	<!-- popup modal (for signin & signup)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- Large modal -->
	<!-- <script>
		$('#').modal('show');
	</script> -->
	<!-- //popup modal (for signin & signup)-->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypalm.minicartk.render(); //use only unique class names other than paypal1.minicart1.Also Replace same class name in css and minicart.min.js

		paypalm.minicartk.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- imagezoom -->
	<script src="js/imagezoom.js"></script>
	<!-- //imagezoom -->

	<!-- FlexSlider -->
	<script src="js/jquery.flexslider.js"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->

	<!-- flexisel (for special offers) -->
	<script src="js/jquery.flexisel.js"></script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<!-- //flexisel (for special offers) -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->

	<?php
		include_once("footer_script.php");
	?>

</body>
</html>