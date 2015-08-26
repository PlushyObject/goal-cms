<div class="col-md-3">
	<h2>Add Goal</h2>
	<form method="post" action="../App/Controllers/Scripts/add_goal.php">
		<div class="form-group">
			<label>Enter a title for your new goal:</label>
			<input class="form-control" type="text" name="title" placeholder="Enter Title...">
		</div>
		<div class="form-group">
			<label>Enter a brief description of your goal:</label>
			<textarea class="form-control" type="password" name="description" placeholder="Enter Description..."></textarea>
		</div>
		<div class="form-group">
			<label>Start Date</label>
			<input class="form-control" type="date" name="startDate">
		</div>
		<div class="form-group">
			<label>End Date</label>
			<input class="form-control" type="date" name="endDate">
		</div>
			<button class="btn btn-info btn-block" type="submit">Submit</button>
	</form>
	<a href="register" class="btn btn-info">Register</a>
</div>