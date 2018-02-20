
<?php
	include_once 'inc/db.php';

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>
<body data-spy="scroll" data-target="#header">
	<!-- Header section starts -->
	<header id="header">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="logo" href="#"><img src="images/logo.png" alt="logo-img"></a>
				</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="active page-scroll"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
						<li><a class="page-scroll" href="search.php">Search</a></li>
						<li><a class="page-scroll" href="restaurant.php">Restaurant</a></li>
						<li><a class="page-scroll" href="dashboard/user_location.php">Order</a></li>
						<li><a class="page-scroll" href="login.php">Login</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>	
	</header>
	<!-- /#end of header section -->

	<section id="banner">
		<div class="banner-overlay">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-md-offset-3">
						<div class="banner-caption text-center">
							<h1>Order Delivery & Take out</h1>
							<h5>Find new food, restaurant and enjoy</h5>
						</div>
					</div>
					<!-- <div class="col-md-10 col-md-offset-2">
						<div class="banner-search">
							<form action="" method="GET">
								<input type="text" placeholder="I would like to eat?">
								<input type="submit" class="btn" value="Feed Me">
							</form>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>

	<section id="popular">
		<div class="container">
			<div class="section-head text-center">
				<h1>Popular This Month</h1>
				<h5>The easier way to your favourite food</h5>
			</div>
			<div class="popular-content">
				<div class="row">
			  		<div class="col-sm-6 col-md-4">
			    		<div class="thumbnail">
			      			<img src="images/index/popular/popular1.jpg" alt="img">
			      			<div class="caption">
			        			<h3>Fried chicken with cheese</h3>
			        			<div class="review">
			        				<i class="fa fa-star" aria-hidden="true"></i>
			        				<i class="fa fa-star" aria-hidden="true"></i>
			        				<i class="fa fa-star" aria-hidden="true"></i>
			        				<i class="fa fa-star" aria-hidden="true"></i>
			        				<i class="fa fa-star-half-o" aria-hidden="true"></i>
			        				<h5>150 Reviews</h5>
			        			</div>
			        			<div class="price">
			        				<h3>$ 20.99</h3>
			        			</div>
			        			<div class="order text-right">
			        				<a href="#" class="btn" role="button">Order Now</a>
			        			</div>
			        			<div class="restaurant">
			        				<img src="images/index/popular-logo.png" alt="img">
			        				<h4>Chicken Hut</h4>
			        				<p>5th Avenue, New York</p>

			        				<div class="comment">
			        					<p><span><i class="fa fa-comment" aria-hidden="true"></i></span>50</p>
			        				</div>

			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="col-sm-6 col-md-4">
			    		<div class="thumbnail">
			      			<img src="images/index/popular/popular2.jpg" alt="img">
			      			<div class="caption">
			        			<h3>Fried chicken with cheese</h3>
			        			<div class="review">
			        				<i class="fa fa-star" aria-hidden="true"></i>
			        				<i class="fa fa-star" aria-hidden="true"></i>
			        				<i class="fa fa-star" aria-hidden="true"></i>
			        				<i class="fa fa-star" aria-hidden="true"></i>
			        				<i class="fa fa-star-half-o" aria-hidden="true"></i>
			        				<h5>150 Reviews</h5>
			        			</div>
			        			<div class="price">
			        				<h3>$ 20.99</h3>
			        			</div>
			        			<div class="order text-right">
			        				<a href="#" class="btn" role="button">Order Now</a>
			        			</div>
			        			<div class="restaurant">
			        				<img src="images/index/popular-logo.png" alt="img">
			        				<h4>Chicken Hut</h4>
			        				<p>5th Avenue, New York</p>
			        				<div class="comment">
			        					<p><span><i class="fa fa-comment" aria-hidden="true"></i></span>50</p>
			        				</div>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
				  	<div class="col-sm-6 col-md-4">
				    	<div class="thumbnail">
				      		<img src="images/index/popular/popular3.jpg" alt="img">
				      		<div class="caption">
				        		<h3>Fried chicken with cheese</h3>
				        			<div class="review">
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star-half-o" aria-hidden="true"></i>
				        				<h5>150 Reviews</h5>
				        			</div>
				        			<div class="price">
				        				<h3>$ 20.99</h3>
				        			</div>
				        		<div class="order text-right">
				        			<a href="#" class="btn" role="button">Order Now</a>
				        		</div>
				        		<div class="restaurant">
				        			<img src="images/index/popular-logo.png" alt="img">
				        			<h4>Chicken Hut</h4>
				        			<p>5th Avenue, New York</p>
				        			<div class="comment">
				        				<p><span><i class="fa fa-comment" aria-hidden="true"></i></span>50</p>
				        			</div>
				        		</div>
				      		</div>
				    	</div>
				  	</div>
				</div>
			</div>
		</div>
	</section>

	<section id="feature">
		<div class="container">
			<div class="feature-head">
				<h1>Feature restaurant</h1>
				<ul>
					<li><a href="">Grill</a></li>
					<li><a href="">Pizza</a></li>
					<li><a href="">Paste</a></li>
					<li><a href="">Thai Food</a></li>
					<li><a href="">Fish</a></li>
				</ul>
			</div>
			<div class="feature-area">
				<div class="row">
					<div class="feature-content">
						<div class="col-md-4">
							<div class="resturant-address">
								<img src="images/index/popular-logo.png" alt="img">
									<h4>Chicken Hut</h4>
									<p>Burger, American, Sandwitch <br>Min $ 10.00</p>
									<div class="feature-review">
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star-half-o" aria-hidden="true"></i>
				        				<p>(150)</p>
				        			</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="resturant-address">
								<img src="images/index/popular-logo.png" alt="img">
									<h4>Chicken Hut</h4>
									<p>Burger, American, Sandwitch <br>Min $ 10.00</p>
									<div class="feature-review">
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star-half-o" aria-hidden="true"></i>
				        				<p>(150)</p>
				        			</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="resturant-address">
								<img src="images/index/popular-logo.png" alt="img">
									<h4>Chicken Hut</h4>
									<p>Burger, American, Sandwitch <br>Min $ 10.00</p>
									<div class="feature-review">
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star-half-o" aria-hidden="true"></i>
				        				<p>(150)</p>
				        			</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="resturant-address">
								<img src="images/index/popular-logo.png" alt="img">
									<h4>Chicken Hut</h4>
									<p>Burger, American, Sandwitch <br>Min $ 10.00</p>
									<div class="feature-review">
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star-half-o" aria-hidden="true"></i>
				        				<p>(150)</p>
				        			</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="resturant-address">
								<img src="images/index/popular-logo.png" alt="img">
									<h4>Chicken Hut</h4>
									<p>Burger, American, Sandwitch <br>Min $ 10.00</p>
									<div class="feature-review">
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star-half-o" aria-hidden="true"></i>
				        				<p>(150)</p>
				        			</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="resturant-address">
								<img src="images/index/popular-logo.png" alt="img">
								<h4>Chicken Hut</h4>
								<p>Burger, American, Sandwitch <br>Min $ 10.00</p>
								<div class="feature-review">
			        				<i class="fa fa-star" aria-hidden="true"></i>
			        				<i class="fa fa-star" aria-hidden="true"></i>
			        				<i class="fa fa-star" aria-hidden="true"></i>
			        				<i class="fa fa-star" aria-hidden="true"></i>
			        				<i class="fa fa-star-half-o" aria-hidden="true"></i>
			        				<p>(150)</p>
			        			</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="best">
		<div class="container">
			<div class="row">
				<div class="best-area">
					<div class="col-md-3 col-md-offset-1">
						<img src="images/index/mobile.png" alt="img">
					</div>
					<div class="col-md-6 col-md-offset-2">
						<div class="best-content">
							<h1>The Best Food Delivery App</h1>
							<p>Now you can make food happend pretty much wherever you are <br>thanks thanks to the free easy-to-use food delivery</p>
							<div class="play-store pull-left">
								<a href=""><img src="images/index/playstore.png" alt="img"></a>
							</div>
							<div class="i-store ">
								<a href=""><img src="images/index/apple.png" alt="img"></a>
							</div>
						</div>
					</div>
				</div>
					
			</div>
		</div>
	</section>

		<section id="footer">
		<div class="container">
			<div class="row">
				<div class="footer-area">
					<div class="col-md-3">
						<img src="images/logo.png" alt="logo-img">
					</div>
					<div class="col-md-2">
						<div class="footer-details">
							<h4>About Us</h4>
							<ul type="none">
								<li><a href="#">About Us</a></li>
								<li><a href="#">History</a></li>
								<li><a href="#">Our Team</a></li>
								<li><a href="#">We are hiring</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2">
						<div class="footer-details">
							<h4>How it Works</h4>
							<ul type="none">
								<li><a href="#">Enter your location</a></li>
								<li><a href="#">Choose restaurant</a></li>
								<li><a href="#">Choose meal</a></li>
								<li><a href="#">Pay via credit card</a></li>
								<li><a href="#">Wait for delivery</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2">
						<div class="footer-details">
							<h4>Pages</h4>
							<ul type="none">
								<li><a href="#">Search results page</a></li>
								<li><a href="#">User signup page</a></li>
								<li><a href="#">Pricing page</a></li>
								<li><a href="#">Make order</a></li>
								<li><a href="#">Add to cart</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="footer-details">
							<h4>Popular Location</h4>
							<ul type="none" class="town pull-left">
								<li>Sarajevo</li>
								<li>Tuzla</li>
								<li>Zagreb</li>
								<li>Beograd</li>
								<li>Gradacac</li>
							</ul>
							<ul type="none" id="split">
								<li>Split</li>
								<li>Sibenik</li>
								<li>Brcko</li>
								<li>New York</li>
								<li>Los Angeles</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="lower-footer">
					<div class="payment">
						<div class="col-md-3">
							<h2>Payment option</h2>
							<div class="payment-icon">
								<i class="fa fa-cc-paypal" aria-hidden="true"></i>
								<i class="fa fa-cc-mastercard" aria-hidden="true"></i>
								<i class="fa fa-cc-visa" aria-hidden="true"></i>
								<i class="fa fa-cc-stripe" aria-hidden="true"></i>
								<i class="fa fa-btc" aria-hidden="true"></i>
							</div>
						</div>
					</div>
					<div class="address">
						<div class="col-md-4">
							<div class="address-info">
								<h2>Address</h2>
								<p>Concept design of online food order and <br> delivery, planned as resturant directory</p>
							</div>
						</div>
					</div>
					<div class="additional">
						<div class="col-md-5">
							<div class="additional-info">
								<h2>Additional information</h2>
								<p>Join the thousand of restaurants who benifit from having <br> their menu on TakeOff</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<a href="#" class="scrollup text-center"><i class="fa fa-angle-up" aria-hidden="true"></i></a>


	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/lightbox.min.js"></script>

	<script>
		$(document).ready(function(){

			// scrollspy starts
			$('body').scrollspy({ target: '#header' });
			//scrollspy ends

			//Menubar color Begins
			$(window).scroll(function() { 
                if ($(document).scrollTop() > 400) { 
                    $(".navbar-fixed-top").css("background-color", "rgba(0, 0, 0, .3)"); 
                } 
                else {
                $(".navbar-fixed-top").css("background-color", "transparent");
            }
            });
            //Menubar color Ends

            // Go top or scrollup plugin Begins
    		$(window).on('scroll', function(){
				if ($(this).scrollTop() > 400) {
					$('.scrollup').fadeIn();
				} else {
					$('.scrollup').fadeOut();
				}
			})
    		$('.scrollup').on('click', function(){
				$("html, body").animate({ scrollTop: 0 }, 600);
				return false;
			});
			// Go top or scrollup plugin Ends
		});
	</script>
</body>
</html>

