<?php 
include_once 'inc/db.php';

include_once 'header.php';


 ?>

	<section id="banner">
		<div class="banner-overlay">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-md-offset-3">
						<div class="banner-caption text-center">
							<h1>Search your favourite food</h1>
							<h5>Find new food, restaurant and enjoy</h5>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-2">
						<div class="banner-search">
							<form action="" method="GET">
								<input type="text" placeholder="Enter The Restaurant Name">
								<input type="submit" class="btn" value="Search">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="search-result">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="search-result-count pull-left">
						<h5>125 Results so far</h5>
					</div>
					<div class="search-result-catagory pull-right">
						<select>
							<option value="popularity">Sort by popularity</option>
						  	<option value="price">Sort by price</option>
						  	<option value="latest">Sort by latest</option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="search">
		<div class="container">
			<div class="row">
				<div class="search-info">
					<div class="col-md-2">
						<!-- <div class="search-filter">
							<div class="filter-head">
								<i class="fa fa-times" aria-hidden="true"></i>
								<h5>Search Filters</h5>
								<span><i class="fa fa-check pull-right" aria-hidden="true"></i></span>
							</div>

						    <div class="input-group">
						      	<input type="text" class="form-control" placeholder="Search Your favorite food...">
						      	<span class="input-group-btn">
						        	<button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
						      	</span>
						    </div>

							<div class="item-catagory">
								<div>
            						<input id="checkbox-1" class="checkbox-custom" name="sandwitch" type="checkbox" >
            						<label for="checkbox-1" class="checkbox-custom-label">Sandwitch</label>
        						</div>
						        <div>
						            <input id="checkbox-2" class="checkbox-custom" name="vegetarian" type="checkbox">
						            <label for="checkbox-2" class="checkbox-custom-label">Vegetarian</label>
						        </div>
						        <div>
						            <input id="checkbox-3" class="checkbox-custom" name="fastfood" type="checkbox">
						            <label for="checkbox-3" class="checkbox-custom-label">Fast Food</label>
						        </div>
						        <div>
						            <input id="checkbox-4" class="checkbox-custom" name="thai" type="checkbox">
						            <label for="checkbox-4" class="checkbox-custom-label">Thai</label>
						        </div>
						        <div>
						            <input id="checkbox-5" class="checkbox-custom" name="salad" type="checkbox">
						            <label for="checkbox-5" class="checkbox-custom-label">Salad</label>
						        </div>
							</div>
							<div class="item-catagory">
								<div class="item-delivery">
									<h5>Food For</h5>
									<div class="delivery">
							            <input id="radio-1" class="radio-custom" name="radio-group" type="radio">
							            <label for="radio-1" class="radio-custom-label">Delivery</label>
							        </div>
							        <div class="delivery">
							            <input id="radio-2" class="radio-custom" name="radio-group" type="radio">
							            <label for="radio-2" class="radio-custom-label">Pickup</label>
							        </div>
							    </div>
							</div>
							<div class="item-catagory">
								<div class="item-delivery">
									<h5>Popular Tags</h5>
									<form>
							            <ul id="allowSpacesTags"></ul>
							        </form>
							    </div>
							</div>
							<div class="item-catagory">
								<div class="item-delivery">
									<h5>Popular Catagory</h5>
									<form>
							            <ul id="allowSpacesTag"></ul>
							        </form>
							    </div>
							</div>
							<div class="item-catagory">
								<div class="item-delivery">
									<div id="range">
										<label for="amount">Price Range:</label>
  										<input type="text" id="amount">
									</div>
									<div id="slider-range"></div>
							    </div>
							</div>
							<div id="rating" class="item-catagory">
								<div class="item-delivery">
									<h5>Rating</h5>
									<div>
							            <input id="radio-3" class="radio-custom" name="radio-group" type="radio">
							            <label for="radio-3" class="radio-custom-label">
							            	<div class="rating">
						        				<i class="fa fa-star" aria-hidden="true"></i>
						        				<i class="fa fa-star" aria-hidden="true"></i>
						        				<i class="fa fa-star" aria-hidden="true"></i>
						        				<i class="fa fa-star" aria-hidden="true"></i>
						        				<i class="fa fa-star" aria-hidden="true"></i>
						        			</div>
							            </label>
							        </div>
							        <div>
							            <input id="radio-4" class="radio-custom" name="radio-group" type="radio">
							            <label for="radio-4" class="radio-custom-label">
							            	<div class="rating">
						        				<i class="fa fa-star" aria-hidden="true"></i>
						        				<i class="fa fa-star" aria-hidden="true"></i>
						        				<i class="fa fa-star" aria-hidden="true"></i>
						        				<i class="fa fa-star" aria-hidden="true"></i>
						        				<i class="fa fa-star-o" aria-hidden="true"></i>
						        			</div>
							            </label>
							        </div>
							        <div>
							            <input id="radio-5" class="radio-custom" name="radio-group" type="radio">
							            <label for="radio-5" class="radio-custom-label">
							            	<div class="rating">
						        				<i class="fa fa-star" aria-hidden="true"></i>
						        				<i class="fa fa-star" aria-hidden="true"></i>
						        				<i class="fa fa-star" aria-hidden="true"></i>
						        				<i class="fa fa-star-o" aria-hidden="true"></i>
						        				<i class="fa fa-star-o" aria-hidden="true"></i>
						        			</div>
							            </label>
							        </div>
							        <div>
							            <input id="radio-6" class="radio-custom" name="radio-group" type="radio">
							            <label for="radio-6" class="radio-custom-label">
							            	<div class="rating">
						        				<i class="fa fa-star" aria-hidden="true"></i>
						        				<i class="fa fa-star" aria-hidden="true"></i>
						        				<i class="fa fa-star-o" aria-hidden="true"></i>
						        				<i class="fa fa-star-o" aria-hidden="true"></i>
						        				<i class="fa fa-star-o" aria-hidden="true"></i>
						        			</div>
							            </label>
							        </div>
							        
							    </div>
							</div>

						</div> -->
					</div>
					<div class="search-details">
						<div class="col-md-8">
				    		<div class="search-area">
				    			<div class="search-content">
					    			<img src="images/index/popular-logo.png" alt="img">
					    			<h4>Chicken Hut</h4>
					    			<p>Burger, American, Sandwitch, Fast Food, BBQ, Breakfast</p>
					    			<h5>Min $ 10.00</h5>
				    			</div>
				    			<div class="review">
					    			<div class="icons">
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star-half-o" aria-hidden="true"></i>
			        				</div>
			        				<h5><a href="#">150 Reviews</a></h5>
			        				<a href="#" class="bttn" role="button">View menu</a>
		        				</div>
				    		</div>
				    		<div class="search-area">
				    			<div class="search-content">
					    			<img src="images/index/popular-logo.png" alt="img">
					    			<h4>Chicken Hut</h4>
					    			<p>Burger, American, Sandwitch, Fast Food, BBQ, Breakfast</p>
					    			<h5>Min $ 10.00</h5>
				    			</div>
				    			<div class="review">
				    			<div class="icons">
			        				<i class="fa fa-star" aria-hidden="true"></i>
			        				<i class="fa fa-star" aria-hidden="true"></i>
			        				<i class="fa fa-star" aria-hidden="true"></i>
			        				<i class="fa fa-star" aria-hidden="true"></i>
			        				<i class="fa fa-star-half-o" aria-hidden="true"></i>
			        				</div>
			        				<h5>150 Reviews</h5>
			        				<a href="#" class="bttn" role="button">View menu</a>
		        				</div>
				    		</div>
				    		<div class="search-area">
				    			<div class="search-content">
					    			<img src="images/index/popular-logo.png" alt="img">
					    			<h4>Chicken Hut</h4>
					    			<p>Burger, American, Sandwitch, Fast Food, BBQ, Breakfast</p>
					    			<h5>Min $ 10.00</h5>
				    			</div>
				    			<div class="review">
					    			<div class="icons">
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star-half-o" aria-hidden="true"></i>
			        				</div>
			        				<h5>150 Reviews</h5>
			        				<a href="#" class="bttn" role="button">View menu</a>
		        				</div>
				    		</div>
				    		<div class="search-area">
				    			<div class="search-content">
					    			<img src="images/index/popular-logo.png" alt="img">
					    			<h4>Chicken Hut</h4>
					    			<p>Burger, American, Sandwitch, Fast Food, BBQ, Breakfast</p>
					    			<h5>Min $ 10.00</h5>
				    			</div>
				    			<div class="review">
					    			<div class="icons">
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star-half-o" aria-hidden="true"></i>
			        				</div>
			        				<h5>150 Reviews</h5>
			        				<a href="#" class="bttn" role="button">View menu</a>
		        				</div>
				    		</div>
				    		<div class="search-area">
				    			<div class="search-content">
					    			<img src="images/index/popular-logo.png" alt="img">
					    			<h4>Chicken Hut</h4>
					    			<p>Burger, American, Sandwitch, Fast Food, BBQ, Breakfast</p>
					    			<h5>Min $ 10.00</h5>
				    			</div>
				    			<div class="review">
					    			<div class="icons">
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star-half-o" aria-hidden="true"></i>
			        				</div>
			        				<h5>150 Reviews</h5>
			        				<a href="#" class="bttn" role="button">View menu</a>
		        				</div>
				    		</div>
				    		<div class="search-area">
				    			<div class="search-content">
					    			<img src="images/index/popular-logo.png" alt="img">
					    			<h4>Chicken Hut</h4>
					    			<p>Burger, American, Sandwitch, Fast Food, BBQ, Breakfast</p>
					    			<h5>Min $ 10.00</h5>
				    			</div>
				    			<div class="review">
					    			<div class="icons">
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star-half-o" aria-hidden="true"></i>
			        				</div>
			        				<h5>150 Reviews</h5>
			        				<a href="#" class="bttn" role="button">View menu</a>
		        				</div>
				    		</div>
				    		<div class="search-area">
				    			<div class="search-content">
					    			<img src="images/index/popular-logo.png" alt="img">
					    			<h4>Chicken Hut</h4>
					    			<p>Burger, American, Sandwitch, Fast Food, BBQ, Breakfast</p>
					    			<h5>Min $ 10.00</h5>
				    			</div>
				    			<div class="review">
					    			<div class="icons">
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star" aria-hidden="true"></i>
				        				<i class="fa fa-star-half-o" aria-hidden="true"></i>
			        				</div>
			        				<h5>150 Reviews</h5>
			        				<a href="#" class="bttn" role="button">View menu</a>
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

	<section id="restaurant-owner">
		<div class="container">
			<div class="row">
				<div class="owner-info">
					<div class="col-sm-6 col-md-4">
						<div class="owner-details">
							<h4>Add Your Restaurant</h4>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="owner-details">
							<h5>Join the thousand of restaurant who
							benifits having their menu on foodiecalls</h5>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="owner-details">
							<button type="button" class="bttn btn-default">I'm restaurant</button>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>

<?php include_once 'footer.php'; ?>