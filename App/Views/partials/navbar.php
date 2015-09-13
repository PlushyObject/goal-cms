<?php 
	if(isset($_SESSION['Email'])):
		$login_link_text = 'Sign Out';
	else:
		$login_link_text = 'Sign In';
	endif;

	$current_user_first_name = User::get_current_user_first_name();
  $current_user_last_name = User::get_current_user_last_name();
?>

<nav class="navbar navbar-default" id="goal-navbar">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Goal CMS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/public_html/">All Goals <span class="sr-only">(current)</span></a></li>
        <li><a href="/public_html/mygoals">My Goals</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
				<li><a href="#">Link</a></li>			
				<li class="dropdown" id="navbar-user-dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<?php echo $current_user_first_name.' '.$current_user_last_name[0].'.' ?> <span class="caret"></span>
					</a>
          <ul class="dropdown-menu">
            <li><a href="/public_html/logout"><?php echo $login_link_text ?></a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>