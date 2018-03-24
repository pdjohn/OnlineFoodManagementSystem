<?php

  ob_start();
  session_start();

	include_once '../inc/db.php';

	if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] ==='yes'):
 /*

  user role type :
  0 - member / user 
  1 - admin 
  2 - restaurant 
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
	<link rel="stylesheet" type="text/css" href="../css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="../css/jquery.tagit.css">
	<link rel="stylesheet" type="text/css" href="../css/tagit.ui-zendesk.css">
	<link rel="stylesheet" type="text/css" href="../css/user_header.css">
	<link rel="stylesheet" type="text/css" href="../css/location.css">

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
							<form action="user_filter.php" method="GET">
								<input type="text" name="location" placeholder="Location?">
								<input type="submit" class="btn" value="Search">
							</form>
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