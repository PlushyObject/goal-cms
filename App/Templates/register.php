<div class="container">
	<div class="row">

		<div class="col-md-6 col-md-offset-3">
			<h2 style="color: lightblue" class="text-center"><?php echo $message; ?></h2>
			<h2>Register Your Account</h2>
<<<<<<< HEAD
			<form method="post" action="../App/Controllers/Scripts/add_user.php" id="registration-form">
				<div class="form-group">
					<label>Create Your Username:</label>
					<input class="form-control" type="text" name="username" maxlength="16" placeholder="Enter Username..." id="new-user-username" required>
					<span id="new-username-info"></span>
=======
			<form method="post" action="../App/Controllers/Scripts/add_user.php">
              <div class="form-group">
					<label>Create Your Email:</label>
					<input class="form-control" type="email" name="email" placeholder="Enter Email..." id="new-user-email" required>
					<span id="new-email-info"></span>
>>>>>>> 866697f57d741199535bef839df92939eceb6ea3
				</div>
				<div class="form-group">
					<label>Create Your Password:</label>
					<input class="form-control" type="password" name="password" placeholder="Enter Password..." id="new-user-password" required>
					<span id="new-password-info"></span>
				</div>
				<div class="form-group">
					<label>Verify Your Password:</label>
					<input class="form-control" type="password" name="verify" placeholder="Verify Password..." id="new-user-verify" required>
					<span id="verify-password-info"></span>
				</div>
<<<<<<< HEAD
				<button type="submit" class="btn btn-info" id="btn-submit-registration">Create Account</button>
=======
				<button type="submit" class="btn btn-info">Create Account</button>
>>>>>>> 866697f57d741199535bef839df92939eceb6ea3
			</form>	
		</div>
		
	</div>
</div>