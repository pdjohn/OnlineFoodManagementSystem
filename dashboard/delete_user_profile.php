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

  $sql = "SELECT username,user_type FROM users WHERE user_id=$user_id"; 

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


 // if(isset($_SESSION['user_id']))
 //      $user_id = $_SESSION['user_id'];

  if(isset($_GET['user_id']) && $_GET['user_id']!='')
      	$user_id = $_GET['user_id'];

   ?>

<section id="delete">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="delete-info text-cemter">
					<h1>Delete profile</h1>
					<h4>Are you Sure you want to delete "<?php echo $username ?>"</h4>
		            <form method="post" action="delete_user_process.php">
		            	<div class="del-ok">
		              		<input type="radio"  name="delete"  value="yes"> Yes
		              	</div>
		              <input type="radio" name="delete" value='no'> No
		              <br>
		              <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
		              <input type="hidden" name="user_type" value="<?php echo $user_type;?>">
		              <br>
		              <input type="submit" class="bttn" value="Delete?">
		            </form>
				</div>
			</div>
		</div>
	</div>
</section>












 <?php include_once 'user_footer.php'; ?>
<?php else: ?>
<?php header('Location:../login.php?error=1') ;?>
<?php endif; ?>