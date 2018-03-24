
<nav class="navbar navbar-default">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="logo" href="#"><img src="../images/logo.png" alt="logo-img"></a>
		</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active page-scroll"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
				<li><a class="page-scroll" href="user_search.php">Search</a></li>
				<li><a class="page-scroll" href="user_restaurant.php">Restaurant</a></li>
				<li><a class="page-scroll" href="user_order.php">Order</a></li>
				<li class="dropdown user user-menu">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		              <img src="../uploads/pp/john.jpg" class="user-image" alt="User Image" 
		              >
		              <span class="hidden-xs pull-right"><?php echo $username ?></span>
		            </a>
		            <ul class="dropdown-menu">
		              <li class="user-footer">
		                <div class="pull-left">
		                  <a href="user_profile.php?user_id=<?php echo $user_id ?>" class="btn btn-default btn-flat">View profile</a>
		                </div>
		                <div class="pull-right">
		                  <a href="../logout.php" class="btn btn-default btn-flat">Log out</a>
		                </div>
		              </li>
		            </ul>
		          </li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container -->
</nav>
		
