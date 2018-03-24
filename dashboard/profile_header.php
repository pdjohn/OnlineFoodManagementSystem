<?php include_once '../inc/db.php';
  ob_start();
  session_start();
?>

  <?php 
    if(isset($_SESSION['user_id'])){
      $user_id=$_SESSION['user_id'];
    }
    $sql = "SELECT username,user_type FROM users WHERE user_id='$user_id' ";

    $result = $mysql->query($sql);

    if(!$result){
    echo "Somethign wrong in your query\n";
    echo 'Your Erron no'.$mysql->connect_errno.'<br>';
    echo 'Your Error'.$mysql->connect_error.'<br>';
    exit;
    }
    while($user=$result->fetch_assoc()){
      $username=$user['username'];
      $user_type=$user['user_type'];
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
	<link rel="stylesheet" type="text/css" href="../css/profile.css">

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
		<img src="../images/filter/banner.jpg" alt="">
		<div class="banner-overlay">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-md-offset-3">
						<div class="banner-image">
							<img src="../uploads/pp/john.jpg" class="user-image" alt="User Image">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>