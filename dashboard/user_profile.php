<?php include_once 'profile_header.php'; ?>

<?php
	// include_once '../inc/db.php';

	if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] ==='yes'):
 /*

  user role type :
  0 - member / user 
  1 - admin 
  2 - restaurant 
 */ 
 // if(isset($_SESSION['user_id']))
 //      $user_id = $_SESSION['user_id'];

  if(isset($_GET['user_id']) && $_GET['user_id']!='')
      $user_id = $_GET['user_id'];

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

 <?php $sql1 = "SELECT * FROM user_info WHERE user_id=$user_id"; 

    // var_dump($sql);
    // die();
    $result1 = $mysql->query($sql1);
    
    if(!$result1){
    echo "Somethign wrong in your query\n";
    echo 'Your Erron no'.$mysql->connect_errno.'<br>';
    echo 'Your Error'.$mysql->connect_error.'<br>';
    exit;
    }

     while($user_info = $result1->fetch_assoc()){
		$first_name = $user_info['first_name'];
		$middle_name = $user_info['middle_name'];
		$last_name = $user_info['last_name'];
		// $active = $_POST['active'];
		$short_bio = $user_info['short_bio'];
    }

 ?>
 
 

	<section id="info">
		<div class="container">
			<div class="row">
				<div class="personal-info">
					<div class="col-md-7 col-md-offset-5">
						<div class="form-group">
			                 <label for="" class="col-md-3 control-label">User Name</label>

			                 <div class="col-md-5">
			                   <?php echo $username;?>
			                 </div>
		                </div>
		            </div>
					<div class="col-md-7 col-md-offset-5">
		                <div class="form-group">
			                 <label for="" class="col-md-3 control-label">First Name</label>

			                 <div class="col-md-5">
			                   <?php echo $first_name;?>
			                 </div>
		                </div>
		            </div>
		            <div class="col-md-7 col-md-offset-5">
		                <div class="form-group">
			                 <label for="" class="col-md-3 control-label">Middle Name</label>

			                 <div class="col-md-5">
			                   <?php echo $middle_name;?>
			                 </div>
		                </div>
		            </div>
		            <div class="col-md-7 col-md-offset-5">
		                <div class="form-group">
			                 <label for="" class="col-md-3 control-label">Last Name</label>

			                 <div class="col-md-5">
			                   <?php echo $last_name;?>
			                 </div>
		                </div>
		            </div>
		            <div class="col-md-7 col-md-offset-5">
		                <div class="form-group">
			                 <label for="" class="col-md-3 control-label">Short Bio</label>

			                 <div class="col-md-5">
			                   <?php echo $short_bio;?>
			                 </div>
		                </div>
		            </div>
		            <div class="col-md-7 col-md-offset-5">
		            	<div class="form-group">
		            		<div class="btns">
		            			<input type="hidden" name="user_id" value="<?php echo $user_id;?>">
				            	<div class="col-md-3">
				                	<a class="bttn" href="edit_user_profile.php">Edit Profile</a>
				                </div>
				                <div class="col-md-4">
				                	<a class="bttn" href="delete_user_profile.php">Delete Profile</a>
				                </div>
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