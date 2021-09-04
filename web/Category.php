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
						<p>&nbsp;</p>
						<!--<p>Get flat
							<span>10%</span> Cashback</p>-->
						<a class="button2" href="<?php if (isset($_SESSION['user'])){echo'Index.php';}else{echo 'index1.php';} ?>">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Healthy
							<span>Saving</span>
						</h3>
						<p>&nbsp;</p>
						<!--<p>Get Upto
							<span>30%</span> Off</p>-->
						<a class="button2" href="Index.php">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Big
							<span>Deal</span>
						</h3>
						<p>&nbsp;</p>
						<!--<p>Get Best Offer Upto
							<span>20%</span>
						</p>-->
						<a class="button2" href="Index.php">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<h3>Today
							<span>Discount</span>
						</h3>
						<p>&nbsp;</p>
						<!--<p>Get Now
							<span>40%</span> Discount</p>-->
						<a class="button2" href="Index.php">Shop Now </a>
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
	
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Categories
				<!--<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>-->
			</h3>
			<?php
			$q = "SELECT * FROM category";
              $data = mysqli_query($con,$q);
              //$i = 0;
              while($result = mysqli_fetch_array($data))
              {
              //$i++;
              // print_r($data);
              // exit();
			?>
				<div class="wrapper">
					<table>
						<tr>
					
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<?php   $img1=$result['photo'];
                      						$img2="../";  ?>
									<img src="<?php  echo $img2.$img1; ?>" alt="Category Image" width=250 height=250 >
								</div>
								<div class="item-info-product ">
									<h4>
										<a class="button2" href="ByCategory.php?cat_id=<?php echo $result['category_id'];?>"><?php echo $result['Category_name']; ?></a>
									</h4>
								</div>
							</div>
						</div>
					<?php
				}
				?>
				</tr>
			</table>
						</div>
					</div>
				</div>

			</div>
		</div><br>
	
	






	<?php
		include_once("footer.php");
	?>
	<?php
		include_once("footer_script.php");
	?>
</body>
</html>