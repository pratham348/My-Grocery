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
	<title>My Grocery | Product By Category</title>
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

	<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Big
							<span>Save</span>
						</h3>
						<p>Get flat
							<span>10%</span> Cashback</p>
						<a class="button2" href="product.html">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Healthy
							<span>Saving</span>
						</h3>
						<p>Get Upto
							<span>30%</span> Off</p>
						<a class="button2" href="product.html">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Big
							<span>Deal</span>
						</h3>
						<p>Get Best Offer Upto
							<span>20%</span>
						</p>
						<a class="button2" href="product.html">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<h3>Today
							<span>Discount</span>
						</h3>
						<p>Get Now
							<span>40%</span> Discount</p>
						<a class="button2" href="product.html">Shop Now </a>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- //banner -->
	<!---728x90--->
	<?php
		//include_once("left.php");
	?>
	<?php
			$id1 = $_GET["cat_id"];
			$q = "SELECT * FROM product WHERE category_id='$id1'";
              $data = mysqli_query($con,$q);
              ?>
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">
				<?php
					$id2 = $_GET["cat_id"];
					$sql="SELECT Category_name FROM category WHERE category_id='$id2'";
					$d=mysqli_query($con,$sql);
					$r = mysqli_fetch_array($d);
				?>
				<?php echo $r['Category_name']; ?>
				<!--<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>-->
			</h3>
			<?php
			if (!mysqli_num_rows($data)) 
			{
				echo "<h1><center>Opps!! Product is Not Available</center></h1>";
			}
			else
			{
			if(mysqli_num_rows($data) > 0)
			{
              //$i = 0;
              while($result = mysqli_fetch_array($data))
              {
              	
              //$i++;
              // print_r($data);
              // exit();
			?>
				<div class="wrapper">
					<tabel>
						<tr>
					<!-- first section (nuts) -->
				<form action="ByCategory.php?action=add&id=<?php echo $result["product_id"]; ?>" method="post">
						<!--<h3 class="heading-tittle"></h3>-->
						<div class="col-md-4 product-men">
				
								<div class="men-thumb-item">
									<img src="<?php echo $result['photo'] ?>" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="Product.php?pro_id=<?php echo $result['product_id'];?>"" class="link-product-add-cart" >Quick View</a>
										</div>
									</div>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="#"><?php echo $result['product_name']; ?></a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">Rs.<?php echo $result['product_amt']; ?></span>
										<!--<del>$280.00</del>-->
									</div>
									<div>
										<a style="width: 50%;" class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $result['product_id']; ?>">ADD TO CART</a>
									</div>
								</div>
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
<?php 
		}
	}
}
?>
</tr>
</tabel>
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