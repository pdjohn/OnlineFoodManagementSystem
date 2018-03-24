
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
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	
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
							<h1>Order Delivery & Take out</h1>
							<h5>Find new food, restaurant and enjoy</h5>
						</div>
					</div>
					<!-- <div class="col-md-10 col-md-offset-2">
						<div class="banner-search">
							<form action="GET">
								<input type="text" placeholder="Where is your location?">
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

			        				<div class="comment">
			        					<p><span><i class="fa fa-comment" aria-hidden="true"></i></span>50</p>
			        				</div>

			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="col-sm-6 col-md-4">
			    		<div class="thumbnail">
			      			<img src="../images/index/popular/popular2.jpg" alt="img">
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
			        				<div class="comment">
			        					<p><span><i class="fa fa-comment" aria-hidden="true"></i></span>50</p>
			        				</div>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
				  	<div class="col-sm-6 col-md-4">
				    	<div class="thumbnail">
				      		<img src="../images/index/popular/popular3.jpg" alt="img">
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
								<img src="../images/index/popular-logo.png" alt="img">
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
								<img src="../images/index/popular-logo.png" alt="img">
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
								<img src="../images/index/popular-logo.png" alt="img">
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
								<img src="../images/index/popular-logo.png" alt="img">
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
								<img src="../images/index/popular-logo.png" alt="img">
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
								<img src="../images/index/popular-logo.png" alt="img">
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
						<img src="../images/index/mobile.png" alt="img">
					</div>
					<div class="col-md-6 col-md-offset-2">
						<div class="best-content">
							<h1>The Best Food Delivery App</h1>
							<p>Now you can make food happend pretty much wherever you are <br>thanks thanks to the free easy-to-use food delivery</p>
							<div class="play-store pull-left">
								<a href=""><img src="../images/index/playstore.png" alt="img"></a>
							</div>
							<div class="i-store ">
								<a href=""><img src="../images/index/apple.png" alt="img"></a>
							</div>
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