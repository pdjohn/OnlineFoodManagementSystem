
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Sign Up</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/orange.css">
  <!-- For login page -->
  <link rel="stylesheet" href="css/login.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
  <div class="container">
    <div class="login-box">
    <div class="login-logo text-center">
      <h1><b>Sign Up</b></h1>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg text-center">Enter restaurant information</p>

      <form action="process.php" method="post">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Username" name="username">
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="restautant_name" placeholder="Restaurant Name">
        </div>
        <div class="form-group has-feedback">
          <input type="file" class="form-control" name="user_profile_pic" placeholder="Profile Photo">
        </div>
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="short_bio" placeholder="Short Bio">
        </div>
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="bio" placeholder="Biography">
        </div>
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="facebook_username" placeholder="Facebook Username">
        </div>
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="twitter_handle" placeholder="Twitter Handle">
        </div>
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="website" placeholder="Website">
        </div>
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="address" placeholder="Address">
        </div>
        <div class="form-group has-feedback">
          <input type="email" class="form-control" name="email" placeholder="Email Address">
        </div>
        <div class="row">
          <!-- <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Remember Me
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat pull-right">Sign Up</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <br>
      <a href="#">I forgot my password</a><br>
      <a href="login.php" class="text-center">Already have a member</a><br>
      <a href="index.php" class="text-center">Back to Home Page</a><br><br>
      

      <?php if(isset($_GET['error'])):?>
        <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                  Sign Up Failed!
        </div>

      <?php endif; ?>


      <?php if(isset($_GET['notification'])):?>
        <?php if($_GET['notification'] == 1):?>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-check"></i> Alert!</h4>
                  Logged Out Successfully
                </div>
        <?php endif; ?>
      <?php endif; ?>

          
    </div>
    <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
  </div> 
  <!-- /.container -->


<!-- jQuery 3 -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-orange',
      radioClass: 'iradio_square-orange',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
