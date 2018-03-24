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
	<title>Order</title>
	<link rel="stylesheet" type="text/css" href="../css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/jquery.tagit.css">
	<link rel="stylesheet" type="text/css" href="../css/tagit.ui-zendesk.css">
	<link rel="stylesheet" type="text/css" href="../css/user_header.css">
	<link rel="stylesheet" type="text/css" href="../css/order.css">
</head>
<body>
	
	<section id="header">
		<div class="header">
			<?php include_once 'user_header.php'; ?>
		</div>
		
	</section>

	<section id="banner">
		<div class="banner-overlay">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-md-offset-3">
						<div class="banner-caption text-center">
							<h1>Search your favourite food</h1>
							<h5>List of your favourate food you ordered</h5>
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

	<!-- <section id="search-result">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="search-result-count pull-left">
						<h5>125 Results so far</h5>
					</div>
					<div class="search-result-catagory pull-right">
						<select id="sort">
							<option value="popularity">Sort by popularity</option>
						  	<option value="price">Sort by price</option>
						  	<option value="latest">Sort by latest</option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<section id="search">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="search-details">
			    		<div class="result-head text-center">
							<h5>Delicious Hot Foods you selected</h5>
						</div>
						<div class="result-details">
							<div class="search-content">
				    			<img src="../images/bowl.jpg" alt="img">
				    			<h4>Veg Extravaganzaa</h4>
				    			<p>Fast Food, Burger, American</p>
				    			<h5>Chicken Hut</h5>
				    			<h3>$ 19.99</h3>
				    			<input type="number" class="quantity pull-right" name="quality">
			    			</div>
			    			<div class="add-cart pull-right">
			    				<h5>Total:</h5>
			    			</div>
						</div>
			  		</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-center">
					<div class="bn">
						<a href="user_search.php" class="bttn btn-default" type="button">Continue searching</a>
					</div>
				</div>
				<div class="col-md-6 text-center">
					<div class="bn">
						<a href="user_delivery.php" class="bttn btn-default" type="button">I am done ordering</a>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php include_once 'user_footer.php'; ?>
<?php else: ?>
<?php header('Location:../login.php?error=1') ;?>
<?php endif; ?>