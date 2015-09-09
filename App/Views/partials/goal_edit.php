
	<form method="post">
		<div class="form-group">
			<label>Goal Title</label>
			<input class="form-control" value="<?php echo $Goal->title ?>" type="text" name="title">
		</div>
		<div class="form-group">
			<label>Goal Description</label>
			<textarea class="form-control" rows="8" name="description"><?php echo $Goal->description ?></textarea>
		</div>
		<div class="form-group">
			<label>Complete?</label> 
			<?php 
				if($Goal->completed == 1 ): 
					$goalCompleteCheck = 'checked';
				else:
					$goalCompleteCheck = '';
				endif;
			?>
			<input type="checkbox" name="completed" <?php echo $goalCompleteCheck ?>>
		</div>
		<div class="form-group">
			<label>Start Date</label>
			<input class="form-control" type="date" name="startDate" value="<?php echo date("Y-m-d", strtotime($Goal->startDate));?>" name="startDate">
		</div>
		<div class="form-group">
			<label>End Date</label>
			<input class="form-control" name="endDate" type="date" value="<?php echo date("Y-m-d", strtotime($Goal->endDate));?>" name="endDate">
		</div>
		<button type="submit" class="btn btn-info btn-lg">Save Goal</button>
	</form>


