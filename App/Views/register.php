<div class="container">
	<div class="row">

		<div class="col-md-6 col-md-offset-3">
			<h2 style="color: lightblue" class="text-center"><?php echo $message; ?></h2>
			<h2>Register Your Account</h2>
			<form method="post">
				<div class="form-group">
					<label>Enter Your Email:</label>
					<input class="form-control" type="email" name="email" placeholder="Enter Email..." id="new-user-email" required>
					<span id="new-email-info"></span>
				</div>
				<div class="form-group" id="form-group-firstName">
					<label>Enter Your First Name:</label>
					<input class="form-control" type="text" name="firstName" placeholder="Enter First Name..." id="new-user-firstName" required>
				</div>
				<div class="form-group" id="form-group-lastName">
					<label>Enter Your Last Name:</label>
					<input class="form-control" type="text" name="lastName" placeholder="Enter Last Name..." id="new-user-lastName" required>
				</div>
				<div class="form-group">
					<label>Enter Your Password:</label>
					<input class="form-control" type="password" name="password" placeholder="Enter Password..." id="new-user-password" required>
					<span id="new-password-info"></span>
				</div>
				<div class="form-group">
					<label>Verify Your Password:</label>
					<input class="form-control" type="password" name="verify" placeholder="Verify Password..." id="new-user-verify" required>
					<span id="verify-password-info"></span>
				</div>
				<button type="submit" class="btn btn-info" id="btn-submit-registration">Create Account</button>
		</div>
		
	</div>
</div>