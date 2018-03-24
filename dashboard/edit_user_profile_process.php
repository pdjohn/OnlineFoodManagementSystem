<?php 
	include_once '../inc/db.php';
	ob_start();
	session_start();
	if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] ==='yes'):
 /*

	user role type :
	0 - no role 
	1 - admin 
	2 - user 
 */ 

 ?>

	<?php 
		$user_id = $_POST['user_id'];
		$first_name = $_POST['first_name'];
		$middle_name = $_POST['middle_name'];
		$last_name = $_POST['last_name'];
		// $active = $_POST['active'];
		$short_bio = $_POST['short_bio'];

		//$sql_username = "SELECT user_id from users WHERE username ='$username'";
		//$result_username = $mysql->query($sql_username);

		// We can check any user existence using the query above. But here it has no effect on our code. 

			if(isset($_POST['first_name']) && $_POST['first_name']!='' ){

				$sqlblank ="UPDATE user_info SET first_name='$first_name',middle_name='$middle_name',last_name='$last_name',short_bio='$short_bio' WHERE user_id=$user_id";

	
				$result_blank = $mysql->query($sqlblank);
				// var_dump($result_blank);
				// die();
			
			if(!$result_blank){
				header("Location: edit_user_profile.php?user_id=$user_id&error=1");
			}
			else{
				header("Location: user_profile.php?user_id=$user_id&notification=1");
			}		
	}

	 ?>
<?php else: ?>
<?php header('Location:../login.php?error=1') ;?>
<?php endif; ?>