<?php include_once 'profile_header.php'; ?>

<?php 
  if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] ==='yes'):
 /*

  user role type :
  0 - no role 
  1 - admin 
  2 - user 
 */ 

 ?>

 <section id="delete">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="delete-info text-cemter">
          <?php 

  if(isset($_POST['user_id']) && $_POST['user_id']!=''&& $_POST['user_type']!= 1){
      $user_id = $_POST['user_id'];
      $delete = $_POST['delete'];

      if($delete === 'yes'){

        // if($user_id == $_SESSION['user_id']){
        //   echo "You can not delete yourself while you are logged in";
        //   echo '<a href="user_profile.php">'.'Go Back</a>';
        // }
        // else{
          $sql = "DELETE FROM users where user_id=$user_id";
          $result = $mysql->query($sql);

          if($result)
          header('Location: ../index.php');
          else{
            echo "Couldn't delete";
            echo '<a href="user_profile.php"> <br>'.'Go Back</a>';
          }
        //}

      }
      }
      else{
          echo "Couldn't delete admin";
          echo '<a href="user_profile.php"><br>'.'Go Back</a>';
      }
   ?>
        </div>
      </div>
    </div>
  </div>
</section>
  
<?php else: ?>
<?php header('Location:../login.php?error=1') ;?>
<?php endif; ?>