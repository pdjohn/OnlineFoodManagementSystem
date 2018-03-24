 <?php include_once 'profile_header.php'; ?>
<?php

	if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] ==='yes'):
 /*

  user role type :
  0 - member / user 
  1 - admin 
  2 - restaurant 
 */ 
 if(isset($_GET['user_id']) && $_GET['user_id']!='')
      $user_id = $_GET['user_id'];

 // $sql = "SELECT username,user_type FROM users WHERE user_id=$user_id"; 

 //    // var_dump($sql);
 //    // die();
 //    $result = $mysql->query($sql);
    
 //    if(!$result){
 //    echo "Somethign wrong in your query\n";
 //    echo 'Your Erron no'.$mysql->connect_errno.'<br>';
 //    echo 'Your Error'.$mysql->connect_error.'<br>';
 //    exit;
 //    }

 //    while($user = $result->fetch_assoc()){
 //      $username = $user['username'];
 //      $user_type = $user['user_type'];
 //    }

 

 $sql1 = "SELECT * FROM user_info WHERE user_id=$user_id"; 

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
				<form method="post" action="edit_user_profile_process.php" >
<!-- 
					<div class="col-md-7 col-md-offset-3">
						<div class="form-group">
			                 <label for="" class="col-md-3 control-label">User Name</label>

			                 <div class="col-md-9">
			                   <input type="text" class="form-control" name="username" value="<?php echo $username;?>" disabled>
			                 </div>
		                </div>
		            </div> -->

		            <!-- <div class="col-md-7 col-md-offset-3">
						<div class="form-group">
			                 <label for="" class="col-md-3 control-label">Password</label>

			                 <div class="col-md-9">
			                   <input type="password" class="form-control" name="password" placeholder="To change password give pass or leave blank if you dont want to change">
			                 </div>
		                </div>
		            </div> -->

		            

					<div class="col-md-7 col-md-offset-3">
		                <div class="form-group">
			                 <label for="" class="col-md-3 control-label">First Name</label>

			                 <div class="col-md-9">
			                 	<input type="text" class="form-control" name="first_name" value="<?php echo $first_name;?>">
			                 </div>
		                </div>
		            </div>

		            <div class="col-md-7 col-md-offset-3">
		                <div class="form-group">
			                 <label for="" class="col-md-3 control-label">Middle Name</label>

			                 <div class="col-md-9">
			                 	<input type="text" class="form-control" name="middle_name" value="<?php echo $middle_name;?>">
			                 </div>
		                </div>
		            </div>

		            <div class="col-md-7 col-md-offset-3">
		                <div class="form-group">
			                 <label for="" class="col-md-3 control-label">Last Name</label>

			                 <div class="col-md-9">
			                   <input type="text" class="form-control" name="last_name" value="<?php echo $last_name;?>">
			                 </div>
		                </div>
		            </div>

		            <!-- <div class="col-md-7 col-md-offset-3">
		                <div class="form-group">
			                 <label for="" class="col-md-3 control-label">Email</label>

			                 <div class="col-md-9">
			                   <input type="email" class="form-control" name="email" value="<?php echo $email;?>">
			                 </div>
		                </div>
		            </div> -->

		            <div class="col-md-7 col-md-offset-3">
		                <div class="form-group">
			                 <label for="" class="col-md-3 control-label">Short Bio</label>

			                 <div class="col-md-9">
			                   <input type="text" class="form-control" name="short_bio" value="<?php echo $short_bio;?>">
			                 </div>
		                </div>
		            </div>

		            

		            <div class="col-md-7 col-md-offset-3">
		            	<div class="form-group">
			            	<div class="col-md-7 text-center">
			            		<input type="hidden" name="user_id" value="<?php echo $user_id;?>">
			            		<div class="bn">
			            			<button type="submit" class="bttn pull-right">Edit Profile</button>
			            		</div>
			                	
			                </div>
			                
		            	</div>
		            </div>
				</form>
			</div>
			<!-- alert box -->
            <?php if(isset($_GET['error'])):?>
                    <div class="alert alert-danger alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                              Please check your input
                    </div>

                  <?php endif; ?>


                  <?php if(isset($_GET['notification'])):?>
                    <?php if(isset($_GET['notification']) && ($_GET['notification'] =='1' || $_GET['notification'] == '2') ):?>
                            <div class="alert alert-success alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <h4><i class="icon fa fa-check"></i> Alert!</h4>
                               User Has Been Edited Succesfully
                            </div>
                    <?php endif; ?>
                  <?php endif; ?>


		</div>
	</section>

<?php include_once 'user_footer.php'; ?>
<?php else: ?>
<?php header('Location:../login.php?error=1') ;?>
<?php endif; ?>