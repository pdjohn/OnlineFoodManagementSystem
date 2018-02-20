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
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];

			// $first_name = $_POST['first_name'];
			// $middle_name = $_POST['middle_name'];
			// $last_name = $_POST['last_name'];
			// $short_bio = $_POST['short_bio'];
			

			if(isset($_POST['username']) && isset($_POST['password'])){

				if($_POST['username']=='' || $_POST['password']=='' ){
					header('Location: singup.php?error=1');
				}
				else{

					 // $user_profile_photo = $_FILES['user_profile_photo'];
					 // $name = $user_profile_photo['name'];
					 // $path ="../uploads/". basename($name);
					 
					 
					//  if (move_uploaded_file($post_thumbnail['tmp_name'], $path)) {
					//     //echo "Moved";
					//     //die();
					// } else {
					//     //echo "Cant Moved";
					//     //die();
					// }

					
				

					$sql = "INSERT INTO users (username,password,email) VALUE (?,md5(?),?)";
					$statement = $mysql->prepare($sql);

					$statement->bind_param('sss',$_POST['username'],$_POST['password'],$_POST['email']);

					$result = $statement->execute();
					// var_dump($result);
					// die();

					// $sql1 = "INSERT INTO user_info (first_name,middle_name,last_name,short_bio) VALUE (?,?,?,?)";
					// $statement1 = $mysql->prepare($sql1);

					// $statement1->bind_param('ssss',$_POST['first_name'],$_POST['middle_name'],$_POST['last_name'],$_POST['short_bio']);

					// $result1 = $statement1->execute();
					// var_dump($statement1);
					// die();

					if($result){
						header('Location: information.php?notification=1');
					}
					else{
						header('Location: signup.php?error=2');
					}

				}
			}
			// else
			// 	header('Location: signup.php?error=1');

	 ?>

