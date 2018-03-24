<?php

  ob_start();
  session_start();

	include_once '../inc/db.php';

	if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] ==='yes'):
 /*

  user role type :
  0 - no role 
  1 - admin 
  2 - user 
 */ 
 if(isset($_SESSION['user_id']))
      $user_id = $_SESSION['user_id'];

   ?>
  <?php $sql = "SELECT username,user_type FROM users WHERE user_id=$user_id"; 

    // var_dump($sql);
    // die();
    $result = $mysql->query($sql);
    
    if(!$result){
    echo "Somethign wrong in your query\n";
    echo 'Your Erron no'.$mysql->connect_errno.'<br>';
    echo 'Your Error'.$mysql->connect_error.'<br>';
    exit;
    }

    while($user = $result->fetch_assoc()){
      $username = $user['username'];
      $user_type = $user['user_type'];
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home | <?php echo $username ?></title>
	<link rel="stylesheet" type="text/css" href="../css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.tagit.css">
	<link rel="stylesheet" type="text/css" href="css/tagit.ui-zendesk.css">
	<link rel="stylesheet" type="text/css" href="../css/user_header.css">
	<link rel="stylesheet" type="text/css" href="../css/restaurant.css">
</head>
<body >
	<!-- Header section starts -->
	<header id="header">
		<div class="header">
			<?php include_once 'user_header.php'; ?>
		</div>
	</header>
	<!-- /#end of header section -->
	


	<section id="banner">
		<div class="banner-overlay">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-md-offset-3">
						<div class="banner-caption text-center">
							<h1>Your favourite food</h1>
						</div>
					</div>
					<!-- <div class="col-md-10 col-md-offset-2">
						<div class="banner-search">
							<form action="GET">
								<input type="text" placeholder="I would like to eat?">
								<input type="submit" class="btn" value="Feed Me">
							</form>
						</div>
					</div> -->
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
					<!-- <div class="col-md-4">
						<div class="search-filter">
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

						</div>
					</div> -->
					<div class="search-details">
						<div class="col-md-8 col-md-offset-2">
				    		<div class="search-area">
				    			<div class="search-content">
					    			<img src="../images/index/popular-logo.png" alt="img">
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

<?php include_once 'user_footer.php'; ?>
<?php else: ?>
<?php header('Location:../login.php?error=1') ;?>
<?php endif; ?>