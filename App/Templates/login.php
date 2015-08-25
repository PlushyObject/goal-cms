<div class="container">
	<div class="row">

		<div class="col-md-6 col-md-offset-3">
			<h2 style="color: lightblue" class="text-center"><?php echo $message; ?></h2>
			<h2>Login to GoalCMS</h2>
			<form method="post" action="../App/Controllers/Scripts/user_login.php">
				<div class="form-group">
					<label>Enter Your Email:</label>
					<input class="form-control" type="text" name="email" placeholder="Enter Username..." id="login-username" required>
					<span id="new-username-info"></span>
				</div>
				<div class="form-group">
					<label>Enter Your Password:</label>
					<input class="form-control" type="password" name="password" placeholder="Enter Password..." id="login-password" required>
					<span id="new-password-info"></span>
				</div>
				<button type="submit" class="btn btn-info">Sign In</button>
			</form>	
		</div>
		
	</div>
</div>