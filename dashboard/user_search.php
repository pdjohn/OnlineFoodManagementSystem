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
	<link rel="stylesheet" type="text/css" href="../css/search.css">
	<link rel="stylesheet" type="text/css" href="../css/responsive.css">
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
							<h1>Search your favourite food</h1>
							<h5>Find new food, restaurant and enjoy</h5>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-2">
						<div class="banner-search">
							<form action="GET">
								<input type="text" placeholder="I would like to eat?">
								<input type="submit" class="btn" value="Feed Me">
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
				<div class="search-details">
					<div class="col-sm-6 col-md-4">
			    		<div class="thumbnail">
			      			<img src="../images/index/popular/popular1.jpg" alt="img">
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
			        				<img src="../images/index/popular-logo.png" alt="img">
			        				<h4>Chicken Hut</h4>
			        				<p>5th Avenue, New York</p>
			        				<div class="comment pull-right">
			        					<p><a href=""><span><i class="fa fa-comment" aria-hidden="true"></i></span>50</a></p>
			        				</div>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
					<div class="col-sm-6 col-md-4">
			    		<div class="thumbnail">
			      			<img src="../images/index/popular/popular1.jpg" alt="img">
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
			        				<img src="../images/index/popular-logo.png" alt="img">
			        				<h4>Chicken Hut</h4>
			        				<p>5th Avenue, New York</p>
			        				<div class="comment pull-right">
			        					<p><a href=""><span><i class="fa fa-comment" aria-hidden="true"></i></span>50</a></p>
			        				</div>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="col-sm-6 col-md-4">
			    		<div class="thumbnail">
			      			<img src="../images/index/popular/popular1.jpg" alt="img">
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
			        				<img src="../images/index/popular-logo.png" alt="img">
			        				<h4>Chicken Hut</h4>
			        				<p>5th Avenue, New York</p>
			        				<div class="comment pull-right">
			        					<p><a href=""><span><i class="fa fa-comment" aria-hidden="true"></i></span>50</a></p>
			        				</div>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
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
			        			</div>
			      			</div>
			    		</div>
			  		</div>
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
			        			</div>
			      			</div>
			    		</div>
			  		</div>
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
			        			</div>
			      			</div>
			    		</div>
			  		</div>
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
			        			</div>
			      			</div>
			    		</div>
			  		</div>
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
			        			</div>
			      			</div>
			    		</div>
			  		</div>
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
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<!-- <div class="col-sm-6 col-md-4">
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
			        			</div>
			      			</div>
			    		</div>
			  		</div>
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
			        			</div>
			      			</div>
			    		</div>
			  		</div>
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
			        			</div>
			      			</div>
			    		</div>
			  		</div> -->
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
						<div class="owner-details text-center">
							<button type="button" class="bttn btn-default">I'm restaurant</button>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>

<?php include_once 'user_footer.php'; ?>
<?php else: ?>
<?php header('Location:../login.php?error=1') ;?>
<?php endif; ?>