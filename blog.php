<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.tagit.css">
	<link rel="stylesheet" type="text/css" href="css/tagit.ui-zendesk.css">
	<link rel="stylesheet" type="text/css" href="css/blog.css">
</head>
<body>
	<section id="header">
		<div class="header">
			<nav class="navbar navbar-default">
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
							<li class="active page-scroll"><a href="#">1(888)707-2469 <span class="sr-only">(current)</span></a></li>
							<li><a class="page-scroll" href="#">how it works</a></li>
							<li><a class="page-scroll" href="#">testimonial</a></li>
							<li><a class="page-scroll" href="#">pricing</a></li>
							<li><a class="page-scroll" href="#">cart</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav>
		</div>
		<div class="sub-header">
			<div class="container">
				<div class="row">
					<div class="sub-header-area">
						<div class="col-md-12">
							<div class="sub-header-info">
								<div class="sub-header-details">
									<ol class="breadcrumb">
									  	<li><a href="#">Home</a></li>
									  	<li><a href="#">Blog</a></li>
									  	<li class="active">Blog Sample</li>
									</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="blog-area">
						<div class="thumbnail">
			      			<img src="images/blog/blog1.jpg" alt="img">
			      			<div class="caption">
			        			<h3>Future of the food delivery logistics</h3>
			        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
								Mauris  interdum purus at sem ornare sodales.  Morbi leo</p>
			        		</div>
			        			
				        	<div class="review">
			        			<p><span><i class="fa fa-heart-o" aria-hidden="true"></i></span>5742
			        			<span><i class="fa fa-comment" aria-hidden="true"></i></span>50</p>
				        		<div class="order text-right">
				        			<a href="#" class="btn" role="button">Read More</a>
				        		</div>
			        		</div>
			    		</div>
					</div>
					<div class="blog-area">
						<div class="thumbnail">
			      			<img src="images/blog/blog2.jpg" alt="img">
			      			<div class="caption">
			        			<h3>Future of the food delivery logistics</h3>
			        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
								Mauris  interdum purus at sem ornare sodales.  Morbi leo</p>
			        		</div>
			        			
				        	<div class="review">
			        			<p><span><i class="fa fa-heart-o" aria-hidden="true"></i></span>5742
			        			<span><i class="fa fa-comment" aria-hidden="true"></i></span>50</p>
				        			
				        		<div class="order text-right">
				        			<a href="#" class="btn" role="button">Read More</a>
				        		</div>
			        		</div>
			    		</div>
					</div>
					<div class="blog-area">
						<div class="thumbnail">
			      			<img src="images/blog/blog3.jpg" alt="img">
			      			<div class="caption">
			        			<h3>Future of the food delivery logistics</h3>
			        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
								Mauris  interdum purus at sem ornare sodales.  Morbi leo</p>
			        		</div>
			        			
				        	<div class="review">
			        			<p><span><i class="fa fa-heart-o" aria-hidden="true"></i></span>5742
			        			<span><i class="fa fa-comment" aria-hidden="true"></i></span>50</p>
				        			
				        		<div class="order text-right">
				        			<a href="#" class="btn" role="button">Read More</a>
				        		</div>
			        		</div>
			    		</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="search-info">
						<div class="search-filter">
							<div class="filter-head">
								<h5>Blog Categories</h5>
							</div>

						    <div class="input-group">
						      	<input type="text" class="form-control" placeholder="Search articals">
						      	<span class="input-group-btn">
						        	<button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
						      	</span>
						    </div>

							<div class="item-catagory">
								<ul type="none">
									<li><a href="#">Sandwiches</a></li>
									<li><a href="#">Vegetarian</a></li>
									<li><a href="#">Fast Food</a></li>
									<li><a href="#">Thai</a></li>
									<li><a href="#">Salad</a></li>
								</ul>
							</div>
							
							<div class="item-catagory">
								<div class="item-delivery">
									<h5>Popular Tags</h5>
									<form>
							            <ul id="allowSpacesTags"></ul>
							        </form>
							    </div>
							</div>
							<div id="popcat" class="item-catagory">
								<div class="item-delivery">
									<h5>Popular Catagory</h5>
									<form>
							            <ul id="allowSpacesTag"></ul>
							        </form>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="page">
		<div class="container">
			<div class="page-area text-center">
				<nav aria-label="Page navigation">
				  	<ul class="pagination text-center">
				    	<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
	    				<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
					    <li>
				      	<a href="#" aria-label="Next">
				        	<span aria-hidden="true">&raquo;</span>
				      	</a>
				    	</li>
				  	</ul>
				</nav>
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


	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<!-- for tag it plugin -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/tag-it.js" ></script>
	<script type="text/javascript" src="js/populartag.js" ></script>

	
	
</body>
</html>