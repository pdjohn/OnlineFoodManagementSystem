<?php 
	include_once 'inc/db.php';
	
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
			$short_bio = $_POST['short_bio'];
			

			if(isset($_POST['first_name']) && isset($_POST['last_name'])){

				if($_POST['first_name']=='' || $_POST['last_name']=='' ){
					header('Location: information.php?error=1');
				}
				else{

					 $user_profile_pic = $_FILES['user_profile_pic'];
					 $name = $user_profile_pic['name'];
					 $path ="../uploads/pp/". basename($name);
					 
					 
					 if (move_uploaded_file($user_profile_pic['tmp_name'], $path)) {
					    //echo "Moved";
					    //die();
					} else {
					    //echo "Cant Moved";
					    //die();
					}

					$name = $user_profile_pic['name'];

					$sql = "INSERT INTO user_info (first_name,middle_name,last_name,user_profile_pic,short_bio) VALUE (?,?,?,?,?) WHERE user_id=$user_id" ;
					
					$statement = $mysql->prepare($sql);

					$statement->bind_param('sssss',$_POST['first_name'],$_POST['middle_name'],$_POST['last_name'],$name,$_POST['short_bio']);

					$result = $statement->execute();
					// var_dump($statement1);
					// die();

					if($result){
						header('Location: user_profile.php?notification=1');
					}
					else{
						header('Location: information.php?error=2');
					}

				}
			}
			// else
			// 	header('Location: signup.php?error=1');

	 ?>

