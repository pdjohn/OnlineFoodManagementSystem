<?php include_once 'profile_header.php'; ?>
<?php

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
 
 

	<section id="info">
		<div class="container">
			<div class="row">
				<form action="edit_user_profile_process.php" method="post">
					<div class="col-md-7 col-md-offset-3">
						<div class="form-group">
			                 <label for="" class="col-md-3 control-label">User Name</label>

			                 <div class="col-md-9">
			                   <input type="text" class="form-control" name="username" value="<?php echo $username;?>" disabled>
			                 </div>
		                </div>
		            </div>
		            <div class="col-md-7 col-md-offset-3">
		                <div class="form-group">
			                 <label for="" class="col-md-3 control-label">City</label>

			                 <div class="col-md-9">
			                   <select>
									<option value="dhaka">Dhaka</option>
								  	<option value="chittagong">Chittagong</option>
								  	<option value="rajshahi">Rajshahi</option>
								  	<option value="khulna">Khulna</option>
								  	<option value="sylhet">Sylhet</option>
								  	<option value="barisal">Barisal</option>
								</select>
			                 </div>
		                </div>
		            </div>
					<div class="col-md-7 col-md-offset-3">
		                <div class="form-group">
			                 <label for="" class="col-md-3 control-label">Address</label>

			                 <div class="col-md-9">
			                 	<input type="text" class="form-control" name="first_name" value="<?php echo $username;?>">
			                 </div>
		                </div>
		            </div>
		            <div class="col-md-7 col-md-offset-3">
		                <div class="form-group">
			                 <label for="" class="col-md-3 control-label">Mobile No:</label>

			                 <div class="col-md-9">
			                   <input type="tel" class="form-control" name="mobile_no" value="01680722103">
			                 </div>
		                </div>
		            </div>
		            <div class="col-md-7 col-md-offset-3">
		                <div class="form-group">
			                 <label for="" class="col-md-3 control-label">Alternate Mobile No:</label>

			                 <div class="col-md-9">
			                   <input type="tel" class="form-control" name="alt_mobile_no" value="01817257862">
			                 </div>
		                </div>
		            </div>
		            <div class="col-md-7 col-md-offset-3">
		            	<div class="form-group">
			            	<div class="bn">
			            		<a href="user_order.php" class="bttn" >Back to order list</a>
			                	<button type="submit" class="bttn pull-right" href="">Checkout</button>
			                </div>
			                
		            	</div>
		            </div>
				</form>
			</div>
		</div>
	</section>

<?php include_once 'user_footer.php'; ?>
<?php else: ?>
<?php header('Location:../login.php?error=1') ;?>
<?php endif; ?>