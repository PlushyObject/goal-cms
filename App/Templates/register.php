<div class="container">
	<div class="row">

		<div class="col-md-6 col-md-offset-3" style="padding-top: 100px">
			<h2>Register Your Account</h2>
			<form method="post" action="../App/Controllers/Scripts/add_user.php">
				<div class="form-group">
					<label>Create Your Username:</label>
					<input class="form-control" type="text" name="username" placeholder="Enter Username...">
				</div>
				<div class="form-group">
					<label>Create Your Password:</label>
					<input class="form-control" type="password" name="password" placeholder="Enter Password...">
				</div>
				<div class="form-group">
					<label>Verify Your Password:</label>
					<input class="form-control" type="password" name="verify" placeholder="Verify Password...">
				</div>
				<button type="submit" class="btn btn-info">Create Account</button>
			</form>		
		</div>
		
	</div>
</div>