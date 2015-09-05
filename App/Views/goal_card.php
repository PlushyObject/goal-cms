<div class="well <?php echo $goal_classes ?>" style="margin-top: 15px;">
	<div class="row">
		<div class="col-md-3 text-center">
				<i class="fa fa-trophy"></i>
		</div>
		<div class="col-md-9">
			<h2 style="margin: 5px 0px;"><?php echo $Goal->title; ?></h2>
			<h3 style="margin: 5px 0px;"><?php echo $Goal->creator; ?></h3>
			<p><?php echo $Goal->description; ?></p>
			<p><b>Starting Date: <?php echo date("l, F j", strtotime($Goal->startDate)); ?></b></p>
			<p><b>Ending Date: <?php echo date("l, F j", strtotime($Goal->endDate)); ?></b></p>
			<p><?php echo $Goal->goal_id; ?></p>
		</div>
	</div>
</div>